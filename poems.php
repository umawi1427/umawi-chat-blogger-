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
            <th class="justify">بَدَاْتُ بِبِسْم الله في النَّظْمِ وَالشُّكَرْ</th>
            <th class="center">1</th>
            <th class="justify">لِرَبٍّ عَظِيْمٍ وَّاحِدٍ جَلَّ واسْتَقَرّْ</th>
        </tr>
        <tr>
            <th class="justify">عَلى عرشه فوق الخلائق جالِسٌ</th>
            <th class="center">2</th>
            <th class="justify">وَكَمْ مِنْ عُصاة مذنبين لهم غَفَرْ</th>
        </tr>
        <tr>
            <th class="justify">سوى الشرك إن المشركين قد افْتَرَوْا</th>
            <th class="center">3</th>
            <th class="justify">على الله إِثْمَاً قُلْ عَظِيْمَاً ومُحْتَقَرْ</th>
        </tr>
        <tr>
            <th class="justify">وبَعْدُ صلاة الله ثُمَّ سَلَامُهُ</th>
            <th class="center">4</th>
            <th class="justify">على أَحْمَدَ الْهَادِي النَّبِيْ أَفْضَلِ الْبَشَرْ</th>
        </tr>
        <tr>
            <th class="justify">وأصحابِهِ الأَعْلَامِ مَن نَقَل الهُدى</th>
            <th class="center">5</th>
            <th class="justify">إلينا ومَنْ ءاوى النبيَّ وَمن نَّصَرْ</th>
        </tr>
        <tr>
            <th class="justify">وبَعْدَهُمُۥ فالتابعون لِسُنَّةٍ</th>
            <th class="center">6</th>
            <th class="justify">أَلا فارْضَ عَنْهُمْ بِالْعَشِيِّ وَبِالبُكَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَأَذْكُرُ في ذَا النَّظْمِ أَخْبَارَ الَانْبِيا</th>
            <th class="center">7</th>
            <th class="justify">كَمَا جَاءَ في الآثارِ صَحَّ بِهَا الْخَبَرْ</th>
        </tr>
        <tr>
            <th class="justify">فأوَّلُهُم في الذِّكْرِ ءادَمٌ الَّذِيْ</th>
            <th class="center">8</th>
            <th class="justify">مِنَ الطِّيْنِ مَخْلُوقٌ وَهُوْ أُوَّلُ الْبَشَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَمِنْ ضِلْعِهِ حَوَّاءُ قَدْ خُلِقَتْ لَهُ</th>
            <th class="center">9</th>
            <th class="justify">فكانت له زوجا وطاب بها وَقَرّْ</th>
        </tr>
        <tr>
            <th class="justify">بجَنَّاتِ عَدْنٍ ثم ذاقا مُحَرَّمَاً</th>
            <th class="center">10</th>
            <th class="justify">فأهْبَطَهُمْ لِلْأَرضِ ثُمَّ بِهَا اسْتَقَرّْ</th>
        </tr>
        <tr>
            <th class="justify">وَقُلْ بَعْدَهُ شِيْثٌ هُوَ ابْنٌ لآدَمٍ</th>
            <th class="center">11</th>
            <th class="justify">نَبِيٌّ مِّنَ السُّرْيَانِ وَاخْنُوْخٍ اسْتَمَرّْ</th>
        </tr>
        <tr>
            <th class="justify">وَمِنْ بَعْدِهِ نُوْحٌ فَأَشْرَكَ قَوْمُهُ</th>
            <th class="center">12</th>
            <th class="justify">فَأَنْشَأَ بِالأَلْوَاحِ فُلْكَاً وَّبِالدُّسُرْ</th>
        </tr>
        <tr>
            <th class="justify">فَأُنْجِيْ وَمَنْ مَّعْهُ وَأُهْلِكَ قَوْمُهُ</th>
            <th class="center">13</th>
            <th class="justify">بِأَعْظَمِ طُوْفَانٍ فَأُهْلِكَ مَنْ كَفَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَمِنْ بَعْدِهِ هُوْدٌ فَكَذَّبَ قَوْمُهُ</th>
            <th class="center">14</th>
            <th class="justify">فَبُعْدَاً لِّعَادٍ أَهْلُ كِبْرٍ وَّأَهْلُ شَرّْ</th>
        </tr>
        <tr>
            <th class="justify">أَتاهم عذاب اللهِ رِيْحٌ شَدِيْدَةٌ</th>
            <th class="center">15</th>
            <th class="justify">بِأَيَّامِ نَحْسٍ لَّمْ تُبَقِّي وَلَمْ تَذَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَمِنْ بَعْدِهِ في الأنبياء لَصَالِحٌ</th>
            <th class="center">16</th>
            <th class="justify">نبي الهُدَى قَد جَا بِتَوْحِيْدِ مَنْ فَطَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَأَعْرَضَ عَنْهُۥ قَوْمُهُ وَثَمُوْدُ هُمْ</th>
            <th class="center">17</th>
            <th class="justify">كَأَسْلافِهِمْ في الكُفْرِ عَادٌ وَّمَنْ غَبَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَجَاءَ بِمَا شاءوا مِنَ الصَّخْرِ نَاقَةٌ</th>
            <th class="center">18</th>
            <th class="justify">فَصَاحِبَهُمْ نَادَوْا تَعَاطَى وَقَدْ عَقَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَكَانَتْ ثَمُوْدٌ مِّثْلَ عَادٍ بِصَيْحَةٍ</th>
            <th class="center">19</th>
            <th class="justify">قَدَ اهْلَكَهُمْ رَبِّي الْعَظِيْمُ كَمَا ذَكَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَمِنْ بَعْدُ ابْرَاهَامُ مَنْ كَانَ أُمَّةً</th>
            <th class="center">20</th>
            <th class="justify">وَمَنْ قَوْمَهُ تَوْحِيْدَ رَبِّهِمُۥ أَمَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَحَطَّمَ أَصْنَامَاً لَّهُمْ غَيْرَ وَاحِدٍ</th>
            <th class="center">21</th>
            <th class="justify">وَكَانَ بِهَذَا الفِعْلِ فَعْلَتَهُ سَتَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَلَكِنَّهُمْ قَدْ أُخْبِرُوا فَأَتَوْا بِهِ</th>
            <th class="center">22</th>
            <th class="justify">إِلى النَّارِ لَكِنْ لَمْ يَمُوْتَ وَلَمْ يُضَرّْ</th>
        </tr>
        <tr>
            <th class="justify">وَمِنْ بَعْدُ أَمْرُ اللهِ يَذْهَبْ بِّهَاجَرٍ</th>
            <th class="center">23</th>
            <th class="justify">لِمَكَّةَ لا فِيها زُرُوْعٌ وَلا ثَمَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَمَعْهَا ابنها اسْمَاعِيْلُ ثُمَّ يَذَرْهُمَا</th>
            <th class="center">24</th>
            <th class="justify">فَمَا كَان مِنْهُۥ غيرُ تَنْفِيْذِ مَا أَمَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَلَكِنَّ رَبِّيْ لَمْ يَذَرْهُمْ وَفُجِّرَتْ</th>
            <th class="center">25</th>
            <th class="justify">لَهُمْ زَمْزَمٌ فَاسمعْ وخُذْ وافْهَمِ الْعِبَرْ</th>
        </tr>
        <tr>
            <th class="justify">وصار نَبِيَّاً ذَا الرَّضِيْعُ وبعْدَهُ</th>
            <th class="center">26</th>
            <th class="justify">أخُوهۥ نَبِيٌّ صالِحٌ جَاءَ في السُّوَرْ</th>
        </tr>
        <tr>
            <th class="justify">أَلا هُو إِسْحَاقٌ هُوَ ابْنٌ لِّسَارَةٍ</th>
            <th class="center">27</th>
            <th class="justify">وَبَعْدُ فَلُوْطٌ مَّنْ عَلَى قَوْمِهِ صَبَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَمَاتُوا جَمِيْعَاً ثُمَّ مِنْ بَعْدِهِ أَتَى</th>
            <th class="center">28</th>
            <th class="justify">شُعَيْبٌ نَّبِيُّ اللهِ بِالدِّيْنِ وَالدُّرَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَحَذَّرَهُمْ نَقْصًا لِّكَيْلٍ فأَعْرَضُوْا</th>
            <th class="center">29</th>
            <th class="justify">وَقَالُوْا لَهُ لَوْ لَمْ تَكُنْ فَاقِدَ الْبَصَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَلَوْ لَمْ تَكُنْ تِلْكَ الْعَشَائِرُ مَعْكَ قَدْ</th>
            <th class="center">30</th>
            <th class="justify">رَجَمْنَاكَ فَاسْتَهْزَوْا وَلَمْ يَاخُذُوا الحَذَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَكَانَ كعادٍ مَّعْ ثَمودٍ خِتَامُهُمْ</th>
            <th class="center">31</th>
            <th class="justify">وَفِيْ ذَاكَ ءَايَاتٌ لِّعَاقِلٍ ادَّكَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَمِنْ بَعْدُ يَعْقُوْبٌ وَّيُوْسُفٌ اِبْنُهُ</th>
            <th class="center">32</th>
            <th class="justify">وَكَانَ رأى في نَوْمِهِ الشَّمْسَ وَالْقَمَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَمَعْ أَحَدَ عْشَرْ كَوْكَبَاً سُجَّدَاً لَّهُ</th>
            <th class="center">33</th>
            <th class="justify">فَأَخْبَرْ أَبَاهُۥ ثُمَّ حَذَّرَهُ الْخَطَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَإِخْوَانُهُ هُمْ أنبياءُ أتَوا بِهِ</th>
            <th class="center">34</th>
            <th class="justify">لِجُبٍّ فَأَلْقَوْهُۥ وَيُوْسُفٌ انْتَظَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَجَاءَتْ بِهِ سَيَّارَةٌ فَاشْتَرَوْهُ ثُمْ</th>
            <th class="center">35</th>
            <th class="justify">مَ صَارَ وَزِيْرَاً فَانْظُرَنَّ إِلَى الْقَدَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَأَيُّوْبُ إِذْ نَادَى الْإِلَهَ بِأَنَّهُ</th>
            <th class="center">36</th>
            <th class="justify">مُصَابٌ مِّنَ الشَّيْطَانِ بِالنُّصْبِ وَالضَّرَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَشَافَاهُ رَبِّيْ ثُمَّ يُوْنُسُ بَعْدَهُ</th>
            <th class="center">37</th>
            <th class="justify">وَمُوْسَى نَبِيُّ اللهِ شُقَّ لَهُ الْنَّهَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَكَلَّمَهُ الرَّحْمَنُ فِي الطُّوْرِ ثُمَّ عِنْـ</th>
            <th class="center">38</th>
            <th class="justify">دَمَا قَدْ تَّجَلَّى مَا اسْتَطَاعَ النَّبِيْ وَخَرّْ</th>
        </tr>
        <tr>
            <th class="justify">فَلَمَّا أَفَاقَ اسْتَغْفَرَ اللهَ رَبَّهُ</th>
            <th class="center">39</th>
            <th class="justify">لِأَنْ كَانَ مُوْسَى قَدْ أَرَادَ لَهُ النَّظَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَقَدْ وَهَبَ الرَّحْمَنُ أَيْضَاً نَبِيَّهُ</th>
            <th class="center">40</th>
            <th class="justify">أَخَاهُ نَبِيَّاً وَهْوَ هَارُوْنٌ الْأَغَرّْ</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُ نَبِيُّ اللهِ مَنْ كَانَ عَالِمَاً</th>
            <th class="center">41</th>
            <th class="justify">وَعَلَّمَهُ مِنْ لَّدْنِهِ وَهُوَ الْخَضِرْ</th>
        </tr>
        <tr>
            <th class="justify">وَصَاحَبَهُ مُوْسَى النَّبِيُّ لِعِلْمِهِ</th>
            <th class="center">42</th>
            <th class="justify">كَمَا جَاءَ فِي الْقُرْآنِ فِي الْكَهْفِ قَدْ ذُكِرْ</th>
        </tr>
        <tr>
            <th class="justify">وإِدْرِيْسُ قُلْ مِنْ بَعْدِهِ لَيْسَعٌ أَتَى</th>
            <th class="center">43</th>
            <th class="justify">وَذُو الْكِفْلِ أَيضا فَاذْكُرَنْهُمْ لِمَنْ ذَكَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَبَعْدُ ابْنُ نُوْنٍ يُّوْشَعٌ جَاءَ ذِكْرُهُ</th>
            <th class="center">44</th>
            <th class="justify">بِسُنَّةِ أزْكَى مَنْ يَّسِيْرُ عَلَى الْعَفَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَإِلْيَاسُ مَنْ جَا قَوْمَهُ لِيُوَحِّدُوا</th>
            <th class="center">45</th>
            <th class="justify">إِلَهَهُمُۥ لَكِنَّهُمْ كَذَّبُوا الْخَبَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَقَدْ أَشْرَكُوْا بِاللهِ فَاللهُ رَبُّهُمْ</th>
            <th class="center">46</th>
            <th class="justify">مُجَازِيْهِمُۥ فِيْ يَوْمِ يَحْضُرُ مَنْ حَضَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَقُلْ بَعْدَهُ دَاوُۥدُ ثُمَّ أَتَى ابْنُهُ</th>
            <th class="center">47</th>
            <th class="justify">سُلَيْمَانُ وَاذْكُرْهُۥ مَعَ الْأَرْبَعِ النَّفَرْ</th>
        </tr>
        <tr>
            <th class="justify">سُلَيْمَانُ مَعْ نُمْرُوْذَ فَاذْكُرْ كِلَيْهِمَا</th>
            <th class="center">48</th>
            <th class="justify">وَمَعْهُمْ فَذُو الْقَرْنَيْنِ ثُمَّ بُخُتْنَصَرْ</th>
        </tr>
        <tr>
            <th class="justify">مُلُوْكٌ لِّأَرْضٍ وِّفْقَ قَوْلِ مُجَاهِدٍ</th>
            <th class="center">49</th>
            <th class="justify">وَمُلْكُ سُلَيْمَانٍ عَلَى الْجِنِّ وَالْبَشَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَقُلْ بَعْدَهُ قَدْ جَاءَ دَنْيَالُ وَهْوَ ذُو الْـ</th>
            <th class="center">50</th>
            <th class="justify">ـأُسُوْدِ وَزَكْرِيَّا وَيَحْيَى الَّذِي اشْتَهَرْ</th>
        </tr>
        <tr>
            <th class="justify">هُوَ ابْنٌ لَّهُ لَكِنَّهُ جَا بِمُعْجِزٍ</th>
            <th class="center">51</th>
            <th class="justify">مِنَ اللهِ رَبِّيْ حِيْنَ بَلَّغَهُ الْكِبَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَقُلْ بَعْدَهُ قَدْ جَاءَ عِيْسَى ابْنُ مَرْيَمٍ</th>
            <th class="center">52</th>
            <th class="justify">وَلَيْسَ بِمَصْلُوْبٍ كَمَا قَالَ مَنْ كَفَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَلَكِنَّهُ الْمَرْفُوْعُ فَوْقُ إِلَى السَّمَا</th>
            <th class="center">53</th>
            <th class="justify">وَلَيْسَ إِلَهَاً مِّثْلَ قَوْلِ ذَوِي الْغِيَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَدَعْ عَّنْكَ مَا قَدْ أَشْرَكُوْا وَتَنَطَّعُوْا</th>
            <th class="center">54</th>
            <th class="justify">وَلَازِمْ طَرِيْقَ الْحَقِّ تَنْجُوْ مِنَ الْغَرَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَمِنْ بَعْدِهِ جَاءَ النَّبِيُّ مُحَمَّدٌ</th>
            <th class="center">55</th>
            <th class="justify">أَلَا فَاتَّبِعْ مَا جَاءَ عَنْهُ وَمَا سَطَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَلَازِمْهُ وَالْزَمْ هَدْيَهُ مَا أَتَى بِهِ</th>
            <th class="center">56</th>
            <th class="justify">مِنَ الْحَقِّ لَا تُصْغِيْ إِلَى قَوْلِ مَنْ هَذَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَإِنَّ إِلَهِيْ أَكْمَلَ الدِّيْنَ كُلَّهُ</th>
            <th class="center">57</th>
            <th class="justify">فَلَا تُحْدِثَنْ فِيْهِۦ فَتَدْخُلَ فِيْ سَقَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَقُلْ وَافْتَخِرْ وَاصْدَحْ بِدِيْنِكَ ثُمَّ لَا</th>
            <th class="center">58</th>
            <th class="justify">تَكُوْنَنَّ مِمَّنْ خَافَ أَوْ دِيْنَهُ سَتَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَلَا بِابْنِ كَرَّامٍ وَّلَا بِابْنِ دِرْهَمٍ</th>
            <th class="center">59</th>
            <th class="justify">وَلَا بِابْنِ صَفْوَانٍ نَّدِيْنُ وَلَا الْقَدَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَإِنَّ نَبِيَّ اللهِ قَدْ حَذَّرَ الْبَشَرْ</th>
            <th class="center">60</th>
            <th class="justify">مِنَ الْبِدْعِ فِيْ دِيْنِ الإِلَهِ وَقَدْ زَجَرْ</th>
        </tr>
        <tr>
            <th class="justify">فَدَعْ عَّنْكَ مَا قَدْ أَبْدَعُوْا وَتَنَطَّعُوْا</th>
            <th class="center">61</th>
            <th class="justify">فَتَشْرَبَ يَوْمَ الْحَشْرِ فِيْ صَالِحِ الزُّمَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَتَرْوَى بِمَاءِ الْحَوْضِ يَوْمَ يُذَادُ مَنْ</th>
            <th class="center">62</th>
            <th class="justify">تَنَطَّعَ فِيْ دِيْنِ الْإِلَهِ وَقَدْ جَسَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَهَذَا خِتَامُ الْقَوْلِ فِيْ ذِكْرِ الَانْبِيَا</th>
            <th class="center">63</th>
            <th class="justify">عَلَيْهِمْ صَلَاةُ اللهِ مَا سَطَعَ الْقَمَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَصَلِّ عَلَى صَحْبِ النَّبِيِّ وَءَالِهِ</th>
            <th class="center">64</th>
            <th class="justify">وَمَا بَطَنَ اغْفِرْهُۥ وَكُلَّ الَّذِيْ ظَهَرْ</th>
        </tr>
        <tr>
            <th class="justify">وَأَسْأَلُ رَبِّيْ أَنْ نَّصِيْرَ لِجَنَّةٍ</th>
            <th class="center">65</th>
            <th class="justify">مَعَ الْأَنْبِيَا فِيْ الْخُلْدِ فِيْ أَعْظَمِ الْحَبَرْ</th>
        </tr>
    </table>
    <div class="content">
        <div class="pagination">
            <a href="الفرق.php"><span>&#8678;</span>بدأت ببسم الله والشكر سَرْمَدَا</a>
            <a class="active" href="poems.php">بدأت ببسم الله في النظم والشكر</a>
        </div>
    </div>
</body>

</html>