<div>


    <!-- @if($errors->all())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif -->
    <form action="/getuser" method="post">
        @csrf
        <div>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name"
                class="@error('name') is-invalid @enderror">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="text" name="email" placeholder="Enter your email">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="Enter your password">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="php">PHP</label>
            <input type="checkbox" name="skills[]" value="PHP" id="php">
            <label for="laravel">Laravel</label>
            <input type="checkbox" name="skills[]" value="Laravel" id="laravel">
            <label for="js">JS</label>
            <input type="checkbox" name="skills[]" value="JS" id="js">
            @error('skills')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="">Gender</label>
            <input type="radio" name="gender" value="male">
            <label for="">Male</label>
            <input type="radio" name="gender" value="female">
            <label for="">Female</label>
            @error('gender')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <h4>City</h4>
            <select name="city" id="">
                <option value="">Select City</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Surat">Surat</option>
                <option value="Baroda">Baroda</option>
            </select>
            @error('city')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="range" name="age" id="" min="18" max="60">
            @error('age')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
<style>
    input,
    button,
    select {
        padding: 5px;
        margin: 10px;
        border: 2px solid black;
        border-radius: 5px;
        box-shadow: 2px 2px 5px black;
        width: 200px;
    }

    .is-invalid {
        border-color: red;
        background-color: #ffcccc;
        color: yellow;
    }
</style>