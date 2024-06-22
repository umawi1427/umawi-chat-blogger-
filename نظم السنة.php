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
            <th class="justify">أَبْدَا بِحَمْدِ اللهِ ثُمَّ صَلَاتُهُ</th>
            <th class="center">1</th>
            <th class="justify">تَغْشَى النَّبِيَّ مُعَلِّمَ الإنسان</th>
        </tr>

        <tr>
            <th class="justify">إِنِّيْ أَرَى نَاسًا قَدِ افْتُتِنُوْا بِمَا</th>
            <th class="center">2</th>
            <th class="justify">سَطَرُوْهُ بَعْدَ أَوَائِلِ الْأَزْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ غيرِ قولِ مُحَمَّدٍّ وصِحَابِهِ</th>
            <th class="center">3</th>
            <th class="justify">وَالتَّابِعِيْنَ لَهُمْ عَلَى الْإِحْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">خَيْرُ الْقُرُوْنِ لَقَرْنُ أَحْمَدٍ الَّذِيْ</th>
            <th class="center">4</th>
            <th class="justify">فِيْهِ الْهُدَى بِالْوَعْظِ وَالتِّبْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">ثُمَّ الَّذِيْنَ يَلُوْنَهُمْ هُمْ خيرُ هَـ</th>
            <th class="center">5</th>
            <th class="justify">ـذِي الْأُمَّةِ الغَرَّاءِ فِي الْمِيْزَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَعَلَى اخْتِلَافٍ فِيْ الْحَدِيْثِ وَبَعْدَهُمْ</th>
            <th class="center">6</th>
            <th class="justify">فَهُمُ الْخِيَارُ لَنَا مِنَ الْأَعْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَاتْرُكْ أَقَاوِيْلَ الَّذينَ تَأخَّرُوْا</th>
            <th class="center">7</th>
            <th class="justify">وَارْكَنْ لِقَوْلٍ كَانَ خَيْرَ زَمَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَمِنَ الْأَوَائِلِ شَيْخُنَا وَإِمَامُنَا</th>
            <th class="center">8</th>
            <th class="justify">نَجْلُ ابْنِ حَنْبَلَ ذَلِكَ الشَّيْبَانِي</th>
        </tr>

        <tr>
            <th class="justify">وَكِتَابُهُ يَحْوِيْ مِنَ الدُّرَرِ الْكَثِيْـ</th>
            <th class="center">9</th>
            <th class="justify">ـرَ وَعِلْمُهُ فَرْضٌ عَلَى الْإِنْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَأَرَدْتُ نَظْمَ كِتَابِهِ حَتَّى يَكُوْ</th>
            <th class="center">10</th>
            <th class="justify">نَ مُيَسَّرًا لِّلْحِفْظِ وَالْإِتْقَانِ</th>
        </tr>

        <!-- ... (Continue for the remaining lines) ... -->

        <tr>
            <th class="justify">إِنَّ الْقُرَانَ لَعِلْمُ رَبِّيْ جَلَّ عَنْ</th>
            <th class="center">12</th>
            <th class="justify">أَقْوَالِ حِزْبِ الْكُفْرِ وَالشَّيْطَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَقَدْ حَوَى أسماءَهُ وصِفَاتِهِ</th>
            <th class="center">13</th>
            <th class="justify">فَالْخَلْقُ فِيْهِۦ غَيْرُ ذِيْ إِمْكَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَإِذَا رَأَيْتَ المَرْءَ قَالَ بقَوْلِهِمْ</th>
            <th class="center">14</th>
            <th class="justify">فَاحْذَرْ صَلَاةً خَلْفَ ذِي الْكُفْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَإِذَا اضطُّرِرْتَ إِلَى الصَّلاة وَرَاءَهُ</th>
            <th class="center">15</th>
            <th class="justify">فَأَعِدْ صلاتك دُوْنَ مَا نُقْصَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَهُمُ الَّذِيْنَ تَجَهَّمُوْا فَاحْذَرْهُمُۥ</th>
            <th class="center">16</th>
            <th class="justify">شَرُّ البَرِيَّةِ بَلْ مِنَ الْحَيَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَا تَشْهَدَنْ إِنْ كَان قَاضٍ مِنْهُمُۥ</th>
            <th class="center">17</th>
            <th class="justify">كُنْ دَائِمًا مَعَهُمْ عَلَى الْهُجْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">ومَرِيضَهُم ووفَاتَهُم ونِسَاءَهُم</th>
            <th class="center">18</th>
            <th class="justify">فَاهْجُرْهُمُۥ بِالرُّوْحِ وَالأَبْدَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِيْرَاثَهُمْ خُذْهُ لِبَيْتِ الْمَالِ لَا</th>
            <th class="center">19</th>
            <th class="justify">تَمْسَسْهُ فَهْوَ مِنَ ابْخَسِ الْأَثْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">فإذا شَهِدْنَاهُم وعُدْنَاهُم فَكَيْـ</th>
            <th class="center">20</th>
            <th class="justify">ـفَ سَيَرْجِعُوْنَ هُمُۥ إِلَى الْإيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">قد بَارَزُوا الرَّحْمَنَ جَلَّ جَلَالُهُ</th>
            <th class="center">21</th>
            <th class="justify">فِيْ قَوْلِهِمْ ذِي الْإِثْمِ وَالْبُهْتَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَالُوْا إِلَهُكُمُۥ فَلَيْسَ بِرَبِّنَا</th>
            <th class="center">22</th>
            <th class="justify">فَمَصِيْرُهُمْ فِيْ أَسْفَلِ النِّيْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاحْفَظْ كَلَام الِامَامِ مَالِكِ فِيْهُمُۥ</th>
            <th class="center">23</th>
            <th class="justify">أَنْ يُوْجَعُوْا ضَربًا لَدَى السَّجَّانِ</th>
        </tr>

        <tr>
            <th class="justify">فَهُمُ الزَّنَادِقَةُ الْغُلَاةُ وَدَمُّهُمْ</th>
            <th class="center">24</th>
            <th class="justify">حِلٌّ لنا بِالنَّقْلِ وَالْبُرْهَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ قَالَ ذَاكَ القولَ فَهْوَ لَعَابِدٌ</th>
            <th class="center">25</th>
            <th class="justify">صَنَمًا ولَيْسَ بِعَابِدِ الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ شَكَّ فِيْ كُفْرِ الَّذِيْ قَدْ قَالَ ذَا</th>
            <th class="center">26</th>
            <th class="justify">كَ الْقَوْلَ كَفِّرْهُۥ بِغيْرِ تَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ قَالَهُ كُلُّ الْأَئِمَّةِ فِيْهِمُۥ</th>
            <th class="center">27</th>
            <th class="justify">فَاحْفَظْ كَلَامَهُمُۥ مَعَ الْإِمْعَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الْقُرَانَ كَلامُ رَبِّيْ غَيْرُ مَخْـ</th>
            <th class="center">28</th>
            <th class="justify">ـلُوقٍ لَدَيْنَا دُوْنَ مَا نُكْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَقَدْ نُهِيْنَا أَن نُمَارِيْ أَوْ نُخَا</th>
            <th class="center">29</th>
            <th class="justify">صِمَ أَهْلَ جَهْمٍ فِيْ عُرَى الْقُرْءَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَا تَأْمَنُوْا مَكْرَ الْإِلَهِ فَرُبَّمَا</th>
            <th class="center">30</th>
            <th class="justify">غَمَسُوْكُمُۥ فِي الْكُفْرِ وَالعِصْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">لا تَسْمَعُوا لَهَمُۥ فَإِنَّ حديثهم</th>
            <th class="center">31</th>
            <th class="justify">يَحْشُوْنَهُ بِالْكُفْرِ والْهَذَيَانِ</th>
        </tr>

        <tr>
            <th class="justify">كُوْنُوْا على نهج النبيِّ محمدٍ</th>
            <th class="center">32</th>
            <th class="justify">فَإِنِ اسْتَقَمْتُمْ أَنْتُمُۥ لِجَنَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَئِنْ ذَهَبْتُمْ يَمْنَةً أَوْ يَسْرَةً</th>
            <th class="center">33</th>
            <th class="justify">فَلَقَدْ ضَلَلْتُمْ مَعْ ذَوِي الْخُسْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَقَدْ تَوَاتَرَتِ الْأَحَادِيْثُ الْعُلَى</th>
            <th class="center">34</th>
            <th class="justify">أَنَّ الْقُرَانَ كَلَامُ ذِي السُّلْطَانِ</th>
        </tr>

        <tr>
            <th class="justify">ولَقَدَ رُوِيْنَا فِي الأَحَادِيثُ الصِّحَا</th>
            <th class="center">35</th>
            <th class="justify">حُ بِذَاكَ أَقْوَالًا ذَوَاتِ مَعَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ أَعْظَمِ الْقُرُوْبَاتِ أَنْ تَتَقَرَّبُوْا</th>
            <th class="center">36</th>
            <th class="justify">بِكَلَامِ رَبِّ النَّاسِ أَعْظَمِ شَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَقَدْ أَتَى الْكُفَّارُ صَاحِبَ أَحْمَدٍ</th>
            <th class="center">37</th>
            <th class="justify">أَعْنِيْ أَبَا بَكْرٍ وَذَا الرِّضْوَانِ</th>
        </tr>

        <tr>
            <th class="justify">سَأَلُوْا عَنِ الْقُرْءَانِ هَلْ هَذَا كَلَا</th>
            <th class="center">38</th>
            <th class="justify">مُ مُحَمَّدٍ أَمْ هُوْ كَلامٌ ثَانِي</th>
        </tr>

        <tr>
            <th class="justify">فأجابهُمْ لَيْسَ الْقُرَانُ كَلَامَهُ</th>
            <th class="center">39</th>
            <th class="justify">بَلْ هُوْ كَلَامُ الْوَاحِدِ الْمَنَّانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَقَدْ رُوِيْنَا أَنَّ فَضْلَ كَلَامِهِ</th>
            <th class="center">40</th>
            <th class="justify">لَكَفَضْلِ خَالِقِنَا على الإِنْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَيْسَ الْقُرَانُ بِخَالِقٍ أَبَدًا وَلَا</th>
            <th class="center">41</th>
            <th class="justify">مَخْلُوْقٌ احْفَظْهُۥ بِلَا نِسْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">هَوَ قَوْلُ رَبِّيْ آيُهُ وَحُرُوْفُهُ</th>
            <th class="center">42</th>
            <th class="justify">هُوَ عِلْمُهُ فِيْهِۦ هُدَى الْحَيْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الْقُرَانَ لَخَارِجٌ مِنْ رَبِّنَا</th>
            <th class="center">43</th>
            <th class="justify">وَإِلَيْهِ سَوْفَ يَعُوْدُ ذِي السُّبْحَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَقَدْ تَوَاتَرَتِ النُّقُوْلُ بِذَاكُمُۥ</th>
            <th class="center">44</th>
            <th class="justify">بِالنَّقْلِ عَنْ سَلَفٍ وَعَنِ الْأَحْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ قَالَ إِنَّ اللَّفْظَ بِالْقُرْءَانِ مَخْـ</th>
            <th class="center">45</th>
            <th class="justify">ـلُوْقٌ فَشَرٌّ قَالَ هَذَا الْفَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">هَذَا مقالُ الْجَهْمِ فَانْبُذْهُۥ وَلَا</th>
            <th class="center">46</th>
            <th class="justify">تَتَكَلَّمَنْ بِاللَّفْظِ فِي الْقُرْءَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ ابْنَ صَفْوَانَ اللَّعِيْنَ وَحِزْبَهُ</th>
            <th class="center">47</th>
            <th class="justify">يَتَوَارَثُوْنَ الظُّلْمَ بِالطُّغْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">قد شَكَّ فِي الإِسْلَامِ حَتَّى لَمْ يُصَلّـ</th>
            <th class="center">48</th>
            <th class="justify">لِۦ أَرْبَعِيْنَ عَلَيْهِ شَرُّ لِعَانِ</th>
        </tr>

        <tr>
            <th class="justify">قد قال أنَّ اللهَ ليسَ بِمُسْتَوٍ</th>
            <th class="center">49</th>
            <th class="justify">فَوْقَ السَّماءِ عَظِيْمَةِ الْأَرْكَانِ</th>
        </tr>

        <tr>
            <th class="justify">وأخوهُ فِيْ هَذَا الْمَقَالِ وَرَأْسُهُمْ</th>
            <th class="center">50</th>
            <th class="justify">بِشْرُ الْمَرِيْسِيْ لَيْسَ يَخْتَلِفَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانَ يُبْغِضُ خَيْرَ مَنْ وَطِئَ الثَّرَى</th>
            <th class="center">51</th>
            <th class="justify">وَالدِّيْنَ يُبْغِضُهُ بِلَا كِتْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَاللهُ يَلْعَنُهُمْ ويلعَنْ حِزْبَهُمْ</th>
            <th class="center">52</th>
            <th class="justify">فِيْ كُلِّ وَقْتِ إِقَامَةٍ وَأَذَانِ</th>
        </tr>

        <tr>
            <th class="justify">إن قُلْتَ إِنَّ اللهَ لا يَتَكَلَّمُۥ</th>
            <th class="center">53</th>
            <th class="justify">فَلَقَدْ غَدَوْتَ كَعَابِدِ الأَوْثَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَقَوْلُ جَهْمِيٍّ لَدَيْنَا زَادَ شَر</th>
            <th class="center">54</th>
            <th class="justify">رًا عَنْ يَهُوْدِيٍّ كَذَا النَّصْرَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">فَالْقَائِلُوْنَ بِخَلْقِهِ وَبِلَفْظِهِ</th>
            <th class="center">55</th>
            <th class="justify">وَالْوَاقِفُوْنَ بِهِ فَيَشْتَبِهَانِ</th>
        </tr>

        <tr>
            <th class="justify">هُمْ قَدْ أَرَادُوْا قَوْلَ جَهْمٍ نَفْسَهُ</th>
            <th class="center">56</th>
            <th class="justify">بِالْحِيْلَةِ النَّكْرَاءِ ذَاتِ هَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">فالْكُفْرُ حَلَّ عَلَيْهِمُۥ مِنْ أَجْلِ هَـ</th>
            <th class="center">57</th>
            <th class="justify">ـذَا الْقَوْلِ قَالُوْهُۥ بِلَا حُسْبَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الْمَسِيْحَ لَكِلْمَةُ اللهِ الَّتِيْ</th>
            <th class="center">58</th>
            <th class="justify">قَدْ أُلْقِيَتْ لِلْآلِ مِنْ عِمْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ مَقَالَةَ شَيْخِنَا وَإِمَامِنَا</th>
            <th class="center">59</th>
            <th class="justify">وَشُيُوْخِنَا فِيْ ذَلِكَ النُّعْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">اَلْفَارِسِيَّ أَبِيْ حَنِيْفَةَ صَاحِبَ الرْ</th>
            <th class="center">60</th>
            <th class="justify">رَأْيِ الَّذِيْ وَالْبَعْرُ يَسْتَوِيَانِ</th>
        </tr>
        <tr>
            <th class="justify">فَارْمِيْهِ فِيْ حُشٍّ إِذَا حُدِّثْتَهُ</th>
            <th class="center">61</th>
            <th class="justify">وَاسْمَعْ حديثَ مُحَمَّدِ الْعَدْنَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">قَالَ ابْنُ حَنْبَلَ إِنَّ بُغْضَ صِحَابِهِ</th>
            <th class="center">62</th>
            <th class="justify">بَلْ بُغْضُهُ يُفْضِيْ إِلَى الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الْحَدِيْثَ صَحِيْحَهُ وَضَعِيْفَهُ</th>
            <th class="center">63</th>
            <th class="justify">خَيْرٌ مِنَ الْآرَاءِ لِلْإِنْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَأَبُوْ حَنِيْفَةَ عَاشَ جَهْمِيًّا وَمَا</th>
            <th class="center">64</th>
            <th class="justify">تَ عَلَى التَّجَهُّمْ مُرْجِئَ الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالسَّيْفُ كَانَ يَرَاهُ دُوْنَ تَدَيُّنٍ</th>
            <th class="center">65</th>
            <th class="justify">مِثْلَ الْخَوَارِجَ بِئْسَ ذِي الْقَوْلَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَيَرَى الْخُرُوْجَ عَلَى الْأَئِمَّةِ إِنْ هُمُۥ</th>
            <th class="center">66</th>
            <th class="justify">جَارُوْا وَهَذَا الشَّرُّ لِلْأَوْطَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَقَدِ اسْتُتِيْبَ بِقَوْلِهِ الْكُفْرِيِّ فِيْ</th>
            <th class="center">67</th>
            <th class="justify">خَلْقِ الْقُرَانِ فَتَابَ بَعْدَ أَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَالَ ابْنُهُ أَبَتَاهُ كَيْفَ فَعَلْتَ ذَا</th>
            <th class="center">68</th>
            <th class="justify">فَأجَابَهُ قلبيْ عَلَى الْكُفْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَكِنَّنِيْ قَدْ خِفْتُ فَتْكًا بِيْ فَأَعْـ</th>
            <th class="center">69</th>
            <th class="justify">ـطيْتُ التَّقِيَّةَ كُلَّ مَنْ نَادَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">شَخْصٌ أَضَرَّ بِدِيْنِنَا بِمَقَالِهِ</th>
            <th class="center">70</th>
            <th class="justify">قَدْ كَانَ يَنْقُضُ فِيْ عُرَى الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">تَرَكَ الْحَدِيْثَ مَعَ الْأُصُوْلِ وَمُقْبِلًا</th>
            <th class="center">71</th>
            <th class="justify">نَحْوَ الْقِيَاسِ مُضَعْضَعِ الْأَرْكَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ قَالَ الَاوْزَاعِيُّ فِيْهِ بِأَنَّهُ</th>
            <th class="center">72</th>
            <th class="justify">هُوَ شَرُّ مَوْلُوْدٍ إِلَى ذِيْ الْآنِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانَ يَأْتِيْهِ الْحَدِيْثُ عَنِ النَّبِيِّ</th>
            <th class="center">73</th>
            <th class="justify">فَيُخَالِفُ الْآثَارَ بِالرَّوَغَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالسَّخْتِيَانِيْ وَابْنُ عَوْنٍ جَرَّحُوْا</th>
            <th class="center">74</th>
            <th class="justify">فِيْهِۦ أَشَدَّ الْجَرْحِ فِي الْأَعْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانَ يُفْتِي النَّاسَ فِيْ كُلِّ الْأُمُوْ</th>
            <th class="center">75</th>
            <th class="justify">رِ بِغَيْرِ مَا وَرَعٍ وَلَا بُرْهَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالْأَعْمَشُ الضَّبِيْ وَمَعْهُمْ غَيْرُهُمْ</th>
            <th class="center">76</th>
            <th class="justify">ذمُّوهُ شَرَّ الذَّمً بِالْعِرْفَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَأَبُوْ حَنِيْفَةَ عَادَ الَاعْمَشَ مَرَّةً</th>
            <th class="center">77</th>
            <th class="justify">فَأَتَى وَقَالَ مَقُوْلَةَ الْعُمْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَوْلَا مَجِيْئِيْ كَانَ فِيْهِ تَثَاقُلٌ</th>
            <th class="center">78</th>
            <th class="justify">فَإِذًا لَّعُدتُّكَ عِنْدَ كُلِّ أَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَأَجَابَهُ وَاللهِ فِيْكَ تَثَاقُلٌ</th>
            <th class="center">79</th>
            <th class="justify">حَتَّى وَأَنْتَ بَعِيْدُ يَا نُعْمَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">وَيْلٌ لَّهُ مَا كَانَ يُخْطِيْ مَرَّةً</th>
            <th class="center">80</th>
            <th class="justify">فَيُصِيْبَ حَتَّى لَوْ بِزَلِّ لِسَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاذْكُرْ مَقَالَةَ رَقْبَةٍ فِيْهِۦ وَقَوْ</th>
            <th class="center">81</th>
            <th class="justify">لَ إِمَامِنَا الثَّوْرِيَّ أَيْ سُفْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَلَقَدْ أَقَرَّ بِأَنَّهُ مُتَذَبْذِبٌ</th>
            <th class="center">82</th>
            <th class="justify">وَقَدِ اسْتُتِيْبَ اثْنَيْنِ فِيْ الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">يُفْتِيْ بِأَقْوَالِ الْيَهُوْدِ وَقَوْلُهُ</th>
            <th class="center">83</th>
            <th class="justify">مِنْ أَخْبَثِ الْأَقْوَالِ فِي الْبُلْدَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَفْتَى إِذَا مَا قَالَ شَخْصٌ أَنَّهُ</th>
            <th class="center">84</th>
            <th class="justify">لَا يَدْرِ لِلْبَيْتِ الْحَرَامِ مَكَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَوْ قَالَ لَا أَدْرِ النَّبِيُّ مُحَمَدٌ</th>
            <th class="center">85</th>
            <th class="justify">أَبِطَيْبَةٍ هُوَ كَامِلُ الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَفَمُسْلِمٌ هَذَا الَّذِيْ قَدْ قَالَ ذَا</th>
            <th class="center">86</th>
            <th class="justify">لَا وَالَّذِيْ بَرَأَ الْوَرَى وَبَرَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">فَاحْذَرْ مِنَ النَّبَطِيَّةِ انْ مَا اسْتُعْرِبُوْا</th>
            <th class="center">87</th>
            <th class="justify">فَكَلَامُهُمْ شَرٌّ مِنَ الْكُهَّانِ</th>
        </tr>

        <tr>
            <th class="justify">فَإِذَا سَمِعْتَ كَلَامَهُمْ قَدْ يَعْتَرِيْـ</th>
            <th class="center">88</th>
            <th class="justify">ـكَ جِرَابُهُمْ وَيُخِلُّ بِالْأَرْكَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَأَبُو حَنِيْفَةَ كَائِدٌ قَدْ كَادَنَا</th>
            <th class="center">89</th>
            <th class="justify">دَاءٌ عُضَالٌ نَاقِضُ الْأَدْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ جَاءَهُ رَجُلٌ فَقَالَ لَبِسْتُ فِيْ الـ</th>
            <th class="center">90</th>
            <th class="justify">ـإِحْرَامِ ذَا الْخُفَّانِ أَوْ نَعْلَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَسَرَاوِلًا فَأَجَابَهُ اذْبَحْ يَا فَتَى</th>
            <th class="center">91</th>
            <th class="justify">إِنْ قَدْ وَجَدتَّ وَلَمْ تَجِدْ سِيَّانِ</th>
        </tr>

        <tr>
            <th class="justify">يُفْتِيْ بِلَا عِلْمٍ فَقُبِّحَ شَخْصُهُ</th>
            <th class="center">92</th>
            <th class="justify">وَمَقَالُهُ مَا فِيْهِ مِنْ رُجْحَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَلَدَسُّ خَمَّارٍ بِكُلِّ الدُّوْرِ خَيْـ</th>
            <th class="center">93</th>
            <th class="justify">ـرٌ مِنْ مَقَالِ الْفَارِسِي النُّعْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَأَبُوْ حَنِيْفَةَ شَرُّهُ شَرٌّ مِّنَ السـ</th>
            <th class="center">94</th>
            <th class="justify">ـسُرَّاقِ إِذْ هُوَ سَارِقُ الْأَدْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَلَقَدْ أَجَازَ السُّكْرَ وَالْخِنْزِيْرَ وَالْـ</th>
            <th class="center">95</th>
            <th class="justify">ـكُفْرَ الصُّرَاحَ لِعَابِدٍ نَعْلَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَشَرِيْكُ عَنْهُۥ كَانَ يَحْكِيْ قَائِلًا</th>
            <th class="center">96</th>
            <th class="justify">أَبِذِكْرِهِ هَلْ تَلْتَقِيْ شَفَتَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَابْنُ الْمُبَارَكِ قَالَ عَنْهُ أَنِ اضْرِبُوْا</th>
            <th class="center">97</th>
            <th class="justify">عَمَّا يُحَدِّثُ عَنْدَ كُلِّ مَكَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَمَجَالِسُ السُّوْءِ الَّتِيْ فِيْهَا فَمَا</th>
            <th class="center">98</th>
            <th class="justify">صَلَّى عَلَى خَيرِ الْوَرَى العَدْنَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">قد كان يرفعُ صَوْتَهُ فِيْ مَسْجِدٍ</th>
            <th class="center">99</th>
            <th class="justify">مَا فِي الْوَرَى أَجْرَا عَلَى الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْهُ بِفُتْيَاهُ الَّتِيْ تُحْشَى بِرَأْ</th>
            <th class="center">100</th>
            <th class="justify">يٍ بَاطِلٍ مِنْ دُوْنِ مَا بُرْهَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالسُّكَرِّيُّ أَتَى إِلَيْهِۦ سَائِلًا</th>
            <th class="center">101</th>
            <th class="justify">أَفْتَاهُ دُوْنَ تَرَدُّدٍ وَتَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ بَعْدِ فُتْيَاهُۥ إِذَا هُوَ رَاجِعٌ</th>
            <th class="center">102</th>
            <th class="justify">عَنْ قَوْلِهِ فِيْهَا لِقَوْلٍ ثَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">وَأَجَابَهُ إِنَّا نَرَى الَآرَاءَ ثُمَّ</th>
            <th class="center">103</th>
            <th class="justify">نُغَيِّرُ الْآرَاءَ أَيَّ زَمَانَ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانَ يَهْزَأُ بِالْأَحَادِيْثِ الصِّحَا</th>
            <th class="center">104</th>
            <th class="justify">حِ عَنِ النَّبِيِّ هُمَا لَهُ صِفَتَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانَ يَسْخَرُ مِنْ حَدِيْثِ مُحَمَّدٍ</th>
            <th class="center">105</th>
            <th class="justify">وَيَقُوْلُ بَلْ هَذَا مِنَ الْهَذَيَانِ</th>
        </tr>

        <tr>
            <th class="justify">اَلْبَيِّعَانِ لَهُمْ خِيَارٌ قَالَ هُوْ</th>
            <th class="center">106</th>
            <th class="justify">إِنْ كَانَ فِيْ فُلْكٍ أَيَفْتَرِقَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَاللهُ يَسْأَلُهُ عَنِ الْقَوْلِ الَّذِيْ</th>
            <th class="center">107</th>
            <th class="justify">قَدْ قَالَهُ هَذَا وَضِيْعُ الشَّانِ</th>
        </tr>

        <tr>
            <th class="justify">بَلْ كَانَ يَسْخَرُ مِنْ مَحَمَّدِ نَفْسِهِ</th>
            <th class="center">108</th>
            <th class="justify">وَيَقُوْلُ قَوْلًا أَعْظَمَ الْبُهْتَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَوْ كَانَ حَيًّا بَيْنَنَا لَرَأَيْتَهُ</th>
            <th class="center">109</th>
            <th class="justify">بِالرَّأْيِ يَأْخُذُ لَا عَنِ الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">بَلْ كَانَ يُنْكِرُ قَوْلَ صَاحِبِ أَحْمَدٍ</th>
            <th class="center">110</th>
            <th class="justify">عُمَرَ الرَّضِيْ وَيَصِفْهُ بِالشَّيْطَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِيْمَانُ جِبْرِيْلٍ وَإِيْمَانُ الَّذِيْ</th>
            <th class="center">111</th>
            <th class="justify">رَكِبَ الْمَعَاصِيْ عِنْدَهُ سِيَّانِ</th>
        </tr>

        <tr>
            <th class="justify">إِيْمَانُ إِبْلِيْسٍ وَإِيْمَانُ الَّذِيْ</th>
            <th class="center">112</th>
            <th class="justify">صَحِبَ النَّبِيَّ لَدَيْهِ مُقْتَرِنَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ مَقَالَةَ شُعْبَةٍ فِيْهِۦ وَحَمـ</th>
            <th class="center">113</th>
            <th class="justify">ـمَادَ الإِمَامَ الْعَالِمَ الرَّبَانِي</th>
        </tr>

        <tr>
            <th class="justify">إِذْ قَالَ أَرْجُوْ أَنْ يَكُوْنَ مَصِيْرُهُ</th>
            <th class="center">114</th>
            <th class="justify">يَوْمَ الْقِيَامَةِ فِيْ لَظَى النِّيْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَابْنُ الْمُبَارَكِ كَانَ يَرْفَعُ يَدَّهُ</th>
            <th class="center">115</th>
            <th class="justify">حِيْنَ الصَّلَاةِ مُطَبِّقَ الْأَرْكَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَأَبُوْ حَنِيْفَةَ قَالَ تَرْفَعُ فِي الصَّلَا</th>
            <th class="center">116</th>
            <th class="justify">ةِ فَهَلْ تُرِيْدُ بِهَا إِلَى الطَّيَرَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَأَجَابَهُ هَلْ كُنْتَ أَنْتَ تُرِيْدُهُ</th>
            <th class="center">117</th>
            <th class="justify">فِيْ أَوَّلِ التَّكْبِيْرِ يَا نُعْمَانِي</th>
        </tr>

        <tr>
            <th class="justify">فَإِذَا سَمِعْتَ أَبَا حَنِيْفَةَ ذِكْرَهُ</th>
            <th class="center">118</th>
            <th class="justify">فِيْ بَلْدَةٍ هِيَ أَخْبَثُ الْبُلْدَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَا يَنْبَغِيْ لَكُمُۥ بِأَنْ تَبْقَوْا بِهَا</th>
            <th class="center">119</th>
            <th class="justify">بَلْ هَاجِرُوْا مِنْهَا لِغَيْرِ مَكَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ سُدَّ بَطْنُ الأَرْضِ فِيْهِ بِمَوْتِهِ</th>
            <th class="center">120</th>
            <th class="justify">وَارْتَاحَ مِنْهُۥ سَائِرُ الْأَكْوَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ أَحَادِيْثِ النَّبِيِّ مُحَمَّدٍ</th>
            <th class="center">121</th>
            <th class="justify">فِيْ رُؤْيَةِ الرَّحْمَنِ رَأْيَ عَيَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَإِنِ اسْتَطَعْتُمْ أَنْ تُصَلُّوْا الصُّبْحَ مَعْ</th>
            <th class="center">122</th>
            <th class="justify">عَصْرٍ بِلَا فَوْتٍ وَلَا نُقْصَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَاللهُ سَوفَ تَرَوْهُ دُونَ الضَّيْمِ مِثْـ</th>
            <th class="center">123</th>
            <th class="justify">ـلَ الْبَدْرِ لَيْلَ السِّتِّ بَعْدَ ثَمَانِ</th>
        </tr>

        <tr>
            <th class="justify">تَأْتِي الْخَلَائِقُ يَوْمَ حَشْرٍ يَتْبَعُوْ</th>
            <th class="center">124</th>
            <th class="justify">نَ النُّصْبَ أَوْثَانًا مَعَ الصُّلْبَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالْمُسْلِمُوْنَ لَنَاظِرُوْنَ لِرَبِّهِمْ</th>
            <th class="center">125</th>
            <th class="justify">فَيَجِيْئُهُمْ حَقًّا بِلَا نُكْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَكِنْ يَجِيْئُهُمُ بِصُوْرَتِهِ الَّتِيْ</th>
            <th class="center">126</th>
            <th class="justify">لَا يَعْرِفُوْنَ وَلَمْ تَرَى الْعَيْنَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَا يَتْبَعُوْنَ اللهَ ثُمَّ يَجِيْئُهُمْ</th>
            <th class="center">127</th>
            <th class="justify">فِيْ صُوْرَةٍ أُخْرَى بِلَا بُطْلَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَيَقُولُ إِنِّي اللهُ حَتَّى يَتْبَعُوْ</th>
            <th class="center">128</th>
            <th class="justify">هُ إِلَى الصِّرَاطِ يَمُرُّهُ بِأَمَانِ</th>
        </tr>

        <tr>
            <th class="justify">اَلْمُؤْمِنُوْنَ وَالَانْبِيَاءُ مَقَالُهُمْ</th>
            <th class="center">129</th>
            <th class="justify">يَا رَبِّ سَلِّمْنَا لِخَيْرِ جِنَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَعَلَى الصِّرَاطِ كَلَالِبٌ تَرْمِيْ بِبَعْـ</th>
            <th class="center">130</th>
            <th class="justify">ـضِ النَّاسِ بِالْأَشْوَاكِ كَالسَّعْدَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَيَجُوْزُهُ الْمَبْعُوْثُ حَقًّا رَحْمَةً</th>
            <th class="center">131</th>
            <th class="justify">وَيَكُوْنُ أَوَّلُ دَاخِلٍ لِجِنَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَا وَاحِدٌ إِلَّا لَسَوْفَ يُكَلِّمُ الر</th>
            <th class="center">132</th>
            <th class="justify">رَحْمَنَ دُوْنَ وَسَاطَةٍ بِبَيَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَوْ حَاجِبٍ فَيَقُوْلُ إِنِّيْ قَدْ سَتَرْ</th>
            <th class="center">133</th>
            <th class="justify">تُ عَلَيْكَ فِي الدُّنْيَا بِلَا إِعْلَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَلَسَوْفَ أَغْفِرُ مَا جَنَيْتَ بِرَحْمَتِيْ</th>
            <th class="center">134</th>
            <th class="justify">مِنْ فِعْلِكَ الْآثَامَ مَعْ عِصْيَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">أَهْلُ الْجِنَانِ لَدَيْهِمُۥ مِن رَبِّهِمْ</th>
            <th class="center">135</th>
            <th class="justify">وَعْدٌ بِأَنْ سَيَرَوْهُ رَأْيَ عَيَانِ</th>
        </tr>

        <tr>
            <th class="justify">مُتَجَلِّيًا لَهُمُۥ وَعَيْنَا كُلِّ إِنْـ</th>
            <th class="center">136</th>
            <th class="justify">ـسَانٍ لِرَبِّ الْعَرْشِ نَاظِرَتَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَوُجُوْهُهُمْ فِيْهَا النَّضَارَةُ بَهْجَةً</th>
            <th class="center">137</th>
            <th class="justify">بِالْحُسْنِ نَاظِرَةٌ إِلَى الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">فِيْ يَوْمِ جُمْعَةَ فِيْ كَثِيْبٍ أَبْيَضٍ</th>
            <th class="center">138</th>
            <th class="justify">أَفَبَعْدَ هَذَا الْحُسْنِ مِنْ إِحْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ فَوْقِ كُرْسِيٍّ وَحُفَّ بِرُسْلِهِ</th>
            <th class="center">139</th>
            <th class="justify">وَالرُّسْلُ قَدْ حُفُّوْا بِذِي الصِّنْفَانِ</th>
        </tr>

        <tr>
            <th class="justify">اَلصَّادِقُوْنَ وَمَعْهُمُ الشُّهَدَاءُ حُفـ</th>
            <th class="center">140</th>
            <th class="justify">ـفُّوْا بِالْبَقِيَّةِ مَنْ عَلَى الْكُثْبَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَمْ يُعْطِهِمْ شَيْئًا أَحَبَّ إِلَيْهِمُۥ</th>
            <th class="center">141</th>
            <th class="justify">مِنْ نَظْرَةٍ وَزِيَادَةِ الْإِحْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">فِيْ يَوْمِ جُمْعَةَ فِيْ كَثِيْبٍ أَبْيَضٍ</th>
            <th class="center">142</th>
            <th class="justify">أَفَبَعْدَ هَذَا الْحُسْنِ مِنْ إِحْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ فَوْقِ كُرْسِيٍّ وَحُفَّ بِرُسْلِهِ</th>
            <th class="center">143</th>
            <th class="justify">وَكَمَا الْحَدِيْثُ أَتَى بِأَنَّ مُحَمَّدًا</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانَ يَسْأَلُ لَذَّةً فِيْ نَظْرَةٍ</th>
            <th class="center">144</th>
            <th class="justify">للهِ خَالِقِ هَذِهِ الْأَكْوَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَلَقَدْ رَآهُۥ يَوْمَ مِعْرَاجٍ بِهِ</th>
            <th class="center">145</th>
            <th class="justify">مِنْ مَسْجِدِ الْأَقْصَى إِلَى الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">وَاذْكُرْ حَدِيْثًا إِذْ رَأَى الرَّحْمَنَ فِيْ</th>
            <th class="center">146</th>
            <th class="justify">رُؤْيَاهُ لَكِنْ نَظْرَةً بِجَنَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ قَالَ أَنَّ اللهَ لَيْسَ يُرَى فَكَفِّـ</th>
            <th class="center">147</th>
            <th class="justify">ـرْهُۥ بِغَيْرِ تَأَمُّلٍ وَتَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ السَّمَاوَاتِ الْعُلَى مَفْطُوْرَةٌ</th>
            <th class="center">148</th>
            <th class="justify">مِنْهُۥ وَمُثْقَلَةٌ بِذِي السُّلْطَانِ</th>
        </tr>

        <tr>
            <th class="justify">واللهُ جَلَّ جَلَالُهُ مِنْ قَبْلِ خَلْـ</th>
            <th class="center">149</th>
            <th class="justify">ـقِ الْعَرْشِ لَمْ يَكُ مَعْهُ شَيْءٌ ثَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ فَوْقِهِ كَانَ الْهَوَاءُ وَتَحْتَهُ </th>
            <th class="center">150</th>
            <th class="justify">فِيْ أَبْيَضِ السُّحْبِ الْعَظِيْمُ الشَّانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالْكِبْرِيَاءُ رِدَاءُهُ وَإِزَارُهُ التـ</th>
            <th class="center">151</th>
            <th class="justify">ـتَعْظِيْمُ جَلَّ حِجَابُهُ النُّوْرَانِيْ</th>
        </tr>
        <tr>
            <th class="justify">واللهِ لَوْ كَشَفَ الْحِجَابَ لَأَحْرَقَتْ</th>
            <th class="center">152</th>
            <th class="justify">سُبُحَاتُ وَجْهِ اللهِ ذِيْ الْأَكْوَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ يَضْحَكُ مِنْ قُنُوْطِ عِبَادِهِ</th>
            <th class="center">153</th>
            <th class="justify">لا تَعْدَمُوا خَيْرًا مِنَ الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">وَكَذَاكَ يَضْحَكُ حِيْنَ يُقْتَلُ مُسْلِمٌ</th>
            <th class="center">154</th>
            <th class="justify">وَيَتُوْبُ قَاتِلُهُ مِنَ الْكُفْرَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَكَذَاكَ يَضْحَكُ رَبُّنَا سُبْحَانَهُ</th>
            <th class="center">155</th>
            <th class="justify">فِيْ آخِرِ الْعُتَّاقِ مِن نِيْرَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ يُدْخِلُهُ لِجَنَّاتِ النَّعِيْ</th>
            <th class="center">156</th>
            <th class="justify">ـمِ فَجَلَّ مِنْهُ بِرَحْمَةٍ وَحَنَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالْخَلْقُ وَالْمَا وَالْجِبَالُ مَعَ الشَّجَرْ</th>
            <th class="center">157</th>
            <th class="justify">مَعْهَا السَّمَاوَاتُ الْعُلَى بِبَيَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَالْأَرْضُ يَحْمِلُهَا الْإِلَهُ عَلَى أَصَا</th>
            <th class="center">158</th>
            <th class="justify">بِعِهِ فَجَلَّ اللهُ ذُو السُّلْطَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَيَهَزُّهُنَّ وَكُلُّ قَلْبٍ فِيْ أَصَا</th>
            <th class="center">159</th>
            <th class="justify">بِعِهِ يُقَلِّبُهُ عَلَى الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ قَدْ خَلَقَ الْمُكَلَّمَ آدَمًا</th>
            <th class="center">160</th>
            <th class="justify">فِيْ صُوْرَةٍ هِيَ صُوْرَةِ الرَّحْمَنِ</th>
        </tr>
        <tr>
            <th class="justify">فَاحْذَرْ تُقَبِّحْ أَيَّ وَجْهٍ يَا فَتَى</th>
            <th class="center">161</th>
            <th class="justify">مِنْ أَجْلِ خِلْقَةِ صُوْرَةِ الْإِنْسَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاحْذَرْ تَسُبَّنَّ الرِّيَاحَ فَإِنَّهَا</th>
            <th class="center">162</th>
            <th class="justify">مِنْ جُنْدِهِ نَفَسٌ مِنَ الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ حِيْنَ أَرَادَ مُوْسَى أَنْ يَرَا</th>
            <th class="center">163</th>
            <th class="justify">هُ فَقَالَ يَا مُوْسَى انْظُرَنْ ذَا الْآنِ</th>
        </tr>

        <tr>
            <th class="justify">فَإِنِ اسْتَقَرَّ الطُّوْرُ تَحْتَكَ ثَابِتًا</th>
            <th class="center">164</th>
            <th class="justify">بِمَكَانِهِ هَذَا فَسَوْفَ تَرَانِيْ</th>
        </tr>
        <tr>
            <th class="justify">فَهُنَا أَشَارَ اللهُ نَحْوَ الطُّوْرِ بِالْـ</th>
            <th class="center">165</th>
            <th class="justify">خِنْصَرْ فَخَرَّ بِلَا حَرَاكِ لِسَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ يَنْزِلُ كُلَّ آخِرِ لَيْلَةٍ</th>
            <th class="center">166</th>
            <th class="justify">نَحْوَ السَّمَاءِ يَقُوْلُ مَنْ نَادَانِيْ</th>
        </tr>
        <tr>
            <th class="justify">فَأُجِيْبَهُ حَتَّى الصَّبَاحِ فَيَسْتَوِيْ</th>
            <th class="center">167</th>
            <th class="justify">نَحْوَ السَّمَاءِ فَجَلَّ عَنْ نُقْصَانِ</th>
        </tr>

        <tr>
            <th class="justify">سُبُّوْحُ قُدُّوْسٌ وَرَبُّ مَلَائِكٍ</th>
            <th class="center">168</th>
            <th class="justify">هَذِيْ صَلَاةُ الْوَاحِدِ الْمَنَّانِ</th>
        </tr>
        <tr>
            <th class="justify">لَا تُدْرِكُ الْأَبْصَارُ وَجْهَ اللهِ فِيْ الد</th>
            <th class="center">169</th>
            <th class="justify">دُنْيَا وَهَذَا مُحْكَمُ الْقُرْءَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ مَعْنَا أَيْنَمَا كُنَّا بِعِلْـ</th>
            <th class="center">170</th>
            <th class="justify">ـمٍ وَهْوَ مِنْ كُلِّ الْبَرِيَّةِ دَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِذْ قَالَ إِنِّيْ يَا عِبَادِيْ مِنْكُمُ</th>
            <th class="center">171</th>
            <th class="justify">بِالْقُرْبِ أَسْمَعُ كُلَّ مَنْ نَادَانِي</th>
        </tr>
        <tr>
            <th class="justify">وَهُوَ الْجَمِيْلُ اللهُ جَلَّ جَلَالُهُ</th>
            <th class="center">172</th>
            <th class="justify">سُبْحَانَهُ مِنْ مَالِكٍ دَيَّانِ</th>
        </tr>
        <tr>
            <th class="justify">لَا نَوْمَ يَأْخُذُهُ وَلَا سِنَةٌ وَيُمْـ</th>
            <th class="center">173</th>
            <th class="justify">ـسِكُ ذِي السَّمَاءِ وَالْأَرْضَ عَنْ زَوَلَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ يُسمِعُ صَوْتَهُ بِسَمَائِهِ</th>
            <th class="center">174</th>
            <th class="justify">صَوْتٌ كَسِلْسِلَةٍ عَلَى الصَّفْوَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ كَلَّمَ عَبْدَهُ مُوْسَى بِصَوْ</th>
            <th class="center">175</th>
            <th class="justify">تٍ فَاحْفَظَنْ هَذَا أَخَا الْعِرْفَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَقَدِ اصْطَفَاهُ اللهُ فَوْقَ عِبَادِهِ</th>
            <th class="center">176</th>
            <th class="justify">بِكَلَامِهِ إِيَّاهُ ذُو السُّبْحَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ خَطَّ لَهُ الْكِتَابَ بِيَدِّهِ</th>
            <th class="center">177</th>
            <th class="justify">وَكَذَاكَ آدَمُ خَلْقُهُ بِيَدَانِ</th>
        </tr>
        <tr>
            <th class="justify">مُوْسَى الْكَلِيْمُ وَإِبْرَهِيْمُ خَلِيْلُهُ</th>
            <th class="center">178</th>
            <th class="justify">وَرَآهُ أَحْمَدُ قَالَهُ الْوَحْيَانِ</th>
        </tr>
        <tr>
            <th class="justify">مَنْ قَالَ مُوْسَى لَمْ يَكُنْ بِمُكَلَّمٍ</th>
            <th class="center">179</th>
            <th class="justify">فَهْوَ الْكَفُوْرُ وَصَاحِبُ الْهُجْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ قَدْ غَرَسَ الْجِنَانَ بِيَدِّه</th>
            <th class="center">180</th>
            <th class="justify">جَنَّاتِ عَدْنٍ وَهْيَ خَيْرُ جِنَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ يَجْلِسُ فَوْقَ كُرْسِيٍّ فَيُسْـ</th>
            <th class="center">181</th>
            <th class="justify">ـمَعُ أَطُّهُ كَالرَّاكِبِ الْعَجْلَانِ</th>
        </tr>

        <tr>
            <th class="justify">رَجُلٌ وَثَوْرٌ تَحْتَ رِجْلِ يَمِيْنِهِ</th>
            <th class="center">182</th>
            <th class="justify">وَالنَّسْرُ لِلْأُخْرَى وَلَيْثٌ ثَانِ</th>
        </tr>
        <tr>
            <th class="justify">لَكِنَّهُ هُوَ مَوْضِعُ الْقَدَمَيْنِ تَحْـ</th>
            <th class="center">183</th>
            <th class="justify">ـتَ الْعَرْشِ فَوْقَ الْمَاءِ وَالْأَكْوَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاهْتَزَّ عَرْشُ اللهِ جَلَّ جَلَالُهُ</th>
            <th class="center">184</th>
            <th class="justify">لِوَفَاةِ سَعْدٍ صَاحِبِ الرِّضْوَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ يَأْتِيْ فِيْ ظِلَالٍ مِنْ غَمَا</th>
            <th class="center">185</th>
            <th class="justify">مٍ جَلَّ يَوْمَ قِيَامَةِ الْأَبْدَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَحَدِيْثُ جَارِيَةٍ فَلَا تُنْكِرْهُ أَنَّ</th>
            <th class="center">186</th>
            <th class="justify">اللهَ فَوْقَ سَمَائِهِ بِمَكَانِ</th>
        </tr>

        <tr>
            <th class="justify">هُوَ بَائِنٌ مِنْ خَلْقِهِ سُبْحَانَهُ</th>
            <th class="center">187</th>
            <th class="justify">وَبِعِلْمِهِ فَهْوَ الْقَرِيْبُ الدَّانِيْ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ عَزَّ وَجَلَّ لَيْسَ بِنَاظِرٍ</th>
            <th class="center">188</th>
            <th class="justify">لِإِمَامِ كِذْبٍ أَوْ لِشَيْخٍ زَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَمُجَامِعِ النِّسْوَانِ فِي الْأَدْبَارِ أَوْ</th>
            <th class="center">189</th>
            <th class="justify">مَسْتَكْبِرٍ وَهْوَ الْفَقِيْرُ الْعَانِيْ</th>
        </tr>
        <tr>
            <th class="justify">وَكَذَاكَ مَنْ جَرَّ الْإِزَارَ تَكَبُّرًا</th>
            <th class="center">190</th>
            <th class="justify">وَكَذَلِكَ السُّرَّاقُ بِالْأَيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الْإِلَه يَغَارُ أَنْ يَأْتِي امْرُؤٌ</th>
            <th class="center">191</th>
            <th class="justify">مَا قَدْ نَهَى عَنْهُۥ مِنَ الْعِصْيَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ يُظْهِرُ بَعْضَهُ لِلْأَرْضِ فَهْـ</th>
            <th class="center">192</th>
            <th class="justify">ـيَ تَزَلْزَلَتْ مِنْ خَشْيَةِ الرَّحْمَنِ</th>
        </tr>
        <tr>
            <th class="justify">وَاعْلَمْ بِأَنَّ الشَّمْسَ أَيْضًا وَالْقَمْرْ</th>
            <th class="center">193</th>
            <th class="justify">لَيْسَا لِمَوْتِ النَّاسِ يَنْكَسِفَانِ</th>
        </tr>
        <tr>
            <th class="justify">لَكِنَّ خَلْقَ اللهِ يَخْشَعُ مِنْهُ جَلَّ</th>
            <th class="center">194</th>
            <th class="justify">اللهُ عَنْ عَيبٍ وَعَن نُقْصَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاعْلَمْ فَدَاوُدُ النَّبِيُّ يَمَسُّ بَعْـ</th>
            <th class="center">195</th>
            <th class="justify">ـضَ اللهِ مِنْ زُلْفَى وَمِنْ إِحْسَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاللهُ أَخِرُ وَطِئِهِ فِي الْأَرْضِ فِيْ</th>
            <th class="center">196</th>
            <th class="justify">وَجٍّ فَتِلْكَ مِنَ اخْيَرِ الْبُلْدَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَالْكَافِرُوْنَ جُلُوْدُهُمْ وَضُرُوْسُهُمْ</th>
            <th class="center">197</th>
            <th class="justify">بِذِرَاعِهِ سُبْحَانَهُ هَذَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَالَ النَّبِيُّ مُحَمَّدٌ لَيْسَ الْمُخَا</th>
            <th class="center">198</th>
            <th class="justify">ـبَرُ كَالَّذِيْنَ يَرَوْنَ رَأْيَ عَيَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاذْكُرْ حَدِيْثًا يَوْمَ يَسْأَلُ نَارَهُ</th>
            <th class="center">199</th>
            <th class="justify">هَلْ قَدْ مُلِئْتِ مِنَ الْبَشَرْ وَالْجَانِ</th>
        </tr>
        <tr>
            <th class="justify">فَتَقُوْلُ لَا فَاللهُ وَاضِعُ رِجْلِهِ</th>
            <th class="center">200</th>
            <th class="justify">فِيْهَا تَقُوْلُ غَدَوْتُ كَالْمَلْآنِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ قَدْ خَلَقَ الْمَلَائِكَ كُلَّهَا</th>
            <th class="center">201</th>
            <th class="justify">مِنْ نُوْرِهِ فَكَيَانُهُمْ نُوْرَانِيْ</th>
        </tr>
        <tr>
            <th class="justify">مِن نُوْرِهِ مِنْ صَدْرِهِ سُبْحَانَهُ</th>
            <th class="center">202</th>
            <th class="justify">وَكَذَا ذِرَاعِيْهِ الْعَظِيْمُ الشَّانِ</th>
        </tr>
        <tr>
            <th class="justify">وَالطِّيْنُ قَدْ خَلَقَ الْأُنَاسَ بِهِ كَذَا</th>
            <th class="center">203</th>
            <th class="justify">مِن نَارِهِ قَدْ كَانَ خَلْقُ الْجَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ أَنْكَرَ الْآثَارَ هَذِيْ قَدْ غَدَا</th>
            <th class="center">204</th>
            <th class="justify">مِنْ أَهْلِ كُفْرٍ لَا عَلَى الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ مَقَالَ الِامَامِ أَحْمَدَ شَيْخِنَا</th>
            <th class="center">205</th>
            <th class="justify">وشُيُوْخِنَا عَنْ مُحْكَمِ الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَوْلٌ وَفِعْلٌ إِنْ أَطَعْتَ تَزِيْدُهُ</th>
            <th class="center">206</th>
            <th class="justify">وَالنَّقْصُ فِيْهِ يَكُوْنُ بِالْعِصْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْتَثْنِ فِيْهِۦ وَالدَّلِيْلُ دُعَاؤُنَا</th>
            <th class="center">207</th>
            <th class="justify">عِنْدَ الْقُبُوْرِ لِمَعْشَرِ الْإِخْوَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَنْتُمْ سَبَقْتُمْ نَحْنُ نَلْحَقُكُمْ بِإِذْ</th>
            <th class="center">208</th>
            <th class="justify">نِ اللهِ حَتَّى جَنَّةِ الْحَيَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالْقَوْلُ هَذَا لَيْسَ شَكًّا مِنْكَ بِالْـ</th>
            <th class="center">209</th>
            <th class="justify">ـإِيْمَانِ بَلْ هُوَ مَا قَضَى الْوَحْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ قَالَ غَيْرَ الْقَوْلِ إِنْ هُوَ مُرْجِئٌ</th>
            <th class="center">210</th>
            <th class="justify">ذُوْ بِدْعَةٍ ثَقُلَتْ عَلَى الْأَذْهَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ أُحْدِثَ الْإِرْجَاءُ بَعْدَ هَزِيْمَةِ ابْـ</th>
            <th class="center">211</th>
            <th class="justify">ـنِ الْأَشْعَثِ الْبَاغِيْ عَلَى الْمَرْوَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">لَا تَسْأَلَنَّ النَّاسَ هَلْ هُمْ مُؤْمِنُوْ</th>
            <th class="center">212</th>
            <th class="justify">نَ فَذَاكَ بِدْعٌ مِنْ ذَوِي الْحِدْثانِ</th>
        </tr>

        <tr>
            <th class="justify">وَإِذَا سُئِلْتَ فَقُلْ بِأَنَّكَ مُؤْمِنٌ</th>
            <th class="center">213</th>
            <th class="justify">بِاللهِ رَبِّ الْعَرْشِ وَالْقُرْءَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَسِبَابُ مُسْلِمٍ اعْرِفَنَّ هُوَ الْـ</th>
            <th class="center">214</th>
            <th class="justify">ـفُسُوْقُ قِتَالُهُ كُفْرٌ بِلَا نُكْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ أَنْكَرَ الْأَقْدَارَ أَوْ أَرْجَى فَلَا</th>
            <th class="center">215</th>
            <th class="justify">سَهْمٌ لَهُ فِي الدِّيْنِ أَوْ سَهْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">هُمْ أَهْلُ أَهْوَاءٍ وَأَهْلُ ضَلَالَةٍ</th>
            <th class="center">216</th>
            <th class="justify">لَا يَأْخُذُوْنَ سِوَى بِرَأْيِ فُلَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَإِذَا وَجَدتَّهُمُ فَلَا تُلْقِ السَّلا</th>
            <th class="center">217</th>
            <th class="justify">مَ عَلَيْهِمُۥ وَتَكُوْنَ ذَا خُضْعَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ فَلِلْإِيْمَانِ أَبْـَوابٌ وَأَعْـ</th>
            <th class="center">218</th>
            <th class="justify">ـلَاهَا الشَّهَادَةُ لِلْعَلِي الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">أَنْ لَا إِلَهَ سِوَاهُ وَالأَدْنَى الْإِمَا</th>
            <th class="center">219</th>
            <th class="justify">طَةُ لِلْأَذَى فَاحْفَظْ هُمَا بَابَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الْحَيَاءَ لَشُعْبَةٌ أَيْضًا مِنَ الْـ</th>
            <th class="center">220</th>
            <th class="justify">ـإِيْمَانِ وَهْيَ تَكُوْنُ فِعْلَ جَنَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَكَذَا الْإِمَاطَةُ وَهْيَ فِعْلُ جَوَارِحٍ</th>
            <th class="center">221</th>
            <th class="justify">وَكَذَا مِنَ الْإِيْمَانِ قَوْلُ لِسَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَا تَصْلُحُ الْأَقْوَالُ إِلَّا بِالْفِعَا</th>
            <th class="center">222</th>
            <th class="justify">لِ كِلَاهُمَا أَمْرَانِ مُقْتَرِنَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَكِنْ لَدَى الْإِرْجَاءِ لَيْسَتْ هَذِهِ الْـ</th>
            <th class="center">223</th>
            <th class="justify">ـأَفْعَالُ تَدْخُلُ فِيْ عُرَى الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">بَلْ عِنْدَهُمْ هُوْ أَنْ تَكُوْنَ مُصَدِّقًا</th>
            <th class="center">224</th>
            <th class="justify">بِالْقَلْبِ أَوْ مَعْهُۥ بِنُطْقِ لِسَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَالدِّيْنُ قَد تَّرَكُوْهُ وَهْوَ أَرَقُّ مِنْ</th>
            <th class="center">225</th>
            <th class="justify">ثَوْبٍ رُقَاقٍ خَالِيَ الْأَرْكَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ دُوْنِ حَجٍّ أَوْ صِيَامٍ أَوْ زَكَا</th>
            <th class="center">226</th>
            <th class="justify">ةٍ أَوْ صَلَاةٍ نَاقِصَ الْبُنْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ هُدِيْتَ يُفَارِقُ الْإِيْمَانُ مَنْ</th>
            <th class="center">227</th>
            <th class="justify">شَرِبَ الْخُمُوْرَ وَحِيْنَ يَزْنِي الزَّانِيْ</th>
        </tr>

        <tr>
            <th class="justify">مَا يُصْبِحُ السُّرَّاقُ فِيْ سَرِقَاتِهِمْ</th>
            <th class="center">228</th>
            <th class="justify">إِلَّا وَصَارُوْا تَارِكِي الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَا يَرْجِعُوْنَ إِلَيْهِ إِلَّا تَائِبِيْـ</th>
            <th class="center">229</th>
            <th class="justify">ـنَ وَطَالِبِيْنَ الصَّفْحَ بِالْغُفْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">بَيْنَ الْعِبَادِ وَبَيْنَ شِرْكٍ تَرْكُهُمْ</th>
            <th class="center">230</th>
            <th class="justify">صَلَوَاتِهِمْ هَذَا مِنَ الْكُفْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الْمُطِيْعَ لِرَبِّهِ فِيْ فِعْلِهِ</th>
            <th class="center">231</th>
            <th class="justify">وَالْعَاصِ هَلْ هَذَانِ يَسْتَوِيَانِ</th>
        </tr>

        <tr>
            <th class="justify">تَرْكُ الْفَرَائِضِ عَامِدًا أَوْ جَاحِدًا</th>
            <th class="center">232</th>
            <th class="justify">كُفْرٌ كَإِبْلِيْسٍ هُمَا شِبْهَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَإِذَا رَكِبْتَ مَحَارِمًا مِنْ دُوْنِ تَحْـ</th>
            <th class="center">233</th>
            <th class="justify">ـلِيْلٍ فَهَذَا أَكْبَرُ الْعِصْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ أَكْمَلِ الْإِيْمَانِ إِحْسَانُ الْخُلُقْ</th>
            <th class="center">234</th>
            <th class="justify">وَاللهُ يُرْجَى وَهْوَ ذُو الْغُفْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">فِيْ كُلِّ ذَنْبٍ غَيْرُ قَتْلٍ مُؤْمِنًا</th>
            <th class="center">235</th>
            <th class="justify">مُتَعَمِّدًا وَالْكُفْرِ بِالرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">وَالْإِنْتِفَا كُفْرٌ عَنِ الْأَبِ أَصْغَرٌ</th>
            <th class="center">236</th>
            <th class="justify">وَكَذَاكَ الَابِقُ فَهْوَ ذُوْ كُفْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَكَذَلِكَ الْإِشْرَاكُ عِنْدَ تَطَيُّرٍ</th>
            <th class="center">237</th>
            <th class="justify">وَالْكَاذِبُوْنَ مُجَانِبُوْ الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ قَدْ أَضَاعَ صَلَاتَهُ مُتَكَاسِلًا</th>
            <th class="center">238</th>
            <th class="justify">يَأْتِيْ بِلَا نُوْرٍ وَلَا بُرْهَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَا يَدْخُلُ الْجَنَّاتِ مَنْ فِيْ قَلْبِهِ</th>
            <th class="center">239</th>
            <th class="justify">كِبْرٌ وَشِرْكٌ بِئْسَتِ الصِّفَتَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ يَلْعَنُ حَالِقًا بِمُصِيْبَةٍ</th>
            <th class="center">240</th>
            <th class="justify">أَوْ خَارِقًا ثَوْبًا فَمَحْذُوْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَوْ سَالِقًا أَوْ ضَارِبًا خَدًّا وَمَنْ</th>
            <th class="center">241</th>
            <th class="justify">شَقَّ الْجُيُوْبَ لِمَوْتَةِ الْإِنْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ التَّمَائِمَ وَالرُّقَى شِرْكٌ وَأَمَّـ</th>
            <th class="center">242</th>
            <th class="justify">ـا الْعَاقُ لَيْسَ بِدَاخِلٍ لِجِنَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَوْ مُدْمِنٌ خَمْرًا فَلَيْسَ بِدَاخِلٍ</th>
            <th class="center">243</th>
            <th class="justify">لِلْجَنَّةِ اقْرُنْهُ مَعَ الْمَنَّانِ</th>
        </tr>

        <tr>
            <th class="justify">فَلَقَدْ أَتَانَا فِيْ الْحَدِيْثِ بِأَنَّ مُدْ</th>
            <th class="center">244</th>
            <th class="justify">مِنَ خَمْرَةٍ لَكَعَابِدُ الْأَوْثَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الْمُنَافِقَ عَالِمٌ بِالدِّيْنِ لَـ</th>
            <th class="center">245</th>
            <th class="justify">ـكِنْ لَيْسَ يَعْمَلُ فِيْهِ بِالْأَرْكَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاحْذَرْ مِنَ الْمَرْءِ الْمُزَكِّيْ نَفْسَهُ</th>
            <th class="center">246</th>
            <th class="justify">إِذْ يَفْتَرِيْ كَذِبًا عَلَى الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">وَاحْذَرْ مِنَ الْمَرْءِ الْمُزَكِّيْ غَيْرَهُ</th>
            <th class="center">247</th>
            <th class="justify">وَكَذَاكَ مِمَّنْ غَشَّ بِالْأَوْزَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ قَدْ أَقَامَ صَلَاتَهُ لَكِنَّهُ</th>
            <th class="center">248</th>
            <th class="justify">تَرَكَ الزَّكَاةَ فَذَا مِنَ الْأَنْتَانِ</th>
        </tr>

        <tr>
            <th class="justify">هُوَ كَافِرٌ حَتَّى يُؤَدِّ زَكَاتَهُ</th>
            <th class="center">249</th>
            <th class="justify">تَرْكُ الزَّكَاةِ يُخِلُّ بِالْأَدْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَالْعَبْدُ لَا يَسْتَكمِلُ الْإِيْمَانَ إِلَّـ</th>
            <th class="center">250</th>
            <th class="justify">ـا بِالْفِعَالِ وَطَاعَةِ الرَّحْمَنِ</th>
        </tr>

        <tr>
            <th class="justify">لَسْتُمْ بِشُكَّاكٍ إِذَا اسْتَثْنَيْتُمُۥ</th>
            <th class="center">251</th>
            <th class="justify">بِالْقَوْلِ بَلْ هَذَا مِنَ الْإِحْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَعَلَيْهِ أَجْمَعَتِ الْأَئِمَّةُ كُلُّهُمْ</th>
            <th class="center">252</th>
            <th class="justify">شَرْقًا وَغَرْبًا قَاصِيًا أَوْ دَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ أَبُوْ بَكْرٍ لَوَ انْتَ وَزَنْتَهُ</th>
            <th class="center">253</th>
            <th class="justify">بِالنَّاسِ كُلِّهِمُۥ عَلَى الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَوَجَدتَّ مَنْ صَحِبَ النَّبِيَّ مُحَمَّدًا</th>
            <th class="center">254</th>
            <th class="justify">فِي الْغَارِ رَاجِحَ كَفَّةِ الْمِيْزَانِ</th>
        </tr>

        <tr>
            <th class="justify">عَلَمُ النِّفَاقِ بِبُغْضِ أَنْصَارِ النَّبِيْ</th>
            <th class="center">255</th>
            <th class="justify">وَوِدَادُهُمْ هُوَ آيَةُ الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ قَالَ إِنَّا قَدْ مُطِرْنَا بِالنُّجُوْ</th>
            <th class="center">256</th>
            <th class="justify">مِ فَذَاكَ أَضْحَى كَافِرًا بِبَيَانِ</th>
        </tr>

        <tr>
            <th class="justify">اَللهُ يُمْطِرُنَا بِفَضْلٍ مِنْهُ جَلَّ</th>
            <th class="center">257</th>
            <th class="justify">اللهُ عَنْ شِرْكٍ وَعَنْ أَعْوَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ مَقَالَاتِ الأَئِمَّةِ كُلِّهِمْ</th>
            <th class="center">258</th>
            <th class="justify">فيْ زُمْرَةِ الْقَدَرِيَّةِ الْعُمْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَاحْذَرْ صَلَاةً خَلْفَهُمْ إِذْ أَنْكَرُوْا</th>
            <th class="center">259</th>
            <th class="justify">عِلْمَ الْإِلَهِ وَذَاكَ قَوْلُ الْجَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">فَالْحَدُّ قَتْلُهُمُۥ كَمَا فَعَلَ الْإِمَا</th>
            <th class="center">260</th>
            <th class="justify">مُ هِشَامٌ الْأُمَوِيُّ فِيْ غَيْلَانِ</th>
        </tr>

        <tr>
            <th class="justify">صَلْبًا وَقَتْلًا وَاذْكُرِ الْجُهَنِيَّ مَعْـ</th>
            <th class="center">261</th>
            <th class="justify">بَدًا الْكَفُوْرَ مِنَ اخْبَثِ الْغِلْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَهُمُ الْمَجُوْسُ الْكَافِرُوْنَ بِفِعْلِهِمْ</th>
            <th class="center">262</th>
            <th class="justify">وَاللهُ قَدَّرَ مَا عَلَى الْإِنْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">مِنْ قَبْلِ خَلْقِ الْأَرْضِ مِنْ قَبْلِ السَّمَا</th>
            <th class="center">263</th>
            <th class="justify">وَاتِ الْعُلَى مَقْدُوْرَةٌ بِبَيَانِ</th>
        </tr>

        <tr>
            <th class="justify">بِسِنِيْنَ هُمْ خَمْسُوْنَ أَلْفًا قَالَ لِلْـ</th>
            <th class="center">264</th>
            <th class="justify">قَلَمِ اكْتُبَنْ عَنْ سَائِرِ الْأَزْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَا كَائِنٌ أَجَلًا وَرِزْقًا مَوْتًةَ</th>
            <th class="center">265</th>
            <th class="justify">أَوْ كَانَ أُنْثَى أَم مِنَ الذُّكْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَمَصِيْرُهُ أَسَعَادَةً أَمْ شَقْوَةً</th>
            <th class="center">266</th>
            <th class="justify">فَاعْمَلْ تُيَسَّرْ وَاحِدًا مِنْ ذَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ يَعْلَمُ مَا يَكُوْنُ وَكَائِنًا</th>
            <th class="center">267</th>
            <th class="justify">إِنْ لَمْ يَكُنْ فِيْ عِلْمِهِ الْأَمْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ قَدَّرَ خَيْرَهُ مَعْ شَرِّهِ</th>
            <th class="center">268</th>
            <th class="justify">وَكَذَاكَ يَفْرُقُ كُلَّ شَيْءٍ ثَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">فِيْ لَيْلَةِ الْقَدْرِ الْمُعَظَّمِ فَضْلُهَا</th>
            <th class="center">269</th>
            <th class="justify">هِيَ لَيْلَةٌ فِي الْعَشْرِ مِنْ رَمَضَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَإِذَا قَضَى أَمْرًا فَقَوْلُ اللهِ فِيْـ</th>
            <th class="center">270</th>
            <th class="justify">ـهِۦ كُنْ كَسَائِرِ هَذِهِ الْأَكْوَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ يَهْدِيْ مَنْ يَشَاءُ بِفَضْلِهِ</th>
            <th class="center">271</th>
            <th class="justify">وَيُضِلُّ وَالْأَقْدَارُ بِالْحُسْبَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِنَّ الزِّنَا وَكَذَاكَ شُرْبُ الْخَمْرِ مَقْـ</th>
            <th class="center">272</th>
            <th class="justify">دُوْرٌ كَذَاكَ عِبَادَةُ الْأَوْثَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ قَدَّرَ أَنَّ أَحْمَدَ مُرْسَلٌ</th>
            <th class="center">273</th>
            <th class="justify">وَأَبُوْكُمُ فِي الرُّوْحِ وَالْجُثْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ يَمْحُوْ مَا يَشَاءُ وَيُثْبِتُ الْـ</th>
            <th class="center">274</th>
            <th class="justify">ـأَقْدَارَ جَلَّ اللهُ ذُو السُّلْطَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ يَعْلَمُ مَا صِغَارُ الْمُشْرِكِيْـ</th>
            <th class="center">275</th>
            <th class="justify">ـنَ سَيَفْعَلُوْنَ بِعِلْمِهِ السُّبْحَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ قَالَ لَرَحْمَتِيْ هِيَ سَابِقَةْ</th>
            <th class="center">276</th>
            <th class="justify">غَضَبِيْ وَذَاكَ كِتَابُهُ ذُو الشَّانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاللهُ وَضَّحَ لِابْنِ آدَمَ نَهْجَهُ</th>
            <th class="center">277</th>
            <th class="justify">لِلْجَنَّةِ الْعُلْيَا أَوِ النِّيْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">مَنْ شَاءَ فَلْيُؤْمِنْ وَمَنْ شَا يَكْفُرَنْ</th>
            <th class="center">278</th>
            <th class="justify">يَوْمَ الْقِيَامَةِ فَهْوَ ذُوْ خُسْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاذْكُرْ حَدِيْثًا لِلنَّبِيِّ مُحَمَّدٍ</th>
            <th class="center">279</th>
            <th class="justify">إِذْ جَاءَهُ رَجُلَانِ يَخْتَصِمَانِ</th>
        </tr>

        <tr>
            <th class="justify">يَتَنَازَعَانِ الْقَوْلَ فِيْ قَدَرٍ إِلَى</th>
            <th class="center">280</th>
            <th class="justify">أَنْ صَارَتِ الْوَجَنَاتُ كَالرُّمَّانِ</th>
        </tr>

        <tr>
            <th class="justify">أَفَبِالتَّخَاصُمِ قَدْ أُمِرْتُمْ فَاحْذَرُوْا</th>
            <th class="center">281</th>
            <th class="justify">جَدَلٌ وَعِلْمٌ لَيْسَ يَجْتَمِعَانِ</th>
        </tr>

        <tr>
            <th class="justify">سَيَكُوْنُ قَوْمٌ قَائِلُوْنَ بِلَا قَدَرْ</th>
            <th class="center">282</th>
            <th class="justify">فَاللهُ يَمْسَخُهُمْ بِكُلِّ هَوَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاذْكُرْ مُحَاجَجَةَ الْمُكَلَّمِ آَدَمٍ</th>
            <th class="center">283</th>
            <th class="justify">إِذْ لَامَهُ مُوْسَى عَلَى الْعِصْيَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَأَجَابَهُ أَتَلُوْمُنِيْ وَاللهُ قَد</th>
            <th class="center">284</th>
            <th class="justify">دَّرَهُ عَلَيَّ بِلَا خِيَارٍ ثَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">مَا أَخْطَأَ الْإِنْسَانَ لَيْسَ يُصِيْبُهُ</th>
            <th class="center">285</th>
            <th class="justify">كَلَّا وَلَا الْعَكْسُ احْفَظَنْ هَاتَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ فَعَمْرُو بْنُ الْعُبَيْدِ لَكَافِرٌ</th>
            <th class="center">286</th>
            <th class="justify">قَدْ كَانَ يَهْجُرُهُ أُولُو الْعِرْفَانِ</th>
        </tr>

        <tr>
            <th class="justify">بَلْ لَا يَرُدُّوْنَ السَّلَامَ عَلَيْهِ إِنْ</th>
            <th class="center">287</th>
            <th class="justify">لَاقَوْهُ فِيْ بَلَدٍ مِنَ الْبُلْدَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانْ يَكْذِبُ فِي الْحَدِيْثِ إِذَا رَوَى</th>
            <th class="center">288</th>
            <th class="justify">وَلِصَحْبِ أَحْمَدَ حَامِلُ الْأَضْغَانِ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانَ يُفْتِيْ كَاذِبًا دَوْمًا عَلَى الْـ</th>
            <th class="center">289</th>
            <th class="justify">ـحَسَنِ الْإِمَامِ الْعَالِمِ الرَّبَّانِيْ</th>
        </tr>

        <tr>
            <th class="justify">قَدْ كَانَ يُنْكِرُ أَنَّ أَحْمَدَ جَاءَنَا</th>
            <th class="center">290</th>
            <th class="justify">بِالدِّيْنِ فِيْهِۦ فِطْرَةُ الْإِنْسَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ حَدِيْثَ مُحَمَّدٍ عَنْ رَبِّنَا</th>
            <th class="center">291</th>
            <th class="justify">إِذْ كَانَ يُثْبِتُ أَنْ لَهُ عَيْنَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِذْ قَالَ أَنَّ اللهَ لَيْسَ بِأَعْوَرٍ</th>
            <th class="center">292</th>
            <th class="justify">وَالْأَعْوَرُ الدَّجَّالُ ذُو الْكُفْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">فِيْ عَيْنِهِ الْيُمْنَى وَجَعْدٌ آدَمٌ</th>
            <th class="center">293</th>
            <th class="justify">أَتْبَاعُهُ صَالُوْا الْحَمِيْمَ الْآنِ</th>
        </tr>

        <tr>
            <th class="justify">فِيْ وَجْهِهِ مَكْتُوْبٌ انْ هُوَ كَافِرٌ</th>
            <th class="center">294</th>
            <th class="justify">لَيْسَتْ تُرَى مِنْ غَيْرِ ذِي الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">لَا يَقْرَبُ الْبَيْتَ الْحَرَامَ مَعَ الْمَدِيْـ</th>
            <th class="center">295</th>
            <th class="justify">ـنَةِ بِالْمَلَائِكِ مِنْهُ مَحْفُوْظَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَكَذَلِكَ الْأَقْصَى وَطُوْرٌ لَيْسَ يَقْـ</th>
            <th class="center">296</th>
            <th class="justify">ـرَبُهُ وَفِيْ نِيْرَانِهِ لَجِنَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَجِنَانُهُ نَارٌ وَيَمْكُثُ أَرْبَعِيْـ</th>
            <th class="center">297</th>
            <th class="justify">ـنَ يَطُوْفُ كُلَّ الْأَرْضِ مِنْ فَتَّانِ</th>
        </tr>

        <tr>
            <th class="justify">وَيَقُوْلُ لِلشَّجَرِ انْبُتَنَّ وَيُمْطِرُ الْـ</th>
            <th class="center">298</th>
            <th class="justify">ـأَمْطَارَ مِثْلَ الْوَابِلِ الْهَتَّانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاذْكُرْ حَدِيْثَ تَمِيْمٍ الدَّارِيَّ إِذْ</th>
            <th class="center">299</th>
            <th class="justify">لَاقَوْهُ عِنْدَ جَزِيْرَةٍ بِعَيَانِ</th>
        </tr>

        <tr>
            <th class="justify">إِذْ قَالَ إِنِّيْ خَارِجٌ فِيْكُمْ فَمَنْ</th>
            <th class="center">300</th>
            <th class="justify">يُؤْمِنْ بِأَحْمَدَ يَنْجُ مِن نِيْرَانِيْ</th>
        </tr>

        <tr>
            <th class="justify">وَاسْمَعْ حَدِيْثَ شُيُوْخِنَا وَمَقَالِهِمْ</th>
            <th class="center">301</th>
            <th class="justify">فِيْ أَهْلِ كُفْرٍ لَا عَلَى الْإِيْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَعْنِيْ الرَّوَافِضَ شَرُّ مَنْ وَطِئَ الْحَصَى</th>
            <th class="center">302</th>
            <th class="justify">مِنْ كُلِّ إِنْسٍ نَاطِقٍ أَوْ جَانِ</th>
        </tr>

        <tr>
            <th class="justify">فَعَلِيُّ عِنْدَهُمُ الْوَصِيُّ لِأَحْمَدٍ</th>
            <th class="center">303</th>
            <th class="justify">مِنْ دُوْنِ أَنْ يُوْصِيْ أَيَجْتَمِعَانِ</th>
        </tr>

        <tr>
            <th class="justify">شَتَمُوْا أَبَا بَكْرٍ وَثَانِيَ صَحْبِهِ</th>
            <th class="center">304</th>
            <th class="justify">عُمَرًا مُعَاوِيَةً وَمَعْ عُثْمَانِ</th>
        </tr>

        <tr>
            <th class="justify">غَلَتِ الرَّوَافِضُ فِيْ عَلِيٍّ مِثْلَ مَا</th>
            <th class="center">305</th>
            <th class="justify">فَعَلَ النَّصَارَى عَابِدُوا الرُّهْبَانِ</th>
        </tr>

        <tr>
            <th class="justify">عُثْمَانُ خَيْرٌ مِنْ عَلِيٍّ حُكْمُهُ</th>
            <th class="center">306</th>
            <th class="justify">مِنْ دُوْنِ تَلْبِيْسٍ وَدُوْنِ طِعَانِ</th>
        </tr>

        <tr>
            <th class="justify">وَاعْلَمْ فَصِفِّيْنٌ لَأَمْرٌ فِيْهِ لَبْـ</th>
            <th class="center">307</th>
            <th class="justify">ـسٌ بَيْنَ طَائِفَتَيْنِ يَقْتَتِلَانِ</th>
        </tr>

        <tr>
            <th class="justify">خَيْرُ الْبَرَايَا بَعْدَ كُلِّ الْأَنْبِيَا</th>
            <th class="center">308</th>
            <th class="justify">هُوَ أَوَّلُ الْخُلَفَا بِلَا نُكْرَانِ</th>
        </tr>

        <tr>
            <th class="justify">أَبْطَى عَلِيٌّ وَالزُّبَيْرُ بِبَيْعَةٍ</th>
            <th class="centerer">309</th>
            <th class="justify">فَأَتَى بِهِمْ لِيُبَايِعُوْا بِأَمَانِ</th>
        </tr>
        <tr>
            <th class="justify">مِنْ بَعْدِهِ عُمَرُ الَّذِيْ قَدْ كَانَ يَهْـ</th>
            <th class="centerer">310</th>
            <th class="justify">ـرُبُ مِنْهُ كُلُّ جَمَاعَةِ الشَّيْطَانِ</th>
        </tr>
        <tr>
            <th class="justify">مِنْ بَعْدِهِ عُثْمَانُ نَسْكُتُ بَعْدَهُ</th>
            <th class="centerer">311</th>
            <th class="justify">وَعَلِيُّ كَانَ خَلِيْفَةً رَبَّانِيْ</th>
        </tr>
        <tr>
            <th class="justify">وَاذْكُرْ حَدِيْثَ سَعِيْدٍ بْنِ مُسَيَّبٍ</th>
            <th class="centerer">312</th>
            <th class="justify">إِذْ كَانَ مَعْ عُثْمَانَ يَسْتَبَّانِ</th>
        </tr>
        <tr>
            <th class="justify">سَبَّا شَدِيْدًا ثُمَّ جَاءَ إِلَيْهِمَا</th>
            <th class="centerer">313</th>
            <th class="justify">فِي اللَّيْلِ إِذْ صَارَا كَمَا الْإِخْوَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاعْلَمْ فَأَوْلَادُ الْحُسَيْنِ مَقَالُهُمْ</th>
            <th class="centerer">314</th>
            <th class="justify">وِدٌّ كَذَاكَ مَحَبَّةُ الشَّيْخَانِ</th>
        </tr>
        <tr>
            <th class="justify">إِذْ قَالَ جَدُّهُمُ مُحِبٌّ مُفْرِطٌ</th>
            <th class="centerer">315</th>
            <th class="justify">أَوْ مُبْغِضٌ هُمْ فِيَّ طَائِفَتَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَكِلَاهُمَا قَد ضَلَّ عَنْ نَهْجِ الْهُدَى</th>
            <th class="centerer">316</th>
            <th class="justify">فَالْحَقُّ أَنْ يَتَوَسَّط الطَّرَفَانِ</th>
        </tr>
        <tr>
            <th class="justify">أَوْصَى النَّبِيُّ مُحَمَّدٌ أَنْ نَتَّبِعْ</th>
            <th class="centerer">317</th>
            <th class="justify">نَهْجَ الْإِمَامِ بِعَضَّةِ الْأَسْنَانِ</th>
        </tr>
        <tr>
            <th class="justify">أَعْنِي الْإمَامَ الرَّاشِدَ الْمَهْدِيَّ مِنْ</th>
            <th class="centerer">318</th>
            <th class="justify">بَعْدِ النَّبِيِّ هُمَا لَهُ صِفَتَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَاعْلَمْ عَذَابُ الْقَبْرِ حَقٌّ قَدْ أَتَى</th>
            <th class="centerer">319</th>
            <th class="justify">فِيْ مُحْكَمِ التَّنْزِيْلِ وَالْقُرْءَانِ</th>
        </tr>
        <tr>
            <th class="justify">فِيْ آلِ فِرْعَوْنٍ وَإِنَّ يَهُوْدَ أَيْضًـ</th>
            <th class="centerer">320</th>
            <th class="justify">ـا فِيْ قُبُوْرِهِمُۥ لَفِي النِّيْرَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَلَقَدْ أُمِرْنَا أَن نَّعُوْذَ بِرَبِّنَا</th>
            <th class="centerer">321</th>
            <th class="justify">مِنْ فِتْنَةٍ فِي الْقَبْرِ كُلَّ زَمَانِ</th>
        </tr>
        <tr>
            <th class="justify">فِي الْقَبْرِ يُفْتَنُ كُلُّ إِنْسَانٍ وَيُسْـ</th>
            <th class="centerer">322</th>
            <th class="justify">ـأَلُ عَنْ نَبِيِّ التَّوْبِ وَالْإِيْمَانِ</th>
        </tr>
        <tr>
            <th class="justify">فَمُثَبَّتٌ نَاجٍ كَذَاكَ مُنَافِقٌ</th>
            <th class="centerer">323</th>
            <th class="justify">مِنْ بَعْدِ دَفْنٍ جَاءَهُ الْمَلَكَانِ</th>
        </tr>
        <tr>
            <th class="justify">إِنْ كَانَ مِنْ خَيْرٍ فَخَيْرٌ حَلَّهُ</th>
            <th class="centerer">324</th>
            <th class="justify">أَمَّا الْمُنَافِقُ فِيْ حَمِيْمٍ آنِ</th>
        </tr>
        <tr>
            <th class="justify">يُؤْتَى بِمِطْرَاقٍ فَيُضْرَبُ رَأْسُهُ</th>
            <th class="centerer">325</th>
            <th class="justify">مِنْ بَيْنِ أُذْنَيْهِۦ عَلَى الْكُفْرَانِ</th>
        </tr>
        <tr>
            <th class="justify">فَهُنَاكَ يَصْرُخُ صَرْخَةً لَا يَسْمَعُ الصَّـ</th>
            <th class="centerer">326</th>
            <th class="justify">ـرَخَاتِ مَخْلُوقٌ مِنَ الثَّقَلَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَمَقَاعِدُ الْجَنَّاتِ وَالنِّيْرَانِ فِيْ</th>
            <th class="centerer">327</th>
            <th class="justify">هَذِي الْقُبُوْرِ هُمَا لَمَعْرُوْضَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَالرُّوْحُ إِنْ كَانَتْ لِشَخْصٍ مُؤْمِنٍ</th>
            <th class="centerer">328</th>
            <th class="justify">فَالرُّوْحُ صَاعِدَةٌ إِلَى الرَّحْمَنِ</th>
        </tr>
        <tr>
            <th class="justify">وَيُقَالُ يَا نَفْسًا حَمِيْدَةً اخْرُجِيْ</th>
            <th class="centerer">329</th>
            <th class="justify">بُشْرَاكُمُ بِالرَّوْحِ وَالرَّيْحَانِ</th>
        </tr>
        <tr>
            <th class="justify">أَمَّا إِذَا كَانَتْ لِشَخْصٍ كَافِرٍ</th>
            <th class="centerer">330</th>
            <th class="justify">فَالرُّوْحُ تُطْرَحُ أَسْفَلَ الْقِيْعَانِ</th>
        </tr>
        <tr>
            <th class="justify">إِنَّ الْخَوَارِجَ هُمْ كِلَابُ النَّارِ إِذْ</th>
            <th class="centerer">331</th>
            <th class="justify">خَرَجُوْا كَمَا سَهْمٌ مِنَ الْإِيْمَانِ</th>
        </tr>
        <tr>
            <th class="justify">فَالصُّفْرُ مِنْهُمْ وَالْأَزَارِقَةُ الْأُلَى</th>
            <th class="centerer">332</th>
            <th class="justify">وَكَذَا الْحَرُوْرِيُّوْنَ فِي الْكُفْرَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَقِتَالُهُمْ فِيْهِۦ ثَوَابٌ قَالَهُ</th>
            <th class="centerer">333</th>
            <th class="justify">خَيْرُ الْبَرَايَا مِنْ بَنِيْ عَدْنَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَبِذَاكَ تَمَّ النَّظْمُ نَظْمًا مُوْضِحًا</th>
            <th class="centerer">334</th>
            <th class="justify">لِعَقِيْدَةٍ فِيْ غَابِرِ الْأَزْمَانِ</th>
        </tr>
        <tr>
            <th class="justify">لِعَقِيْدَةِ السَّلَفِ الَّذِيْنَ تَحَمَّلُوْا</th>
            <th class="centerer">335</th>
            <th class="justify">نَقْلَ الدِّيَانَةِ لِلرَّعِيْلِ الْفَانِيْ</th>
        </tr>
        <tr>
            <th class="justify">مَسْطُوْرَةً بِكِتَابِ نَجْلِ إِمَامِنَا</th>
            <th class="centerer">336</th>
            <th class="justify">ذَاكَ ابْنُ حَنْبَلَ أَحْمَدُ الشَّيْبَانِيْ</th>
        </tr>
        <tr>
            <th class="justify">هَذِيْ الْعَقِيْدَةُ لِلْفُؤَادِ دَوَاؤُهُ</th>
            <th class="centerer">337</th>
            <th class="justify">مِمَّا يَرَى مِنْ وَحْشَةٍ وَيُعَانِيْ</th>
        </tr>
        <tr>
            <th class="justify">مِنْ غَيْرِ زَيْغٍ عَنْ طَرِيْقِ مُحَمَّدٍ</th>
            <th class="centerer">338</th>
            <th class="justify">بَلْ وَاضِحٌ لِلتَّائِهِ الْحَيْرَانِ</th>
        </tr>
        <tr>
            <th class="justify">فَاللهَ نَسْأَلُهُ جِنَانَ الْخُلْدِ لَا</th>
            <th class="centerer">339</th>
            <th class="justify">لَغْوٌ وَلَا التَّأْثِيْمُ مَوْجُوْدَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَكَذَاكَ نَسْأَلُهُ الْمُرُوْرَ بِلَا حِسَا</th>
            <th class="centerer">340</th>
            <th class="justify">بٍ يَوْمَ يَجْعَلُ شَيْبَةَ الْوِلْدَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَكَذَاكَ نَسْأَلُهُ فَنَاءَ الْأَشْعَرِ</th>
            <th class="centerer">341</th>
            <th class="justify">يَّـةِ فِيْ جَمِيْعِ الْمُدْنِ وَالْبُلْدَانِ</th>
        </tr>
        <tr>
            <th class="justify">وَكَذَاكَ أَسْأَلُهُ قَبُوْلَ قَصِيْدَتِيْ</th>
            <th class="centerer">342</th>
            <th class="justify">وَتَكُوْنَ رِيَّا فِيْ صَدَى الْعَطْشَانِ</th>
        </tr>
        <tr>
            <th class="justify">ثُمَّ الصَّلَاةُ عَلَى النَّبِيِّ وَآلِهِ</th>
            <th class="centerer">343</th>
            <th class="justify">مَا دَامَ ذَا الْقَمَرَانِ يَعْتَقِبَانِ</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="شر العباد.php"><span>&#8678;</span>رأيت رجالا عن الدين ضلوا</a>
        <a class="active" href="نظم السنة.php">أبدا بحمد الله صلاته</a>
        <a href="ثمود.php">أهلكت ثمود جمعا<span>&#8680;</span></a>
    </div>
</body>

</html>