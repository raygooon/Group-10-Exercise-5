document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;

    const usernameError = document.getElementById('usernameError');
    const emailError = document.getElementById('emailError');
    const responseDiv = document.getElementById('response');

    usernameError.textContent = '';
    emailError.textContent = '';
    responseDiv.textContent = '';
    responseDiv.style.display = 'none';

    let valid = true;

    if (username === '') {
        usernameError.textContent = 'Username is required';
        valid = false;
    }

    if (email === '') {
        emailError.textContent = 'Email is required';
        valid = false;
    }

    if (valid) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'register.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload = function() {
            responseDiv.textContent = this.responseText;
            responseDiv.style.display = 'block';
        };

        xhr.send('username=' + encodeURIComponent(username) + '&email=' + encodeURIComponent(email));
    }
});