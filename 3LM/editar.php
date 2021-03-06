<?php 
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

<?php 
include_once 'banco_de_dados/conexao.php';

$id= filter_input(INPUT_GET, 'id' FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $link->query("select * from tb_clientes wher id='$id");

    while($registros = $querySelect->fetch_assoc());
        
        $nome = $registros['nome'];
        $email = $registros['email'];
        $telefone = $registros['telefone'];
endwhile;

?>

<!--FORMULÁRIO DE CADASTRO-->
<div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/update.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend><img src="img/logo3lm.png" alt="[imagem]"></legend>
                <h5 class="light center">Alteração</h5>


                <!--CAMPO NOME-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlenght="40" value="<?php echo $nome ?>" require autofocus>
                    <label for="nome">Nome do Candidato</label>
                </div>


                <!--CAMPO EMAIL-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>" maxlenght="50" require>
                    <label for="email">Email do Candidato</label>
                </div>

                 <!--CAMPO TELEFONE-->
                 <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlenght="15" require>
                    <label for="telefone">Telefone do Candidato</label>
                </div>
                


                <!--BOTÕES-->
                <div class="input-field col s12">
                    <input type="submit" value="Alterar" class="btn blue">
                    <a href="consultas.php" class="btn red">cancelar</a>
                </div>

            </fieldset>
        </form>    

<?php include_once 'includes/footer.inc.php' ?>

