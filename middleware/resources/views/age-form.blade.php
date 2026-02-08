<!DOCTYPE html>
<html>

<head>
    <title>Age Verification</title>
</head>

<body>

    <h2>Enter Your Age</h2>

    <form method="POST" action="{{ route('age.submit') }}">
        @csrf

        <input type="number" name="age" placeholder="Enter your age" required>

        <button type="submit">Submit</button>
    </form>

</body>

</html>