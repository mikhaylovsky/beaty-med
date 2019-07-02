@extends ('auth')
@section ('content')

    <div class="col-sm-12 ">
        <h1>Reset Password</h1>
        <form method="POST" action="/reset">
            {{csrf_field()}}
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <span class="pre-input"><i class="fa fa-envelope-o"></i></span>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required></input>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Send Password Reset Link
                </button>
            </div>

            @foreach($errors->all() as $error)
                <font size="3" color="red">{{ $error }}</font>
            @endforeach

        </form>

        <div class="form-group">
            <a href="/login" class="btn btn-info">Sign In</a>
        </div>

        @include ('layouts.errors')

    </div>
@endsection



