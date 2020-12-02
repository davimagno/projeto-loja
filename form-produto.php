<?php include "header.php";

include "banco.php";

$sql = "SELECT id, nome  FROM  tipos ";
$tipos = $conn->query($sql);

$produto;
if ($_GET['id']) {

    $sql = "SELECT p.id, p.nome, p.valor, t.id as tipo FROM produtos p JOIN tipos t ON p.tipo_id = t.id WHERE p.id =  " . $_GET['id'];
    $res = $conn->query($sql);
    if ($res->num_rows > 0)
        $produto = $res->fetch_assoc();
}
?>

<div class="row">
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Cadastro Produto</h4>
        <form method="post" action="form/salvar-produto.php">
            <div class="row">
                <input type="hidden" name="id" value="<?= isset($produto['id']) ? $produto['id'] : '' ?>">
                <div class="col-md-4 ">
                    <label for="nome">Nome Produto</label>
                    <input type="text" class="form-control" id="nome" name="nome"
                           value="<?= isset($produto['nome']) ? $produto['nome'] : '' ?>" required>
                </div>
                <div class="col-md-4 ">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor"
                           value="<?= isset($produto['valor']) ? $produto['valor'] : '' ?>" required>
                </div>
                <div class="col-md-4 ">
                    <label for="tipo">Tipo Produto</label>
                    <select class="custom-select d-block w-100" id="tipo" name="tipo" required="">
                        <option value="">Escolha...</option>
                        <?php
                        if ($tipos->num_rows > 0) {
                            while ($row = $tipos->fetch_assoc()) {
                                ?>
                                <option <?= isset($produto['tipo']) && ($row["id"] == $produto['tipo']) ? 'selected' : '' ?>
                                        value="<?= $row["id"] ?>"><?= $row["nome"] ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-lg " type="submit">Salvar</button>
            <a href="index.php" class="btn btn-danger btn-lg " type="submit">Cancelar</a>
        </form>
    </div>
</div>

<?php include "footer.php" ?>
