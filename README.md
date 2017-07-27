# CRUD PHP 

Projeto de aplicação simples em php utilizando autoload e PDO.

### Instação

Executar o comando do composer na pasta do projeto:

```sh
$ composer update
```

(Obs):. Caso ouver problemas com o plugin de rotas basta remover ele e baixar novamente: https://github.com/leeoniya/Route66.php

Configurar os dados de acesso ao banco no arquivo app/config/database.php

Sql para criação da tabela:

```sh
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `data_nascimento` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
```

Execute o comando abaixo na pasta do index para iniciar o servidor:

```sh
$ php -S localhost:8000
```
