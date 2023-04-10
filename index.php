
<!-- mail send through php mailer github and do some settings in google account that generate the password -->
<!-- link of youtube video:https://www.youtube.com/watch?v=9tD8lA9foxw -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="database.php" method="post">
        Email:<br>
        <input type="email" name="email"><br>
        Subject:<br>
        <input type="text" name="subject"><br>
        Message:<br>
        <textarea rows="10" cols="50" name="message"></textarea><br>

        <input type="submit" name="send">
    </form>
</body>

</html>