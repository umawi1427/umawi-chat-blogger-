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
            <th class="justify">ذكرت اليوم شيخا كان حقا</th>
            <th class="center">1</th>
            <th class="justify">منير الدين في جسد وروح</th>
        </tr>
        <tr>
            <th class="justify">وأهل العزم ذا بأس شديد</th>
            <th class="center">2</th>
            <th class="justify">على أهل التجهم في كلوح</th>
        </tr>
        <tr>
            <th class="justify">وثبتا راسخا مثل الرواسي</th>
            <th class="center">3</th>
            <th class="justify">غدا فينا كشمس في الوضوح</th>
        </tr>
        <tr>
            <th class="justify">ولم يخف الأمير ولم يجبه</th>
            <th class="center">4</th>
            <th class="justify">بفتنته ولا تنس ابن نوح</th>
        </tr>
        <tr>
            <th class="justify">فقد جلدوه سوطا تلو سوط</th>
            <th class="center">5</th>
            <th class="justify">وليسوا للبقية في جنوح</th>
        </tr>
        <tr>
            <th class="justify">وأيده الإله بحسن صبر</th>
            <th class="center">6</th>
            <th class="justify">تحمل فيه آلام الجروح</th>
        </tr>
        <tr>
            <th class="justify">وجاهد في سبيل الله صدقا</th>
            <th class="center">7</th>
            <th class="justify">وكان مجددا عصر الفتوح</th>
        </tr>
        <tr>
            <th class="justify">مجدد ديننا ومحق حق</th>
            <th class="center">8</th>
            <th class="justify">فبورك سعي ذا الشيخ النصوح</th>
        </tr>
        <tr>
            <th class="justify">وشيد للديانة من بناء</th>
            <th class="center">9</th>
            <th class="justify">عظيم راسخ مثل الصروح</th>
        </tr>
        <tr>
            <th class="justify">وذا علم وفقه واعتقاد</th>
            <th class="center">10</th>
            <th class="justify">صحيح في الدوام على رجوح</th>
        </tr>
        <tr>
            <th class="justify">وأخدم علمه لم ينس يوما</th>
            <th class="center">11</th>
            <th class="justify">ومذهبه بكتب أو شروح</th>
        </tr>
        <tr>
            <th class="justify">وإن العلم ينعى حين ولى</th>
            <th class="center">12</th>
            <th class="justify">من الدنيا وصار إلى نزوح</th>
        </tr>
        <tr>
            <th class="justify">وإن النفس نائحة عليه</th>
            <th class="center">13</th>
            <th class="justify">وحق لكي وربي أن تنوحي</th>
        </tr>
        <tr>
            <th class="justify">وتأتي اليوم شرذمة تذم الـ</th>
            <th class="center">14</th>
            <th class="justify">ـإمام ومنهم خبث النفوح</th>
        </tr>
        <tr>
            <th class="justify">فإن هو مرجئ قد كان حقا</th>
            <th class="center">15</th>
            <th class="justify">فإنا مثله يا ذا القيوح</th>
        </tr>
        <tr>
            <th class="justify">جزاه الله عنا كل خير</th>
            <th class="center">16</th>
            <th class="justify">عليه الرحم من رب صفوح</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="ولاء.php"><span>&#8678;</span>ولسنا نوالي في سوى الله ربنا</a>
        <a class="active" href="حنبل.php">ذكرت اليوم شيخنا كان حقا</a>
        <a href="تركيا.php">بلاد الشر مجمع كل سوء<span>&#8680;</span></a>
    </div>
</body>

</html>