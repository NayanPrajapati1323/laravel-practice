<div>
    <h1>
        User Details
    </h1>
    <table>
        <tr>
            <td>Username</td>
            <td>Password</td>
        </tr>
        <tr>
            <td>{{ $request->password }}</td>
            <td>{{ $request->username }}</td>
        </tr>
    </table>
</div>

<style>
    table {
        margin: 5px;
        padding: 5px;
        text-align: center;
        width: 100%;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f5f5f5;
    }

    td {
        margin: 5px;
        padding: 5px;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f5f5f5;
    }
</style>