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
            flex-direction: column;
            /* সারি নয়, কলাম হিসেবে থাকবে */
            justify-content: flex-start;
            /* উপর থেকে শুরু হবে */
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding-top: 50px;
            /* উপরে কিছুটা জায়গা */
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

        th,
        td {
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

        .msg-container {
            width: 80%;
            margin-bottom: 20px;
        }

        .msg {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET['msg'])): ?>
        <div class="msg-container">
            <div class="msg">
                <?php echo htmlspecialchars($_GET['msg']); ?>
            </div>
        </div>
    <?php endif; ?>
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

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

        ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td>
                        <a href="show_data.php?id=<?php echo $row['id'] ?>">Show</a> |
                        <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a> |
                        <a
                            class="delete-btn"
                            href="delete_data.php?id=<?php echo $row['id'] ?>"
                            onclick="return confirm('Are you sure to delete?')">Delete</a> |
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

    <script>
        // ১. ৫ সেকেন্ড পর মেসেজটি অটোমেটিক হাইড হয়ে যাবে
        setTimeout(function() {
            const msgBox = document.querySelector('.msg-container');
            if (msgBox) {
                msgBox.style.transition = "opacity 0.5s ease";
                msgBox.style.opacity = "0";
                setTimeout(() => msgBox.remove(), 500); // অ্যানিমেশন শেষে রিমুভ করে দেবে
            }
        }, 3000);

        // ২. রিফ্রেশ করলে যাতে মেসেজ আর না আসে, সেজন্য ইউআরএল ক্লিন করা
        if (window.location.search.includes('msg=')) {
            window.history.replaceState({}, document.title, window.location.pathname);
        }

        // ডিলিট কনফার্মেশন
        // const deleteLinks = document.querySelectorAll('.delete-btn');
        // deleteLinks.forEach(link => {
        //     link.addEventListener("click", function(e) {
        //         if (!confirm('আপনি কি নিশ্চিত যে আপনি এই তথ্যটি ডিলিট করতে চান?')) {
        //             e.preventDefault();
        //         }
        //     });
        // });
    </script>
</body>

</html>