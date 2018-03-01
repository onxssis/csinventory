    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') ?? $supplier->name  }}" required>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="control-label">Email Address</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') ?? $supplier->email }}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
        <label for="telephone" class="control-label">Telephone</label>
        <input type="text" name="telephone" class="form-control" value="{{ old('telephone') ?? $supplier->telephone }}">

        @if ($errors->has('telephone'))
            <span class="help-block">
                <strong>{{ $errors->first('telephone') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
        <label for="address" class="control-label">Address</label>
        <input type="text" name="address" class="form-control" value="{{ old('address') ?? $supplier->address }}">

        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif

    </div>

    <button class="btn btn-primary" type="submit">
        {{ $buttonText ?? 'Add Supplier' }}
    </button>