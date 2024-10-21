<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Triposha LTD</title>
    <link rel="shortcut icon" href="./assets/images/landing/fav.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {

            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: url('./assets/images/landing/thriposha-04.png') no-repeat center center fixed;
            background-size: cover;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }
        .box {
            position: relative;
            width: 300px;
            margin: 20px;
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .box img {
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
        .box h2 {
            font-size: 32px;
            margin: 20px 0;

        }
        .btn {
            background-color: #ff9900;
            border: none;
            color: white;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 10px 0;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 900px !important;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <img src="./assets/images/landing/triposhalogo.png" alt="Thriposha Logo">
            <h2>Thriposha</h2>
            <!-- <p>Some text about Thriposha</p> -->
            <a href="./Thriposha/index.php" class="btn">Visit Us</a>
        </div>
        <div class="box">
            <img src="./assets/images/landing/suposhalogo.png" alt="Suposha Logo">
            <h2>Suposha</h2>
            <!-- <p>Some text about Suposha</p> -->
            <a href="./suposha/index.php" class="btn">Visit Us</a>
        </div>
    </div>
</body>
</html>
