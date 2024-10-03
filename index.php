<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 10 Form with AJAX</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form id="registrationForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <span class="error" id="usernameError"></span>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span class="error" id="emailError"></span>
            
            <button type="submit">Register</button>
        </form>
        <div id="response"></div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>