-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 oct. 2024 à 21:29
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `samaaichatbot`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom_nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `prenom_nom`, `email`, `mot_de_passe`, `created_at`, `updated_at`) VALUES
(1, 'Madiop Thiam', 'tboy@gmail.com', '$2y$12$14Uc4rIq7T4uL8wRKMg4de3QAl8Qr5kkRgLUrNuFFzAmxVPsPH8KC', '2024-10-07 18:06:26', '2024-10-07 18:06:26');

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_07_090456_create_reponses_table', 1),
(5, '2024_09_11_194557_create_users_table', 2),
(6, '2024_09_22_152855_create_users_table', 3),
(7, '2024_10_12_164017_create_admins_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `reponse` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id`, `question`, `reponse`, `created_at`, `updated_at`) VALUES
(3, 'Comment puis-je passer une commande ?', 'Pour passer une commande, ajoutez simplement l\'œuvre d\'art souhaitée à votre panier et suivez les étapes de paiement.', '2024-09-07 09:09:26', '2024-09-07 09:09:26'),
(73, 'Est il possible de négocier le prix des œuvres?', 'Oui, la négociation est souvent possible, surtout pour les œuvres de grande valeur. C\'est un art en soi ! Proposez un prix raisonnable en expliquant votre intérêt pour l\'œuvre.', '2024-10-05 18:29:50', '2024-10-05 18:29:50'),
(74, 'Quels sont les formats d\'œuvres les plus vendus ?', 'Les petits formats (type A4, 30x40cm) sont populaires car ils sont plus abordables et faciles à accrocher. Parfaits pour débuter ou pour des sujets intimistes.', '2024-10-05 18:36:26', '2024-10-05 18:36:26'),
(75, 'Puis-je prendre un rendez-vous avec un vendeur?', 'Contacter directement le vendeur : Si vous avez déjà un vendeur en vue, n\'hésitez pas à le contacter par email ou par téléphone pour lui proposer un rendez-vous. Soyez clair et précis dans votre demande en indiquant vos disponibilités et l\'objet du rendez-vous.', '2024-10-05 18:39:18', '2024-10-05 18:39:18'),
(94, 'salut', 'Bonjour ! Comment puis-je vous aider aujourd\'hui ?', '2024-10-06 12:19:09', '2024-10-06 12:19:09'),
(103, 'tu fais quoi?', 'Je suis Gemini, un grand modèle linguistique entraîné par Google. Je suis conçu pour comprendre et générer le langage humain, et pour répondre à une grande variété de questions et de demandes.', '2024-10-07 22:02:03', '2024-10-07 22:02:03'),
(123, 'cava', '**Cava**\n\n**Definición:**\n\nLa cava es un vino espumoso español elaborado principalmente con la variedad de uva Xarel·lo y otras variedades complementarias como Macabeo y Parellada. Se produce en la región vitivinícola de Cataluña, España.\n\n**Características:**\n\n* **Método de producción:** Método tradicional (Champenoise), que implica una segunda fermentación en botella.\n* **Variedades de uva:** Xarel·lo, Macabeo, Parellada (y ocasionalmente otras variedades).\n* **Maduración sobre lías:** Período de envejecimiento en contacto con las lías (sedimentos de levadura), que aporta complejidad y cremosidad.\n* **Presión:** Mínimo de 3 atmósferas.\n* **Burbujas:** Finas y persistentes.\n* **Color:** Desde pálido hasta dorado.\n* **Aroma:** Frutas cítricas, levadura, brioche.\n* **Sabor:** Fresco, equilibrado, con una acidez refrescante y notas de manzana verde, pera y pan tostado.\n\n**Tipos:**\n\n* **Brut:** Menos de 12 g/l de azúcar residual.\n* **Seco:** Entre 12 y 17 g/l de azúcar residual.\n* **Semiseco:** Entre 17 y 32 g/l de azúcar residual.\n* **Dulce:** Más de 32 g/l de azúcar residual.\n\n**Maridaje:**\n\nLa cava es un vino versátil que puede acompañar una amplia gama de platos, entre ellos:\n\n* Aperitivos y entremeses\n* Mariscos y pescados\n* Arroces y pastas\n* Aves y carnes blancas\n* Postres (especialmente brut y seco)\n\n**Datos curiosos:**\n\n* El nombre \"cava\" proviene del catalán y significa \"cueva\".\n* La cava se elabora en bodegas subterráneas para mantener una temperatura y humedad constantes.\n* La denominación de origen \"Cava\" fue reconocida en 1986.\n* La cava es el vino espumoso más popular de España y uno de los más vendidos en todo el mundo.', '2024-10-10 20:43:48', '2024-10-10 20:43:48'),
(124, 'ok', '**What is the difference between a tensor and a matrix?**\n\nA tensor is a mathematical object that can be thought of as a generalization of a matrix. Matrices are two-dimensional arrays of numbers, while tensors can have any number of dimensions. Tensors are used to represent a wide variety of physical quantities, such as stress, strain, and electromagnetic fields.\n\nOne of the key differences between tensors and matrices is the way they transform under coordinate transformations. Matrices transform according to the rules of linear algebra, while tensors transform according to more general rules. This is because tensors have more degrees of freedom than matrices.\n\nAnother difference between tensors and matrices is the way they are represented. Matrices are typically represented as arrays of numbers, while tensors can be represented in a variety of ways, including as arrays of numbers, as vectors, or as matrices.\n\n**Here is a table summarizing the key differences between tensors and matrices:**\n\n| Feature | Tensor | Matrix |\n|---|---|---|\n| Number of dimensions | Any | Two |\n| Transformation rules | More general than linear algebra | Linear algebra |\n| Representation | Arrays of numbers, vectors, matrices | Arrays of numbers |\n\n**Applications of tensors**\n\nTensors are used in a wide variety of applications, including:\n\n* **Physics:** Tensors are used to represent physical quantities such as stress, strain, and electromagnetic fields.\n* **Engineering:** Tensors are used to analyze the behavior of materials and structures.\n* **Computer graphics:** Tensors are used to represent transformations and lighting.\n* **Medical imaging:** Tensors are used to analyze medical images.\n* **Machine learning:** Tensors are used to represent data and models.\n\n**Conclusion**\n\nTensors are a powerful mathematical tool that can be used to represent a wide variety of physical quantities and objects. They are more general than matrices, and they have a wider range of applications.', '2024-10-12 12:46:33', '2024-10-12 12:46:33'),
(125, 'c\'est comment ?', 'Je ne comprends pas votre question. Pouvez-vous s\'il vous plaît reformuler ?', '2024-10-12 12:48:56', '2024-10-12 12:48:56'),
(126, 'hello', 'Hello there! How can I assist you today?', '2024-10-12 13:46:32', '2024-10-12 13:46:32'),
(127, 'Salut cava', 'Salut, ça va bien, merci. Et toi ?', '2024-10-12 13:51:49', '2024-10-12 13:51:49'),
(128, 'hi', 'Hello there! How can I assist you today?', '2024-10-12 18:18:16', '2024-10-12 18:18:16'),
(129, 'ouais cava', 'Je suis heureux d\'apprendre que vous allez bien.', '2024-10-12 19:06:17', '2024-10-12 19:06:17');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('YGjB3L4uOfqkeqHPLHwLwwTOAfTi7eIUK9n3S0X0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRndDODJ4VHZaUXZHTEI0cWU5Q05Vak11ZHNIRkJDNnE3SFRMR0o4SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGF0Ym90L2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJhZG1pbl9pZCI7aToxO3M6MTA6InByZW5vbV9ub20iO3M6MTM6IlNhZGlraCBOZGlheWUiO30=', 1728759995);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom_nom` varchar(20) NOT NULL,
  `telephone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom_nom`, `telephone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Madiop Thiam', 771681526, 'madiopthiam90@gmail.com', '2024-09-22 15:49:34', '2024-09-22 15:49:34'),
(28, 'Haa Hee', 566851, 'hee@gmail.com', '2024-10-10 20:28:56', '2024-10-10 20:28:56'),
(29, 'test 12', 777777777, 'test@test.com', '2024-10-12 12:45:39', '2024-10-12 12:45:39'),
(31, 'test 12', 777777777, 'test@test.co', '2024-10-12 13:00:18', '2024-10-12 13:00:18'),
(32, 'test 12', 777777777, 'madiopthiam900@gmail.com', '2024-10-12 13:46:21', '2024-10-12 13:46:21'),
(33, 'lliji ub', 656515, 'madiopthiam80@gmail.com', '2024-10-12 13:51:41', '2024-10-12 13:51:41'),
(34, 'nsd lknlk sd', 68446, 'klsnsd@gmail.com', '2024-10-12 18:18:01', '2024-10-12 18:18:01'),
(35, 'Sadikh Ndiaye', 776526282, 'sadikh@gmail.com', '2024-10-12 19:05:54', '2024-10-12 19:05:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
