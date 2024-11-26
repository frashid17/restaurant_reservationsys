<?php
require_once '../config.php';

// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Customer Reservation</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: rgb(37, 42, 52);
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .reserve-container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            width: 90%;
            max-width: 800px;
        }
        h1, h2 {
            text-align: center;
            color: whitesmoke;
        }
        .btn {
            width: 100%;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: rgb(60, 60, 60);
        }
    </style>
</head>
<body>
    <?php
        $reservationStatus = $_GET['reservation'] ?? null;
        $message = '';
        if ($reservationStatus === 'success') {
            $message = "Reservation successful";
            $reservation_id = $_GET['reservation_id'] ?? null;
            echo '<a class="nav-link" href="../home/home.php#hero">' .
                '<h1>BISTRO BREEZE</h1>' .
                '<span class="sr-only"></span></a>';
            echo '<script>alert("Table Successfully Reserved. Click OK to view your reservation receipt."); 
                  window.location.href = "reservationReceipt.php?reservation_id=' . $reservation_id . '";</script>';
        }
        $head_count = $_GET['head_count'] ?? 1;
    ?>
    <div class="reserve-container">
        <a class="nav-link text-center" href="../home/home.php#hero">
            <h1>BISTRO BREEZE</h1>
        </a>
        <div class="row">
            <!-- Search Section -->
            <div class="col-md-6">
                <h2>Search for Time</h2>
                <form method="GET" action="availability.php">
                    <div class="form-group">
                        <label for="reservation_date">Select Date</label>
                        <input type="date" id="reservation_date" name="reservation_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="reservation_time">Available Reservation Times</label>
                        <select id="reservation_time" name="reservation_time" class="form-control" required>
                            <option value="" selected disabled>Select a Time</option>
                            <?php
                            for ($hour = 10; $hour <= 20; $hour++) {
                                $time = sprintf('%02d:00:00', $hour);
                                echo "<option value='$time'>$time</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <input type="hidden" id="head_count" name="head_count" value="1">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- Reservation Section -->
            <div class="col-md-6">
                <h2>Make Reservation</h2>
                <form method="POST" action="insertReservation.php">
                    <div class="form-group">
                        <label for="customer_name">Customer Name</label>
                        <input type="text" id="customer_name" name="customer_name" class="form-control" required>
                    </div>
                    <?php
                    $defaultReservationDate = $_GET['reservation_date'] ?? date("Y-m-d");
                    $defaultReservationTime = $_GET['reservation_time'] ?? "13:00:00";
                    ?>
                    <div class="form-group">
                        <label for="reservation_date">Reservation Date</label>
                        <input type="date" id="reservation_date" name="reservation_date"
                               value="<?= $defaultReservationDate ?>" class="form-control" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="reservation_time">Reservation Time</label>
                        <input type="time" id="reservation_time" name="reservation_time"
                               value="<?= $defaultReservationTime ?>" class="form-control" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="table_id_reserve">Available Tables</label>
                        <select id="table_id_reserve" name="table_id" class="form-control" required>
                            <option value="" selected disabled>Select a Table</option>
                            <?php
                            $table_id_list = $_GET['reserved_table_id'];
                            $head_count = $_GET['head_count'] ?? 1;
                            $reserved_table_ids = explode(',', $table_id_list);
                            $select_query_tables = "SELECT * FROM restaurant_tables WHERE capacity >= '$head_count'";
                            if (!empty($reserved_table_ids)) {
                                $reserved_table_ids_string = implode(',', $reserved_table_ids);
                                $select_query_tables .= " AND table_id NOT IN ($reserved_table_ids_string)";
                            }
                            $result_tables = mysqli_query($link, $select_query_tables);
                            $resultCheckTables = mysqli_num_rows($result_tables);
                            if ($resultCheckTables > 0) {
                                while ($row = mysqli_fetch_assoc($result_tables)) {
                                    echo '<option value="' . $row['table_id'] . '">For ' . $row['capacity'] . ' people. (Table Id: ' . $row['table_id'] . ')</option>';
                                }
                            } else {
                                echo '<option disabled>No tables available, please choose another time.</option>';
                                echo '<script>alert("No reservation tables found for the selected time. Please choose another time.");</script>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="special_request">Special Request</label>
                        <textarea id="special_request" name="special_request" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Make Reservation</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
