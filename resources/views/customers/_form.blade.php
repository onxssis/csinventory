    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') ?? $customer->name  }}" required>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="control-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') ?? $customer->email }}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
        <label for="telephone" class="control-label">Telephone</label>
        <input type="text" name="telephone" class="form-control" value="{{ old('telephone') ?? $customer->telephone  }}"
               required>

        @if ($errors->has('telephone'))
            <span class="help-block">
                <strong>{{ $errors->first('telephone') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
        <label for="address" class="control-label">Address 1</label>
        <input type="text" name="address" class="form-control" value="{{ old('address') ?? $customer->address1  }}"
               required>

        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
        <label for="address2" class="control-label">Address 2 (Optional)</label>
        <input type="text" name="address2" class="form-control" value="{{ old('address2') ?? $customer->address2  }}">

        @if ($errors->has('address2'))
            <span class="help-block">
                <strong>{{ $errors->first('address2') }}</strong>
            </span>
        @endif

    </div>


    {{--<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">--}}
        {{--<label for="location" class="control-label">Location</label>--}}
        {{--<input type="text" name="location" class="form-control" value="{{ old('location') ?? $customer->location
        }}">--}}

        {{--@if ($errors->has('location'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('location') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}

    {{--</div>--}}

    <button class="btn btn-primary" type="submit">
        {{ $buttonText ?? 'Create Customer' }}
    </button>