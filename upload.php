<?php
//Napravimo varijablu za dorektorij u kojem cemo sacuvati slike
$saveDir= "../pics/";
//Puno ime fajla koji uploadujemo
$saveFile= $saveDir.basename($_FILES['fileToUpload'] ['name'] );

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $saveFile)){

   echo "<h1> Picture uploaded</h1><br>" . $_FILES['fileToUpload']['name']. " was saved<br>";
         echo "<img src='".$saveFile."'><br><br>";
} else{
   echo "Upload fif not work<a href='./index.php'>GO BACK</a>";
}

echo "<h3> Diagnostic Info:</h3>";
echo "<br>Tmp File Name: ".$_FILES['fileToUpload']['tmp_name']."<br>";
echo "saveFile Variable Valuable:".$saveFile;
?>

<h1><a href= "./index.php">Back to Gallery</a></h1>