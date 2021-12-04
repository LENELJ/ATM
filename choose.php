<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="choose.css">
    <style>
        .cont a{
            font-weight:bold;
        }
    </style>
   
</head>

<body>
        <?php

        include_once 'index.php';


        if(isset($_POST['submit'])){
            $user=$_POST['user'];

            if(strtoupper($user) === strtoupper($firstUser->name) || strtoupper($user) === strtoupper($secondUser->name)){
                
                if(strtoupper($user) === strtoupper($firstUser->name)){
                    $final =$firstUser;
                    $id=1;
                }else if(strtoupper($user) === strtoupper($secondUser->name)){
                    $final = $secondUser;
                    $id=2;
                }
                // $_SESSION['final']= $final;
        ?>
        <div class="main">
            <div class="cont">
                <h2>WELCOME</h2>
                <p><?php echo $final->name; ?></p>
                <hr>
                <p>Please Choose your transaction</p>
                <br>
               
                <a href="transac.php?id=1&&id_2=<?php echo $id ?>">Withdraw</a>
                <a href="transac.php?id=2&&id_2=<?php echo $id ?>">Deposit</a>
                <a href="transac.php?id=3&&id_2=<?php echo $id ?>">Show Balance</a>
                <a href="transac.php?id=4&&id_2=<?php echo $id ?>">Transfer</a>
                
            </div>
        </div>
        

        <?php
            }else{
                $message="Invalid User";

                echo "<SCRIPT> 
                    alert('$message')
                    window.location.replace('login.php');
                </SCRIPT>";
                
            }
        }

        ?>
        

</body>
</html>