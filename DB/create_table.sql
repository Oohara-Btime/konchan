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
--テーブル「sampleTable」が存在する場合は削除
DROP TABLE IF EXISTS user
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL COMMENT 'id',
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





-- テーブルの構造 `url_holding`
CREATE TABLE `url_holding` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `user_id` bigint(20) NOT NULL COMMENT 'ユーザid',
  `email` varchar(256) NOT NULL COMMENT 'メールアドレス',
  `period_available_url` datetime NOT NULL COMMENT 'URL利用可能期間',
  `password_url` varchar(256) NOT NULL COMMENT 'トークン(URL）',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='';
-- テーブルのインデックス `url_holding`
ALTER TABLE `url_holding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `url_holding_ibfk_2` (`email`);
-- テーブルの AUTO_INCREMENT `url_holding`
ALTER TABLE `url_holding`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';
-- テーブルの制約 `url_holding`
ALTER TABLE `url_holding`
  ADD CONSTRAINT `url_holding_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `url_holding_ibfk_2` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON UPDATE CASCADE;
COMMIT;





-- テーブルの構造 `user_owned_coupon`
CREATE TABLE `user_owned_coupon` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `coupon_id` bigint(20) NOT NULL COMMENT 'クーポンid		',
  `user_id` bigint(20) NOT NULL COMMENT 'ユーザid		',
  `number` int(11) NOT NULL DEFAULT 0 COMMENT '枚数		'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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





-- テーブルの構造 `system`
CREATE TABLE `system` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `taste_name` varchar(256) NOT NULL COMMENT '系統名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- テーブルのインデックス `system`
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);
COMMIT;





-- テーブルの構造 `subscription`
CREATE TABLE `subscription` (
  `email` varchar(256) NOT NULL COMMENT 'メールアドレス',
  `available_period` datetime NOT NULL COMMENT '利用可能期間		',
  `plan` varchar(256) NOT NULL COMMENT 'プラン		',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時		',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時		',
  `delete_date` datetime NOT NULL COMMENT '削除日時		',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ		'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- テーブルのインデックス `subscription`
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`email`);
-- テーブルの制約 `subscription`
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;





-- テーブルの構造 `seasoning`
CREATE TABLE `seasoning` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `seasoning_name` varchar(256) NOT NULL COMMENT '調味料名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- テーブルのインデックス `seasoning`
ALTER TABLE `seasoning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
COMMIT;





-- テーブルの構造 `recipe_system`
CREATE TABLE `recipe_system` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `taste_id` bigint(20) NOT NULL COMMENT '系統ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_falg` tinyint(4) NOT NULL COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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





-- テーブルの構造 `recipe_seasoning`
CREATE TABLE `recipe_seasoning` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipi_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `seasoning_id` bigint(20) NOT NULL COMMENT '調味料ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削減日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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





-- テーブルの構造 `recipe_ingredient`
CREATE TABLE `recipe_ingredient` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID',
  `ingredient_id` bigint(20) NOT NULL COMMENT '食材ID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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





-- テーブルの構造 `recipe_genre`
CREATE TABLE `recipe_genre` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipe_id` bigint(20) NOT NULL COMMENT 'レシピID		',
  `genre_id` bigint(20) NOT NULL COMMENT 'ジャンルID',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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





-- テーブルの構造 `recipe`
CREATE TABLE `recipe` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `recipe_id` int(47) NOT NULL COMMENT '都道府県番号',
  `ingredient_id` varchar(50) NOT NULL COMMENT 'レシピ名',
  `recipe` varchar(10000) NOT NULL COMMENT '作り方',
  `cooking_time` int(255) NOT NULL COMMENT '調理時間',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- テーブルのインデックス `recipe`
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);
COMMIT;












/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;