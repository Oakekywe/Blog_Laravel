 <!-- navbar -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Logo</a>
        <div class="d-flex">
          <a href="/#blogs" class="nav-link">Blogs</a>

          @guest
          <a href="/register" class="nav-link">Register</a>
          <a href="/login" class="nav-link">Login</a>
          @else

            @can('admin')
            <a href="/admin/blogs" class="nav-link">Dashboard</a>              
            @endcan
          <img class="rounded-circle" src="{{auth()->user()->avatar}}" height="50" width="50" alt="">
          <a href="" class="nav-link">{{auth()->user()->name}}</a>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link btn btn-link">Logout</button>
          </form>
          @endguest

          
          <a href="#subscribe" class="nav-link">Subscribe</a>
        </div>
      </div>
    </nav>