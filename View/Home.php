<?php
if (isset($_SESSION['usuario_fez_login'])) {
?>
    <h1>Bem vindo, <?php echo $_SESSION['nome_usuario'] ?></h1>
<?php } else { ?>
    <h1>Nossos destaques:</h1>
<?php } ?>
<!----------------------------------------------------------------------------------------------------------------------------->
<hr>
<div class="grade">
    <img id="img-home" src="img/cup" alt="Umbrella">

<!-- style="color: black;" -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Img/capa_1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="Img/capa_2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="Img/capa_3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script>
    let deg = 0;
    let img_home = document.getElementById("img-home")

    // Faz o javascript esperar por uma certa quantidade de milisegundos
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    (async function girarImagem() {
        img_home.style.transform = `rotate(${deg}deg)`
        deg = deg >= 360 ? 0 : deg + 1
        await sleep(10)
        girarImagem()
    })()
</script>