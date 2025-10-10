<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | YourBrand</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-orange-900 via-black-900 to-green-900 min-h-screen flex items-center justify-center">

  <!-- Login Card -->
  <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-2xl w-full max-w-md p-8 text-white">
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold mb-2">Welcome Back 👋</h2>
      <p class="text-gray-300 text-sm">Please login to continue</p>
    </div>

    <form class="space-y-6" action="#" method="POST">
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-200 mb-1">Email</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
          placeholder="you@example.com" />
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-200 mb-1">Password</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
          placeholder="••••••••" />
      </div>

      <!-- Remember Me + Forgot Password -->
      <div class="flex items-center justify-between text-sm text-gray-200">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="accent-blue-500" />
          <span>Remember me</span>
        </label>
        <a href="/dashboard" class="hover:underline text-blue-300">Forgot password?</a>
      </div>

      <!-- Login Button -->
      <button type="submit"
        class="w-full bg-blue-500 hover:bg-blue-600 transition-all py-3 rounded-lg font-semibold shadow-lg">
        Login
      </button>
    </form>

    <!-- Divider -->
    <div class="flex items-center my-6">
      <hr class="flex-grow border-gray-500/30" />
      <span class="px-3 text-gray-300 text-sm">or</span>
      <hr class="flex-grow border-gray-500/30" />
    </div>
    <!-- Register Link -->
    <div class="text-center mt-8">
      <p class="text-gray-300 text-sm">
        Don’t have an account?
        <a href="/register" class="text-blue-300 hover:underline font-medium">Register</a>
      </p>
    </div>
  </div>

</body>
</html>
