@if (Session::has('flash_notification.message'))
    <div data-alert class="alert-box {{ Session::get('flash_notification.level') }}">
        {{ Session::get('flash_notification.message') }}
        <a href="#" class="close">&times;</a>
    </div>
@endif

@if ($errors->any())
    <div class="alert-box alert form-errors">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif