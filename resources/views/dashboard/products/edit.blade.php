@extends('dashboard.layaout.app')

@section('content-title')

Products
@endsection

@section('content')
<form action="{{ route('dashboard.products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Product Title:</label>
    <input type="text" name="title" id="title" value="{{ $product->title }}" required>
    <br><br>
    <label for="product_code">Product Code:</label>
    <input type="text" name="product_code" id="product_code" value="{{ $product->product_code }}" required>
    <br><br>
    <label for="category_id">Choose a Category:</label>
    <select name="category_id" id="category_id" required>
        <option value="" disabled>Select a category</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{
            $category->name }}</option>
        @endforeach
    </select><br><br>


    <div id="colorSizeContainer">
        @foreach($product->colors as $productColor)
        <fieldset>
            <label for="color">Choose a Color:</label>
            <select name="color[]" required>
                <option value="" disabled>Select a color</option>
                @foreach($colors as $color)
                <option value="{{ $color->id }}" {{ $productColor->id === $color->id ? 'selected' : '' }}>{{
                    $color->name }}
                </option>
                @endforeach
            </select>
            <label for="size">Choose a Size:</label>
            <select name="size[]" required>
                <option value="" disabled>Select a size</option>
                @foreach($sizes as $size)
                <option value="{{ $size->id }}" {{ $productColor->pivot->size_id === $size->id ? 'selected' : ''
                    }}>{{
                    $size->name }}
                </option>
                @endforeach
            </select>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity[]" min="1" required value="{{ $productColor->pivot->quantity }}">
            <label for="price">Price:</label>
            <input type="number" name="price[]" min="1" required value="{{ $productColor->pivot->price }}">
            <button type="button" class="removeColorSize">Remove</button>
        </fieldset>
        @endforeach
    </div>
    <button type="button" id="addColorSize">Add Color and Size</button><br />
    <button type="submit">Update</button>
</form>


<script>
    document.getElementById('addColorSize').addEventListener('click', function() {
        var container = document.getElementById('colorSizeContainer');
        var fieldset = document.createElement('fieldset');
        fieldset.innerHTML = `
            <label for="color">Choose a Color:</label>
            <select name="color[]" required>
                <option value="" disabled>Select a color</option>
                @foreach($colors as $color)
                <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            </select>
            <label for="size">Choose a Size:</label>
            <select name="size[]" required>
                <option value="" disabled>Select a size</option>
                @foreach($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->name }}</option>
                @endforeach
            </select>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity[]" min="1" required value="1">
            <label for="price">Price:</label>
            <input type="number" name="price[]" min="1" required value="1">
            <button type="button" class="removeColorSize">Remove</button>
        `;
        container.appendChild(fieldset);
    });

    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('removeColorSize')) {
            e.target.parentElement.remove();
        }
    });
</script>
@endsection