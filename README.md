Ce dépôt contient le code source de mon portfolio personnel développé avec **Laravel** et intégrant une base de données **PostgreSQL**. Ce portfolio a été conçu pour présenter mes compétences en tant que développeur fullstack, mettant en valeur mes projets personnels et mon expérience professionnelle.

## Smart Resume Abdoul Rahim

Je suis un développeur Fullstack expérimenté, spécialisé dans l'écosystème Laravel/PHP et passionné par la création d'applications web robustes et intuitives. Ma méthode de travail repose sur l'utilisation de la stack TALL (Tailwind, Alpine.js, Laravel, Livewire), combinée à une expertise en Vue.js et Nuxt.js pour des projets plus spécifiques.

## Compétences clés
- **Laravel/PHP** : Expertise approfondie dans l'utilisation de Laravel pour le développement rapide et la construction d'APIs performantes.
- **Frontend agile** : Maîtrise de Tailwind CSS pour des interfaces modernes et réactives, ainsi qu'une utilisation stratégique d'Alpine.js pour des fonctionnalités interactives.
- **Composants dynamiques** : Expérience avancée avec Livewire pour créer des composants dynamiques côté serveur, offrant une expérience utilisateur fluide et sans rafraîchissement de page.
- **Vue.js et Nuxt.js** : Capacité à intégrer ces frameworks pour des fonctionnalités avancées et des projets spécifiques nécessitant des performances optimisées.

## Fonctionnalités principales
- Présentation des projets : Affichage de mes side projects avec des descriptions détaillées et des captures d'écran.
- Section Blog : Articles relatifs à des sujets techniques, retours d'expérience ou astuces de développement.
- Contact : Formulaire permettant de me contacter directement depuis le site.

## Contributing

Mon portfolio, construit à l'aide de Laravel et d'une base de données PostgreSQL, démontre mes compétences à travers la présentation détaillée de mes side projects. 

## Approche de travail

Ma démarche consiste à créer des solutions pragmatiques en combinant les meilleures pratiques de développement avec une approche créative. J'aime relever de nouveaux défis techniques et je suis constamment à l'affût des dernières tendances et technologies pour enrichir mes compétences et améliorer mes projets.

## Engagement
Je suis ouvert aux collaborations et aux opportunités où je pourrais apporter ma passion pour le développement et contribuer à des projets innovants. N'hésitez pas à me contacter si vous cherchez un développeur dévoué et passionné pour votre prochain projet ou pour discuter de collaborations potentielles.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Installation

Clonez ce dépôt sur votre machine locale.
Exécutez `composer install` pour installer les dépendances PHP.
Copiez le fichier `.env.example` et renommez-le en `.env`.
Configurez les informations de la base de données dans le fichier .env.
Exécutez `php artisan key:generate` pour générer une nouvelle clé d'application.
Exécutez `php artisan migrate` pour exécuter les migrations et créer les tables de base de données.
Utilisez `npm install && npm run dev` pour installer les dépendances JavaScript et compiler les assets.

## Fortify URL auth

Pour personnaliser chemin de votre authentification lorsque vous utilisez *Fortify*
Aller dans le fichier de configuration **fortify.php** et ajouter cette ligne :
Je la place au mieux au dessus la ligne définissant le middleware.
```php
'path' => 'chemin_auth'
```
