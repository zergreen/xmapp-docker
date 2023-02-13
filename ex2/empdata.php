<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="container">
        ข้อมูลพนักงานทำรายการรับซื้อเชอรี่สามโคก
        <form action="emp-logic.php" method="post">
        <div id=form1>
        <table width='100%'>
            <tr>
                <td>ชื่อ</td>
                <td><input type="text" name="emp_name" value="พงศกร"></td>
                <td>นามสกุล</td>
                <td><input type="text" name="emp_surname" value="กาเหว่าลาย"></td>
            </tr>
            <tr>
                <td>เพศ</td>
                <td><input type="text" name="emp_sex" value="ชาย"></td>
                <td>วันเดือนปีเกิด</td>
                <td><input type="datetime-local" name="emp_birthdate" value="2002-01-14T08:00"></td>
            </tr>
            <tr>
                <td>ที่อยู่</td>
                <td><input type="text" name="emp_address" value="55/2 ต.ลานตากฟ้า อ.นครชัยศรี จ.นครปฐม 73120"></td>
            </tr>
            <tr><td>เบอร์โทร</td><td><input type="text" name="emp_tel" value="089-795-6072"></td></tr>
            <tr><td>Line</td><td><input type="text" name="emp_line" value="grenkukuku"></td></tr>
            <tr><td>Facebook</td><td><input type="text" name="emp_facebook" value="พงศกร กาเหว่าลาย"></td></tr>
            <tr><td>Email</td><td><input type="text" name="emp_email" value="63050159@kmitl.ac.th"></td></tr>

        </table>
        </div>

        <center>
            <input type="submit" value="บันทึก"> <span></span>
            <input type="button" value="ยกเลิก" onclick="history.back()"> 
            <!-- <input type="reset" value="ล้าง">  -->
        </center>
        </form>
    </div>
</html>