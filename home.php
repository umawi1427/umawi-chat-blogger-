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
        <a href="umawi.php" class="active"><img id="imgIcon" src="images/homepageIcon.png"></a>
        <a href="index.php">الصفحة الرئيسية</a>
        <a href="poems.php">الأشعار</a>
        <a href="books.php">الرسائل</a>
        <a href="bidaa.php">رؤوس الضلالة</a>
        <a href="downloads.php">مركز التنزيلات</a>
        <a href="chat.php">الملتقى</a>
        <?php
        if (isset($_SESSION['valid'])) {
            echo '<a href="home.php" class="active">الملف الشخصي</a>
                <a href="php/logout.php" >تسجيل الخروج</a>';
        } else {
            echo '<a href="login.php" >تسجيل الدخول</a>
                <a href="register.php" >إنشاء حساب</a>';
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

    <body>
        <div class="containers">
            <div class="box form-box">
                <?php
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");
                $result = mysqli_fetch_assoc($query);
                $res_username = $result['Username'];
                $res_Email = $result['Email'];
                $res_date = $result['date'];
                $res_Phonenumber = $result['Phonenumber'];
                $res_Gender = $result['Gender'];
                $res_Country = $result['Country'];
                $res_Notes = $result['Notes'];
                $res_id = $result['Id'];
                $res_ProfileImage = $result['ProfileImage'];
                echo "<a href='edit.php?Id=$res_id'><button class='btn' style=' width: 100%; background-color: #b5f0ad; color: black'>تعديل الملف الشخصي</button></a>";
                ?>
                <style>
                    .field {
                        text-align: right;
                    }
                </style>
                <form style="text-align: right;">
                    <table style="width: 100%; direction:rtl; font-size: 1.2em">
                        <p style="font-size: 1.2em;">مرحبا بك، <b><?php echo $res_username ?></b></p>
                        <p style="font-size: 1.2em;">يمكنك التحقق من معلوماتك الشخصية أدناه</p>
                        <?php if ($res_ProfileImage) : ?>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <img src="uploads/<?php echo htmlspecialchars($res_ProfileImage); ?>" style="width: 150px; height: 150px; border-radius: 50%;" alt="Profile Image">
                                </td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <td>البريد الالكتروني: </td>
                            <td><b><?php echo $res_Email ?></b></td>
                        </tr>
                        <tr>
                            <td>تاريخ الميلاد: </td>
                            <td><b><?php echo $res_date ?></b></td>
                        </tr>
                        <tr>
                            <td>رقم الهاتف: </td>
                            <td><b><?php echo $res_Phonenumber ?></b></td>
                        </tr>
                        <tr>
                            <td>الجنس: </td>
                            <td><b><?php echo $res_Gender == 'male' ? 'ذكر' : 'أنثى'; ?></b></td>
                        </tr>
                        <tr>
                            <td>الدولة: </td>
                            <td><b><?php echo $res_Country ?></b></td>
                        </tr>
                        <tr>
                            <td>ملاحظات: </td>
                            <td><b><?php echo $res_Notes ?></b></td>
                        </tr>
                        <tr>
                            <td>كلمة المرور: </td>
                            <td><strong>************</strong></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>

</html>