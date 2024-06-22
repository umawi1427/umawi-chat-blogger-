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
            <th class="justify">إذا ما أصاب المرء أي مصيبة</th>
            <th class="center">1</th>
            <th class="justify">فلا يذكرن إلا عظيم المصائب</th>
        </tr>
        <tr>
            <th class="justify">فإن مصاب المسلمين وفاته</th>
            <th class="center">2</th>
            <th class="justify">نبي الهدى ابن الأكرمين الأطايب</th>
        </tr>
        <tr>
            <th class="justify">جميل حيي كامل الخلق أحمد</th>
            <th class="center">3</th>
            <th class="justify">قوي إذا ما اشتد وقع المضارب</th>
        </tr>
        <tr>
            <th class="justify">وقد أسلمت معه قريش وبلغوا</th>
            <th class="center">4</th>
            <th class="justify">لحاضر الإسلام مع كل غائب</th>
        </tr>
        <tr>
            <th class="justify">وقد بسطوا الملك الذي يحكمونه</th>
            <th class="center">5</th>
            <th class="justify">من الصين شرقا مع أقاصي المغارب</th>
        </tr>
        <tr>
            <th class="justify">فصلوا عليه يا أولي الخير تنعموا</th>
            <th class="center">6</th>
            <th class="justify">وتعطون أمنا من صروف النوائب</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="الطمع.php"><span>&#8678;</span>دون ابن آدم ليس يشبعه سوى</a>
        <a class="active" href="مصيبة.php">إذا ما أصاب المرء أي مصيبة</a>
        <a href="الفرق.php">بدأت ببسم الله والشكر سرمدا<span>&#8680;</span></a>
    </div>
</body>

</html>