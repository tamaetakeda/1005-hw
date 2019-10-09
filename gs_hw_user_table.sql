-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 
-- サーバのバージョン： 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_hw`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_hw_user_table`
--

CREATE TABLE `gs_hw_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_hw_user_table`
--

INSERT INTO `gs_hw_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'テスト１管理者', 'test1@test.jp', 'test1', 1, 0),
(2, 'テスト2一般', 'test2@test.jp', 'test2', 0, 0),
(3, 'テスト３', 'test3@test.jp', 'test3', 0, 0),
(4, 'たまえ', 'tamae@test.jp', 'tt', 0, 0),
(5, 'たまえ', 'tet@jp', 'TT', 0, 0),
(6, 'おおくぼ', 'okubo@gmail.com', 'okubo', 0, 0),
(7, 'おおくぼ', 'okubo@gmail.com', 'okubo', 0, 0),
(8, 'test2', 'test2@test.jp', 'test2', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_hw_user_table`
--
ALTER TABLE `gs_hw_user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_hw_user_table`
--
ALTER TABLE `gs_hw_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
