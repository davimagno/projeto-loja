<?php
include "../banco.php";

if( isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "DELETE FROM produtos  WHERE id = " . $_GET['id'];

    if ($conn->query($sql) === TRUE) {
        echo "Deletado com sucesso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

header('Location: ../index.php');
