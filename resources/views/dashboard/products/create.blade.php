<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="{{ route('product.store') }}" method="POST">
    @csrf
    <label for="title">Product Title:</label>
    <input type="text" name="title" id="title" required>
<br><br>
<label for="title">Product code:</label>
<input type="text" name="product_code" id="product_code" required>
<br><br>
    <label for="color_id">Choose a Color:</label>
    <select name="color_id" id="color_id" required>
        <option value="" disabled selected>Select a color</option>
        @foreach($colors as $color)
        <option value="{{ $color->id }}">{{ $color->name }}</option>
        @endforeach
    </select><br><br>
    <label for="color_id">Choose a category:</label>
    <select name="category_id" id="category_id" required>
        <option value="" disabled selected>Select a category</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select><br><br>
    <label for="color_id">Choose a Part:</label>
    <select name="partwear_id" id="partwear_id" required>
        <option value="" disabled selected>Select a Part</option>
        @foreach($partwears as $partwear)
        <option value="{{ $partwear->id }}">{{ $partwear->name }}</option>
        @endforeach
    </select><br><br>
     <label for="color_id">Choose a Gsm:</label>
    <select name="gsm_id" id="gsm" required>
        <option value="" disabled selected>Select a Gsm</option>
        @foreach($gsms as $gsm)
        <option value="{{ $gsm->id }}">{{ $gsm->value }}</option>
        @endforeach
    </select><br><br>
    <label for="color_id">Choose a size:</label>
    <select name="size_id" id="size" required>
        <option value="" disabled selected>Select a size</option>
        @foreach($sizes as $size)
        <option value="{{ $size->id }}">{{ $size->name }}</option>
        @endforeach
    </select><br><br> 
    <label>Quantity:</label>
    <input type="text" name="quantity" id="quantity" required>

    <button type="submit">Add</button>
</form>
</body>
</html>