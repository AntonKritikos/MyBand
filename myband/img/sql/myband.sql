SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myband`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsarticles`
--

CREATE TABLE IF NOT EXISTS `newsarticles` (
  `id` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsarticles`
--

INSERT INTO `newsarticles` (`id`, `title`, `content`, `image`, `date_created`) VALUES
(1, 'Mijn eerste item', 'Ook al een mooi plaatje. In ieder geval werkt dit goed voor het voorbeeld. ', 'face3.png', '0000-00-00 00:00:00'),
(2, 'Weer een titel', 'Een stukje tekst over een troll face.', 'face2.png', '0000-00-00 00:00:00'),
(3, 'Aan het einde der Lange Laan', 'Plotseling blafte een hond, en antwoordde een andere hond en verscheurde de donsende stilte in lange, ruwe flarden; de nijdige hondekelen, heesch, ademloos, schor vijandig; plotseling ook zwegen zij stil. Aan het einde der Lange Laan lag diep in zijn voortuin het Rezidentie-huis. Laag, dadelijk in den nacht der waringinboomen, zigzagde het zijne pannendaken, het eene achter het andere, naar de schaduw van den achtertuin toe, met een primitieve lijn van dakteekening, over iedere galerij een dak, over iedere kamer een dak, tot éene lange daksilhouet.', 'face1.png', '0000-00-00 00:00:00'),
(4, 'Dit is een titel', 'Een hele korte tekst.', 'trashcat_410.jpg', '0000-00-00 00:00:00'),
(5, 'test #1', 'Dit is de eerste test', 'Home.png', '2015-10-02 15:48:11'),
(6, 'test #2', 'Dit is de eerste test', '', '2015-09-21 12:10:03'),
(7, 'test #3', 'Dit is de eerste test', '', '2015-09-21 12:10:03'),
(8, 'Test #4', 'Dit is de eerste test', 'News.png', '2015-10-02 15:55:59'),
(9, 'Hastag Sander', 'Hashtags', '', '2015-10-02 16:00:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsarticles`
--
ALTER TABLE `newsarticles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsarticles`
--
ALTER TABLE `newsarticles`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
