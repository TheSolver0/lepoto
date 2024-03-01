-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 jan. 2024 à 16:43
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lepoto`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `users_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id`, `posts_id`, `users_name`, `users_tel`, `created_at`, `updated_at`) VALUES
(1, 20, 'Luc Fotso', '698549128', '2023-12-12 14:11:11', '2023-12-12 14:11:11'),
(2, 21, 'Luc Fotso', '698549128', '2023-12-12 14:12:15', '2023-12-12 14:12:15'),
(3, 22, 'Luc Fotso', '698549128', '2023-12-12 14:12:37', '2023-12-12 14:12:37'),
(4, 23, 'Luc Fotso', '698549128', '2023-12-12 14:12:49', '2023-12-12 14:12:49'),
(5, 24, 'Luc Fotso', '698549128', '2023-12-12 14:16:52', '2023-12-12 14:16:52'),
(6, 25, 'Luc Fotso', '698549128', '2023-12-12 14:18:02', '2023-12-12 14:18:02'),
(7, 26, 'Luc Fotso', '698549128', '2023-12-12 14:19:27', '2023-12-12 14:19:27'),
(8, 27, 'Luc Fotso', '698549128', '2023-12-12 14:19:55', '2023-12-12 14:19:55'),
(9, 28, 'Luc Fotso', '698549128', '2023-12-12 14:23:19', '2023-12-12 14:23:19'),
(10, 29, 'Luc Fotso', '698549128', '2023-12-12 14:24:51', '2023-12-12 14:24:51'),
(11, 30, 'Luc Fotso', '698549128', '2023-12-12 14:25:58', '2023-12-12 14:25:58'),
(12, 31, 'Luc Fotso', '698549128', '2023-12-12 14:34:20', '2023-12-12 14:34:20'),
(13, 32, 'Luc Fotso', '698549128', '2023-12-12 16:39:15', '2023-12-12 16:39:15'),
(14, 33, 'Luc Fotso', '698549128', '2023-12-12 16:40:42', '2023-12-12 16:40:42'),
(16, 35, 'Luc Fotso', '698549128', '2024-01-02 11:38:47', '2024-01-02 11:38:47'),
(17, 36, 'Luc Fotso', '698549128', '2024-01-02 11:39:09', '2024-01-02 11:39:09');

-- --------------------------------------------------------

--
-- Structure de la table `avatars`
--

CREATE TABLE `avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `avatars`
--

INSERT INTO `avatars` (`id`, `path`, `users_id`, `created_at`, `updated_at`) VALUES
(4, 'avatars/1702124837.jpg', 12, '2023-12-09 11:26:19', '2023-12-09 11:27:17');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `path`, `posts_id`, `created_at`, `updated_at`) VALUES
(1, 'Images/1702329595.png', 11, '2023-12-11 20:19:55', '2023-12-11 20:19:55'),
(2, 'Images/1702393868.png', 20, '2023-12-12 14:11:11', '2023-12-12 14:11:11'),
(3, 'Images/1702393935.png', 21, '2023-12-12 14:12:15', '2023-12-12 14:12:15'),
(4, 'Images/1702393957.png', 22, '2023-12-12 14:12:37', '2023-12-12 14:12:37'),
(5, 'Images/1702393969.png', 23, '2023-12-12 14:12:49', '2023-12-12 14:12:49'),
(6, 'Images/1702394211.png', 24, '2023-12-12 14:16:52', '2023-12-12 14:16:52'),
(7, 'Images/1702394282.png', 25, '2023-12-12 14:18:02', '2023-12-12 14:18:02'),
(8, 'Images/1702394367.png', 26, '2023-12-12 14:19:27', '2023-12-12 14:19:27'),
(9, 'Images/1702394395.png', 27, '2023-12-12 14:19:55', '2023-12-12 14:19:55'),
(10, 'Images/1702394598.png', 28, '2023-12-12 14:23:19', '2023-12-12 14:23:19'),
(11, 'Images/1702394690.png', 29, '2023-12-12 14:24:51', '2023-12-12 14:24:51'),
(12, 'Images/1702394758.png', 30, '2023-12-12 14:25:58', '2023-12-12 14:25:58'),
(13, 'Images/1702395255.png', 31, '2023-12-12 14:34:20', '2023-12-12 14:34:20'),
(14, 'Images/1702402755.png', 32, '2023-12-12 16:39:15', '2023-12-12 16:39:15'),
(15, 'Images/1702402842.png', 33, '2023-12-12 16:40:42', '2023-12-12 16:40:42'),
(17, 'Images/1704199124.png', 35, '2024-01-02 11:38:47', '2024-01-02 11:38:47'),
(18, 'Images/1704199149.png', 36, '2024-01-02 11:39:09', '2024-01-02 11:39:09');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"bfddef43-89d8-48e9-8097-e3a91d2fcd21\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:12;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1701983576, 1701983576),
(2, 'default', '{\"uuid\":\"031af817-3a53-4e93-a17c-2fa01a4df8e6\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:15;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702526084, 1702526084),
(3, 'default', '{\"uuid\":\"d29107ea-4564-4edf-aa8f-7cff7553c3a7\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:17;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702557992, 1702557992),
(4, 'default', '{\"uuid\":\"ea035b7d-75e3-4c90-823f-5fd15b3998a0\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:18;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702577762, 1702577762),
(5, 'default', '{\"uuid\":\"70a01bcb-c091-465d-8465-aee62b854e81\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:19;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702812078, 1702812078),
(6, 'default', '{\"uuid\":\"32837777-d8c2-4279-a40b-450ab062ff64\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:20;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702812699, 1702812699),
(7, 'default', '{\"uuid\":\"ddec73ce-7e6d-48e1-a6ab-eda727b1541b\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:21;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702812993, 1702812993),
(8, 'default', '{\"uuid\":\"4b473db0-a3a6-42cb-9765-ee6a625681dc\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:23;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702816529, 1702816529),
(9, 'default', '{\"uuid\":\"5b9f59cd-8008-4942-b458-9bcb4eeb3cea\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:24;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702816963, 1702816963),
(10, 'default', '{\"uuid\":\"1b7133dd-43d5-4825-9568-b370bdd6b00c\",\"displayName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\sendWelcomeUserMailJob\",\"command\":\"O:31:\\\"App\\\\Jobs\\\\sendWelcomeUserMailJob\\\":1:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:27;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1702967997, 1702967997);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_16_092324_create_avatars_table', 1),
(6, '2023_09_21_205500_create_posts_table', 1),
(7, '2023_09_21_205809_create_images_table', 1),
(8, '2023_10_24_080052_create_auteurs_table', 1),
(9, '2023_11_05_135057_create_jobs_table', 1),
(10, '2023_12_20_081210_create_users_deletes_table', 2),
(11, '2023_12_20_081227_create_posts_deletes_table', 2),
(12, '2024_01_05_144546_create_recherches_not_founds_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `prix`, `ville`, `description`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Louvenia Wisoky', '4543', 'Mrs. Jewell Cummings', 'Queen to play croquet.\' The Frog-Footman repeated, in the beautiful garden, among the leaves.', 9, '2023-12-07 19:50:06', '2023-12-07 19:50:06'),
(5, 'Mr. Enos Jacobson I', '3568', 'Gunner Jerde Jr.', 'Involved in this way! Stop this moment, I tell you, you coward!\' and at last turned sulky, and.', 10, '2023-12-07 19:50:07', '2023-12-07 19:50:07'),
(6, 'Linda Grant', '3978', 'Letha Dibbert', 'The Queen\'s argument was, that you think you could manage it?) \'And what an ignorant little girl.', 1, '2023-12-07 19:50:07', '2023-12-07 19:50:07'),
(7, 'Zena Stiedemann MD', '3049', 'Isabella Heller', 'Father William replied to his ear. Alice considered a little, \'From the Queen. An invitation for.', 4, '2023-12-07 19:50:07', '2023-12-07 19:50:07'),
(10, 'Anthony Crooks II', '5653', 'Mr. Amani Cormier', 'Alice did not like the look of it had fallen into it: there was no \'One, two, three, and away,\'.', 7, '2023-12-07 19:50:07', '2023-12-07 19:50:07'),
(11, 'test', '5722', 'Jana Glover', 'Duchess; \'and the moral of that dark hall, and wander about among those beds of bright flowers and.', 12, '2023-12-07 20:30:10', '2023-12-10 21:20:56'),
(12, 'test1', '6807', 'Mrs. Elyse Lehner DVM', 'You see, she came upon a neat little house, on the floor: in another moment, splash! she was.', 12, '2023-12-07 20:30:10', '2023-12-10 21:06:29'),
(13, 'Ms. Frances Crooks', '3310', 'Dr. Enos Effertz', 'Alice heard it before,\' said the Gryphon. \'It\'s all her life. Indeed, she had quite forgotten the.', 12, '2023-12-07 20:30:10', '2023-12-07 20:30:10'),
(14, 'Theron Little Sr.', '3283', 'Frederick Jacobs', 'Footman continued in the other. \'I beg pardon, your Majesty,\' he began, \'for bringing these in.', 12, '2023-12-07 20:30:10', '2023-12-07 20:30:10'),
(15, 'Dedric Nader', '2056', 'Dr. Dwight Johnston PhD', 'Footman went on again:-- \'You may go,\' said the Queen. \'I haven\'t opened it yet,\' said the.', 12, '2023-12-07 20:30:10', '2023-12-07 20:30:10'),
(16, 'Prof. Joesph Bauch PhD', '5699', 'Hal Bosco', 'Poor Alice! It was the first figure,\' said the Gryphon, and the Dormouse followed him: the March.', 12, '2023-12-07 20:30:10', '2023-12-07 20:30:10'),
(17, 'Lilla Botsford', '3452', 'Ms. Willie Frami DVM', 'The Frog-Footman repeated, in the face. \'I\'ll put a stop to this,\' she said these words her foot.', 12, '2023-12-07 20:30:10', '2023-12-07 20:30:10'),
(18, 'test1', '6807', 'Mrs. Elyse Lehner DVM', 'You see, she came upon a neat little house, on the floor: in another moment, splash! she was.', 12, '2023-12-10 21:03:22', '2023-12-10 21:03:22'),
(19, 'test1', '6807', 'Mrs. Elyse Lehner DVM', 'You see, she came upon a neat little house, on the floor: in another moment, splash! she was.', 12, '2023-12-10 21:04:00', '2023-12-10 21:04:00'),
(20, 'Nouveau livre', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:10:59', '2023-12-12 14:10:59'),
(21, 'Nouveau livre', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:12:15', '2023-12-12 14:12:15'),
(22, 'Nouveau livre', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:12:37', '2023-12-12 14:12:37'),
(23, 'Nouveau livre', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:12:49', '2023-12-12 14:12:49'),
(24, 'Nouveau livre2', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:16:50', '2023-12-12 14:16:50'),
(25, 'Nouveau livre2', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:18:02', '2023-12-12 14:18:02'),
(26, 'Nouveau livre3', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:19:27', '2023-12-12 14:19:27'),
(27, 'Nouveau livre4', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:19:55', '2023-12-12 14:19:55'),
(28, 'Nouveau livre5', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:23:18', '2023-12-12 14:23:18'),
(29, 'Nouveau livre6', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:24:50', '2023-12-12 14:24:50'),
(30, 'Nouveau livre7', '7000', 'Bandjoun', 'Nouvelle description de manuel', 12, '2023-12-12 14:25:58', '2023-12-12 14:25:58'),
(31, 'Nouveau livre8', '7000', 'Yaounde', 'Nouvelle description de manuel', 12, '2023-12-12 14:34:15', '2023-12-12 14:34:15'),
(32, 'Nouveau livre9', '7200', 'Ebolowa', 'Nouvelle description de manuel', 12, '2023-12-12 16:39:15', '2023-12-12 16:39:15'),
(33, 'Nouveau livre10', '7200', 'Ebolowa', 'Nouvelle description de manuel', 12, '2023-12-12 16:40:41', '2023-12-12 16:40:41'),
(35, 'new book', '3500', 'SUD', 'une description', 12, '2024-01-02 11:38:44', '2024-01-02 11:38:44'),
(36, 'new book', '3500', 'SUD', 'une description', 12, '2024-01-02 11:39:09', '2024-01-02 11:39:09');

-- --------------------------------------------------------

--
-- Structure de la table `posts_deletes`
--

CREATE TABLE `posts_deletes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts_deletes`
--

INSERT INTO `posts_deletes` (`id`, `title`, `prix`, `ville`, `description`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Meggie Runolfsson II', '6147', 'Waylon Stoltenberg', 'So she went on eagerly. \'That\'s enough about lessons,\' the Gryphon interrupted in a natural way.', 10, '2023-12-20 07:22:17', '2023-12-20 07:22:17'),
(2, 'Nouveau livre11', '7200', 'Ebolowa', 'Nouvelle description de manuel', 12, '2023-12-20 07:29:36', '2023-12-20 07:29:36');

-- --------------------------------------------------------

--
-- Structure de la table `recherches_not_founds`
--

CREATE TABLE `recherches_not_founds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recherches_not_founds`
--

INSERT INTO `recherches_not_founds` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'hjhjgfhjfghvfgfgfiugughv', '2024-01-05 14:09:57', '2024-01-05 14:09:57'),
(2, 'ghfcyduhgfhftyfftviygyvç', '2024-01-05 14:10:16', '2024-01-05 14:10:16');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `tel` bigint(20) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `tel`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Clemens Spinka IV', 'sterling.champlin@example.net', '2023-12-07 19:39:42', 679158, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5YjyfkiFnz', '2023-12-07 19:39:42', '2023-12-07 19:39:42'),
(3, 'Declan D\'Amore Sr.', 'dhansen@example.com', '2023-12-07 19:44:02', 652233, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bkkvYxkjiM', '2023-12-07 19:44:02', '2023-12-07 19:44:02'),
(4, 'Paul Reinger', 'lstoltenberg@example.net', '2023-12-07 19:44:02', 622271, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Wt5gOHsPYo', '2023-12-07 19:44:02', '2023-12-07 19:44:02'),
(7, 'Dr. Emily Howe', 'kunze.lukas@example.net', '2023-12-07 19:44:02', 681863, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'q9k03XvLen', '2023-12-07 19:44:02', '2023-12-07 19:44:02'),
(8, 'Mrs. Meda Gerlach', 'nelda.mueller@example.org', '2023-12-07 19:44:02', 688222, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SkthYqyFqg', '2023-12-07 19:44:03', '2023-12-07 19:44:03'),
(9, 'Rene Koch', 'jakubowski.rita@example.com', '2023-12-07 19:44:02', 680042, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6ZRNvlTz5j', '2023-12-07 19:44:03', '2023-12-07 19:44:03'),
(10, 'Dr. Alfredo Schmidt', 'block.lukas@example.com', '2023-12-07 19:44:02', 616908, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rk9qXy2vAK', '2023-12-07 19:44:03', '2023-12-07 19:44:03'),
(11, 'Prof. Lizeth Collier', 'haskell.thiel@example.com', '2023-12-07 19:44:02', 696922, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rPy115G67d', '2023-12-07 19:44:03', '2023-12-07 19:44:03'),
(12, 'Luc Fotso', 'lucfotso0+1@gmail.com', '2023-12-19 12:45:06', 698549128, '$2y$10$UcKYbdXbEvMnWiybgSIS4OhDyWSwEFlR5bwRS5DH0ZJD8O.Lg0Xe2', NULL, '2023-12-07 20:12:53', '2023-12-19 12:45:06'),
(13, 'testverificationmail1', 'lucfotoso0+2@gmail.com', NULL, 468499768774, '$2y$10$J.I8A812czTd01BpWdiZBeOcO4VHQMa9NRoCtpUY99QZbMZ34Qqs6', NULL, '2023-12-14 02:50:28', '2023-12-14 02:50:28'),
(15, 'testverificationmail3', 'lucfotoso0+4@gmail.com', NULL, 4517465498787, '$2y$10$tUMRHwHGv0TF0SfFvpAwFun9u986ueuFeq37dUPWnGEm4fL3cHjt2', NULL, '2023-12-14 02:54:06', '2023-12-14 02:54:06'),
(16, 'testverificationmail4', 'lucfotso0+3@gmail.com', NULL, 5768768798, '$2y$10$F0Rd9bXd0xteR/ysabeqxu7Yocqucl0pPpcd2wv2D7PQayGq9gWnO', NULL, '2023-12-14 03:07:01', '2023-12-14 03:07:01'),
(17, 'deuxiemetest', 'lucfotso0+222@gmail.com', '2023-12-14 11:49:53', 6164964949, '$2y$10$.5cMarB7MgA5LoN2XBJjLudxZn869Nb0kwz6DpFlVJYqyTzjM.lBG', NULL, '2023-12-14 11:45:42', '2023-12-14 11:49:53'),
(18, 'troisiemetest', 'sdsdfefz@tesst.com', NULL, 656666226164, '$2y$10$AcKKUIBUDdA5smsTo8Fb6.qmg9HIFn11QDNgM9nIKIT34.21kgqcO', NULL, '2023-12-14 17:15:48', '2023-12-14 17:15:48'),
(19, 'Massa fogue birgitte mirabelle', 'lucfotso0+8787@gmail.com', NULL, 652097642, '$2y$10$2fuT1HnVKFo98pOTuo.FDOKzcG1M5fqYghWerRFJA6XC5rUGoNimG', NULL, '2023-12-17 10:20:54', '2023-12-17 10:20:54'),
(20, 'tayc de tayc', 'lucfotso0+87871@gmail.com', NULL, 3846298498, '$2y$10$sebtkCSe/zbvlsX7SwK5MuQkn5AS9q510y2/5jFHfvuEVyWczYosS', NULL, '2023-12-17 10:30:54', '2023-12-17 10:30:54'),
(21, 'tauc', 'lucfotso0+87872@gmail.com', NULL, 6454668, '$2y$10$gEBb6pS4pOkb1wOlTU0xCetET.M1PMtY3cSPB3FdCmlDrzdRoFb4K', NULL, '2023-12-17 10:36:18', '2023-12-17 10:36:18'),
(22, 'autre test', 'autretest@gmail.com', NULL, 46546548618, '$2y$10$2IyI8C8YKmKGxrZGPIA7xeUAYtQcO5Wij1Mm2QbJYkDOa.IxdSr6u', NULL, '2023-12-17 11:32:10', '2023-12-17 11:32:10'),
(23, 'autre test1', 'autretest1@gmail.com', NULL, 465465486181, '$2y$10$umZfmGg/H3W5yZdEYxj4Jup1tHaHwF4B0HQtrTWIHbItAccJwWhoq', NULL, '2023-12-17 11:35:12', '2023-12-17 11:35:12'),
(24, 'testautretest', 'lucfotso0+8787878@gmail.com', '2023-12-17 11:44:07', 387674687967, '$2y$10$GwDSpyNn5MhbGi6Y2dTMSuhTu0Sf5TgM8ca7yAoRWfQxiiNWg.AQy', NULL, '2023-12-17 11:42:30', '2023-12-17 11:44:07'),
(25, 'claire dupont', 'claire.dupont+vacances@gmail.com', NULL, 6958646495, '$2y$10$aRgRPXodNFf5aSmC7bBBN.Uy8NwMF99FD/OQnnIg4taig0xFMNELC', NULL, '2023-12-19 05:21:47', '2023-12-19 05:21:47'),
(26, 'claire dupont', 'claire.dont+vacances@gmail.com', NULL, 69586695, '$2y$10$Z9BFDzMqCre1kxAsl527keEI9nXL6EstLzsGE5rkNvjhVTWna8WUu', NULL, '2023-12-19 05:34:51', '2023-12-19 05:34:51'),
(27, 'claire', 'claire.duponnt@gmail.com', NULL, 648985494, '$2y$10$YP4OimDOqZasLC1w0ANHvu1E1j261jb2BA2TJxzHh2ftMZLmeaq76', NULL, '2023-12-19 05:39:37', '2023-12-19 05:39:37');

-- --------------------------------------------------------

--
-- Structure de la table `users_deletes`
--

CREATE TABLE `users_deletes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `tel` bigint(20) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users_deletes`
--

INSERT INTO `users_deletes` (`id`, `name`, `email`, `email_verified_at`, `tel`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abigale Kuvalis', 'brunte@example.com', NULL, 674331, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2023-12-20 07:20:55', '2023-12-20 07:20:55');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteurs_posts_id_foreign` (`posts_id`);

--
-- Index pour la table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avatars_users_id_foreign` (`users_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_posts_id_foreign` (`posts_id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_users_id_foreign` (`users_id`);

--
-- Index pour la table `posts_deletes`
--
ALTER TABLE `posts_deletes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_deletes_users_id_foreign` (`users_id`);

--
-- Index pour la table `recherches_not_founds`
--
ALTER TABLE `recherches_not_founds`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_tel_unique` (`tel`);

--
-- Index pour la table `users_deletes`
--
ALTER TABLE `users_deletes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_deletes_email_unique` (`email`),
  ADD UNIQUE KEY `users_deletes_tel_unique` (`tel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `posts_deletes`
--
ALTER TABLE `posts_deletes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `recherches_not_founds`
--
ALTER TABLE `recherches_not_founds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `users_deletes`
--
ALTER TABLE `users_deletes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD CONSTRAINT `auteurs_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `avatars`
--
ALTER TABLE `avatars`
  ADD CONSTRAINT `avatars_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `posts_deletes`
--
ALTER TABLE `posts_deletes`
  ADD CONSTRAINT `posts_deletes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
