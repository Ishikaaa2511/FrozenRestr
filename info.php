<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'frozen';

$con = mysqli_connect ($server,$username,$password,$db);


if($con) {
?>

<script>
alert('Connection Succesful');
</script>

<?php
}else{
die("no connection".mysqli_connect_error());
}

?>

   
<?php
 
if(isset($_POST['submit'])){


$Name= $_POST['Name'] ;
$Email= $_POST['Email'];
$Contact =  $_POST['Contact'];
$Message =  $_POST['Message'];

$insertquery ="insert into info (Name,Email,Contact,Message) 
values ('$Name','$Email','$Contact','$Message')";



mysqli_query($con,$insertquery);
}

header('location:index.html')



?>