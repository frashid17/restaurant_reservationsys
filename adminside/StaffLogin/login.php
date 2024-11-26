<?php 
session_start();
if (isset($_SESSION['logged_account_id'])) {
    header("Location: ../panel/pos-panel.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bistro Breeze</title>
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #1C1427;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .wrapper {
            background: #2B2142;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        .wrapper h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .btn-custom {
            background-color: #6C5CE7;
            color: white;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #5A4FBF;
        }

        .form-control {
            background-color: #3C2F4F;
            border: none;
            color: white;
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #6C5CE7;
        }

        .invalid-feedback {
            color: #FF6B6B;
        }

        .text-center a {
            color: #6C5CE7;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Bistro Breeze</h2>
        <p class="text-center">Welcome back! Please login to your staff account.</p>

        <?php 
        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

        <form action="login_process.php" method="post">
            <div class="mb-3">
                <label for="account_id" class="form-label">Staff Account ID</label>
                <input type="number" id="account_id" name="account_id" placeholder="Enter Account ID" required 
                       class="form-control <?php echo (!empty($account_id_err)) ? 'is-invalid' : ''; ?>" 
                       value="<?php echo htmlspecialchars($account_id ?? ''); ?>">
                <div class="invalid-feedback"><?php echo $account_id_err ?? ''; ?></div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required 
                       class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <div class="invalid-feedback"><?php echo $password_err ?? ''; ?></div>
            </div>

            <div class="d-grid">
                <button type="submit" name="submit" value="Login" class="btn btn-custom">Login</button>
            </div>
        </form>

        <p class="text-center mt-3">
            <a href="../../customerSide/home/home.php"><i class="fas fa-arrow-left"></i> Back to Home</a>
        </p>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
