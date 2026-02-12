<div>
    <h1>Login Form </h1>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <br>
        <button type="submit">Login</button>
    </form>
</div>