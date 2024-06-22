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
            <th class="justify">إن الإله والنبي عظَّما</th>
            <th class="center"></th>
            <th class="justify">في محكم الوحي مقام العلما</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">1</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">منزلة رفيعة فوق السما</th>
            <th class="center"></th>
            <th class="justify">والطاعنون فيهمُ فاللؤما</th>
        </tr>
        <tr>
            <th class="justify">صحابه أئمة الإسلام</th>
            <th class="center"></th>
            <th class="justify">والزمن الصالح ذو الأعلام</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">2</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">معلمي الحلال والحرام</th>
            <th class="center"></th>
            <th class="justify">وتابعوهمُ على التمام</th>
        </tr>
        <tr>
            <th class="justify">لقد فهمت أنما الإمام</th>
            <th class="center"></th>
            <th class="justify">في كل علم من له إقحام</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">3</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وعذره في كفره إلزام</th>
            <th class="center"></th>
            <th class="justify">وكل طاعن به شتام</th>
        </tr>
        <tr>
            <th class="justify">قصدت في نظمك نصح نفسك</th>
            <th class="center"></th>
            <th class="justify">فقد مدحت كافرا يا أنوكا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">4</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">من شجر الزقوم قد تسوكا</th>
            <th class="center"></th>
            <th class="justify">ألا تخاف يوم حق ويحكا</th>
        </tr>
        <tr>
            <th class="justify">سميتها الغذاء والدواء</th>
            <th class="center"></th>
            <th class="justify">وقد عرفت كم حشوت داء</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">5</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وبدعا محشوة أخطاء</th>
            <th class="center"></th>
            <th class="justify">نظمك مع نظميَ ما تراءى</th>
        </tr>
        <tr>
            <th class="justify">هل يستوي نظم به تقديس</th>
            <th class="center"></th>
            <th class="justify">لكافر وعقده خسيس</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">6</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">قد قال ما لم يحكه إبليس</th>
            <th class="center"></th>
            <th class="justify">جاءكمُ نظميَ والخميس</th>
        </tr>
        <tr>
            <th class="justify">رد الأجلاء على الكفار</th>
            <th class="center"></th>
            <th class="justify">كما ابن شمس الدين والصغار</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">7</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">المارقين السفها الأغمار</th>
            <th class="center"></th>
            <th class="justify">مقرر من دون ما إنكار</th>
        </tr>
        <tr>
            <th class="justify">لقد صدقت لحمهم مسموم</th>
            <th class="center"></th>
            <th class="justify">إن استفدت منه يا مغروم</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">8</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وأنت عند نعلهم مأموم</th>
            <th class="center"></th>
            <th class="justify">تذم أهل الدين يا مذموم</th>
        </tr>
        <tr>
            <th class="justify">يا عامرا بزندقات النووي</th>
            <th class="center"></th>
            <th class="justify">فلا ارتوى من علمكم أي روي</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">9</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">على سخافة وكفر يحتوي</th>
            <th class="center"></th>
            <th class="justify">مثل إمامك السفيه النووي</th>
        </tr>
        <tr>
            <th class="justify">هل تبتغي بنظمك السفيه</th>
            <th class="center"></th>
            <th class="justify">ذم ابن شمس ديننا النبيه</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">10</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">ولست تحوي الحق إذ يحويه</th>
            <th class="center"></th>
            <th class="justify">أجري على لسانه وفيه</th>
        </tr>
        <tr>
            <th class="justify">يا رب فلتحفظ أبا لموسى</th>
            <th class="center"></th>
            <th class="justify">في صبحه وليله إن أمسى</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">11</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وتكشفن على يديه اللبسا</th>
            <th class="center"></th>
            <th class="justify">فإنه فينا قد اضحى شمسا</th>
        </tr>
        <tr>
            <th class="justify">حتى يعي ذلك هذا الدرسا</th>
            <th class="center"></th>
            <th class="justify">ولا يدس المشكلات دسا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">12</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">قد جاءك الرد عليك أقسى</th>
            <th class="center"></th>
            <th class="justify">صوتك لا يسمع إلا همسا</th>
        </tr>
        <tr>
            <th class="justify">أمسك وأخبرني ماذا تصنع</th>
            <th class="center"></th>
            <th class="justify">حين ابن شمس الدين كان يشرع</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">13</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">في كتب في الاعتقاد تسمع</th>
            <th class="center"></th>
            <th class="justify">بل أنت بين المارقين ترتع</th>
        </tr>
        <tr>
            <th class="justify">بل أنت في سبيلهم تدافع</th>
            <th class="center"></th>
            <th class="justify">وعلمكم لا مسمن أو مشبع</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">14</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">لمن أتاكمُ له يستمع</th>
            <th class="center"></th>
            <th class="justify">تضر أهل العلم لست تنفع</th>
        </tr>
        <tr>
            <th class="justify">فهل قرأت الكتب الخوالي</th>
            <th class="center"></th>
            <th class="justify">مثل الموطا للإمام العالي</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">15</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وما به من أثر زلال</th>
            <th class="center"></th>
            <th class="justify">بل أنت دوما في رحى الجدال</th>
        </tr>
        <tr>
            <th class="justify">وهل قرأت سنة الخلال</th>
            <th class="center"></th>
            <th class="justify">وكُتْبَ دارمينا الغوالي</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">16</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">ذم الكلام خلق ذي الفعال</th>
            <th class="center"></th>
            <th class="justify">عسى تكن يوما من الرجال</th>
        </tr>
        <tr>
            <th class="justify">هل أنت لاعتقادهم موالي</th>
            <th class="center"></th>
            <th class="justify">أم أنت في صف العدو الغالي</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">17</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">إذ عنهم تدفع باحتيال</th>
            <th class="center"></th>
            <th class="justify">وذاك واضح من الفعال</th>
        </tr>
        <tr>
            <th class="justify">تدفع عنهمُ بكل حال</th>
            <th class="center"></th>
            <th class="justify">المارقين عصبة الضلال</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">18</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">تذكرهم بالمدح والإجلال</th>
            <th class="center"></th>
            <th class="justify">واخيبة الظنون والآمال</th>
        </tr>
        <tr>
            <th class="justify">هل قد قرأت ما أتى في المرجئة</th>
            <th class="center"></th>
            <th class="justify">من أثر تجاوزت سقف المئة</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">19</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">لفعلهم وقولهم مخطئة</th>
            <th class="center"></th>
            <th class="justify">بئسا لهم من زمرة ومن فئة</th>
        </tr>
        <tr>
            <th class="justify">قلوبنا بذمهم ممتلئة</th>
            <th class="center"></th>
            <th class="justify">منتشرون بيننا كالأوبئة</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">20</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">أفكارهم رديئة مهترئة</th>
            <th class="center"></th>
            <th class="justify">أشد بل أخبث من ذات الرئة</th>
        </tr>
        <tr>
            <th class="justify">وأنت منهم قد غدوت واحدا</th>
            <th class="center"></th>
            <th class="justify">وعالما بالحق بل معاندا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">21</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">نصحت قبل فبقيت جاحدا</th>
            <th class="center"></th>
            <th class="justify">للحق واقفا لدى صف العدا</th>
        </tr>
        <tr>
            <th class="justify">قد ذم أهل ديننا الجهمية</th>
            <th class="center"></th>
            <th class="justify">دون تردد ولا روية</th>
        </tr>

        <tr>
            <th class="justify"></th>
            <th class="center">22</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <td class="justify">والنووي صاحب الأذية</th>
            <td class="center">
                </th>
            <th class="justify">بدعته واضحة جلية</th>
        </tr>
        <tr>
            <th class="justify">وليس هذا الذم بالتعصب</th>
            <th class="center"></th>
            <th class="justify">لذي طريقة وأهل مذهب</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">23</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">بل إنه الحق وإن منكم أُبِيْ</th>
            <th class="center"></th>
            <th class="justify">على ضلالة لديكم يا غبي</th>
        </tr>
        <tr>
            <th class="justify">أما الذي ذكرته إن وجدا</th>
            <th class="center"></th>
            <th class="justify">عيب فسده وهذا المهتدى</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">24</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وذاك عندنا على أهل الهدى</th>
            <th class="center"></th>
            <th class="justify">ليس لكافر وعلمه سدى</th>
        </tr>
        <tr>
            <th class="justify">لسنا نقول من له الحسنى فقط</th>
            <th class="center"></th>
            <th class="justify">هو الإمام لا ولم يسيء قط</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">25</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">بل منهمُ يأتي الصحيح والغلط</th>
            <th class="center"></th>
            <th class="justify">نعذرهم لبعدهم عن الشطط</th>
        </tr>
        <tr>
            <th class="justify">غذاؤنا بذم الأشعرية</th>
            <th class="center"></th>
            <th class="justify">دواؤنا عداوة الأشعرية</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">26</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">الكافرين أسفه البرية</th>
            <th class="center"></th>
            <th class="justify">حتى متى تأتيَني منيتي</th>
        </tr>
        <tr>
            <th class="justify">أخطاؤهم ليست لدينا تغتفر</th>
            <th class="center"></th>
            <th class="justify">إذ وصفوا الله كما وصف البشر</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">27</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وقد أتوا بالكفر عن ذوي الدبَر</th>
            <th class="center"></th>
            <th class="justify">ورأيهم ليس يلائم الأثر</th>
        </tr>
        <tr>
            <th class="justify">تبيين كفرهم لدينا واجب</th>
            <th class="center"></th>
            <th class="justify">وفضحهم وكلهم مثالب</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">28</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">إذ قد غدوا فينا كما الثعالب</th>
            <th class="center"></th>
            <th class="justify">لم يسلمن منهم صديق صاحب</th>
        </tr>
        <tr>
            <th class="justify">ويُترَك الحق لأجل باطل</th>
            <th class="center"></th>
            <th class="justify">وكافر معاند مماطل</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">29</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">أخطاؤه أضحت كغيث هاطل</th>
            <th class="center"></th>
            <th class="justify">لا يستفاد منه غير باطل</th>
        </tr>
        <tr>
            <th class="justify">لا عذر عندنا في الاجتهاد</th>
            <th class="center"></th>
            <th class="justify">لأحد في باب الاعتقاد</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">30</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">لو كان باحثا بلا عناد</th>
            <th class="center"></th>
            <th class="justify">من يضلل الله فليس هاد</th>
        </tr>
        <tr>
            <th class="justify">وهجر كل كافر زنديق</th>
            <th class="center"></th>
            <th class="justify">ومارق حق على التحقيق</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">31</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">حتى ولو من بينهم صديقي</th>
            <th class="center"></th>
            <th class="justify">أضطره لأضيق الطريق</th>
        </tr>
        <tr>
            <th class="justify">وأنت بهذا بهذا قائل</th>
            <th class="center"></th>
            <th class="justify">وفعلك الذي نراه باطل</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">32</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">إذ قد رأيناك لهم تماطل</th>
            <th class="center"></th>
            <th class="justify">لكن تذمنا وهذا الحاصل</th>
        </tr>
        <tr>
            <th class="justify">هلا تورعت عن الإرجاء</th>
            <th class="center"></th>
            <th class="justify">وتُبْدِلَ الخبيث بالدواء</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">33</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">فشربك الحنظل لا كالماء</th>
            <th class="center"></th>
            <th class="justify">والكفر كله على السواء</th>
        </tr>
        <tr>
            <th class="justify">تقارن الكفار بالصحابة</th>
            <th class="center"></th>
            <th class="justify">لم تنح في هذا إلى الإصابة</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">34</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">كشفت عن شعركمُ حجابه</th>
            <th class="center"></th>
            <th class="justify">إذ قد رأيتكم بلا إنابة</th>
        </tr>
        <tr>
            <th class="justify">فهل أبو حنيفة تشابه</th>
            <th class="center"></th>
            <th class="justify">مع الجبال الشمخ الصحابة</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">35</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وهل إمامنا له سبابة</th>
            <th class="center"></th>
            <th class="justify">إن كنت لا تدري فلا تجابه</th>
        </tr>
        <tr>
            <th class="justify">صح عن النبي في الأخبار</th>
            <th class="center"></th>
            <th class="justify">عن فرقة الأمة في الآثار</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">36</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">اثنان مع سبعين هم في النار</th>
            <th class="center"></th>
            <th class="justify">راحوا بكفرهم لجرف هار</th>
        </tr>
        <tr>
            <th class="justify">سوى الذين اتبعوه أوردوا</th>
            <th class="center"></th>
            <th class="justify">على ضفاف الحوض ثم خلدوا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">37</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">لا مثل غيرهم هناك شردوا</th>
            <th class="center"></th>
            <th class="justify">مصيرهم جهنم والموعد</th>
        </tr>
        <tr>
            <th class="justify">وليس ذا الأمر كما ادعيت</th>
            <th class="center"></th>
            <th class="justify">إذ جَمْعَ هذي الفرق ارتأيت</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">38</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وقولهم فيها قد انتقيت</th>
            <th class="center"></th>
            <th class="justify">الكفر والإسلام قد سويت</th>
        </tr>
        <tr>
            <th class="justify">زعمت أن مذهب الأسلاف</th>
            <th class="center"></th>
            <th class="justify">هو الغلو عين الانحراف</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">39</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">تركتها شرا بلا كَفاف</th>
            <th class="center"></th>
            <th class="justify">بئسا لكم جماعة الأحناف</th>
        </tr>
        <tr>
            <th class="justify">ذم الأئمة الألى كثيرا</th>
            <th class="center"></th>
            <th class="justify">لم يدعوا شيخا ولا صغيرا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">40</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">تبديعا او تفسيقا او تكفيرا</th>
            <th class="center"></th>
            <th class="justify">لم يظلموا حبا ولا نقيرا</th>
        </tr>
        <tr>
            <th class="justify">ذم الألى عمرا وكان عابدا</th>
            <th class="center"></th>
            <th class="justify">إذ كان للآثار حقا جاحدا</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">41</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">لم يعذروه أنه كان اهتدى</th>
            <th class="center"></th>
            <th class="justify">بل كفروه حين كفره بدا</th>
        </tr>
        <tr>
            <th class="justify">ذم الألى إمامك ابن زوطي</th>
            <th class="center"></th>
            <th class="justify">من دون عذره ولا شروط</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">42</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">قد صح عندنا على المخطوط</th>
            <th class="center"></th>
            <th class="justify">تضليله والْحِقْ به السيوطي</th>
        </tr>
        <tr>
            <th class="justify">ابن أبي داود الإمام</th>
            <th class="center"></th>
            <th class="justify">أخبر أن قد أجمع العظام</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">43</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">في مصر والعراق معها الشام</th>
            <th class="center"></th>
            <th class="justify">في الوقع فيه أيها الغلام</th>
        </tr>
        <tr>
            <th class="justify">تواترت بذاكم النقول</th>
            <th class="center"></th>
            <th class="justify">ومعه صاحبه الأكول</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">44</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">فنظمكم للكفر قد يؤول</th>
            <th class="center"></th>
            <th class="justify">إنك لا تفقه ما تقول</th>
        </tr>
        <tr>
            <th class="justify">وصح أيضا أنما المأمون</th>
            <th class="center"></th>
            <th class="justify">لكافر لو كان من يكون</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">45</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">لسنا سنطوي ما حكت سنون</th>
            <th class="center"></th>
            <th class="justify">أمسك عن النظم أيا مأبون</th>
        </tr>
        <tr>
            <th class="justify">وصح أيضا عنه كفر الظاهري</th>
            <th class="center"></th>
            <th class="justify">داود الجهمي ثم المفتري</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">46</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وصح عن أتباعه في الأشعري</th>
            <th class="center"></th>
            <th class="justify">جاهر بقولك الرديء المضمر</th>
        </tr>
        <tr>
            <th class="justify">وصح عندنا بأخبار الأول</th>
            <th class="center"></th>
            <th class="justify">من لم يكفر أهل جهم واحتمل</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">47</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">إيمانهم فذاك كفره حصل</th>
            <th class="center"></th>
            <th class="justify">وضل عن ملتنا وقد أضل</th>
        </tr>
        <tr>
            <th class="justify">ختمتَها بنسبة الفقير</th>
            <th class="center"></th>
            <th class="justify">والجهل والذنوب والتقصير</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">48</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">صدقت في هذي بلا نكير</th>
            <th class="center"></th>
            <th class="justify">لستُ بظالم أيا ذا الكير</th>
        </tr>
        <tr>
            <th class="justify">لا بارك الله بنظم جئت به</th>
            <th class="center"></th>
            <th class="justify">إذ أنه لممكن أين يشتبه</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">49</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">ولو نظمت آخرا تفخر به</th>
            <th class="center"></th>
            <th class="justify">لجئت بالأقوى أيا هذا انتبه</th>
        </tr>
        <tr>
            <th class="justify">ونسأل الله بذي الحياة</th>
            <th class="center"></th>
            <th class="justify">الصبر والدين مع الثبات</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">50</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">وهجوهم دوما إلى مماتي</th>
            <th class="center"></th>
            <th class="justify">لو منهمُ ألف إلينا آتي</th>
        </tr>
        <tr>
            <th class="justify">فقد مللنا هذه الآفات</th>
            <th class="center"></th>
            <th class="justify">وقد سئمنا هذه الفئات</th>
        </tr>
        <tr>
            <th class="justify"></th>
            <th class="center">51</th>
            <th class="justify"></th>
        </tr>
        <tr>
            <th class="justify">فأسأل الله إذا نجاتي</th>
            <th class="center"></th>
            <th class="justify">والختم بالسلام والصلاة</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="حسيني.php"><span>&#8678;</span>حسن الحسيني دعك من هذي السفا</a>
        <a class="active" href="عامر بهجت.php">إن الإله والنبي عظما</a>
        <a href="شر العباد.php">رأيت رجالا عن الدين ضلوا<span>&#8680;</span></a>
    </div>
</body>

</html>