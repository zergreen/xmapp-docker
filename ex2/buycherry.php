<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<script>
    function calc(a, b, c) {
        return {
            T_PGood: 0,
            T_PBuy: '',
            T_PWeight: '',
            T_PoorMoney: '',
            T_CommonFee: 0,
            T_MemberSaving: 0,
            T_Net: 0,
            T_GoodMoney: 0,

            grade: 'A',
            grade_value: 80,

            d_grade_value: 5,


            update_total() {
                this.T_PGood = (this.T_PBuy - this.T_PWeight);
                this.update_goodmoney();
                this.update_poormoney();
                this.update_ComFeeAndMemSav();

                // this.set_grade();
            },

            update_goodmoney() {
                // console.log('hello')
                this.T_GoodMoney = (this.T_PGood * this.grade_value);
                // console.log('T_GOODMONEY :'+this.T_GoodMoney);
            },

            update_poormoney() {
                this.T_PoorMoney = (this.T_PWeight * this.d_grade_value)
            },

            update_ComFeeAndMemSav() {
                this.T_CommonFee = (this.T_PBuy * 1.0)
                this.T_MemberSaving = (this.T_PBuy * 0.5)
                this.T_Net = (this.T_GoodMoney + this.T_PoorMoney) - (this.T_CommonFee + this.T_MemberSaving)
            },

            set_grade() {
                if (this.grade == "A") {
                    this.grade_value = a
                }
                if (this.grade == "B") {
                    this.grade_value = b
                }
                if (this.grade == "C") {
                    this.grade_value = c
                }
                console.log(this.grade_value)

                this.update_total()

                //    this.update_poormoney()
            },
        }
    }
</script>

<?php $grade_a = 80 ?>
<?php $grade_b = 60 ?>
<?php $grade_c = 20 ?>

<?php echo "<div class='container' x-data='calc($grade_a,$grade_b,$grade_c)' >" ?>
<form action="buy-logic.php" method="post">
    <span></span>เชอรี่
    <div>
        <table width='100%'>
            <tr>
                <td>
                    รหัสสมาชิก
                </td>
                <td>
                    <input type="text" name="member_id" value="63050159" size="5">
                </td>
            <tr>
                <td>
                    รุ่นปลูก
                </td>
                <td>
                    <input type="text" name="type_class" value="ทองดี" size="5">
                </td>
            </tr>
            <tr>
                <td>
                    นน.เชอรี่ที่รับซื้อ
                </td>
                <td>
                    <input type="text" name="weight_buy" size="5" x-model=T_PBuy placeholder="xxx" @input="update_total" required> กิโลกรัม
                </td>
            </tr>
            <tr>
                <td>
                    เกรดเชอรี่
                </td>
                <td>
                    <select name="cherry_grade" x-model=grade x-on:change=set_grade>
                        <!-- <select name="cherry_grade" x-model=grade x-on:change="alert('TEST!!!')"> -->
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <!-- <input type="text" name="cherry_grade" x-model=grade @input="set_grade" size="1"> -->

                </td>
            </tr>
            <tr>
                <td>
                    นน.เชอรี่คุณภาพ
                </td>
                <td>
                    <input type="text" @input="update_total" size="5" x-model="T_PBuy" placeholder="120" readonly> -
                    <input type="text" name=cherry_flow @input="update_total" x-model="T_PWeight" placeholder='xxx' size=5 value="4" required> =
                    <input type="text" name=weight_total x-model=T_PGood size=5 readonly> กิโลกรัม
                </td>
            </tr>

        </table>
    </div>
    <br>
    <!-- GRADE: <span x-text="grade"></span> -->

    <span></span>การเงิน
    <div>
        <table>
            <tr>
                <td>เงินเชอรี่คุณภาพ
                <td><input type="text" name="type_goodmoney" x-model="T_GoodMoney" size="5" readonly> บาท
            </tr>
            <tr>
                <td>เงินเชอรี่ลอย
                <td><input type="text" name="poor_money" x-model="T_PoorMoney" size="5" readonly> บาท
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <td>หักค่าบริหารกองกลาง
                <td><input type="text" size="5" name="common_fee" x-model="T_CommonFee" readonly> บาท
            </tr>
            <tr>
                <td>หักเงินออมสมาชิก
                <td><input type="text" size="5" name="member_saving" x-model="T_MemberSaving" readonly> บาท
            </tr>
            <tr>
                <td>รายรับสุทธิ
                <td><input type="text" size="5" name="total_net" x-model="T_Net" readonly> บาท
            </tr>
        </table>
    </div>
    </div>
    <center><input type="submit" value="บันทึก"> <span></span>
        <a href="home.php">
            <input type="button" value="ยกเลิก">
        </a>
    </center>
</form>
</div>

</html>