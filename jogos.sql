CREATE TABLE `games` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `estudio` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `idade` varchar(6) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `disponibilidade` BOOLEAN NOT NULL DEFAULT TRUE
)

INSERT INTO `games` (nome, imagem, estudio, categoria, idade, valor, disponibilidade) 
VALUES
(1,'Spider-Man 2','spiderman-2.jpg','Insomniac Games','Ação/Aventura','16+',349.90,1),
(2,'God of War - Ragnarok','GdW-Ragnarok.jpg','Santa Monica Studio','Ação/Aventura','18+',299.90,1),
(3,'Final Fantasy XVI','Final-Fantasy-XVI.webp','Square Enix','RPG','16+',299.90,1),
(4,'Ratchet and Clank: Rift Apart','Ratchet-Clank.jpg','Insomniac Games','Plataforma','10+',249.90,1),
(5,'Helldivers 2','Helldivers-2.jpg','Arrowhead Game Studios','Tiro','18+',199.90,1),
(6,'Astro Bot','AstroBot.jpg','PlayStation Studios','Plataforma','7+',199.90,1),
(7,'Uncharted: Legacy of Thieves Collection','Uncharted.webp','Naughty Dog','Ação/Aventura','16+',189.90,1),
(8,'Ghost of Tsushima: Directors Cut','GhostofTsushima.webp','Sucker Punch','Ação/Aventura','18+',249.90,1),
(9,'The Last of Us Part I','LastOfUs-1.jpg','Naughty Dog','Ação/Aventura','18+',299.90,1),
(10,'Death Stranding 2: On the Beach','Death-Stranding.jpg','Kojima Productions','Aventura','18+',349.90,0),
(11,'Forza Horizon 5','Forza-Horizon-5.webp','Playground Games','Corrida','10+',249.90,1),
(12,'Indiana Jones and the Great Circle','Indiana-Jones.webp','MachineGames','Ação/Aventura','16+',299.90,1),
(13,'GTA 6','GTA-6.webp','Rockstar Games','Ação/Aventura','18+',399.90,1),
(14,'Monster Hunter Wilds','Monster-Hunter.jpg','Capcom','RPG/Ação','14+',299.90,1),
(15,'Citizen Sleeper 2: Starward Vector','Citizen-Sleeper-2.jpg','Jump Over the Age','RPG','12+',159.90,1),
(16,'Split Fiction','split-fiction.webp','Narrative Games','Aventura','14+',179.90,1),
(17,'Kingdom Come: Deliverance 2','Deliverance-2.jpg','Warhorse Studios','RPG','18+',249.90,0),
(18,'Blue Prince','blue-prince.webp','Dogubomb','Quebra-cabeça','10+',89.90,1),
(19,'Promise Mascot Agency','Promise-Mascot.webp','Kaizen Game Works','Simulação','7+',69.90,1),
(20,'Bionic Bay','bionic-bay.jpg','Mureena','Plataforma','10+',59.90,1),
(21,'Until Dawn','Until-Dawn.jpg','Supermassive Games','Horror/Interativo','18+',199.90,1),
(22,'Detroit: Become Human','Detroit.avif','Quantic Dream','Aventura/Interativo','16+',249.90,1),
(23,'Red Dead Redemption 2','Redemption-2.jpg','Rockstar Games','Ação/Aventura','18+',349.90,1),
(24,'The Last of Us Part II','the-last-of-us-2.webp','Naughty Dog','Ação/Aventura','18+',299.90,1),
(25,'The Witcher 3: Wild Hunt','Witcher-3.jpg','CD Projekt Red','RPG/Ação','18+',199.90,1),
(26,'Mass Effect Legendary Edition','Mass-Effect.webp','BioWare','RPG/Ciência-Ficção','16+',179.90,1);


