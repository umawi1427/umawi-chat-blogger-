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
            <th class="justify">بَدَأْتُ بِحَمْدِ اللهِ وَالشُّكْرِ سَرْمَدَا </th>
            <th class="center">1</th>
            <th class="justify">وَسَلَّمْتُ تَسْلِيْمَاً عَلَى خَيْرِ مَنْ هَدَى</th>
        </tr>
        <tr>
            <th class="justify">وَءَالٍ وَّأَصْحَابٍ وأَتْبَاعِ صَحْبهِ</th>
            <th class="center">2</th>
            <th class="justify">وَصَلِّ عَلَيْهِمْ كُلَّمَا قَطَر النَّدَى</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُ فَقَدْ قَالَ النَّبِيُّ سَتَفْتَرِقْ</th>
            <th class="center">3</th>
            <th class="justify">ذِي الُامَّةُ وَالنَّاجُوْنَ هُمْ مَّنْ بِهِ اقْتَدَى</th>
        </tr>
        <tr>
            <th class="justify">وَسَبْعُوْنَ مِنْ بَعْدِ الثَّلَاثَةِ عَدُّهَا</th>
            <th class="center">4</th>
            <th class="justify">وَكُلُّهُمُۥ فِي النَّارِ فَاسْمَعْ لِتَرْشُدَا</th>
        </tr>
        <th class="justify">سِوَى مَنْ هَدَى اللهُ الْعَظِيْمُ بِفَضْلِهِ</th>
        <th class="center">5</th>
        <th class="justify">مِنَ النَّاسِ أَتْبَاعَاً لِّسُنَّةِ أَحْمَدَا</th>
        </tr>
        <tr>
            <th class="justify">أَلَا فَاتَّبِعْهُۥ وَاتَّبِعْ مَا أتَى وَمِنْ</th>
            <th class="center">6</th>
            <th class="justify">أَقَاوِيْلِ أَهْلِ الزَّيْغِ كُنْ مُّتَجَرِّدَا</th>
        </tr>
        <tr>
            <th class="justify">تَفُزْ بِنَعِيْمِ اللهِ وَالْفَضْلِ عِنْدَهُ</th>
            <th class="center">7</th>
            <th class="justify">بِجَنَّاتِ فِرْدَوْسٍ وَّعَدْنٍ لِّتَخْلُدَا</th>
        </tr>
        <tr>
            <th class="justify">وَأَذْكُرُ مِنْ تِلْكَ الْمَذَاهِبِ جُمْلةً</th>
            <th class="center">8</th>
            <th class="justify">فَأسْألُ رَبِّيْ جَعْلَ سَعْيِيْ مُسَدَّدَا</th>
        </tr>
        <tr>
            <th class="justify">فَأَوَّلُهُمْ فِي الذِّكْرِ مَنْ كَانَ رَافِضَاً</th>
            <th class="center">9</th>
            <th class="justify">لِأَمْرٍ لِّأَتْبَاعِ النَّبِيْ وَتَمَرَّدَا</th>
        </tr>
        <tr>
            <th class="justify">وَخَيْرُهُمُۥ مَنْ كَانَ فِي الْغَارِ بَعْدَهُ</th>
            <th class="center">10</th>
            <th class="justify">أَلَا عُمَرٌ مَّنْ فَرَّقَ الشَّرَّ وَالْهُدَى</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدَهُمَا عُثْمَانُ ثالثِهمْ غدا</th>
            <th class="center">11</th>
            <th class="justify">وَمَنْ قَالَ غَيْرَ الْقَوْلِ لَمْ يَتَسَدَّدَا</th>
        </tr>
        <tr>
            <th class="justify">فَمَنْ سَبَّهُمْ أَوْ سَبَّ غَيْرَهُمُۥ مِنَ الصْـ</th>
            <th class="center">12</th>
            <th class="justify">صَحَابَةِ فَالْعَنْهُۥ وَلَا تَتَرَدَّدَا</th>
        </tr>
        <tr>
            <th class="justify">فَإِنَّهُمُ الْأَخْيَارُ، حَتَّى لَوَ انْفَقَ امْـ</th>
            <th class="center">13</th>
            <th class="justify">ـرُؤٌ ذَهَبَاً فِيْ حَجْمِ أُحْدٍ ذَهَبْ سُدَى</th>
        </tr>
        <tr>
            <th class="justify">أَمَامَهُمُۥ فَاللهَ رَبِّيَ سَائلٌ</th>
            <th class="center">14</th>
            <th class="justify">نَكُوْنَ مَعَ الصَّحْبِ الْكِرَامِ وَنَسْعَدَا</th>
        </tr>
        <tr>
            <th class="justify">وَبعدَهمُۥ مَنْ أنكر القَدَرَ الَّذِيْ</th>
            <th class="center">15</th>
            <th class="justify">علينا به الإيمان قد وَجَبَ اعْدُدَا</th>
        </tr>
        <tr>
            <th class="justify">مع اللهِ والرسْلِ الكِرَامِ وكُتْبِهِمْ</th>
            <th class="center">16</th>
            <th class="justify">مَلَائِكَةٌ في قَولِ مَن لَمْ يُفَنَّدَا</th>
        </tr>
        <tr>
            <th class="justify">وسادسهم باليوم الَاخِرِ بَعْدَهُم</th>
            <th class="center">17</th>
            <th class="justify">أشَاعِرَةٌ مَّنْ كان للحَقِّ جَاحِدَا</th>
        </tr>
        <tr>
            <th class="justify">وفَضَّلَ عَقْلَاً فَوقَ نَقلٍ لأنَّه</th>
            <th class="center">18</th>
            <th class="justify">خَسِيْسٌ وَّعَنْ دين الإلهِ تَجَرَّدَا</th>
        </tr>
        <tr>
            <th class="justify">وهُم مُنْكِرُو فَوْقِيَّةِ اللهِ مَعْ صِفا</th>
            <th class="center">19</th>
            <th class="justify">تِهِ فَانْبُذَنْ أَقْوَالَ مَنْ كان أبْلَدَا</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُ فَأصْحَابُ اعْتِزَالٍ مَّنَ انْكَرُوا</th>
            <th class="center">20</th>
            <th class="justify">لِمَنْ أَسْلَمُوا أَنْ هُمْ يَرَوا رَبَّهُم غَدَا</th>
        </tr>
        <tr>
            <th class="justify">وَلَكِنَّنا إِنْ شاء سوف نراه دُو</th>
            <th class="center">21</th>
            <th class="justify">نَ ضَيْمٍ كَمَا البَدْرُ الْمُضِيْءُ لَنَا بَدَا
            </th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُهُمُۥ فَالْخَارِجِيُّوْنَ مَنْ هُمُۥ</th>
            <th class="center">22</th>
            <th class="justify">ظكَمَا السَّهْمُ مِنْ قَوْسٍ إِذَا مَا تَبَاعَدَا</th>
        </tr>
        <tr>
            <th class="justify">مِنَ الدِّيْنِ هُمْ حتى ترى الشَّخْصَ مِنْهُمُۥ</th>
            <th class="center">23</th>
            <th class="justify">كَأَحْسَنَ مِنْ صَحْبِ النَّبيِّ وَأَعْبَدَا</th>
        </tr>
        <tr>
            <th class="justify">أَزَارِقَةٌ صُفْرٌ إِبَاضِيَّةٌ هُمُۥ</th>
            <th class="center">24</th>
            <th class="justify">وُكُلُّهُمُۥ لِلشَّرِّ قَدْ كَان مَوْرِدَا</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدَهُمُۥ جَهْمِيَّةُ الْكُفْرِ مَنْ هُمُۥ</th>
            <th class="center">25</th>
            <th class="justify">على دين مَنْ هَادُوا مِنَ الْكُفْرِ والرَّدَى</th>
        </tr>
        <tr>
            <th class="justify">كَبِشْرٍ وَفُوْطِيٍّ وَجَعْدِ بْنِ دِرْهَمٍ</th>
            <th class="center">26</th>
            <th class="justify">وَكانوا مِنِ ابْلِيْسٍ أَشَرَّ وَأَعْنَدَا</th>
        </tr>
        <tr>
            <th class="justify">فقالوا بِأَنَّ اللهَ في كُلِّ مَوْضِعٍ</th>
            <th class="center">27</th>
            <th class="justify">أَلَا جَلَّ عَنْ أَقْوَالِهِمْ وَتَمَجَّدَا</th>
        </tr>
        <tr>
            <th class="justify">وبَعْدُ الْحلُوْلِيُّوْنَ مَنْ قال أَنَّنَا</th>
            <th class="center">28</th>
            <th class="justify">نَكُوْنُ مَع الرحْمَنِ جِسْمَاً مُّوَحَّدَا</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدَهُمُۥ جَبْرِيَّةٌ سَيَّرُوا الْقَدَرْ</th>
            <th class="center">29</th>
            <th class="justify">وَالِارْجَاءٌ لِلْحُكَّامِ قَدْ كَان مَعْضِدَا</th>
        </tr>
        <tr>
            <th class="justify">وَمُتَّكَأً قالوا عَنِ الْمَرْءِ أَنَّه</th>
            <th class="center">30</th>
            <th class="justify">يَصِيْرُ لِجَنَّاتٍ إِذَا مَا تَشَهَّدَا</th>
        </tr>
        <tr>
            <th class="justify">بِدُوْنِ صلاة أو صيام وَّحَجَّةٍ</th>
            <th class="center">31</th>
            <th class="justify">بِشَيْءٍ مِّنَ الْأعْمال لَمْ يَتَزَوَّدَا</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدَهُمُۥ مَنْ قَال أَنَّ كَلامَهُ</th>
            <th class="center">32</th>
            <th class="justify">لَمَخْلُوقٌ اَوْ مَنْ قال لا أَعْلَمُ الْهُدَى</th>
        </tr>
        <tr>
            <th class="justify">أَمَخْلُوْقٌ الْقُرْءَانُ أَمْ ليس مُحْدَثَاً</th>
            <th class="center">33</th>
            <th class="justify">وَمَنْ قَالَ خَلْقَ اللَفْظِ فَانْبُذْهُ وَارْدُدَا</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُ فَمَنْ قَدْ قَال أَنَّ جَهَنَّمَاً</th>
            <th class="center">34</th>
            <th class="justify">سَتَفْنَى مَعَ الْجَنَّاتِ لَيْسَ مُؤَيَّدَا</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُ فَشَرُّ الناسِ إِسْمَاعِلِيَّةٌ</th>
            <th class="center">35</th>
            <th class="justify">قَرَامِطَةٌ وَّالشَّرُّ فيهم تَوَاجَدَا</th>
        </tr>
        <tr>
            <th class="justify">وَصُوْفِيَّةٌ أَوْ رَاقِصُوْنَ كَفِعْلِهِمْ</th>
            <th class="center">36</th>
            <th class="justify">يَهُزُّون في ذِكْرٍ كَمَا الغُصْنُ مُيِّدَا</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُ مَتُوْرِيْدِيَّةٌ ثُمَّ مُنْكِرٌ</th>
            <th class="center">37</th>
            <th class="justify">عذاباً بِقَبْرٍ أَو شفاعةَ أَحْمَدَا</th>
        </tr>
        <tr>
            <th class="justify">وَمَنْ أَنْكَرَ الْمِيْزَانَ أَو قال إِنَّمَا الصْـ</th>
            <th class="center">38</th>
            <th class="justify">صِرَاطُ لَمَعْدُوْمٌ فَرَأْيٌ تَبَدَّدَا</th>
        </tr>
        <tr>
            <th class="justify">وبَعْدُ فَمَنْ قَدْ قَال أَنَّ كَلامَهُ</th>
            <th class="center">39</th>
            <th class="justify">نَوَاصِبُ فَاتْرُكْهُمْ وَحَيَّ عَلَى الْهُدَى</th>
        </tr>
        <tr>
            <th class="justify">ولا تنس أهل الرأي شر وبدعة</th>
            <th class="center">40</th>
            <th class="justify">ورأسهم النعمان لم يرزق الهدى</th>
        </tr>
        <tr>
            <th class="justify">وَأَخْتِمُ قَوْلِيْ بِالْمَدَاخِلَةِ الْعِدَا</th>
            <th class="center">41</th>
            <th class="justify">وَبَعْدُ صلاة اللهِ دَوْمَاً وَّسَرْمَدَا</th>
        </tr>
        <tr>
            <th class="justify">على سَيِّدِ الرُّسْلِ الْكِرَامِ وَصَحْبِهِ</th>
            <th class="center">42</th>
            <th class="justify">وَأَتْباعِهِ الْأَخْيَارِ مَا قَطَرَ النَّدَى</th>
        </tr>
        <tr>
            <th class="justify">وَنَسْأَلُ رَبِّيْ أَنْ نَّصِيْرَ لِجَنَّةٍ</th>
            <th class="center">43</th>
            <th class="justify">مَعَ الرُّسْلِ مَعْ صَحْبِ النَّبِيِّ وَنَخْلُدَا</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="مصيبة.php"><span>&#8678;</span>إذا ما أصاب المرء أي مصيبة</a>
        <a class="active" href="الفرق.php">بدأت ببسم الله والشكر سرمدا</a>
        <a href="poems.php">بدأت ببسم الله في النظم والشكر<span>&#8680;</span></a>
    </div>
</body>

</html>