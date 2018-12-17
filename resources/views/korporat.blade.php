@extends('base')
@section('content')
    
    <section class="main-section">
        <html lang="en" >

        <head>
        <meta charset="UTF-8">
        <title>Selamat datang di PROSIBAD</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="assets/css/style.css">
            
        </head>
        <body>
        <!-- <p class="tip"></p> -->
        <br>
        <br>
            <div class="cont">
            <div class="form sign-in">
                <h2>Selamat datang di PROSIBAD</h2>
                <label>
                <span>E-mail</span>
                <input type="email" />
                </label>
                <label>
                <span>Password</span>
                <input type="password" />
                </label>
                <a href="http://10.0.0.2/utama"><button type="button" class="submit">Sign In</button></a>
            </div>
                
            <div class="sub-cont">
                <div class="img">         
                <div class="img__text m--up">
                    <h2>#SekilasPROSIBAD</h2>
                    <p>PROSIBAD mempermudah anda dalam melihat perkembangan BPBD</p>
                </div>
                    
                <div class="img__text m--in">
                    <h2>#SekilasPROSIBAD</h2>
                    <p>PROSIBAD dapat memberikan anda info penanggulangan bencana di sekitar anda</p>
                </div>
                    
                <div class="img__btn">
                    <span class="m--up">Masuk Sebagai Masyarakat</span>
                    <span class="m--in">Sign In</span>
                </div>       
                </div>
                
                <div class="form masyarakat">
                    <h2> PROSIBAD untuk kemajuan dan kesejahteraan masyarakat</h2>
                    <a href="http://10.0.0.2/dokumentasi"><button type="button" class="submit">Dokumentasi</button></a>
                    <a href="http://10.0.0.2/sosialisasi"><button type="button" class="submit">Sosialisasi</button></a>
                </div>
            </div>
            </div>
            
            <script  src="/assets/js/index.js"></script>
            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="/assets/js/custom.js"></script>
        </body>
        </html>
        
    </section>
    
@endsection