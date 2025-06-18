CREATE DATABASE bdBlog

use bdBlog

CREATE TABLE produtos (

    id int(11) NOT NULL AUTO_INCREMENT,
    titulo varchar(100) DEFAULT NULL,
    descricao varchar(300) DEFAULT NULL,
    PRIMARY KEY (id)

)