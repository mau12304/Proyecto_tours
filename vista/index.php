<?php require_once("layout/header.php");?>
  <!--Merida-->
  <div class="search-container">
        <form action="/buscar" method="get">
            <input type="text" placeholder="¿A DÓNDE QUIERES VIAJAR ?" name="query">
            <button type="submit">Buscar</button>
        </form>
    </div>
    <!--Merida--><br>
<?php  require_once("layout/article.php");?>
<?php require_once("layout/footer.php");?>