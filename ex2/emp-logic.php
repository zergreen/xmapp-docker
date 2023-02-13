<center>
<h1 style="color:red">ยืนยันข้อมูลพนักงาน</h1>
<?php

    $name = $_POST['emp_name'];
    $surname = $_POST['emp_surname'];
    $sex = $_POST['emp_sex'];
    $date = $_POST['emp_birthdate'];
    $address = $_POST['emp_address'];
    $tel = $_POST['emp_tel'];
    $line = $_POST['emp_line'];
    $facebook = $_POST['emp_facebook'];
    $email = $_POST['emp_email'];

    // setcookie("name",$name);
    // setcookie("surname",$surname);
    // setcookie("sex",$sex);
    // setcookie("date",$date);
    // setcookie("address",$address);
    // setcookie("tel",$tel);
    // setcookie("line",$line);
    // setcookie("facebook",$facebook);
    // setcookie("email",$email);

    echo "NAME: $name <br> Surname: $surname <br> Sex: $sex <br> Birthdate: $date <br> Address: 
          $address <br> Tel: $tel <br> Line: $line <br> Facebook: $facebook <br> Email: $email <br>";

    // use cookie
    $member_id = $_COOKIE['member_id'];
    $type_class = $_COOKIE['type_class'];
    $weight_buy = $_COOKIE['weight_buy'];
    $cherry_grade = $_COOKIE['cherry_grade'];
    $weight_total = $_COOKIE['weight_total'];
    $type_goodmoney = $_COOKIE['type_goodmoney'];
    $type_poormoney = $_COOKIE['type_poormoney'];
    $common_fee = $_COOKIE['common_fee'];
    $member_saving = $_COOKIE['member_saving'];
    $total_net = $_COOKIE['total_net'];
    $cherry_flow = $_COOKIE['cherry_flow'];

    // echo "MEMBER_ID : $member_id <br>";

    
    include "../conn/conn.php";

    $sql = "SELECT * FROM admin";
    // $conn->query($sql);

    // while($row = $result->fetch_assoc()){
    //     echo "ID: $row[ID]";
    // }






    $conn->close();    
    
?>
</center>