
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
      <input type="text" name="name">

     <input type="email" name="email">
<input type="password" name="password" id="">
        <!-- Password -->
      <input type="text" name="password_confirmation">

        <!-- Confirm Password -->
    
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

          <input type="submit" value="sul">
        </div>
    </form>
