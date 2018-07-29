
<?php
/*ob_start();*/


if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'user' and $password == 'abcd'){
        if(isset($_POST['remember'])) {
            setcookie('username',$username, time()+60*60*24*7);
            setcookie('password',$password, time()+60*60*24*7);
        }
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: home.php");
    } else{
        echo "username or password is invalid. <br/> click here to <a href='login.php'> try again </a>";
    }
}   


?>