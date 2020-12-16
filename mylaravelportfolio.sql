-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 05:51 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mylaravelportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Who\'s this guy', 'I\'m a web developer from Philippines. I love to create, developed new things around web. I have strong passion to create best user experiece and to surpass their satisfactions.', 'about.png', '2019-02-14 19:37:51', '2019-02-14 19:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Title 1', 'Description 1', '1.png', '2019-02-10 22:16:04', '2019-02-10 22:16:04'),
(2, 'Title 2', 'Description 2', '2.png', '2019-02-10 18:00:00', '2019-02-10 16:00:00'),
(3, 'Title 3', 'Description 3', '3.png', '2019-02-10 16:00:00', '2019-02-10 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `row_columns` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `created_at`, `updated_at`, `row_columns`, `description`) VALUES
(1, 'graduate.png', '2019-02-11 01:06:57', '2019-02-11 01:08:23', 'wow animated flipInX slower', 'Graduation day brings with it a roller coaster of emotions for grads and their families alike. It’s a time of celebration and achievement. There is reflection on past trials and successes as well as hope for the future.\r\n\r\nAs a relative or close friend of the grad, you’ve already done your job of shaping their mind and filling their heart. Now it’s time to take a step back and let them shine. All their hard work has trained them for what is to come.'),
(2, 'guitar.png', '2019-02-11 01:27:00', '2019-02-11 01:27:00', 'wow animated flipInY slower', 'Elvis Presley Quotes\r\nRock and roll music, if you like it, if you feel it, you can\'t help but move to it. That\'s what happens to me. I can\'t help it.'),
(3, 'focus.png', '2019-02-11 01:28:18', '2019-02-11 01:28:18', 'wow animated flip slower', 'Focus is the desire to achieve greatness and success in whatever you do.'),
(4, 'easy.png', '2019-02-11 01:29:00', '2019-02-11 01:29:00', 'wow animated flipInX slower', 'If you can\'t stop the wave learn how to surf.'),
(5, 'rizal_park.png', '2019-02-11 01:29:32', '2019-02-11 01:29:32', 'wow animated flipInY slower', 'I am a hero');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `firstname`, `lastname`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'kevin ishmael', 'holgado', 'web developer', 'wallpaper.png', '2019-02-10 18:49:00', '2019-02-10 18:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_08_021144_create_carousels_table', 1),
(4, '2019_02_11_011445_create_home_page_table', 1),
(5, '2019_02_11_022244_add_lastname_to_home_page_table', 1),
(6, '2019_02_11_085431_create_gallery_table', 2),
(8, '2019_02_11_091915_add_row_columns_to_gallery_table', 3),
(9, '2019_02_13_012547_add_description_to_gallery_table', 4),
(10, '2019_02_15_021602_create_abouts_table', 5),
(11, '2019_02_15_062904_create_skills_table', 6),
(13, '2019_03_12_033746_create_portfolio_table', 7),
(15, '2019_03_12_073657_create_portfolio_images_table', 8),
(16, '2019_03_13_064752_create_portfolio_categories_table', 9),
(17, '2019_03_14_015757_add_website_to_portfolio', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_category_id` int(191) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `portfolio_category_id`, `image`, `created_at`, `updated_at`, `website`) VALUES
(1, 'Esrotakz Blogging Site', 'This is a blogging site of esrotakz', 3, 'esrotakz.png', '2019-03-11 23:11:46', '2019-03-11 23:11:46', 'http://esrotakz.genserv-ph.com/'),
(2, 'Genserv Website 2019', 'This is Genserv International Inc. made in CodeIgnaiter PHP Framework.', 2, 'gen2019.png', '2019-03-12 16:00:00', '2019-03-12 16:00:00', 'http://www.genserv-ph.com/'),
(3, 'My Portfolio', 'This is my portfolio made in Laravel PHP Framework.', 1, 'mylaravelportfolio.png', '2019-03-12 19:18:52', '2019-03-12 19:18:52', 'http://kevinishmael.genserv-ph.com'),
(4, 'KevBlogCI', 'This is a blogging site made in CodeIgniter PHP Framework.', 2, 'kevblogci.png', '2019-03-13 16:00:00', '2019-03-13 16:00:00', 'http://kevblog2.genserv-ph.com/'),
(5, 'Genserv Website 2018', 'This is the website of Genserv International Inc. in year 2018 made in native PHP.', 3, 'gen2018.png', NULL, NULL, 'http://gen2018.genserv-ph.com/');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'laravel', '2019-03-12 16:00:00', '2019-03-12 16:00:00'),
(2, 'codeigniter', '2019-03-12 16:00:00', '2019-03-12 16:00:00'),
(3, 'native php', '2019-03-12 16:00:00', '2019-03-12 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `portfolio_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'esrotakz1.png', '2019-03-11 23:53:05', '2019-03-11 23:53:05'),
(2, 1, 'esrotakz2.png', '2019-03-11 16:00:00', '2019-03-11 16:00:00'),
(3, 1, 'esrotakz3.png', '2019-03-11 16:00:00', '2019-03-11 16:00:00'),
(4, 1, 'esrotakz4.png', '2019-03-11 16:00:00', '2019-03-11 16:00:00'),
(5, 2, 'gen2019a.png', '2019-03-12 19:09:55', '2019-03-12 19:11:46'),
(6, 2, 'gen2019b.png', '2019-03-12 19:13:20', '2019-03-12 19:13:20'),
(7, 2, 'gen2019c.png', '2019-03-12 19:13:40', '2019-03-12 19:13:40'),
(8, 2, 'gen2019d.png', '2019-03-12 19:13:56', '2019-03-12 19:13:56'),
(9, 2, 'gen2019e.png', '2019-03-12 19:14:12', '2019-03-12 19:14:12'),
(10, 2, 'gen2019f.png', '2019-03-12 19:14:27', '2019-03-12 19:14:27'),
(11, 3, 'mylaravelportfolio1.png', '2019-03-12 16:00:00', '2019-03-12 16:00:00'),
(12, 3, 'mylaravelportfolio2.png', '2019-03-12 16:00:00', '2019-03-12 16:00:00'),
(13, 4, 'kevblogci1.png', NULL, NULL),
(14, 4, 'kevblogci2.png', NULL, NULL),
(15, 4, 'kevblogci3.png', NULL, NULL),
(16, 4, 'kevblogci4.png', NULL, NULL),
(17, 4, 'kevblogci5.png', NULL, NULL),
(18, 5, 'gen2018a.png', NULL, NULL),
(19, 5, 'gen2018b.png', NULL, NULL),
(20, 5, 'gen2018c.png', NULL, NULL),
(21, 5, 'gen2018d.png', NULL, NULL),
(22, 5, 'gen2018e.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `percentage`, `image`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 90, 'html.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(2, 'CSS', 80, 'css.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(3, 'JAVASCRIPT', 60, 'js.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(4, 'JQUERY', 50, 'jquery.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(5, 'BOOTSTRAP', 70, 'bootstrap.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(6, 'PHP', 85, 'php.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(7, 'MYSQL', 85, 'mysql.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(8, 'CODEIGNITER', 60, 'codeigniter.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(9, 'LARAVEL', 70, 'laravel.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(10, 'PHOTOSHOP', 85, 'photoshop.png', '2019-02-14 16:00:00', '2019-02-14 16:00:00'),
(11, 'GIT', 60, 'git.png', '2019-03-20 02:25:21', '2019-03-20 02:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
