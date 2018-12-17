<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <link rel="canonical" href="">

    <title>PROSIBAD</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Main Styles CSS -->
    <link href="/assets/css/main.css" rel="stylesheet"> {{-- ini cara memanggil css dari folder assets -> css --}}

    

</head>

<body>

<div id="wrapper">
    <aside id="sideBar">
        <ul class="main-nav">
            <!-- Your Logo Or Site Name -->
            <li class="nav-brand">
                <h2><a href="http://10.0.0.2/utama">P R O S I B A D</a></h2>
            </li>
            <li>
                <a href="http://10.0.0.2/isian/create">Buat Laporan</a>
            </li>
            <li>
                <a href="http://10.0.0.2/isian">Daftar Laporan</a>
            </li>
            <!-- <li>
            <a href="https://twitter.com/prayudha_bn">- prayudhabn</a>
            </li> -->
        </ul>
    </aside>

    @yield('content') {{-- Semua file konten kita akan ada di bagian ini --}}


</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- Custom JavaScript -->
<script src="/assets/js/custom.js"></script> {{-- ini cara memanggil js dari folder assets -> js --}}
</body>

</html>