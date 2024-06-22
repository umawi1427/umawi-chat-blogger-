<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}
$host = 'localhost';
$db   = 'tutorial';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
if (isset($_POST['delete'])) {
    $messageId = $_POST['delete'];
    $stmt = $pdo->prepare("DELETE FROM chat WHERE id = ?");
    $stmt->execute([$messageId]);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
if (isset($_POST['edit'])) {
    $editedMessageId = $_POST['edit'];
    $editedMessageText = $_POST['message'];

    $stmt = $pdo->prepare("UPDATE chat SET message = ? WHERE id = ?");
    $stmt->execute([$editedMessageText, $editedMessageId]);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
$messages = $pdo->query('SELECT chat.*, users.ProfileImage FROM chat JOIN users ON chat.username = users.Username')->fetchAll();
?>

<!DOCTYPE html>
<html>

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
            <a href="poems.php">الأشعار</a>

            <a href="books.php">الرسائل</a>
            <a href="bidaa.php">رؤوس الضلالة</a>
            <a href="downloads.php">مركز التنزيلات</a>
            <a href="chat.php" class="active">الملتقى</a>

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
    <style>
        .chat-container {
            max-width: 800px;
            margin: auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .messages {
            max-height: 500px;
            overflow-y: auto;
            padding: 10px;
            background: #f9f9f9;
        }

        .message-container {
            background: white;
            margin-bottom: 10px;
            border-radius: 4px;
            padding: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .user {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 8px;
        }

        .username {
            font-weight: bold;
            margin-right: 10px;
        }

        .profile-image {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .textm {
            text-align: right;
        }

        .message-text {
            background: #e0e0e0;
            border-radius: 4px;
            padding: 8px;
        }

        .context-menu {
            display: none;
            position: absolute;
            z-index: 1000;
            width: 150px;
            background: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            padding: 10px;
        }

        .context-menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .context-menu ul li {
            padding: 8px;
            cursor: pointer;
        }

        .context-menu ul li:hover {
            background-color: #e0e0e0;
        }

        .input-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            border-top: 1px solid #ddd;
            position: fixed;
            bottom: 0;
            margin-left: 340px;
            width: 830px;
            background: #f1f1f1;
        }

        .input-form {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .input-form input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }

        .input-form button[type="submit"] {
            padding: 10px 20px;
            border: none;
            background: #b5f0ad;
            color: black;
            border-radius: 4px;
            cursor: pointer;
        }

        .input-form button[type="submit"]:hover {
            background: #0056b3;
            color: white;
        }

        @media screen and (max-width: 900px) {
            .chat-container {
                max-width: 700px;
            }

            .input-container {
                width: calc(100% - 160px);
                margin-left: 160px;
            }
        }

        @media screen and (max-width: 800px) {
            .chat-container {
                max-width: 600px;
            }

            .input-container {
                width: calc(100% - 160px);
                margin-left: 160px;
            }
        }

        @media screen and (max-width: 700px) {
            .chat-container {
                max-width: 500px;
            }

            .input-container {
                width: calc(100% - 160px);
                margin-left: 160px;
            }
        }

        @media screen and (max-width: 600px) {
            .chat-container {
                max-width: 400px;
            }

            .input-container {
                width: calc(100% - 160px);
                margin-left: 160px;
            }
        }

        @media screen and (max-width: 500px) {
            .chat-container {
                max-width: 300px;
            }

            .input-container {
                width: 100%;
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .chat-container {
                max-width: 250px;
            }

            .input-container {
                width: 100%;
                margin-left: 0;
            }
        }

        @media screen and (max-width: 300px) {
            .chat-container {
                max-width: 200px;
            }

            .input-container {
                width: 100%;
                margin-left: 0;
            }
        }

        @media screen and (max-width: 200px) {
            .chat-container {
                max-width: 170px;
            }

            .input-container {
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
    <div class="chat-container">
        <div class="messages">
            <?php foreach ($messages as $message) : ?>
                <div class="message-container" id="message-<?php echo $message['id']; ?>" oncontextmenu="showContextMenu(event, '<?php echo $message['id']; ?>', '<?php echo addslashes($message['message']); ?>', '<?php echo htmlspecialchars($message['username']); ?>')">
                    <div class="user">
                        <div class="username"><?php echo htmlspecialchars($message['username']); ?></div>
                        <img src="uploads/<?php echo htmlspecialchars($message['ProfileImage']); ?>" alt="Profile Image" class="profile-image">
                    </div>
                    <div class="textm">
                        <div class="message-text"><?php echo htmlspecialchars($message['message']); ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="context-menu" id="contextMenu">
        <ul>
            <li onclick="replyToMessage(selectedUsername)">رد</li>
            <li onclick="copyMessage(selectedMessageText)">نسخ</li>
            <li onclick="editMessage(selectedMessageId, selectedMessageText)">تعديل الرسالة</li>
            <li onclick="deleteMessage(selectedMessageId)">حذف</li>
        </ul>
    </div>
    <script>
        var selectedMessageId, selectedMessageText, selectedUsername;

        function showContextMenu(event, messageId, messageText, username) {
            event.preventDefault();
            selectedMessageId = messageId;
            selectedMessageText = messageText;
            selectedUsername = username;
            var contextMenu = document.getElementById("contextMenu");
            contextMenu.style.top = event.pageY + "px";
            contextMenu.style.left = event.pageX + "px";
            contextMenu.style.display = "block";

            // Add event listener to hide context menu on document click
            document.addEventListener('click', hideContextMenuOutside);
        }

        function hideContextMenuOutside(event) {
            var contextMenu = document.getElementById("contextMenu");
            var isClickInsideContextMenu = contextMenu.contains(event.target);
            if (!isClickInsideContextMenu) {
                contextMenu.style.display = "none";
                document.removeEventListener('click', hideContextMenuOutside); // Remove the event listener after hiding
            }
        }

        function hideContextMenu() {
            var contextMenu = document.getElementById("contextMenu");
            contextMenu.style.display = "none";
            document.removeEventListener('click', hideContextMenuOutside); // Remove the event listener
        }

        function copyMessage(messageText) {
            navigator.clipboard.writeText(messageText).then(function() {
                var copyMessageBox = document.createElement('div');
                copyMessageBox.innerText = 'تم نسخ الرسالة إلى الحافظة';
                styleMessageBox(copyMessageBox);
                document.body.appendChild(copyMessageBox);
                setTimeout(function() {
                    copyMessageBox.remove();
                }, 2000);
                hideContextMenu();
            }, function(err) {
                var errorBox = document.createElement('div');
                errorBox.innerText = 'لا يمكن نسخ الرسالة: ' + err;
                styleMessageBox(errorBox);
                document.body.appendChild(errorBox);
                setTimeout(function() {
                    errorBox.remove();
                }, 2000);
                hideContextMenu();
            });
        }

        function deleteMessage(messageId) {
            hideContextMenu();

            var confirmBox = document.createElement('div');
            confirmBox.innerHTML = `
                <div>هل أنت متأكد من حذف الرسالة لدى الجميع؟</div>
                <div>
                    <button id="confirmYes">نعم</button>
                    <button id="confirmNo">لا</button>
                </div>`;
            styleMessageBox(confirmBox);
            document.body.appendChild(confirmBox);

            document.getElementById('confirmYes').addEventListener('click', function() {
                var form = document.createElement('form');
                document.body.appendChild(form);
                form.method = 'post';
                form.action = '';
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'delete';
                input.value = messageId;
                form.appendChild(input);
                form.submit();
                confirmBox.remove();
            });

            document.getElementById('confirmNo').addEventListener('click', function() {
                confirmBox.remove();
            });
        }

        function editMessage(messageId, messageText) {
            hideContextMenu();

            var messageContainer = document.getElementById('message-' + messageId);
            var messageTextElement = messageContainer.querySelector('.message-text');
            var originalWidth = messageTextElement.clientWidth;
            var textarea = document.createElement('textarea');
            textarea.id = 'editedMessage-' + messageId;
            textarea.style.width = '725px';
            textarea.style.height = '100px';
            textarea.style.padding = '8px';
            textarea.style.border = '1px solid #ccc';
            textarea.style.borderRadius = '4px';
            textarea.style.resize = 'none';
            textarea.value = messageText.trim();

            messageTextElement.innerHTML = '';
            messageTextElement.appendChild(textarea);

            var confirmButton = document.createElement('button');
            confirmButton.innerText = 'حفظ التعديل';
            confirmButton.addEventListener('click', function() {
                var editedMessage = textarea.value.trim();
                if (editedMessage !== '') {
                    var form = document.createElement('form');
                    document.body.appendChild(form);
                    form.method = 'post';
                    form.action = '';
                    var inputMessage = document.createElement('input');
                    inputMessage.type = 'hidden';
                    inputMessage.name = 'message';
                    inputMessage.value = editedMessage;
                    form.appendChild(inputMessage);
                    var inputEdit = document.createElement('input');
                    inputEdit.type = 'hidden';
                    inputEdit.name = 'edit';
                    inputEdit.value = messageId;
                    form.appendChild(inputEdit);
                    form.submit();
                }
                messageTextElement.innerHTML = '';
            });

            var cancelButton = document.createElement('button');
            cancelButton.innerText = 'إلغاء';
            cancelButton.addEventListener('click', function() {
                messageTextElement.innerHTML = messageText;
            });

            var buttonsDiv = document.createElement('div');
            buttonsDiv.appendChild(confirmButton);
            buttonsDiv.appendChild(cancelButton);
            messageTextElement.appendChild(buttonsDiv);
        }

        function styleMessageBox(box) {
            box.style.position = 'fixed';
            box.style.top = '50%';
            box.style.left = '50%';
            box.style.transform = 'translate(-50%, -50%)';
            box.style.padding = '20px';
            box.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
            box.style.color = 'white';
            box.style.borderRadius = '5px';
            box.style.zIndex = '1000';
            box.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            box.style.textAlign = 'center';
            box.style.fontSize = '16px';
        }

        const buttonStyle = `padding: 10px 20px; margin: 5px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;`;
        document.getElementById('confirmYes').style = `${buttonStyle} background-color: #007bff; color: white;`;
        document.getElementById('confirmNo').style = `${buttonStyle} background-color: #dc3545; color: white;`;
        document.getElementById('confirmEdit').style = `${buttonStyle} background-color: #28a745; color: white;`;
        document.getElementById('cancelEdit').style = `${buttonStyle} background-color: #dc3545; color: white;`;

        function replyToMessage(username) {
            var messageInput = document.querySelector('input[name="message"]');
            messageInput.value = '@' + username + ' ';
            messageInput.focus();
            hideContextMenu();
        }

        document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
        });
    </script>
    <div class="input-container">
        <form method="POST" action="send-message.php" class="input-form">
            <input type="text" name="message" required>
            <button type="submit">إرسال</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>