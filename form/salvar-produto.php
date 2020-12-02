<?php
include "../banco.php";


if( isset($_POST['id']) && !empty($_POST['id'])) {
    $sql = "UPDATE produtos 
  SET nome  = '".$_POST['nome']."', 
      tipo_id = '".$_POST['tipo']."', 
      valor = '".$_POST['valor']."'
      WHERE id = ". $_POST['id'];
    if ($conn->query($sql) === TRUE) {
        echo "Editado com sucesso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    $sql = "INSERT INTO produtos (nome, tipo_id, valor) VALUES ('".$_POST['nome']."', '".$_POST['tipo']."', '".$_POST['valor']."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

header('Location: ../index.php');
