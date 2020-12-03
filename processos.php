<?php
    $nome = $_POST["nome"];
    $anoCursado = $_POST["anoCursado"];
    $nascimento = $_POST["nascimento"];
    $materia = $_POST["materia"];

    $conexao = new mysqli("localhost", "root","vertrigo","escola");

    $sql = $conexao->prepare("INSERT INTO alunos(nome, anoCursado, nascimento, materia) VALUES (?,?,?,?)");
    $sql->bind_param("ssss",$nome,$anoCursado,$nascimento,$materia);

    $sql->execute();

    mysqli_close($conexao);

    header("location: index.php");
?>