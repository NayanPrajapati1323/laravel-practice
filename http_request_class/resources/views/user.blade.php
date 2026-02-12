<h1>Login Form </h1>
<form action="login" method="post">
    @csrf
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">Login</button>
</form>

<style>
    div {
        margin: 5px;
        padding: 5px;
        text-align: center;
        width: auto;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f5f5f5;
        display: flex;

    }

    label {
        margin: 5px;
    }

    input {
        margin: 5px;
        padding: 5px;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f5f5f5;
        display: flex;
    }

    button {
        margin: 5px;
    }

    h1 {
        text-align: center;
    }

    form {
        text-align: center;
    }

    div {
        text-align: center;
    }
</style>