# Cyberpunk TCG

## Présentation

**Cyberpunk TCG** est une application web permettant de gérer une plateforme d'emprunt de cartes à collectionner inspirées de l'univers Cyberpunk.

Les utilisateurs peuvent s'inscrire pour devenir adhérents, consulter le catalogue des cartes disponibles, emprunter des exemplaires et les restituer dans les délais prévus.

L'objectif est de faciliter la gestion des cartes, des adhérents et des emprunts grâce à une base de données relationnelle.

## Fonctionnalités principales

L'application permettra de :

- Consulter le catalogue des cartes Cyberpunk TCG.
- Consulter les caractéristiques et statistiques des cartes (type, coût, RAM, puissance, rareté, effet).
- Consulter les exemplaires disponibles.
- Créer un compte adhérent et s'authentifier.
- Emprunter un exemplaire disponible.
- Enregistrer la restitution d'un exemplaire.
- Consulter ses emprunts en cours et son historique.

## Utilisateurs

Les **adhérents** peuvent créer un compte, se connecter, consulter le catalogue, emprunter des cartes et suivre leurs emprunts.

Une gestion administrative pourra également être mise en place afin de gérer les cartes, les exemplaires et les adhérents.

## Opération métier principale

L'opération principale est **l'emprunt d'un exemplaire de carte par un adhérent**.

Chaque emprunt enregistre :
- L'adhérent concerné.
- L'exemplaire emprunté.
- La date d'emprunt.
- La date de retour prévue.
- La date de retour réelle.

Lorsqu'un exemplaire est emprunté, sa disponibilité passe à `FALSE`. Lorsqu'il est restitué, elle repasse à `TRUE`.

## Modèle de données

La base de données `cyberpunk_tcg` est composée de six tables principales :

- **categorie :** permet de classer les cartes par catégorie.
- **carte :** contient les informations générales des cartes (nom, description, série et catégorie).
- **statistique :** regroupe les caractéristiques de chaque carte (type, coût, RAM, puissance, effet et rareté).
- **exemplaire :** représente chaque copie physique d'une carte et indique son état et sa disponibilité.
- **adherent :** contient les informations des utilisateurs inscrits (nom, prénom, e-mail et mot de passe).
- **emprunt :** enregistre les emprunts et les restitutions des exemplaires.

### Relations principales

- Une catégorie peut contenir plusieurs cartes.
- Une carte peut posséder plusieurs exemplaires.
- Une carte possède un ensemble de statistiques.
- Un adhérent peut effectuer plusieurs emprunts.
- Un exemplaire peut être emprunté plusieurs fois au cours du temps.

## Authentification et sécurité

Chaque adhérent possède une adresse e-mail unique et un mot de passe pour accéder à son compte.

Les mots de passe doivent être stockés sous forme hachée afin de garantir la sécurité des utilisateurs.

## Évolutions possibles

Le projet pourra évoluer avec de nouvelles fonctionnalités :

- Ajouter une recherche et des filtres dans le catalogue.
- Ajouter les illustrations des cartes.
- Mettre en place une interface d'administration.
- Ajouter un système de notifications pour les retours.
- Afficher des statistiques sur les emprunts.

## Objectifs pédagogiques

Ce projet est réalisé dans le cadre des études informatiques. Il permet de mettre en pratique :

- La conception d'une base de données relationnelle.
- La création et la gestion de tables SQL.
- La gestion des relations entre les données.
- Le développement de fonctionnalités CRUD.
- La mise en place d'une authentification.
- La gestion d'une logique métier autour des emprunts et des restitutions.