-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 05:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `hit_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_short_description`, `blog_long_description`, `blog_image`, `publication_status`, `hit_count`, `created_at`, `updated_at`) VALUES
(2, 12, 'React js', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit egestas vulputate. Sed eros turpis, aliquam gravida feugiat a, dictum sit amet orci. Phasellus vulputate bibendum turpis, vitae molestie ipsum rhoncus sit amet. Integer ornare urna eu dignissim bibendum. Mauris lacinia elit in diam commodo, sed molestie enim sagittis. Nunc bibendum lacinia dolor aliquet ullamcorper. Duis imperdiet vitae diam id interdum. Mauris malesuada et lectus ac pulvinar. Pellentesque et velit eu elit fringilla lacinia vel non massa. Nullam consequat suscipit placerat. Nulla sem nibh, congue id commodo sit amet, pretium nec odio. Pellentesque tortor elit, auctor non placerat condimentum, consequat non quam.</p>\r\n\r\n<p>Duis tellus turpis, consectetur vitae neque rutrum, porta pharetra ex. Aliquam pharetra laoreet augue, ultricies cursus nisl consequat a. Duis gravida leo ac enim ullamcorper imperdiet. Mauris ut tortor sollicitudin, aliquet risus non, sagittis erat. Vestibulum ut nunc sollicitudin, euismod erat ac, volutpat lectus. Nullam varius sodales pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam blandit lobortis enim, vitae ornare urna congue rhoncus. Vivamus et vestibulum elit. Quisque tincidunt accumsan eros quis interdum. Phasellus placerat mauris et vestibulum tincidunt. Suspendisse ornare finibus enim a porta. Ut urna neque, hendrerit vitae sodales eu, tincidunt in velit. Suspendisse sed est purus.</p>\r\n\r\n<p>Phasellus enim lacus, porta quis porta id, porttitor non felis. Nulla eu eros ut purus ullamcorper fringilla eget a leo. Vivamus enim velit, semper quis gravida eu, posuere vitae felis. Pellentesque nec risus vitae nunc aliquam ullamcorper sagittis at eros. Donec in efficitur sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nec sapien a diam tincidunt sollicitudin facilisis et eros. Mauris libero ex, semper ut sem at, posuere gravida sem.</p>', 'blog-image/React.jpg', 1, 0, '2019-09-16 22:18:01', '2019-09-19 20:43:06'),
(3, 12, 'Vue Js', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit egestas vulputate. Sed eros turpis, aliquam gravida feugiat a, dictum sit amet orci. Phasellus vulputate bibendum turpis, vitae molestie ipsum rhoncus sit amet. Integer ornare urna eu dignissim bibendum. Mauris lacinia elit in diam commodo, sed molestie enim sagittis. Nunc bibendum lacinia dolor aliquet ullamcorper. Duis imperdiet vitae diam id interdum. Mauris malesuada et lectus ac pulvinar. Pellentesque et velit eu elit fringilla lacinia vel non massa. Nullam consequat suscipit placerat. Nulla sem nibh, congue id commodo sit amet, pretium nec odio. Pellentesque tortor elit, auctor non placerat condimentum, consequat non quam.</p>\r\n\r\n<p>Duis tellus turpis, consectetur vitae neque rutrum, porta pharetra ex. Aliquam pharetra laoreet augue, ultricies cursus nisl consequat a. Duis gravida leo ac enim ullamcorper imperdiet. Mauris ut tortor sollicitudin, aliquet risus non, sagittis erat. Vestibulum ut nunc sollicitudin, euismod erat ac, volutpat lectus. Nullam varius sodales pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam blandit lobortis enim, vitae ornare urna congue rhoncus. Vivamus et vestibulum elit. Quisque tincidunt accumsan eros quis interdum. Phasellus placerat mauris et vestibulum tincidunt. Suspendisse ornare finibus enim a porta. Ut urna neque, hendrerit vitae sodales eu, tincidunt in velit. Suspendisse sed est purus.</p>\r\n\r\n<p>Phasellus enim lacus, porta quis porta id, porttitor non felis. Nulla eu eros ut purus ullamcorper fringilla eget a leo. Vivamus enim velit, semper quis gravida eu, posuere vitae felis. Pellentesque nec risus vitae nunc aliquam ullamcorper sagittis at eros. Donec in efficitur sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nec sapien a diam tincidunt sollicitudin facilisis et eros. Mauris libero ex, semper ut sem at, posuere gravida sem.</p>', 'blog-image/download (1).jpg', 1, 4, '2019-09-18 22:50:56', '2019-09-24 21:27:29'),
(4, 12, 'Anguler Js', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit egestas vulputate. Sed eros turpis, aliquam gravida feugiat a, dictum sit amet orci. Phasellus vulputate bibendum turpis, vitae molestie ipsum rhoncus sit amet. Integer ornare urna eu dignissim bibendum. Mauris lacinia elit in diam commodo, sed molestie enim sagittis. Nunc bibendum lacinia dolor aliquet ullamcorper. Duis imperdiet vitae diam id interdum. Mauris malesuada et lectus ac pulvinar. Pellentesque et velit eu elit fringilla lacinia vel non massa. Nullam consequat suscipit placerat. Nulla sem nibh, congue id commodo sit amet, pretium nec odio. Pellentesque tortor elit, auctor non placerat condimentum, consequat non quam.</p>\r\n\r\n<p>Duis tellus turpis, consectetur vitae neque rutrum, porta pharetra ex. Aliquam pharetra laoreet augue, ultricies cursus nisl consequat a. Duis gravida leo ac enim ullamcorper imperdiet. Mauris ut tortor sollicitudin, aliquet risus non, sagittis erat. Vestibulum ut nunc sollicitudin, euismod erat ac, volutpat lectus. Nullam varius sodales pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam blandit lobortis enim, vitae ornare urna congue rhoncus. Vivamus et vestibulum elit. Quisque tincidunt accumsan eros quis interdum. Phasellus placerat mauris et vestibulum tincidunt. Suspendisse ornare finibus enim a porta. Ut urna neque, hendrerit vitae sodales eu, tincidunt in velit. Suspendisse sed est purus.</p>\r\n\r\n<p>Phasellus enim lacus, porta quis porta id, porttitor non felis. Nulla eu eros ut purus ullamcorper fringilla eget a leo. Vivamus enim velit, semper quis gravida eu, posuere vitae felis. Pellentesque nec risus vitae nunc aliquam ullamcorper sagittis at eros. Donec in efficitur sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nec sapien a diam tincidunt sollicitudin facilisis et eros. Mauris libero ex, semper ut sem at, posuere gravida sem.</p>', 'blog-image/download.png', 1, 0, '2019-09-18 22:52:13', '2019-09-19 20:42:43'),
(6, 11, 'Animated Movie', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit egestas vulputate. Sed eros turpis, aliquam gravida feugiat a, dictum sit amet orci. Phasellus vulputate bibendum turpis, vitae molestie ipsum rhoncus sit amet. Integer ornare urna eu dignissim bibendum. Mauris lacinia elit in diam commodo, sed molestie enim sagittis. Nunc bibendum lacinia dolor aliquet ullamcorper. Duis imperdiet vitae diam id interdum. Mauris malesuada et lectus ac pulvinar. Pellentesque et velit eu elit fringilla lacinia vel non massa. Nullam consequat suscipit placerat. Nulla sem nibh, congue id commodo sit amet, pretium nec odio. Pellentesque tortor elit, auctor non placerat condimentum, consequat non quam.</p>\r\n\r\n<p>Duis tellus turpis, consectetur vitae neque rutrum, porta pharetra ex. Aliquam pharetra laoreet augue, ultricies cursus nisl consequat a. Duis gravida leo ac enim ullamcorper imperdiet. Mauris ut tortor sollicitudin, aliquet risus non, sagittis erat. Vestibulum ut nunc sollicitudin, euismod erat ac, volutpat lectus. Nullam varius sodales pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam blandit lobortis enim, vitae ornare urna congue rhoncus. Vivamus et vestibulum elit. Quisque tincidunt accumsan eros quis interdum. Phasellus placerat mauris et vestibulum tincidunt. Suspendisse ornare finibus enim a porta. Ut urna neque, hendrerit vitae sodales eu, tincidunt in velit. Suspendisse sed est purus.</p>\r\n\r\n<p>Phasellus enim lacus, porta quis porta id, porttitor non felis. Nulla eu eros ut purus ullamcorper fringilla eget a leo. Vivamus enim velit, semper quis gravida eu, posuere vitae felis. Pellentesque nec risus vitae nunc aliquam ullamcorper sagittis at eros. Donec in efficitur sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nec sapien a diam tincidunt sollicitudin facilisis et eros. Mauris libero ex, semper ut sem at, posuere gravida sem.</p>', 'blog-image/Big_hero_6_finale_.jpg', 1, 0, '2019-09-19 19:56:08', '2019-09-19 20:42:32'),
(7, 13, 'Exercise & Fitness', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit egestas vulputate. Sed eros turpis, aliquam gravida feugiat a, dictum sit amet orci. Phasellus vulputate bibendum turpis, vitae molestie ipsum rhoncus sit amet. Integer ornare urna eu dignissim bibendum. Mauris lacinia elit in diam commodo, sed molestie enim sagittis. Nunc bibendum lacinia dolor aliquet ullamcorper. Duis imperdiet vitae diam id interdum. Mauris malesuada et lectus ac pulvinar. Pellentesque et velit eu elit fringilla lacinia vel non massa. Nullam consequat suscipit placerat. Nulla sem nibh, congue id commodo sit amet, pretium nec odio. Pellentesque tortor elit, auctor non placerat condimentum, consequat non quam.</p>\r\n\r\n<p>Duis tellus turpis, consectetur vitae neque rutrum, porta pharetra ex. Aliquam pharetra laoreet augue, ultricies cursus nisl consequat a. Duis gravida leo ac enim ullamcorper imperdiet. Mauris ut tortor sollicitudin, aliquet risus non, sagittis erat. Vestibulum ut nunc sollicitudin, euismod erat ac, volutpat lectus. Nullam varius sodales pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam blandit lobortis enim, vitae ornare urna congue rhoncus. Vivamus et vestibulum elit. Quisque tincidunt accumsan eros quis interdum. Phasellus placerat mauris et vestibulum tincidunt. Suspendisse ornare finibus enim a porta. Ut urna neque, hendrerit vitae sodales eu, tincidunt in velit. Suspendisse sed est purus.</p>\r\n\r\n<p>Phasellus enim lacus, porta quis porta id, porttitor non felis. Nulla eu eros ut purus ullamcorper fringilla eget a leo. Vivamus enim velit, semper quis gravida eu, posuere vitae felis. Pellentesque nec risus vitae nunc aliquam ullamcorper sagittis at eros. Donec in efficitur sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nec sapien a diam tincidunt sollicitudin facilisis et eros. Mauris libero ex, semper ut sem at, posuere gravida sem.</p>', 'blog-image/machines-91849.jpg', 1, 2, '2019-09-19 20:03:06', '2019-09-24 21:28:28'),
(8, 16, 'Amazon Forest', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit egestas vulputate. Sed eros turpis, aliquam gravida feugiat a, dictum sit amet orci. Phasellus vulputate bibendum turpis, vitae molestie ipsum rhoncus sit amet. Integer ornare urna eu dignissim bibendum. Mauris lacinia elit in diam commodo, sed molestie enim sagittis. Nunc bibendum lacinia dolor aliquet ullamcorper. Duis imperdiet vitae diam id interdum. Mauris malesuada et lectus ac pulvinar. Pellentesque et velit eu elit fringilla lacinia vel non massa. Nullam consequat suscipit placerat. Nulla sem nibh, congue id commodo sit amet, pretium nec odio. Pellentesque tortor elit, auctor non placerat condimentum, consequat non quam.</p>\r\n\r\n<p>Duis tellus turpis, consectetur vitae neque rutrum, porta pharetra ex. Aliquam pharetra laoreet augue, ultricies cursus nisl consequat a. Duis gravida leo ac enim ullamcorper imperdiet. Mauris ut tortor sollicitudin, aliquet risus non, sagittis erat. Vestibulum ut nunc sollicitudin, euismod erat ac, volutpat lectus. Nullam varius sodales pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam blandit lobortis enim, vitae ornare urna congue rhoncus. Vivamus et vestibulum elit. Quisque tincidunt accumsan eros quis interdum. Phasellus placerat mauris et vestibulum tincidunt. Suspendisse ornare finibus enim a porta. Ut urna neque, hendrerit vitae sodales eu, tincidunt in velit. Suspendisse sed est purus.</p>\r\n\r\n<p>Phasellus enim lacus, porta quis porta id, porttitor non felis. Nulla eu eros ut purus ullamcorper fringilla eget a leo. Vivamus enim velit, semper quis gravida eu, posuere vitae felis. Pellentesque nec risus vitae nunc aliquam ullamcorper sagittis at eros. Donec in efficitur sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nec sapien a diam tincidunt sollicitudin facilisis et eros. Mauris libero ex, semper ut sem at, posuere gravida sem.</p>', 'blog-image/images (1).jpg', 1, 0, '2019-09-19 20:06:54', '2019-09-19 20:42:02'),
(9, 10, 'Cricket', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit egestas vulputate. Sed eros turpis, aliquam gravida feugiat a, dictum sit amet orci. Phasellus vulputate bibendum turpis, vitae molestie ipsum rhoncus sit amet. Integer ornare urna eu dignissim bibendum. Mauris lacinia elit in diam commodo, sed molestie enim sagittis. Nunc bibendum lacinia dolor aliquet ullamcorper. Duis imperdiet vitae diam id interdum. Mauris malesuada et lectus ac pulvinar. Pellentesque et velit eu elit fringilla lacinia vel non massa. Nullam consequat suscipit placerat. Nulla sem nibh, congue id commodo sit amet, pretium nec odio. Pellentesque tortor elit, auctor non placerat condimentum, consequat non quam.</p>\r\n\r\n<p>Duis tellus turpis, consectetur vitae neque rutrum, porta pharetra ex. Aliquam pharetra laoreet augue, ultricies cursus nisl consequat a. Duis gravida leo ac enim ullamcorper imperdiet. Mauris ut tortor sollicitudin, aliquet risus non, sagittis erat. Vestibulum ut nunc sollicitudin, euismod erat ac, volutpat lectus. Nullam varius sodales pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam blandit lobortis enim, vitae ornare urna congue rhoncus. Vivamus et vestibulum elit. Quisque tincidunt accumsan eros quis interdum. Phasellus placerat mauris et vestibulum tincidunt. Suspendisse ornare finibus enim a porta. Ut urna neque, hendrerit vitae sodales eu, tincidunt in velit. Suspendisse sed est purus.</p>\r\n\r\n<p>Phasellus enim lacus, porta quis porta id, porttitor non felis. Nulla eu eros ut purus ullamcorper fringilla eget a leo. Vivamus enim velit, semper quis gravida eu, posuere vitae felis. Pellentesque nec risus vitae nunc aliquam ullamcorper sagittis at eros. Donec in efficitur sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nec sapien a diam tincidunt sollicitudin facilisis et eros. Mauris libero ex, semper ut sem at, posuere gravida sem.</p>', 'blog-image/cricket.jpg', 1, 3, '2019-09-19 20:17:58', '2019-09-24 21:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(10, 'Sports', 'Morbi sagittis dui eu rhoncus elementum. Mauris sed rutrum libero.', 1, '2019-09-16 04:08:37', '2019-09-16 04:12:12'),
(11, 'Entertainment', 'Morbi sagittis dui eu rhoncus elementum. Mauris sed rutrum libero.', 1, '2019-09-16 04:09:26', '2019-09-16 04:12:20'),
(12, 'Education', 'Morbi sagittis dui eu rhoncus elementum. Mauris sed rutrum libero.', 1, '2019-09-16 04:09:40', '2019-09-16 04:12:27'),
(13, 'Lifestyle', 'Morbi sagittis dui eu rhoncus elementum. Mauris sed rutrum libero.', 1, '2019-09-16 04:10:22', '2019-09-16 04:12:34'),
(14, 'Politics', 'Morbi sagittis dui eu rhoncus elementum. Mauris sed rutrum libero.', 0, '2019-09-16 04:16:23', '2019-09-16 04:16:23'),
(15, 'International', 'Morbi sagittis dui eu rhoncus elementum. Mauris sed rutrum libero.', 0, '2019-09-16 04:16:38', '2019-09-16 04:16:38'),
(16, 'Travel', 'Morbi sagittis dui eu rhoncus elementum. Mauris sed rutrum libero.', 1, '2019-09-16 04:16:59', '2019-09-16 04:16:59'),
(17, 'Economy', 'Morbi sagittis dui eu rhoncus elementum. Mauris sed rutrum libero.', 0, '2019-09-16 04:18:05', '2019-09-16 04:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `visitor_id`, `blog_id`, `comment`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 12, 8, 'Amazon Forest is really beautiful forest in the world.', 1, '2019-09-22 20:04:12', '2019-09-24 20:00:36'),
(2, 1, 6, 'Big Hero 6 one of my favorite movie.', 1, '2019-09-22 20:07:27', '2019-09-24 20:00:34'),
(3, 13, 9, 'Cricket is my favorite game.', 1, '2019-09-22 20:10:00', '2019-09-24 20:00:30');

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
(3, '2019_09_15_015648_create_categories_table', 2),
(4, '2019_09_16_063912_create_blogs_table', 3),
(5, '2019_09_20_034610_create_sign_ups_table', 4),
(6, '2019_09_20_035709_create_vigitors_table', 5),
(7, '2019_09_22_113548_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('blog@gmail.com', '$2y$10$WOut4nMVQh6vlSiT47cG/ec88jdogRq8rbQkDqiYmzhaqIaXcx/Nu', '2019-09-12 21:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Blog', 'blog@gmail.com', NULL, '$2y$10$Gpe9ulIUnvPKmK303CjFveKHl0Lb1O7LmoLrLd5d39wgzNA.i6u6O', NULL, '2019-09-12 21:36:45', '2019-09-12 21:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'MD.', 'Cool', 'cool@gmail.com', '$2y$10$vXrTOx9rC806NJF54cWy5uVwHRzq7ZhYXvEyI23zj0bwexdDQBR9S', '0123456789', 'Cool Street', '2019-09-20 07:00:15', '2019-09-20 07:00:15'),
(12, 'Ami', 'Akter', 'amikhan@hotmail.com', '$2y$10$uJXOOiEZRVB.M7JWf8Mb2ebu2osPnex9NqxL9QmlNJYXHkhHrxG/i', '478951233', 'Dhaka', '2019-09-21 03:00:20', '2019-09-21 03:00:20'),
(13, 'Shorna', 'Khan', 'khan@yahoo.com', '$2y$10$QjjodYj0TnbfoLvsGWTf5./kGPwoggUb4JBhKJm5pbyq3pm7jtFYa', '123587956313', 'Dhaka', '2019-09-21 03:02:43', '2019-09-21 03:02:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
