<!DOCTYPE html>
<html>

<head>
    <title> Registration Form </title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div class="main">
        <div class="register">
            <h2>Register Here</h2>
            <form id="register" method="post">
                <label for="fname">First Name :</lable>
                    <br>
                    <input type="text" id="fname" name="fname" required placeholder="Enter Your First Name">
                    <br></br>
                    <label for="lname">Last name :</label>
                    <br>
                    <input type="text" id="lname" name="lname" required placeholder="Enter your Last Name">
                    <br></br>
                    <label for="age"> Your Age :</label>
                    <br>
                    <input type="text" id="age" name="age" required placeholder="How old are you ?">
                    <br></br>
                    <label for="address">Address :</labe>
                    <br>
                    <input type="text" id="address" name="address" required placeholder="Enter your Address">
                    <br></br>
                    <label for="email">Email ID :</label>
                    <br>
                    <input type="text" id="email" name="email" required placeholder="Enter your valid email">
                    <br></br>
                    <label for="password">Password :</label>
                    <br>
                    <input type="password" id="password" name="password" required placeholder="Enter your valid password">
                    <br></br>
                    <lable>Gender :</lable>
                    <br>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="male">
                    &nbsp;
                    <span id="male">Male</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="female">
                    &nbsp;
                    <span id="female">Female</span>
                    <br></br>
                    <lable>Know Language :</lable>
                    <br>
                    &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="lang" id="hindi">
                    &nbsp;
                    <span id="Hindi">Hindi</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="lang" id="english">
                    &nbsp;
                    <span id="english">English</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="lang" id="urdu">
                    &nbsp;
                    <span id="urdu">Urdu</span>
                    <br></br>
                    <input type="submit" value="submit" name="submit" id="submit">
            </form>
        </div>
    </div>
</body>

</html>