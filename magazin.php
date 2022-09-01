<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/haber_sablon.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Magazin Haberleri</title>

<link rel="stylesheet" href="css/reset.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous" />


<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<meta charset="utf 8">
<meta name="description" content="Profesyonel Web Dersleri">
<meta name="author" content="Kamil KULU">
<meta name="keywords" content="HTML, CSS, Dersler">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/a.ico" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
#logo
{
	
	
	background-color:white;
	font-size:36px;
	padding:20px;
	margin-right:auto;
	letter-spacing:2px;
	
	
}
footer .fab{
		font-size:30px;
		color:#95A5A6;
		line-height:50px;
		transition:all .3s ease;
	}
	footer .fab:hover
	{
		color:white;
	}
#menu
{
	
	background-color: white;
	font-size: 36px;
	padding: 20px;
	letter-spacing:2px;
	font-family:'Raleway';
	
}
#headerkap
 {
	 display:flex;
 }
 #slider
 {
	 height:500px;
	
 }
 #icerikkap
 {
	
display:inline-block;
   width:98%;
    transform:scale(50%,50%);

 }
 #a
 {
	display:inline-block;
	 background-color:#000;
	 margin-left:20px;
	 margin-top:10px;
	 width:300px;
	height:250px;
 margin-bottom:10px;
	 color:white;
	 text-align:center;
	 
	 
 }
  #footerkap
 {
   height:300px;
   background-color:#500D16;
 }
 #footerItem
 {
	
	padding:20px;
	display:flex;
	 justify-content:space-between;
  	 flex-grow:1;
 }
 #col3
 {
	 width:200px;
	 height:200px;
	color:#95A5A6;
	text-align:center;
	font-family:"Raleway";

	
	
 }
#menu ul
{
	list-style:none;
}
#menu ul li
{
	float:left;
}
 #menu ul li a
 {
	 display:block;
	 margin-top:50px;
	 text-decoration:none;
	 transition:all .5s ease;
	 margin-left:20px;
	 font-size:22px;
	color:black;
	 height:50px;
	 line-height:50px;
	 width:137px;
	 text-align:center;
	 letter-spacing:2px;
 }
 #menu ul li a:hover
 {
	 background-color:black;
	 color:#FFF;
 }
 #b
 {
	 height:50px;
	 overflow:hidden;
	 background-color:yellow;
	 margin-top:200px;
 }
 .socialLinks li
	{
		display:inline-block;
		width:50px;
		height:50px;
	}
</style>
</head>

<body>
<header>
<div id="headerkap">
<div id="logo"><a href="index.php"><img src="images/logo2.png" /></a></div>
<div id="menu"><ul>
<li><a href="index.php">Son Dakika</a></li>
<li><a href="guncel.php">Güncel</a></li>
<li><a href="ekonomi.php">Ekonomi</a></li>
<li><a href="dunya.php">Dünya</a></li>
<li><a href="spor.php">Spor</a></li>
<li><a href="magazin.php">Magazin</a></li>
</ul></div>
</div>
</header>
<!-- SLİDER -->
<section>
<div id="slider">
<div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:500px;width:100%" src="images/fenerbahce-italya.PNG" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height:500px;width:100%" src="images/fenerbahce-italya.PNG" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height:500px;width:100%" src="images/fenerbahce-italya.PNG" class="d-block" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</section>
<!-- İÇERİK -->
<section>
<div id="icerikkap"><!-- InstanceBeginEditable name="EditRegion3" -->
<?php
include("baglanti.php");
$listele=mysql_query("select * from tbl_haber where haber_kat_id=6");


while($goster=mysql_fetch_array($listele))
{
	
	echo "<div class='card w-300 ml-4 mt-5 mb-10' style=width:18rem;float:left;>
  <a href=ayrinti.php?haber_id=".$goster["haber_id"]."><img src='{$goster["haber_resim"]}' class='card-img-top' style=height:200px alt='...'></a>
  <div class='card-body'>
    <h5 class=card-title>{$goster["haber_baslik"]}</h5>
   
   
  </div>
</div>";
	
}
?>

<!-- InstanceEndEditable -->


</div>
</section>
<footer id="footerkap">
<div id="footerItem">
<div id="col3"><h2>Haberler</h2><br />Ekonomi Haberleri<br />Dünya Haberleri<br />Spor Haberleri<br />Magazin Haberleri</div>
<div id="col3"><h2>Magazin</h2><br />Hadise<br />Alişan<br />Şeyma Subaşı<br />Tamer Levent</div>
<div id="col3"><h2>Spor</h2><br />Cüneyt Çakır<br />Abdullah Avcı<br />Mustafa Cengiz<br />Okan Buruk</div>
<div id="col3"><b><center><h2>Medya</h2></center></b><br /><br />
<ul class="socialLinks">
<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
<li><a href="#"><i class="fab fa-facebook"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</footer>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- InstanceEnd --></html>
