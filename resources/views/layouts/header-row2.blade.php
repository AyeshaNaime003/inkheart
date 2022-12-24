<header>
    <!-- row 2: menu bar for categories -->
    <div class="container-fluid row2 p-0 m-0">
        <!-- drop down for small screen -->
        <div class="dropdown d-sm-none w-100 bg-peach-pink">
            <button class="btn dropdown-toggle w-100 border-0" type="button" id="triggerId" data-bs-toggle="dropdown">Dropdown</button>
            <div class="dropdown-menu w-100 bg-peach-pink">
                <a class="dropdown-item" href="{{url('/')}}/{{"educative"}}">Educative</a>
                <a class="dropdown-item" href="{{url('/')}}/{{"urdu"}}">Urdu</a>
                <a class="dropdown-item" href="{{url('/')}}/{{"islamic"}}">Islamic</a>
                <a class="dropdown-item" href="{{url('/')}}/{{"leisure"}}">Leisure</a>
                <a class="dropdown-item" href="{{url('/')}}/{{"bestselling"}}">Best Sellers</a>
                <a class="dropdown-item"href="{{url('/')}}/{{"recent"}}">Recent in stock</a>
            </div>
        </div>
        <!-- menu bar for large screens -->
        <nav class="navbar navbar-expand-sm d-none d-sm-block bg-peach-pink">
            <div class="container-fluid p-0 d-flex justify-content-center">
                <ul class="navbar-nav">
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="{{url('/')}}/{{"educative"}}"><h6>Educative</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active"href="{{url('/')}}/{{"urdu"}}"><h6>Urdu</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="{{url('/')}}/{{"islamic"}}"><h6>Islamic</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active"href="{{url('/')}}/{{"leisure"}}"><h6>Leisure</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="{{url('/')}}/{{"bestselling"}}"><h6>Best Sellers</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="{{url('/')}}/{{"recent"}}"><h6>Recent in stock</h6></a>
                  </li>
                </ul>
            </div>
          </nav>
    </div>
</header>
