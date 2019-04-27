<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="#">Todo List</a>
      </li>
      <li class="nav-item {{ Request::is('/') ? 'active' : '' }} ">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item {{ Request::is('todo/create') ? 'active' : '' }} ">
        <a class="nav-link" href="todo/create">Create Todo</a>
      </li>
     
    </ul>
  </nav>