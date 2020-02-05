<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Antonia Taylor - CSS Review</title>
		<!-- Meta infomation -->
		<meta charset="UTF-8"/>
		<meta name="author" content="Antonia Taylor">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="resources/img/favicon.png"/>
		<script src="https://kit.fontawesome.com/df61d79c38.js" crossorigin="anonymous"></script>
		<script src="resources/js/mobile_nav.js"></script>
		<link rel="stylesheet" type="text/css" href="resources/css/global.css">
		<link rel="stylesheet" type="text/css" href="resources/css/pc.css">
		<link rel="stylesheet" type="text/css" href="resources/css/laptop.css">
		<link rel="stylesheet" type="text/css" href="resources/css/tablet-portrait.css">
		<link rel="stylesheet" type="text/css" href="resources/css/tablet-landscape.css">
		<link rel="stylesheet" type="text/css" href="resources/css/mobile-portrait.css">
		<link rel="stylesheet" type="text/css" href="resources/css/mobile-landscape.css">
		<?php 
			if(filter_var($_GET['nightmode'], FILTER_VALIDATE_BOOLEAN);)
			{
				echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/mobile-landscape.css\">";
			}
		?>
	</head>
	<body>
		<div id="background">
			<div id="bg-left"></div>
			<div id="bg-right"></div>
		</div>
		<div id="wrapper">
			<header>
				<h1>Index</h1>
			</header>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li id="menuicon" onclick="toggleMenu()"><i class="fas fa-bars"></i></li>
				</ul>
			</nav>
			<main>
				<div class="img-container left">
					<img src="resources/img/teacup.jpg"/>
				<p>Image from <a href="https://commons.wikimedia.org/wiki/File:A_Flowering_Cactus-_Heliocereus_Speciosus_LACMA_M.2003.57.jpg">Wikimedia Commons</a></p>
				</div>
				<h1>Header 1</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget semper nisl. Sed ac imperdiet ante. Sed tincidunt est velit, vel tincidunt arcu semper at. Nullam vitae rutrum mauris, vitae pulvinar mauris. Cras eleifend nisl eu lorem pretium eleifend. Praesent efficitur eleifend dolor vitae lobortis. Nulla odio mauris, interdum id faucibus a, pellentesque a justo. Cras posuere lorem tellus, ac sagittis libero dapibus nec.</p>
				<h1>Header 2</h1>
				<p>Praesent a metus posuere, laoreet sapien ac, rhoncus metus. Nullam vitae suscipit purus, quis tempor neque. Pellentesque odio ex, accumsan vel lorem non, convallis maximus sem. Vestibulum quis nisi porta, commodo nulla vel, volutpat risus. In quis purus gravida, egestas nibh sed, aliquet dui. Cras et mauris nibh. Maecenas facilisis ultrices libero. Donec tempor turpis ac faucibus dapibus. Maecenas at nisi sed sem sagittis iaculis nec vel nisl. Praesent porttitor auctor ultrices. Nullam egestas orci id porta aliquet. Proin erat odio, sodales vel hendrerit nec, scelerisque non leo. Suspendisse sit amet ligula venenatis, sagittis lacus in, mollis magna.</p>
				<p><b>Sed vestibulum congue elit, quis condimentum libero consequat at.</b> <i>Morbi sed diam id orci vestibulum sagittis.</i> <u>Fusce vel mauris eu ipsum semper dignissim vel sit amet purus.</u> <a href="">Pellentesque</a> sagittis sem odio, ut eleifend leo placerat eget. Praesent volutpat magna a libero ullamcorper, non tempus lorem venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut scelerisque enim a nisl sagittis, sit amet eleifend metus rhoncus. Cras vel velit sapien. Proin consequat posuere urna. Duis ante lectus, porta ut erat sit amet, tristique ultricies massa. Ut quis erat vitae felis blandit sagittis sit amet elementum tellus.</p>
				<div class="img-container right">
					<img src="resources/img/pattern.jpg"/>
				<p>Image from <a href="https://commons.wikimedia.org/wiki/File:(Mokhfia)_Ceramic_Vessel_LACMA_M.2002.1.309_(2_of_2).jpg">Wikimedia Commons</a></p>
				</div>
				<p>Nullam a facilisis arcu. Curabitur orci libero, luctus nec scelerisque quis, varius vitae nisi. Quisque lacinia, nisi vitae finibus commodo, ipsum eros accumsan purus, in congue dui sapien eu ante. Integer rhoncus, elit ut finibus pellentesque, eros nunc imperdiet ante, vel auctor nunc metus ac ipsum. In tempor leo odio, eu eleifend enim dictum eu. Pellentesque auctor, ipsum laoreet viverra faucibus, metus neque placerat nunc, id efficitur ex erat sed nibh. Curabitur id est non massa molestie suscipit. Vestibulum ante leo, dapibus a tortor tempus, venenatis pellentesque quam. Nulla efficitur neque eu erat bibendum suscipit. Mauris feugiat, erat ut dictum blandit, ante enim luctus lacus, ac maximus metus quam quis tellus. Phasellus ac dui ut magna elementum malesuada id ut nisi.</p>
				<p>Sed porta, mi ut auctor tempor, nisl ligula maximus lacus, sit amet vulputate massa urna eget massa. Sed tincidunt, magna eget auctor condimentum, enim tortor iaculis nunc, et interdum nisl nulla in sapien. Integer dui erat, faucibus viverra neque quis, vulputate auctor neque. Cras ultricies magna consequat volutpat congue. Praesent ut tellus rhoncus magna ultricies feugiat quis a mauris. Vivamus varius sodales sapien quis tempor. Donec pharetra, ipsum efficitur tincidunt ullamcorper, velit eros condimentum nunc, laoreet egestas nunc urna vel sapien. Duis est nunc, dictum nec efficitur non, malesuada ut dui. Vestibulum pretium mi nibh, eu fermentum massa consequat ac. Phasellus consectetur, diam in cursus aliquet, enim lorem feugiat tellus, a vulputate quam ipsum scelerisque erat. Aliquam eget rhoncus felis, ac porta nisi. Maecenas id consequat quam, non ullamcorper tellus. Mauris consequat tincidunt mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ac sem eu velit lacinia ullamcorper id ut eros.</p>
				<div class="img-container center">
					<img src="resources/img/flower.jpg"/>
				<p>Image from <a href="https://commons.wikimedia.org/wiki/File:A_Flowering_Cactus-_Heliocereus_Speciosus_LACMA_M.2003.57.jpg">Wikimedia Commons</a><</p>
				</div>
				<p>Nunc rutrum turpis in interdum consequat. Aenean accumsan orci ac ipsum volutpat finibus quis ornare lectus. Phasellus orci quam, volutpat ut tincidunt at, imperdiet non ante. Nunc venenatis ipsum et vehicula eleifend. Suspendisse tempor vulputate placerat. Phasellus posuere dolor condimentum, pulvinar odio et, condimentum lectus. Nulla consequat est in facilisis aliquam. Morbi nibh justo, tempus ut mi sed, posuere tempus augue. Nunc volutpat consectetur purus, eu bibendum ligula maximus in. Ut vitae tincidunt tellus, eget efficitur quam. Mauris cursus, arcu vitae maximus pharetra, justo felis rhoncus tortor, pellentesque interdum nisl lectus eget nisi. Nam non nunc lacinia, vestibulum quam vel, eleifend diam. Donec quis sem ac sapien aliquam tincidunt sit amet vitae justo. Fusce convallis, nisl ut porta molestie, ante dui tempus velit, quis pulvinar orci risus a risus. Fusce et iaculis nisi.</p>
				<p>Nullam interdum lobortis augue, ut rhoncus odio vestibulum nec. Morbi imperdiet quis ligula sit amet fermentum. Integer eu purus sit amet mauris maximus finibus. Donec vehicula mauris non tortor tempor, nec elementum mi aliquam. Donec non nunc aliquet, lobortis diam eu, venenatis eros. Donec volutpat neque id erat congue sagittis. Ut ultrices nibh quis sagittis sollicitudin. Ut vel vestibulum dolor. Ut egestas arcu pretium, pulvinar tortor vitae, laoreet ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Sed id sapien non tortor semper luctus. Quisque euismod eros et lacus interdum consectetur. Praesent felis eros, ornare eget metus nec, ullamcorper aliquet mi.</p>
			</main>
			<footer>
				<p>Website © <?php echo date("Y"); ?> by Antonia Taylor</p>
				<p>View in <a href="?nightmode=false">Day Mode</a> / <a href="?nightmode=true">View in Night Mode</a></p>
			</footer>
		</div>
	</body>
</html>