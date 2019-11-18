<!DOCTYPE html>
<html>
 <head>
		<?php 
		
			require_once "blocks/head.php" 
		?>

 </head>
 <body>
	<?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
		<div id="leftCol">
			<div id="bigArticle">
			<img src="/img/fild.jpg" alt="кухня" title="кухня">
			</div>
			<div class="clear"><br></div>
			<div class="article">
				<img src="/img/tenor.gif" alt="2 статья" title="2 сатья">
				<h2>Статья</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim.</p>
				<a href="/article.php">
				<div class="more">Далее</div>
				</a>
			</div>
			<div class="article">
	<img src="/img/GIU.gif" alt="3 статья" title="3 статья">
				<h2>Статья</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim.</p>
				<a href="/article2.php">
				<div class="more">Далее</div>
				</a>
		</div>
		
	</div>
	<?php require_once "blocks/rightCol.php" ?>
	</div>
	<?php require_once "blocks/footer.php" ?>
	
 </body>
 </html>