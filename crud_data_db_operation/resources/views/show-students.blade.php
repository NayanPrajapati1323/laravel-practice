<div>
    <h1>Show Students</h1>
    <a href="add-student">Add Student</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if (session('delete'))
        <p>{{ session('delete') }}</p>
    @endif
    @if (session('update'))
        <p>{{ session('update') }}</p>
    @endif
    <form action="{{ route('search-students') }}" method="get">
        <input type="text" placeholder="search with name" name="search">
        <button type="submit">Search</button>
        <button type="submit" href="{{ route('show-students') }}">Reset</button>
    </form>
    <form action="{{ route('delete-multi-students') }}" method="post">
        @csrf
        <button type="submit">Delete Selected</button>

        <table>
            <thead>
                <tr>
                    <th>Selection</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td><input type="checkbox" name="ids[]" id="" value="{{ $student->id }}"></td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>

                            <a href="edit-students/{{ $student->id }}">Edit</a>
                            <a href="delete-students/{{ $student->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
    {{ $students->withQueryString()->links() }}
</div>

<style>
    table {
        width: 100%;
        height: 100px;
        border-collapse: collapse;
        margin: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .w-5 {
        width: 2%;
    }

    .h-5 {
        height: 2%;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
        border-radius: 5px;
        margin: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        width: 20%;
    }

    th {
        background-color: #f2f2f2;
        width: 20%;
        height: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    }

    a {
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
        padding: 8px 12px;
        border-radius: 4px;
        margin: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #946868ff;
        width: 20%;
        height: 40px;
    }

    form {
        display: flex;
        gap: 10px;
        margin: 20px;
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
        width: 100px;
        height: 40px;
        margin: 0 auto;
        transition: all 0.3s ease;
    }

    button:hover {
        background-color: #246328ff;
        border: 1px solid #246328ff;

    }
</style>