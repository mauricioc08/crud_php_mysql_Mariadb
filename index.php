<?php
// Informações de conexão com o banco de dados
$servername = "seu_host";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Agora você pode executar consultas SQL usando a conexão "$conn"


//Exemplo de insert (Create new user);

if (
    isset($_POST["name"]) && !empty($_POST["name"]) &&
    isset($_POST["age"]) && !empty($_POST["age"])
    ) {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $insertSql = "INSERT INTO curso_PHP.usuarios (name, age) VALUES('$name', $age)";
        $response = $conn->query($insertSql);
    }

// Exemplo de consulta do banco (Readme):
        $sql = "SELECT * FROM sua_tabela";
        $result = $conn->query($sql);    

 //Exemplo de (Update);
        $updateUser = "UPDATE curso_PHP.usuarios SET name='novoNome', age=52 WHERE id=1";
        $updateResponde = $conn->query($updateUser);    

    
//Exemplo de delete;
    
    if (
        isset($_POST["userId"]) && !empty($_POST["userId"])
        ) {
            $userId = $_POST["userId"];
            
            $deleteUser = "DELETE FROM curso_PHP.usuarios WHERE id= $userId";
            $deleteUserResponse = $conn->query($deleteUser);
        }
