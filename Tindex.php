<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Triposha LTD</title>
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
        padding: 0;
            }

        .display-1 {
            font-weight: 500;
            text-shadow: 2px 2px 2px #ff0000;
        }

        .button {
            display: inline-flex;
            height: 40px;
            width: 150px;
            border: 2px solid #ffffff;
            margin: 20px 20px 20px 20px;
            color: #ffffff;
            text-transform: uppercase;
            text-decoration: none;
            font-size: 0.8em;
            letter-spacing: 1.5px;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        #button-2 {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        #button-2 h5 {
            position: relative;
            transition: all 0.35s ease-Out;
            padding-top: 5px;
            padding-left: 16px;
        }

        #slide {
            width: 100%;
            height: 100%;
            left: -200px;
            background: #ffffff;
            position: absolute;
            transition: all 0.35s ease-Out;
            bottom: 0;
        }

        #button-2:hover #slide {
            left: 0;
        }

        #button-2:hover h5 {
            color: #000000;
        }

        .leftside,.rightside{
            margin-top: 40%;
        }

        .leftside .triposhalogo, .rightside .suposhalogo{
            width: 25%;
        }

        .welcometext{
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            /* z-index: 0; */
            margin-top: 5%;
        }

        .welcometext img {
        width: 75%;
        margin-top: 5%;
    }

    .welcometext h1, .welcometext h4 {
        margin: 0;
    }

    @media (max-width: 767px) {
        .welcometext {
            left: 0%;
            position: absolute;
            transform: none;
            margin-top: 1%; /* Adjust as needed */
        }

        .leftside,.rightside{
            margin-top: 90%;
        }

        .leftside .triposhalogo, .rightside .suposhalogo{
            width: 50%;
        }


        /* Add additional styling for mobile view if necessary */
    }


    .button a
    {
        text-decoration: none !important;
        color: white !important;
    }

    


    </style>


</head>




<body>

    <div class="welcometext text-center">
        <div class=""><img src="./assets/images/landing/sl.png" ></div>
        <div class="mt-2">
            <h1>Sri Lanka Thriposha Ltd</h1>
        </div>
        <div class="">
            <h4>Since 1973</h4>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 vh-100" style="background-image: url('./assets/images/landing/thriposhanew2.png'); background-size: cover;">


                <div class="leftside">
                    <div>
                        <a style="text-decoration: none" href="#">
                            <img src="./assets/images/landing/triposhalogo.png" class="triposhalogo mt-5  rounded mx-auto d-block" alt="...">
                            <div class="display-1 text-center text-light  ">Thriposha</div>
                        </a>
                    </div>

                    <div>
                        <div class="button mx-auto d-block" id="button-2">
                            <div id="slide"></div>
                            <a href="./Thriposha"><h5 >visit now</h5></a>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-md-6 vh-100" style="background-image: url('./assets/images/landing/suposhanew.png'); background-size: cover;">

                <div class="rightside">
                    <div>
                        <a style="text-decoration: none" href="#">
                            <img src="./assets/images/landing/suposhalogo.png" class="suposhalogo mt-5  rounded mx-auto d-block" alt="...">
                            <div class="display-1 text-center text-light ">Suposha</div>
                        </a>
                    </div>

                    <div>
                        <div class="button mx-auto d-block" id="button-2">
                            <div id="slide"></div>
                            <a href="./suposha"><h5 >visit now</h5></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbs16UABFfQKoxaLdN96/xxdvlah6v6oYFRhlT9pyCzI1C9xVdQZA2CqAFZcLJ/" crossorigin="anonymous"></script>
</body>

</html>
