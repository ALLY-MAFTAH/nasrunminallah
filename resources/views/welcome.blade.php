<!DOCTYPE html>
<html lang="en">

<head>
    <title>Masjid Nasrun Minallah | Live duruus</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/images/LOGO.jpg" rel="shortcut icon" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/mixed_style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <style>
        .intro-inner {
            font-family: 'Times New Roman', Times, serif;
        }

    </style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="main" id="home">
        <div class="intro-bg"></div>
        <div class="intro-inner">
            <div class="intro-content">
                <div id="round"></div>
                <br>
                <div class="profile-img">
                    <img style="max-width: 100%;" src="{{ asset('assets/images/LOGO.jpg') }}" alt="">
                </div>
                <br>
                <h2><span style="color:rgb(66, 39, 5);font-weight:bolder" class="element"></span></h2>
                <h1 class="border-bottom mx-5" style="color:white;"></h1>
                @foreach ($broadcasts as $broadcast)
                    <h6 class="" style="color: rgb(7, 6, 62);"><b>{{$broadcast->title}}</b></h6>
                    <h4 class="" style="color: rgb(7, 56, 9);"><b>{{$broadcast->book}}</b></h4>
                    <p style="color: rgb(54, 24, 252);"> <b>{{$broadcast->teacher}}</b></p>
                    <h6 style="color:red">{{$broadcast->extra}}</h6>
                @endforeach
                <div style="padding-top: 20px;">
                    <audio controls autoplay>
                        <source src="http://stream.zeno.fm/0gpzrz1trfhvv">
                    </audio>
                </div>
                <br>
            </div>
        </div>
    </section>

    <!--====== Javascripts & Jquery ======-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/init-round.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
