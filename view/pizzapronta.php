<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos Prontos</title>
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/2821/2821801.png" type="image/x-icon">    
    <link rel="stylesheet" href="/Style/Pedidos-prontos.css">
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
<img src="/Imgs/calabresa.png" alt=""  onclick="adicionarvalor(22.00)">
<img src="/Imgs/Frango.png" alt="" onclick="adicionarvalor(18.50)">
<img src="/Imgs/Brocolis.png" alt="" onclick="adicionarvalor(24.20)">
<img src="/Imgs/Light.png" alt="" onclick="adicionarvalor(14.99)">

<div id= lista>
  <h1>Valores:<?php echo $dados;?> </h1>
  <li></li>
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