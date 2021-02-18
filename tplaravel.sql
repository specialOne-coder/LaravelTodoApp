-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 01 août 2020 à 12:20
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tplaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_07_30_172604_create_taches_table', 1),
(14, '2020_07_31_092351_update_accomplie_field_with_default_value_to_table_tache', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ferdiattivi@gmail.com', '$2y$10$ky8vCuU0spk4mVbSTD0zMuDXvgynlYWROxjyLM/rTB899VUdPO1mi', '2020-07-31 16:17:41');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `accomplie` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `titre`, `expiration`, `description`, `accomplie`, `created_at`, `updated_at`) VALUES
(3, 'Foot', '2020-07-22', 'dormir', 0, '2020-07-31 12:46:11', '2020-07-31 22:17:11'),
(4, 'Feter tabaski', '2020-07-31', 'tabaski la fete des musulmans', 1, '2020-07-31 14:29:24', '2020-07-31 22:17:25'),
(5, 'Tp sur laravel', '2020-07-22', 'dormir', 1, '2020-07-31 14:46:45', '2020-07-31 22:15:34'),
(6, 'Dormir avec tabaski pour manger', '2020-07-22', 'dormir', 1, '2020-07-31 14:47:00', '2020-07-31 18:12:52'),
(7, 'Apprendre administration et sécurité reseau', '2020-07-15', 'dormir', 0, '2020-07-31 14:54:15', '2020-07-31 14:54:15'),
(8, 'Dormir avec elle', '2020-07-22', 'dormir', 1, '2020-07-31 15:20:26', '2020-07-31 22:17:21'),
(9, 'ok', '2020-07-15', 'test', 0, '2020-07-31 15:59:35', '2020-07-31 15:59:35'),
(11, 'test', '2020-08-20', 'gdty', 0, '2020-07-31 22:16:16', '2020-07-31 22:16:16'),
(12, 'test02', '2020-08-28', '14', 0, '2020-07-31 22:16:39', '2020-07-31 22:16:39'),
(13, 'ok', '2020-08-19', 'dormir', 0, '2020-07-31 22:16:54', '2020-07-31 22:16:54'),
(14, 'Soutenance ce matin', '2020-08-01', 'soutenir son stage', 1, '2020-08-01 08:15:21', '2020-08-01 08:15:38');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ferdi', 'ferdiattivi@gmail.com', NULL, '$2y$10$A8V61sc77iF12CJaUoZuGuKa7OZhKNGwGf/Y3bmkylsrRING5mkIG', 'gIduS6Q0gouW0ptUM0LUHZfbftXMwSBcuM4OJLtguAoBClkHB7Qm7llBO08L', '2020-07-31 12:32:11', '2020-07-31 12:32:11'),
(2, 'ferdi', 'frdndattivi@gmail.com', NULL, '$2y$10$KMWbGeHfis8sYDEKfmOIj.PPmPnYAlSThPNRq1v1uohs9rDx1BDp2', NULL, '2020-07-31 17:02:16', '2020-07-31 17:02:16'),
(3, 'engin', 'ferdiattivi@gmail.coma', NULL, '$2y$10$ihnebI9YO6BP5I9xgXico.7zIfq/G0LeVhAZ9uotD/Blx9qWqvcWq', NULL, '2020-07-31 22:14:25', '2020-07-31 22:14:25');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
