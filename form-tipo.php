<?php include "header.php" ?>

<div class="row">
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Cadastro Tipo de Produto</h4>
        <form method="post" action="form/salvar-tipo.php">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nome">Tipo de Produto</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" required>
                </div>
            </div>
            <button class="btn btn-primary btn-lg " type="submit">Salvar</button>
            <a href="index.php" class="btn btn-danger btn-lg " type="submit">Cancelar</a>
        </form>
    </div>
</div>

<?php include "footer.php" ?>
