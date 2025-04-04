<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
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
        width: 70%;
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
        width: 70%;
        padding: 10px;
    }

    input[type="email"] {
        margin-left: 33px;
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
        text-align: center;
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
            <li><a href="{{ route('login') }}">Đăng xuất</a></li>
        </ul>
    </nav>
    <div class="">
        <h2 class="dsuser">Danh sách user</h2>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th class="cot4">Thao tác</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <ul>
                        <li><a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit |</a></li>
                        <li><a href="{{ route('user.readUser', ['id' => $user->id]) }}">View |</a></li>
                        <li><a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a></li>
                    </ul>
                </td>
            </tr>
        @endforeach
    </table>
    <footer>
        <p>Minh Nhựt @04/2025</p>
    </footer>
</body>

</html>