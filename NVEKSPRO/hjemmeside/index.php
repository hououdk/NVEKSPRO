<?php
ob_start();
?>
<!doctype html>
<html lang="da">
<head>
<style type="text/css">
	/* styrer vores % bar efter man har stemt på sidebaren */
   ol { width: 95%; list-style: none; margin: 0; padding: 0; }
   .one strong { display: block; border-top: 7px solid #99CCCC; }
  </style>
<meta charset="utf-8">
<meta name="Keywords" content="Nemtvalg, kommunalvalg, kommune, kommunevalg, stemme, KV17, politik"> <!--SEO. Keywords folk søger efter på google-->
<meta name="Description" content="Det er et nemtvalg til kommunalvalg"> <!--SEO-->
<meta name="author" content="NemtValg"> <!--SEO-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link href="stylesheet.css" rel="stylesheet">
<link href="tablet.css" rel="stylesheet">
<link href="laptop.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> <!-- https://maxcdn.bootstrapcdn.com styrer vores socialmedia ikoner i footeren -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js
 Jquery som bruges til at få burger og alt andet jquery på siden til at virke -->
<script src="jquery.fancybox.min.js"></script> <!--et jquery plugin fra http://fancyapps.com/fancybox/3/ som styrer vores popup video knapper -->
<link href="jquery.fancybox.min.css" rel="stylesheet"> <!--et jquery plugin fra http://fancyapps.com/fancybox/3/ som styrer vores popup video knapper -->
<title>NemtValg Hjem</title>
</head>

<body>
<?php include_once("analyticstracking.php") ?> <!-- dette er vores Google Analytics snippet-->
	<a href="index.php"><img class="mobil-logo" src="billeder/NemtValg.png" alt="NemtValg-Logo"></a> <!--mobil format-->
	<nav class="desktop">
		<a href="index.php"><img class="logo" src="billeder/NemtValg.png" alt="NemtValg-Logo"></a>
	<div class="menu">
		<a href="index.php" class="selected">Hjem</a>
		<a href="video.php">Videoer</a>
		<a href="kommunen.php">Kommunens Opgaver</a>
		<a href="app.php">App</a>
	</div>
	</nav>
	
	<nav class="mobile">
		<button></button>
	<div>
		<a href="index.php" class="selected">Hjem</a> <!-- desktop/tablet format-->
		<a href="video.php">Videoer</a>
		<a href="kommunen.php">Kommunens Opgaver</a>
		<a href="app.php">App</a>
	</div>
	</nav>
	<div class="container">
		<div class="content">
			<div class="text">
			<h1>Hvad er #NemtValg kampagnen?</h1>
			<br>
			<h2>Den 21.November er der kommunalvalg</h2>
			<br>
		<div class="NemtValg-pics">
			<img src="billeder/NemtValg-kryds.jpg" alt="NemtValg"> <!--SEO på vores alt tag-->
		</div>
			<br>
			<p>Men alt for få unge vælger at stemme.
			Nogle fordi de mener, at deres stemme ikke tæller,
			andre fordi de har travlt </p>
			<br>
		<div class="NemtValg-pics">
			<img src="billeder/travlt-stor-lang.jpg" alt="NemtValg">
		</div>
			<br>
			<p>I kampagnen NemtValg er vores mål, at få
			flere unge imellem 18-25 til at stemme til
			kommunalvalget 2017</p>
			<br>
		<div class="NemtValg-pics">
			<img src="billeder/NemtValg-Stemnu.jpg" alt="NemtValg">
		</div>
			<br>
			<p>Vi håber at i vil være med, så vi kan hjælpes
			ad og få flere af vores fælles interesser
			igennem til kommunalvalget.</p>
			<br>
		<div class="NemtValg-pics">
			<img src="billeder/tale-stor-lang.jpg" alt="NemtValg">
			<br>
			<br>
		</div>
		</div>
		</div>
		<div class="sidebar"> <!-- dette er vores blå sidebar, her kan man stemme og gå til app -->
			<div class="app-box">
				<h3>Ved du heller ikke hvem du skal stemme på?
				<br>Test dig selv i vores app</h3>
				<br>
				<div class="NemtValg-knap">
				<a href="app.php" class="appbutton2"><button class="appbutton">Her</button></a></div>
			</div>
			<div class="stem">
				<h3>Har du tænkt dig at stemme til kommunalvalget 2017?</h3>
				<br>
 <?php
//baseret på https://www.thoughtco.com/simple-php-and-mysql-poll-2693854
const HOSTNAME = 'houou.dk.mysql'; // servernavn
const MYSQLUSER = 'houou_dk'; // superbruger (remote har man særskilte database brugere)
const MYSQLPASS = 'YSTNykL9'; // bruger password
const MYSQLDB = 'houou_dk'; // min database

// 2. oprette forbindelsen via mysqli

$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

// definere et character-set (utf 8) for forbindelsen
$con->set_charset('utf8');

// 3. Forbindelses tjek

// hvis forbindelsen ikke lykkedes
if($con->connect_error) {
	echo 'doesnt work';
	die($con->connect_error);
}
else {
	
}
	
	$mode = $_GET['mode'];
$vote = $_GET['vote'];
	
//Navnet på vores cookie 
 $cookie = "Voted"; 
	
	//En funktion der displayer vores resultater
 function pie ($connection) 
 {
	 $sql = "SELECT first, sec, third FROM votes";
$stmt = $connection->prepare($sql);
	 $stmt->bind_result($first, $sec, $third);
		 $stmt->execute();
	 while($stmt->fetch()) {
		 $total = $first + $sec + $third; 
 $per1 = round ($first / $total * 100);
 $per2 = round ($sec / $total * 100); 
 $per3 = round ($third / $total * 100); 
$one = round (360 * $first / $total); 
$two = round (360 * $sec / $total); 
$three = round (360 * $third / $total);  	
		 ?>
				<ol class="one">
					<li><?php echo "<font color=F89920><b>Ja</font><font color=5E6061> = $first votes, $per1%</font><br></b>"?>
					<strong style="width: <?=$per1;?>%"></strong></li>
					<li><?php echo "<font color=F89920><b>Nej</font><font color=5E6061> = $sec votes, $per2%</font><br></b>"?>
					<strong style="width: <?=$per2;?>%"></strong></li>
					<li><?php echo "<font color=F89920><b>Måske</font><font color=5E6061> = $third votes, $per3%</font></b><br>"?>
					<strong style="width: <?=$per3;?>%"></strong></li>
				</ol>
				
<?php
	 }
 } 
	
	//Den funktion kører når der er blevet stemt på siden
 if ( $mode=="voted") 
 { 
 //Soerger for at der ikke allerede er blevet stemt
 	 	if(isset($_COOKIE['Voted']))
 		{

 		} 

 //sets a cookie
 	else
 		{
			$month = time() + 2592000;
 		setcookie(Voted, voted, $month);
		echo "<font color=5E6061><b>Tak for din stemme!</b></font><br><br>";

 		 //Sender deres stemme videre til databasen
 switch ($vote)
 {
		 
 case 1:
 mysqli_query ($con, "UPDATE votes SET first = first+1");
 break;
 case 2:
 mysqli_query ($con, "UPDATE votes SET sec = sec+1");
 break;
 case 3:
 mysqli_query ($con, "UPDATE votes SET third = third+1");
 }
			
 //Displayer poll resultaterne
 pie ($con);
 		}

 }
	//Viser resultater
 if(isset($_COOKIE['Voted']))
 		{
 pie ($con);
 }

 //Viser stem boksen
 else 
 {
 if(!$mode=='voted')
 { 
	?>

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 
				<label><input type="radio" name="vote" value="1">Ja</label><br><br>
  			<label><input type="radio" name="vote" value="2">Nej</label><br><br>
 			<label><input type="radio" name="vote" value="3">Måske</label><br><br>
 			 <input type=hidden name=mode value=voted> 
 			<input type=submit value="Stem">
			</form>
			<?php 
 }
 }
 ?>
			<br>
			</div>
		</div>
	</div>
	<footer>
	&copy; NemtValg - Disclaimer: This is a prototype for a exam project
	<p class="socialmedia">
		<i class="fa fa-facebook"></i>
		<i class="fa fa-instagram"></i>
		<i class="fa fa-youtube"></i>
	</p>
</footer>
	<script src="burger.js"></script>
</body>
</html>