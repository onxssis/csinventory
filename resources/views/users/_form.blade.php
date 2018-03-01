    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') ?? $user->name  }}" required>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="control-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') ?? $user->email }}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
        <label for="role" class="control-label">Role</label>
        <select name="role" id="role" class="form-control">
            <option value="0">-- Select --</option>
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{
                $role->display_name
                }}</option>
            @endforeach
        </select>

        @if ($errors->has('role'))
            <span class="help-block">
                <strong>{{ $errors->first('role') }}</strong>
            </span>
        @endif

    </div>

    {{--<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">--}}
        {{--<label for="location" class="control-label">Location</label>--}}
        {{--<input type="text" name="location" class="form-control" value="{{ old('location') ?? $user->location
        }}">--}}

        {{--@if ($errors->has('location'))--}}
            {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('location') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}

    {{--</div>--}}

    <button class="btn btn-primary" type="submit">
        {{ $buttonText ?? 'Create User' }}
    </button>