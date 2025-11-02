# projeto1

- O Tema escolhido para o novo CRUD.
Será realizado um novo CRUD das unidades, onde pode se; criar, ler, atualizar e deletar a unidade.

- Um breve resumo de quais desafios foram implementados.


- Instruções rápidas para rodar o projeto (Ex: "Acessar index.php").
  1 - Inicializar o Apache e o MySQL no XAMPP.
  2 - Abra o Browser. 
2.1 - Na barra de navegacao, colocar "localhost:80/aulaphp".
2.2 - Selecione o projeto1. 
2.3 - Abrira a home do projeto.
  3 - No menu da para se consultar os dados inseridos no banco de dados.
  4 - Adicionando novos atributos no banco de dados.
4.1 - Na barra de navegacao, colocar "localhost/aulaphp/projeto1/admin".
4.2 - Ao estar na pagina do admin, poderá realizar o CRUD.

# DB mysql
- Criando a tabela clientes
```
CREATE TABLE clientes(
    id int AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100) NOT NULL,
    cidade VARCHAR(100),
    estado VARCHAR(50)
);
```

- Criando a tabela unidades
```
CREATE TABLE unidades(
    id int AUTO_INCREMENT PRIMARY KEY,
    curso VARCHAR(70) NOT NULL,
    nivel VARCHAR(30),
    duracao VARCHAR(30),
    modelo VARCHAR(30)
);
```