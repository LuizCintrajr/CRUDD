<?php

include("blades/header.php");

?>
<div class="container border rounded mt-5 pt-3 ps-3 pb-3 pe-3 bg-white">
<form action="../controllers/cadastrarAluno.php" method="post">
    <label class="form-label">Nome</label><br>
    <input class ="form-control" type="text" name="alunoNome"><br>
    <label class="form-label">Cidade</label><br>
    <input class="form-control" type="text" name="alunoCidade"><br>

    
    <label class="form-label">Sexo</label>
    M <input type="radio" name="alunoSexo" value="m">
    F <input type="radio" name="alunoSexo" value="f"><br>
    <input class="btn btn-success" type="submit" value="Cadastrar">
</form>
</div>
<?php
include("blades/footer.php")
    ?>