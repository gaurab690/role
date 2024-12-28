@extends('layouts.master')
@section('section')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required autofocus>
                    @if ($errors->has('email'))
                        <p class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </p>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="togglePassword()">
                                <i class="fas fa-eye" id="togglePasswordIcon"></i>
                            </span>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <p class="text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</div>

<script> //for eye icon on password
function togglePassword() {
    const passwordField = document.getElementById('password');
    const togglePasswordIcon = document.getElementById('togglePasswordIcon');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        togglePasswordIcon.classList.remove('fa-eye');
        togglePasswordIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        togglePasswordIcon.classList.remove('fa-eye-slash');
        togglePasswordIcon.classList.add('fa-eye');
    }
}
</script>

@endsection
