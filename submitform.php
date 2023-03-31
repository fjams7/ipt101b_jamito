<html>
    <title> Login Form </title>
<head>
    <style>
        html {font-family:"century gothic";}
        body {text-align:center; background-color: #E4D0D0;}
        input {
            width: 300px;
            padding: 0.1px 10px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: 6px;
            font-size: 20px;
        }
        input[type=submit] {
            width: 100px;
            padding: 2px 4px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: 6px; 
            font-size: 20px;
            background-color: #FFFFFF;
        }
        label {
            display: inline-block;
            width: 300px;
            text-align: left;
        }
        h1 {font-size: 30px;}
    </style>
</head>
    <h1>
        PHP FORM ACTIVITY <br>
    </h1>
    <p> Jamito, Francis - IPT 101B </p>
    <body>
        <p>
            <hr><br>
        <form action="account.php" method="POST">
            <label for="fname">First Name</label> <br>
                <input type="text" name="fname" id="fname" pattern="[A-Za-z]+" title="Letters only" required> <br><br>
            <label for="fname">Last Name</label> <br>
                <input type="text" name="sname" id="sname" pattern="[A-Za-z]+" title="Letters only" required> <br><br>
            <label for="email">Email Address</label> <br>
                <input type="email" name="email" id="email" maxlength="30" required> <br><br>
            <label for="pwd">Password</label> <br>
                <input type="password" name="pwd" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="30" title="Must contain at least one number,one uppercase and lowercase letter, and at least 8 or more characters" required> <br><br>
            <label for="cpwd">Confirm Password</label> <br>
                <input type="password" name="cpwd" id="cpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="30" title="Must contain at least one number,one uppercase and lowercase letter, and at least 8 or more characters" required> <br><br>
                <br><br><input type="submit" value="Submit">
        </form>
        </p>
    </body>
</html>