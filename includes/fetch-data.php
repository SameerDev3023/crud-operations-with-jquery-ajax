<?php
include 'connection.php';

$sql = "SELECT * FROM `contact` ";
$query = mysqli_query($mysqli,$sql);
 if(mysqli_num_rows($query)>0){
    echo'<table border="1px" cellspacing="0px" cellpadding="10px">
    <tr>
    <thead>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email Address</th>
    <th>Phone Number</th>
    <th>Company Name</th>
    <th>Country Name</th>
    </thead>
    </tr>
    ';

  while($data = mysqli_fetch_assoc($query)){
            echo'<tr>
            <tbody>
            <td>"'.$data['id'].'"</td>
            <td>"'.$data['first-name'].'"</td>
            <td>"'.$data['last-name'].'"</td>
            <td>"'.$data['email-address'].'"</td>
            <td>"'.$data['phone-number'].'"</td>
            <td>"'.$data['company-name'].'"</td>
            <td>"'.$data['country-name'].'"</td>
           
            </tbody>
            </tr>';
    }
    echo'</table>';
}else{
echo'data is here';
 }

?>