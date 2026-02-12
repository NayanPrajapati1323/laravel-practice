<div>
    <h1>Profile page</h1>
    <!-- <p>{{ session('name') }}</p> -->
    @if(session('name'))
        <p>Session is stored successfully: {{ session('name') }}</p>
    @else
        <p>Please login first</p>
    @endif
    <a href="{{ route('logout') }}">Logout</a>
</div>