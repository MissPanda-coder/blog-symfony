# Blog Symfony

Ce dépôt contient le code source d'un blog développé avec Symfony. Ce blog permet aux utilisateurs de créer, afficher, mettre à jour et supprimer des articles.


## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants sur votre système :

- PHP
- Composer
- Symfony CLI
- Un serveur de base de données (MySQL)


## Installation

1. Clonez ce dépôt sur votre machine locale : git clone https://github.com/MissPanda-coder/blog-symfony.git

2. Installez les dépendances du projet en exécutant la commande suivante à la racine du projet : composer install

3. Configurez votre base de données dans le fichier `.env` en spécifiant les informations de connexion.

4. Créez la base de données en utilisant la commande Symfony : symfony console doctrine:database:create

5. Exécutez les migrations pour créer les tables de base de données : symfony console doctrine:migrations:migrate


## Utilisation

Pour exécuter l'application Symfony, utilisez la commande suivante à la racine du projet : symfony server:start

Vous pouvez ensuite accéder à l'application dans votre navigateur à l'adresse [http://localhost:8000](http://localhost:8000).


## Auteurs

- Adeline A. - (https://github.com/MissPanda-coder)







