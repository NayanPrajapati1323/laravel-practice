<div>
    <form action="{{ route('signup') }}" method="post">
        @csrf
        {{ session('success_login') }}
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <button type="submit">Signup</button>
    </form>
</div>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0;
    }

    div {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input {
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        margin: 10px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: white;
    }
</style>