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
            <th class="justify">ذهبت قريش بالمكارم كلها</th>
            <th class="center">1</th>
            <th class="justify">واللؤم تحت عمائم الأتراك</th>
        </tr>
        <tr>
            <th class="justify">يا ويح حركي مريد عودة الـ</th>
            <th class="center">2</th>
            <th class="justify">ـأتراك أهل الكفر والإشراك</th>
        </tr>
        <tr>
            <th class="justify">كان الأئمة قبلهم في أمنة</th>
            <th class="center">3</th>
            <th class="justify">والعرب حكمهمُ على الأملاك</th>
        </tr>
        <tr>
            <th class="justify">حتى أتتهم ضربة لم يحسبوا</th>
            <th class="center">4</th>
            <th class="justify">حسبانها من عصبة الأتراك</th>
        </tr>
        <tr>
            <th class="justify">بئسوا ودولتهم لقد كانت كما</th>
            <th class="center">5</th>
            <th class="justify">ظلمات ليل واضح الإحلاك</th>
        </tr>
        <tr>
            <th class="justify">لم يقربوا الإسلام لا شبرا ولا</th>
            <th class="center">6</th>
            <th class="justify">باعا وفي كفر ذوو إحباك</th>
        </tr>
        <tr>
            <th class="justify">بل دينهم هو دين تيس أرعن</th>
            <th class="center">7</th>
            <th class="justify">لم يسو من نعلي أي شراك</th>
        </tr>
        <tr>
            <th class="justify">ذاك الخبيث الفارسي أبو حنيـ</th>
            <th class="center">8</th>
            <th class="justify">ـفة غارز في الدين بالأشواك</th>
        </tr>
        <tr>
            <th class="justify">بل جيفة قد سد بطن الأرض فيـ</th>
            <th class="center">9</th>
            <th class="justify">ـه بئس ما قد قال من شكاك</th>
        </tr>
        <tr>
            <th class="justify">حتى أتانا النصر من رب العبا</th>
            <th class="center">10</th>
            <th class="justify">د عليهمُ من بعد طول عراك</th>
        </tr>
        <tr>
            <th class="justify">ومعارك دامت طويلا معْهمُ</th>
            <th class="center">11</th>
            <th class="justify">حتى تركناهم بغير سماك</th>
        </tr>
        <tr>
            <th class="justify">إنا ضربناهم بضرب موجع</th>
            <th class="center">12</th>
            <th class="justify">خروا بدون تنفس وحراك</th>
        </tr>
        <tr>
            <th class="justify">من بعد سلطان وملك ظالم</th>
            <th class="center">13</th>
            <th class="justify">أضحوا ولم يسووا بعود أراك</th>
        </tr>
        <tr>
            <th class="justify">ظنوا بأن تسلط الكفر الذي</th>
            <th class="center">14</th>
            <th class="justify">فيهِ همُ باق بلا إدراك</th>
        </tr>
        <tr>
            <th class="justify">والحمد للرحمن طرا سرمدا</th>
            <th class="center">15</th>
            <th class="justify">باري البرايا خالق الأفلاك</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="عاد.php"><span>&#8678;</span>أهلكت عاد بريح</a>
        <a class="active" href="قريش.php">ذهبت قريش بالمكارم كلها</a>
        <a href="بنو أمية.php">بنو أمية هم من ناصروا الدين<span>&#8680;</span></a>
    </div>
</body>

</html>