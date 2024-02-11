้้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compare</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <div class="container" style="margin-top: 7%">
        <b style="font-size: 24px">COMPARE SMARTPHONE</b>

        <div class="row col-12  mt-3 mb-5">
            <div class="col-6 ">

                <div class="card hov-primary border-0"
                    style="background-color: rgb(231, 231, 231) ;color:rgb(32, 32, 32); border-radius: 0;">
                    <div class="card-body ">
                        <h6 class="card-subtitle mb-2 text-body-secondary">COMPARE WITH</h6>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 " style="border-radius: 0;" type="search"
                                placeholder="Search" aria-label="Search">
                            <button class="btn " type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card hov-primary border-0"
                    style="background-color: rgb(231, 231, 231) ;color:rgb(32, 32, 32); border-radius: 0;">
                    <div class="card-body ">
                        <h6 class="card-subtitle mb-2 text-body-secondary">COMPARE WITH</h6>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 " style="border-radius: 0;" type="search"
                                placeholder="Search" aria-label="Search">
                            <button class="btn " type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>
