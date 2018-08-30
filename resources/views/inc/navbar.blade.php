<nav class="navbar navbar-expand-md navbar-dark bg-dark custom-nav">
    <a class="navbar-brand" href="{{asset('/')}}">Basic Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="{{asset('/')}}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="{{asset('/about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{asset('/contact')}}">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('messages') ? 'active' : ''}}" href="{{asset('/messages')}}">Messages</a>
        </li>     
      </ul>
    </div>
</nav>
