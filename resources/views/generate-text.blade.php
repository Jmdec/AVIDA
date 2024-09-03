<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Text</title>
</head>
<body>
    <h1>Generate Text</h1>

    <form method="POST" action="{{ route('generate-text') }}">
        @csrf
        <label for="question">Enter your question:</label><br>
        <input type="text" id="question" name="question"><br><br>
        <button type="submit">Generate Text</button>
    </form>
</body>
</html>
