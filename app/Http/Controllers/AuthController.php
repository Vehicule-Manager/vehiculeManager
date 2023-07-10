<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\JWTAuth;

/**
 * @OA\SecurityScheme(
 *   securityScheme="bearerAuth",
 *   type="http",
 *   scheme="bearer",
 *   bearerFormat="JWT",
 * )
 */
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * @OA\Post(
     *     path="/login",
     *     summary="Authentification de l'utilisateur",
     *     description="Authentification de l'utilisateur",
     *     operationId="authUser",
     *     tags={"Authentification"},
     *
     *     @OA\RequestBody(
     *         description="Informations d'authentification",
     *         required=true,
     *
     *         @OA\MediaType(
     *             mediaType="application/json",
     *
     *             @OA\Schema(
     *
     *                 @OA\Property(
     *                     property="mail",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="string"
     *                 )
     *             )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response="200",
     *         description="Authentification réussie",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(
     *                 property="access_token",
     *                 type="string"
     *             ),
     *             @OA\Property(
     *                 property="token_type",
     *                 type="string",
     *                 example="bearer"
     *             ),
     *             @OA\Property(
     *                 property="expires_in",
     *                 type="integer",
     *                 example="3600"
     *             )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response="400",
     *         description="Information de connexion erronée",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(
     *                 property="success",
     *                 type="boolean",
     *                 example=false
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Information de connexion erronée"
     *             )
     *         )
     *     )
     * )
     */
    public function login(Request $request)
    {
        $credentials = $request->only('mail', 'password');
        $token = null;

        $validator = Validator::make($credentials, [
            'mail' => 'required|email',
            'password' => ['required', 'string', 'min:6', 'regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = user::where('mail', $request->mail)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            if (! $token = Auth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Information de connexion erronée',
                ], 400);
            } else {
                return $this->respondWithToken($token);
            }

        } else {
            $response = ['message' => 'Information de connexion erronée'];

            return response()->json($response, 422);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'mail' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'mail' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = JWTAuth::login($user);

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ],
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    /**
     * @OA\Get(
     *     path="/refresh",
     *     tags={"Authentification"},
     *     summary="Refresh the current JWT token.",
     *     operationId="refreshToken",
     *     security={{"bearerAuth":{}}},
     *
     *     @OA\Response(response=200, description="Successful operation",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="connected"),
     *             @OA\Property(property="access_token", type="string"),
     *             @OA\Property(property="token_type", type="string"),
     *             @OA\Property(property="expires_in", type="integer", description="Expiration time in seconds")
     *         )
     *     ),
     *
     *     @OA\Response(response=401,description="Unauthorized",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="error", type="string"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'message' => 'connected',
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);
    }

    /**
     * @OA\Get(
     *     path="/user-profile",
     *     tags={"User"},
     *     summary="Obtenir le profil de l'utilisateur actuel.",
     *     operationId="obtenirProfilUtilisateur",
     *     security={{"bearerAuth":{}}},
     *
     *     @OA\Response(
     *         response=200,
     *         description="Opération réussie",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(
     *                 property="user",
     *                 type="object",
     *                 description="objet contenant les informations de l'utilisateur",
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="login", type="string", example="Doe"),
     *                 @OA\Property(property="mail", type="string", example="jhondoe@example.com"),
     *                 @OA\Property(property="id_roles", type="integer", example=1),
     *                 @OA\Property(property="created_at", type="date-time", format="date-time", example="2023-04-06T12:16:12.000000Z"),
     *                 @OA\Property(property="updated_at", type="date-time", format="date-time", example="2023-04-06T12:16:12.000000Z")
     *             ),
     *          ),
     *     ),
     *
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="error", type="string"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */
    public function userProfile()
    {
        $user = auth()->user()->load('role');

        return response()->json([
            'message' => 'success',
            'user' => $user,
        ]);
    }

    /**
     * @OA\Get(
     *     path="/check-token",
     *     tags={"Authentification"},
     *     summary="Refresh the current JWT token.",
     *     operationId="checkUserToken",
     *     security={{"bearerAuth":{}}},
     *
     *     @OA\Response(response=200, description="Successful operation",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="connected"),
     *         )
     *     ),
     *
     *     @OA\Response(response=400,description="disconnected",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="error", type="string"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */
    public function checkUserToken()
    {
        try {
            // Récupérer le token de l'utilisateur connecté
            $token = JWTAuth::parseToken();

            // Vérifier si le token est valide et récupérer l'utilisateur associé
            $user = $token->authenticate();

            if ($user) {
                // Utilisateur connecté avec un token valide
                return response()->json([
                    'status' => 'connected',
                ]);
            } else {
                // Token invalide ou utilisateur non connecté
                return response()->json([
                    'status' => 'disconnected',
                ]);
            }
        } catch (JWTException $e) {
            // Erreur lors de la récupération ou de la vérification du token
            return false;
        }
    }
}
