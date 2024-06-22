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
            <th class="justify">أَيَا وَيْلَ أَرْضِ الشَّامِ مَاذَا أَصَابَهَا</th>
            <th class="center">1</th>
            <th class="justify">وَكَانَتْ دِيَارَ الدِّيْنِ وَالْخَيْرُ زَاهِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَكَانَ بَنُوْ مَرْوَانَ خَيْرَ أَئِمَّةٍ</th>
            <th class="center">2</th>
            <th class="justify">يَرُصُّوْنَ فِيْهَا كُلَّ مَنْ قَدْ يُكَابِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَسَادُوْا قُرَيْشًا بِالتُّقَى وَتَدَيُّنًا</th>
            <th class="center">3</th>
            <th class="justify">وَحُكْمًا لَهُ تَهْفُو الْعُيُوْنُ النَّوَاظِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَجَاءَ صَلَاحُ الدِّيْنِ يُوْسُفُ مِنْهُمُ</th>
            <th class="center">4</th>
            <th class="justify">فَمَا الْحُكْمُ إِلَّا عَنْ أُمَيَّةَ صَادِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَأَرْجَعَ حُكْمَ الشَّامِ لِلدِّيْنِ وَالْهُدَى</th>
            <th class="center">5</th>
            <th class="justify">وَكَانَ بِهَا بِالْعَدْلِ قَاضٍ وَآمِرُ</th>
        </tr>
        <tr>
            <th class="justify">تَبَدَّلَتِ الْأَحْوَالُ عَمَّا جَرَى لَهُمْ</th>
            <th class="center">6</th>
            <th class="justify">فَلَا الْعَدْلُ مَوْجُوْدٌ وَلَا الْخَيْرُ وَافِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَجَاءَ طَوَاغِيْتٌ يُرِيْدُوْنَ حُكْمَهَا</th>
            <th class="center">7</th>
            <th class="justify">فَهَذَا يَهُوْدِيٌّ وَذَلِكَ كَافِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَذَلِكَ مِنْ دِيْنِ النَّصَارَى أَتَىْ لَهَا</th>
            <th class="center">8</th>
            <th class="justify">فَلَا الدِّيْنُ مَعْرُوْفٌ بَلِ الْحُكْمُ جَائِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَسَيْنَاءُ أَرْضُ الطُّوْرِ يَحْكُمُ أَرْضَهَا</th>
            <th class="center">9</th>
            <th class="justify">كَفُوْرٌ مِنَ الرَّحْمَنِ لَيْسَ يُحَاذِرُ</th>
        </tr>
        <tr>
            <th class="justify">يُرِيْدُوْنَ غَصْبَ الْمُلْكِ عَنْ كُلِّ مُسْلِمٍ</th>
            <th class="center">10</th>
            <th class="justify">فَبِئْسَ بَنُوْ كُفْرٍ وَبِئْسَ الْعَسَاكِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَلَمْ يَسْلَمَنْ مِنْ بَطْشِهِمْ وَمَكِيْدِهِمْ</th>
            <th class="center">11</th>
            <th class="justify">وَكُفْرِهِمُ فِي الْأَرْضِ بَادٍ وَحَاضِرُ</th>
        </tr>
        <tr>
            <th class="justify">تَرَى أَهْلَ رَفْضٍ فِيْ قُرَى الشَّامِ كُفْرُهُمْ</th>
            <th class="center">12</th>
            <th class="justify">لَمُنْتَشِرٌ تَدْعُوْ إِلَيْهِ الْمَنَابِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَأَمَّا فِلِسْطِيْنٌ فَيَا وَيْلَ حَالِهَا</th>
            <th class="center">13</th>
            <th class="justify">لِقَوْم ٍيَهُوْدٍ قَدْ أَتَتْهَا الْمَصَائِرُ</th>
        </tr>
        <tr>
            <th class="justify">فَبِئْسَ وِدَادُ الْقَوْمِ أَوْ مَنْ يُحِبُّهُمْ</th>
            <th class="center">14</th>
            <th class="justify">وَمَنْ يَتَوَلَّى الْقَوْمَ أَوْ مَنْ يُعَاشِرُ</th>
        </tr>
        <tr>
            <th class="justify">فَإِنَّ دِمَاءَ الْمُسْلِمِيْنَ مُرَاقَةٌ</th>
            <th class="center">15</th>
            <th class="justify">وَهَذَا لِكُلِّ الْمُسْلِمِيْنَ لَظَاهِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَقَدْ نَكَّلُوْا فِيْهِمْ وَقَدْ عَذَّبُوْهُمُ</th>
            <th class="center">16</th>
            <th class="justify">كَذَاكَ أُقِيْمَ الذَّبْحُ ثُمَّ الْمَجَازِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَمَا لَهُمُ مُؤْوٍ سِوَى اللهِ رَبِّنَا</th>
            <th class="center">17</th>
            <th class="justify">وَلَا رَازِقٌ غَيْرَ الْإِلَهِ وَنَاصِرُ</th>
        </tr>
        <tr>
            <th class="justify">فَأَسْأَلُهُ نَصْرًا لَهُمْ بِجُنُوْدِهِ</th>
            <th class="center">18</th>
            <th class="justify">فَإِنَّكَ يَا رَبِّيْ عَلَى الْكُفْرِ قَادِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَأَسْأَلُهُ أَنْ يُرْسِلَ الرِّيْحَ صَرْصَرًا</th>
            <th class="center">19</th>
            <th class="justify">عَلَى أَهْلِ كُفْرٍ كَيْ تُذَاقَ الْمَرَائِرُ</th>
        </tr>
        <tr>
            <th class="justify">وَأَنْ يُوْقِعَ الطَّاغُوْتَ مِنْهُمْ بِسَيْفِنَا</th>
            <th class="center">20</th>
            <th class="justify">عَلَى الرَّغْمِ مِنْهُ وَهْوَ بِالذُّلِّ صَاغِرُ</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="poem1.php"><span>&#8678;</span>الحمد لله العظيم الواحد</a>
        <a class="active" href="الشام.php">أيا ويل أرض الشام ماذا أصابها</a>
        <a href="وليد.php">وليد الخبث من شر البرايا<span>&#8680;</span></a>
    </div>
</body>

</html>