create database portal_noticias;
use portal_noticias;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    perfil ENUM('admin', 'redator', 'leitor') NOT NULL,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    slug VARCHAR(80) UNIQUE NOT NULL
);

CREATE TABLE noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    resumo TEXT,
    corpo LONGTEXT NOT NULL,
    imagem VARCHAR(255),
    status ENUM('rascunho', 'revisao', 'publicada') DEFAULT 'rascunho',
    visualizacoes INT DEFAULT 0,
    id_autor INT NOT NULL,
    id_categoria INT NOT NULL,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
    atualizado_em DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_autor) REFERENCES usuarios (id),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id)
);

CREATE TABLE salvos (
id int AUTO_INCREMENT PRIMARY KEY,
id_usuario int not null,
id_noticia int not null,
salvo_em DATETIME DEFAULT CURRENT_TIMESTAMP,
UNIQUE KEY unico_salvo (id_usuario, id_noticia),
foreign key (id_usuario) references usuarios (id),
foreign key (id_noticia) references noticias (id)
);