<div class="global-navbar">
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/logo.jpg') }}" class="w-100" alt="Logo" />
            </div>
            <div class="col-md-8">
                <h5>Advertise Here</h5>
            </div>
        </div>
    </div> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Volunteer Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="{{url('/profile')}}">Profile
                        <span class="visually-hidden">(current)</span>
                    </a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="#">Chat</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="#">Schedules</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Resources</a>
                    </li>

                    <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Resources</a>
                    </li> -->

                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/app')}}">Application</a>
                    </li>
                
                     
                </ul>

                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

            @if(Auth::check())
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif
            
        </div>
    </nav>

    <br>
    <!-- <h4>Blog Categories</h4> -->

    <!-- Blog nav bar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
    
            <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">

                @php
                    $categories = App\Models\Category::where('navbar_status', '0')->where('status', '0')->get();
                @endphp

                @foreach ($categories as $cateitem)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('blog/'.$cateitem->slug) }}">{{ $cateitem->name }}</a>
                </li>
                @endforeach


            </ul>
            </div>
        </div>
    </nav> -->

</div>