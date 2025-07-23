<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>Welcome to PHP Basic</h1>
    <p>This is a simple PHP application.</p>

    <hr>

    <h1 style="color: red;">Basic PHP Syntax</h1>
    <pre>
        &lt;?php
            echo "Hello World!";
        ?&gt;    
    </pre>
    <h3>Result</h3>
    <div style="color: blue;">
        <?php
        echo "Hello World <br>";
        print "<span style='color: green;'> Pacharakit Homlumduan </span><br>";
        ?>
    </div>

    <hr>

    <h1 style="color: red;">PHP Variables</h1>
    <pre>
        &lt;?php
            $greeting = "Hello, World!";
            echo $greeting;
        ?&gt;    
    </pre>
    <h3>Result</h3>
    <?php
    $greeting = "Hello, World!";
    echo "<span style='color: blue;'>" . $greeting . "</span>";
    ?>

    <hr>

    <h1 style="color: red;">Integer Variable Example</h1>
    <?php
    $age = 20;
    echo "<span style='color: blue;'>I am " . $age . " years old</span><br>";
    echo "<span style='color: blue;'>I am $age years old</span>";
    ?>

    <hr>

    <h1 style="color: red;">Calculate with Variables</h1>
    <?php
    $x = 5;
    $y = 4;
    $z = $x + $y;
    echo "<span style='color: blue;'>The sum of $x and $y is $z.</span>";
    ?>

    <hr>

    <h1 style="color: red;">คำนวณพื้นที่สามเหลี่ยม</h1>
    <?php
    $b = 25;
    $h = 2;
    $area = 0.5 * $b * $h;
    echo "<span style='color: blue;'>พื้นที่ของสามเหลี่ยมคือ $area ตารางหน่วย</span>";
    ?>

    <hr>

    <h1 style="color: red;">คำนวณอายุจากปีเกิด</h1>
    <?php
    $birth_year = 2547;
    $current_year = 2568;
    $myage = $current_year - $birth_year;
    echo "<span style='color: blue;'>อายุของคุณคือ $myage ปี</span>";
    ?>

    <hr>
    <h1 style="color: blue;">IF-Else</h1>
    <!-- เกณฑ์ผ่านการสอบ ต้องได้คะแนน มากกว่า 60 คะแนน -->

    <?php
    $score = 75; // เปลี่ยนค่า score เพื่อทดสอบ
    echo "คะแนนของคุณคือ $score คะแนน <br>";
    echo "ผลลัพธ์คือ ";
    if ($score > 60) {
        echo "สอบผ่าน";
    } else {
        echo "สอบไม่ผ่าน";
    }
    ?>

    <hr>
    <h1 style="color: blue;">Boolean Variable</h1>
    <!-- ตรวจสอบว่าเป็นน นศ. หรือไม่ -->

    <?php
    echo "<h3>คุณเป็นนักเรียนใช่หรือไม่</h3>";
    $is_student = true; // เปลี่ยนค่าเป็น false เพื่อทดสอบ
    if (!$is_student) {
        echo "ใช่";
    } else {
        echo "ไม่ใช่";
    }
    ?>

    <hr>
    <h1 style="color: blue;">Loop</h1>
    <!-- ===== Loop for ===== -->

    <h3>แสดงตัวเลข 1 ถึง 10</h3>
    <?php
    $sum = 0;
    for ($i = 5; $i <= 9; $i++) {
        $sum += $i; // $sum = $sum + $i;    
        if ($i < 9) {
            echo "$i + ";
        } else {
            echo "$i = ";
        }
    }
    echo "$sum";
    ?>

    <hr>
    <h2> ===== สูตรคูณแม่ 2 =====</h2>

    <?php
    $j = 1; // ค่าเริ่มต้น
    while ($j <= 12) { // เงื่อนไข
        echo "2 x $j = " . (2 * $j) . "<br>"; // แสดงผล
        $j++; // เพิ่ม ลด ค่า
    }
    ?>

    <hr>
    <h2> ===== สูตรคูณแม่ 2 ใส่ตาราง =====</h2>

    <table class="table table-bordered table-striped w-auto mx-auto text-center ">
        <thead class="table-primary">
            <tr>
                <th>ลำดับ</th>
                <th>สูตรคูณ</th>
                <th>ผลลัพธ์</th>
            </tr>
            </theadc>
        <tbody>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>2 x $i</td>";
                echo "<td>" . 2 * $i . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->

    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
    <h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>
    <hr>

    <?php
    $fruits = ["Apple", "Banana", "Cherry"];
    ?>

    <h3>แสดงรายการผลไม้ โดยใช้ index</h3>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        echo $fruits[0] . "<br>";
        echo $fruits[1] . "<br>";
        echo $fruits[2] . "<br>";
        ?>
    </div>
    <br>

    <div style="color:red; background-color: lightgray; padding: 10px;">
        <?php
        echo "รายการผลไม้: <br>";
        echo "ผลไม้ที่ 1:" . $fruits[0] . "<br>";
        echo "ผลไม้ที่ 2:" . $fruits[2] . "<br>";
        ?>
    </div>
    <br>

    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ print readable</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        echo "รายการผลไม้: <br>";
        print_r($fruits); // แสดงผลอาเรย์ทั้งหมด  print readable
        echo "<br>";
        ?>
    </div>

    <!-- ======================================================== -->
    <br>
    <h4>แสดงจำนวนสมาชิกในอาเรย์</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        echo "จำนวนผลไม้: " . count($fruits) . " ชนิด <br>";
        echo "<br>";
        ?>
    </div>

    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
        // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
        echo "รายการผลไม้: " . implode(", ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
        echo "<br>";
        ?>
    </div>

    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
        foreach ($fruits as $fruit) {
            if ($fruit === end($fruits)) {
                echo "$fruit. ";
            } else {
                echo "$fruit, ";
            }
        }
        echo "<br>";
        ?>
    </div>

    <!-- ======================================================== -->

    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 2: Associative Array</h2>
    <h6>เป็น array ซ้อนกันหลายชุด (Multidimensional array)</h6>
    <h6>แต่ละชุดเป็น associative array ที่ระบุชื่อ key ชัดเจน เช่น "name" และ "price"</h6>
    <h6>ใช้สำหรับเก็บข้อมูลที่มีความสัมพันธ์กัน key => value เช่น รายการสินค้า</h6>

    <?php
    // สร้างอาเรย์ของผลไม้ที่มีชื่อและราคา
    $products = [
        ["name" => "Apple", "price" => 30],
        ["name" => "Banana", "price" => 20],
        ["name" => "Cherry", "price" => 15]
    ];
    ?>

    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง key value</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        // แสดงผลลัพธ์ของการเข้าถึงข้อมูลในอาเรย์
        echo $products[0]["name"] . "<br>";  // Apple
        echo $products[2]["price"] . "<br>"; // 15
        

        ?>
    </div>

    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการสินค้า ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        foreach ($products as $product) {
            echo "สินค้า: " . $product["name"] . ", ราคา: " . $product["price"] . " บาท <br>";
            $total_price += $product["price"];
            // $total_price = $total + $product["price"];
        }
        echo "<br>";
        echo "ราคารวมของผลไม้ทั้งหมด :" . $total_price;
        ?>
    </div>




    <hr>
    <a href="index.php">Home</a>

</body>

</html>