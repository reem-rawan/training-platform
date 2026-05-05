<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register Page</h2>

    <form method="POST" action="/register">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <label>Role:</label><br>
        <select name="role">
            <option value="student">Student</option>
            <option value="company">Company</option>
            <option value="admin">Admin</option>
        </select><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>