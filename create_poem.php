<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = isset($_POST["filename"]) ? trim($_POST["filename"]) : "poem.php";
    $filename = preg_replace("/[^a-zA-Z0-9_-]/", "", $filename);
    $filename = htmlspecialchars($filename);
    $filename .= ".php";

    $paginationContent = '<div class="content">';
    $paginationContent .= '<div class="pagination" id="paginationLinks">';

    if (isset($_POST["pagination_names"]) && isset($_POST["pagination_links"])) {
        $paginationNames = $_POST["pagination_names"];
        $paginationLinks = $_POST["pagination_links"];
        $count = count($paginationNames);
        for ($i = 0; $i < $count; $i++) {
            switch ($i) {
                case 0:
                    $paginationContent .= '<a href="' . htmlspecialchars($paginationLinks[$i]) . '"><span>&#8678;</span>' . htmlspecialchars($paginationNames[$i]) . '</a>';
                    break;
                case 1:
                    $paginationContent .= '<a href="' . htmlspecialchars($paginationLinks[$i]) . '" class="active">' . htmlspecialchars($paginationNames[$i]) . '</a>';
                    break;
                case 2:
                    $paginationContent .= '<a href="' . htmlspecialchars($paginationLinks[$i]) . '">' . htmlspecialchars($paginationNames[$i]) . '<span>&#8680;</span></a>';
                    break;
            }
        }
    }

    $paginationContent .= '</div>';
    $paginationContent .= '</div>';

    $parts = [];
    if (isset($_POST["part1"], $_POST["part2"], $_POST["part3"])) {
        $part1 = $_POST["part1"];
        $part2 = $_POST["part2"];
        $part3 = $_POST["part3"];
        foreach ($part1 as $index => $value) {
            $parts[] = [
                "part1" => htmlspecialchars(trim($part1[$index])),
                "part2" => htmlspecialchars(trim($part2[$index])),
                "part3" => htmlspecialchars(trim($part3[$index]))
            ];
        }
    }

    $poemContent = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="icon" type="image/jpg" href="images/homepageIcon.png">
        <link id="dark-mode-stylesheet" rel="stylesheet" href="styles-dark.css" disabled>
        <title>أبو الحكم الأموي</title>
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
            <div class="container">
                <?php
                if (isset(\$_SESSION['valid'])) {
                    echo '<div class="container">' . "\n";
                    echo '    <table>' . "\n";
                    echo '        <tr>' . "\n";
                    echo '            <td>' . "\n";
                    echo '                <form action="home.php"><button style="width: 85px">الملف الشخصي</button></form>' . "\n";
                    echo '            </td>' . "\n";
                    echo '        </tr>' . "\n";
                    echo '        <tr>' . "\n";
                    echo '            <td>' . "\n";
                    echo '                <form action="php/logout.php"><button style="width: 85px">تسجيل الخروج</button></form>' . "\n";
                    echo '            </td>' . "\n";
                    echo '        </tr>' . "\n";
                    echo '    </table>' . "\n";
                    echo '</div>';
                } else {
                    echo '<div class="container">' . "\n";
                    echo '    <table>' . "\n";
                    echo '        <tr>' . "\n";
                    echo '            <td>' . "\n";
                    echo '                <form action="login.php"><button style="width: 85px">تسجيل الدخول</button></form>' . "\n";
                    echo '            </td>' . "\n";
                    echo '        </tr>' . "\n";
                    echo '        <tr>' . "\n";
                    echo '            <td>' . "\n";
                    echo '                <form action="register.php"><button style="width: 85px">إنشاء حساب</button></form>' . "\n";
                    echo '            </td>' . "\n";
                    echo '        </tr>' . "\n";
                    echo '    </table>' . "\n";
                    echo '</div>';
                }
                ?>
            </div>
        </nav>
        <script src="script.js"></script>
        <table class="poem">
    HTML;

    foreach ($parts as $part) {
        $poemContent .= <<<HTML
            <tr>
                <td class="justify">{$part["part1"]}</td>
                <td class="center">{$part["part2"]}</td>
                <td class="justify">{$part["part3"]}</td>
            </tr>
    HTML;
    }

    $poemContent .= <<<HTML
        </table>
        {$paginationContent}
    </body>
    </html>
    HTML;

    file_put_contents($filename, $poemContent);

    echo "Poem has been saved as " . htmlspecialchars($filename);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/jpg" href="images/homepageIcon.png">
    <link id="dark-mode-stylesheet" rel="stylesheet" href="styles-dark.css" disabled>
    <title>أبو الحكم الأموي</title>
</head>

<body>
    <nav id="navbar">
        <a href="umawi.php"><img id="imgIcon" src="images/homepageIcon.png"></a>
        <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">&#9776;</a>
        <div id="nav-links">

            <a href="index.php">الصفحة الرئيسية</a>
            <a href="poems.php">الأشعار</a>

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

    <?php
    if (isset($_SESSION['valid'])) {
        echo '<form id="poemForm" method="post">
                        <table id="poemTable" class="poem">
                            <tr>
                                <td><input style="width: 100%;" type="text" name="part1[]" required></td>
                                <td><input style="width: 100%;" type="text" name="part2[]" required></td>
                                <td><input style="width: 100%;" type="text" name="part3[]" required></td>
                                <td><button type="button" onclick="deleteRow(this)">حذف</button></td>
                            </tr>
                        </table>
                        <div style="display: flex; justify-content: center;">
                            <button type="button" onclick="addPoemLine()">أضف بيتاً</button>
                            <label for="filename"></label><input type="text" id="filename" name="filename" required>
                        </div>
                        <div class="content">
                            <div class="pagination" id="paginationLinks">
                                <label for="page1">الصفحة الأولى:</label>
                                <input type="text" id="page1" name="pagination_names[]" placeholder="اسم الصفحة" required>
                                <input type="text" name="pagination_links[]" placeholder="رابط الصفحة" required>
                                <br>
                                <label for="page2">الصفحة الفعلية:</label>
                                <input type="text" id="page2" name="pagination_names[]" placeholder="اسم الصفحة" class="active" required>
                                <input type="text" name="pagination_links[]" placeholder="رابط الصفحة" required>
                                <br>
                                <label for="page3">الصفحة التالية:</label>
                                <input type="text" id="page3" name="pagination_names[]" placeholder="اسم الصفحة" required>
                                <input type="text" name="pagination_links[]" placeholder="رابط الصفحة" required>
                            </div>
                        </div>
                        <div style="display: flex; justify-content: center;">
                            <input type="submit" value="حفظ">
                        </div>
                    </form>';
    } else {
        echo '<p>يرجى تسجيل الدخول للوصول إلى هذه الصفحة.</p>';
    }
    ?>

    <script>
        function addPoemLine() {
            var table = document.getElementById('poemTable');
            var row = table.insertRow();
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);

            cell1.innerHTML = '<input style="width: 100%;" type="text" name="part1[]" required>';
            cell2.innerHTML = '<input style="width: 100%;" type="text" name="part2[]" required>';
            cell3.innerHTML = '<input style="width: 100%;" type="text" name="part3[]" required>';
            cell4.innerHTML = '<button type="button" onclick="deleteRow(this)">حذف</button>';
        }

        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>

</html>