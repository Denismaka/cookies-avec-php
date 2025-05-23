# cookies-avec-php
# Apprentissage de la Mise en Place de Cookies en PHP

Ce projet est dédié à mon apprentissage de la gestion des cookies dans des applications web en utilisant PHP de manière procédurale.

## Table des Matières

- [Introduction](#introduction)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Exemples de Code](#exemples-de-code)
- [Références](#références)

## Introduction

Les cookies sont des fichiers de données stockés sur le navigateur de l'utilisateur, permettant de conserver des informations entre les requêtes. Ce projet a pour but de m'aider à comprendre comment créer, lire et supprimer des cookies en PHP.

## Installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/Denismaka/cookies-avec-php.git
   ```
2. Accédez au répertoire du projet :
   ```bash
   cd votre-repo
   ```
3. Assurez-vous d'avoir un serveur web avec PHP installé (comme XAMPP, WAMP ou laragon).

## Utilisation

1. Ouvrez le fichier `index.php` dans votre navigateur.
2. Suivez les instructions à l'écran pour expérimenter avec la création, la lecture et la suppression de cookies.

## Exemples de Code

### Création d'un Cookie

Voici un exemple simple de création d'un cookie :

```php
<?php
// Création d'un cookie
setcookie("nom", "valeur", time() + (86400 * 30), "/"); // 86400 = 1 jour
?>
```

### Lecture d'un Cookie

Pour lire un cookie, utilisez le code suivant :

```php
<?php
if(isset($_COOKIE["nom"])) {
    echo "Nom du cookie : " . $_COOKIE["nom"];
} else {
    echo "Le cookie n'est pas défini.";
}
?>
```

### Suppression d'un Cookie

Pour supprimer un cookie, vous pouvez faire cela :

```php
<?php
setcookie("nom", "", time() - 3600, "/"); // Supprime le cookie
?>
```

## Références

- [Documentation PHP sur les cookies](https://www.php.net/manual/fr/function.setcookie.php)

---

## Contact
Pour toute question ou collaboration, n'hésitez pas à me contacter :

Email : makadenis370@gmail.com
Téléphone : +243818252385, +243997435030.
Réseaux sociaux : Suivez-moi sur https://twitter.com/MakaDenis3, https://www.linkedin.com/in/Denismaka, https://github.com/Denismaka, https://www.facebook.com/Denismaka

Ce projet est un excellent moyen pour moi d'apprendre et de pratiquer la gestion des cookies en PHP !.
