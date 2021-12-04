<html>
<body>
    

<?php
include_once 'index.php';


if(isset($_POST['w_submit'])){
    $amount = $_POST['wd'] ;
    $id= $_POST['wid'];


    if($id == 1){
        $user =$firstUser;

    }else if($id == 2){
        $user = $secondUser;
    }
    
    $user->withdraw($amount);
    echo $user ->getbalance();?>
    <br>
    <a href="login.php">Finish Transaction</a>
    <?php
}

if(isset($_POST['d_submit'])){
    $amount = $_POST['dt'] ;
    $id= $_POST['dpt'];


    if($id == 1){
        $user =$firstUser;

    }else if($id == 2){
        $user = $secondUser;
    }
    
    $user->deposit($amount);
    echo "Your current Balance";
    echo "<br>";
    echo $user ->getbalance();?>
    <br>
    <a href="login.php">Finish Transaction</a>
    <?php
}

?>
</body>
</html>