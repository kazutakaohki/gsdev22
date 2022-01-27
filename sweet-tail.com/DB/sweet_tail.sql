-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 1 月 27 日 16:07
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sweet_tail`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `st_spot_table`
--

CREATE TABLE `st_spot_table` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(256) NOT NULL,
  `tel` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `star` varchar(32) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `st_spot_table`
--

INSERT INTO `st_spot_table` (`id`, `name`, `address`, `tel`, `category`, `star`, `comment`, `date`) VALUES
(1, 'わんわんパラダイス', '神奈川県小田原市', '0465251532', '遊び', '★★★★★', 'テストです', '2022-01-24 20:28:38.000000'),
(2, 'THE SEASIDE', '神奈川県逗子市', '1234567890', 'ショップ', '★★★★', 'dogsupできます。', '2022-01-24 20:27:53.000000'),
(3, 'THE B\'NC', '千葉県千葉市', '0123456789', '宿泊', '★★★★★', 'ワンコOKのBBQ場', '2022-01-21 12:21:02.000000'),
(5, 'Sweet-Tail', '神奈川県小田原市', '08043270613', 'ショップ', '★★★★★', '良いものたくさん！', '2022-01-24 19:42:15.000000');

-- --------------------------------------------------------

--
-- テーブルの構造 `st_user_table`
--

CREATE TABLE `st_user_table` (
  `id` int(12) NOT NULL,
  `username` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `st_user_table`
--

INSERT INTO `st_user_table` (`id`, `username`, `lid`, `lpw`, `kanri_flg`) VALUES
(1, 'KAZUTAKA OHKI', 'seaside', 'creations', 1),
(2, 'thebnc', '000000000', 'test', 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `st_spot_table`
--
ALTER TABLE `st_spot_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `st_user_table`
--
ALTER TABLE `st_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `st_spot_table`
--
ALTER TABLE `st_spot_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `st_user_table`
--
ALTER TABLE `st_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
