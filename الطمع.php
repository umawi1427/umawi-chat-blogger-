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
            <th class="justify">دُونَ ابْنِ آدَمَ لَيْسَ يَشْبَعُهُ سِوَى</th>
            <th class="center">1</th>
            <th class="justify">حَفْنَاتِ تُرَبٍ وَمِنْهَا قَدْ خُلِقَ</th>
        </tr>
        <tr>
            <th class="justify">لَوْ كَانَ يَمْلِكُ وَادِيًا ذَهَبًا لَمَا</th>
            <th class="center">2</th>
            <th class="justify">قَنِعَتْ بِهِ نَفْسٌ وَيَطْلُبُ مَا لَحِقَ</th>
        </tr>
        <tr>
            <th class="justify">لَوْ يَدْخُلُ الْجَنَّاتِ لَا يَشْبَعُ بِهَا</th>
            <th class="center">3</th>
            <th class="justify">وَمِنَ النَّعِيمِ بِهَا وَلَوْ هُوَ يَسْتَحِقُّ</th>
        </tr>
        <tr>
            <th class="justify">إِنَّ الْقَنَاعَةَ هُوَ الْغَنِيُّ بِنَفْسِهِ</th>
            <th class="center">4</th>
            <th class="justify">لَيْسَ الْغَنِيُّ بِمَالِهِ جَمْعًا طَفِقَ</th>
        </tr>
        <tr>
            <th class="justify">فَاقْنَعْ بِرِزْقِكَ قَلَّةً أَوْ كَثِرَةً</th>
            <th class="center">5</th>
            <th class="justify">لَا خَيْرَ فِي مَرْءٍ سَخُوطٍ إِنْ رُزِقَ</th>
        </tr>
        <tr>
            <th class="justify">فَالنَّاسُ مِنْ حَوَاءَ وَهِيَ مِنْ آدَمَ</th>
            <th class="center">6</th>
            <th class="justify">وَأَبُوكُمْ مِنْ تُرَبٍةٍ هُوَ قَدْ خُلِقَ</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="النووي.php"><span>&#8678;</span>يا من تحبون النواوي الكافرا</a>
        <a class="active" href="الفرق.php">دون ابن آدم ليس يشبعه سوى</a>
        <a href="مصيبة.php">إذا ما أصاب المرء أي مصيبة<span>&#8680;</span></a>
    </div>
</body>

</html>