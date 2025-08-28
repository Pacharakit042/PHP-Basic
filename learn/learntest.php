<?php
$servername = "localhost";
$username = "root";
$password = "";

try {                                       //db name v
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

    //data table
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h3 class="mt-4">name</h3>
        <hr>
        <table id="myTable" class="table">
            <thead>
                <th>id</th>
                <th>id</th>
                <th>id</th>
                <th>id</th>
                <th>id</th>
            </thead>
            <tbody>
        
        <?php
        $stmt =  $conn->query("SELECT * FROM users");
        $stmt->execute();
        
        $users = $stmt->fetchAll();
        foreach($users as $user) {
        ?>
        
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['id'] ?></td>
            </tr>
            <?php
        }
        ?>
            </tbody>
        </table>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
</html>