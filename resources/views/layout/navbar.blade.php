<header class="admin-header">
  <a class="admin-header__logo" href="#">Admin Dashboard : {{ $user->display_name }}</a>

  <div class="admin-header__user">
    <img src="https://via.placeholder.com/40x40" alt="User Avatar">
    <span>Admin User</span>
    <a href="{{ route('index') }}">Log out</a>
  </div>
  
</header>