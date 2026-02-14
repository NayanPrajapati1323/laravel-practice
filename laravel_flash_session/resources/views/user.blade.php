<div>
    <h1>Login Form</h1>
    <div>
        @if (session('msg'))
            <p style="color: green;">{{ session('msg') }}</p>
        @endif
        @if (session('msg1'))
            <p style="color: green;">{{ session('msg1') }}</p>
        @endif
        {{ session()->keep(['msg1']) }}
        <form action="{{ route('user.adduser') }}" method="post">
            @csrf
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
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
</style>