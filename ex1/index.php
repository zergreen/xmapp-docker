<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1: ATM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1>INPUT</h1>
        <form action="index.php" method="post">
            <h1>$ 23,000 </h1>
            <!-- Money<input type="text" name="money"> <br> -->
            WithDraw <input type="number" name="money">
            <input type="submit" value="ถอน">
        </form>

    </div>


    <div>
        <h1>LOGIC</h1><br>
        <?php
        // set value 
        $money = 0;

        // $money = $_POST["money"];
        if(isset($_POST["money"])){
            $money = $_POST["money"];
        }

        // echo "
        //     <form action='.' method='post'>
        //         <input type='number' placeholder='เซ็ทยอดเงินในบัญชี' name='set_money'>
        //         <input type='submit' value='ตั้งค่า'>
        //     </form>
        // ";

        echo "MONEY: $money <br>";

        $b1000 = 0;
        $b500 = 0;
        $b100 = 0;

        $bank = array("b1000" => 0, "b500" => 0, "b100" => 0);

        // echo $bank['b1000'];
        
        $total = 23000;
        // if(isset($total)){
        //     $total = $_POST['set_money'];
        // }
        
        // $amount = $total - $money;
        $amount = $total;
        $paid;
        $change = $money;

        echo "AMOUNT: $amount <br>";

        # Validate value

        if($change >= 100 && $change % 100 == 0){

        $amount = $total - $money;

            if ($change >= 1000) {
                $b1000 = floor($change / 1000);
                echo "<br>1000$ = $b1000<br>";
                $change %= 1000;
            }
            if ($change >= 500) {
                $b500 = floor($change / 500);
                echo "<br>500$ = $b500<br>";
                $change %= 500;
            }
            if ($change >= 100) {
                $b100 = floor($change / 100);
                echo "<br>100$ = $b100<br>";
                $change %= 100;
            }
        } else {
            $err = "<b><font color=red>CAUTION!</font></b> ยอดถอดขั้นต่ำ 100$ | ห้ามถอนเศษ เช่น 175$";
            echo $err;
        }
        ?>

    </div>

    <div>
        <?php if(isset($err)) echo $err; ?>
        <h1>Output</h1>
        1000$ : <?php echo $b1000 ?> <br>
        500$ : <?php echo $b500 ?> <br>
        100$ : <?php echo $b100 ?> <br>
        Balance : <?php echo $amount ?> <br>
    </div>

</body>

</html>