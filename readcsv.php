<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$table = 'test_distritos';
$filename = 'documents/zona.csv';//'documents/STATE.csv';
$file = fopen($filename, 'r');

/**
while ($data = fgetcsv($file, 0, ",")) {
        echo "\n=> ".$data[0].' - '.$data[1];//exit;
        $condRow = false;
 
}
**/

#Zone
$sqlZone = "INSERT INTO `ps_zone`(`name`,`active`) VALUES";
$azone = array();
while ($data = fgetcsv($file, 0, ";")) {
	$azone[$data[1]] = $data[1];
	//$sqlZone.="('".$data[2]."', 1),<br>";
	/**
	echo $data[0].' ==> '.$data[1].'<br>';
	
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	**/
		//exit;
    //echo "insert into test_distritos(id,nombre) values('".$data[0]."','".utf8_encode($data[1])."');";
        //echo "\n<br>=> ".$data[0].' - '.utf8_encode($data[1]);//exit;
        $condRow = false;
 
}

foreach($azone as $k => $v){
	$sqlZone.="('".htmlentities($v)."', 1),<br>";
}

echo $sqlZone;