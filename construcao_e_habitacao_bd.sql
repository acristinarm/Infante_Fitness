-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jul-2024 às 20:31
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `construcao_e_habitacao_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `backoffice`
--

CREATE TABLE `backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `backoffice`
--

INSERT INTO `backoffice` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Ana', 'admin', 'codemaster');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `nome`, `imagem`) VALUES
(1, 'Quem Somos', 'http://localhost/construcao_e_habitacao/uploads/BannerQuemSomos.png'),
(2, 'Sócios', 'http://localhost/construcao_e_habitacao/uploads/BannerSocios.png'),
(3, 'Notícias', 'http://localhost/construcao_e_habitacao/uploads/BannerNoticias.png'),
(4, 'Destaques', 'http://localhost/construcao_e_habitacao/uploads/BannerDestaques.png'),
(5, 'Empreendimentos', 'http://localhost/construcao_e_habitacao/uploads/BannerEmpreendimentos.png'),
(6, 'Centro de Férias', 'http://localhost/construcao_e_habitacao/uploads/BannerFerias.png'),
(7, 'Contactos', 'http://localhost/construcao_e_habitacao/uploads/BannerContactos.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `imagem`) VALUES
(1, 'http://localhost/construcao_e_habitacao/uploads/BannerHome.png'),
(2, 'http://localhost/construcao_e_habitacao/uploads/BannerDestaque1.png'),
(3, 'http://localhost/construcao_e_habitacao/uploads/BannerContactos.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `centro_ferias`
--

CREATE TABLE `centro_ferias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem_principal` varchar(1000) DEFAULT NULL,
  `imagem_sec_1` varchar(1000) DEFAULT NULL,
  `imagem_sec_2` varchar(1000) DEFAULT NULL,
  `imagem_sec_3` varchar(1000) DEFAULT NULL,
  `imagem_sec_4` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `centro_ferias`
--

INSERT INTO `centro_ferias` (`id`, `titulo`, `texto`, `imagem_principal`, `imagem_sec_1`, `imagem_sec_2`, `imagem_sec_3`, `imagem_sec_4`) VALUES
(1, 'Centro de Férias', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt quis voluptatum, harum sapiente ad dolore est, vitae asperiores consequatur itaque qui facere modi sed quisquam molestiae voluptatibus obcaecati in blanditiis repellendus quibusdam non consectetur velit. Aspernatur explicabo quos voluptate iure quaerat ab, nemo asperiores eligendi quisquam blanditiis ratione assumenda id a commodi dolor mollitia suscipit quae nulla sequi alias distinctio veritatis modi at. Incidunt hic doloremque eligendi illo, ad obcaecati nostrum voluptates quod magnam voluptas sequi magni itaque dolores unde corrupti, molestiae eius at ex atque minus. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque, perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quia rem a doloremque corrupti ipsa, iure dolores! Voluptas eum officia dolore aperiam obcaecati porro eveniet, sit autem qui repellat, quisquam deleniti quo iusto doloribus! Nesciunt, tempore voluptate enim illum tenetur odio velit, nemo perspiciatis obcaecati doloremque expedita necessitatibus nisi placeat, fuga debitis. Necessitatibus, eum at. Quidem, fuga optio. Dolorem omnis nesciunt maxime porro soluta sequi officia explicabo nemo exercitationem molestias fugiat ipsum consequatur, nobis animi, expedita odio earum eligendi esse reiciendis, placeat iusto molestiae tempora. Perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eligendi eaque sunt quos sequi soluta consequatur maiores aliquam sint nihil repudiandae laboriosam quod architecto dolorum delectus rem odit, quas non. Voluptate porro accusamus culpa adipisci. Earum necessitatibus odit recusandae, ratione velit iusto porro animi, soluta quos a eligendi modi delectus! Commodi debitis dolorum labore. Maxime minima voluptas quam dolore rerum, aut numquam esse, eveniet, nobis adipisci atque quod architecto sunt mollitia quia explicabo! Impedit inventore, voluptatem enim amet perspiciatis explicabo libero sunt accusamus quis, consectetur itaque laborum nam tempora pariatur, neque minima aliquid a est labore voluptatibus. Labore animi cum adipisci dolore sit laborum temporibus non architecto voluptatum ullam! Necessitatibus delectus deleniti vel? Deleniti, ad nobis placeat rerum officia accusantium eligendi voluptate repellat saepe reiciendis tempora optio eveniet enim impedit nam, exercitationem, sit minima ea labore nemo. Neque assumenda reprehenderit sapiente officiis tenetur esse, nesciunt quia iste odio veniam ut!', 'http://localhost/construcao_e_habitacao/uploads/cf1.png', 'http://localhost/construcao_e_habitacao/uploads/cf2.png', 'http://localhost/construcao_e_habitacao/uploads/cf3.png', 'http://localhost/construcao_e_habitacao/uploads/cf4.png', 'http://localhost/construcao_e_habitacao/uploads/cf5.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(200) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `link_facebook` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `email`, `link_facebook`) VALUES
(1, '<p>222 088 761</p>', '<p>Rua Passos Manuel, 59-1&ordm;. 4000-384 Porto</p>', '<p>cooptripeira@mail.telepac.pt</p>', '<p>https://www.facebook.com/?locale=pt_PT</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `mostrar_home` tinyint(1) DEFAULT 0,
  `imagem` varchar(1000) NOT NULL,
  `título` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `mostrar_home`, `imagem`, `título`, `texto`) VALUES
(1, 1, 'http://localhost/construcao_e_habitacao/uploads/destaqueHome1.png', 'Canidelo - Vila Nova de Gaia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!</p>'),
(2, 1, 'http://localhost/construcao_e_habitacao/uploads/destaqueHome2.png', 'Barranha - Sª da Hora Matosinhos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!'),
(3, 1, 'http://localhost/construcao_e_habitacao/uploads/destaqueHome3.png', 'Contumil - Porto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!'),
(4, 1, 'http://localhost/construcao_e_habitacao/uploads/destaqueHome4.png', 'Vila do Conde', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!'),
(5, 1, 'http://localhost/construcao_e_habitacao/uploads/destaque5.png', 'Famalicão', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!'),
(6, 1, 'http://localhost/construcao_e_habitacao/uploads/destaque6.png', 'Madalena -\r\nVila Nova de Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!'),
(7, 0, 'http://localhost/construcao_e_habitacao/uploads/destaqueHome1.png', 'Destaque 7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!'),
(8, 0, 'http://localhost/construcao_e_habitacao/uploads/destaqueHome2.png', 'Destaque 8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!'),
(9, 0, 'http://localhost/construcao_e_habitacao/uploads/destaqueHome1.png', 'Destaque 9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!'),
(10, 0, 'http://localhost/construcao_e_habitacao/uploads/destaqueHome2.png', 'Destaque 10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perferendis veritatis quos quidem enim debitis eveniet commodi, error temporibus dolore optio, itaque animi ipsam at quisquam. Dolorum aspernatur fugit dolore nobis culpa consectetur sint, voluptatibus corporis quisquam minus fugiat, totam quae cupiditate! In ratione nostrum repudiandae a doloribus aut tenetur commodi provident nulla consequatur fugiat, quas earum quam vero iste aliquam quaerat voluptas veniam nisi. Velit illum veniam numquam aliquid accusantium dolorum maxime maiores iste sequi explicabo iure quis beatae quasi nihil animi quibusdam exercitationem, consequatur tenetur magni ipsum inventore sunt, rerum incidunt. Praesentium accusamus sapiente sint veniam ipsum dignissimos, amet, voluptatibus corporis vitae necessitatibus sed voluptas excepturi laudantium, quidem quis expedita dolore laboriosam delectus at. Eaque, consequuntur illum repellat blanditiis aperiam sed, unde qui illo nostrum repudiandae, atque quia? Inventore sed error alias, neque officia cupiditate optio repudiandae eos quia esse a nisi at modi pariatur, odio corporis debitis!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empreendimentos`
--

CREATE TABLE `empreendimentos` (
  `id` int(11) NOT NULL,
  `título` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem_1` varchar(1000) NOT NULL,
  `imagem_2` varchar(1000) NOT NULL,
  `imagem_3` varchar(1000) NOT NULL,
  `imagem_4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `empreendimentos`
--

INSERT INTO `empreendimentos` (`id`, `título`, `texto`, `imagem_1`, `imagem_2`, `imagem_3`, `imagem_4`) VALUES
(1, 'Canidelo - Vila Nova de Gaia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt quis voluptatum, harum sapiente ad dolore est, vitae asperiores consequatur itaque qui facere modi sed quisquam molestiae voluptatibus obcaecati in blanditiis repellendus quibusdam non consectetur velit. Aspernatur explicabo quos voluptate iure quaerat ab, nemo asperiores eligendi quisquam blanditiis ratione assumenda id a commodi dolor mollitia suscipit quae nulla sequi alias distinctio veritatis modi at. Incidunt hic doloremque eligendi illo, ad obcaecati nostrum voluptates quod magnam voluptas sequi magni itaque dolores unde corrupti, molestiae eius at ex atque minus. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque, perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quia rem a doloremque corrupti ipsa, iure dolores! Voluptas eum officia dolore aperiam obcaecati porro eveniet, sit autem qui repellat, quisquam deleniti quo iusto doloribus! Nesciunt, tempore voluptate enim illum tenetur odio velit, nemo perspiciatis obcaecati doloremque expedita necessitatibus nisi placeat, fuga debitis. Necessitatibus, eum at. Quidem, fuga optio. Dolorem omnis nesciunt maxime porro soluta sequi officia explicabo nemo exercitationem molestias fugiat ipsum consequatur, nobis animi, expedita odio earum eligendi esse reiciendis, placeat iusto molestiae tempora. Perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eligendi eaque sunt quos sequi soluta consequatur maiores aliquam sint nihil repudiandae laboriosam quod architecto dolorum delectus rem odit, quas non. Voluptate porro accusamus culpa adipisci. Earum necessitatibus odit recusandae, ratione velit iusto porro animi, soluta quos a eligendi modi delectus! Commodi debitis dolorum labore. Maxime minima voluptas quam dolore rerum, aut numquam esse, eveniet, nobis adipisci atque quod architecto sunt mollitia quia explicabo! Impedit inventore, voluptatem enim amet perspiciatis explicabo libero sunt accusamus quis, consectetur itaque laborum nam tempora pariatur, neque minima aliquid a est labore voluptatibus. Labore animi cum adipisci dolore sit laborum temporibus non architecto voluptatum ullam! Necessitatibus delectus deleniti vel? Deleniti, ad nobis placeat rerum officia accusantium eligendi voluptate repellat saepe reiciendis tempora optio eveniet enim impedit nam, exercitationem, sit minima ea labore nemo. Neque assumenda reprehenderit sapiente officiis tenetur esse, nesciunt quia iste odio veniam</p>\r\n<p>&nbsp;</p>', 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/empreend4.png'),
(2, 'Barranha - \r\nSª da Hora Matosinhos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt quis voluptatum, harum sapiente ad dolore est, vitae asperiores consequatur itaque qui facere modi sed quisquam molestiae voluptatibus obcaecati in blanditiis repellendus quibusdam non consectetur velit. Aspernatur explicabo quos voluptate iure quaerat ab, nemo asperiores eligendi quisquam blanditiis ratione assumenda id a commodi dolor mollitia suscipit quae nulla sequi alias distinctio veritatis modi at. Incidunt hic doloremque eligendi illo, ad obcaecati nostrum voluptates quod magnam voluptas sequi magni itaque dolores unde corrupti, molestiae eius at ex atque minus. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque, perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Non quia rem a doloremque corrupti ipsa, iure dolores! Voluptas eum officia dolore aperiam obcaecati porro eveniet, sit autem qui repellat, quisquam deleniti quo iusto doloribus! Nesciunt, tempore voluptate enim illum tenetur odio velit, nemo perspiciatis obcaecati doloremque expedita necessitatibus nisi placeat, fuga debitis. Necessitatibus, eum at. Quidem, fuga optio. Dolorem omnis nesciunt maxime porro soluta sequi officia explicabo nemo exercitationem molestias fugiat ipsum consequatur, nobis animi, expedita odio earum eligendi esse reiciendis, placeat iusto molestiae tempora. Perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eligendi eaque sunt quos sequi soluta consequatur maiores aliquam sint nihil repudiandae laboriosam quod architecto dolorum delectus rem odit, quas non. Voluptate porro accusamus culpa adipisci. Earum necessitatibus odit recusandae, ratione velit iusto porro animi, soluta quos a eligendi modi delectus! Commodi debitis dolorum labore. Maxime minima voluptas quam dolore rerum, aut numquam esse, eveniet, nobis adipisci atque quod architecto sunt mollitia quia explicabo! Impedit inventore, voluptatem enim amet perspiciatis explicabo libero sunt accusamus quis, consectetur itaque laborum nam tempora pariatur, neque minima aliquid a est labore voluptatibus. Labore animi cum adipisci dolore sit laborum temporibus non architecto voluptatum ullam! Necessitatibus delectus deleniti vel? Deleniti, ad nobis placeat rerum officia accusantium eligendi voluptate repellat saepe reiciendis tempora optio eveniet enim impedit nam, exercitationem, sit minima ea labore nemo. Neque assumenda reprehenderit sapiente officiis tenetur esse, nesciunt quia iste odio veniam ut!', 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/empreend4.png'),
(3, 'Contumil - Porto\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt quis voluptatum, harum sapiente ad dolore est, vitae asperiores consequatur itaque qui facere modi sed quisquam molestiae voluptatibus obcaecati in blanditiis repellendus quibusdam non consectetur velit. Aspernatur explicabo quos voluptate iure quaerat ab, nemo asperiores eligendi quisquam blanditiis ratione assumenda id a commodi dolor mollitia suscipit quae nulla sequi alias distinctio veritatis modi at. Incidunt hic doloremque eligendi illo, ad obcaecati nostrum voluptates quod magnam voluptas sequi magni itaque dolores unde corrupti, molestiae eius at ex atque minus. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque, perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Non quia rem a doloremque corrupti ipsa, iure dolores! Voluptas eum officia dolore aperiam obcaecati porro eveniet, sit autem qui repellat, quisquam deleniti quo iusto doloribus! Nesciunt, tempore voluptate enim illum tenetur odio velit, nemo perspiciatis obcaecati doloremque expedita necessitatibus nisi placeat, fuga debitis. Necessitatibus, eum at. Quidem, fuga optio. Dolorem omnis nesciunt maxime porro soluta sequi officia explicabo nemo exercitationem molestias fugiat ipsum consequatur, nobis animi, expedita odio earum eligendi esse reiciendis, placeat iusto molestiae tempora. Perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eligendi eaque sunt quos sequi soluta consequatur maiores aliquam sint nihil repudiandae laboriosam quod architecto dolorum delectus rem odit, quas non. Voluptate porro accusamus culpa adipisci. Earum necessitatibus odit recusandae, ratione velit iusto porro animi, soluta quos a eligendi modi delectus! Commodi debitis dolorum labore. Maxime minima voluptas quam dolore rerum, aut numquam esse, eveniet, nobis adipisci atque quod architecto sunt mollitia quia explicabo! Impedit inventore, voluptatem enim amet perspiciatis explicabo libero sunt accusamus quis, consectetur itaque laborum nam tempora pariatur, neque minima aliquid a est labore voluptatibus. Labore animi cum adipisci dolore sit laborum temporibus non architecto voluptatum ullam! Necessitatibus delectus deleniti vel? Deleniti, ad nobis placeat rerum officia accusantium eligendi voluptate repellat saepe reiciendis tempora optio eveniet enim impedit nam, exercitationem, sit minima ea labore nemo. Neque assumenda reprehenderit sapiente officiis tenetur esse, nesciunt quia iste odio veniam ut!', 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/empreend4.png'),
(4, 'Vila do Conde', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt quis voluptatum, harum sapiente ad dolore est, vitae asperiores consequatur itaque qui facere modi sed quisquam molestiae voluptatibus obcaecati in blanditiis repellendus quibusdam non consectetur velit. Aspernatur explicabo quos voluptate iure quaerat ab, nemo asperiores eligendi quisquam blanditiis ratione assumenda id a commodi dolor mollitia suscipit quae nulla sequi alias distinctio veritatis modi at. Incidunt hic doloremque eligendi illo, ad obcaecati nostrum voluptates quod magnam voluptas sequi magni itaque dolores unde corrupti, molestiae eius at ex atque minus. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque, perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Non quia rem a doloremque corrupti ipsa, iure dolores! Voluptas eum officia dolore aperiam obcaecati porro eveniet, sit autem qui repellat, quisquam deleniti quo iusto doloribus! Nesciunt, tempore voluptate enim illum tenetur odio velit, nemo perspiciatis obcaecati doloremque expedita necessitatibus nisi placeat, fuga debitis. Necessitatibus, eum at. Quidem, fuga optio. Dolorem omnis nesciunt maxime porro soluta sequi officia explicabo nemo exercitationem molestias fugiat ipsum consequatur, nobis animi, expedita odio earum eligendi esse reiciendis, placeat iusto molestiae tempora. Perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eligendi eaque sunt quos sequi soluta consequatur maiores aliquam sint nihil repudiandae laboriosam quod architecto dolorum delectus rem odit, quas non. Voluptate porro accusamus culpa adipisci. Earum necessitatibus odit recusandae, ratione velit iusto porro animi, soluta quos a eligendi modi delectus! Commodi debitis dolorum labore. Maxime minima voluptas quam dolore rerum, aut numquam esse, eveniet, nobis adipisci atque quod architecto sunt mollitia quia explicabo! Impedit inventore, voluptatem enim amet perspiciatis explicabo libero sunt accusamus quis, consectetur itaque laborum nam tempora pariatur, neque minima aliquid a est labore voluptatibus. Labore animi cum adipisci dolore sit laborum temporibus non architecto voluptatum ullam! Necessitatibus delectus deleniti vel? Deleniti, ad nobis placeat rerum officia accusantium eligendi voluptate repellat saepe reiciendis tempora optio eveniet enim impedit nam, exercitationem, sit minima ea labore nemo. Neque assumenda reprehenderit sapiente officiis tenetur esse, nesciunt quia iste odio veniam ut!', 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/empreend4.png'),
(5, 'Famalicão\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt quis voluptatum, harum sapiente ad dolore est, vitae asperiores consequatur itaque qui facere modi sed quisquam molestiae voluptatibus obcaecati in blanditiis repellendus quibusdam non consectetur velit. Aspernatur explicabo quos voluptate iure quaerat ab, nemo asperiores eligendi quisquam blanditiis ratione assumenda id a commodi dolor mollitia suscipit quae nulla sequi alias distinctio veritatis modi at. Incidunt hic doloremque eligendi illo, ad obcaecati nostrum voluptates quod magnam voluptas sequi magni itaque dolores unde corrupti, molestiae eius at ex atque minus. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque, perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Non quia rem a doloremque corrupti ipsa, iure dolores! Voluptas eum officia dolore aperiam obcaecati porro eveniet, sit autem qui repellat, quisquam deleniti quo iusto doloribus! Nesciunt, tempore voluptate enim illum tenetur odio velit, nemo perspiciatis obcaecati doloremque expedita necessitatibus nisi placeat, fuga debitis. Necessitatibus, eum at. Quidem, fuga optio. Dolorem omnis nesciunt maxime porro soluta sequi officia explicabo nemo exercitationem molestias fugiat ipsum consequatur, nobis animi, expedita odio earum eligendi esse reiciendis, placeat iusto molestiae tempora. Perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eligendi eaque sunt quos sequi soluta consequatur maiores aliquam sint nihil repudiandae laboriosam quod architecto dolorum delectus rem odit, quas non. Voluptate porro accusamus culpa adipisci. Earum necessitatibus odit recusandae, ratione velit iusto porro animi, soluta quos a eligendi modi delectus! Commodi debitis dolorum labore. Maxime minima voluptas quam dolore rerum, aut numquam esse, eveniet, nobis adipisci atque quod architecto sunt mollitia quia explicabo! Impedit inventore, voluptatem enim amet perspiciatis explicabo libero sunt accusamus quis, consectetur itaque laborum nam tempora pariatur, neque minima aliquid a est labore voluptatibus. Labore animi cum adipisci dolore sit laborum temporibus non architecto voluptatum ullam! Necessitatibus delectus deleniti vel? Deleniti, ad nobis placeat rerum officia accusantium eligendi voluptate repellat saepe reiciendis tempora optio eveniet enim impedit nam, exercitationem, sit minima ea labore nemo. Neque assumenda reprehenderit sapiente officiis tenetur esse, nesciunt quia iste odio veniam ut!', 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/empreend4.png'),
(6, 'Madalena - Vila Nova de Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt quis voluptatum, harum sapiente ad dolore est, vitae asperiores consequatur itaque qui facere modi sed quisquam molestiae voluptatibus obcaecati in blanditiis repellendus quibusdam non consectetur velit. Aspernatur explicabo quos voluptate iure quaerat ab, nemo asperiores eligendi quisquam blanditiis ratione assumenda id a commodi dolor mollitia suscipit quae nulla sequi alias distinctio veritatis modi at. Incidunt hic doloremque eligendi illo, ad obcaecati nostrum voluptates quod magnam voluptas sequi magni itaque dolores unde corrupti, molestiae eius at ex atque minus. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque, perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Non quia rem a doloremque corrupti ipsa, iure dolores! Voluptas eum officia dolore aperiam obcaecati porro eveniet, sit autem qui repellat, quisquam deleniti quo iusto doloribus! Nesciunt, tempore voluptate enim illum tenetur odio velit, nemo perspiciatis obcaecati doloremque expedita necessitatibus nisi placeat, fuga debitis. Necessitatibus, eum at. Quidem, fuga optio. Dolorem omnis nesciunt maxime porro soluta sequi officia explicabo nemo exercitationem molestias fugiat ipsum consequatur, nobis animi, expedita odio earum eligendi esse reiciendis, placeat iusto molestiae tempora. Perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eligendi eaque sunt quos sequi soluta consequatur maiores aliquam sint nihil repudiandae laboriosam quod architecto dolorum delectus rem odit, quas non. Voluptate porro accusamus culpa adipisci. Earum necessitatibus odit recusandae, ratione velit iusto porro animi, soluta quos a eligendi modi delectus! Commodi debitis dolorum labore. Maxime minima voluptas quam dolore rerum, aut numquam esse, eveniet, nobis adipisci atque quod architecto sunt mollitia quia explicabo! Impedit inventore, voluptatem enim amet perspiciatis explicabo libero sunt accusamus quis, consectetur itaque laborum nam tempora pariatur, neque minima aliquid a est labore voluptatibus. Labore animi cum adipisci dolore sit laborum temporibus non architecto voluptatum ullam! Necessitatibus delectus deleniti vel? Deleniti, ad nobis placeat rerum officia accusantium eligendi voluptate repellat saepe reiciendis tempora optio eveniet enim impedit nam, exercitationem, sit minima ea labore nemo. Neque assumenda reprehenderit sapiente officiis tenetur esse, nesciunt quia iste odio veniam ut!', 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'http://localhost/construcao_e_habitacao/uploads/empreend2.png', 'http://localhost/construcao_e_habitacao/uploads/empreend3.png', 'http://localhost/construcao_e_habitacao/uploads/empreend4.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `título` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `título`, `texto`, `imagem`) VALUES
(1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>\r\n<p>&nbsp;</p>', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi enim cupiditate tenetur voluptas ex accusantium, debitis distinctio voluptatem repellendus deleniti in iusto temporibus sit autem ad corporis molestiae?</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia1.png'),
(2, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi enim cupiditate tenetur voluptas ex accusantium, debitis distinctio voluptatem repellendus deleniti in iusto temporibus sit autem ad corporis molestiae?</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia2.png'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi enim cupiditate tenetur voluptas ex accusantium, debitis distinctio voluptatem repellendus deleniti in iusto temporibus sit autem ad corporis molestiae?', 'http://localhost/construcao_e_habitacao/uploads/Noticia3.png'),
(4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi enim cupiditate tenetur voluptas ex accusantium, debitis distinctio voluptatem repellendus deleniti in iusto temporibus sit autem ad corporis molestiae?', 'http://localhost/construcao_e_habitacao/uploads/Noticia4.png'),
(5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi enim cupiditate tenetur voluptas ex accusantium, debitis distinctio voluptatem repellendus deleniti in iusto temporibus sit autem ad corporis molestiae?', 'http://localhost/construcao_e_habitacao/uploads/Noticia5.png'),
(6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi enim cupiditate tenetur voluptas ex accusantium, debitis distinctio voluptatem repellendus deleniti in iusto temporibus sit autem ad corporis molestiae?', 'http://localhost/construcao_e_habitacao/uploads/Noticia6.png'),
(7, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi enim cupiditate tenetur voluptas ex accusantium, debitis distinctio voluptatem repellendus deleniti in iusto temporibus sit autem ad corporis molestiae?', 'http://localhost/construcao_e_habitacao/uploads/Noticia1.png'),
(8, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi enim cupiditate tenetur voluptas ex accusantium, debitis distinctio voluptatem repellendus deleniti in iusto temporibus sit autem ad corporis molestiae?', 'http://localhost/construcao_e_habitacao/uploads/Noticia2.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quem_somos`
--

CREATE TABLE `quem_somos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `quem_somos`
--

INSERT INTO `quem_somos` (`id`, `imagem`, `texto`) VALUES
(1, 'http://localhost/construcao_e_habitacao/uploads/ImagemQuemSomos.png', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt quis voluptatum, harum sapiente ad dolore est, vitae asperiores consequatur itaque qui facere modi sed quisquam molestiae voluptatibus obcaecati in blanditiis repellendus quibusdam non consectetur velit. Aspernatur explicabo quos voluptate iure quaerat ab, nemo asperiores eligendi quisquam blanditiis ratione assumenda id a commodi dolor mollitia suscipit quae nulla sequi alias distinctio veritatis modi at.</p>\r\n<p>&nbsp;Incidunt hic doloremque eligendi illo, ad obcaecati nostrum voluptates quod magnam voluptas sequi magni itaque dolores unde corrupti, molestiae eius at ex atque minus. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque, perferendis repudiandae, enim, ut totam dicta minus beatae exercitationem ducimus expedita.Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quia rem a doloremque corrupti ipsa, iure dolores! Voluptas eum officia dolore aperiam obcaecati porro eveniet, sit autem qui repellat, quisquam deleniti quo iusto doloribus! Nesciunt, tempore voluptate enim illum tenetur odio velit, nemo perspiciatis obcaecati doloremque expedita necessitatibus nisi placeat, fuga debitis. Necessitatibus, eum at.Quidem, fuga optio. Dolorem omnis nesciunt maxime porro soluta sequi officia explicabo nemo exercitationem molestias fugiat ipsum consequatur, nobis animi, expedita odio earum eligendi esse reiciendis, placeat iusto molestiae tempora. Nobis autem sapiente eum iure harum odit corporis quia porro sunt neque. Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>\r\n<p>Itaque eligendi eaque sunt quos sequi soluta consequatur maiores aliquam sint nihil repudiandae laboriosam quod architecto dolorum delectus rem odit, quas non. Voluptate porro accusamus culpa adipisci. Earum necessitatibus odit recusandae, ratione velit iusto porro animi, soluta quos a eligendi modi delectus! Commodi debitis dolorum labore. Maxime minima voluptas quam dolore rerum, aut numquam esse, eveniet, nobis adipisci atque quod architecto sunt mollitia quia explicabo! Impedit inventore, voluptatem enim amet perspiciatis explicabo libero sunt accusamus quis, consectetur itaque laborum nam tempora pariatur, neque minima aliquid a est labore voluptatibus. Labore animi cum adipisci dolore sit laborum temporibus non architecto voluptatum ullam! Necessitatibus delectus deleniti vel? Deleniti, ad nobis placeat rerum officia accusantium eligendi voluptate repellat saepe reiciendis tempora optio eveniet enim impedit nam, exercitationem, sit minima ea labore nemo. Neque assumenda reprehenderit sapiente officiis tenetur esse, nesciunt quia iste odio veniam ut!</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `socios`
--

CREATE TABLE `socios` (
  `id` int(11) NOT NULL,
  `título` varchar(500) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `socios`
--

INSERT INTO `socios` (`id`, `título`, `texto`) VALUES
(1, 'Sócios', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione distinctio nulla similique veritatis corrupti ad commodi laboriosam, delectus, sed quidem quo quisquam atque illum! Rem autem id, cumque distinctio assumenda quidem, corporis deserunt, harum illo dolores molestias placeat nihil aspernatur nisi quisquam quo consequatur voluptas eligendi! Possimus dignissimos natus sapiente vel dolorum tempora modi, amet incidunt. Consequatur magni, possimus deleniti temporibus repellat voluptatum rem modi mollitia earum similique perferendis quas voluptatem ipsam ratione obcaecati alias soluta culpa impedit cupiditate quaerat.Adipisci consectetur tenetur obcaecati rerum pariatur. Vero, voluptatibus quibusdam esse recusandae odio tempore molestias illum pariatur nisi ea obcaecati asperiores laudantium ratione nobis quae ab ipsa perspiciatis voluptatum beatae explicabo adipisci. Quisquam aliquid illum consequuntur, nihil eaque eum adipisci numquam architecto quo ab repellat fugiat inventore suscipit alias impedit ut labore.</p>\r\n<p>Lorem ipsum dolr sit amet consectetur adipisicing elit. Dolorum, voluptates veritatis asperiores iusto ullam commodi perferendis impedit corrupti vero amet. Voluptatibus ab officia, totam exercitationem, eligendi facere, quos modi odit facilis minus consectetur dolore tenetur. Eius illum quia suscipit perferendis, inventore labore excepturi, aut assumenda iure quae atque ad saepe!</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ea nulla doloremque in consequuntur magni reprehenderit hic, ut, omnis est labore aspernatur suscipit? Tempore blanditiis ducimus placeat impedit, esse a, eligendi natus aliquam laborum, consequuntur nulla numquam deserunt fuga maxime quam vel! Necessitatibus eos perspiciatis nostrum unde nemo accusamus, placeat et natus, praesentium aliquam consequatur explicabo nobis architecto sunt corrupti vitae quasi voluptas sapiente dolores quam ea id? Pariatur aspernatur inventore sequi voluptates ex earum harum in beatae consectetur nobis debitis id sed vero, consequatur cumque aperiam similique officia ratione repudiandae ducimus placeat obcaecati? Ipsa incidunt ullam veritatis, animi perferendis corporis nobis optio sunt ducimus fugiat eius reiciendis quae nesciunt libero consequatur. Quasi sit cumque aliquid. Aperiam quos nostrum minus?</p>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `centro_ferias`
--
ALTER TABLE `centro_ferias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empreendimentos`
--
ALTER TABLE `empreendimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `centro_ferias`
--
ALTER TABLE `centro_ferias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `empreendimentos`
--
ALTER TABLE `empreendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `socios`
--
ALTER TABLE `socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
