-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-11-13 07:47:22
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
-- テーブルの構造 `user_owned_coupon`
--

CREATE TABLE `user_owned_coupon` (
  `id` bigint(20) NOT NULL COMMENT 'id',
  `coupon_id` bigint(20) NOT NULL COMMENT 'クーポンid		',
  `user_id` bigint(20) NOT NULL COMMENT 'ユーザid		',
  `number` int(11) NOT NULL DEFAULT 0 COMMENT '枚数		'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `user_owned_coupon`
--
ALTER TABLE `user_owned_coupon`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `user_owned_coupon`
--
ALTER TABLE `user_owned_coupon`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
