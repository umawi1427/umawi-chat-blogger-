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
                echo '<a href="home.php" >الملف الشخصي</a>
                <a href="php/logout.php" >تسجيل الخروج</a>';
            } else {
                echo '<a href="login.php" class="active">تسجيل الدخول</a>
                <a href="register.php">إنشاء حساب</a>';
            }
            ?>
        </div>
    </nav>
    <script>
        function toggleMenu() {
            var x = document.getElementById("navbar");
            if (x.className === "") {
                x.className += " responsive";
            } else {
                x.className = "";
            }
        }
    </script>
    <script src="script.js"></script>
    <div class="containers">
        <div class="box form-box">
            <?php
            include("php/config.php");
            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);
                $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);
                if (is_array($row) && !empty($row)) {
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['date'] = $row['date'];
                    $_SESSION['phonenumber'] = $row['Phonenumber'];
                    $_SESSION['id'] = $row['Id'];
                    $_SESSION['gender'] = $row['Gender'];
                    $_SESSION['country'] = $row['Country'];
                    if ($email == 'umawi1427@gmail.com' && $password == 'umayyad1427') {
                        $_SESSION['admin'] = true;
                        echo "<a href='admin.php'><button style='width: 100%' class='btn'>الانتقال إلى لوحة التحكم</button></a> <br>";
                        echo "<a href='create_poem.php'><button style='width: 100%' class='btn'>إنشاء شعر</button></a> <br>";
                        echo "<a href='add_file.php'><button style='width: 100%' class='btn'>أضف ملف للتنزيلات</button></a> <br>";
                    } else {
                        echo "<div style='text-align: center; background: #92c0f0; padding: 15px 0px; border:1px solid #699053; border-radius: 5px; margin-bottom: 10px; color: rgb(9, 11, 9);'>تم تسجيل الدخول بنجاح.</div>";
                    }
                } else {
                    echo "<div class='message'>
                            <p>هناك خطأ في البريد الالكتروني أو كلمة المرور</p>
                            </div> <br>";
                    echo "<a href='login.php'><button style='width: 100%' class='btn'>تسجيل الدخول مرة أخرى</button></a>";
                }
                if (isset($_SESSION['valid'])) {
                    echo "<div style='text-align: center; background: #92c0f0; padding: 15px 0px; border:1px solid #699053; border-radius: 5px; margin-bottom: 10px; color: rgb(9, 11, 9);'>تم تسجيل الدخول بنجاح</div>";
                    echo "<a href='index.php'><button style='width: 100%' class='btn'>الرجوع إلى الصفحة الرئيسية</button></a>";
                }
            } else {
            ?>

                <style>
                    .field {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        text-align: right;
                    }

                    .field label {
                        width: 100%;
                    }

                    .right-align {
                        text-align: right;
                    }
                </style>

                <form action="" method="post">
                    <div class="field input">
                        <label for="email">البريد الالكتروني</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="password">كلمة المرور</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <div class="field">
                        <input type="submit" style="background-color: #b5f0ad; color: black; width: 100%;" class="btn" name="submit" value="تسجيل الدخول" required>
                    </div>
                    <div class="field right-align">
                        <a href="register.php" style="text-decoration: none;">لا تمتلك حسابا؟ أنشئ حسابك الآن</a>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>