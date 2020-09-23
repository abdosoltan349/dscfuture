<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	
$dsc = $_GET['dsc'];
$title = $_GET['title'];
$name = $_GET['name'];
$specialization = $_GET['spec'];
$date = $_GET['date'];
$time = $_GET['time'];
$data = $_GET['image'];
echo $time;

	header('content-type:image/jpeg');
	$fontbold="fonts/bold.ttf";
	$fontregular="fonts/regular.ttf";
	
	$image=imagecreatefromjpeg("temp1.jpg");
	$speaker = imagecreatefrompng($data);
	imagecopy($image, $speaker, 226, 690, 0, 0, 934, 930);
	$titlecolor=imagecolorallocate($image,245,180,0);
	$itdcolor=imagecolorallocate($image,67, 133, 245);
	$sdcolor=imagecolorallocate($image,103, 109, 116);
	//$titleX = strlen($title) * 17;
	//$titleS = strlen($title)+20;
	//Start Title
	if(strlen($title) == 2){
		$titleX = 1500;
		$titleS = 150;
	}
	if(strlen($title) > 22){
		$titleX = 1500 - (strlen($title)*30);
		$titleS = 150 - (strlen($title)+30); ;
	}
	if(strlen($title) < 22){
		$titleX = 1500 - (strlen($title)*40);
		$titleS = 150 - (strlen($title)+20); ;
	}
	imagettftext($image,$titleS,0,$titleX,550,$titlecolor,$fontbold,$title);
	//End Title
	
	//Start Speaker Name
	$nameX= 2070-(strlen($name)*35);
	$nameS= 110 - (strlen($name));
	imagettftext($image,$nameS,0,$nameX,1101,$sdcolor,$fontbold,$name);
	//End Speaker Name
	
	//Start specialization
	$specialX= 2060-(strlen($specialization)*20);
	$specialS= 80 - (strlen($specialization));
	imagettftext($image,$specialS,0,$specialX,1250,$itdcolor,$fontregular,$specialization);
	//End specialization
	
	//Start Date and Time
	imagettftext($image,35,0,1870,1425,$itdcolor,$fontbold,$date);
	imagettftext($image,35,0,1870,1480,$sdcolor,$fontbold,$time);
	//End Date and Time
	
	//Start DSC
	$dscS= 57;
	if(strlen($dsc) > 18){
		$dscS = 57 - (strlen($dsc)-10);
	}
	imagettftext($image,$dscS,0,325,280,$sdcolor,$fontregular,$dsc);
	//End DSC
	$file=time();
	//imagepng($image);

   header ("Content-Disposition: attachment; filename=".$file.".jpg");
	
  readfile(imagejpeg($image));
	//echo $image;
	//imagejpeg($image);
	//echo $img["path"];
	imagedestroy($image);
	imagedestroy($speaker);
	/*
	header("Location: index.php");*/
}
else{
	echo "return to home page";
}
?>
