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
            <th class="justify">بنو أمية هم من ناصروا الدين</th>
            <th class="center">1</th>
            <th class="justify">سادوا قريشا وزادوا الأمر تمكينا</th>
        </tr>
        <tr>
            <th class="justify">تسعون عاما بدين الله حكمهمُ</th>
            <th class="center">2</th>
            <th class="justify">قد ركعوا أهل كفر الروم والصينا</th>
        </tr>
        <tr>
            <th class="justify">يزيد، ثم أبوه، ثم مروان</th>
            <th class="center">3</th>
            <th class="justify">كانوا لهم عباد الله تسكينا</th>
        </tr>
        <tr>
            <th class="justify">واذكر بنيه لقد كانوا لنا مثلا</th>
            <th class="center">4</th>
            <th class="justify">فالعز واردهم أو يظهروا اللينا</th>
        </tr>
        <tr>
            <th class="justify">فالعز فيهم وتقدير وحكمتهم</th>
            <th class="center">5</th>
            <th class="justify">سادت شعوبا وسادت كل أرضينا</th>
        </tr>
        <tr>
            <th class="justify">فإن أتت فتنة في بلدة لهم</th>
            <th class="center">6</th>
            <th class="justify">عاد البغاة بسفل أو جراذين</th>
        </tr>
        <tr>
            <th class="justify">فالله يرحمهم كانوا لنا عزا</th>
            <th class="center">7</th>
            <th class="justify">والعرب كانوا بعز لا يدانينا</th>
        </tr>
        <tr>
            <th class="justify">والعلم كان بأرض الله منتشرا</th>
            <th class="center">8</th>
            <th class="justify">والملك في يد حكام محبينا</th>
        </tr>
        <tr>
            <th class="justify">والناس قد بايعوهم ثم من نكثوا</th>
            <th class="center">9</th>
            <th class="justify">كان الممات لهم عندا الموالينا</th>
        </tr>
        <tr>
            <th class="justify">فالشمس قد سطعت في كل دولتهم</th>
            <th class="center">10</th>
            <th class="justify">والليل غاب وجاء اليوم يخفينا</th>
        </tr>
        <tr>
            <th class="justify">أمام كل شعوب الكفر واندثرت</th>
            <th class="center">11</th>
            <th class="justify">آمالنا ثم خبنا في مساعينا</th>
        </tr>
        <tr>
            <th class="justify">وكان آخرهم مروان ذو هبة</th>
            <th class="center">12</th>
            <th class="justify">من ربنا في أمان الله يؤوينا</th>
        </tr>
        <tr>
            <th class="justify">حتى أتاهم بنو العباس إذ غدروا</th>
            <th class="center">13</th>
            <th class="justify">كانوا العقارب، بل كانوا الثعابينا</th>
        </tr>
        <tr>
            <th class="justify">فالرحم قد قطعوا والفرس قد سطعوا</th>
            <th class="center">14</th>
            <th class="justify">والدين ما نفعوا، بل كان تهوينا</th>
        </tr>
        <tr>
            <th class="justify">لسفك دماء المسلمين بحكمهم</th>
            <th class="center">15</th>
            <th class="justify">والشر غالب أمر الفارسيين</th>
        </tr>
        <tr>
            <th class="justify">فالله يلعن من قد قتلوا جدي</th>
            <th class="center">16</th>
            <th class="justify">أو أحرقوا جثثا ما هي ستحيينا</th>
        </tr>
        <tr>
            <th class="justify">لكن صقر قريش راح أندلسا</th>
            <th class="center">17</th>
            <th class="justify">وعز دولته قد كان كافينا</th>
        </tr>
        <tr>
            <th class="justify">لكن بربرة من آل حمود</th>
            <th class="center">18</th>
            <th class="justify">قد خربوا الحكم ما وفوا الموازين</th>
        </tr>
        <tr>
            <th class="justify">فانقاد معشرهم للشام أصلهمُ</th>
            <th class="center">19</th>
            <th class="justify">وكان فيهم صلاح الدين حامينا</th>
        </tr>
        <tr>
            <th class="justify">لكن أتاهم بنو عثمان من ترك</th>
            <th class="center">20</th>
            <th class="justify">فراح ملكهمُ والخزي يأتينا</th>
        </tr>
        <tr>
            <th class="justify">فالله نسأل شكرانا لسعيهم</th>
            <th class="center">21</th>
            <th class="justify">وغفر معصية منهم فآمينا</th>
        </tr>
        <tr>
            <th class="justify">ثم الختام لقولي بالصلاة مع السـ</th>
            <th class="center">22</th>
            <th class="justify">ـلام من ربي الأعلى لهادينا</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="قريش.php"><span>&#8678;</span>ذهبت قريش بالمكارم كلها</a>
        <a class="active" href="بنو أمية.php">بنو أمية هم من ناصرواالدين</a>
        <a href="الأشاعرة.php">الأشعرية بالرحمن كفار<span>&#8680;</span></a>
    </div>
</body>

</html>