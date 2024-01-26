-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-01-26 03:36:11
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `konchan`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `foodstuff`
--

CREATE TABLE `foodstuff` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `ingredient_name` varchar(256) NOT NULL COMMENT '食材名',
  `ingredient_category_id` bigint(20) NOT NULL COMMENT '食材カテゴリID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ',
  `ingredient_image` blob NOT NULL COMMENT '食材画像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='食材';

--
-- テーブルのデータのダンプ `foodstuff`
--

INSERT INTO `foodstuff` (`id`, `ingredient_name`, `ingredient_category_id`, `create_date`, `update_date`, `delete_date`, `delete_flag`, `ingredient_image`) VALUES
(1, 'アスパラガス', 3, '2024-01-11 12:20:49', '2024-01-11 12:20:49', NULL, 0, 0x412e706e67),
(2, 'ベーコン', 1, '2024-01-11 12:20:49', '2024-01-11 12:20:49', NULL, 0, 0x422e706e67),
(3, '大根', 3, '2024-01-11 12:20:49', '2024-01-11 12:20:49', NULL, 0, 0x442e706e67),
(4, 'イカ', 2, '2024-01-16 10:49:29', '2024-01-16 10:49:29', NULL, 0, 0x494b412e706e67),
(5, '米', 4, '2024-01-16 10:50:20', '2024-01-16 10:50:20', NULL, 0, 0x4b4f4d452e706e67),
(6, 'ウインナー', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x55494e4e45522e706e67),
(7, 'ハム', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x48414d552e706e67),
(8, '牛肩肉', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x475f4b4154412e706e67),
(9, '牛バラ肉', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x475f424152412e706e67),
(10, '牛もも肉', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x475f4d4f4d4f2e706e67),
(11, '牛ひき肉', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x475f48494b492e706e67),
(12, '牛タン', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x475f54414e2e706e67),
(13, '牛ホルモン', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x475f484f52552e706e67),
(14, '牛レバー', 1, '2024-01-22 10:46:29', '2024-01-22 10:46:29', NULL, 0, 0x475f524542412e706e67),
(15, '牛豚合挽き肉', 1, '2024-01-23 12:09:54', '2024-01-23 12:09:54', NULL, 0, 0x47425f48494b492e706e67),
(16, '豚もも肉', 1, '2024-01-23 12:09:54', '2024-01-23 12:09:54', NULL, 0, 0x425f4d4f4d4f2e706e67),
(17, '豚バラ肉', 1, '2024-01-23 12:09:54', '2024-01-23 12:09:54', NULL, 0, 0x425f424152412e706e67),
(18, '豚ロース肉', 1, '2024-01-23 12:09:54', '2024-01-23 12:09:54', NULL, 0, 0x425f524f53452e706e67),
(19, '豚肩ロース肉', 1, '2024-01-23 12:09:54', '2024-01-23 12:09:54', NULL, 0, 0x425f4b415441522e706e67),
(20, '豚ヒレ肉', 1, '2024-01-23 12:09:54', '2024-01-23 12:09:54', NULL, 0, 0x425f484952452e706e67),
(21, '豚タン', 1, '2024-01-23 12:09:54', '2024-01-23 12:09:54', NULL, 0, 0x425f54414e2e706e67),
(22, '豚ひき肉', 1, '2024-01-23 12:09:54', '2024-01-23 12:09:54', NULL, 0, 0x425f48494b492e706e67),
(23, '鶏むね肉', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f4d554e452e706e67),
(24, '鶏もも肉', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f4d4f4d4f2e706e67),
(25, '鶏ささみ肉', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f534153412e706e67),
(26, '鶏せせり肉', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f534553452e706e67),
(27, '鶏ひき肉', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f48494b492e706e67),
(28, '砂肝', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f53554e41472e706e67),
(29, '手羽先', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f53414b492e706e67),
(30, '手羽中', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f4e414b412e706e67),
(31, '手羽元', 1, '2024-01-23 12:20:35', '2024-01-23 12:20:35', NULL, 0, 0x545f4d4f544f2e706e67),
(32, 'マグロ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x4d414755524f2e706e67),
(33, 'サケ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x5359414b452e706e67),
(34, 'タイ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x5441492e706e67),
(35, 'ブリ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x425552492e706e67),
(36, 'カツオ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x4b4154554f2e706e67),
(37, 'サンマ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x53414e4d412e706e67),
(38, 'サバ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x534142412e706e67),
(39, 'カレイ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x4b415245492e706e67),
(40, 'イワシ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x49574153492e706e67),
(41, 'アジ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x414a492e706e67),
(42, 'アユ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x4159552e706e67),
(43, 'ホッケ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x484f4b4b452e706e67),
(44, 'タラ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x544152412e706e67),
(45, 'サワラ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x5341574152412e706e67),
(46, 'ウナギ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x554e4147492e706e67),
(47, 'シラス', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x5349524153552e706e67),
(48, 'タコ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x54414b4f2e706e67),
(49, 'エビ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x4542492e706e67),
(50, 'アサリ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x41534152492e706e67),
(51, 'シジミ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x53494a494d492e706e67),
(52, 'サザエ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x53415a41452e706e67),
(53, 'アワビ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x41574142492e706e67),
(54, '明太子', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x4d454e5441492e706e67),
(55, 'イクラ', 2, '2024-01-24 10:52:54', '2024-01-24 10:52:54', NULL, 0, 0x494b5552412e706e67),
(56, 'ブロッコリー', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4255524f4b4b4f52492e706e67),
(57, 'コーン', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x434f4f4e2e706e67),
(58, 'ゴーヤ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x474f4f59412e706e67),
(59, 'グリンピース', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x475245454e504541532e706e67),
(60, 'ハクサイ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x48414b555341492e706e67),
(61, 'ほうれん草', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x484f5552454e534f552e706e67),
(62, 'インゲン', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x494e47454e2e706e67),
(63, '小松菜', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4b4f4d4154554e412e706e67),
(64, '青ネギ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4b4f4e4547492e706e67),
(65, 'キャベツ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4b5941424554552e706e67),
(66, 'トマト', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x544f4d41544f2e706e67),
(67, 'ミニトマト', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4d494e49542e706e67),
(68, '水菜', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4d495a554e412e706e67),
(69, 'もやし', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4d4f594153492e706e67),
(70, 'ナス', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4e4153552e706e67),
(71, 'ニンジン', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4e494e4a494e2e706e67),
(73, 'ニンニクの芽', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4e494e4e494b554e4f4d452e706e67),
(74, 'ニラ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4e4952412e706e67),
(75, 'オクラ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4f4b5552412e706e67),
(76, 'パプリカ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x5041505552494b412e706e67),
(77, 'ピーマン', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x5049494d414e2e706e67),
(78, 'レンコン', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x52454e4b4f4e2e706e67),
(79, 'レタス', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x5245544153552e706e67),
(80, 'サニーレタス', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x53414e495245544153552e706e67),
(81, 'さやえんどう', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x53415941454e444f552e706e67),
(82, 'セロリ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x5345524f52492e706e67),
(83, '春菊', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x5348554e47494b552e706e67),
(84, '白ネギ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x5349524f4e2e706e67),
(85, 'しし唐', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x53495349544f552e706e67),
(86, 'しそ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x5349534f2e706e67),
(87, 'そら豆', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x534f52414d414d452e706e67),
(88, 'タケノコ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x54414b454e4f4b4f2e706e67),
(89, '玉ねぎ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x54414d414e4547492e706e67),
(90, 'チンゲン菜', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x54494e47454e5341492e706e67),
(91, '冬瓜', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x544f5547414e2e706e67),
(92, '豆苗', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x544f554d594f552e706e67),
(93, 'ヤングコーン', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x59434f4f4e2e706e67),
(94, 'ズッキーニ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x5a554b4b494e492e706e67),
(95, 'カブ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4b4142552e706e67),
(96, 'かぼちゃ', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4b41424f4348412e706e67),
(97, 'きゅうり', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4b59555552492e706e67),
(98, 'エンドウ豆', 3, '2024-01-24 13:43:17', '2024-01-24 13:43:17', NULL, 0, 0x4544414d414d452e706e67),
(99, 'ニンニク', 3, '2024-01-24 13:50:34', '2024-01-24 13:50:34', NULL, 0, 0x4e494e4e494b552e706e67),
(100, '生姜', 3, '2024-01-24 13:55:48', '2024-01-24 13:55:48', NULL, 0, 0x53484f5547412e706e67),
(101, 'じゃがいも', 3, '2024-01-25 10:35:59', '2024-01-25 10:35:59', NULL, 0, 0x4a414741494d4f2e706e67),
(102, '里芋', 3, '2024-01-25 10:35:59', '2024-01-25 10:35:59', NULL, 0, 0x5341544f494d4f2e706e67),
(103, '長芋', 3, '2024-01-25 10:35:59', '2024-01-25 10:35:59', NULL, 0, 0x4e414741494d4f2e706e67),
(104, 'さつまいも', 3, '2024-01-25 10:35:59', '2024-01-25 10:35:59', NULL, 0, 0x534154554d41494d4f2e706e67);

-- --------------------------------------------------------

--
-- テーブルの構造 `genre`
--

CREATE TABLE `genre` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `genre_name` varchar(256) NOT NULL COMMENT 'ジャンル名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ジャンル';

--
-- テーブルのデータのダンプ `genre`
--

INSERT INTO `genre` (`id`, `genre_name`, `create_date`, `update_date`, `delete_date`, `delete_flag`) VALUES
(1, '和風料理', '2024-01-11 11:51:40', '2024-01-11 11:51:40', NULL, 0),
(2, '中華料理', '2024-01-11 11:51:40', '2024-01-11 11:51:40', NULL, 0),
(3, '洋風料理', '2024-01-11 11:51:40', '2024-01-11 11:51:40', NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `ingredient_category`
--

CREATE TABLE `ingredient_category` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `ingredient_category_name` varchar(256) NOT NULL COMMENT '食材カテゴリ名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='食材カテゴリ';

--
-- テーブルのデータのダンプ `ingredient_category`
--

INSERT INTO `ingredient_category` (`id`, `ingredient_category_name`, `create_date`, `update_date`, `delete_date`, `delete_flag`) VALUES
(1, '肉', '2024-01-11 11:55:10', '2024-01-11 11:55:10', NULL, 0),
(2, '魚', '2024-01-11 11:58:22', '2024-01-11 11:58:22', NULL, 0),
(3, '野菜', '2024-01-11 11:59:05', '2024-01-11 11:59:05', NULL, 0),
(4, 'その他', '2024-01-11 11:59:50', '2024-01-11 11:59:50', NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `m_coupon`
--

CREATE TABLE `m_coupon` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `prize_id` bigint(20) NOT NULL COMMENT '景品id',
  `coupon_name` varchar(256) NOT NULL COMMENT 'クーポン名',
  `discount_rate` int(100) NOT NULL COMMENT '割引率',
  `coupon_image` blob NOT NULL COMMENT 'クーポン画像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='マスタークーポン';

--
-- テーブルのデータのダンプ `m_coupon`
--

INSERT INTO `m_coupon` (`id`, `prize_id`, `coupon_name`, `discount_rate`, `coupon_image`) VALUES
(1, 1, '99%OFFクーポン', 99, ''),
(2, 2, '98%OFFクーポン', 98, ''),
(3, 3, '97%OFFクーポン', 97, ''),
(4, 4, '1%OFFクーポン', 1, '');

-- --------------------------------------------------------

--
-- テーブルの構造 `prize`
--

CREATE TABLE `prize` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `prize_name` varchar(256) NOT NULL COMMENT '景品名',
  `prize_image` blob DEFAULT NULL COMMENT '景品画像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='景品';

--
-- テーブルのデータのダンプ `prize`
--

INSERT INTO `prize` (`id`, `prize_name`, `prize_image`) VALUES
(1, 'A賞', NULL),
(2, 'B賞', NULL),
(3, 'C賞', NULL),
(4, 'D賞', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `recipe`
--

CREATE TABLE `recipe` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `prefectures_id` int(47) NOT NULL COMMENT '都道府県番号',
  `recipe_name` varchar(50) NOT NULL COMMENT 'レシピ名',
  `recipe` varchar(10000) NOT NULL COMMENT '作り方',
  `cooking_time` int(255) NOT NULL COMMENT '調理時間',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ',
  `recipe_image` blob NOT NULL COMMENT 'レシピ画像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ';

--
-- テーブルのデータのダンプ `recipe`
--

INSERT INTO `recipe` (`id`, `prefectures_id`, `recipe_name`, `recipe`, `cooking_time`, `create_date`, `update_date`, `delete_date`, `delete_flag`, `recipe_image`) VALUES
(1, 0, 'アスパラベーコン', '巻いて焼く', 3, '2024-01-11 12:37:08', '2024-01-11 12:37:08', NULL, 0, 0x41422e706e67),
(2, 0, '切り干し大根', '切って浸す', 9, '2024-01-11 12:37:08', '2024-01-11 12:37:08', NULL, 0, 0x4b442e706e67),
(3, 1, 'イカ飯', '焼いて米を詰める', 10, '2024-01-16 10:53:46', '2024-01-16 10:53:46', NULL, 0, 0x494b414d4553492e706e67),
(4, 0, '焼きベーコン', '2分焼く', 2, '2024-01-25 11:36:39', '2024-01-25 11:36:39', NULL, 0, 0x4242422e706e67);

-- --------------------------------------------------------

--
-- テーブルの構造 `recipe_genre`
--

CREATE TABLE `recipe_genre` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID		',
  `genre_id` bigint(20) NOT NULL COMMENT 'ジャンルID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ_ジャンル';

--
-- テーブルのデータのダンプ `recipe_genre`
--

INSERT INTO `recipe_genre` (`id`, `recipe_id`, `genre_id`, `create_date`, `update_date`, `delete_date`, `delete_flag`) VALUES
(1, 1, 1, '2024-01-15 10:16:04', '2024-01-15 10:16:04', NULL, 0),
(2, 2, 1, '2024-01-15 10:16:45', '2024-01-15 10:16:45', NULL, 0),
(3, 3, 1, '2024-01-16 11:13:32', '2024-01-16 11:13:32', NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `recipe_ingredient`
--

CREATE TABLE `recipe_ingredient` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `ingredient_id` bigint(20) NOT NULL COMMENT '食材ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ_食材';

--
-- テーブルのデータのダンプ `recipe_ingredient`
--

INSERT INTO `recipe_ingredient` (`id`, `recipe_id`, `ingredient_id`, `create_date`, `update_date`, `delete_date`, `delete_flag`) VALUES
(1, 1, 1, '2024-01-15 10:20:25', '2024-01-15 10:20:25', NULL, 0),
(2, 1, 2, '2024-01-15 10:21:11', '2024-01-15 10:21:11', NULL, 0),
(3, 2, 3, '2024-01-15 10:22:05', '2024-01-15 10:22:05', NULL, 0),
(4, 3, 4, '2024-01-16 11:14:32', '2024-01-16 11:14:32', NULL, 0),
(5, 3, 5, '2024-01-16 11:14:43', '2024-01-16 11:14:43', NULL, 0),
(6, 4, 2, '2024-01-25 11:37:43', '2024-01-25 11:37:43', NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `recipe_seasoning`
--

CREATE TABLE `recipe_seasoning` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipi_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `seasoning_id` bigint(20) NOT NULL COMMENT '調味料ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削減日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ_調味料';

-- --------------------------------------------------------

--
-- テーブルの構造 `recipe_taste`
--

CREATE TABLE `recipe_taste` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `taste_id` bigint(20) NOT NULL COMMENT '系統ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(4) NOT NULL COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ_系統';

--
-- テーブルのデータのダンプ `recipe_taste`
--

INSERT INTO `recipe_taste` (`id`, `recipe_id`, `taste_id`, `create_date`, `update_date`, `delete_date`, `delete_flag`) VALUES
(1, 1, 1, '2024-01-15 10:24:33', '2024-01-15 10:24:33', NULL, 0),
(2, 2, 1, '2024-01-15 10:25:01', '2024-01-15 10:25:01', NULL, 0),
(3, 3, 2, '2024-01-16 11:16:29', '2024-01-16 11:16:29', NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `seasoning`
--

CREATE TABLE `seasoning` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `seasoning_name` varchar(256) NOT NULL COMMENT '調味料名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='調味料';

-- --------------------------------------------------------

--
-- テーブルの構造 `subscription`
--

CREATE TABLE `subscription` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `email` varchar(256) NOT NULL COMMENT 'メールアドレス',
  `plan` varchar(256) NOT NULL COMMENT 'プラン',
  `use_start_date` date NOT NULL COMMENT '開始日',
  `use_end_date` date NOT NULL COMMENT '終了日',
  `create_date` date NOT NULL COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` date DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `taste`
--

CREATE TABLE `taste` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `taste_name` varchar(256) NOT NULL COMMENT '系統名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='系統';

--
-- テーブルのデータのダンプ `taste`
--

INSERT INTO `taste` (`id`, `taste_name`, `create_date`, `update_date`, `delete_date`, `delete_flag`) VALUES
(1, 'さっぱり系', '2024-01-11 11:44:52', '2024-01-11 11:44:52', NULL, 0),
(2, 'がっつり系', '2024-01-11 11:44:52', '2024-01-11 11:44:52', NULL, 0),
(3, '辛い系', '2024-01-11 11:44:52', '2024-01-11 11:44:52', NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `url_holding`
--

CREATE TABLE `url_holding` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `user_id` bigint(20) NOT NULL COMMENT 'ユーザid',
  `email` varchar(256) NOT NULL COMMENT 'メールアドレス',
  `period_available_url` datetime NOT NULL COMMENT 'URL利用可能期間',
  `password_url` varchar(256) NOT NULL COMMENT 'トークン(URL）',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='パスワード_URL保持';

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `email` varchar(256) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(256) NOT NULL COMMENT 'パスワード',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ユーザ';

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `create_date`, `update_date`, `delete_date`, `delete_flag`) VALUES
(1, 'nissy0930@gmail.com', 'nissy0930', '2024-01-11 11:32:38', '2024-01-11 11:32:38', NULL, 0),
(2, 'kkr2290007@stu.o-hara.ac.jp', 'ren20032525', '2024-01-17 12:15:29', '2024-01-17 12:15:29', NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `user_owned_coupon`
--

CREATE TABLE `user_owned_coupon` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `coupon_id` bigint(20) NOT NULL COMMENT 'クーポンid		',
  `user_id` bigint(20) NOT NULL COMMENT 'ユーザid		',
  `number` int(11) NOT NULL DEFAULT 0 COMMENT '枚数		'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ユーザ保有クーポン';

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `foodstuff`
--
ALTER TABLE `foodstuff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `ingredient_category_id` (`ingredient_category_id`);

--
-- テーブルのインデックス `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- テーブルのインデックス `ingredient_category`
--
ALTER TABLE `ingredient_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- テーブルのインデックス `m_coupon`
--
ALTER TABLE `m_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prize_id` (`prize_id`),
  ADD KEY `prize_id_2` (`prize_id`),
  ADD KEY `id` (`id`);

--
-- テーブルのインデックス `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- テーブルのインデックス `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `recipe_genre`
--
ALTER TABLE `recipe_genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- テーブルのインデックス `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `ingredient_id` (`ingredient_id`);

--
-- テーブルのインデックス `recipe_seasoning`
--
ALTER TABLE `recipe_seasoning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipi_id` (`recipi_id`),
  ADD KEY `seasoning_id` (`seasoning_id`);

--
-- テーブルのインデックス `recipe_taste`
--
ALTER TABLE `recipe_taste`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `taste_id` (`taste_id`);

--
-- テーブルのインデックス `seasoning`
--
ALTER TABLE `seasoning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- テーブルのインデックス `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `taste`
--
ALTER TABLE `taste`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `url_holding`
--
ALTER TABLE `url_holding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `url_holding_ibfk_2` (`email`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- テーブルのインデックス `user_owned_coupon`
--
ALTER TABLE `user_owned_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupon_id` (`coupon_id`),
  ADD KEY `user_id` (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `foodstuff`
--
ALTER TABLE `foodstuff`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=105;

--
-- テーブルの AUTO_INCREMENT `genre`
--
ALTER TABLE `genre`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `ingredient_category`
--
ALTER TABLE `ingredient_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `m_coupon`
--
ALTER TABLE `m_coupon`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `prize`
--
ALTER TABLE `prize`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `recipe_genre`
--
ALTER TABLE `recipe_genre`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `recipe_seasoning`
--
ALTER TABLE `recipe_seasoning`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- テーブルの AUTO_INCREMENT `recipe_taste`
--
ALTER TABLE `recipe_taste`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `seasoning`
--
ALTER TABLE `seasoning`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- テーブルの AUTO_INCREMENT `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- テーブルの AUTO_INCREMENT `taste`
--
ALTER TABLE `taste`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `url_holding`
--
ALTER TABLE `url_holding`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- テーブルの AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `user_owned_coupon`
--
ALTER TABLE `user_owned_coupon`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `foodstuff`
--
ALTER TABLE `foodstuff`
  ADD CONSTRAINT `foodstuff_ibfk_1` FOREIGN KEY (`ingredient_category_id`) REFERENCES `ingredient_category` (`id`);

--
-- テーブルの制約 `m_coupon`
--
ALTER TABLE `m_coupon`
  ADD CONSTRAINT `m_coupon_ibfk_1` FOREIGN KEY (`prize_id`) REFERENCES `prize` (`id`);

--
-- テーブルの制約 `recipe_genre`
--
ALTER TABLE `recipe_genre`
  ADD CONSTRAINT `recipe_genre_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `recipe_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- テーブルの制約 `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  ADD CONSTRAINT `recipe_ingredient_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `recipe_ingredient_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `foodstuff` (`id`);

--
-- テーブルの制約 `recipe_seasoning`
--
ALTER TABLE `recipe_seasoning`
  ADD CONSTRAINT `recipe_seasoning_ibfk_1` FOREIGN KEY (`recipi_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `recipe_seasoning_ibfk_2` FOREIGN KEY (`seasoning_id`) REFERENCES `seasoning` (`id`);

--
-- テーブルの制約 `recipe_taste`
--
ALTER TABLE `recipe_taste`
  ADD CONSTRAINT `recipe_taste_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `recipe_taste_ibfk_2` FOREIGN KEY (`taste_id`) REFERENCES `taste` (`id`);

--
-- テーブルの制約 `url_holding`
--
ALTER TABLE `url_holding`
  ADD CONSTRAINT `url_holding_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `url_holding_ibfk_2` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON UPDATE CASCADE;

--
-- テーブルの制約 `user_owned_coupon`
--
ALTER TABLE `user_owned_coupon`
  ADD CONSTRAINT `user_owned_coupon_ibfk_1` FOREIGN KEY (`coupon_id`) REFERENCES `m_coupon` (`id`),
  ADD CONSTRAINT `user_owned_coupon_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
