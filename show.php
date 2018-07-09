

<?php

	session_start();

	if( isset($_POST['save'])  )
{	
	$file['id']= $_SESSION['id'];
	 foreach ($_SESSION['stage1'] as $key => $value) {
	 $file[$key] = $value;
	 }
	 foreach ($_SESSION['stage2'] as $key => $value) {
	 $file[$key] = $value;
	 }
	 foreach ($_POST as $key => $value) {
	 $file[$key] = $value;
	 $_SESSION['stage3'][$key]= $value;
	 }

	if(file_put_contents('details.txt', trim(print_r($file, true)).PHP_EOL, FILE_APPEND))
	{
		unset($_SESSION['id']);
		unset($_SESSION['stage1']);
		unset($_SESSION['stage2']);
		unset($_SESSION['stage3']);
		
	}
}
$myfile = fopen("details.txt", "r");
echo  nl2br(fread($myfile,filesize("details.txt")));
fclose($myfile);
?>

