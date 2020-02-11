# RSSWebsite [SP]

+ **Category**: School Project
+ **Status**: Discontinued

## **Overview**

This project is a website in php that parses RSS feed from several news website and display them in the front page.  
News website can be chosen via an admin dashboard. News are parsed automatically by the application and added to a Database, then displayed in the main page. All news are paginated and sorted by most recent.

## **Goal / Requirements**

We had to create a web application in php that would parse RSS feed and display them in a dynamic webpage.  
We had to follow a MVC architectural pattern to write our application.  
The website had to be written in vanilla php. We just used Twig as template engine but nothing else.

We took particular care about code quality and tried to write a nice application with separation of concerns, OOP principles and MVC pattern.

We wrote a pagination system to only display a specific number of news per page.  
We implemented a full account system which allow admins to add or remove news website from the list (list of website where we are gettings news from).

## **Technologies**

+ PHP 7
+ Twig (via php composer)
+ HTML / CSS
+ MySQL
+ phpMyAdmin
+ MVC pattern
+ RSS scraping

Script responsible from parsing RSS data should be ran regularly (probably via cron job).

## **SETUP**

Copier `config.template.json` (src/Configs) et le coller avec le nom `config.json`.  
Remplir les champs avec les infos nécessaires.  

```
{
  "db": "mysql:host=berlin.iut.local;dbname=dblarossi",
  "login": "larossi",
  "password": "achanger"
}
```

Le fichier pour creer la base de donnée s'appelle `dblarossi.sql`.  

Le parser n'est pas activé par default. Pour le lancer il suffit de dé-commenter `require "testparser.php";` dans src/index.php.  
Il faudrait le lancer comme un service exterieur (par exemple avec CRON).  

Pour ajouter un admin, il est possible d'utiliser le script addadmin.php. (décommenter `require 'addadmin.php';` dans index.php). Ce script peut etre edité pour changer de login/mot de passe.  
Par défault l'admin dans la base de donné est:  
login: lobellec  
password: lobellec  
