<?php
    require_once '../dao/cliente_dao.php';

    $dao = new ClienteDAO();
    $clientes = $dao->listarClientes();
?>





<form action="../control/conta_inserir_controller.php" method="post">
    <div>
        <select name="cli" id="cliente">
            <?php
            foreach($clientes as $cliente){
            ?>
                <option value="<?= $cliente["cli_id"] ?>">
                    <?= $cliente["cli_nome"] ?>
                </option>
            <?php
            }
            ?>
        </select>
    </div>
    <div>
        <label for="numero">Numero da Conta:</label>
        <input type="text" name="numero" id="numero">
    </div>
    <div>
        <button type="submit">Cadastrar</button>
    </div>
</form>