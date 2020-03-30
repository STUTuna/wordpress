<?php

$sql = "1111";
$sql = "2222";

if(isset($_POST['action'])){
    switch($_POST['action']){
        case 'signup':

            if(isset($_POST['user_email']) && isset($_POST['user_password'])){
                $user_email     =$_POST['user_email'];
                $user_password  =$_POST['user_password'];
                $sql = "INSERT INTO `lunch`.`user`
                (
                    `user_email`,
                    `user_password`,
                    `user_name`,
                    )
                    VALUES(
                    :user_email ,
                    :user_password ,
                    :user_name
                    ); ";
                
            }

        break;

        case '':
        break;
    }
}