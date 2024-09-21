<?php include '../inc/dashHeader.php'; ?>

<?php
// Include config file
require_once "../config.php";

// Initialize variables
$account_id = $email = $register_date = $phone_number = $password = "";
$account_id_err = $email_err = $register_date_err = $phone_number_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate account_id
    if (empty(trim($_POST["account_id"]))) {
        $account_id_err = "Please enter an account ID.";
    } else {
        $account_id = trim($_POST["account_id"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate register_date
    if (empty(trim($_POST["register_date"]))) {
        $register_date_err = "Please enter a registration date.";
    } else {
        $register_date = trim($_POST["register_date"]);
    }

    // Validate phone_number
    if (empty(trim($_POST["phone_number"]))) {
        $phone_number_err = "Please enter a phone number.";
    } else {
        $phone_number = trim($_POST["phone_number"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } else {
        // Hash the password
        $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
    }

    // Check input errors before inserting in database
    if (empty($account_id_err) && empty($email_err) && empty($register_date_err) && empty($phone_number_err) && empty($password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO accounts (account_id, email, register_date, phone_number, password) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "issss", $param_account_id, $param_email, $param_register_date, $param_phone_number, $param_password);

            // Set parameters
            $param_account_id = $account_id;
            $param_email = $email;
            $param_register_date = $register_date;
            $param_phone_number = $phone_number;
            $param_password = $password; // This is the hashed password

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to success page or login page
                header("Location: success_page.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<head>
    <meta charset="UTF-8">
    <title>Create New Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper { width: 1300px; padding-left: 200px; padding-top: 80px; }
    </style>
</head>

<div class="wrapper">
    <h1>Bistro Breeze Dining & Bar</h1>
    <h3>Create New Account</h3>
    <p>Please fill in Account Information Properly</p>

    <form method="POST" action="create_staff_account.php" class="ht-600 w-50">

        <div class="form-group">
            <label for="account_id" class="form-label">Account ID:</label>
            <input min=1 type="number" name="account_id" placeholder="99" class="form-control <?php echo !empty($account_id_err) ? 'is-invalid' : ''; ?>" id="account_id" required value="<?php echo $account_id; ?>"><br>
            <div id="validationServerFeedback" class="invalid-feedback">
                <?php echo $account_id_err; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email :</label>
            <input type="text" name="email" placeholder="johnny12@dining.bar.com" class="form-control <?php echo !empty($email_err) ? 'is-invalid' : ''; ?>" id="email" required value="<?php echo $email; ?>"><br>
            <div id="validationServerFeedback" class="invalid-feedback">
                <?php echo $email_err; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="register_date">Register Date :</label>
            <input type="date" name="register_date" id="register_date" required class="form-control <?php echo !empty($register_date_err) ? 'is-invalid' : ''; ?>" value="<?php echo $register_date; ?>"><br>
            <div id="validationServerFeedback" class="invalid-feedback">
                <?php echo $register_date_err; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="phone_number" class="form-label">Phone Number:</label>
            <input type="text" name="phone_number" placeholder="+60101231234" class="form-control <?php echo !empty($phone_number_err) ? 'is-invalid' : ''; ?>" id="phone_number" required value="<?php echo $phone_number; ?>"><br>
            <div id="validationServerFeedback" class="invalid-feedback">
                <?php echo $phone_number_err; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="johnny1234@" id="password" required class="form-control <?php echo !empty($password_err) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>"><br>
            <div id="validationServerFeedback" class="invalid-feedback">
                <?php echo $password_err; ?>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-dark" value="Create Account">
        </div>
    </form>
</div>

<?php include '../inc/dashFooter.php'; ?>
