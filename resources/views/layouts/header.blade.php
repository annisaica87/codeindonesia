<nav class="pink accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"> Laravel Percobaan </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('/home')}}">Home</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('/loginpage')}}">Dashboard</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('/home')}}">Home</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('/loginpage')}}">Dashboard</a></li>
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>