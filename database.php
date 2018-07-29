<?php

    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $country = $_POST['country'];
    $ins = $_POST['ins'];
    $fos = $_POST['fos'];

    $con = mysqli_connect('localhost','root','');
    
	    mysqli_select_db($con,'tutorial');
	    $sql = "INSERT INTO registration(User_id,Password,Country,Institution,Field_of_study) VALUES('$name','$pass','$country','$ins','$fos')";
	    mysqli_query($con,$sql);
        /*while($row = mysqli_fetch_array($result)){
        	echo $row['name'].' '.$row['age'];
        	echo '<br/>';
 
        }
        if($test) echo 'success';
        else echo 'not success';*/
        header('Location:home2.php');
?> 