<div class="container">
    <div class="grade">
        <h2> Login </h2>
        <form style="font-size: 15pt" action="Src/autenticar_login.php" method="post">
            <label for="input_login">Login</label>
            <input autocomplete="off" required class="input" type="text" name="login" id="input_login">

            <br>

            <label for="input_senha">Senha</label>
            <input required class="input" type="password" name="senha" id="input_senha">

            <br>

            <?php if (isset($_GET['erro'])) { ?>
                <span class="error"><?php echo $_GET['erro'] ?></span>
            <?php } ?>

            <input style="float: rigth; margin-top: 20px" class="botao" type="submit" value="Fazer login">
        </form>
    </div>
</div>
