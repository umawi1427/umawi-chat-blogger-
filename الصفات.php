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
            <th class="justify">الحمدُ للَّهِ العظيم الواحد</th>
            <th class="center">1</th>
            <th class="justify">ثُمَّ صَلاتهُ على محمدِ</th>
        </tr>
        <tr>
            <th class="justify">نَبِيِّنَا وءالِهِ وَصَحْبِهِ</th>
            <th class="center">2</th>
            <th class="justify">وَحِزْبِهِ وتابِعِيْ سُنَّتِهِ</th>
        </tr>
        <tr>
            <th class="justify">وبَعْدُ هذا النظمُ في العقيدةِ</th>
            <th class="center">3</th>
            <th class="justify">بابِ صِفاتِ رَبِّنا المجِيْدَةِ</th>
        </tr>
        <tr>
            <th class="justify">مُوَافِقَ السُّنَّةِ وَالْكِتَابِ</th>
            <th class="center">4</th>
            <th class="justify">فِيْ شَرْحِيَ الْمُوْضِحْ لِهَذَ الْبابِ</th>
        </tr>
        <tr>
            <th class="justify">من دُونِ بِدْعٍ قال ذُو الرِّسَالةْ</th>
            <th class="center">5</th>
            <th class="justify">بِأَنَّ كُلَّ بِدْعَةٍ ضَلالَةْ</th>
        </tr>
        <tr>
            <th class="justify">فَدَعْكَ مِنْ ذِي المُحْدَثَاتِ واتَّبِعْ</th>
            <th class="center">6</th>
            <th class="justify">نَهْجَ النَّبِيْ وصَحْبِهِ لا تَبْتَدِعْ</th>
        </tr>
        <tr>
            <th class="justify">وفي الحديث تَفْتَرِقْ ذي الأُمَّةُ</th>
            <th class="center">7</th>
            <th class="justify">سبعين فِرْقَةً وَّقُلْ ثَلاثَةُ</th>
        </tr>
        <tr>
            <th class="justify">وكلهم في النار إلا فرقَةُ</th>
            <th class="center">8</th>
            <th class="justify">مَنْ هُم على ما كان والصَّحابَةُ</th>
        </tr>
        <tr>
            <th class="justify">وجاء أيضا أَنْ عليكمْ الاقْتِفَا</th>
            <th class="center">9</th>
            <th class="justify">بِسُنَّتِي والرَّاشدين الْخُلَفَا</th>
        </tr>
        <tr>
            <th class="justify">فَفِعُلهُمْ قُلْ سنة مُتَّبَعَةْ</th>
            <th class="center">10</th>
            <th class="justify">منهم أبو بكرٍ وَّعُثْمَانُ مَعَهْ</th>
        </tr>
        <tr>
            <th class="justify">فَفِعْلُ عثْمَانَ فَلَيْسَ بِدْعَةْ</th>
            <th class="center">11</th>
            <th class="justify">أَوَّلْ أَذانٍ فِيْ صلاة الجُمْعَةْ</th>
        </tr>
        <tr>
            <th class="justify">والْفِرَقُ التي ذكرنا كافِرَةْ</th>
            <th class="center">12</th>
            <th class="justify">أو تَبْتَدِعْ كَفِرْقَةِ الأَشَاعِرَةْ</th>
        </tr>
        <tr>
            <th class="justify">وَنُثْبِتُ الصِّفَاتِ لِلَّهِ كَمَا</th>
            <th class="center">13</th>
            <th class="justify">أثْبَتَهَا لِنَفْسِهِ وَكُلُّ مَا</th>
        </tr>
        <tr>
            <th class="justify">قَدْ جاء في السنةِ قُلْ نُثْبِتُهُ</th>
            <th class="center">14</th>
            <th class="justify">لَوْ كَانَ ءَاحَاداً فَلا نَرُدُّهُ</th>
        </tr>
        <tr>
            <th class="justify">مِنْ دُوْنِ تَكْيِيْفٍ وَّلا تَمْثِيْلٍ</th>
            <th class="center">15</th>
            <th class="justify">وَدُوْنِ تَحْرِيْفٍ وَّلا تَعْطِيْلِ</th>
        </tr>
        <tr>
            <th class="justify">نُمِرُّهَا مع كَيْفَ مَعَ تَأْوِيْلِ</th>
            <th class="center">16</th>
            <th class="justify">فِي السُّنَّةِ الْغَرَّاءِ والتَّنْزِيْلِ</th>
        </tr>
        <tr>
            <th class="justify">فَمِنْ صِفاته الكَلام وَالبَصَرْ</th>
            <th class="center">17</th>
            <th class="justify">الِاتْيَانُ وَالْمَجِيْءُ كُلٌّ مُّعْتَبَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَالسمع والقُدْرَةُ والإِرَادةُ</th>
            <th class="center">18</th>
            <th class="justify">والعينُ والكَفُّ يَدٌ وَّقَبْضَةُ</th>
        </tr>
        <tr>
            <th class="justify">والقَدَمُ السَّاقُ وعِلْمٌ وَّالْعُلُوّْ</th>
            <th class="center">19</th>
            <th class="justify">والاسْتِوَاءُ فَوقَ عَرْشٍ وَّالدُّنُوّْ</th>
        </tr>
        <tr>
            <th class="justify">وَالرُّوْحُ وَالنَّفْسُ مَعَ الْجُلُوْسِ</th>
            <th class="center">20</th>
            <th class="justify">سُبْحَانَ رَبِّيَ الْعَلِي الْقُدُّوْسِ</th>
        </tr>
        <tr>
            <th class="justify">وَالضَّحِكُ الْقُرْبُ مَعَ النُّزُوْلِ</th>
            <th class="center">21</th>
            <th class="justify">وَكَيْفُهَا لَيْسَ مِنَ الْمَعْقُوْلِ</th>
        </tr>
        <tr>
            <th class="justify">فهذه بعضٌ من الصِّفاتِ</th>
            <th class="center">22</th>
            <th class="justify">وَإِنَّها ليست بِمَخْلُوْقَاتِ</th>
        </tr>
        <tr>
            <th class="justify">فَنَحْمَدُ الله على الإسلامِ</th>
            <th class="center">23</th>
            <th class="justify">والحمد لِلَّهِ مَعَ الْخِتَامِ</th>
        </tr>

    </table>
    <div class="pagination">
        <a href="البدع.php"><span>&#8678;</span>أبدا في نظمي بحمد اللَّهِ</a>
        <a class="active" href="الصفات.php">الحمد لله العظيم الواحد</a>
        <a href="الاستلقاء.php">والله مستلق على عرش له<span>&#8680;</span></a>
    </div>
</body>

</html>