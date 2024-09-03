<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
</head>
<body>
    <form action="{{ route('send.email') }}" method="POST">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>
        <button type="submit">Send Email</button>
    </form>
</body>
</html>
