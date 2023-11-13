-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-11-13 07:17:27
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 8.0.19

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
-- テーブルの構造 `recipe`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
