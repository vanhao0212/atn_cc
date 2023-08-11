<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="password" name="current_password" placeholder="Current password">
    <input type="password" name="new_password" placeholder="New password">
    <input type="password" name="new_password_confirmation" placeholder="Confirm new password">
    <button type="submit">Change password</button>
</form>
