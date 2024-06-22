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
            <a href="index.php" class="active">الصفحة الرئيسية</a>
            <a href="poems.php">الأشعار</a>
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
    <table>
        <tr>
            <th class="hometable"><a href="index.php"><img class="indexImage" src="images/homepageIcon.png"></a></th>
        </tr>
        <tr>
            <th class="hometable">
                <p id="homepageText">موقع أبي الحكم الأموي</p>
            </th>
        </tr>
    </table>
    <div style="display: flex; justify-content: center; align-items: center;">
        <form onsubmit="submitForm(); return false;">
            <label for="comment"></label>
            <textarea required id="comment" name="comment" rows="10" cols="50" placeholder="أرسل لأبي الحكم الأموي" style="resize: none; width: 100%;"></textarea>
            <button type="submit" style="width: 101%; background-color: #b5f0ad; margin-right: -20px;">إرسال</button>
            <script>
                document.getElementById("comment").addEventListener("keydown", function(event) {
                    if (event.key === "Enter" && !event.shiftKey) {
                        event.preventDefault();
                        submitForm();
                    }
                });

                function submitForm() {
                    var comment = document.getElementById("comment").value;
                    var formspreeEndpoint = "https://formspree.io/f/xblrrgbw";
                    fetch(formspreeEndpoint, {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                comment: comment
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                        })
                        .catch(error => {
                            console.error("Error:", error);
                        });
                    document.getElementById("comment").value = "";
                }
            </script>
        </form>
    </div>
    <div style="border-width: 10px;">
        <p class="count" id="visitorCount">الزائرون: <span id="count"></span></p>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const countElement = document.getElementById('count');
                incrementVisitsCount();

                function incrementVisitsCount() {
                    let visits = localStorage.getItem('visits') ? parseInt(localStorage.getItem('visits')) : 0;

                    const incrementedCount = visits + 1;
                    localStorage.setItem('visits', incrementedCount);
                    countElement.textContent = incrementedCount;
                }
            });
        </script>
    </div>
</body>

</html>