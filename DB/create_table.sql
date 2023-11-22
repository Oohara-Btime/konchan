-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-11-15 02:10:02
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- データベース: `konchan`
-- テーブルの構造 `user`
--テーブル「user」が存在する場合は削除
DROP TABLE IF EXISTS user
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `email` varchar(256) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(256) NOT NULL COMMENT 'パスワード',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ユーザ';
-- テーブルのインデックス `user`
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `email` (`email`);
COMMIT;




--テーブル「url_holding」が存在する場合は削除
DROP TABLE IF EXISTS url_holding
-- テーブルの構造 `url_holding`
CREATE TABLE `url_holding` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user_id` bigint(20) NOT NULL COMMENT 'ユーザid',
  `email` varchar(256) NOT NULL COMMENT 'メールアドレス',
  `period_available_url` datetime NOT NULL COMMENT 'URL利用可能期間',
  `password_url` varchar(256) NOT NULL COMMENT 'トークン(URL）',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='パスワード_URL保持';
-- テーブルのインデックス `url_holding`
ALTER TABLE `url_holding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `url_holding_ibfk_2` (`email`);
-- テーブルの制約 `url_holding`
ALTER TABLE `url_holding`
  ADD CONSTRAINT `url_holding_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `url_holding_ibfk_2` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON UPDATE CASCADE;
COMMIT;




--テーブル「user_owned_coupon」が存在する場合は削除
DROP TABLE IF EXISTS user_owned_coupon
-- テーブルの構造 `user_owned_coupon`
CREATE TABLE `user_owned_coupon` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `coupon_id` bigint(20) NOT NULL COMMENT 'クーポンid		',
  `user_id` bigint(20) NOT NULL COMMENT 'ユーザid		',
  `number` int(11) NOT NULL DEFAULT 0 COMMENT '枚数		'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ユーザ保有クーポン';
-- テーブルのインデックス `user_owned_coupon`
ALTER TABLE `user_owned_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupon_id` (`coupon_id`),
  ADD KEY `user_id` (`user_id`);
-- テーブルの制約 `user_owned_coupon`
ALTER TABLE `user_owned_coupon`
  ADD CONSTRAINT `user_owned_coupon_ibfk_1` FOREIGN KEY (`coupon_id`) REFERENCES `m_coupon` (`id`),
  ADD CONSTRAINT `user_owned_coupon_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;




--テーブル「system」が存在する場合は削除
DROP TABLE IF EXISTS system
-- テーブルの構造 `system`
CREATE TABLE `system` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `taste_name` varchar(256) NOT NULL COMMENT '系統名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='系統';
-- テーブルのインデックス `system`
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);
COMMIT;




--テーブル「subscription」が存在する場合は削除
DROP TABLE IF EXISTS subscription
-- テーブルの構造 `subscription`
CREATE TABLE `subscription` (
  `email` varchar(256) NOT NULL AUTO_INCREMENT COMMENT 'メールアドレス',
  `available_period` datetime NOT NULL COMMENT '利用可能期間		',
  `plan` varchar(256) NOT NULL COMMENT 'プラン		',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時		',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時		',
  `delete_date` datetime NOT NULL COMMENT '削除日時		',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ		'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='サブスク';
-- テーブルのインデックス `subscription`
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`email`);
-- テーブルの制約 `subscription`
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;




--テーブル「seasoning」が存在する場合は削除
DROP TABLE IF EXISTS seasoning
-- テーブルの構造 `seasoning`
CREATE TABLE `seasoning` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `seasoning_name` varchar(256) NOT NULL COMMENT '調味料名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='調味料';
-- テーブルのインデックス `seasoning`
ALTER TABLE `seasoning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
COMMIT;




--テーブル「recipe_system」が存在する場合は削除
DROP TABLE IF EXISTS recipe_system
-- テーブルの構造 `recipe_system`
CREATE TABLE `recipe_system` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `taste_id` bigint(20) NOT NULL COMMENT '系統ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_falg` tinyint(4) NOT NULL COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ_系統';
-- テーブルのインデックス `recipe_system`
ALTER TABLE `recipe_system`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `taste_id` (`taste_id`);
-- テーブルの制約 `recipe_system`
ALTER TABLE `recipe_system`
  ADD CONSTRAINT `recipe_system_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `recipe_system_ibfk_2` FOREIGN KEY (`taste_id`) REFERENCES `system` (`id`);
COMMIT;




--テーブル「recipe_seasoning」が存在する場合は削除
DROP TABLE IF EXISTS recipe_seasoning
-- テーブルの構造 `recipe_seasoning`
CREATE TABLE `recipe_seasoning` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `recipi_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `seasoning_id` bigint(20) NOT NULL COMMENT '調味料ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削減日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ_調味料';
-- テーブルのインデックス `recipe_seasoning`
ALTER TABLE `recipe_seasoning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipi_id` (`recipi_id`),
  ADD KEY `seasoning_id` (`seasoning_id`);
-- テーブルの制約 `recipe_seasoning`
ALTER TABLE `recipe_seasoning`
  ADD CONSTRAINT `recipe_seasoning_ibfk_1` FOREIGN KEY (`recipi_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `recipe_seasoning_ibfk_2` FOREIGN KEY (`seasoning_id`) REFERENCES `seasoning` (`id`);
COMMIT;




--テーブル「recipe_ingredient」が存在する場合は削除
DROP TABLE IF EXISTS recipe_ingredient
-- テーブルの構造 `recipe_ingredient`
CREATE TABLE `recipe_ingredient` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `ingredient_id` bigint(20) NOT NULL COMMENT '食材ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ_食材';
-- テーブルのインデックス `recipe_ingredient`
ALTER TABLE `recipe_ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `ingredient_id` (`ingredient_id`);
-- テーブルの制約 `recipe_ingredient`
ALTER TABLE `recipe_ingredient`
  ADD CONSTRAINT `recipe_ingredient_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `recipe_ingredient_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `foodstuff` (`recipe_id`);
COMMIT;




--テーブル「recipe_genre」が存在する場合は削除
DROP TABLE IF EXISTS recipe_genre
-- テーブルの構造 `recipe_genre`
CREATE TABLE `recipe_genre` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID		',
  `genre_id` bigint(20) NOT NULL COMMENT 'ジャンルID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ_ジャンル';
-- テーブルのインデックス `recipe_genre`
ALTER TABLE `recipe_genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `genre_id` (`genre_id`);
-- テーブルの制約 `recipe_genre`
ALTER TABLE `recipe_genre`
  ADD CONSTRAINT `recipe_genre_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `recipe_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);
COMMIT;




--テーブル「recipe」が存在する場合は削除
DROP TABLE IF EXISTS recipe
-- テーブルの構造 `recipe`
CREATE TABLE `recipe` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `recipe_id` int(47) NOT NULL COMMENT '都道府県番号',
  `ingredient_id` varchar(50) NOT NULL COMMENT 'レシピ名',
  `recipe` varchar(10000) NOT NULL COMMENT '作り方',
  `cooking_time` int(255) NOT NULL COMMENT '調理時間',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='レシピ';
-- テーブルのインデックス `recipe`
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);
COMMIT;




--テーブル「prize」が存在する場合は削除
DROP TABLE IF EXISTS prize
-- テーブルの構造 `prize`
CREATE TABLE `prize` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `prize_name` varchar(256) NOT NULL COMMENT '景品名',
  `prize_image` blob DEFAULT NULL COMMENT '景品画像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='景品';
-- テーブルのインデックス `prize`
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
COMMIT;




--テーブル「m_coupon」が存在する場合は削除
DROP TABLE IF EXISTS m_coupon
-- テーブルの構造 `m_coupon`
CREATE TABLE `m_coupon` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `prize_id` bigint(20) NOT NULL COMMENT '景品id',
  `coupon_name` varchar(256) NOT NULL COMMENT 'クーポン名',
  `discount_rate` int(100) NOT NULL COMMENT '割引率',
  `coupon_image` blob NOT NULL COMMENT 'クーポン画像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='マスタークーポン';
-- テーブルのインデックス `m_coupon`
ALTER TABLE `m_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prize_id` (`prize_id`),
  ADD KEY `prize_id_2` (`prize_id`),
  ADD KEY `id` (`id`);
-- テーブルの制約 `m_coupon`
ALTER TABLE `m_coupon`
  ADD CONSTRAINT `m_coupon_ibfk_1` FOREIGN KEY (`prize_id`) REFERENCES `prize` (`id`);
COMMIT;




--テーブル「ingredient_category」が存在する場合は削除
DROP TABLE IF EXISTS ingredient_category
-- テーブルの構造 `ingredient_category`
CREATE TABLE `ingredient_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `ingredient_category_name` varchar(256) NOT NULL COMMENT '食材カテゴリ名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='食材カテゴリ';
-- テーブルのインデックス `ingredient_category`
ALTER TABLE `ingredient_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
COMMIT;




--テーブル「genre」が存在する場合は削除
DROP TABLE IF EXISTS genre
-- テーブルの構造 `genre`
CREATE TABLE `genre` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `genre_name` varchar(256) NOT NULL COMMENT 'ジャンル名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ジャンル';
-- テーブルのインデックス `genre`
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
COMMIT;




--テーブル「foodstuff」が存在する場合は削除
DROP TABLE IF EXISTS foodstuff
-- テーブルの構造 `foodstuff`
CREATE TABLE `foodstuff` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `ingredient_name` varchar(256) NOT NULL COMMENT '食材名',
  `ingredient_category_id` bigint(20) NOT NULL COMMENT '食材カテゴリID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ',
  `ingredient_image` blob NOT NULL COMMENT '食材画像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='食材';
-- テーブルのインデックス `foodstuff`
ALTER TABLE `foodstuff`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `ingredient_category_id` (`ingredient_category_id`);
-- テーブルの制約 `foodstuff`
ALTER TABLE `foodstuff`
  ADD CONSTRAINT `foodstuff_ibfk_1` FOREIGN KEY (`ingredient_category_id`) REFERENCES `ingredient_category` (`id`);
COMMIT;







/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;