<?php
include "../inc/db_connect.php";
//include "../inc/cookie.php";
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
    <title>page admin</title>
    <style>
    *{ 
     margin:0;
     padding: 0;
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background:white;
   
}

li {
   
    margin-top:30PX;
    display: inline-block ;
    width: 270PX;
    height: 40px;
    padding: 10px;
    background:#5CAFE7 ;
    font-size: 15px;
    border-radius: 2px;
    text-align:center;
    text-transform: capitalize;
    cursor: pointer;}
a{
   
    justify-content: center;
    align-items: center;
    background:#5CAFE7 ;
    text-decoration:none;
    color:white;
    font-weight:bold;
    text-align:center;
    }


.container{
    margin:auto;
    margin-left:5%;
    margin-right:5%;
}
.table {
    
margin:auto;
margin-top:20PX;
background:white;
font-size:14px;
text-align:center;
header:1px solid #eee;

}
h1{
margin-top:50PX;
font-size:xx-large;
}
th,td{
border:1px solid #bcb8b1 ;
/*border-top:1px solid #bcb8b1 ;
border-bottom:1px solid #bcb8b1 ;*/
    background:white;
padding:10px;
font-size:14px;
text-align:center;
header:1px solid #eee;
}

body{
    margin:auto;
margin-top:20PX;

}


</style>
</head>
<body>
    <div class="container">
    <nav class="admin_menu">
    <ul class="itms" >
            <li><a href="commandes.php" target="self">liste commandes</a></li>
            <li><a href="demandes_vendeurs.php" target="self">les demande devenir vendeur</a></li>
            <li><a href="list_utilisateurs.php"  target="self">liste utilisateurs</a></li>
            <li><a href="produits_admin.php" target="self">ajouter produit</a></li>
</ul>
     

<?php
      $select_order = mysqli_query($con, "SELECT * FROM `devenir_vendeur`") or die('query failed');
      if(mysqli_num_rows($select_order) > 0){
         while($fetch_order = mysqli_fetch_assoc($select_order)){
      ?>
      <h1 class="title">Les Demandes vendeurs</h1>
      <table class="table"   width="90%" high="600 px"  cellspacing="0" >
      <tr>
        <th>Id demande </th>
        <th>Nom marque</th>
        <th>Adress vendeur</th>
        <th>description</th>
        <th>Telephone vendeur</th>
        <th>Date demande</th>
      </tr>
      <tr>
        <td><?php echo $fetch_order['id_demande']; ?></td>
        <td><?php echo $fetch_order['nom_marque']; ?></td>
        <td><?php echo $fetch_order['adress_vendeur']; ?></td>
        <td><?php echo $fetch_order['description']; ?></td>
        <td><?php echo $fetch_order['tel_vendeur']; ?></td>
        <td><?php echo $fetch_order['date_demande']; ?></td>
      </tr>
    </table> 
      <?php
         }
      }else{
         echo '<p class="empty"><br>il y a aucune demande !</p>';
      }
      ?>
</SEction>
</body>
</html>