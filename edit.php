<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
}
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
                echo '<a href="home.php" class="active">الملف الشخصي</a>
                <a href="php/logout.php">تسجيل الخروج</a>';
            } else {
                echo '<a href="login.php">تسجيل الدخول</a>
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
</body>

<body>

    <body>
        <div class="containers">
            <div class="box form-box">
                <?php
                if (isset($_POST['submit'])) {
                    $username = mysqli_real_escape_string($con, $_POST['username']);
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $date = mysqli_real_escape_string($con, $_POST['date']);
                    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
                    $gender = mysqli_real_escape_string($con, $_POST['gender']);
                    $country = mysqli_real_escape_string($con, $_POST['country']);
                    $notes = mysqli_real_escape_string($con, $_POST['notes']);
                    $id = $_SESSION['id'];

                    $profileImageName = null;
                    if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === 0) {
                        $profileImage = $_FILES['profileImage'];
                        $allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
                        $maxImageSize = 1000000; // 1MB
                        if (in_array($profileImage['type'], $allowedImageTypes) && $profileImage['size'] <= $maxImageSize) {
                            $uploadDirectory = 'uploads/';
                            $uniqueFileName = uniqid() . '-' . basename($profileImage['name']);
                            $uploadPath = $uploadDirectory . $uniqueFileName;
                            if (move_uploaded_file($profileImage['tmp_name'], $uploadPath)) {
                                $profileImageName = $uniqueFileName;
                            }
                        }
                    }

                    if ($profileImageName) {
                        $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', date='$date', Phonenumber='$phonenumber', Gender='$gender', Country='$country', Notes='$notes', ProfileImage='$profileImageName' WHERE Id=$id ") or die("error occurred");
                    } else {
                        $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', date='$date', Phonenumber='$phonenumber', Gender='$gender', Country='$country', Notes='$notes' WHERE Id=$id ") or die("error occurred");
                    }

                    if ($edit_query) {
                        echo "<div style='text-align: center; background: #92c0f0; padding: 15px 0px; border:1px solid #699053; border-radius: 5px; margin-bottom: 10px; color: rgb(9, 11, 9);'>تم تعديل معلوماتك بنجاح</div>";
                    }
                } else {
                    $id = $_SESSION['id'];
                    $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id ");
                    $result = mysqli_fetch_assoc($query);
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_date = $result['date'];
                    $res_Phonenumber = $result['Phonenumber'];
                    $res_Gender = $result['Gender'];
                    $res_Country = $result['Country'];
                    $res_Notes = $result['Notes'];
                    $res_ProfileImage = $result['ProfileImage'];
                ?>
                    <header style="text-align: center; ">تعديل الملف الشخصي</header>
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

                        img.profile-image {
                            width: 150px;
                            height: 150px;
                            border-radius: 50%;
                        }
                    </style>
                    <form action="" method="post" enctype="multipart/form-data">
                        <?php if ($res_ProfileImage) : ?>
                            <div class="field">
                                <label>الصورة الشخصية الحالية</label>
                                <img src="uploads/<?php echo htmlspecialchars($res_ProfileImage); ?>" alt="Profile Image" class="profile-image">
                            </div>
                        <?php endif; ?>
                        <div class="field input">
                            <label for="profileImage">الصورة الشخصية الجديدة</label>
                            <input type="file" name="profileImage" id="profileImage">
                        </div>
                        <div class="field input" style="display: none;">
                            <label for="username">الاسم واللقب</label>
                            <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                        </div>
                        <div class="field input">
                            <label for="email">البريد الالكتروني</label>
                            <input type="email" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                        </div>
                        <div class="field input">
                            <label for="date">تاريخ الميلاد</label>
                            <input type="date" name="date" id="date" value="<?php echo $res_date; ?>" autocomplete="off" required>
                        </div>
                        <div class="field input">
                            <label for="phonenumber">رقم الهاتف</label>
                            <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $res_Phonenumber; ?>" autocomplete="off" required>
                        </div>
                        <div class="field input">
                            <label for="gender">الجنس</label>
                            <select name="gender" id="gender" required>
                                <option value="male" <?php if ($res_Gender == 'male') echo 'selected'; ?>>ذكر</option>
                                <option value="female" <?php if ($res_Gender == 'female') echo 'selected'; ?>>أنثى</option>
                            </select>
                        </div>
                        <div class="field input">
                            <label for="country">الدولة</label>
                            <input type="text" name="country" id="country" value="<?php echo $res_Country; ?>" autocomplete="off" required>
                        </div>
                        <div class="field input">
                            <label for="notes">ملاحظات</label>
                            <textarea name="notes" id="notes" autocomplete="off" required><?php echo $res_Notes; ?></textarea>
                        </div>
                        <div class="field">
                            <input type="submit" style="background-color: #b5f0ad; color: black; width: 100%;" class="btn" name="submit" value="حفظ" required>
                        </div>
                    </form>
            </div>
        <?php } ?>
        </div>
    </body>

    </div>
</body>

</html>