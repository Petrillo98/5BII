<?php 
 	$page = $_SERVER['PHP_SELF'];
	$sec = "3";
	$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.'<orienteering xmlns="http://www.w3.org/2001/XMLSchema"></orienteering>');
	$xml->addAttribute('version',"1");
	$conn = mysqli_connect("localhost", "root", "", "my_orienteeringpontedera");
	$serv = $xml->addChild('server');
	$nam = $serv->addChild('name',"localhost");
	$ver = $serv->addChild('version', "1");
	$result = mysqli_query($conn,"SELECT id, CONCAT(nome,' ', cognome) as name, indirizzo as address, latitudine as lat, longitudine as lng, posizione as type FROM persone");
	$user = $xml->addChild('markers');
	$resdate=mysqli_query($conn,"SELECT DATE_FORMAT(NOW(), '%Y-%m-%dT%T') as data1");
	$data = mysqli_fetch_array($resdate);
	$date=$data[0];
	$user->addAttribute("generated",$date);
	while($row = mysqli_fetch_assoc($result)){
		$marker = $user->addChild('marker');
		foreach ($row as $key => $value) {
			$marker->addAttribute($key, $value);
		}
	}
	file_put_contents('orienteering.xml',$xml->asXML()); 
	mysqli_free_result($result);
	mysqli_free_result($resdate);
	mysqli_close($conn);
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    </body>
</html>