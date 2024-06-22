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
    <table class="poem">
        <tr>
            <th class="justify">لا تسمعن للأشعرية قولهم</th>
            <th class="center">1</th>
            <th class="justify">وانبذهمُ من دون ما ترداد</th>
        </tr>
        <tr>
            <th class="justify">قد حرفوا القرءان ثم هم افتروا</th>
            <th class="center">2</th>
            <th class="justify">عن ربنا ما لم يقله الهادي</th>
        </tr>
        <tr>
            <th class="justify">قالوا إله العرش ليس بمستوٍ</th>
            <th class="center">3</th>
            <th class="justify">وأتوا بكفر واضح وفساد</th>
        </tr>
        <tr>
            <th class="justify">قالوا بأن كلامه ما قاله</th>
            <th class="center">4</th>
            <th class="justify">وطغوا كعاد بئست الأوغاد</th>
        </tr>
        <tr>
            <th class="justify">ضلوا عن الحق المبين بفعلهم</th>
            <th class="center">5</th>
            <th class="justify">وأتوا بقول مقرف ومعاد</th>
        </tr>
        <tr>
            <th class="justify">إن قلت قال الله قال رسوله</th>
            <th class="center">6</th>
            <th class="justify">همزوك قالوا ما أتوا برشاد</th>
        </tr>
        <tr>
            <th class="justify">أو قلت قد قال الصحابة والألى</th>
            <th class="center">7</th>
            <th class="justify">كانوا كعُمْيِ القلب حين تنادي</th>
        </tr>
        <tr>
            <th class="justify">زعموا بأن العقل في تفكيرهم</th>
            <th class="center">8</th>
            <th class="justify">وأتوا به بالكفر والإلحاد</th>
        </tr>
        <tr>
            <th class="justify">والعقل لو شعروا براء منهمُ</th>
            <th class="center">9</th>
            <th class="justify">إذ كفَّروا أهل التقى والزاد</th>
        </tr>
        <tr>
            <th class="justify">وإذا أتيت بآية أو سنة</th>
            <th class="center">10</th>
            <th class="justify">فدليلهم سفهاء كل بلاد</th>
        </tr>
        <tr>
            <th class="justify">فأبو حنيفة والسيوطي دينهم</th>
            <th class="center">11</th>
            <th class="justify">والنصح لا يجدي لأهل عناد</th>
        </tr>
        <tr>
            <th class="justify">فانبذهمُ واتركهمُ والعنهمُ</th>
            <th class="center">12</th>
            <th class="justify">كن ضدهم كالسيف بالمرصاد</th>
        </tr>
        <tr>
            <th class="justify">ثم الصلاة على النبي محمدٍ</th>
            <th class="center">13</th>
            <th class="justify">وصحابه الأطهار والأمجاد</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="الأشاعرة.php"><span>&#8678;</span>الأشعرية بالرحمن كفار</a>
        <a class="active" href="نبذ الأشاعرة.php">لا تسمعن للأشعرية قولهم</a>
        <a href="البدع.php">أبدأ في نظمي بحمد الله<span>&#8680;</span></a>
    </div>
</body>

</html>