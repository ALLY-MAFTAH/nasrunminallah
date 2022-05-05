<!DOCTYPE html>
<html lang="en">

<head>
    <title>Masjid Nasrun Minallah | Live duruus</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/images/nasrunminallah_logo.png') }}" rel="shortcut icon" />
    {{-- <link rel="stylesheet" href="css/app.css" /> --}}
    <link rel="stylesheet" href="css/mixed_style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <style>
        .intro-inner{
    font-family:'Times New Roman', Times, serif;
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
                    <img style="max-width: 100%;" src="{{ asset('assets/images/nasrunminallah_logo.png') }}" alt="">
                </div>
                <br>
                <h2><span style="color:white;font-weight:bolder" class="element"></span></h2>

                <h1 class="border-bottom mx-5" style="color:white;"></h1>
                <br>
                <h4 class="ff" style="color: rgb(7, 85, 11);"><b>Makhawaarij</b></h4>
                <p style="color: rgb(252, 24, 214);"> <b>Shaykh Abuu Ayman
                        Al-Shiraaziy</b></p>
                <h6 style="color:red">حفظه الله تعالى</h6>
                {{-- <h4 style="color: rgb(233, 50, 18);">Dawrah Itaendelea Baada ya Alfajr In Shaa Allah.</h4> --}}
                <div style="padding-top: 20px;">
                    <audio controls autoplay>
                        <source src="http://stream.zeno.fm/0gpzrz1trfhvv">
                        {{-- <source src="http://173.255.234.155:8020/stream"> --}}
                    </audio>
                </div>
                <br>
            </div>
        </div>
    </section>

    <!--====== Javascripts & Jquery ======-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
    <script src="{{ asset('js/jquery-2.1.4.min.js') }} "></script>
    <script src="{{ asset('js/plugin.js') }} "></script>
    <script src="{{ asset('js/init-round.js') }} "></script>
    <script src="{{ asset('js/main.js') }} "></script>
</body>

</html>
