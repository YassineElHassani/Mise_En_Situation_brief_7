<?php 
include 'db_conn.php';

// $sql = "INSERT INTO userinfo (name, email, role)
//     VALUES (?, ?, ?);
// ";

// $result = $conn->query($sql);

// if(!$result = $conn->error) {
//     die("Query failed:" . $conn->error);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <center>
    <form action="" method="POST" style="padding: 150px; background-color: black; color: #FFF; border-radius: 30px; border: none; flex-wrap: wrap;">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <label for="role">Choose your role:</label>
        <select name="role" id="role">
            <?php
                include 'db_conn.php';
    
    
                $sql = 'SELECT * FROM `role`;';
    
                $result = $conn->query($sql);
    
                if (!$result) {
                    die("Query failed: " . $conn->error);
                }
            
                if($result->num_rows > 0) {
                    $row = [];
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                }
            ?>
            <option value="<?php $row['ID'] ?>"><?php $row['name'] ?></option>
        </select>
        <button type="submit" style="background-color: #FFF; height: 30px; width: 100pw; color: black; ">Register</button>
    </form>
    </center>
</body>
</html>