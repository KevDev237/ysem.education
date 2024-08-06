
---
# English Version
---

# Showcase Website for YSEM

## Introduction
This project is a showcase website for YSEM. We have adopted an MVC architecture for its development, despite the absence of models. The project is built using PHP and utilizes Tailwind CSS for styling.

## Technologies Used
- **Backend**: PHP 7.4+
- **Frontend**: HTML5, JavaScript (ES6+)
- **CSS Framework**: Tailwind CSS
- **Icons**: Font Awesome

## Project Structure

### `index.php` File
- Acts as a router for all incoming URLs to the site.

### `.htaccess` File
- Configures the server to redirect all requests to the `index.php` router file.

### `config` Directory
- Contains essential elements for the site's development.
- Includes the `routes.php` file, which defines the routing configuration.

### Routing System
The routing system is defined in `config/routes.php`. It supports both static and dynamic routes, as well as different HTTP methods. Here's a detailed explanation of how to define routes:

```php
return [
    // Definition
    'path' => [
        'METHOD' => 'functionName',
    ],
    // Static routes
    '/' => [
        'GET' => 'showHome',
    ],
    '/contact' => [
        'GET' => 'showContact',
        'POST' => 'submitContactForm',
    ],
    
    // Dynamic routes
    '/shop/product/(\d+)/([^/]+)' => [
        'GET' => 'showViewProduct',
        'POST' => 'addToCart',
    ],
    
    // Routes with fixed parameters
    '/about' => [
        'GET' => function() {
            showAbout('Our Story', 2023);
        },
    ],
];
```

- **Static Routes**: Define a fixed path and associate it with HTTP methods and corresponding handler functions.
- **Dynamic Routes**: Use regular expressions to capture parts of the URL. Captured values are passed as arguments to the handler function.
- **Fixed Parameter Routes**: Use closures to call functions with predefined parameters, allowing you to pass fixed data to your handlers without extracting it from the URL.

### Naming Conventions
- The naming convention used is camelCase.
- The development approach is procedural.
- All links are relative to `index.php`.

## Directory Structure

### `src` Directory
The site is located in the `src` directory and is organized into three main subdirectories:

#### `controllers`
- Contains the different controllers, with each page having its own controller to avoid confusion.
- Each function in the controllers responsible for displaying content must have the following variables:
  ```php
  $pageInfo = [
      'titlePage' => '???? | YSEM',
      'name' => 'viewProduct',
  ];
  ```
  Before calling the relevant file:
  ```php
  require_once('src/views/pages/home.php');
  ```

#### `static`
- Contains images, CSS, JavaScript, libraries (classes occasionally created if necessary during development), and FontAwesome for icons used during offline development.
- Tailwind CSS is used for styling. Make sure to include the Tailwind CSS file in your project.
- The `head` contains a commented link to the external library for the icons.

#### `views`
- Contains all the site's views, organized into subdirectories:
  - **template**: Contains the site's skeleton (`base.php`, `head.php`, `header.php`, `navbar.php`, `footer.php`, `foot.php`).
  - **pages**: Contains the pages using the templates.
  - **layouts** or **components**: Contains UI elements that are regularly used across the site.

<!-- ## Setting Up Tailwind CSS
1. Install Node.js and npm if you haven't already.
2. Initialize your project: `npm init -y`
3. Install Tailwind CSS: `npm install tailwindcss`
4. Create a Tailwind config file: `npx tailwindcss init`
5. Build your CSS file: `npx tailwindcss build src/static/css/tailwind.css -o src/static/css/styles.css`

Make sure to include the compiled CSS file in your HTML. -->

## Final Remarks
- Dynamic routes are accepted and can be easily defined in the routing configuration.
- The naming convention and development approach must be followed to maintain code consistency and readability.
- Utilize Tailwind CSS classes for styling to ensure consistent design across the site.

---
# Version Francais
---

# Site Vitrine pour YSEM

## Introduction
Ce projet est un site vitrine pour YSEM. Nous avons adopté une architecture MVC pour son développement, malgré l'absence de modèles. Le projet est construit en utilisant PHP et utilise Tailwind CSS pour le style.

## Technologies Utilisées
- **Backend** : PHP 7.4+
- **Frontend** : HTML5, JavaScript (ES6+)
- **Framework CSS** : Tailwind CSS
- **Icônes** : Font Awesome

## Structure du Projet

### Fichier `index.php`
- Sert de routeur pour toutes les URL entrantes dans le site.

### Fichier `.htaccess`
- Configure le serveur pour rediriger toutes les requêtes vers le fichier routeur `index.php`.

### Dossier `config`
- Contient les éléments essentiels au développement du site.
- Inclut le fichier `routes.php`, qui définit la configuration des routes.

### Système de Routage
Le système de routage est défini dans `config/routes.php`. Il prend en charge les routes statiques et dynamiques, ainsi que les différentes méthodes HTTP. Voici une explication détaillée de la façon de définir les routes :

```php
return [
    // Definition
    'chemin' => [
        'METHOD' => 'nomDeLaFonction',
    ],
    // Routes statiques
    '/' => [
        'GET' => 'showHome',
    ],
    '/contact' => [
        'GET' => 'showContact',
        'POST' => 'submitContactForm',
    ],
    
    // Routes dynamiques
    '/shop/product/(\d+)/([^/]+)' => [
        'GET' => 'showViewProduct',
        'POST' => 'addToCart',
    ],
    
    // Routes avec paramètres fixes
    '/about' => [
        'GET' => function() {
            showAbout('Notre Histoire', 2023);
        },
    ],
];
```

- **Routes Statiques** : Définir un chemin fixe et l'associer à des méthodes HTTP et des fonctions de gestion correspondantes.
- **Routes Dynamiques** : Utiliser des expressions régulières pour capturer des parties de l'URL. Les valeurs capturées sont passées comme arguments à la fonction de gestion.
- **Routes avec Paramètres Fixes** : Utiliser des closures pour appeler des fonctions avec des paramètres prédéfinis, vous permettant de transmettre des données fixes à vos gestionnaires sans les extraire de l'URL.

### Conventions de Nomination
- La convention de nomination utilisée est camelCase.
- L'approche de développement est procédurale.
- Tous les liens sont relatifs à `index.php`.

## Structure des Dossiers

### Dossier `src`
Le site se trouve dans le dossier `src` et est organisé en trois sous-dossiers principaux :

#### `controllers`
- Contient les différents contrôleurs, chaque page ayant son propre contrôleur pour éviter les confusions.
- Chaque fonction des contrôleurs responsable de l'affichage doit avoir les variables suivantes :
  ```php
  $pageInfo = [
      'titlePage' => '???? | YSEM',
      'name' => 'viewProduct',
  ];
  ```
  Avant d'appeler le fichier concerné :
  ```php
  require_once('src/views/pages/home.php');
  ```

#### `static`
- Contient les images, le CSS, JavaScript, les bibliothèques (classes créées occasionnellement si nécessaire pendant le développement) et FontAwesome pour les icônes utilisées pendant le développement hors ligne.
- Tailwind CSS est utilisé pour le style. Assurez-vous d'inclure le fichier Tailwind CSS dans votre projet.
- Le `head` contient un lien commenté vers la bibliothèque externe pour les icônes.

#### `views`
- Contient toutes les vues du site, organisées en sous-dossiers :
  - **template** : Contient le squelette du site (`base.php`, `head.php`, `header.php`, `navbar.php`, `footer.php`, `foot.php`).
  - **pages** : Contient les pages utilisant les templates.
  - **layouts** ou **components** : Contient les éléments de l'UI utilisés régulièrement dans le site.

<!-- ## Configuration de Tailwind CSS
1. Installez Node.js et npm si ce n'est pas déjà fait.
2. Initialisez votre projet : `npm init -y`
3. Installez Tailwind CSS : `npm install tailwindcss`
4. Créez un fichier de configuration Tailwind : `npx tailwindcss init`
5. Construisez votre fichier CSS : `npx tailwindcss build src/static/css/tailwind.css -o src/static/css/styles.css`

Assurez-vous d'inclure le fichier CSS compilé dans votre HTML. -->

## Remarques Finales
- Les routes dynamiques sont acceptées et peuvent être facilement définies dans la configuration des routes.
- La convention de nomination et l'approche de développement doivent être suivies pour maintenir la cohérence et la lisibilité du code.
- Utilisez les classes Tailwind CSS pour le style afin d'assurer un design cohérent sur l'ensemble du site.