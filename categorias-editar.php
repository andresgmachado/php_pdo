<?php 
require_once 'cabecalho.php'; 
require_once 'global.php'; 
try{
$id = $_GET['id'];
$categoria = new Categoria($id);
}
catch (Exception $e){
    erro::trataerro($e);
}
?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>
<form action="../pdo/editar-categoria-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input type="hidden" value="<?php echo $categoria->id?>" name="id">
                <input type="text" value="<?php echo $categoria->nome?>" name="nome" class="form-control" placeholder="Nome da Categoria">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
