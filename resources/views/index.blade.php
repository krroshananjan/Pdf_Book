<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF Content</title>
</head>
<body>
    <h1>Create PDF Content</h1>
    <form action="{{ route('generatePDF') }}" method="POST">
        @csrf
        <label for="content">Content:</label><br>
        <textarea name="content" id="content" rows="10" cols="50"></textarea><br>

        <label for="image_url">Image URL:</label><br>
        <input type="text" name="image_url" id="image_url"><br>

        <button type="submit">Generate PDF</button>
    </form>
</body>
</html>
