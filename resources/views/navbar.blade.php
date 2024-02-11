<nav class="navbar bg-white  border-bottom border-body fixed-top ">
    <div class="container-fluid">
        <div class="row col-12 align-items-center">
            <div class="col-2">
                <a href="{{ url('/') }}" class="navbar-brand" style="font-size: 24px">Sentimet Dashboard</a>
            </div>
            <div class="col-10">
                <a href="{{ url('/') }}" class="navbar-brand" style="color: rgb(158, 158, 158)" >Home</a>
                <a href="{{ url('/compare') }}" class="navbar-brand" style="color: rgb(158, 158, 158)"  >Compare</a>

            </div>

        </div>


        {{-- <form class="d-flex" role="search">
            <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn " type="submit">Search</button>
        </form> --}}
    </div>
    <!-- Navbar content -->
</nav>
