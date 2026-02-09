<div>
    <h1>Student</h1>
    <!-- <p>{{$student}}</p> -->
    @foreach($student as $students)
        <span>ID: {{ $students->id }}</span>
        <span>Name: {{$students->name}}</span>
        <span>Email: {{$students->email}}</span>
        <span>City: {{$students->city}}</span>
        <hr>
    @endforeach
</div>