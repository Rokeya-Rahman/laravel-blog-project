<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">Start Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('category-blog', ['id'=>$category->id , 'name'=>$category->category_name]) }}">{{ $category->category_name }}</a>
                    </li>
                @endforeach

                @if(Session::get('visitorId'))
                    <li class="nav-item dropdown"><a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="">{{ Session::get('visitorName') }}</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item" onclick="
                                event.preventDefault();
                                document.getElementById('visitorLogoutForm').submit();
                            ">Logout</a></li>
                        </ul>

                        <form id="visitorLogoutForm" action="{{ route('visitor-logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link text-white btn-primary ml-4 mr-2 px-3" href="{{ route('visitor-login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link text-white btn-success" href="{{ route('sign-up') }}">Sign Up</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav>