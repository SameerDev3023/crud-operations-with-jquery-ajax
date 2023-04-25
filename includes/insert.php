<?php

include 'connection.php';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number =$_POST['phone_number'];
    $company_name = $_POST['commpany_name'];
    $country_name = $_POST['country_name'];
    $query = "INSERT INTO `contact`( `first-name`, `last-name`, `email-address`, `phone-number`, `company-name`, `country-name`) VALUES (
        '$first_name',
        '$last_name',
        '$email',
        '$phone_number',
        '$company_name',
        '$country_name'
       ) ";
       $result = mysqli_query($mysqli,$query);
        if($result){
            echo'data inserted';
        }else{          
       echo 'Error inserting data: ' . mysqli_error($mysqli);
    }

?>