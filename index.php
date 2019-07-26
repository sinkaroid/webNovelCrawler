<!DOCTYPE html>
<center>


<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="inc/style.css" type="text/css" />
</head>
<body>
    <div>
    <div id="wrap">
    <div id="judul"><a href="convert.php">?conv</a></div>
   
<?php


$form = '
<form action="index.php" method="POST">
<input type="transparent" name="anti"><br>
<input type="hidden" name="f">
</center>
</form>';

print $form;

   
   if(isset($_POST['f'])){
       $anti = $_POST['anti'];
       $curl = curl_init($anti); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
   $page = curl_exec($curl); 
   if(curl_errno($curl)) 
   {
       echo 'error: ' . curl_error($curl);
       exit;
   }
   curl_close($curl);
   
   
   $regex = '/<div class="entry-content">(.*?)<h3 class="jp-relatedposts-headline">/s';
   if ( preg_match($regex, $page, $hasil) )
       
       echo $hasil[0]; 
   else 
       print "gagal"; 
   }
    ?>


  
    </div>
    </div>
</body>
</html>
