<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$table = 'test_distritos';
$filename = 'documents/data15.csv';//'documents/STATE.csv';
$file = fopen($filename, 'r');

/**
while ($data = fgetcsv($file, 0, ",")) {
        echo "\n=> ".$data[0].' - '.$data[1];//exit;
        $condRow = false;
 
}
**/
$cont = 989;
$pos = 0;
while ($data = fgetcsv($file, 0, ",")) {
	
	
	if($pos > 1){
    
   

    $time = explode('UTC', $data[1]);// strtotime($data[0].' '.$data[1]); //strtotime($data[0].''.$data[1]);

    //var_dump($time );exit;
    //echo '<br>=>'.trim($time[0]);
    $time_in_24_hour_format  = date("H:i", strtotime(trim($time[0])));
    /**
    echo '<br>'.$time_in_24_hour_format;

    $dateInLocal = date("Y-m-d H:i:s", $time);
    echo "<br>==>".$dateInLocal ;

	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	exit;
	**/
		
		echo "<br>insert into registros(id,nombre,email,telefono,ip,fecha_submit,fuente) 
	   			values(".$cont.",'".($data[5])."','".$data[6]."','".$data[7]."','".$data[2]."','".$data[0].' '.$time_in_24_hour_format."', '".$data[8]."');";
	        //echo "\n<br>=> ".$data[0].' - '.utf8_encode($data[1]);//exit;
	    $condRow = false;
	    $cont++;
	}
	
	 $pos++;
 
}