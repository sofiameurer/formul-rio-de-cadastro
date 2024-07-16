<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $linguagens = implode(", ", $_POST['linguagens']);

    $sql = "INSERT INTO cadastro (nome, idade, email, linguagens) VALUES ('$nome', $idade, '$email', '$linguagens')";

    if ($conn->query($sql) === TRUE) {
        echo "SEU CADASTRO FOI REGISTRADO!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>