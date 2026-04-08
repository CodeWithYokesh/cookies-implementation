<?php
$message = "";
$cookieValue = "";

// Set cookie
if (isset($_POST['set_cookie'])) {
    $username = trim($_POST['username']);

    if (!empty($username)) {
        setcookie("username", $username, time() + 3600, "/"); // expires in 1 hour
        $message = "Cookie has been set successfully.";
    } else {
        $message = "Please enter a username.";
    }
}

// Read cookie
if (isset($_COOKIE['username'])) {
    $cookieValue = $_COOKIE['username'];
}

// Delete cookie
if (isset($_POST['delete_cookie'])) {
    setcookie("username", "", time() - 3600, "/"); // expire in past
    $message = "Cookie has been deleted successfully.";
    $cookieValue = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Implementation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 18px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .set-btn {
            background-color: #28a745;
            color: white;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
        }

        .message {
            margin-top: 15px;
            color: blue;
            font-weight: bold;
        }

        .cookie-box {
            margin-top: 20px;
            background: #f9f9f9;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cookies Implementation</h2>

        <form method="post">
            <input type="text" name="username" placeholder="Enter your username">
            <br>
            <button type="submit" name="set_cookie" class="set-btn">Set Cookie</button>
            <button type="submit" name="delete_cookie" class="delete-btn">Delete Cookie</button>
        </form>

        <?php if (!empty($message)) { ?>
            <div class="message"><?php echo $message; ?></div>
        <?php } ?>

        <div class="cookie-box">
            <h3>Stored Cookie Data</h3>
            <?php
            if (!empty($cookieValue)) {
                echo "<p><strong>Username:</strong> " . htmlspecialchars($cookieValue) . "</p>";
            } else {
                echo "<p>No cookie found.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>