<nav>
    <ul class="d-flex flex-row">
      <li><a href="/">Home</a></li>
      <li><a href="{{ route('recipe.create') }}">Recipe</a></li>
      <li class=""><a href="{{ route('recipe.index') }}">Blog</a></li>
    </ul>

    @auth

    

    <ul class="d-flex flex-row">
    
      <li><a href="#">{{ Auth::user()->name }}</a></li>
      <li><a href="#" id="btn">Logout</a>
      <form action="{{ route('logout')}}"  method="POST" id="form-logout"  >
        @csrf
      </form>
      </li>
    </ul>
    @endauth
    

    @guest
    <ul class="d-flex flex-row">
      <li><a href="{{route('login')}}">Login</a></li>
      <li><a href="{{route('register')}}">Signin</a></li>
    </ul>
    @endguest
  </nav>