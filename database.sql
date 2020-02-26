-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.8-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela noticias.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `about` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela noticias.about: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`id`, `about`) VALUES
	(1, 'Esportes'),
	(2, 'Economia'),
	(3, 'Tecnologia'),
	(4, 'Eventos');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;

-- Copiando estrutura para tabela noticias.notices
CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '0',
  `about` int(10) NOT NULL DEFAULT 0,
  `notice` text NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela noticias.notices: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` (`id`, `title`, `about`, `notice`) VALUES
	(2, 'Dólar cai frente ao Euro', 2, 'Tramp fez isso e ocasionou naquilo'),
	(3, 'Corinthians vence São Paulo', 1, 'Corinthians vence São Paulo por 10x1 e este único gol do São Paulo foi roubado.'),
	(4, 'Mike Tyson é o maior lutador da história', 1, 'É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao examinar seu layout. O objetivo de usar Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, em vez de usar \'Conteúdo aqui, conteúdo aqui\', fazendo com que pareça um inglês legível. Muitos pacotes de editoração eletrônica e editores de páginas da Web agora usam Lorem Ipsum como texto padrão do modelo, e uma pesquisa por \'lorem ipsum\' descobrirá muitos sites ainda na infância. Várias versões evoluíram ao longo dos anos, às vezes por acidente, às vezes de propósito (humor injetado e similares).'),
	(6, 'Mini-índice bovespa tem queda histórica', 2, 'exceto para obter alguma vantagem com isso? Mas quem tem o direito de encontrar falhas em um homem que escolhe desfrutar de um prazer que não tem consequências irritantes, ou que evita uma dor que não produz prazer resultante? "'),
	(7, 'Apple lança novo modelo de iPhone', 3, 'The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.'),
	(8, 'Novo Galaxy Fold', 3, 'O Galaxy Fold desafia e define uma nova categoria. Um dispositivo como nenhum outro Uma nova tecnologia de display: o Infinity Flex Display dobrável.O incrível display Dynamic AMOLED de 7,3 polegadas desafia as expectativas. Feito de camadas de um polímero revolucionário para adicionar flexibilidade, essa é a maior tela dos smartphones Galaxy.1 Ele é dobrado de forma suave e natural graças à sua estrutura articulada.');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
