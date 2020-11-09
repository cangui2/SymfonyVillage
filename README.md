# Project Village

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)


# New Features!

  - Categorie Fonctionnelle
  - Inscription utilisateur et admin Fonctionnelle 
  - Panier fonctionnelle
  - Validation Commande fonctionnelle
  - Page admin fonctionnelle





### Tech

Dillinger uses a number of open source projects to work properly:

* [Symfony 5](https://symfony.com/) - HTML enhanced for web apps!
* [Popper Js](https://popper.js.org/) - awesome web-based text editor
* [Boostrap v4](https://getbootstrap.com/) - Markdown parser done right. Fast and easy to extend.
* [jQuery] - duh



### Installation
Pre-requis
* [Composer](https://getcomposer.org/)
* [Yarn](https://yarnpkg.com/)
* [Symfony server](https://symfony.com/download)
* [Mysql 5.5 minimum]
* [Php 7.2.5 minimum]
Telecharger avec git le clone du project.
Ouvrez le dossier symfonyVillage avec votre IDE et lancer une commande CMD .

```sh
$ composer install
$ composer require symfony/webpack-encore-bundle
$ yarn install
$ yarn add @symfony/webpack-encore --dev
$ composer require easycorp/easyadmin-bundle
```
Aller dans le fichier .env et parametré les accées a la base de donnée sur la ligne . (voir exemple si dessous.)
```
DATABASE_URL=mysql://root:password@127.0.0.1:3306/dbname?serverVersion=5.7
```
Une fois que toutes les dependances sont bien installer, lancer Mysql est crée une base de donnée nomée "village".
Dans votre IDE et sur votre Termnial CMD lancer les commandes suivante afin de crée les tables de la bases.

```sh
$ php bin/console doctrine:schema:validate
$ php bin/console doctrine:shema:update --force
```



License
----

Canguilieme Julien 

