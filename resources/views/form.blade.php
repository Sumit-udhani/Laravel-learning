<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dummy mail</h1>
    <form action="send-mail" method="post">
        @csrf
        <input type="text" name="to" placeholder="Enter email"><br>
        <input type="text" name="subject" placeholder="Enter email subject"><br>
        <textarea name="message" placeholder="Enter a message" id=""></textarea><br>
        <button>Send</button>

    </form>
</body>
</html>