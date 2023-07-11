# 🚗 Véhicule Manager

## ![Docker](https://img.shields.io/badge/-Docker-black?style=flat-square&logo=docker) Commandes Docker

- Démarrer docker : docker-compose up
- voir les conteneurs : docker ps
- Démarrer un service : docker exec -it <nom du conteneur> bash
- Connexion BDD : mysql -h < Host > -u < user > -p < password >

## ![MariaDB](https://img.shields.io/badge/MariaDB-black?style=flat-square&logo=mariadb) Commandes débuter le projet 

- Démarrer docker : docker-compose up
- Générer le vendor : docker compose run laravel composer install
- Faire un migrate : docker-compose run laravel php artisan migrate
- Commande pour générer les seeders : docker compose run laravel php artisan db:seed

## ![MariaDB](https://img.shields.io/badge/MariaDB-black?style=flat-square&logo=mariadb) Commandes Database

- créer un controller : docker compose run laravel php artisan make:controller < nom du controller >
- Créer un model + migration : docker compose run laravel php artisan make:model < nom du model > -m
- Faire un migrate : docker compose run laravel php artisan migrate
- Commande pour generate swagger : sudo docker-compose run laravel php artisan l5-swagger:generate
- Commande pour générer les seeders : docker compose run laravel php artisan db:seed

## ![MariaDB](https://img.shields.io/badge/MariaDB-black?style=flat-square&logo=mariadb) Commandes pour Auth

- Générer la clé jwt : docker compose run laravel php artisan jwt:secret

## ![GitHub](https://img.shields.io/badge/-GitHub-181717?style=flat-square&logo=github) Commandes GitHub de base

- Créer une branche github et aller dessus : git checkout -b < nom de la branche >
- Stocker les modification : git stash
- Pull les modif sur la branche : git pull --rebase
- Récupérer les modifications du stash : git stash pop
- Commit avec add les modifs dans le fichier : git commit -a -m" < le message > "
- Push la branche : git push -u origin main
- Pour naviguer entre les branches github : git checkout < nom de la branche >

## ![GitHub](https://img.shields.io/badge/-GitHub-181717?style=flat-square&logo=github) Commandes GitHub pour rebase

- aller sur la branche main: git checkout main
- pull le modification sur main: git pull --rebase
- aller sur sa branche : git checkout < nom de la branche >
- pull les mofication : git fetch --all && git reset --hard origin/< nom de la branche >
- lancer le rebase : git rebase origin/main
- après avoir réaliser les modification : git rebase --continue
- push le rebase sur Github : git push -f 


## ![GitHub](https://img.shields.io/badge/-GitHub-181717?style=flat-square&logo=github) Lien vers repo du projet
- Repo Front : https://github.com/Vehicule-Manager/Front-Vehicule-Manager
- Repo Mobile : https://github.com/Vehicule-Manager/Vehicule-manager-mobile
- Repo Desktop : https://github.com/Vehicule-Manager/Vehicule-manager-desktop
- Lien Notion : https://concrete-grouse-96d.notion.site/Promo-CDA-5215121ca7c74086b09c62615c765575
- Lien Figma : https://www.figma.com/file/xOUedZPrkebs9HFc5jHrAx/CDA-Project-Location

## Utilisateur Test

- Mail : admin@test.fr
- Password : Vehicle80!
