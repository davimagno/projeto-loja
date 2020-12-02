<?php

include "header.php";


?>

<div class="row">
    <div class="col-md-6">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Produtos</span>
        </h4>
        <ul class="list-group mb-3">
            <?php
                include "listar-produtos.php";
            ?>
        </ul>
    </div>
    <div class="col-md-6">
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <a href="form-produto.php">Adicionar produtos</a>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <a href="form-tipo.php">Adicionar tipo de produto</a>
            </li>
        </ul>
    </div>
</div>

<?php include "footer.php" ?>






