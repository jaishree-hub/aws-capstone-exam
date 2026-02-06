<?php
$server_ip = $_SERVER['SERVER_ADDR'];
$time = date("d M Y, h:i A");
?>

<!DOCTYPE html>
<html>
<head>
    <title>StreamLine Corp - v1</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(120deg, #fdfbfb, #ebedee);
            color: #333;
        }
        .card {
            max-width: 600px;
            margin: 120px auto;
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            text-align: center;
        }
        h1 {
            color: #2c3e50;
        }
        .badge {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 14px;
            background: #3498db;
            color: white;
            border-radius: 20px;
            font-size: 14px;
        }
        .footer {
            margin-top: 25px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Welcome to StreamLine</h1>
    <div class="badge">Version 1 – Stable Release</div>

    <p><strong>Server IP:</strong> <?php echo $server_ip; ?></p>

    <div class="footer">
        Deployed via CI/CD Pipeline<br>
        <?php echo $time; ?>
    </div>
</div>

</body>
</html>
