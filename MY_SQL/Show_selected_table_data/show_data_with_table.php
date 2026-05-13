<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Table Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        tr.header {
            background-color: #3498db;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        td {
            color: #333;
        }
    </style>
</head>
<body>
    <table>
        <tr class="header">
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
            require_once('../DB/config.php');

            $query = "SELECT * FROM Authentication";

            $result = $connect->query($query);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
        
        ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td>
                        <a href="show_data.php?id=<?php echo $row['id'] ?>">Show</a> | 
                        <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a> | 
                        <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a> |
                    </td>
                </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>