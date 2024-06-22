<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/jpg" href="images/homepageIcon.png">
    <link id="dark-mode-stylesheet" rel="stylesheet" href="styles-dark.css" disabled>
    <title>أبو الحكم الأموي</title>
</head>

<body>
    <nav id="navbar">
        <a href="umawi.php"><img id="imgIcon" src="images/homepageIcon.png"></a>
        <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">&#9776;</a>
        <div id="nav-links">
            <a href="index.php">الصفحة الرئيسية</a>
            <a href="poems.php">الأشعار</a>
            <a href="books.php">الرسائل</a>
            <a href="bidaa.php">رؤوس الضلالة</a>
            <a href="downloads.php">مركز التنزيلات</a>
            <a href="chat.php">الملتقى</a>
            <?php
            if (isset($_SESSION['valid'])) {
                echo '<a href="home.php">الملف الشخصي</a>
                <a href="php/logout.php">تسجيل الخروج</a>';
            } else {
                echo '<a href="login.php">تسجيل الدخول</a>
                <a href="register.php">إنشاء حساب</a>';
            }
            ?>
    </nav>
    <script src="script.js"></script>
    <?php
    function sanitizeText($text)
    {
        $filename = pathinfo($text, PATHINFO_FILENAME);
        return htmlspecialchars($filename, ENT_QUOTES, 'UTF-8');
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $uploadDirectory = 'downloads/';
        $filename = sanitizeText($_POST["filename"]);
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileType = $_FILES['file']['type'];
        if (is_uploaded_file($fileTmpName)) {
            $targetPath = $uploadDirectory . basename($_FILES["file"]["name"]);

            if (file_exists($targetPath)) {
                echo "File already exists.";
            } else {
                if (move_uploaded_file($fileTmpName, $uploadDirectory . $filename)) {
                    header('Location: downloads.php');
                    exit;
                } else {
                    echo "Error uploading file.";
                }
            }
        } else {
            echo "File upload error.";
        }
    }
    ?>

    <style>
        .upload-form {
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        .form-input {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .form-input[type="file"] {
            cursor: pointer;
        }

        .form-submit {
            justify-self: center;
            padding: 10px 20px;
            background-color: #b5f0ad;
            color: black;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-submit:hover {
            background-color: #b5f0ad;
        }
    </style>
    <div class="upload-form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <label for="file" class="form-label">اختر الملف:</label><br>
            <input type="file" id="file" name="file" class="form-input" required><br><br>
            <label for="filename" class="form-label">أدخل اسم الملف:</label><br>
            <input type="text" id="filename" name="filename" class="form-input" required><br><br>
            <input type="submit" value="تحميل الملف" name="submit" class="form-submit">
        </form>
    </div>
</body>

</html>