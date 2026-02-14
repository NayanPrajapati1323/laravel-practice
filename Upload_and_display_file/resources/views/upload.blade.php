<div>
    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ session('message') }}
        <div>
            <input type="file" name="file" id="file" required>
        </div>
        <button type="submit">Upload</button>
    </form>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f4f4;
    }

    div {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10%;
    }

    form {
        display: flex;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        height: 200px;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
    }

    input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 200px;
        height: 40px;
        background-color: #f9f9f9;
        cursor: pointer;
    }

    button {
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
</style>