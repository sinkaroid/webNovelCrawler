<?php
$form = '
<form action="index.php" method="POST">
<input type="show" style="width:30%;" name="anti"><br>
<input type="hidden" name="f" value=">">
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