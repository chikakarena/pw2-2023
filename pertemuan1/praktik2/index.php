<?php

    /*  
        Variable sistem
        variable built in php (variable yang sudah ada di php)
    */
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br />";
    echo "<br />";


    /*  
        Variable user
        variable yang dibuat user
    */

    $name = "gd.chixx";
    $age = 20;
    $weight = 50;
  
    $name = "gd.chix"; 

    // Menampilkan variable
    echo 'Nama saya '.$name.' umur saya '.$age.' berat saya '.$weight;
    echo "<br />";
    echo "<br />";  

    
    /*
        Variable konstan
        variable yang tidak bisa diubah nilainya
        1. Menggunakan define | define('fruit', "Apel");
        2. Menggunakan const  | const fruit = "Apel";
    */

    define ("SITE_NAME", "Elena");
    const BASE_URL = "https://elena.nurulfikri.ac.id/";

	// Variable konstan tidak bisa dirubah nilainya
	// define ("SITE_NAME", "AIS"); // ---> error

    // Menampilkan variable konstanta
    echo "Site name: " . SITE_NAME . "<br/>";
    echo "URL: " . BASE_URL . "<br/>";
?>