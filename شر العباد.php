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
            <th class="justify">رأيت رجالا عن الدين ضلوا</th>
            <th class="center"></th>
            <th class="justify">ولم يكتفوا بل همُ قد أضلوا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">1</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وقد كفروا أين راحوا وحلوا</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">فمذهبهم بالضلالة قائم</th>
            <th class="center"></th>
            <th class="justify">وفكرهمُ مثل فكر البهائم</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">2</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">عن الدين قد حجبوا بالغمائم</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">ولم يكفهم نشرهم للفساد</th>
            <th class="center"></th>
            <th class="justify">وكفرهمُ في جميع البلاد</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">3</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وظلمهمُ كل أهل الرشاد</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">ولم يستعدوا ليوم التناد</th>
            <th class="center"></th>
            <th class="justify">سيُسمع فيه مناد ينادي</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">4</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">ولا ينفع الأهل حتى النوادي</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">فإيمانهم غير إيماننا</th>
            <th class="center"></th>
            <th class="justify">وأديانهم غير أدياننا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">5</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">ومعبودهم غير معبودنا</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">فلم يثبتوا للإله العظيم</th>
            <th class="center"></th>
            <th class="justify">صعودا على العرش عرشٍ كريم</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">6</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وليسوا على نهجنا المستقيم</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر البعاد</th>
        </tr>
        <tr>
            <th class="justify">وليس لديهم من الحرمة</th>
            <th class="center"></th>
            <th class="justify">لأسلافنا خيرِ ذي الأمة</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">7</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">ذَوو بدعة وذوو فتنة</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">ولم يثبتوا للإله اليدين</th>
            <th class="center"></th>
            <th class="justify">بل ان يديه لمبسوطتين</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">8</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">فبين مقالاتنا بعد بين</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">وما أثبتوا للإله صفاتا</th>
            <th class="center"></th>
            <th class="justify">مصيرهمُ أن يكونوا رفاتا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">9</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وبعد ففي النار ذاقوا الممات</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">عليهم من الله كل اللعان</th>
            <th class="center"></th>
            <th class="justify">فما لهمُ ذرة من أمان</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">10</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">فلا تك منهم قريبا ودان</th>
            <th class="center"></th>
            <th class="justify">هم الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">وجاء لنا اليوم قوم وِضاع</th>
            <th class="center"></th>
            <th class="justify">عن الحق هم قد أُضِلُّوا وضاعوا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">11</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">فبئسا لهم كل ما قد أذاعوا</th>
            <th class="center"></th>
            <th class="justify">عن الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">لقد دُجِّن القوم مثل الدجاج</th>
            <th class="center"></th>
            <th class="justify">ومذهبهم مثل ماء أجاج</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">12</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">فما منهمُ أجودي وناجي</th>
            <th class="center"></th>
            <th class="justify">من الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">فطعنهمُ في الذين همُ</th>
            <th class="center"></th>
            <th class="justify">بمذهب أسلافنا يعلم</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">13</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">ويطعن فيمن همُ جُهِّمُوا</th>
            <th class="center"></th>
            <th class="justify">أي الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">ومدحهمُ في سفيه لعوب</th>
            <th class="center"></th>
            <th class="justify">وقد أُشْرِبوا حقه في القلوب</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">14</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">أيِ النوويَّ رديء الدروب</th>
            <th class="center"></th>
            <th class="justify">من الأشعرية شر العباد</th>
        </tr>
        <tr>
            <th class="justify">عليك أخي بالتقى والهدى</th>
            <th class="center"></th>
            <th class="justify">وحذوِ الأئمة فيما بدا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">15</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">لتنجوَ من سفهاء الردى</th>
            <th class="center"></th>
            <th class="justify">أيِ الأشعريةُ شر العباد</th>
        </tr>
        <tr>
            <th class="justify">وبعد الصلاة ومعها سلامي</th>
            <th class="center"></th>
            <th class="justify">على سيد الناس مسك الختام</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">16</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وأصحابه والقرون العظام</th>
            <th class="center"></th>
            <th class="justify">وأتباعهم زاد خير زاد</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="عامر بهجت.php"><span>&#8678;</span>إن الإله والنبي عظما</a>
        <a class="active" href="شر العباد.php">رأيت رجالا عن الدين ضلوا</a>
        <a href="نظم السنة.php">أبدا بحمد الله ثم صلاته<span>&#8680;</span></a>
    </div>
</body>

</html>