<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🛠️ Installation de l'App

Ce guide vous explique comment installer et configurer l'application Laravel sur votre machine locale.

---

## A propos de l'App

C'est une application de réservation de propriétés permettant aux utilisateurs de réserver un logement pour des dates spécifiques. Développée avec Laravel et Livewire


## 📌 Prérequis

Avant d’installer l’application, assurez-vous d’avoir les éléments suivants installés :

- **PHP** (>= 8.1) 👉 [Télécharger PHP](https://www.php.net/downloads)
- **Composer** 👉 [Télécharger Composer](https://getcomposer.org/download/)
- **Node.js & npm** (optionnel, pour les assets) 👉 [Télécharger Node.js](https://nodejs.org/)
- **MySQL** (ou MariaDB) 👉 [Télécharger MySQL](https://dev.mysql.com/downloads/)
- **Git** (optionnel, pour cloner le projet) 👉 [Télécharger Git](https://git-scm.com/)

---

## 🚀 Installation

### 1️⃣ Cloner le projet

git clone https://github.com/votre-utilisateur/votre-repo.git
cd votre-repo

### 2️⃣ Installer les dépendances PHP

composer install

### 3️⃣ Configurer l’environnement

Modifiez les paramètres de connexion à la base de données (.env) :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base
DB_USERNAME=root
DB_PASSWORD=secret

### 4️⃣ Générer la clé d’application

php artisan key:generate

### 5️⃣ Exécuter les migrations et seeders

php artisan migrate --seed

### 6️⃣ Installer les dépendances front-end 

npm install && npm run build

### 7️⃣ Lancer le serveur

php artisan serve

L’application est maintenant accessible sur http://127.0.0.1:8000 🎉

🔐 Accès Admin (si Filament est installé)

php artisan make:filament-user

