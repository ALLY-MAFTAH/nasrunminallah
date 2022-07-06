<!DOCTYPE html>
<html lang="en">

<head>
    <title>Masjid Nasrun Minallah | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/images/NEW LOGO.jpg" rel="shortcut icon" />

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/mixed_style.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
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

    <body style="background: #f6e0d0">
        <div class="intro-inner">
            <div class="intro-content">
                <div id="round"></div>
                <br>
                <div class="profile-img">
                    <img style="max-width: 100%;" src="{{ asset('assets/images/NEW LOGO.jpg') }}" alt="">
                </div>
<div class="pt-5">
    <h2>
        OFFICIAL WEBSITE
    </h2>
</div>
            </div>
        </div>

        <!--====== Javascripts & Jquery ======-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
        <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('js/plugin.js')}}"></script>
        <script src="{{asset('js/init-round.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script>
            $('form').submit(function() {
                $(this).find(':submit').attr('disabled', true);
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
            // refresh every 5 seconds
            // setInterval(function() {
            //         //     // alert("The last 25 entries in the feed have been loaded");
            //         $.get("refresh  ", function(data, status) {
            //             $("#info1").html(data);

            //         });
            // }, 60000);
        </script>
    </body>

</html>
