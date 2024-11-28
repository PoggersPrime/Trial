<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <title>first</title>
    <style>
        .carousel-item {
            height: 100vh;
            object-fit: cover;
        }

        .heading {
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
            color: rgb(3, 48, 88);
        }

        .second {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
            margin-top: 20px;
            /* Adjust to move it up */
            margin-bottom: 20px;
            /* Adjust to move it down */
            margin-right: 60px;
        }

        .about {
            width: 100%;
            /* Adjust width of image container */
        }

        .about img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            align-items: center;
            margin-left: 60px;
        }

        .second h3 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .second h3 color {
            color: #e4003a;
        }

        .second p {
            color: rgb(107, 103, 103);
            text-align: justify;
            margin-bottom: 20px;
        }

        .second dl dt {
            font-weight: bold;
        }

        .second-content {
            width: 90%;
            /* Adjust width */
            text-align: justify;
            margin-left: 100px;
            padding: 25px;
        }

        .gradient-custom {
            background: radial-gradient(50% 123.47% at 50% 50%,
                    #00ff94 0%,
                    #720059 100%),
                linear-gradient(121.28deg, #669600 0%, #ff0000 100%),
                linear-gradient(360deg, #0029ff 0%, #8fff00 100%),
                radial-gradient(100% 164.72% at 100% 100%, #6100ff 0%, #00ff57 100%),
                radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #51d500 100%);
            background-blend-mode: screen, color-dodge, overlay, difference, normal;
        }

        .carousel-indicators {
            border-radius: 50%;
            width: 10px;
            height: 10px;
        }
    </style>
</head>