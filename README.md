<h1>🚗 Véhicule Manager</h1>

### ![Docker](https://img.shields.io/badge/-Docker-black?style=flat-square&logo=docker) Commandes Docker

- Démarrer docker - docker-compose up
- voir les conteneurs - docker ps
- Démarrer un service - docker exec -it <nom du conteneur> bash
- Connexion BDD - mysql -h < Host > -u < user > -p < password >

 
### ![MariaDB](https://img.shields.io/badge/MariaDB-black?style=flat-square&logo=mariadb) Commandes MariaDB

 - show databases (voir les BDDS)
 - Show tables (voir les tables)

Migration

- Créer un model + migration : docker-compose run myapp php artisan make:model < nom du model > -m
- Faire un migrate : docker-compose run laravel php artisan migrate

- Commande pour generate swagger : sudo docker-compose run laravel php artisan l5-swagger:generate

- Commande pour générer les seeders : docker compose run laravel php artisan db:seed
  
 ### ![GitHub](https://img.shields.io/badge/-GitHub-181717?style=flat-square&logo=github) Commandes GitHub
 
 - Créer une branche github et aller dessus : git checkout -b < nom de la branche >
 - Stocker les modification : git stash 
 - Pull les modif sur la branche : git pull --rebase 
 - Récupérer les modifications du stash : git stash pop
 - Commit avec add les modifs dans le fichier : git commit -a -m" < le message > "
 - Push la branche : git push -u origin main
 
 - Pour naviguer entre les branches github : git checkout < nom de la branche >


- Repo Front : https://github.com/Vehicule-Manager/Front-Vehicule-Manager
 - Repo Mobile : https://github.com/Vehicule-Manager/Vehicule-manager-mobile
 - Repo Desktop : https://github.com/Vehicule-Manager/Vehicule-manager-desktop
 - Lien Notion : https://concrete-grouse-96d.notion.site/Promo-CDA-5215121ca7c74086b09c62615c765575
 - Lien Figma : https://www.figma.com/file/xOUedZPrkebs9HFc5jHrAx/CDA-Project-Location

 ### Utilisateur Test

 Mail : admin@test.fr
 Password : Vehicle80!


  

