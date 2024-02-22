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
            background-color: #F5F5F5;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <div class="container" style="margin-top: 7%">
        <b style="font-size: 24px">COMPARE SMARTPHONE</b>

        <div class="row col-12  mt-3 mb-5">
            <div class="col-6 "
                style="background-color: #ffffff;border-left: 1px solid #d3d3d3; border-right: 1px solid #d3d3d3;">

                <div class="card hov-primary mt-3 mb-3 border-0"
                    style="background-color: rgb(231, 231, 231) ;color:rgb(32, 32, 32); border-radius: 0;">
                    <div class="card-body ">
                        <form class="clearfix" action="" method="get" _lpchecked="1">
                            <strong class="cmp-with floatLeftDisplay movecmpwith">Compare with</strong><br>
                            <input type="text" id="sSearch1" class="st-input-cmp float-left" name="sSearch1"
                                value="" autocomplete="off" placeholder="Search">

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6" style="background-color: #ffffff; border-right: 1px solid #d3d3d3;">
                <div class="card hov-primary mt-3 mb-3 border-0"
                    style="background-color: rgb(231, 231, 231) ;color:rgb(32, 32, 32); border-radius: 0;">
                    <div class="card-body ">
                        <form class="clearfix" action="" method="get" _lpchecked="1">
                            <strong class="cmp-with floatLeftDisplay movecmpwith">Compare with</strong><br>
                            <input type="text" id="sSearch2" class="st-input-cmp float-left" name="sSearch2"
                                value="" autocomplete="off" placeholder="Search">

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
