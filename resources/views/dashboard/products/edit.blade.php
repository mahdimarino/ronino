@extends('dashboard.layaout.app')

@section('content-title')
    Products
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Product Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $product->title }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="product_code" class="form-label">Product Code <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="product_code" id="product_code"
                        value="{{ $product->product_code }}" required>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                            <select class="form-select" name="category_id" id="category_id" required>
                                <option value="" disabled>Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="gsm_id" class="form-label">GSM <span class="text-danger">*</span></label>

                            <!-- Updated debug to check both fields -->
                            {{-- <div class="alert alert-info small">
            <strong>Debug Info:</strong><br>
            Product GSM ID: {{ $product->gsm_id }}<br>
            Total GSMs: {{ $gsms->count() }}<br>
            GSMs Available: 
            @foreach ($gsms as $gsm)
                ID: {{ $gsm->id }}, Name: "{{ $gsm->name ?? 'N/A' }}", Value: "{{ $gsm->value ?? 'N/A' }}" |
            @endforeach
        </div> --}}

                            <select class="form-select" name="gsm_id" id="gsm_id" required>
                                <option value="" disabled>Select a GSM</option>
                                @foreach ($gsms as $gsm)
                                    <option value="{{ $gsm->id }}"
                                        {{ $product->gsm_id == $gsm->id ? 'selected' : '' }}>
                                        {{ $gsm->name ?? ($gsm->value ?? 'GSM #' . $gsm->id) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="prix" class="form-label">Price <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" name="prix" value="{{ $product->prix }}" required
                            min="0" step="0.01">
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="description" id="description" rows="6" required>{{ old('description', $product->description) }}</textarea>
                </div>

                <!-- Existing Images -->
                <div class="mb-3">
                    <label class="form-label">Existing Images</label>
                    <div class="row">
                        @foreach ($product->images as $image)
                            <div class="col-4 mb-3">
                                <div class="card">
                                    <img src="{{ $image->url }}" class="card-img-top" alt="Product Image"
                                        style="height: 100px; object-fit: cover;">
                                    <div class="card-body text-center p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="delete_images[]"
                                                value="{{ $image->id }}" id="delete_image_{{ $image->id }}">
                                            <label class="form-check-label small" for="delete_image_{{ $image->id }}">
                                                Delete
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- New Image Upload -->
                <div class="mb-3">
                    <label for="images" class="form-label">Upload New Images</label>
                    <input type="file" class="form-control" name="images[]" id="images" multiple accept="image/*">
                    <div class="form-text">
                        You can upload multiple images (JPEG, PNG, JPG, GIF, SVG) up to 2MB each.
                    </div>
                </div>
            </div>
        </div>

        <!-- Color & Size Variations -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title mb-0">Color & Size Variations</h6>
                        <button type="button" class="btn btn-sm btn-primary" id="addColorSize">
                            <i class="fas fa-plus"></i> Add Variation
                        </button>
                    </div>
                    <div class="card-body">
                        <div id="colorSizeContainer">
                            @foreach ($product->colors as $productColor)
                                <div class="color-size-item border rounded p-3 mb-3">
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Color <span class="text-danger">*</span></label>
                                            <select class="form-select" name="color[]" required>
                                                <option value="" disabled>Select a color</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}"
                                                        {{ $productColor->id === $color->id ? 'selected' : '' }}>
                                                        {{ $color->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Size <span class="text-danger">*</span></label>
                                            <select class="form-select" name="size[]" required>

                                                <option value="" disabled>Select a size</option>
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->id }}"
                                                        {{ $productColor->pivot->size_id === $size->id ? 'selected' : '' }}>
                                                        {{ $size->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Quantity <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="quantity[]" min="1"
                                                required value="{{ $productColor->pivot->quantity }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Price <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" class="form-control" name="price[]" min="1"
                                                    step="0.01" required value="{{ $productColor->pivot->price }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="button" class="btn btn-sm btn-danger removeColorSize w-100">
                                                <i class="fas fa-trash"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Update Product
                    </button>
                    <a href="{{ route('dashboard.products.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add Color & Size Variation
            document.getElementById('addColorSize').addEventListener('click', function() {
                var container = document.getElementById('colorSizeContainer');
                var newItem = document.createElement('div');
                newItem.className = 'color-size-item border rounded p-3 mb-3';
                newItem.innerHTML = `
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Color <span class="text-danger">*</span></label>
                    <select class="form-select" name="color[]" required>
                        <option value="" disabled selected>Select a color</option>
                        @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Size <span class="text-danger">*</span></label>
                    <select class="form-select" name="size[]" required>
                        <option value="" disabled selected>Select a size</option>
                        @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Quantity <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="quantity[]" min="1" required value="1">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Price <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" name="price[]" min="1" step="0.01" required value="1">
                    </div>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" class="btn btn-sm btn-danger removeColorSize w-100">
                        <i class="fas fa-trash"></i> Remove
                    </button>
                </div>
            </div>
        `;
                container.appendChild(newItem);
            });

            // Remove Color & Size Variation
            document.addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('removeColorSize')) {
                    e.target.closest('.color-size-item').remove();
                }
            });
        });
    </script>

    <style>
        .color-size-item {
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }

        .color-size-item:hover {
            background-color: #e9ecef;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }
    </style>
@endsection
