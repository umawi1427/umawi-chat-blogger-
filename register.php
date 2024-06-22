<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style.css">
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
                <a href="register.php" class="active">إنشاء حساب</a>';
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
                $username = $_POST['username'];
                $email = $_POST['email'];
                $date = $_POST['date'];
                $password = $_POST['password'];
                $phonenumber = $_POST['phonenumber'] ?? '';
                $notes = $_POST['notes'] ?? '';
                $gender = $_POST['gender'] ?? '';
                $country = $_POST['country'] ?? '';
                $profileImage = $_FILES['profileImage'];
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
                if (mysqli_num_rows($verify_query) != 0) {
                    echo "رجاء استخدم بريد الكتروني مختلف, هذا البريد الالكتروني مستخدم بالفعل.";
                } else {
                    if ($profileImage['error'] === 0) {
                        $profileImageName = $profileImage['name'];
                        $profileImageTmpName = $profileImage['tmp_name'];
                        $profileImageSize = $profileImage['size'];
                        $allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
                        $maxImageSize = 1000000;

                        if (in_array($profileImage['type'], $allowedImageTypes) && $profileImageSize <= $maxImageSize) {
                            $uploadDirectory = 'uploads/';
                            $uploadPath = $uploadDirectory . basename($profileImageName);

                            if (move_uploaded_file($profileImageTmpName, $uploadPath)) {
                                $insertQuery = "INSERT INTO users (Username, Email, Date, Password, Phonenumber, Gender, Country, Notes, ProfileImage) VALUES ('$username', '$email', '$date', '$password', '$phonenumber', '$gender', '$country', '$notes', '$profileImageName')";
                                mysqli_query($con, $insertQuery) or die("Error Occurred");
                                echo "<div style='text-align: center; background: #92c0f0; padding: 15px 0px; border:1px solid #699053; border-radius: 5px; margin-bottom: 10px; color: rgb(9, 11, 9);'>تم إنشاء الحساب بنجاح</div>";
                            } else {
                                echo "هناك خطأ في تحميل صورة الملف الشخصي الخاصة بك";
                            }
                        } else {
                            echo "(أكبر حجم هو 10 mb) نوع الصورة غير مدعوم أو حجم الصورة كبير جدًا.";
                        }
                    } else {
                        echo "حدث خطأ أثناء تحميل صورة الملف الشخصي الخاصة بك.";
                    }
                }
            }
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

                .field input,
                .field select {
                    width: 100%;
                    padding: 8px;
                    margin-top: 8px;
                }
            </style>
            <div class="registration-form">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="field input">
                        <label for="username">اسم المستخدم</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" name="email" id="email" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="date">تاريخ الميلاد</label>
                        <input type="date" name="date" id="date" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="password">كلمة المرور</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="phonenumber">رقم الهاتف</label>
                        <input type="tel" name="phonenumber" id="phonenumber" autocomplete="off">
                    </div>
                    <div class="field input">
                        <label for="country">البلد</label>
                        <input type="text" name="country" id="country" autocomplete="off">
                    </div>
                    <div class="field input">
                        <label for="gender">الجنس</label>
                        <select name="gender" id="gender" required>
                            <option value="male">ذكر</option>
                            <option value="female">أنثى</option>
                        </select>
                    </div>
                    <div class="field input">
                        <label style="display: none;" for="notes">الملاحظات</label>
                        <textarea name="notes" style="display: none;" resize="none" ; id="notes" rows="4"></textarea>
                    </div>
                    <div class="field input">
                        <label for="profileImage">صورة الملف الشخصي</label>
                        <input type="file" name="profileImage" id="profileImage" required>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="إنشاء الحساب">
                    </div>
                </form>
            </div>
</body>

</html>