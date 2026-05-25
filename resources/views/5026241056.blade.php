<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap"
        rel="stylesheet">

    <style>
        .headline {
            font-family: "Google Sans", sans-serif;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;

        }

        .subheadline {
            font-family: "Google Sans", sans-serif;
            text-align: center;
            margin-bottom: 50px;
        }

        .titlecard {
            font-family: "Google Sans", sans-serif;
            font-weight: 700;
            text-align: center;
            margin-top: 10px;

        }

        .subtext {
            font-family: "Google Sans", sans-serif;
            text-align: center;
            margin-bottom: 45px;
            color: rgb(114, 114, 116);
        }

        .text-first {
            font-family: "Google Sans", sans-serif;
            font-size: medium;
            margin-top: 45px;
            color: rgb(74, 74, 75);
        }

        .text {
            font-family: "Google Sans", sans-serif;
            font-size: medium;
            margin-top: 10px;
            color: rgb(74, 74, 75);

        }
    </style>

</head>

<body>
    <!--REFERENSI: SPOTIFY WEBSITE-->

    <div class="container">
        <h2 class="headline">SELECT A PLAN</h2>
        <p class="subheadline">There's a package to suit everyone. Come join us.</p>

        <div class="row justify-content-center">
            <div class="col-8">

                <div class="card-deck">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title titlecard">INDIVIDUAL</h4>
                            <p class="card-text subtext">$9.99/Month</p>
                            <button class="btn btn-secondary" disabled>YOUR PLAN</button>
                            <p class="text-first">Listen to music <strong>ad-free</strong></p>
                            <p class="text"><strong>Play anywhere,</strong> even offline</p>
                            <p class="text"><strong>On-demand</strong> playback</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title titlecard">FAMILY</h4>
                            <p class="card-text subtext">$14.99/Month</p>
                            <button class="btn btn-danger">UPGRADE</button>
                            <p class="text-first">Listen to music <strong>ad-free</strong></p>
                            <p class="text"><strong>Play anywhere,</strong> even offline</p>
                            <p class="text"><strong>On-demand</strong> playback</p>
                            <p class="text">For families residing on the same address</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title titlecard">STUDENT</h4>
                            <p class="card-text subtext">$4.99/Month</p>
                            <button class="btn btn-danger">UPGRADE</button>
                            <p class="text-first"><strong>Ad-free </strong>music, listen offline, <strong>play any song
                                </strong>on demand</p>
                            <p class="text">Hulu (ad-supported)</p>
                            <p class="text"><strong>SHOWTIME</strong></p>
                            <p class="text"><strong>50% discount</strong> for eligible student in collage or university
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

</body>

</html>
