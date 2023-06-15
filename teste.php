<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href="areadoproduto.css">
    <title>Pagina Principal</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<body>
    <header>
        <div class="navbarsup">
            <a>MORLY'S</a>
        </div>
        <div class="subnavbar">
            <ul>
                <li><a href="#">PERFUMES</a></li>
                <li><a href="#">MAQUIAGENS</a></li>
                <li><a href="#">CABELO & BARBA</a></li>
                <li><a href="#">CORPO</a></li>
                <li><a href="#">SOBRE</a></li>
            </ul>
        </div>
    </header>
    <section>
        <div class="titulo">
        <a>BLEU DE CHANNEL</a>
        </div>
        <div class="container">
        <div id="contentimg">
        <img src="img/Channel.PNG">
        </div>
        <div id="stars">
        <ul>
        <li><img src="img/estrela.PNG"></li>
        <li><img src="img/estrela.PNG"></li>
        <li><img src="img/estrela.PNG"></li>
        <li><img src="img/estrela.PNG"></li>
        <li><img src="img/estrela.PNG"></li>
        <li><p>5/5</p></li>
        </ul>
        </div>
        <div id="valor">
        <a id="principal">VAlOR: R$1065,00</a>
        <br>
        <a id="sub">ou 10x De 106,50</a>
        </div>
        <div id="descricao">
        <h1>DESCRIÇÃO</h1>
        <p>Um tributo à liberdade masculina em uma fragrância amadeirada aromática com rastro cativante.
             Um perfume atemporal, mantido em um frasco de cor azul profunda e misteriosa.Bleu de Channel Eau de Toilette expressa uma elegância simples e intensa.</p>
        </div>
        <div id="botaofinal"><a href="#">FINALIZAR COMPRA</a></div>
        <div id="botaoadd"><a href="#">ADICIONAR AO CARRINHO</a></div>
        </div>
        <br>
        <br>
        <div class="titulo1">
        <hr>
        <a>PRODUTOS SIMILARES</a>
        </div>
        <br>
        <Br>
        <br>
        <div class="container2">
        <div id="img1">
        <img src="img/Sauvage.PNG">
        </div>
        <div id="timg1">
        <ul>
        <li><img src="img/sacola.PNG"></li>
        <li><p id="p">DIOR SAUVAGE</p>
        <p id="sp">R$: 879,00</p></li>
        </ul>
        </div>
        <div id="img2">
        <img src="img/moschino.PNG">
        </div>
        <div id="timg2">
        <ul>
        <li><img src="img/sacola.PNG"></li>
        <li><p id="p">TOY BOY MOSCHINO</p>
        <p id="sp">R$: 319,00</p></li>
        </ul>
        </div>
        <div id="img3">
        <img src="img/gaultier.PNG">
        </div>
        <div id="timg3">
        <ul>
        <li><img src="img/sacola.PNG"></li>
        <li><p id="p">GAULTIER LA BELLE LE</p>
        <p id="sp">R$: 829,90</p></li>
        </ul>
        </div>
        </div>
        <br>
        <br>
        <div class="botton">
        <a href="#">MAIS</a>
        </div>
        <br>
        <br>
        <div class="titulo2">
        <hr>
        <a>AVALIAÇÕES</a>
        </div>
        <br>
        <Br>
        <br>
        <div class="container3">
        <div id="comentario">
        <H1>COMENTARIOS</H1>
        <input type="text" name="comentario" value=
        <?php
    if(isset($_POST["submit"])){
    $texto = $_POST["comentario"];

    echo "<br><br>";
    echo "<h2>" .$comentario. "</h2>";
}
?>
        <p>TEXTO</p>
        </div>
        <div id="star1">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <a>20</a>
        </div>
        <div id="star2">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <a>0</a>
        </div>
        <div id="star3">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <a>0</a>
        </div>
        <div id="star4">
        <img src="img/estrela.PNG">
        <img src="img/estrela.PNG">
        <a>0</a>
        </div>
        <div id="star5">
        <img src="img/estrela.PNG">
        <a>0</a>
        </div>
        <!-- Formulario -->
        form action="index.php" method="post">
            <div id="tituloof">DEIXE SEU COMENTÁRIO</div>
            <br>
            <div id="estrelas">
                <img src="img/estrela.PNG">
                <img src="img/estrela.PNG">
                <img src="img/estrela.PNG">
                <img src="img/estrela.PNG">
                <img src="img/estrela.PNG">
                <input type="range" max="5" id="range">
            </div>
            <div id="seutexto">
                <label for="comentario">
                    <textarea rows="12" cols="51" maxlength="300" name="comentario" required="required" placeholder="Digite até 300 caracteres"></textarea>
                </label>
                <br>
                <input type="submit" value="ENVIAR" id="submit" name="submit">
            </div>
        </form>

        <?php
        if(isset($_POST["submit"])){
            $comentario = $_POST["comentario"];
            echo "<div id='comentario'>$comentario</div>";
        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>
    <footer>
        <hr>
        <P>TODOS OS DIREITOS RESEVADOS</P>
    </footer>
</body>
</html>