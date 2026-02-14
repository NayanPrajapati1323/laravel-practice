<div>
    <h1>Dashboard</h1>
    {{-- <div>
        @if (session('username'))
        <p>Welcome to the dashboard</p>
        <p>Username: {{ session('username') }}</p>
        <p>Email: {{ session('email') }}</p>
        <p>Password: {{ session('password') }}</p>
        @else
        <p>Please login to access the dashboard</p>
        @endif
    </div>
    <a href="{{ route('user.logout') }}">Logout</a> --}}
</div>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }

    div {
        background-color: #f1f1f1;
        padding: 20px;
        border-radius: 5px;
    }

    input {
        padding: 10px;
        margin: 10px 0;
    }

    button {
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    a {
        text-decoration: none;
        color: #4CAF50;
    }

    a:hover {
        color: #45a049;
    }
</style>