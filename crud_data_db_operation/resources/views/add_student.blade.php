<div>
    <h1>Add Student</h1>
    <form action="/add-student" method="post">
        {{ session('success') }}
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter your email">
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
        </div>
        <button type="submit">Add Student</button>
    </form>
</div>

<style>
    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 40%;
        height: 100%;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        background-color: cadetblue;
    }

    div {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    label {
        font-weight: bold;
    }

    input {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        height: 40px;
        box-sizing: border-box;
        outline: none;
        transition: all 0.3s ease;
    }

    input:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        padding: 10px;
    }

    button {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        background-color: #4CAF50;
        color: white;
        width: 50%;
        margin: 0 auto;
        transition: all 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
        padding: 10px;
    }
</style>