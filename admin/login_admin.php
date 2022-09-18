<?php
include "../inc/db_connect.php";
//include "../inc/cookie.php";
//post value
$a_email=@$_POST['a_email'];
$a_pass=@$_POST['a_pass'];
if(isset($_POST['log_admin'])){
    if(empty($a_email)or empty($a_pass)){
        echo'<script>alert("merci de remplir les champs");</script>';
    }
    else{
        //get email and pass
        $get_admin="select * from admin where email_admin='$a_email' and pass_admin='$a_pass'";
        $run_admin=mysqli_query($con,$get_admin);
        // admin isset
        if(mysqli_num_rows($run_admin)==1){
            $row_admin=mysqli_fetch_array($run_admin);
        //admi value isset
        $aemail=$row_admin['a_email'];
        //cookie here
        setcookie("aemail",$aemail,time()+60*60*24);
        setcookie("adminlogin",1,time()+60*60*24);
        echo'<script> alert("bienvenu admin"); </script>';
        header("Location: index_admin.php"); 
        }
        else{
        echo'<script> alert("les informations sont incorrecte"); </script>';
        }
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon package/apple-touch-icon.png">
       <link rel="icon" type="image/png" sizes="32x32"href="../favicon package/favicon-32x32.png">
       <link rel="icon" type="image/png" sizes="16x16" href="../favicon package/favicon-16x16.png">
       <link rel="manifest" href="../favicon package/site.webmanifest">
       <link rel="mask-icon" href="../favicon package/safari-pinned-tab.svg" color="#5bbad5">
       <meta name="msapplication-TileColor" content="#da532c">
       <meta name="theme-color" content="#ffffff">
       <title>connexion admin</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Quintessential', cursive;
}
section{
    margin: auto;
    margin-top: 140PX;
    width: 100%;
    display:flex ;
    justify-content: center;
    align-items: center;
}
section input[type="text"],
section input[type="password"],
section input[type="email"],
section textarea{
    display: block;
    width: 300px;
    height: 40px;
    padding: 20px;
    background:white ;
    outline: none;
    font-size: 14px;
    border-radius: 2px;
    margin-top: 10PX;}

section .submit-btn{
    font-weight: bold;  
    width: 300px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    background:#5CAFE7;
    color: white;
    border-radius: 2px;
    text-transform: capitalize;
    border: none;
    cursor: pointer;
    display: block;
    margin-top: 10PX;
}
</style>
</head>
<body>
<SEction>
    <div class="container">
        <form action="" method="post">
            <input type="text"  name="a_email" id="" placeholder="email"  >
            <input type="password"  name="a_pass" id="" placeholder="mot de passe" >
            <button  type="submit"   name="log_admin" class="submit-btn">Se connecter</button>
        </form>
    </div>
</SEction>
</body>
</html>