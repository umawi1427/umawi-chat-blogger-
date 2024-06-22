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
            <th class="justify">يَا مَنْ تُحِبُّونَ النَّوَاوِي الْكَافِرَ</th>
            <th class="center">1</th>
            <th class="justify">وَتَرَوْنَهُ فَوْقَ الْبَرِيَّةِ ظَاهِرًا</th>
        </tr>
        <tr>
            <th class="justify">وَتُقَدِّسُونَ كَلَامَهُ وَكِتَابَهُ</th>
            <th class="center">2</th>
            <th class="justify">وَتَرَوْنَهُ فِي الْعِلْمِ بَحْرًا زَاخِرًا</th>
        </tr>
        <tr>
            <th class="justify">وَتَرَوْنَ شَرْحَ صَحِيحِ مُسْلِمٍ أَنَّهُ</th>
            <th class="center">3</th>
            <th class="justify">خَيْرُ الشُّرُوحِ إِذَا أَرَدْتَ مَصَادِرًا</th>
        </tr>
        <tr>
            <th class="justify">وَتَرَوْنَ أَنَّ الطَّعْنَ فِيهِ وَوَصْفَهُ</th>
            <th class="center">4</th>
            <th class="justify">قَاضِ عَلَى الْإِنسَانِ يَصْبَحُ فَاجِرًا</th>
        </tr>
        <tr>
            <th class="justify">يَا مَنْ فَتَنتُمْ أَهْلَ السُّنَّةِ أَحْمَدَ</th>
            <th class="center">5</th>
            <th class="justify">مِنْ أَجْلِهِ لَا رَادِعًا أَوْ زَاجِرًا</th>
        </tr>
        <tr>
            <th class="justify">عَنْ بِدْعَهُ قَدْ صِرْتُمُ أَضْحَوْكَةً</th>
            <th class="center">6</th>
            <th class="justify">لِلْأَشْعَرِيَّةِ فَارِعُوًا أَوْ فَكَّرَ</th>
        </tr>
        <tr>
            <th class="justify">يَا مَنْ تُحِبُّ إِمَامَ كَفْرِ غَابِرٍ</th>
            <th class="center">7</th>
            <th class="justify">وَتَقُولُ أَنَّكَ لِلنَّوَاوِي عَاذِرٌ</th>
        </tr>
        <tr>
            <th class="justify">أَبْجَهِلَهُ فَهْوَ الْإِمَامُ الْمُقْتَدَى</th>
            <th class="center">8</th>
            <th class="justify">بَلْ كَانَ عَالِمُكَ الْإِمَامُ مُنَوِّرًا</th>
        </tr>
        <tr>
            <th class="justify">وَغَفِلْتُمُ عَنْ كُفْرِهِ وَضَلَالِهِ</th>
            <th class="center">9</th>
            <th class="justify">إِنْكَارِهِ وَجْهِ الْإِلَهِ فَمَا نَرَى</th>
        </tr>
        <tr>
            <th class="justify">يَوْمَ الْقِيَامَةِ نَفْسَهُ أَوْ غَيْرَهُ</th>
            <th class="center">10</th>
            <th class="justify">أَوْ أَنَّنَا مَعَهُ سَنَمْضِ أَشَاعِرَا</th>
        </tr>
        <tr>
            <th class="justify">أَفَخَلَتُمُ أَنَّنَا نَخَافُ بِقَوْلِكُمْ</th>
            <th class="center">11</th>
            <th class="justify">أَنَّ مَنْ يُدَانِيهِ يُفَتَّ بِلَا مِرَا</th>
        </tr>
        <tr>
            <th class="justify">رَغِمَتْ أَنُوفَكُمُ وَفُتَّ جُبَاهُكُمُ</th>
            <th class="center">12</th>
            <th class="justify">مَعْهُ أَكَابِرَ كُنتُمُ وَأَصَاغِرَا</th>
        </tr>
        <tr>
            <th class="justify">أَفَتَفْتِنُونَ النَّاسَ عَنْ أَدْيَانِهِمْ</th>
            <th class="center">13</th>
            <th class="justify">وَنَسِيتُمُ مَا كَانَ رَبِّي آمِرًا</th>
        </tr>
        <tr>
            <th class="justify">أَمْرًا لِمَعْرُوفٍ وَنَهْيًا مُنْكَرًا</th>
            <th class="center">14</th>
            <th class="justify">إِنِّي أُذَكِّرُكُمْ فَهَلَّا ذَاكِرًا</th>
        </tr>
        <tr>
            <th class="justify">نَعَمَ الْفَتَى مَنْ هُوَ بِسُنَّةِ أَحْمَدَ</th>
            <th class="center">15</th>
            <th class="justify">مُتَمَسِّكٌ وَعَلَى التَّخَاذُلِ صَابِرًا</th>
        </tr>
        <tr>
            <th class="justify">فَاللَّهَ نَسْأَلُهُ الثَّبَاتَ عَلَى الْهُدَى</th>
            <th class="center">16</th>
            <th class="justify">وَالدِّينِ حَتَّى مَا نَمُوتَ وَنُقْبَرَ</th>
        </tr>
        <tr>
            <th class="justify">ثُمَّ الصَّلَاةَ عَلَى النَّبِيِّ مُحَمَّدٍ</th>
            <th class="center">17</th>
            <th class="justify">وَسَلَامَهُ مَا لَاحَ لَيْلٌ مُقْمِرًا</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="الاستلقاء.php"><span>&#8678;</span>والله مستلق على عرش له</a>
        <a class="active" href="النووي.php">يا من تحبون النواوي الكافرا</a>
        <a href="الطمع.php">دون ابن آدم ليس يشبعه سوى<span>&#8680;</span></a>
    </div>
</body>

</html>