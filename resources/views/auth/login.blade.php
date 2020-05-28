<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Form Login</h2>
    <form method="POST" action="auth/login">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="email" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password">
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit">Login</button>
        <a href="/auth/competition">Register</a>
    </form>
</body>

</html>