<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <style>
        .navbar-custom
        {
            background-color: rgb(24, 25, 52);
            height: 70px;
        }

        .text{
            font-size: 25px;
        }
    </style>

    <div class="row navbar-custom justify-content-sm-center align-items-center text">
        <div class="col-sm-1 gx-5">
            <a href="/">Home</a>
        </div>
        <div class="col-sm-1">
            <a href="/jobs">Jobs</a>
        </div>
        <div class="col-sm-1">
            <a href="/contact">Contact</a>
        </div>
        <div class="col-sm-1">
            <a href="/team">Team</a>
        </div>
    
    </div>


   <div style="margin-top: 20px;">
     {{ $slot }}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>