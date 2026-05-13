<?php 
    $result = null;
    $row = null;
    $error_message = "";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        require_once("../DB/config.php");

        $query = "SELECT * FROM authentication WHERE ID = '$id'";

        $result = $connect->query($query);

        if($result && $result->num_rows > 0){
            $row = $result->fetch_assoc();
        }else{
            $error_message = "No data found for ID: " . htmlspecialchars($id);
        }

    }else{
        $error_message = "ID is not set in the URL";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .header {
            background-color: #3498db;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .error-container {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .error-msg {
            color: #e74c3c;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background-color: #3498db;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .back-link:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <?php if($row): ?>
        <table>
            <tr class="header">
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['password'] ?></td>
            </tr>
        </table>
        <a href="show_data_with_table.php" class="back-link">← Back to List</a>
    <?php else: ?>
        <div class="error-container">
            <p class="error-msg"><?php echo $error_message; ?></p>
            <a href="show_data_with_table.php" class="back-link">← Back to List</a>
        </div>
    <?php endif; ?>
</body>
</html>