<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Alphashub.github.io/alfa.css">
	<title>Alpha's Hub</title>
<style>
	* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img{vertical-align: middle;}
</style>
</head>
<body>
<div class="container" >
<div class="tooltable">

	<a href="/" class="alphalogo">
		<img class="alphalogo" src="/Alphashub.github.io/images/logo.png" alt="Alpha logo" width="120" style="float: left;" >		
	</a>
<div class="header">
	<h2 style="padding: 0 40px 0 0;">Alpha's Hub</h2>
	<p>Melhor Solucao para a perda Capilar</p>
</div>

<div id="navbar">
	<a class="active" href="/alpha/a/">Home</a>
	<a href="/alpha/a/">Galeria de Fotos</a>
	<a href="javascript:void(0)">Contato</a>
</div>

<div class="content">
	<h3>Pigmenta&ccedil;&atilde;o Capilar</h3>
	<p class="text2">
	A Micropigmenta&ccedil;&atilde;o Capilar tornou-se rapidamente uma das solucoes mais eficazes para a perda de cabelo.
	</p>
</div>

<div class="slideshow-container">
	<div class="mySlides fade">
		<div class="numbertext">1 / 4</div>
		<img src="/alpha/a/fotos/a5.jpg" style="width: 100%">
		<div class="text1">Caption Text</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">2 / 4</div>
		<img src="/alpha/a/fotos/a2.jpg" style="width: 100%">
		<div class="text1">Caption Two</div>
	</div>
	
	<div class="mySlides fade">
		<div class="numbertext">3 / 4</div>
		<img src="/alpha/a/fotos/a3.png" style="width: 100%">
		<div class="text1">Caption Three</div>
	</div>
	<div class="mySlides fade">
		<div class="numbertext">4 / 4</div>
		<img src="/alpha/a/fotos/aa4.jpg" style="width: 100%">
		<div class="text1">Caption Four</div>
	</div>
</div>
<br>

<div style="text-align:center">
	<span class="dot"></span>
	<span class="dot"></span>
	<span class="dot"></span>
	<span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>

<br>
<div>
<h2 class="text2">O que a Micropigmenta&ccedil;&atilde;o Capilar?</h2>
		<p class="text2">Micropigmenta&ccedil;&atilde;o Capilar e um tratamento nao-cirurgico e nao-invasivo que utiliza microagulhas para depositar pigmento no couro cabeludo. O resultado cria a aparencia de minusculos foliculos pilosos que ajudam a engrossar e restaurar a parecenca de cabelos mais cheios.</p>
		<p class="text2">
			A <i>micropigmenta&ccedil;&atilde;o da cabeca</i> e uma tecnica promissora nao apenas para quem sofre de calvicie e queda de cabelo, mas tambem para quem gostaria de ter cabelos aparentemente mais volumosos. Feita com um pigmento a base de glicerina, ela promete um visual bem natural.
		</p>
</div>


<script type="text/javascript">
	window.onscroll = function() {myfunction()};

	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function myfunction(){
		if (window,pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}
</script>
</div>
	<div class="tooltableBottom">
		<table width="100%">
			<tbody>
				<tr>
					<td>
						<div class="bottom1-nav" align="left">
							<a href="/alpha/a/index.html">Home</a>
							
						</div>
						<div class="bottom1-nav" align="left">
							<a href="/alpha/a/index.html">Home</a>
						</div>
						
					</td>
				
					<td>
						<div class="bottom2-nav" align="right">
							<p>
								<span style="text-decoration: underline;">RIO DE JANEIRO</span>
								<br>
								Estrada do Gale&atilde;o, 2693-Loja E
								<br>
								Ilha do Governador, RJ
								
							</p>
						</div>
						<div class="bottom2-nav" align="right">
							<p>
								Tel: (21)98 0315-294
								<br>
								<a href="mailto:alphashub@gmail.com" target="_blank" rel="noopener noreferrer">alphashub@gmail.com</a>
							</p>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>