<!-- Ye main Layout h page yehi run hota h browser pe-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .footer{
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: skyblue;
            margin: 0;
            padding: 10px;
        }
        .main{
            margin-top: 100px;
            text-align: center;
        }
        h1{
            color: green;
        }
    </style>
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
            </li>
        </ul>
    </div>
    <div>
        @section('main')
        @show
    </div>
    <div class="footer">
        <p>Footer</p>
    </div>
</body>
</html>