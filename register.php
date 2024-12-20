<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="qiao_logo.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('bg_07_16.jpg');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .main-container {
            display: flex;
            position: relative;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            width: 30%;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .register-container h2 {
            margin-top: 0;
            text-align: center;
        }
        .register-container form {
            text-align: center;
        }
        .register-container input[type="text"],
        .register-container input[type="password"],
        .register-container button,
        .register-container select {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .register-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .warning {
            color: red;
            font-size: 0.9em;
            display: none;
        }
        .links {
            color: #00aeec;
        }
        .links:hover {
            color: #00aeec;
        }
        .links:visited {
            color: #00aeec;
        }
    </style>
</head>
<body>
<div class="main-container">
    <div class="register-container">
        <img src="qiao_logo.svg" style="width: 300px;">
        <h1 style="font-family: 'Segoe UI Light', Arial, sans-serif; padding: 0px; margin: 0px; color: #aaa;" id="greetings"></h1>
        <h2 style="margin: 20px;">Registry</h2>
        <form action="new_member.php" id="registerForm" method="post">
            <input type="text" name="username" placeholder="Username" id="username" onfocus="inputFocus(this)" required>
            <input type="password" name="password" placeholder="Password" id="password" onfocus="inputFocus(this)" required>
            <input type="password" name="conf_password" placeholder="Confirm Password" id="conf_password" onfocus="inputFocus(this)" required>
            <div class="warning" id="passwordWarning">Passwords do not match!</div>
            <select name="security_question" id="security_question" style="background-color: #ccc;" onfocus="inputFocus(this)" required>
                <option value="" disabled selected>Select Security Question 1</option>
                <option value="first_pet">What is the name of your first pet?</option>
                <option value="birth_city">What is the name of the city where you were born?</option>
                <option value="best_childhood_friend">What is the name of your best childhood friend?</option>
                <option value="primary_school_name">What's your primary school's name?</option>
                <option value="street_grew_up_on">What is the name of the street you grew up on?</option>
            </select>
            <input type="text" name="answer" id="answer" placeholder="Answer" onfocus="inputFocus(this)" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login_pg.php" class="links">Login</a></p>
    </div>
</div>

<script>
    var currentDate = new Date();
    var currentHour = currentDate.getHours();
    var body = document.body;
    if (currentHour < 4 || currentHour > 19) {
        body.style.backgroundImage = "url('bg_19_04.jpg')";
        document.getElementById("greetings").innerHTML = "May you have a good night.";
    } else if (currentHour >= 4 && currentHour < 7) {
        body.style.backgroundImage = "url('bg_04_07.jpg')";
        document.getElementById("greetings").innerHTML = "Good morning. <br>A new day is about to begin.";
    } else if (currentHour >= 7 && currentHour < 16) {
        body.style.backgroundImage = "url('bg_07_16.jpg')";
        document.getElementById("greetings").innerHTML = "May you have a fulfilling day.";
    } else if (currentHour >= 16 && currentHour <= 19) {
        body.style.backgroundImage = "url('bg_16_19.jpg')";
        document.getElementById("greetings").innerHTML = "The day's coming to an end. <br>Now cherish the evening sunset.";
    }

    function inputFocus(input) {
        input.style.backgroundColor = "white";
        input.style.borderColor = "#00AEEC";
    }

    document.getElementById('registerForm').onsubmit = function(event) {
        var password = document.getElementById('password').value;
        var confPassword = document.getElementById('conf_password').value;
        var warning = document.getElementById('passwordWarning');

        if (password !== confPassword) {
            warning.style.display = 'block';
            event.preventDefault(); // Prevent form submission
        } else {
            warning.style.display = 'none';
        }
    };
</script>


</body>
</html>
