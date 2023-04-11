<?php
//importar a conexão com o banco
include("models/conexao.php");

include("views/blades/header.php");

?>

<div class="container border rounded mt-5 pt-3 ps-3 pb-3 pe-3 bg-white">
<a href="views/cadastro.php"><button class="btn btn-success">Cadastrar</button></a>
<hr>
<form action="index.php" method="post">
    <input class="form-control" name="buscar" placeholder="Digite a busca">
    
</form>
<hr>

<?php
if (empty($_POST["buscar"])){

echo "Nenhum resultado";

}else {

    $varBuscar = $_POST["buscar"];


?>


<table class="table table-bordered  table-striped table-hover">
    <tr>
        <td><b>Nome</b></td>
        <td><b>Editar</b></td>
        <td><b>Excluir</b></td>
    </tr>


    <?php
    $query = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome LIKE '%$varBuscar%' ORDER BY codigo DESC");
    while ($exibe = mysqli_fetch_array($query)) {
        $vogal = ($exibe[3] == "m") ? "o" : "a";
        ?>

        <tr>
            <td>
                <?php echo strtoupper($vogal) . " alun" . $vogal ?> se chama<b>

                    <?php echo $exibe[1] ?>
                </b>e mora na cidade de
                <?php echo $exibe[2] ?></b>.</td>
            </td>
            
            <td><a class="btn btn-primary" href="Views/cadastroAtualiza.php">Editar</a></td>
            <td><a class="btn btn-danger" href="controllers/deletarAluno.php?ida=<?php echo $exibe[0] ?>">Excluir</a></td>
        </tr>


    <?php } ?>

</table>
<?php } ?>
    </div>

<?php
include("views/blades/footer.php");
?>