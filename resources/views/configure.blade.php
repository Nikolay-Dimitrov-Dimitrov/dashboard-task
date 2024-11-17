<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configure Button</title>
</head>
<body>
    <form action="{{ route('store', $position) }}" method="POST">
        @csrf
        <label for="url">URL:</label>
        <input type="url" id="url" name="url" value="{{ $button->url ?? '' }}" required>

        <label for="color">Color:</label>
        <input type="color" id="color" name="color" value="{{ $button->color ?? '#000000' }}">

        <button type="submit">Save</button>
    </form>
</body>
</html>
