<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="application/css/style.css" rel="stylesheet" type="text/css"/> 
</head>
<body>
    <header>
    <div id="header" class="container">
	<div id="logo">
		<h1><a href="?url=main">Стройдвор</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="?url=main" title="">Главная</a></li>
			<li><a href="?url=service" title="">Услуги</a></li>
            <li><a href="?url=portfolio" title="">О нас</a></li>
		</ul>
    </div>
</div>
    </header>
    <?php include $content_view; ?>
    <footer>
    <div id="copyright" class="container">
	    <p>&copy; Antonio. All rights reserved. 
    </div>
    </footer>
</body> 
</html>