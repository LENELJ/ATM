<?php

// Create class Account
class Accounts{
    public $name;
    public $balance;
    protected $accNum;

    // create constructor
    public function __construct($x,$y,$z){
        $this->name=$x;
        $this->balance=$y;
        $this->accNum=$z;
    }

    // create deposit function
    public function deposit($amount) {
        $this->balance += $amount;
    }

    // create withdraw function
    public function withdraw($amount) {
        if($this->balance > 0){
            if($amount <= $this->balance){
                $this->balance -= $amount;
                echo "You have Succesfully Withdrawn";
                echo "<br>";
                echo "You current balance is :";
                echo "<br>";
                
            }else{
                echo "Your Money is limited.";
                echo "<br>";
                echo "You current balance is :";
                echo "<br>";
            }  
        }else{
            echo "You have 0 Balance in your account";
            echo "<br>";
            echo "You current balance is :";
            echo "<br>";
        }

    }

    // create getBalance function
    public function getBalance() {
        return $this->balance;
    }
    public function showpin(){
        return $this->accNum;
    }
}


$firstUser=new Accounts("NEL",2000000,678901);
$secondUser= new Accounts("JON",1000,123456);


?>
 

