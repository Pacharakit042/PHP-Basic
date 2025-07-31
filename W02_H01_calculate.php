<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">PHP Calculate Money</h1>
        <hr>
        <p class="text-center">กรุณากรอกข้อมูลเพื่อทำการคำนวณยอดเงิน
        </p>
        <form action="" method="post" class="text-center">
            <div class="form-group row mb-3">
                <div class="col">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price"
                        value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>"
                        class="form-control mx-auto" placeholder="Enter a Price" required>
                </div>
                <div class="col">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" name="amount" id="amount"
                        value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>"
                        class="form-control mx-auto" placeholder="Enter a Amount" required>
                </div>
            </div>

            <div>
                <div>
                    <label class="form-lable d-block" for="">Membership ?</label>
                    <div class=" form-check form-check-inline">
                        <input type="radio" name="member" id="member1" value="1" <?php
                        echo isset($_POST['member']) && $_POST['member'] == '1' ? 'checked' : '';
                        ?>>
                        <label for="member">Member (10% Discount)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="member" id="member2" value="0" <?php
                        echo isset($_POST['member']) && $_POST['member'] == '0' ? 'checked' : '';
                        ?>>
                        <label for="member">Not a Member</label>
                    </div>
                    </divc>
                </div>

                <button type="submit" class="btn btn-primary mt-3 mb-3">Calculate</button>
                <button type="button" class="btn btn-secondary mt-3 mb-3" onclick="clearAllData()">Reset</button>
        </form>
        <div id="grade"><!-- แสดงผลลัพธ์ -->


            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white text-center fw-bold fs-5">
                            Show Result
                        </div>
                        <div class="card-body" id="result">
                            <?php
                            if (isset($_POST['price']) && isset($_POST['amount'])) {

                                $price = $_POST['price'] ?? null;
                                $amount = $_POST['amount'] ?? null;
                                if (is_numeric($price) && is_numeric($amount)) {
                                    $price = floatval($price);
                                    $amount = floatval($amount);
                                    $total = $price * $amount;
                                    $discount = $total * 0.1;
                                    $total_paid = $total;

                                    if (isset($_POST['member']) && $_POST['member'] == '1') {
                                        $total_paid = $total - $discount;
                                        echo "<ul class='list-group list-group-flush'>";
                                        echo "<li class='list-group-item'>Price of product: <strong>" .
                                            number_format($price, 2) . "</strong></li>";
                                        echo "<li class='list-group-item'>Amount of product: <strong>" .
                                            number_format($amount, 2) . "</strong></li>";
                                        echo "<li class='list-group-item'>Total: <strong>" .
                                            number_format($total, 2) . "</strong></li>";
                                        echo "<li class='list-group-item'>Discount : <strong>" .
                                            number_format($discount, 2) . "</strong></li>";

                                        echo "<li class='list-group-item text-primary'>Total Paid: <strong>" .
                                            number_format($total_paid, 2) . "</strong></li>";
                                        echo "</ul>";

                                    } else {
                                        echo "<ul class='list-group list-group-flush'>";
                                        echo "<li class='list-group-item'>Price of product: <strong>" .
                                            number_format($price, 2) . "</strong></li>";
                                        echo "<li class='list-group-item'>Amount of product: <strong>" .
                                            number_format($amount, 2) . "</strong></li>";
                                        echo "<li class='list-group-item text-primary'>Total Paid: <strong>" .
                                            number_format($total_paid, 2) . "</strong></li>";
                                        echo "</ul>";
                                    }


                                } else {
                                    echo "<div class='alert alert-secondary text-center'>Please input Price and Amount.</div>";
                                }

                            } else {
                                echo "<div class='alert alert-denger text-center'>Please input valid numeric value for Price and Amount.</div>";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <a href="index.php">Home
        </a>
    </div>


    <script>
        function clearAllData() {
            document.getElementById("result").innerHTML = ""; // ลบผลลัพธ์
            document.getElementById("price").value = ""; // ลบค่าราคา
            document.getElementById("member1").checked = false; // ยกเลิกเลือกสมาชิก
            document.getElementById("member2").checked = true; // เลือกไม่เป็นสมาชิก
            document.getElementById("amount").value = ""; // ลบค่าจำนวน
        }  
    </script>
</body>

</html>