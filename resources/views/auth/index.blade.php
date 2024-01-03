<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Crawler</title>
    <link rel="shortcut icon" href="{{ asset('adm') }}/images/favicon.png" />
    <link rel="stylesheet" href="{{ asset('adm')}}/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-app">
    <style> 
        body{ 
            background-image:url(adm/images/bappeda1.jpg); 
            background-size:cover; 
            background-attachment: fixed; }             
    </style>
    <main class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card mx-auto text-center px-5 py-5 card-rounded shadow-lg bg-white time animate fadeDown">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="card-body">
                <h1>News Crawler</h1>
                <p>Silahkan Login Dengan Akun Google Yang Sudah Terdaftar</p>
                
                <a  href='{{ url('auth/redirect') }}' class="btn border border-primary "><img width="20px"
                        style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                    Login dengan Google</a>
            </div>
        </div>
    </main>

</body>

</html>

{{-- <div class="container mx-auto flex">
        <div class="card justify-center items-center">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="card-body text-center">
                <h2 class="card-title text-center">News Crawler</h2>
                <p class="bold">Silakan login dengan Akun Google yang anda punya</p>
                <div class="card-actions justify-end">
                    <a href='{{ url('auth/redirect') }}' class="btn border border-primary hover-cursor">
                        <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                        Login dengan Google</a>
                </div>
            </div>
        </div>
    </div> --}}
