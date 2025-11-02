# projeto1

## O Tema escolhido para o novo CRUD.
- Será realizado um novo CRUD das unidades.

## Um breve resumo de quais desafios foram implementados.
- Foi implementado um CRUD completo da unidade, onde pode se: criar, ler, atualizar e deletar a unidade na página do admin.
- A aplicação utiliza o XAMPP, com o Apache(servidor local) e conexão ao DB MySQL para armazenar os dados.
- Tecnologias: 
  - HTML e CSS para o front.  
  - php backend.
  - MySQL banco de dados.
  7
## Instruções rápidas para rodar o projeto.

[!IMPORTANT]
- Ao clonar o repositório, é importante salvar com o caminho correto. 
- Repositório: https://github.com/UNIPE-CC/projeto1.git
- C:\xampp\htdocs\..

1. Inicializar o Apache e o MySQL no XAMPP.
2. Abra o Browser. 
   - Na barra de navegacao, colocar [caminho](https://localhost/aulaphp) ou "localhost:80/aulaphp".
3. Selecione o projeto1. 
   - Após selecionado será direcionado a página home do projeto.
4. No menu da para se consultar/listar os dados inseridos no banco de dados.
5. Adicionando novos atributos no banco de dados.
   - Na barra de navegacao, colocar [caminho](http://localhost/aulaphp/projeto1/admin) ou "localhost/aulaphp/projeto1/admin".
6. Ao estar na pagina do admin, poderá realizar o CRUD.

# DB mySQL
### tabela clientes
```
CREATE TABLE clientes(
    id int AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100) NOT NULL,
    cidade VARCHAR(100),
    estado VARCHAR(50)
);
```

### tabela unidades
```
CREATE TABLE unidades(
    id int AUTO_INCREMENT PRIMARY KEY,
    curso VARCHAR(70) NOT NULL,
    nivel VARCHAR(30),
    duracao VARCHAR(30),
    modelo VARCHAR(30)
);
```