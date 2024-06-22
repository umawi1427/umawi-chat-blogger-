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
            <th class="justify">أبدأ في نظمي بحمد الله</th>
            <th class="center">1</th>
            <th class="justify">مصليا علي النبيْ الأواه</th>
        </tr>
        <tr>
            <th class="justify">والآل والأصحاب والأتباع</th>
            <th class="center">2</th>
            <th class="justify">من تَبِعُوْهُمُۥ بِلا ابْتِدَاعِ</th>
        </tr>
        <tr>
            <th class="justify">ففاز عند الله بالجنان</th>
            <th class="center">3</th>
            <th class="justify">لسيره على خطا العدناني</th>
        </tr>
        <tr>
            <th class="justify">فدعك ممن تبع الأهواءَ</th>
            <th class="center">4</th>
            <th class="justify">في دينه بالابتداع جاءَ</th>
        </tr>
        <tr>
            <th class="justify">فسنةَّ النبيِّ إني مُتَّبِعْ</th>
            <th class="center">5</th>
            <th class="justify">وإنني منهم براءٌ فاستمعْ</th>
        </tr>
        <tr>
            <th class="justify">فمنهم الرازيُّ وَالسيوطِيْ</th>
            <th class="center">6</th>
            <th class="justify">مُزَيِّنٌ لِّفِعْل قَومِ لُوطِ</th>
        </tr>
        <tr>
            <th class="justify">ثم الغَزَالِيُّ أبٌ لِّحَامِدِ</th>
            <th class="center">7</th>
            <th class="justify">ثُمَّ الجُوَيْنِيُّ بِلا تَرَدُّدِ</th>
        </tr>
        <tr>
            <th class="justify">وَدَعْ كَلَام الباقِلَانيْ الأَشْعَرِيْ</th>
            <th class="center">8</th>
            <th class="justify">وَدَعْكَ من كلام شيخ الأزهر</th>
        </tr>
        <tr>
            <th class="justify">وبعده الحَلاجُ فِي التَّوَالِيْ</th>
            <th class="center">9</th>
            <th class="justify">وابنُ العَرَابِي الكَافِرِ الدَّجَّالِ</th>
        </tr>
        <tr>
            <th class="justify">ثُمَّ جَلالُ كَفْرِهِ الرُّوْمِيُّ</th>
            <th class="center">10</th>
            <th class="justify">وَبَعْدَهُ ابْنُ الْفَارِضِ الشَّقِيُّ</th>
        </tr>
        <tr>
            <th class="justify">وَالْعِزُّ فَالسُّلْطَاُن وَالرَّقَّاصُ</th>
            <th class="center">11</th>
            <th class="justify">وَشَمْسُ تَبْرِيْزٍ هُوَ الْخَرَّاصُ</th>
        </tr>
        <tr>
            <th class="justify">ثُمَّ ابْنُ فَوْرَكٍ مَّعَ الزَّمَخْشَرِي</th>
            <th class="center">12</th>
            <th class="justify">وَابْنُ عطا اللَّهِ هُوَ السَّكَنْدَرِيْ</th>
        </tr>
        <tr>
            <th class="justify">والكَوْثَرِيُّ بَعْدَهُ الْآلُوْسِيْ</th>
            <th class="center">13</th>
            <th class="justify">ثُمَّ ابْنُ سِيْنَا والنَّصِيْرُ الطُّوْسِيْ</th>
        </tr>
        <tr>
            <th class="justify">ثُمَّ ابْنُ رُشْدٍ بَعْدَهُ الْفَارَابِيْ</th>
            <th class="center">14</th>
            <th class="justify">أَتْبَاعُ آرِسْطُو أُولِي التَّبَابِ</th>
        </tr>
        <tr>
            <th class="justify">وَوَاصِلٌ وَّبِشْرٌ الْمَرِّيْسِيْ</th>
            <th class="center">15</th>
            <th class="justify">وَابْنُ أَبِيْ دُؤَادٍ الْخَسِيْسِ</th>
        </tr>
        <tr>
            <th class="justify">فهؤلاء بَعْضُهُمْ ذَكَرْتُهُمْ</th>
            <th class="center">16</th>
            <th class="justify">فَاحْذَرْهُمُۥ لا تَقْرَبَنْ طَرِيْقَهُمْ</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُ أُوصِيْكَ بِأَنْ تَتَّبِعَا</th>
            <th class="center">17</th>
            <th class="justify">نَهْجَ نَبِيِّنَا وَمَن لَّهُۥ رَعَا</th>
        </tr>
        <tr>
            <th class="justify">كَالحْسَنِ الْبَصْرِيْ الإِمَامِ التَّابِعِيْ</th>
            <th class="center">18</th>
            <th class="justify">وَمَالِكٍ وَأَحْمَدٍ وَّالشَّافِعِيْ</th>
        </tr>
        <tr>
            <th class="justify">مُجَاهِدٌ مُّقَاتِلٌ مَّعْ مُسْلِمِ</th>
            <th class="center">19</th>
            <th class="justify">عِكْرِمَةٌ والتِّرْمِذِيْ والدَّارِمِيْ</th>
        </tr>
        <tr>
            <th class="justify">ثُمَّ النَّسَائِيُّ مَعَ الْبُخَارِيْ</th>
            <th class="center">20</th>
            <th class="justify">وَالطَّبَرِيُّ صَاحِبُ الآثَارِ</th>
        </tr>
        <tr>
            <th class="justify">وَالْبَرْبَهَارِيْ مَعَهُۥ وَكِيْعُ</th>
            <th class="center">21</th>
            <th class="justify">وَابْنُ مَعِيْنِ الْعَالِمُ الضَّلِيْعُ</th>
        </tr>
        <tr>
            <th class="justify">ثُمَّ ابْنُ رَاهُوْيَهْ وَعَبْدُ اللَّهِ</th>
            <th class="center">22</th>
            <th class="justify">نَجْلُ ابْنِ حَنْبَلَ التَّقِي الأَوَّاهِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللالَكَائِيْ حَرْبٌ الكِرْمَانِيْ</th>
            <th class="center">23</th>
            <th class="justify">وَالْبَغَوِيْ مِنْ بَعْدِهِ سُفْيَانِ</th>
        </tr>
        <tr>
            <th class="justify">كِلَاهُمَا ثُمَّ أَبُو الفِدَاءِ</th>
            <th class="center">24</th>
            <th class="justify">ابنُ كَثِيْرِ الْحَبْرُ ذُو الضِّيَاءِ</th>
        </tr>
        <tr>
            <th class="justify">والذَّهَبِيُّ مَعَ أَبِيْ دَاوُۥدِ</th>
            <th class="center">25</th>
            <th class="justify">مَعَ ابْنِهِ ذَوِي التُّقَى وَالْجُوْدِ</th>
        </tr>
        <tr>
            <th class="justify">ثُمُّ ابْنُ مَاجَةَ الإِمَامِ الْعَالِمِ</th>
            <th class="center">26</th>
            <th class="justify">ثُمَّ ابْنُ تَيْمِيَّةَ وَابْنُ الْقَيِّمِ</th>
        </tr>
        <tr>
            <th class="justify">وَمَعْهُمُ السَّعْدِيُّ ذُو التَّفْسِيْرِ</th>
            <th class="center">27</th>
            <th class="justify">وَالصَّنَعَانِيُّ أَيِ الأَمِيْرِ</th>
        </tr>
        <tr>
            <th class="justify">ثُمَّ ابْنُ بَازٍ بَعْدَهُ مُحَمَّدُ</th>
            <th class="center">28</th>
            <th class="justify">الْعَالمُ الكبيرُ والْمُجَدِّدُ</th>
        </tr>
        <tr>
            <th class="justify">وَابْنُ عُثَيْمِيْنَ مَعَ الْفَوْزَانِ</th>
            <th class="center">29</th>
            <th class="justify">أَيْ صَالِحٌ لَّلْعَالِمُ الرَّبَّانِيْ</th>
        </tr>
        <tr>
            <th class="justify">فَهَاكَ جُمْلَةً مِّنَ الأَئِمَّةْ</th>
            <th class="center">30</th>
            <th class="justify">هم السَّوَادُ الاعْظَمُۥ فِي الُامَّة</th>
        </tr>
        <tr>
            <th class="justify">وَالْحَمْدُ لِلَّهِ عَلَى تَمَامِهَا</th>
            <th class="center">31</th>
            <th class="justify">وَأَسْأَلُ الْغُفْرَانُ فِيْ خِتَامِهَا</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="نبذ الأشاعرة.php"><span>&#8678;</span>لا تسمعن للأشعرية قولهم</a>
        <a class="active" href="البدع.php">أبدأ في نظمي بحمد الله</a>
        <a href="الصفات.php">الحمد لله العظيم الواحد<span>&#8680;</span></a>
    </div>
</body>

</html>