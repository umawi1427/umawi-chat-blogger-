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
            <th class="justify">أيا علماء الدين والفقه والهدى</th>
            <th class="center">1</th>
            <th class="justify">تحيرت دلوني بأوضح حجة</th>
        </tr>
        <tr>
            <th class="justify">إذا ما قضى هذا الكفور بزعمه</th>
            <th class="center">2</th>
            <th class="justify">بإيمان أهل الكفر شر البرية</th>
        </tr>
        <tr>
            <th class="justify">وسوى بجهل بين إيمان كافر</th>
            <th class="center">3</th>
            <th class="justify">وإيمان جبريل فقد جا بفرية</th>
        </tr>
        <tr>
            <th class="justify">وقال كلام الله ليس كلامه</th>
            <th class="center">4</th>
            <th class="justify">ورد أحاديث النبي بحيلة</th>
        </tr>
        <tr>
            <th class="justify">فكم قد أحل الكلب من فرج محصن</th>
            <th class="center">5</th>
            <th class="justify">فهذي مقالات السفيه الشنيعة</th>
        </tr>
        <tr>
            <th class="justify">وأيضا أحل الأكل من لحم صحبه</th>
            <th class="center">6</th>
            <th class="justify">لحوم الخنازير الألى الوثنية</th>
        </tr>
        <tr>
            <th class="justify">فقد كان هذا النذل ينقض ديننا</th>
            <th class="center">7</th>
            <th class="justify">ويبدله أيضا إلى غير شرعة</th>
        </tr>
        <tr>
            <th class="justify">وصاحب إرجاء خبيث كشيخه الـ</th>
            <th class="center">8</th>
            <th class="justify">ـكفور ابن صفوان ورأس البلية</th>
        </tr>
        <tr>
            <th class="justify">وقد عرضوهُ مرتين لكفره</th>
            <th class="center">9</th>
            <th class="justify">على السيف حتى يرجعن للشريعة</th>
        </tr>
        <tr>
            <th class="justify">وقد نقل الأعلام عن سلف مضى</th>
            <th class="center">10</th>
            <th class="justify">بإجماعهم أقوالهم في الوقيعة</th>
        </tr>
        <tr>
            <th class="justify">بذاك الكفور الواضح الخبث دينُه</th>
            <th class="center">11</th>
            <th class="justify">وما فيه من حقد علينا وسوأة</th>
        </tr>
        <tr>
            <th class="justify">فبالله هل هذا الكفور وقوله</th>
            <th class="center">12</th>
            <th class="justify">مساوٍ لأعلام كرام السجية</th>
        </tr>
        <tr>
            <th class="justify">كأحمد مصباح الدجى وعصابة</th>
            <th class="center">13</th>
            <th class="justify">بدين الهدى تعلو على كل غية</th>
        </tr>
        <tr>
            <th class="justify">أو الشافعي مَعْهُ أو الحبر مالك</th>
            <th class="center">14</th>
            <th class="justify">على دين أهل الحق أهل الشريعة</th>
        </tr>
        <tr>
            <th class="justify">فماذا عساني غير كونيَ قائلا</th>
            <th class="center">15</th>
            <th class="justify">إلى النار طرا معشر الحنفية</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="سني.php"><span>&#8678;</span>ما دمت سنيا على</a>
        <a class="active" href="أبو جيفة.php">أيا علماء الدين والفقه والهدى</a>
        <a href="حسيني.php">حسن الحسيني دعك من هذي السفا<span>&#8680;</span></a>
    </div>
</body>

</html>