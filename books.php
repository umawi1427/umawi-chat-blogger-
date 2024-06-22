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
            <a href="poems.php">الأشعار</a>
            <a href="books.php" class="active">الرسائل</a>
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
    <ul id="downloads">
        <li class="list"><a class="downloadLink" href="الأرض.php" target="_blank" title="خلق الأرض">خلق الأرض من القرءان والسنة وأقوال السلف</a></li>
        <li class="list"><a class="downloadLink" href="ما يقال بعد الصلاة.php" target="_blank" title="دعاء بعد الصلاة">الأذكار التي وردت عن النبي مما يقال بعد الصلاة</a></li>
        <li class="list"><a class="downloadLink" href="ملوك بني أمية.php" target="_blank" title="خلفاء بني أمية">خلفاء بني أمَيَّة</a></li>
        <li class="list"><a class="downloadLink" href="تغطية الوجه.php" target="_blank" title="تغطية الوجه">أربعون دليلا من السنة والقرءان في وجوب تغطية الوجوه على النسوان</a></li>
        <li class="list"><a class="downloadLink" href="أسماء الله.php" target="_blank" title="أسماء الله">أسماء الله الحسنى</a></li>
        <li class="list"><a class="downloadLink" href="قصص الأنبياء.php" target="_blank" title="قصص الأنبياء">قصص الأنبياء من القرءان والسنة وأقوال السلف</a></li>
        <li class="list"><a class="downloadLink" href="جزيرة العرب.php" target="_blank" title="جزيرة العرب">جزيرة العرب</a></li>
        <li class="list"><a class="downloadLink" href="تكفير من لا يعمل بأركان الإسلام.php" target="_blank" title="تكفير من لا يعمل بأركان الإسلام">تكفير من لا يعمل بأركان الإسلام</a></li>
        <li class="list"><a class="downloadLink" href="ضعف حديث الخلافة ثلاثون سنة.php" target="_blank" title="ضعف حديث الخلافة ثلاثون سنة">ضعف حديث (الخلافة ثلاثون سنة)</a></li>
        <li class="list"><a class="downloadLink" href="رؤوس المبتدعة.php" target="_blank" title="رؤوس المبتدعة">رؤوس المبتدعة</a></li>
        <li class="list"><a class="downloadLink" href="القول الثابت.php" target="_blank" title="تكفير أبي حنيفة">القول الثابت في تكفير النعمان بن ثابت</a></li>
        <li class="list"><a class="downloadLink" href="أموية أيوب.php" target="_blank" title="الأيوبيون">نسب بني أيوب</a></li>
        <li class="list"><a class="downloadLink" href="الأكراد.php" target="_blank" title="الكرد">أصل الكرد</a></li>
        <li class="list"><a class="downloadLink" href="خلوعرش.php" target="_blank" title="خلو العرش">خلو العرش عند نزول الله</a></li>
        <li class="list"><a class="downloadLink" href="نسائي.php" target="_blank" title="تشيع النسائي">تشيع النسائي صاحب السنن</a></li>
    </ul>
    <script src="script.js"></script>
</body>

</html>