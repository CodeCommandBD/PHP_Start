<?php
session_start(); // ১. মেসেজগুলো রিডাইরেক্টের পরেও ধরে রাখার জন্য সেশন শুরু করা হয়েছে

// ২. চেক করা হচ্ছে 'Upload' বাটনে ক্লিক করা হয়েছে কি না
if (isset($_POST['submit'])) {
    
    // ৩. চেক করা হচ্ছে ইউজার আসলে কোনো ফাইল সিলেক্ট করেছে কি না
    if (!empty($_FILES['file']['name'])) {
        
        // ৪. ফাইলের তথ্যগুলো ভেরিয়েবলে নেওয়া হচ্ছে
        $fileName = $_FILES['file']['name'];
        $tmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $uploadFolder = 'upload/';
        
        // ৫. যদি 'upload' ফোল্ডারটি না থাকে, তবে সেটি তৈরি করা হচ্ছে
        if (!is_dir($uploadFolder)) {
            mkdir($uploadFolder, 0777, true);
        }

        $uploadFile = $uploadFolder . $fileName;
        $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); // ফাইলের ফরম্যাট বের করা (যেমন: jpg, png)
        
        $uploadOk = 1; // ডিফল্টভাবে ধরে নেওয়া হচ্ছে ফাইলটি আপলোড করা যাবে
        $message = "";

        // ৬. চেক করা হচ্ছে ফাইলটি আসলেই একটি ইমেজ কি না (ফাইল সাইজ ১ পিক্সেলের কম হলে false দিবে)
        $check = getimagesize($tmpName);
        if ($check === false) {
            $message = "Error: File is not an image.";
            $uploadOk = 0;
        }

        // ৭. চেক করা হচ্ছে এই নামের ফাইল আগে থেকেই ফোল্ডারে আছে কি না
        if ($uploadOk && file_exists($uploadFile)) {
            $message = "Error: Sorry, file already exists.";
            $uploadOk = 0;
        }

        // ৮. ফাইলের সাইজ চেক করা হচ্ছে (৫০০ KB এর বেশি হলে এরর দিবে)
        if ($uploadOk && $fileSize > 500000) {
            $message = "Error: Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // ৯. শুধুমাত্র নির্দিষ্ট ফরম্যাটের ফাইল এলাউ করা হচ্ছে
        $allowedTypes = ["jpg", "png", "jpeg", "gif"];
        if ($uploadOk && !in_array($imageFileType, $allowedTypes)) {
            $message = "Error: Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // ১০. যদি উপরে কোনো ভুল পাওয়া যায় ($uploadOk == 0), তবে সেশনে এরর মেসেজ সেভ হবে
        if ($uploadOk == 0) {
            $_SESSION['msg'] = $message;
        } else {
            // ১১. সব ঠিক থাকলে টেম্পোরারি লোকেশন থেকে আসল ফোল্ডারে ফাইলটি পাঠানো হচ্ছে
            if (move_uploaded_file($tmpName, $uploadFile)) {
                $_SESSION['msg'] = "Success: The file " . htmlspecialchars(basename($fileName)) . " has been uploaded.";
            } else {
                $_SESSION['msg'] = "Error: There was an error uploading your file.";
            }
        }
    } else {
        // ১২. ফাইল সিলেক্ট না করে আপলোড বাটনে ক্লিক করলে
        $_SESSION['msg'] = "Please select a file first.";
    }
    
    // ১৩. [খুবই গুরুত্বপূর্ণ] আপলোড শেষে পেজটি রিডাইরেক্ট করা হচ্ছে যাতে রিলোড দিলে আবার আপলোড না হয়
    header("Location: test.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .message { padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>
    
    <?php 
    // সেশনে কোনো মেসেজ থাকলে তা দেখানো হচ্ছে
    if (isset($_SESSION['msg'])) {
        $class = (strpos($_SESSION['msg'], 'Success') !== false) ? 'success' : 'error';
        echo "<div class='message $class'>" . $_SESSION['msg'] . "</div>";
        unset($_SESSION['msg']); // একবার দেখানোর পর মুছে ফেলা হচ্ছে
    }
    ?>

    <form action="test.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
