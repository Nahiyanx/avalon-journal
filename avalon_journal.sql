-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2025 at 02:01 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avalon_journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_04_031452_create_posts_table', 2),
(5, '2025_08_04_031508_create_categories_table', 2),
(6, '2025_08_04_031528_create_comments_table', 2),
(7, '2025_08_04_044234_category_post', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(12, 7, 'Introduction', 'Hi! My name is Julia. I saw a crow on top my head yesterday and the crow became my best friend very easily. I tried to shoo him away a few times but he just won\'t go away.', '2025-08-06 23:14:31', '2025-08-07 01:26:16'),
(14, 1, 'How Minimalism Can Transform Your Life', 'Minimalism is often misunderstood as living in an empty, sterile space with no personal belongings. In reality, it’s about removing the excess so you can focus on what truly matters. It’s a tool to help you reclaim time, energy, and clarity.\r\nWe live in a culture that equates more with better. More clothes, more gadgets, more commitments. But all this “more” often leads to less—less freedom, less peace, less joy. Minimalism challenges this narrative by asking a simple question: “Does this add value to my life?”\r\nDecluttering is usually the first step. Start small—clear a drawer, a shelf, or a corner of your room. You’ll be surprised how freeing it feels. From there, apply minimalism to your schedule. Cut out commitments that drain you. Say no to things that don’t align with your priorities.\r\nThe benefits go beyond physical space. A minimalist lifestyle fosters mental clarity. With fewer distractions, you can focus on your goals and relationships. It also encourages gratitude—you start appreciating the things you keep because they hold genuine meaning.\r\nMinimalism doesn’t have to be extreme. You don’t need to own only 30 items or live in a tiny house. It’s about intentional living. By curating your possessions, commitments, and even relationships, you create a life filled with purpose and peace.\r\nIn the end, minimalism isn’t about having less—it’s about making room for more of what matters most.', '2025-08-10 01:56:26', '2025-08-10 01:56:26'),
(15, 8, 'Why Failure Is the Best Teacher You’ll Ever Have', 'Failure has an ugly reputation. From school days to adulthood, we’re taught to avoid it at all costs. Yet, some of the most successful people in history credit failure as the foundation of their achievements.\r\nThe truth is, failure is a natural and necessary part of growth. When we fail, we gain insights that success alone can’t provide. We learn what doesn’t work, and this narrows the path to what does. Each misstep sharpens our skills, resilience, and problem-solving abilities.\r\nConsider Thomas Edison, who famously said he found “10,000 ways that won’t work” before inventing the light bulb. His persistence turned repeated failure into eventual triumph. In sports, business, and art, the same principle applies—those who dare to fail also dare to succeed.\r\nFear of failure can be paralyzing. It can keep us from pursuing dreams, trying new things, or stepping outside our comfort zone. The antidote is to redefine failure. Instead of seeing it as a dead end, view it as feedback.\r\nWhen we embrace failure, we open ourselves to experimentation and creativity. We become more adaptable, more willing to take calculated risks. And in time, failure becomes less of a threat and more of a trusted guide.\r\nSo, the next time you stumble, remember: you’re not falling backward—you’re falling forward. Failure isn’t the opposite of success; it’s the bridge that leads to it.', '2025-08-10 01:58:19', '2025-08-10 01:58:19'),
(17, 8, 'The Hidden Power of Small Habits', 'We often think that big changes in life require big actions. We imagine that to get fit, we must commit to two-hour gym sessions every day, or to learn a new language, we must study for hours on end. But the truth is, small habits can be just as powerful—sometimes even more so.\r\n\r\nSmall habits have a way of sneaking into our lives without overwhelming us. Think about it: brushing your teeth is a habit you probably don’t think twice about. It takes just a few minutes, but over the years, it has protected your teeth and kept your mouth healthy. This is the same principle that works in other areas of life.\r\n\r\nWhen you start small, you remove the mental barrier of getting started. For example, instead of telling yourself you’ll read an entire book this month, start with one page a day. A single page feels so manageable that it’s hard to find an excuse not to do it. Over time, one page turns into two, then five, and before you know it, you’ve finished several books without feeling any pressure.\r\n\r\nAnother great thing about small habits is how they compound. Just like interest in a bank account grows over time, the effects of tiny, consistent actions multiply. If you improve by just 1% every day, you’ll be 37 times better at something by the end of the year. That’s the magic of compounding.\r\n\r\nOf course, not all small habits are good ones. Just as positive actions build us up, negative ones chip away at our progress. Scrolling on your phone “for a few minutes” before bed can easily turn into hours of lost sleep. That’s why it’s important to be aware of the habits we allow into our lives.\r\n\r\nThe key to building good small habits is making them easy and satisfying. Want to drink more water? Keep a water bottle on your desk. Trying to exercise more? Lay out your workout clothes the night before. The easier it is to start, the more likely you are to stick with it.\r\n\r\nAccountability also plays a role. Sharing your goals with a friend or tracking your progress in a journal can give you an extra push to keep going, even when motivation dips. Remember, motivation may get you started, but habits are what keep you going.\r\n\r\nSmall habits may seem insignificant in the moment, but they shape who we become. The life you have today is a result of the small choices you’ve made over time—both good and bad. The good news is, it’s never too late to replace harmful habits with helpful ones.\r\n\r\nStart small. Stay consistent. And watch how those tiny actions, stacked together, can transform your life in ways you never imagined.', '2025-08-12 23:30:30', '2025-08-12 23:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('W9QKzvy1m6VkzTWauL6BVNzxBnphwEARA5uinwVL', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:141.0) Gecko/20100101 Firefox/141.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidG4zdFBwdkNuUkxmZFJjWkZTS1ZMVUZlMWVFaDJMN21WVnBvbHpKUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hdmFsb24tam91cm5hbC50ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODt9', 1755072159);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abu Zahed', 'abuzahed@example.com', NULL, '$2y$12$72F.ig.cBLeqRKgJFa6hN.6ndZvTG8IIGEONyCY.u5fB/033wOc6G', NULL, '2025-08-04 00:41:59', '2025-08-04 00:41:59'),
(2, 'Faiaz Rahman', 'faiaz@example.com', NULL, '$2y$12$xnguWhS9F72kaJ5oDk00g.FfblHgEI1zlm6h1vEt5L1/ZbKnVJQqK', NULL, '2025-08-04 00:53:56', '2025-08-04 00:53:56'),
(3, 'Tahseen Chow', 'chow@gmail.com', NULL, '$2y$12$8CUc93XvJ/fFTHNycbkWuemkT3mwZjKXpEfhnrrrs2wG6JoZ5RGUK', NULL, '2025-08-04 00:57:51', '2025-08-04 00:57:51'),
(4, 'Lightning McQueen', 'mcqueen@example.com', NULL, '$2y$12$HCMvEMLtsQHJY9pMPo7MCei.FmWjUSZ3ybc779Iaa5mmqWuqHbili', NULL, '2025-08-05 00:33:45', '2025-08-05 00:33:45'),
(5, 'John Doe', 'john@example.com', NULL, '$2y$12$Yxh73PmAjhL3LTz0q3On/Oq1llO5/xwDKXRHAguTp1UkhsI88JKzW', NULL, '2025-08-05 03:27:23', '2025-08-05 03:27:23'),
(6, 'Elise', 'elise@example.com', NULL, '$2y$12$Gzve0/2pbUuF2LRWfeJPbuPnRTBr9IVhTUwZOQe8r4ast744doACC', NULL, '2025-08-05 03:30:39', '2025-08-05 03:30:39'),
(7, 'Julia', 'julia@example.com', NULL, '$2y$12$Mj86p5pSadQIzldfiGNnbuNtUM2v6.ClBqrnU2FdZ1z4wZe6ATKPu', NULL, '2025-08-05 03:32:01', '2025-08-05 03:32:01'),
(8, 'Kiron', 'kiron@example.com', NULL, '$2y$12$rlvjKgp56ZLdgy5souFKIuJudsw88471h4JmaK0z/AEg6R0MfD96W', NULL, '2025-08-05 04:48:36', '2025-08-05 04:48:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_post_category_id_foreign` (`category_id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
