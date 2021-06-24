<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <title>@yield('title')</title>

    <!-- Icon Web -->
    <link rel="icon" href="/img/commjuction_icoweb.ico" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('res/css/custom.css')}}" />

    <link rel="stylesheet" href="{{asset('res/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('res/css/atlantis.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('css')

</head>

<body>

    <nav class="navbar" style="background-color:white;">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://geniebook.com/login">Back to Geniebook</a>
                </li>

            </ul>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">My Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Wishlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="main-header-second">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="logo-header2" src="https://storage.googleapis.com/geniebook/images/bubblestore/logo/bubble_store_logo.png"
                        alt="" title="Bubble Store">
                </div>
                <div class="col-md-6 center-updown">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">

                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                         <button type="button" class="btn btn-outline-secondary">Action</button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>




        </div>
    </section>


    @yield('content')


    <!-- Jquery Files   -->
    <script src="{{asset('res/js/jquery.3.2.1.min.js')}}"></script>

    <!-- JS Plugin  -->
    <script src="{{asset('res/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('res/js/atlantis.min.js')}}"></script>
    <script src="{{asset('res/js/app-js.js')}}"></script>

    <!-- dataTables -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>


    @yield('script')
</body>

</html>
