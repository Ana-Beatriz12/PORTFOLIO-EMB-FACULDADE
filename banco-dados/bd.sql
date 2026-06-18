
create database portfolio_emb;
use portfolio_emb;


create table if not exists services(
id int auto_increment primary key,
title varchar(600),
description varchar(2000) ,
preco float
);

create table if not exists testimonials(
id_testimonials int auto_increment primary key,
name varchar(800),
message varchar(1000),
avaliacao varchar(600),
email varchar(600),
phone varchar(500),
estrelas_avaliacao int,
photo varchar(255),
date date
);

create table if not exists contact_message (
id_message int auto_increment primary key,
name varchar(800),
email varchar(800),
message varchar(2000)

);

/*ADICIONANDO COLUNA DE IMAGEM NA TABELA DE SERVIÇOS*/
alter table services add column imagens varchar(800);

/*SEPARANDO AS VARIAVEIS DIA, MES E ANO DE TESTEMUNHAS*/
SELECT MONTH(date) as mes, DAY(date) as dia, YEAR(date) as ano, testimonials.* from testimonials order by date DESC, date DESC;

SELECT name as nomeTestemunha, 
        message as mensagemServico ,
        estrelas_avaliacao as avaliacao,
        MONTH(date) as mes, 
        DAY(date) as dia, 
        YEAR(date) as ano
        
        FROM testimonials 
        ORDER BY date DESC;

/*INSERINDO UM VALOR EM TESTEMUNHAS*/
insert into testimonials(name, message, avaliacao, estrelas_avaliacao) values ("Maria antonieta","Serviço maravilhoso, prestador super atencioso e educado!Serviço maravilhoso, prestador super atencioso e educado!Serviço maravilhoso, prestador super atencioso e educado! ","10 estrelas", 5);

/*INSERINDO DADOS NA TABELA DE SERVIÇOS (CARROSEL - SERVIÇOS)*/
/*SERVICE 1*/
insert into services(title, description, imagens) values ("Manutenção Geral em Portões", 
"Realizamos manutenção preventiva e corretiva em portões residenciais e comerciais, 
garantindo o funcionamento adequado e seguro do equipamento. 
O serviço inclui verificação de componentes mecânicos, ajustes, 
lubrificação e substituição de peças quando necessário. 
Trabalhamos com agilidade e oferecemos garantia de 30 dias no serviço realizado.",
 "./assets/img/img-portoes.webp");

/*SERVICE 2*/
insert into services(title, description, imagens) values ("Automação de Portas e Portões", 
"Instalação e configuração de sistemas de automação para portas e portões, 
proporcionando mais praticidade, segurança e conforto no acesso ao imóvel. 
Utilizamos equipamentos de qualidade e realizamos toda a regulagem do sistema.
 O serviço inclui instalação completa, testes de funcionamento e garantia estendida de 1 ano no equipamento e 30 dias no serviço.",
 "./assets/img/img-portasPortoes.webp");
 
 /*SERVICE 3*/
insert into services(title, description, imagens) values ("Controle de Acesso", 
"Instalação de sistemas de controle de acesso para residências, empresas e condomínios, 
permitindo o gerenciamento seguro da entrada e saída de pessoas. 
Trabalhamos com dispositivos modernos e de fácil utilização. O serviço inclui instalação, configuração e garantia de 1 ano no equipamento e 30 dias na instalação.",
 "./assets/img/img-controleAcesso.avif");
 
  /*SERVICE 4*/
insert into services(title, description, imagens) values ("Cercas Eletrônicas", 
"Instalação e manutenção de cercas elétricas para reforçar a segurança do imóvel contra invasões. 
O sistema é instalado conforme normas de segurança, garantindo proteção e eficiência. 
Oferecemos instalação profissional, testes completos e garantia de 1 ano no equipamento e 30 dias no serviço.",
 "./assets/img/img-cercaEletrica.jpg");

  /*SERVICE 5*/
insert into services(title, description, imagens) values ("Instalação de Alarmes", 
"Instalação de sistemas de alarme para proteção residencial e comercial, com sensores 
estratégicos que detectam movimentações suspeitas. O serviço inclui configuração do sistema, 
testes de funcionamento e garantia de 1 ano no equipamento e 30 dias na instalação.",
 "./assets/img/img-sistemaAlarme.jpg");
 
   /*SERVICE 6*/
insert into services(title, description, imagens) values ("Instalação de Concertinas", 
"Instalação de concertina para reforço de segurança em muros e cercas. 
Trabalhamos com materiais resistentes e instalação segura, dificultando 
tentativas de invasão. O serviço inclui instalação profissional e garantia de 30 dias na mão de obra.",
 "./assets/img/img-concertina.jpg");
 
    /*SERVICE 7*/
insert into services(title, description, imagens) values ("Instalação de Interfones", 
"Instalação e manutenção de sistemas de interfone para comunicação entre ambientes ou controle de acesso em residências e empresas. 
Realizamos toda a configuração e testes para garantir o funcionamento correto. O serviço inclui garantia de 1 ano no equipamento e 30 dias na instalação.",
 "./assets/img/img-interfone.jpg");
 
   /*SERVICE 8*/
insert into services(title, description, imagens) values ("Instalação de Vídeo Porteiro", 
"Instalação de vídeo porteiro que permite visualizar e comunicar-se com visitantes antes de liberar o acesso ao imóvel. 
É uma solução moderna que aumenta a segurança e o controle de entrada. O serviço inclui instalação completa, configuração e garantia de 1 ano no equipamento e 30 dias no serviço.",
 "./assets/img/img-videoPorteiro.jpg");
 
   /*SERVICE 9*/
insert into services(title, description, imagens) values ("Instalação de Controle Remoto", 
"Configuração e cadastro de controles remotos para portões automáticos, garantindo praticidade e segurança no acesso ao imóvel.
 Realizamos programação, testes de funcionamento e garantia de 30 dias no serviço.",
 "./assets/img/img-programacao-controleRemoto.jpg");
 
    /*SERVICE 10*/
insert into services(title, description, imagens) values ("Instalação de Central Eletrônica", 
"Instalação e manutenção de centrais eletrônicas responsáveis pelo controle de sistemas automatizados, 
como portões e dispositivos de segurança. O serviço inclui instalação, configuração do sistema e garantia de 30 dias na mão de obra.",
 "./assets/img/img-instalacao-central.avif");
 
 

 
 /*DELETANDO ARQUIVOS INDESEJADOS*/
 DELETE FROM services
WHERE id >= 11;
 
 