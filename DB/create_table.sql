-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-01-16 03:43:04
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
(5, '米', 4, '2024-01-16 10:50:20', '2024-01-16 10:50:20', NULL, 0, 0x4b4f4d452e706e67);

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
(3, 1, 'イカ飯', '焼いて米を詰める', 10, '2024-01-16 10:53:46', '2024-01-16 10:53:46', NULL, 0, 0x494b414d4553492e706e67);

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
(5, 3, 5, '2024-01-16 11:14:43', '2024-01-16 11:14:43', NULL, 0);

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
  `email` varchar(256) NOT NULL COMMENT 'メールアドレス',
  `available_period` datetime NOT NULL COMMENT '利用可能期間		',
  `plan` varchar(256) NOT NULL COMMENT 'プラン		',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時		',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時		',
  `delete_date` datetime DEFAULT NULL COMMENT '削除日時		',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ		'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='サブスク';

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
(1, 'nissy0930@gmail.com', 'nissy0930', '2024-01-11 11:32:38', '2024-01-11 11:32:38', NULL, 0);

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
  ADD PRIMARY KEY (`email`);

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
  ADD KEY `id` (`id`),
  ADD KEY `email` (`email`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `recipe_genre`
--
ALTER TABLE `recipe_genre`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=2;

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
-- テーブルの制約 `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

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
