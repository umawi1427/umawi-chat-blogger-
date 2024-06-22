<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أبو الحكم الأموي</title>
    <link rel="icon" type="image/jpg" href="images/homepageIcon.png">
    <link rel="stylesheet" href="style.css">
    <link id="dark-mode-stylesheet" rel="stylesheet" href="styles-dark.css" disabled>
</head>

<body>
    <nav id="navbar">
        <a href="umawi.php"><img id="imgIcon" src="images/homepageIcon.png"></a>
        <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">&#9776;</a>
        <div id="nav-links">

            <a href="index.php">الصفحة الرئيسية</a>
            <a href="poems.php" class="active">الأشعار</a>

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
    <table class="poem" style="height: 120px;">
        <tr>
            <th class="justify">ما دمت سنيا على</th>
            <th class="center">1</th>
            <th class="justify">نهج النبي محمد</th>
        </tr>
        <tr>
            <th class="justify">فالنصح ليس إليكمُ</th>
            <th class="center">2</th>
            <th class="justify">بل إنه للمعتدي</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="شمس.php"><span>&#8678;</span>نصره الله على الجهمية</a>
        <a class="active" href="سني.php">ما دمت سنيا على</a>
        <a href="أبو جيفة.php">أيا علماء الدين والفقه والهدى<span>&#8680;</span></a>
    </div>
</body>

</html>