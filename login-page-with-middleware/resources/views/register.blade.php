<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | YourBrand</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-orange-900 via-black-900 to-green-900 min-h-screen flex items-center justify-center">

  <!-- Register Card -->
  <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-2xl w-full max-w-md p-8 text-white">
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold mb-2">Create an Account ✨</h2>
      <p class="text-gray-300 text-sm">Join us and start your journey</p>
    </div>

    <form class="space-y-6" action="/register" method="POST">
      @csrf

      <!-- Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-200 mb-1">Full Name</label>
        <input type="text" id="name" name="name" required
          class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400"
          placeholder="John Doe" />
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-200 mb-1">Email</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400"
          placeholder="you@example.com" />
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-200 mb-1">Password</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400"
          placeholder="••••••••" />
      </div>
      <!-- Register Button -->
      <button type="submit"
        class="w-full bg-purple-500 hover:bg-purple-600 transition-all py-3 rounded-lg font-semibold shadow-lg">
        Register
      </button>
    </form>

    <!-- Divider -->
    <div class="flex items-center my-6">
      <hr class="flex-grow border-gray-500/30" />
      <span class="px-3 text-gray-300 text-sm">or</span>
      <hr class="flex-grow border-gray-500/30" />
    </div>

    <!-- Login Link -->
    <div class="text-center mt-8">
      <p class="text-gray-300 text-sm">
        Already have an account?
        <a href="/login" class="text-blue-300 hover:underline font-medium">Login</a>
      </p>
    </div>
  </div>

</body>
</html>
