<!DOCTYPE html>
<html lang="en">

<head>
    <title>Radio | Masjid Nasrun Minallah</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/images/NEW LOGO.jpg') }}" rel="shortcut icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mixed_style.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                @include('components.fab')
                <div class="profile-img">
                    <img style="max-width: 100%;" src="{{ asset('assets/images/NEW LOGO.jpg') }}" alt="">
                </div>
                <img src="{{ asset('assets/images/online.png') }}" width="300px" alt="">
                <h2><span style="color:rgb(66, 39, 5);font-weight:bolder" class="element"></span></h2>
                <h1 class="border-bottom mx-5" style="color:white;"></h1>
                <br>
                <h5 class="to_refresh" style="color: rgb(242, 13, 32);"><b id="title">{{ $title }}</b>
                </h5>
                <h5 class="to_refresh" style="color: rgb(7, 56, 9);"><b id="book">{{ $book ?? '' }}</b>
                </h5>
                <p class="to_refresh" style="color: rgb(54, 24, 252);"><b id="teacher">{{ $teacher }}</b>
                </p>
                <h6 class="to_refresh" style="color:rgb(16, 5, 5)" id="extra">{{ $extra ?? '' }}</h6>

                <div style="padding-top: 20px; padding-bottom:10px">
                    <audio controls autoplay>
                        <source src="http://stream.zeno.fm/0gpzrz1trfhvv">
                    </audio>
                </div>
                @if ($settings->allow_questions == true)
                <div class="questions">
                    <div class="row pt-2 px-3">
                        <div class="col-9 text-start"><a style="color: black; font-size:15px">Sehemu ya
                                Maswali</a>
                        </div>
                        <div class="col-3 text-end">
                            <div class="dropdown">
                                <a class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i style="color: black;font-size:15px" class="fas fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#questionsModal">Maswali Yaliyoulizwa</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('add_question') }}" method="post">
                            @csrf
                            <div class="form-group pb-1">
                                <input class="form-control input-group" name="name" autocomplete="name"
                                    placeholder="Jina" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-group" name="qn" rows="3" id="qn" placeholder="Swali" required></textarea>
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
        <div class="modal fade text-left" id="questionsModal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Maswali Yaliyoulizwa ({{ $questions->count() }})</h5>
                        <button class="btn btn-outline-danger close" data-bs-dismiss="modal">
                            <span>X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            @foreach ($questions as $question)
                                <div style="color: rgb(6, 117, 17); font-weight:bold">{{ $question->name }}</div>
                                <div style="font-size: 14px">{{ $question->qn }}</div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Javascripts & Jquery ======-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
        <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('js/plugin.js') }}"></script>
        <script src="{{ asset('js/init-round.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            $('form').submit(function() {
                $(this).find(':submit').attr('disabled', true);
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-latest.js"></script>
        <script>
            $(document).ready(function() {
                $("#title").load("refresh-title");
                setInterval(function() {
                    $("#title").load("refresh-title");
                }, 5000);
            });
            $(document).ready(function() {
                $("#book").load("refresh-book");
                setInterval(function() {
                    $("#book").load("refresh-book");
                }, 5000);
            });
            $(document).ready(function() {
                $("#teacher").load("refresh-teacher");
                setInterval(function() {
                    $("#teacher").load("refresh-teacher");
                }, 5000);
            });
            $(document).ready(function() {
                $("#extra").load("refresh-extra");
                setInterval(function() {
                    $("#extra").load("refresh-extra");
                }, 5000);
            });

            console.log(@json($title))
            console.log(@json($status))
        </script>
    </body>

</html>
