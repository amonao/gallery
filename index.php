
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="picStyle.css">
   <title>Document</title>
</head>
<body>

<div class="galleryDiv">

<?php
$filelist = glob("../pics/*");

foreach($filelist as $filename){
	echo "<a href='galleryScript.php?picture=".$filename."'><img class='galleryPic' src='".$filename."'></a>";
}
?>

</div>
</body>
</html>
</body>
</html>