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
    <div class="intro-inner py-0" style="top:0; background: #f6e0d0;">
        <div class="intro-content" style="top: 0">
            <div id="round"></div>
            <br>
            <div class="profile-img">
                <img style="max-width: 100%;" src="{{ asset('assets/images/LOGO.jpg') }}" alt="">
            </div>
            <img src="{{ asset('assets/images/online.png') }}" width="300px" alt="">
            <h2><span style="color:rgb(66, 39, 5);font-weight:bolder" class="element"></span></h2>
            <h1 class="border-bottom mx-5" style="color:white;"></h1>
            @if ($broadcast->status == true)
                <h6 class="" style="color: rgb(7, 6, 62);"><b>{{ $broadcast->title }}</b></h6>
                <h4 class="" style="color: rgb(7, 56, 9);"><b>{{ $broadcast->book }}</b></h4>
                <p style="color: rgb(54, 24, 252);"> <b>{{ $broadcast->teacher }}</b></p>
                <h6 style="color:red">{{ $broadcast->extra }}</h6>
            @else
                <br>
                <h3 class="text-danger"><b>HATUPO LIVE MUDA HUU</b></h3>
                <br>
                <p>Endelea Kusikiliza Radio</p>
            @endif
            <div style="padding-top: 20px; padding-bottom:10px">
                <audio controls autoplay>
                    <source src="http://stream.zeno.fm/0gpzrz1trfhvv">
                </audio>
            </div>
            @if ($broadcast->status == true)
                <div class="container questions">
                    <a style="color: black; font-size:13px"><i class="fas fa-edit"></i> Andika Hapa Kama Una
                        Swali</a>
                    <div class="card-body">
                        <form action="{{ route('add_question') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input class="form-control input-group" name="name" autocomplete="name" placeholder="Jina" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="qn" rows="3" id="qn" placeholder="Swali" required></textarea>
                            </div>
                            <div class="form-group py-2">
                                <button class="btn btn-sm btn-outline-success" type="submit">Tuma</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!--====== Javascripts & Jquery ======-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/init-round.js"></script>
    <script src="js/main.js"></script>
    <script>
        $('form').submit(function() {
            $(this).find(':submit').attr('disabled', true);
        });
    </script>
</body>

</html>
