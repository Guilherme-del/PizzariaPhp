<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria hi-tech</title>
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/2821/2821801.png" type="image/x-icon">    
    <link rel="stylesheet" href="/Style/main.css">
</head>

<body>
<header>
  <div class="navbar">
    <div class="logo">
   <a href="/view/Index.php"><img src="/Imgs/logo.png"></a>  
    </div>
    <ul>
      <li><a href="/view/Index.php">Home</a></li>
      <li><a href="#aboutus">Sobre</a></li>
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

<div id="slider">
   <input type="radio" name="slider" id="slide1" checked>
   <input type="radio" name="slider" id="slide2">
   <input type="radio" name="slider" id="slide3">
   <input type="radio" name="slider" id="slide4">
   <div id="slides">
      <div id="overflow">
         <div class="inner">
            <div class="slide slide_1">
               <div class="slide-content">
                  <img src="/Imgs/Pizza.png" alt="">
               </div>
            </div>
            <div class="slide slide_2">
               <div class="slide-content">
                <img src="/Imgs/Pizza2.png">  
               </div>
            </div>
            <div class="slide slide_3">
               <div class="slide-content">
                  <img src="/Imgs/pizza3.png">
               </div>
            </div>
            <div class="slide slide_4">
               <div class="slide-content">
               <img src="/Imgs/pizza.gif" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="bullets">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
</div>

<main>
<div id="aboutus"> 
<h1>Sobre nós ❤️</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias eum tempora iste cumque voluptatibus enim. Consectetur nostrum, error dolore ullam officiis ut esse amet porro voluptates reprehenderit aperiam et. Consequatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga corporis adipisci consequatur dignissimos unde esse natus delectus quos sint facere molestiae tempora quaerat nisi harum cumque, debitis voluptate voluptatibus eius! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea dignissimos beatae vitae a, hic ipsa dolores inventore in tenetur consequatur maxime dolorem iure alias ipsum. Nobis vel quis facilis a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum error similique blanditiis dolor cupiditate quisquam harum repellendus consequuntur necessitatibus nesciunt ea sed, incidunt sapiente tenetur reprehenderit corrupti nostrum delectus! Qui.</p>
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

<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
