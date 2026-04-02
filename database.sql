create database portal_noticias;
use portal_noticias;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    perfil ENUM('admin', 'redator', 'leitor') NOT NULL,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    slug VARCHAR(80) UNIQUE NOT NULL
);

CREATE TABLE noticia (
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
    FOREIGN KEY (id_autor) REFERENCES user(id),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id)
);

CREATE TABLE salvos (
id int AUTO_INCREMENT PRIMARY KEY,
id_user int not null,
id_noticia int not null,
foreign key (id_user) references user (id),
foreign key (id_noticia) references noticia (id)
);