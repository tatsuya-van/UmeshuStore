-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 1 月 12 日 04:03
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `Productdb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `Producttb`
--

CREATE TABLE `Producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `Producttb`
--

INSERT INTO `Producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(5, 'Uguisu tomari outoro', 20, './upload/Umeshu1.jpg'),
(6, 'Uguisu tomari', 18, './upload/Umeshu4.jpg'),
(7, 'Uguisu yuzu', 16, './upload/Umeshu3.jpg'),
(8, 'Uguisu 11year old', 60, './upload/Umeshu2.jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `Producttb`
--
ALTER TABLE `Producttb`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `Producttb`
--
ALTER TABLE `Producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
