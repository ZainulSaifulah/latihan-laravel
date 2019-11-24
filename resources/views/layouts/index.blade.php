<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
        <script src="{{url('js/bootstrap.bundle.js')}}"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('products')}}">Data Barang <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('products/add')}}">Input Jual <span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>

        <div class="container">
            @yield('content')       
        </div>     
    </body>
</html>