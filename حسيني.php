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
    <table class="poem" style="height: 120px;">
        <tr>
            <th class="justify">حسن الحسيني دعك من هذي السفا</th>
            <th class="center">1</th>
            <th class="justify">هة والتميع والكلام الفاضي</th>
        </tr>
        <tr>
            <th class="justify">أتظن أنا قد نسينا فعلة</th>
            <th class="center">2</th>
            <th class="justify">شنعاء منكم في الزمان الماضي</th>
        </tr>
        <tr>
            <th class="justify">هلا سكت عن الكلام تكففا</th>
            <th class="center">3</th>
            <th class="justify">كيلا ترى شعرا عليكم قاضي</th>
        </tr>
        <tr>
            <th class="justify">فسكت عنه يا بغيض تورعا</th>
            <th class="center">4</th>
            <th class="justify">يا حامل الأوباء والأمراض</th>
        </tr>
        <tr>
            <th class="justify">إنا سبرناكم فما خلناكمُ</th>
            <th class="center">5</th>
            <th class="justify">إلا كنسوان بوقت مخاض</th>
        </tr>
        <tr>
            <th class="justify">لا علم عندكمُ سوى استعطاف هـ</th>
            <th class="center">6</th>
            <th class="justify">ـذي الناس بالنووي إذ هو غاض</th>
        </tr>
        <tr>
            <th class="justify">وكذا الصراخ كما النسا فلتسمعوا</th>
            <th class="center">7</th>
            <th class="justify">قربت لكم عملية الإجهاض</th>
        </tr>
        <tr>
            <th class="justify">حتى يكف الناس عن أقوالكم</th>
            <th class="center">8</th>
            <th class="justify">سمعا كذاك العين بالإغماض</th>
        </tr>
        <tr>
            <th class="justify">أين الحمية عند كونك والخليـ</th>
            <th class="center">9</th>
            <th class="justify">ـلي كافر ذو بدعة وإباضي</th>
        </tr>
        <tr>
            <th class="justify">أو عند كونك والنصارى ضاحكا</th>
            <th class="center">10</th>
            <th class="justify">أظننت نخفيها بكل تغاض</th>
        </tr>
        <tr>
            <th class="justify">أين الجناحان الذين تريهما</th>
            <th class="center">11</th>
            <th class="justify">رحما لأهل الكفر بالإخفاض</th>
        </tr>
        <tr>
            <th class="justify">أفعنهمُ راض ولست بمغضب</th>
            <th class="center">12</th>
            <th class="justify">أما عن اهل الدين لست براض</th>
        </tr>
        <tr>
            <th class="justify">فاسكت هديت الرشد حتى لا ترى</th>
            <th class="center">13</th>
            <th class="justify">فرساننا راميك بالمعراض</th>
        </tr>
        <tr>
            <th class="justify">أو قارضين لسان صحبك يا فتى</th>
            <th class="center">14</th>
            <th class="justify">يا صاحب الإرجاء بالمقراض</th>
        </tr>
        <tr>
            <th class="justify">تحيون مذهب مرجئ متهالك</th>
            <th class="center">15</th>
            <th class="justify">جدرانه دفنته في الأنقاض</th>
        </tr>
        <tr>
            <th class="justify">فالله نسأله ثباتا دائما</th>
            <th class="center">16</th>
            <th class="justify">حتى ننعم عنده برياض</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="أبو جيفة.php"><span>&#8678;</span>أيا علماء الدين والفقه والهدى</a>
        <a class="active" href="حسيني.php">حسن الحسيني دعك من هذي السفا</a>
        <a href="عامر بهجت.php">إن الإله والنبي عظما<span>&#8680;</span></a>
    </div>
</body>

</html>