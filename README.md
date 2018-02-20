Symfony Application CRUD
========================

Exemple pratique 

1 - Intsallation Boostratp 4 avec Bower 
2 - Creation Bundle


1 ere etape install boostrap to symfony projet
--------------
"Windows"

* installer **_node.js_**
* installer git pour télécharger les fichier 
* la commande suivante pour installer Bower
 : « npm install -g bower ».
  L'option -g vous permet d'installer Bower de façon globale sur votre ordinateur et de le rendre accessible n'importe où
* creation fichier .bowerrc 
--------------
{
  "directory": "web/assets/vendor/"
}
--------------

* tape la commande suivante pour installer boostarp sous le dossier web/assests/vendor

 bower install --save bootstrap

2 eme creation un bundle avec la commande suivante 
--------------
"Symfony 2.8.*"

php app/console generate:bundle

le Bundle sous la forme 
Plateforme/FrontofficeBundle

-> Plateforme c'est le pacakge en Java
-> Frontoffice le dossier qui en va travail 
