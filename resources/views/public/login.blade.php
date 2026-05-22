<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Auth::check() ? Auth::user()->role . 'Page' : 'GuestPage' }}</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo container">
            <img src="https://img.icons8.com/arcade/64/login-rounded-right.png" alt="login-rounded-right">
        </div>
        <div class="name text-center mt-3">Login</div>
        <form method="post" action="login">
            @csrf
            <div class="mb-3 form-field">
                <input type="text" id="username" name="username" placeholder="Username" autocomplete="off">
            </div>
            <div class="mb-3 form-field">
                <input type="password" id="password" name="password" placeholder="Password">
                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary col-6">Login</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="#" class="text-decoration-none">Forget password?</a> or <a href="#" class="text-decoration-none">Sign up</a>
        </div>
        <p class="text-muted text-center mt-3">&copy; ISC 2024</p>
        @if($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>

</html>