    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label">Product Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') ?? $product->name  }}" required>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
        <label for="code" class="control-label">Serial Number</label>
        <input type="text" name="code" class="form-control" value="{{ old('code') ?? $product->code }}">

        @if ($errors->has('code'))
            <span class="help-block">
                <strong>{{ $errors->first('code') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('supplier') ? ' has-error' : '' }}">
        <label for="supplier" class="control-label">Supplier</label>
        <select name="supplier" id="supplier" class="form-control">
            <option value="0">-- Select --</option>
            @foreach($suppliers as $supplier)
                <option
                        value="{{ $supplier->id }}"
                        {{ $supplier->id === $product->supplier_id ? 'selected' : ''}}>

                    {{ ucfirst($supplier->name) }}

                </option>
            @endforeach
        </select>

        @if ($errors->has('supplier'))
            <span class="help-block">
                <strong>{{ $errors->first('supplier') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('warehouse') ? ' has-error' : '' }}">
        <label for="warehouse" class="control-label">Warehouse</label>
        <select name="warehouse" id="warehouse" class="form-control">
            <option value="0">-- Select --</option>
            @foreach($warehouses as $warehouse)
                <option
                        value="{{ $warehouse->id }}"
                        {{ $warehouse->id === $product->warehouse_id ? 'selected' : ''}}>

                    {{ ucfirst($warehouse->name) }}
                </option>
            @endforeach
        </select>

        @if ($errors->has('warehouse'))
            <span class="help-block">
                <strong>{{ $errors->first('warehouse') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
        <label for="quantity" class="control-label">Product Quantity</label>
        <input type="text" name="quantity" class="form-control" value="{{ old('quantity') ?? $product->quantity }}">

        @if ($errors->has('quantity'))
            <span class="help-block">
                <strong>{{ $errors->first('quantity') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('cost_price') ? ' has-error' : '' }}">
        <label for="cost_price" class="control-label">Cost Price</label>
        <input type="text" name="cost_price" class="form-control" value="{{ old('cost_price') ?? $product->cost_price
        }}">

        @if ($errors->has('cost_price'))
            <span class="help-block">
                <strong>{{ $errors->first('cost_price') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('selling_price') ? ' has-error' : '' }}">
        <label for="selling_price" class="control-label">Selling Price</label>
        <input type="text" name="selling_price" class="form-control" value="{{ old('selling_price') ??
        $product->selling_price
        }}">

        @if ($errors->has('selling_price'))
            <span class="help-block">
                <strong>{{ $errors->first('selling_price') }}</strong>
            </span>
        @endif

    </div>



    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description" class="control-label">Product Description</label>
        <textarea name="description" id="description" rows="7" class="form-control">{{ old('description') ?? $product->description }}</textarea>

        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif

    </div>

    <button class="btn btn-primary" type="submit">
        {{ $buttonText ?? 'Add Product' }}
    </button>