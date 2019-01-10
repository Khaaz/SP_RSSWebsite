# RSSWebsite

### SETUP
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
