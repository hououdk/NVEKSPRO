<?php
ob_start();
?>
<!doctype html>
<html lang="da">
<head>
<style type="text/css">
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<title>Kommunens Opgaver</title>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
	<a href="index.php"><img class="mobil-logo" src="billeder/NemtValg.png" alt="NemtValg-Logo"></a>
	<nav class="desktop">
		<a href="index.php"><img class="logo" src="billeder/NemtValg.png" alt="NemtValg-Logo"></a>
	<div class="menu">
		<a href="index.php">Hjem</a>
		<a href="video.php">Videoer</a>
		<a href="kommunen.php" class="selected">Kommunens Opgaver</a>
		<a href="app.php">App</a>
	</div>
	</nav>
	
	<nav class="mobile">
		<button></button>
	<div>
		<a href="index.php">Hjem</a>
		<a href="video.php">Videoer</a>
		<a href="kommunen.php" class="selected">Kommunens Opgaver</a>
		<a href="app.php">App</a>
	</div>
	</nav>
	<div class="container">
		<div class="content">
			<div class="text">
			<h1>Kommunens opgaver</h1>
			<br>
			<p>Kommunen står for en masse ting der også er relevante for dig. Du kan se eksemplar nedenfor</p>
			<br>
			<h2>Kommunen slår græsset på fodboldbanen</h2>
			<br>
			<p class="underline">Læs mere</p>
			<br>
		<div class="NemtValg-pics">
			<img src="billeder/NemtValg-Grass.jpg" alt="NemtValg">
		</div>
			<br>
			<h2>Kommunen sørger for at der er vand i svømmehallen</h2>
			<br>
			<p class="underline">Læs mere</p>
			<br>
		<div class="NemtValg-pics">
			<img src="billeder/NemtValg-vand.jpg" alt="NemtValg">
		</div>
			<br>
			<h2>Kommunen financiere udendørs arrangementer</h2>
			<br>
			<p class="underline">Læs mere</p>
			<br>
		<div class="NemtValg-pics">
			<img src="billeder/NemtValg-Festival.jpg" alt="NemtValg">
		</div>
			<br>
			<h2>Kommunen bygger studieboliger</h2>
			<br>
			<p class="underline">Læs mere</p>
			<br>
		<div class="NemtValg-pics">
			<img src="billeder/NemtValg-Bygger.jpg" alt="NemtValg">
			<br>
			<br>
		</div>
		</div>
		</div>
		<div class="sidebar">
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
const HOSTNAME = 'houou.dk.mysql';
const MYSQLUSER = 'houou_dk';
const MYSQLPASS = 'YSTNykL9';
const MYSQLDB = 'houou_dk';


$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

$con->set_charset('utf8');


if($con->connect_error) {
	echo 'doesnt work';
	die($con->connect_error);
}
else {
	
}
	
	$mode = $_GET['mode'];
$vote = $_GET['vote'];
	 
 $cookie = "Voted"; 
	 
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
	
	
 if ( $mode=="voted") 
 { 

 	 	if(isset($_COOKIE['Voted']))
 		{

 		} 


 	else
 		{
			$month = time() + 2592000;
 		setcookie(Voted, voted, $month);
		echo "<font color=5E6061><b>Tak for din stemme!</b></font><br><br>";

 		 
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
			

 pie ($con);
 		}

 }

 if(isset($_COOKIE['Voted']))
 		{
 pie ($con);
 }

 
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