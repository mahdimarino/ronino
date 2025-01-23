<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="" method="POST">
    @csrf
    <label for="title">Product Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="color_id">Choose a Color:</label>
    <select name="color_id" id="color_id" required>
        <option value="" disabled selected>Select a color</option>
        @foreach($colors as $color)
        <option value="{{ $color->id }}">{{ $color->name }}</option>
        @endforeach
    </select>
    <select name="category_id" id="category_id" required>
        <option value="" disabled selected>Select a category</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <select name="partwear_id" id="partwear_id" required>
        <option value="" disabled selected>Select a Part</option>
        @foreach($partwears as $partwear)
        <option value="{{ $partwear->id }}">{{ $partwear->name }}</option>
        @endforeach
    </select>
    <select name="gsm_id" id="gsm" required>
        <option value="" disabled selected>Select a Gsm</option>
        @foreach($gsms as $gsm)
        <option value="{{ $gsm->id }}">{{ $gsm->value }}</option>
        @endforeach
    </select>

    <button type="submit">Add</button>
</form>
</body>
</html>