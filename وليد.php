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
            <th class="justify">وليد الخبث من شر البرايا</th>
            <th class="center">1</th>
            <th class="justify">على نهج التميع والضلال</th>
        </tr>
        <tr>
            <th class="justify">ومن نهر النواوي مل شربا</th>
            <th class="center">2</th>
            <th class="justify">فبئس الشرب من هذا البلال</th>
        </tr>
        <tr>
            <th class="justify">وفوض من معاني الوصف شيئا</th>
            <th class="center">3</th>
            <th class="justify">يكفره على هذا المقال</th>
        </tr>
        <tr>
            <th class="justify">وأما من نحا منحى صحيحا</th>
            <th class="center">4</th>
            <th class="justify">وكفر كل جهمي وغالي</th>
        </tr>
        <tr>
            <th class="justify">فليس بصالح خلقا ودينا</th>
            <th class="center">5</th>
            <th class="justify">أهذا الحق بل سوء الفعال</th>
        </tr>
        <tr>
            <th class="justify">مخانيث بكم سفه وحمق</th>
            <th class="center">6</th>
            <th class="justify">وحبهم ولستم بالرجال</th>
        </tr>
        <tr>
            <th class="justify">لأنت لكل جهمي نعال</th>
            <th class="center">7</th>
            <th class="justify">يدوس بك المزابل في الضلال</th>
        </tr>
        <tr>
            <th class="justify">وصرت كمثلهم نجسا خبيثا</th>
            <th class="center">8</th>
            <th class="justify">سفيها كاذبا سهل المنال</th>
        </tr>
        <tr>
            <th class="justify">فلو أنا غنمناكم بحرب</th>
            <th class="center">9</th>
            <th class="justify">ننكل فيكم أسوا النكال</th>
        </tr>
        <tr>
            <th class="justify">نحز رؤوسكم من دون ريب</th>
            <th class="center">10</th>
            <th class="justify">كما الأثمار نقطف في الظلال</th>
        </tr>
        <tr>
            <th class="justify">وذلك يوم حق قمطرير</th>
            <th class="center">11</th>
            <th class="justify">عليكم وقعه مثل الجبال</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="الشام.php"><span>&#8678;</span>أيا ويل أرض الشام ماذا أصابها</a>
        <a class="active" href="وليد.php">وليد الخبث من شر البرايا</a>
        <a href="ولاء.php">ولسنا نوالي في سوى الله ربنا<span>&#8680;</span></a>
    </div>
</body>

</html>