<?php
include "banco.php";
$sql = "SELECT p.id, p.nome, p.valor, t.nome as tipo FROM produtos p JOIN tipos t ON p.tipo_id = t.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0"><?= $row["nome"] ?></h6>
                <small class="text-muted"><?= $row["tipo"] ?></small>
            </div>
            <span class="text-muted"><?= $row["valor"] ?></span>
            <div>
                <a href="form-produto.php?id=<?= $row["id"] ?>" type="submit" class="btn btn-primary btn-sm">Editar</a>
                <a href="form/deletar-produto.php?id=<?= $row["id"] ?>" type="submit" class="btn btn-danger  btn-sm">Excluir</a>
            </div>
        </li>
        <?php
    }
}
