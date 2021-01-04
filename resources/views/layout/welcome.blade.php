<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html, body {
            background-color: rgb(255, 255, 255);
            color: #000000;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            
        }

        

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>
    <body>

        <div class="jumbotron text-left">
            <h1>Where can i find...?</h1> 
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h4><p>Ask for help to find anything.</p></h4>
                    <h4><p>Help people to find what are they looking for.</p></h4>
                </div>
                <div class="col-sm-5">
                <h4><p>Join now in <b>Where can i find? </b></p></h4>
                <p> 
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/posts') }}" <button type="button" class="btn btn-primary btn-lg">Home</button></a>
                                @else
                                    <a href="{{ route('login') }}" <button type="button" class="btn btn-primary btn-lg">Login</button> </a>
                
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" <button type="button" class="btn btn-outline-info btn-lg">Register</button> </a>
                                    @endif
                                @endif
                            </div>
                        @endif           
                    </div>
                </p>
                </div>
            </div>
        </div>
    </body>
    
</html>
