<form action="/register" method="post">
    @csrf
    <input type="text" name="name" placeholder="Username">
    <input type="text" name="email"placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Register">
</form>