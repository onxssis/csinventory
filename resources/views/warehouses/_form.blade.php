    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') ?? $warehouse->name  }}" required>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
        <label for="code" class="control-label">Code</label>
        <input type="text" name="code" class="form-control" value="{{ old('code') ?? $warehouse->code }}">

        @if ($errors->has('code'))
            <span class="help-block">
                <strong>{{ $errors->first('code') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
        <label for="location" class="control-label">Location</label>
        <input type="text" name="location" class="form-control" value="{{ old('location') ?? $warehouse->location }}">

        @if ($errors->has('location'))
            <span class="help-block">
                <strong>{{ $errors->first('location') }}</strong>
            </span>
        @endif

    </div>

    <button class="btn btn-primary" type="submit">
        {{ $buttonText ?? 'Create Warehouse' }}
    </button>