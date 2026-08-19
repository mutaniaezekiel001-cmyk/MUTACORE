
<?php



// Database configuration
$host = "localhost";
$dbname = "mutacore_visuals";
$username = "root";
$password = "";



if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Invalid request method.");
}




try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

} catch (PDOException $e) {

    // Do not expose database details to visitors
    error_log("Database connection error: " . $e->getMessage());

    http_response_code(500);

    exit("Sorry, we could not connect to the database.");

}



$full_name = trim($_POST["name"] ?? "");
$email     = trim($_POST["email"] ?? "");
$phone     = trim($_POST["phone"] ?? "");
$service   = trim($_POST["service"] ?? "");
$budget    = trim($_POST["budget"] ?? "");
$message   = trim($_POST["message"] ?? "");




if ($full_name === "" ||
    $email === "" ||
    $service === "" ||
    $message === "") {

    exit("Please fill in all required fields.");

}




if (mb_strlen($full_name) > 100) {

    exit("Your name is too long.");

}




if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    exit("Please enter a valid email address.");

}




if ($phone !== "" && !preg_match('/^[0-9+\-\s()]{7,30}$/', $phone)) {

    exit("Please enter a valid phone number.");

}



if (mb_strlen($message) > 5000) {

    exit("Your message is too long.");

}



$allowed_services = [

    "Branding",
    "Graphic Design",
    "Social Media Design",
    "Web Design",
    "Website Development",
    "Website Maintenance"

];


if (!in_array($service, $allowed_services, true)) {

    exit("Invalid service selected.");

}




$allowed_budgets = [

    "",
    "Below KSh 10,000",
    "KSh 10,000 – 25,000",
    "KSh 25,000 – 50,000",
    "KSh 50,000 – 100,000",
    "KSh 100,000+"

];


if (!in_array($budget, $allowed_budgets, true)) {

    exit("Invalid budget selected.");

}




try {

    $sql = "

        INSERT INTO contact_messages
        (
            full_name,
            email,
            phone,
            service,
            budget,
            message
        )

        VALUES
        (
            :full_name,
            :email,
            :phone,
            :service,
            :budget,
            :message
        )

    ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([

        ":full_name" => $full_name,

        ":email" => $email,

        ":phone" => $phone,

        ":service" => $service,

        ":budget" => $budget,

        ":message" => $message

    ]);




    echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Message Sent | Mutacore Visuals</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f6f7f2;
            color: #283F24;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }

        .success-box {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(40,63,36,0.14);
            max-width: 500px;
            width: 90%;
        }

        .success-icon {
            width: 70px;
            height: 70px;
            background: #FFBF00;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            font-size: 35px;
            font-weight: bold;
        }

        h1 {
            margin-bottom: 15px;
        }

        p {
            color: #687067;
            line-height: 1.6;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 13px 25px;
            background: #FFBF00;
            color: #283F24;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
        }

        a:hover {
            background: #467235;
            color: white;
        }
    </style>
</head>

<body>

    <div class='success-box'>

        <div class='success-icon'>
            ✓
        </div>

        <h1>Message Sent Successfully!</h1>

        <p>
            Thank you for contacting Mutacore Visuals.
            We have received your project request and
            will get back to you as soon as possible.
        </p>

        <a href='contactus.html'>
            Back to Contact Page
        </a>

    </div>

</body>
</html>
";

exit;


} catch (PDOException $e) {

    // Log the real error privately
    error_log("Contact form error: " . $e->getMessage());

    http_response_code(500);

    exit("Sorry, your message could not be submitted. Please try again.");

}

?>
```
