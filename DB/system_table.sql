-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-11-13 05:50:53
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
-- テーブルの構造 `system`
--

CREATE TABLE `system` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `taste_name` varchar(256) NOT NULL COMMENT '系統名',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時',
  `delete_date` datetime NOT NULL COMMENT '削除日時',
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '削除フラグ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `system`
--
ALTER TABLE `system`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
