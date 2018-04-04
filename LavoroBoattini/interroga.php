<?php 
 	$page = $_SERVER['PHP_SELF'];
	$sec = "3";
	$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.'<orienteering xmlns="http://www.w3.org/2001/XMLSchema"></orienteering>');
	$xml->addAttribute('version',"1");
	$conn = mysqli_connect("localhost", "root", "", "my_orienteeringpontedera");
	$serv = $xml->addChild('server');
	$nam = $serv->addChild('name',"localhost");
	$ver = $serv->addChild('version', "1");
    
        
    $query="SELECT progressivo, CONCAT(nome,' ', cognome) as name, latitudine as lat, longitudine as lng, 'C' as type FROM posizione, persona where chiave_persona=id"; 
	$persona = $_REQUEST['persona'];
    if (!empty($persona)) {
        $query=$query." and chiave_persona= $persona";
    }
    
    $gara = $_REQUEST['gara'];
    if (!empty($gara)) {
        $query=$query." and chiave_gara= $gara";
    }
    //DEBUG echo $query;
    
    $result = mysqli_query($conn,$query);
  
	$user = $xml->addChild('markers');
	while($row = mysqli_fetch_assoc($result)){
		$marker = $user->addChild('marker');
		foreach ($row as $key => $value) {
			$marker->addAttribute($key, $value);
		}
	}
	$resdate=mysqli_query($conn,"SELECT DATE_FORMAT(NOW(), '%Y-%m-%dT%T') as data1");
	$data = mysqli_fetch_array($resdate);
	$date=$data[0];
    $user->addAttribute("generated",$date);
	
    echo $xml->asXML(); 
	
	mysqli_free_result($result);
	mysqli_free_result($resdate);
	mysqli_close($conn);
?>