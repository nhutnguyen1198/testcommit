<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Login</title>
</head>
<style>
    body {
        position: relative;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background-color: white;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    .dsuser {
        text-align: center;
        margin-bottom: 20px;
        position: absolute;
        top: 100px;
        left: 45%;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 90%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    label[for="password"] {
        margin-right: 5px;
    }

    label[for="email"] {
        margin-right: 33px;
    }

    input[type="checkbox"] {
        margin-left: 76px;
    }

    input[type="repassword"] {
        margin-left: 7px;
        width: 55%;
        padding: 10px;
        border-radius: 4px;
    }

    input[type="email"] {
        margin-left: 5px;
    }

    button {
        width: 100px;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    a {
        text-decoration-line: none;
        margin-right: 10px;
        margin-left: 35%;
        color: #000;
    }

    .a {
        margin-top: 40px;
    }

    button:hover {
        background-color: #0056b3;
    }

    footer {
        text-align: center;
        margin-top: 20px;
        font-size: 12px;
    }

    nav {
        position: absolute;
        top: 0;
        border: 2px solid #000;
        width: 98%;
        height: 5%;
        justify-content: center;
        display: flex;
    }

    ul {
        list-style-type: none;
        margin: 10px;
        padding: 0;
        display: flex
    }

    li {
        display: flex;
        white-space: nowrap;
        margin: 0 5px;
    }

    footer {
        position: absolute;
        bottom: 0;
        border: 2px solid #000;
        width: 98%;
        height: 5%;
    }

    table,
    td {
        border: 1px solid #000;
        text-align: left;
    }

    th {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 90%;
        position: absolute;
        top: 22%;
    }

    /* th,
td {
    padding: 15px;
} */
    .cot1 {
        width: 25px;
    }

    .cot4 {
        width: 230px;
    }

    .b {
        margin-left: 200px;
    }

    .c,
    .d {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .c p,
    .d p {
        position: absolute;
        left: 45%;
    }
</style>

<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
            <li><a href="{{ route('user.createUser') }}">Đăng ký</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Màn hình đăng ký</h2>
        <form action="{{ route('user.postUser') }}" method="POST">
            @csrf
            <div>
                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div>
                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required
                    autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div>
                <input type="text" placeholder="diachi" id="diachi" class="form-control" name="diachi" required
                    autofocus>
                @if ($errors->has('diachi'))
                    <span class="text-danger">{{ $errors->first('diachi') }}</span>
                @endif
            </div>
            <div>
                <input type="text" placeholder="sdt" id="sdt" class="form-control" name="sdt" required
                    autofocus>
                @if ($errors->has('sdt'))
                    <span class="text-danger">{{ $errors->first('sdt') }}</span>
                @endif
            </div>
            <div>
                <input type="password" placeholder="Password" id="password" class="form-control" name="password"
                    required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div>
                <input type="password" placeholder="Confirm Password" id="confirm-password" name="confirm-password"
                    required>
                <span id="password-error" class="text-danger"></span>
            </div>
            <div class="a">
                <a href="{{ route('login') }}" style="color: rgb(62, 141, 184);">Đã có tài khoản</a>
                <button type="submit">Đăng ký</button>
            </div>

        </form>
    </div>
    <footer>
        <p>Minh Nhựt @04/2024</p>
    </footer>
    <script>
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm-password');
        const errorMessage = document.getElementById('password-error');

        function validatePassword() {
            if (password.value === confirmPassword.value) {
                errorMessage.textContent = ''; 
                confirmPassword.setCustomValidity(''); 
            } else {
                errorMessage.textContent = 'Mật khẩu không khớp'; 
                confirmPassword.setCustomValidity('Mật khẩu không khớp'); 
            }
        }
        password.addEventListener('input', validatePassword);
        confirmPassword.addEventListener('input', validatePassword);
    </script>
</body>

</html>