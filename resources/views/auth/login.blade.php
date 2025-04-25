<h2>Login</h2>

<form action="{{route('login')}}" method="POST">
    @csrf

    <h2> Log In to Your Account
    </h2>

    <label for="name">Name:</label>
    <input type="text"
           name="name"
           required
           value="{{old('name')}}">


    <label for="email">Email:</label>
    <input type="email"
           name="email"
           required
           value="{{old('email')}}">


    <label for="password">Password</label>
    <input type="password"
           name="password"
           required>

    <label for="password_confirmation">Confirm Password</label>
    <input type="password"
           name="password_confirmation"
           required>


    <button type="submit" class="btn btn-outline-success">
        Login
    </button>

</form>


