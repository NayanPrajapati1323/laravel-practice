<div>
    <form action="/getuser" method="post">
        @csrf
        <div class="mb-3 border form">

            <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="mb-3 border form">

            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div class="mb-3 border form">

            <input type="password" name="password" placeholder="Enter your password">
        </div>
        <div class="mb-3 border form">
            <button type="submit">Submit</button>
        </div>

    </form>
</div>

<style>
    input,
    button {
        padding: 5px;
        margin: 10px;
        border: 2px solid black;
        border-radius: 5px;
        box-shadow: 2px 2px 5px black;
        width: 200px;
    }
</style>