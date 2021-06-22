<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos Prontos</title>
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/2821/2821801.png" type="image/x-icon">    
    <link rel="stylesheet" href="/Style/Pedidos-personalizados.css">
</head>


<body>
<header>
  <div class="navbar">
    <div class="logo">
   <a href="/view/Index.php"><img src="/Imgs/logo.png"></a>  
    </div>
    <ul>
      <li><a href="/view/Index.php">Home</a></li>
      <li class="dropdown">Pedidos
        <ul id="submenu">
					<li><a href="/view/personalizar.php">Personalizar</a</li>
					<li><a href="/view/pizzapronta.php">Prontas</a></li>
				</ul>
        <span class="fas fa-caret-down"></span>
      </li>      
    </ul>
  </div>
</header>

<main>
  <div id= lista>
  <h1>Sabores da pizza: </h1>
  <li></li>
  </div>

<div id = "ingrediente">
<abbr title="Abobrinha 3.5 reais"><img src="/Imgs/Abobrinha.png" onclick="adicionar('Abobrinha')"></abbr>
<abbr title="Bacon 8.25 reais"><img src="/Imgs/bacon.png" onclick="adicionar('Bacon')"></abbr>
<abbr title="Brocolis 5.2 reais"><img src="/Imgs/Brocolis2.png" onclick="adicionar('Brocolis')"></abbr>
<abbr title="Calabresa 7.5 reais"><img src="/Imgs/Calabresa2.png" onclick="adicionar('Calabresa')"></abbr>
<abbr title="Catupiry 5.5 reais"><img src="/Imgs/catupiry.png" onclick="adicionar('Catupiry')"></abbr>
<abbr title="Cebola 4.99 reais"><img src="/Imgs/cebola.png" onclick="adicionar('Cebola')"></abbr>
<abbr title="Frango 6.5 reais"><img src="/Imgs/frango2.png" onclick="adicionar('Frango')"></abbr>
<abbr title="Ovo 3.99 reais"><img src="/Imgs/ovo.png" onclick="adicionar('Ovo')"></abbr>
<abbr title="Queijo 6.5 reais"><img src="/Imgs/queijo.png" onclick="adicionar('Queijo')"></abbr>
</div>
</main>

<footer>
 <p class = "textmid">MIDIAS SOCIAIS : </p> 
 <div class="rounded-social-buttons">
 <a class="social-button facebook" href="https://www.facebook.com/guilherme.cavenaghi/" target="_blank"><i class="fab fa-facebook-f"></i></a>
  <a class="social-button instagram" href="https://www.github.com/guilherme-del" target="_blank"><i class="fab fa-instagram"></i></a>                    
<a class="social-button linkedin" href="https://www.linkedin.com/in/guilherme-cavenaghi-589166166/" target="_blank"><i class="fab fa-linkedin"></i></a>
<p class = "Copy"> © 2021 Criado com ❤️ por W2 Team.</p>           
</div>
</footer>
</body>
</html>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/personaliza.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>