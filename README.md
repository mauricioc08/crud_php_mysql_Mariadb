# Tutorial de Início Rápido para um CRUD em PHP e MariaDB
### Este tutorial fornecerá um guia simples para criar um CRUD (Create, Read, Update, Delete) em PHP usando um banco de dados MariaDB. Um CRUD é uma operação comum em sistemas web que permite gerenciar registros em um banco de dados.

## Pré-requisitos
Ambiente de desenvolvimento PHP configurado (XAMPP, WAMP, MAMP ou LAMP).
Servidor MariaDB/MySQL instalado.
Conhecimento básico de HTML, PHP e SQL.

## Passos
### Configuração Inicial

Crie uma nova pasta para o seu projeto e nomeie-a.
Crie subpastas css e images para armazenar arquivos de estilo e imagens (opcional).
Crie um arquivo chamado index.php como ponto de entrada para a aplicação.
Conexão com o Banco de Dados

### Crie um arquivo de configuração chamado config.php para armazenar as informações de conexão com o banco de dados.
php
Copy code
```bash
<?php
$servername = "seu_host";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
```

### Inclua este arquivo em todas as páginas que precisam de acesso ao banco de dados.
Criar Registros (Create)

Crie um formulário HTML para inserir novos registros.
Valide os campos e insira os dados no banco de dados.
Ler Registros (Read)

Recupere os registros do banco de dados usando consultas SQL.
Exiba os registros em uma tabela HTML.
Atualizar Registros (Update)

Crie um formulário HTML pré-preenchido com os dados existentes.
Atualize os dados no banco de dados após a submissão do formulário.
Excluir Registros (Delete)

Crie um formulário HTML para enviar o ID do registro a ser excluído.
Exclua o registro correspondente do banco de dados.
Interface de Usuário

Crie páginas HTML para cada operação do CRUD (create.php, read.php, update.php, delete.php).
Use formulários HTML e elementos de página para interagir com o usuário.
Estilização (Opcional)

Adicione CSS para melhorar a aparência das páginas.
Use classes CSS para formatar a tabela e os elementos do formulário.
Testando a Aplicação

Inicie o servidor web e o servidor MariaDB.
Acesse a aplicação em seu navegador usando a URL apropriada.
## Observações
Este é um guia básico para começar a desenvolver um CRUD em PHP e MariaDB. À medida que avança, você pode aprender sobre técnicas mais avançadas, como segurança, validação e otimização de consultas SQL.
Lembre-se de nunca expor informações sensíveis, como senhas de banco de dados, no código-fonte publicamente.
