<div class="email-form">
    <h1>Email Send</h1>
    <form action="{{ route('send.mail') }}" method="post">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Enter your subject">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit">Send Mail</button>
    </form>
</div>

<style>
    .alert {
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .email-form {
        max-width: 600px;
        margin: 20px auto;
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    div {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    input,
    textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: white;
        cursor: pointer;
    }
</style>