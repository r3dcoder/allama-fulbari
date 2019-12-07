<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">কিতাব</a>

  <div class="dropdown">
    <button class="dropbtn">বয়ান  
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">তাবলীগ </a>
      <a href="#">তা‘লিম</a>
      <a href="#">তাযকিয়া</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">প্রবন্ধ   
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">আকাইদ </a>
      <a href="#">সুন্নতী আমল</a>
      <a href="#">লেনদেন</a>
      <a href="#">আকাইদ </a>
      <a href="#">সুন্নতী আমল</a>
      <a href="#">লেনদেন</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">মালফুযাত   
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">আকাইদ </a>
      <a href="#">সুন্নতী আমল</a>
      <a href="#">লেনদেন</a>
      <a href="#">আকাইদ </a>
      <a href="#">সুন্নতী আমল</a>
      <a href="#">লেনদেন</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">মাসাইল   
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">আকাইদ </a>
      <a href="#">সুন্নতী আমল</a>
      <a href="#">লেনদেন</a>
      <a href="#">আকাইদ </a>
      <a href="#">সুন্নতী আমল</a>
      <a href="#">লেনদেন</a>
    </div>
  </div>
   <div class="dropdown">
    <button class="dropbtn">জীবনী   
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">আকাইদ </a>
      <a href="#">সুন্নতী আমল</a>
      <a href="#">লেনদেন</a>
      <a href="#">আকাইদ </a>
      <a href="#">সুন্নতী আমল</a>
      <a href="#">লেনদেন</a>
    </div>
  </div>

  @if(Auth::user())
      <a href="{{ route('newPost') }}" > New Post</a>    
  @endif

  @guest
     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
  @if (Route::has('register'))
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      
    @endif
  @else

  <div class="dropdown">
    <button class="dropbtn">{{ Auth::user()->name }}    
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
            </div>
  </div>

      
  @endguest




    <div class="search-container">
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

</div>