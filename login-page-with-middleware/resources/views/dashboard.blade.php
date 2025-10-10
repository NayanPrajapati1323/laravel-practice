<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard | YourBrand</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 min-h-screen text-white">

  <!-- Navbar -->
  <nav class="bg-white/10 backdrop-blur-md border-b border-white/20 py-4 px-6 flex justify-between items-center shadow-lg">
    <h1 class="text-2xl font-bold">YourBrand Dashboard</h1>
    <div class="flex items-center space-x-4">
      <span class="text-gray-200">Welcome, <b>{{ Auth::user()->name ?? 'Admin' }}</b></span>
      <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg text-sm font-semibold transition">Logout</button>
      </form>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto px-6 py-10">
    <!-- Stats Card -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
      <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-2xl text-center shadow-lg">
        <h3 class="text-lg font-medium text-gray-300 mb-2">Total Registered Users</h3>
        <p class="text-4xl font-bold text-white">{{ $users->count() }}</p>
      </div>
      <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-2xl text-center shadow-lg">
        <h3 class="text-lg font-medium text-gray-300 mb-2">Latest Registration</h3>
        <p class="text-xl font-semibold text-white">
          {{ optional($users->last())->created_at ? $users->last()->created_at->format('M d, Y h:i A') : '—' }}
        </p>
      </div>
      <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-2xl text-center shadow-lg">
        <h3 class="text-lg font-medium text-gray-300 mb-2">Last Update</h3>
        <p class="text-xl font-semibold text-white">
          {{ optional($users->last())->updated_at ? $users->last()->updated_at->format('M d, Y h:i A') : '—' }}
        </p>
      </div>
    </div>

    <!-- Users Table -->
    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-xl overflow-hidden">
      <div class="p-6 border-b border-white/20 flex justify-between items-center">
        <h2 class="text-xl font-semibold">Registered Users</h2>
        <p class="text-gray-300 text-sm">Updated {{ now()->format('M d, Y h:i A') }}</p>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full text-left text-white">
          <thead class="bg-white/20 text-gray-100 uppercase text-sm">
            <tr>
              <th class="py-3 px-6">#</th>
              <th class="py-3 px-6">Name</th>
              <th class="py-3 px-6">Email</th>
              <th class="py-3 px-6">Registered At</th>
              <th class="py-3 px-6">Last Updated</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/10">
            @forelse ($users as $index => $user)
            <tr class="hover:bg-white/10 transition">
              <td class="py-3 px-6">{{ $index + 1 }}</td>
              <td class="py-3 px-6">{{ $user->name }}</td>
              <td class="py-3 px-6">{{ $user->email }}</td>
              <td class="py-3 px-6">{{ $user->created_at->format('M d, Y h:i A') }}</td>
              <td class="py-3 px-6">{{ $user->updated_at->format('M d, Y h:i A') }}</td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center py-6 text-gray-300">No registered users yet.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
