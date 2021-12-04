<?php
include_once 'index.php';

$id=$_GET['id'];
$id2=$_GET['id_2'];

if($id2 == 1){
    $user =$firstUser;

}else if($id2 == 2){
    $user = $secondUser;
}
$userp =$user->showpin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            height:100vh;
            text-align:center;
            background-image: url("back.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .first_form{
            background-color: white;
            height:20vh;
            width:auto;
            padding: 20px 50px;
            border: 2px solid black;
            border-radius: 5px;
        }
        .s_form{
            background-color: rgba(0, 0, 0,0.123);
            padding: 15px 50px;
            margin:10px 0;
            border-radius:10px
        }
    </style>
</head>
<body>

    
    <form action="" method="post" autocomplete="off" class="first_form">
        
        <h3>ENTER PIN</h3>
        <input type="text" name="pin" require>
        <br>
        <br>
        <input type="submit" name="t_submit">
    </form>
</body>
</html>

<?php

switch($id){

    case 1:
        if (isset($_POST['t_submit'])){
            $pin = $_POST['pin'];
            if($pin == $userp){
    ?>
        <form action="functions.php" method="post" class="s_form">
                <input type="hidden" name="wid" value="<?php echo $id2?>">
                <h4>Input amount to withdraw</h4>
                <label>₱<input type="text" name="wd"></label>
                <input type="submit" name="w_submit">
        </form>


    <?php
            }else{
                echo "<script type='text/javascript'>alert('Incorrect PIN');</script>";
            }
        }
        
    break;

    case 2:
        if (isset($_POST['t_submit'])){
            $pin = $_POST['pin'];
            if($pin == $userp){
    ?>
        <form action="functions.php" method="post" class="s_form">
                <input type="hidden" name="dpt" value="<?php echo $id2?>">
                <h4>Input amount to deposit</h4>
                <label>₱<input type="text" name="dt"></label>
                <input type="submit" name="d_submit">
        </form>


    <?php
            }else{
                echo "<script type='text/javascript'>alert('Incorrect PIN');</script>";
            }
        }
    break;

    case 3:
        if (isset($_POST['t_submit'])){
            $pin = $_POST['pin'];
            if($pin == $userp){
    ?>
        <div class="s_form">
            <h4>Your Balance:</h4>
            <?php echo $user->getBalance(); ?>
            <br>
            
            <br>
            <a href="login.php">Finish Transaction</a>
        </div>            
    <?php
            }else{
                echo "<script type='text/javascript'>alert('Incorrect PIN');</script>";
            }
        }
    break;

    case 4:
        if (isset($_POST['t_submit'])){
            $pin = $_POST['pin'];
            if($pin == $userp){
    ?>
        <form action="functions.php" method="post"class="s_form">
                <input type="hidden" name="trns" value="<?php echo $id2?>">
                <h4>Input amount to transfer</h4>
                <label>₱<input type="text" name="tf"></label>
                
                <input type="submit" name="t_submit">
        </form>
        


    <?php
            }else{
                echo "<script type='text/javascript'>alert('Incorrect PIN');</script>";
            }
        }
    break;

    

}

?>

