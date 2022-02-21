﻿create database banco
use banco
-- Estrutura da tabela
create table if not exists tabela(
id int(11) not null auto_increment,
codigo int(11) not null,
produto varchar(80) not null,
descricao varchar(250) not null,
data date not null,
valor decimal(10,2) not null,
primary key (id))

INSERT INTO tabela (id, codigo, produto, descricao, data, valor) VALUES
(1, 102030, 'Horizon - Zero Dawn - PS4', 'Em um mundo aberto, exuberante, vibrante e pós-apocalíptico, criaturas mecanizadas colossais vagam por uma paisagem fora do controle da humanidade.Ao longo do tempo, a evolução humana regrediu para uma existência tribal de caça e colheita ...', '2017-05-01', '199.29'),

(2, 112233, 'Assassin''s Creed - Unity - PS4', 'Paris, 1789. A Revolução Francesa transforma a antes magnifica cidade em um lugar de terror e caos. Suas ruas de paralelepípedos estão vermelhas com o sangue de pessoas comuns que se atreveram a levantar-se contra a aristocracia opressiva ...', '2017-05-01', '129.00'),
(3, 302010, 'God Of War III - Remasterizado - PS4', 'Originalmente desenvolvido pelo Santa Monica Studio da Sony Computer Entertainment, exclusivamente para o sistema PLAYSTATION®3, God of War® III foi remasterizado para o sistema PLAYSTATION®4, com compatibilidade de 1080p em 60fps para suas ...', '2017-05-01', '99.49'),
(4, 332211, 'Yooka-Laylee - PS4', '''Yooka-Laylee é uma nova plataforma de mundo aberto do principal criador por trás dos Banjo-Kazooie e Donkey Kong Country. Renovada na Playtonic Games, a equipe está construindo um sucessor espiritual para seu trabalho mais estimado do passado ...', '2017-05-01', '169.90'),
(5, 123456, 'The Last Guardian - PS4', 'The Last Guardian – PS4 é um dos games mais aguardados do momento. Ele possui uma narrativa de flashback, com um homem maduro contando histórias de quando era jovem, justamente na época em que encontra uma criatura conhecida como ''Trico'', que ...', '2017-05-01', '149.00');
select * from tabela