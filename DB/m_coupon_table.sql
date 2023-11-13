-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-11-13 06:18:09
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

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
-- テーブルの構造 `m_coupon`
--

CREATE TABLE `m_coupon` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `prize_id` bigint(20) NOT NULL COMMENT '景品id',
  `coupon_name` varchar(256) NOT NULL COMMENT 'クーポン名',
  `discount_rate` int(100) NOT NULL COMMENT '割引率',
  `coupon_image` blob NOT NULL COMMENT 'クーポン画像'
  FOREIGN KEY (`prize_id`) REFERENCES prize(`prize_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `m_coupon`
--
ALTER TABLE `m_coupon`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `m_coupon`
--
ALTER TABLE `m_coupon`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
