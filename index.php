<!DOCTYPE html>
<html>
<head>
	<title>Alerte</title>
	<script type="text/javascript"></script>
</head>
<style type="text/css">
	body{
		margin: 0px; padding: 0px; 
	}
	#accueil{
		position: fixed;display: block;text-align: center;
	}
	#behind{
		position: fixed;top: 0px;bottom: 0px;right: 0px;left: 0px;background-color: rgba(0,0,0,0.7);z-index: 2;display: none;
	}
	#front{
		position: fixed;top: 0px;bottom: 0px;right: 0px;left: 0px;z-index: 3;height: 170px;width: 300px;background-color: #ffffff;border-radius: 3px;text-align: center;margin: auto;display: none;
	}
</style>
<body onload="charger()">
	<div id="accueil">
		<center><h3>Page d'accueil</h3></center><br><br>
		<button id="alerte" onclick="go()">Alerter</button>
	</div>
	<div id="behind"></div>
	<div id="front">
		<h4>Message</h4>
		<hr noshade="noshade" size="2">
		<strong>Vous êtes en mode alerte !</strong><br><br><br>
		<button id="ok" onclick="quit()">Ok</button>
	</div>
	<script type="text/javascript">
		function quit(){
			if (getComputedStyle(document.getElementById("behind")).display != "none" && getComputedStyle(document.getElementById("front")).display != "none") {
				document.getElementById("behind").style.display = "none";
				document.getElementById("front").style.display = "none";
			}else{
				document.getElementById("behind").style.display = "block";
				document.getElementById("front").style.display = "block";
			}
		}
	</script>
	<script type="text/javascript">
		function go(){
			if (getComputedStyle(document.getElementById("accueil")).display != "none") {
				document.getElementById("behind").style.display = "block";
				document.getElementById("front").style.display = "block";
			}else{
				document.getElementById("behind").style.display = "none";
				document.getElementById("front").style.display = "none";
			}			
		}
	</script>
</body>
</html>
