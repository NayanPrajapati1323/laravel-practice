<div>
    <table>
        <tr style="border: 1px solid black;">
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Website</td>
            <td>Company</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td>{{ $response->name }}</td>
            <td>{{ $response->email }}</td>
            <td>{{ $response->address->city }}</td>
            <td>{{ $response->address->street }}</td>
            <td>{{ $response->address->suite }}</td>
            <td>{{ $response->address->zipcode }}</td>
            <td>{{ $response->address->geo->lat }}</td>
            <td>{{ $response->address->geo->lng }}</td>
            <td>{{ $response->phone }}</td>
            <td>{{ $response->website }}</td>
            <td>{{ $response->company->name }}</td>
            <td>{{ $response->company->catchPhrase }}</td>
            <td>{{ $response->company->bs }}</td>
        </tr>
    </table>
</div>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
</style>