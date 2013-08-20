<?php


 //$file = "encode.jpg"; 
   //                 if($fp = fopen($file,"rb", 0)) 
     //               { 
                    //$gambar = fread($im)); 
       //             fclose($fp); 

                     $gambar = file_get_contents('image.php');

                    $base64 = chunk_split(base64_encode($gambar)); 
                    //Result 
                    $encode = '<img src="data:image/jpeg;base64,' . $base64 .'" >'; 
                    echo $encode; 
//                    }     
?>