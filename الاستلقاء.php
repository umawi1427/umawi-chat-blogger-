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

            <div class="container">
                <div class="counter-container">
                    <p class="count" id="count"></p>
                    <p class="count">الزائرون </p>
                </div>
                <div class="container">
                    <section class="toggle-container" onclick="toggleDarkMode()">
                        <div id="modeIcon" class="toggle-icon">
                            <img style="width: 50px;" src="images/moon.png" alt="Light Mode Icon" id="iconImage">
                        </div>
                    </section>
                    <script>
                        function toggleDarkMode() {
                            const body = document.body;
                            const darkModeStylesheet = document.getElementById('dark-mode-stylesheet');
                            const modeIcon = document.getElementById('iconImage');
                            body.classList.toggle('dark-mode');
                            darkModeStylesheet.disabled = !darkModeStylesheet.disabled;
                            if (body.classList.contains('dark-mode')) {
                                modeIcon.src = 'images/sun.png';
                                modeIcon.alt = 'Dark Mode Icon';
                            } else {
                                modeIcon.src = 'images/moon.png';
                                modeIcon.alt = 'Light Mode Icon';
                            }
                        }
                    </script>
                </div>
                <?php
                if (isset($_SESSION['valid'])) {
                    echo '<div class="container">
                        <table>
                            <tr>
                                <td>
                                    <form action="home.php"><button class="action-button">الملف الشخصي</button></form>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form action="php/logout.php"><button class="action-button">تسجيل الخروج</button></form>
                                </td>
                            </tr>
                        </table>
                    </div>';
                } else {
                    echo '<div class="container">
                        <table>
                            <tr>
                                <td>
                                    <form action="login.php"><button class="action-button">تسجيل الدخول</button></form>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form action="register.php"><button class="action-button">إنشاء حساب</button></form>
                                </td>
                            </tr>
                        </table>
                    </div>';
                }
                ?>
    </nav>
    <script src="script.js"></script>
    <table class="poem" style="height: 120px;">
        <tr>
            <th class="justify">وَاللَّهُ مُسْتَلِقٌ عَلَى عَرْشٍ لَهُ</th>
            <th class="center">1</th>
            <th class="justify">وَالرَّجُلُ فَوْقَ الرَّجُلِ بِالتَّبْيَانِ</th>
        </tr>
        <tr>
            <th class="justify">لَا تَفْعَلُوا هَذَا عِبَادَ اللَّهِ فَالرَّ</th>
            <th class="center">2</th>
            <th class="justify">حَمْنُ يَفْعَلُهَا بِلَا نَكْرَانِ</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="الصفات.php"><span>&#8678;</span>الحمد لله العظيم الواحد</a>
        <a class="active" href="الاستلقاء.php">والله مستلق على عرش له</a>
        <a href="النووي.php">يا من تحبون النواوي الكافرا<span>&#8680;</span></a>
    </div>
</body>

</html>