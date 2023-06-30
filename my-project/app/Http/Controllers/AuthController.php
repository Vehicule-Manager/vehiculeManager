<?php

namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use App\Models\User;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    /**
     * @OA\Post(
     *     path="/login",
     *     summary="Authentification de l'utilisateur",
     *     description="Authentification de l'utilisateur",
     *     operationId="authUser",
     *     tags={"Authentification"},
     *     @OA\RequestBody(
     *         description="Informations d'authentification",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
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
     *     @OA\Response(
     *         response="200",
     *         description="Authentification réussie",
     *         @OA\JsonContent(
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
     *     @OA\Response(
     *         response="400",
     *         description="Information de connexion erronée",
     *         @OA\JsonContent(
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
        $request->validate([
            'mail' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('mail', 'password');

        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);

    }
    /**
     * Register a new user
     *
     * @OA\Post(
     *     path="/register",
     *     tags={"Authentification"},
     *     security={{"bearerAuth":{}}},
     *     summary="Register a new user",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(property="name",type="string",description="User's name",example="John"),
     *                 @OA\Property(property="firstname",type="string",description="User's firstname",example="Doe"),
     *                 @OA\Property(property="mail",type="string",description="User's email address",example="johndoe@example.com"),
     *                 @OA\Property(property="password",type="string",description="User's password",example="Password_123"),
     *                 @OA\Property(property="password_confirmation",type="string",description="User's password confirmation",example="Password_123"),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response="201",
     *         description="User successfully registered",
     *         @OA\JsonContent(
     *             @OA\Property(property="message",type="string",example="User successfully registered"),
     *             @OA\Property(property="user",type="object",
     *               @OA\Property(property="name",type="string", example="John"),
     *               @OA\Property(property="firstname",type="string", example="Doe"),
     *               @OA\Property(property="mail",type="string", example="johnDoe@example.com"),
     *               @OA\Property(property="roles_id",type="integer", example="1"),
     *               @OA\Property(property="types_id",type="integer", example="1"),
     *               @OA\Property(property="updated_at",type="date-time", example="2020-05-06T15:00:00.000000Z"),
     *               @OA\Property(property="created_at",type="date-time", example="2020-05-06T15:00:00.000000Z"),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Validation error",
     *         @OA\JsonContent(
     *             @OA\Property(property="message",type="string",example="The given data was invalid"),
     *             @OA\Property(property="errors",type="object",description="Object containing all the validation errors",                 example={
     *                     "name": {
     *                         "The name field is required."
     *                     },
     *                     "mail": {
     *                         "The mail field is required.",
     *                         "The mail field must be a valid email address.",
     *                         "The mail has already been taken."
     *                     },
     *                     "password": {
     *                         "The password field is required."
     *                     }
     *                 }
     *             )
     *         )
     *     )
     * )
     */
    public function register(Request $request){
        $request->validate([
            'mail' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'mail' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = Auth::login($user);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    /**
     *
     * @OA\Post(
     *     path="/logout",
     *     summary="Déconnecte l'utilisateur actuellement authentifié",
     *     tags={"Authentification"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Message de réussite",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Utilisateur déconnecté avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Erreur d'authentification",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="Token is Invalid")
     *         )
     *     )
     * )
     */

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
     *     @OA\Response(response=200, description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="connected"),
     *             @OA\Property(property="access_token", type="string"),
     *             @OA\Property(property="token_type", type="string"),
     *             @OA\Property(property="expires_in", type="integer", description="Expiration time in seconds")
     *         )
     *     ),
     *     @OA\Response(response=401,description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }

}
