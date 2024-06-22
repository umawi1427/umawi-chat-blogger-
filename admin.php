<?php
session_start();
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
    <?php
    include("php/config.php");
    if (isset($_SESSION['admin'])) {
        $adminDataResult = mysqli_query($con, "SELECT * FROM users") or die("Admin Data Fetch Error: " . mysqli_error($con));
        if (mysqli_num_rows($adminDataResult) > 0) {
            echo "<table style='margin: 20px auto; font-size: 1.7em; direction: rtl; height: 5em; border-collapse: collapse;'>";
            echo "<tr><td style='border: 1px solid black; padding: 8px;'>الرقم التعريفي</td><td style='border: 1px solid black; padding: 8px;'>الاسم واللقب</td><td style='border: 1px solid black; padding: 8px;'>البريد الالكتروني</td><td style='border: 1px solid black; padding: 8px;'>تاريخ الميلاد</td><td style='border: 1px solid black; padding: 8px;'>رقم الهاتف</td><td style='border: 1px solid black; padding: 8px;'>الجنس</td><td style='border: 1px solid black; padding: 8px;'>البلد</td><td style='border: 1px solid black; padding: 8px;'>ملاحظات</td><td style='border: 1px solid black; padding: 8px;'>تعديل</td><td style='border: 1px solid black; padding: 8px;'>حذف</td></tr>";
            while ($adminRow = mysqli_fetch_assoc($adminDataResult)) {
                echo "<tr style='border: 1px solid black; padding: 8px;'>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $adminRow['Id'] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><input type='text' value='" . $adminRow['Username'] . "'></td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><input type='email' value='" . $adminRow['Email'] . "'></td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><input type='date' value='" . $adminRow['date'] . "'></td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><input type='text' value='" . $adminRow['Phonenumber'] . "'></td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><input type='text' value='" . $adminRow['Gender'] . "'></td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><input type='text' value='" . $adminRow['Country'] . "'></td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><input type='text' value='" . $adminRow['Notes'] . "'></td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><button onclick='editRow(this)'>حفظ</button></td>";
                echo "<td style='border: 1px solid black; padding: 8px;'><button onclick='deleteRow(this)'>حذف</button></td>";
                echo "</tr>";
            }
        } else {
            echo "No users found.";
        }
    } else {
        header("Location: login.php");
        exit();
    }
    ?>
    <div id="notification">
        <span id="notificationText"></span>
        <button class="close-button" onclick="closeStickyBox()">X</button>
    </div>

    <script>
        function editRow(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");
            var id = cells[0].innerText;
            var username = cells[1].querySelector('input').value;
            var email = cells[2].querySelector('input').value;
            var date = cells[3].querySelector('input').value;
            var phoneNumber = cells[4].querySelector('input').value;
            var gender = cells[5].querySelector('input').value;
            var country = cells[6].querySelector('input').value;
            var notes = cells[7].querySelector('input').value;

            showStickyBox("هل تريد حفظ التغييرات؟", false, "نعم", "لا", function(confirmSave) {
                if (confirmSave) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "edit-user.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                showSuccessMessage("تم تعديل معلومات المستخدم");
                            } else {
                                showSuccessMessage("تعذر تعديل معلومات المستخدم" + response.error);
                            }
                        }
                    };
                    xhr.send("id=" + id + "&username=" + username + "&email=" + email + "&date=" + date + "&phoneNumber=" + phoneNumber + "&gender=" + gender + "&country=" + country + "&notes=" + notes);
                }
            });
        }



        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            var idCell = row.cells[0];
            var id = idCell.textContent || idCell.innerText;
            showStickyBox("هل أنت متأكد أنك تريد حذف هذا الحساب؟", false, "نعم", "لا", function(confirmDelete) {
                if (confirmDelete) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "delete-user.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4) {
                            if (xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                if (response.success) {
                                    row.parentNode.removeChild(row);
                                    showSuccessMessage("تم حذف الحساب بنجاح");
                                } else {
                                    showSuccessMessage("تعذر حذف الحساب. الخطأ: " + response.error);
                                }
                            } else {
                                showSuccessMessage("تعذر حذف الحساب. الخطا: " + xhr.statusText);
                            }
                        }
                    };
                    xhr.send("id=" + id);
                }
            });
        }

        function showSuccessMessage(message) {
            var stickyBox = document.getElementById("notification");
            var notificationText = document.getElementById("notificationText");
            stickyBox.innerHTML = '';
            notificationText.innerHTML = message;
            var closeButton = document.createElement("span");
            closeButton.innerHTML = "&times;";
            closeButton.className = "close-button";
            closeButton.onclick = function() {
                stickyBox.style.display = "none";
            };
            stickyBox.appendChild(notificationText);
            stickyBox.appendChild(closeButton);
            stickyBox.style.display = "block";
            stickyBox.style.backgroundColor = "rgb(142, 243, 142)";
        }

        function showStickyBox(message, isSuccess, yesLabel, noLabel, callback) {
            var stickyBox = document.getElementById("notification");
            var notificationText = document.getElementById("notificationText");
            var closeButton = document.createElement("span");
            var yesButton = document.createElement("button");
            var noButton = document.createElement("button");
            stickyBox.innerHTML = '';
            notificationText.innerHTML = message;
            stickyBox.style.display = "block";
            if (isSuccess) {
                stickyBox.style.backgroundColor = "green";
            } else {
                stickyBox.style.backgroundColor = "red";
            }
            yesButton.textContent = yesLabel;
            yesButton.onclick = function() {
                stickyBox.style.display = "none";
                callback(true);
            };

            noButton.textContent = noLabel;
            noButton.onclick = function() {
                stickyBox.style.display = "none";
                callback(false);
            };

            stickyBox.appendChild(yesButton);
            stickyBox.appendChild(noButton);
            stickyBox.appendChild(notificationText);

            closeButton.innerHTML = "&times;";
            closeButton.className = "close-button";
            closeButton.onclick = function() {
                stickyBox.style.display = "none";
            };
            stickyBox.appendChild(closeButton);
        }

        function closeStickyBox() {
            document.getElementById("notification").style.display = "none";
        }
    </script>
</body>

</html>