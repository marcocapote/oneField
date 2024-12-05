<?php

$dados = OneFieldController::listar();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_field'])) {
    OneFieldController::inserir($_POST);
}

?>
<h1>Lista oneField</h1>

<form action="" method="post">
    <input type="number" name="field" id="field">
    <button type="submit" name="submit_field">Salvar</button>
</form>

<table border="1" cellspacing="0">
    <tr>
        <th>Numero</th>
        <th>Dobro</th>
        <th>Quadrado</th>
    </tr>
    <?php if (!empty($dados)): ?>
        <?php foreach ($dados as $linha): ?>

            <tr>
                <td><?php echo esc_html($linha->field); ?></td>
                <td><?php echo esc_html($linha->field) * 2; ?></td>
                <td><?php echo esc_html($linha->field) ** 2; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8" style="text-align: center;">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
</table>