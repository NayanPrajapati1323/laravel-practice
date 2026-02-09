<div>
    <h1>Users List</h1>
    @foreach ($users as $user)
        <p>{{ $user->name }} - {{ $user->email }} - {{ $user->created_at }}</p>
    @endforeach
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>