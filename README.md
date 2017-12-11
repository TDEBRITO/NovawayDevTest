NovawayDevTest
==============

## Cadre de développement

* Suite au brief de Novaway test de développement

## Installation

* Git clone du projet
* php bin/console doctrine:database:create
* php bin/console doctrine:schema:update --force
* //php bin/console doctrine:migrations:migrate

## Informations pratiques

* La plateforme admin est disponible sur /admin
* Les accès à la plateforme admin sont id: admin mdp: admin

## Commentaires

* Mise en place de la creéation et affichage des produits
* WIP - mise en place du service pour alerte de mots-clès et envoi de mail
* A faire: Implémenter le moteur de recherche
* Terminer edit/delete des produits
* Mettre en place une factorisation du code existant
* Au niveau des entitées, il reste à corriger quelques détails, notament les acteurs (prévus à la base comme un array que j'ai choisi d'implementer comme 1 champ par souci de temps), de même pour le type d'articles qui est resté en dur.

ENJOY!

