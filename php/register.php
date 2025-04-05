<!DOCTYPE html>
<html>
<head>
    <title>Styled Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 25px;
            max-width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        input[type=text], input[type=password], input[type=date], input[type=tel] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$name = $email = $phone = $dob = $password = $confirm_password = "";
$error = "";

// Form submission check
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($dob) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    } else if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $error = "Phone number must be 10 digits!";
    } else if ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        echo "<div class='container'><h3>Registration Successful!</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Phone: $phone <br>";
        echo "DOB: $dob <br></div>";
    }
}
?>

<div class="container">
    <h2>Registration Form</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="post">
        Name:
        <input type="text" name="name" value="<?php echo $name; ?>">

        Email:
        <input type="text" name="email" value="<?php echo $email; ?>">

        Phone Number:
        <input type="tel" name="phone" value="<?php echo $phone; ?>">

        Date of Birth:
        <input type="date" name="dob" value="<?php echo $dob; ?>">

        Password:
        <input type="password" name="password">

        Confirm Password:
        <input type="password" name="confirm_password">

        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>
