<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
    
   <?php include_once 'includes/menu.inc.php' ?>

    <!--FORMULÁRIO DE CADASTRO-->
    <div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend><img src="img/logo3lm.png" alt="[imagem]"></legend>
                <h5 class="light center">Cadastro de Candidatos</h5>

                <?php
                    if(isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                        session_unset();
                    endif;


                ?>



                <!--CAMPO NOME-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlenght="40" require autofocus>
                    <label for="nome">Nome do Candidato</label>
                </div>


                <!--CAMPO EMAIL-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" maxlenght="50" require>
                    <label for="email">Email do Candidato</label>
                </div>

                 <!--CAMPO TELEFONE-->
                 <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" maxlenght="15" require>
                    <label for="telefone">Telefone do Candidato</label>
                </div>
                


                <!--BOTÕES-->
                <div class="input-field col s12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn red">
                </div>

            </fieldset>
        </form>    
    </div>




<?php include_once 'includes/footer.inc.php' ?>