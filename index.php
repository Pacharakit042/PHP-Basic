<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
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
        echo "<span style='color: blue;'>".$greeting."</span>";
    ?>

    <hr>

    <h1 style="color: red;">Integer Variable Example</h1>
    <?php
        $age = 20;
        echo "<span style='color: blue;'>I am ".$age." years old</span><br>";
        echo "<span style='color: blue;'>I am $age years old</span>";
        ?>

    <hr>

    <h1 style="color: red;">Calculate with Variables</h1>
    <?php
        $x = 5;
        $y = 4;
        $z = $x+$y;
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
        $myage = $current_year-$birth_year;
        echo "<span style='color: blue;'>อายุของคุณคือ $myage ปี</span>";
    ?>

    <hr>


</body>
</html>