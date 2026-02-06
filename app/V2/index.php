<?php
$server_ip = $_SERVER['SERVER_ADDR'];
$time = date("d M Y, h:i A");
?>

<!DOCTYPE html>
<html>
<head>
    <title>StreamLine Corp - v2</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
        }
        .card {
            max-width: 650px;
            margin: 100px auto;
            padding: 45px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border-radius: 18px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.35);
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .feature {
            margin: 15px 0;
            padding: 10px;
            background: rgba(0,0,0,0.25);
            border-radius: 10px;
            font-size: 16px;
        }
        .glow {
            margin-top: 15px;
            display: inline-block;
            padding: 8px 18px;
            border-radius: 30px;
            background: #00ffcc;
            color: #000;
            font-weight: bold;
            box-shadow: 0 0 15px #00ffcc;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            opacity: 0.85;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Welcome to StreamLine 🚀</h1>
    <div class="glow">v2 – New Feature Enabled</div>

    <div class="feature">
        🔥 Zero-Downtime Deployment via Jenkins  
    </div>

    <div class="feature">
        🖥️ Served from EC2 Instance  
        <br><strong><?php echo $server_ip; ?></strong>
    </div>

    <div class="feature">
        ⚖️ Load Balanced using AWS ALB
    </div>

    <div class="footer">
        Auto-deployed at <?php echo $time; ?><br>
        Infrastructure managed using Terraform + Ansible
    </div>
</div>

</body>
</html>
