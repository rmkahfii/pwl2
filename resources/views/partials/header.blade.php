<div class="flex min-h-screen">

  <!-- SIDEBAR -->
  <div class="w-64 bg-gray-800 text-white">

    <div class="flex items-center justify-center h-16 border-b border-gray-700">
      <img src="img/man.png" class="size-9">
      <span class="ml-2 font-bold"></span>
    </div>

        <div class="p-4 space-y-2">

          <a href="/" class="block px-4 py-2 rounded bg-gray-900">
            Dashboard
          </a>

          <a href="/list-data" class="block px-4 py-2 rounded hover:bg-gray-700">
            List Data
          </a>

          <a href="/artikel" class="block px-4 py-2 rounded hover:bg-gray-700">
            Activity
          </a>

          <a href="/contact" class="block px-4 py-2 rounded hover:bg-gray-700">
            Log Out
          </a>
          <a href="/activity" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
            Activity
          </a>


        </div>

  </div>

<!-- CONTENT -->
  <div class="flex-1 bg-gray-100">

    <header class="bg-white shadow p-4 flex justify-between items-center">

        <h1 class="text-xl font-bold">Dashboard</h1>

          <div class="relative" x-data="{ open:false }">

            <button @click="open=!open">
              <img class="size-8 rounded-full"
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e">
            </button>

                <div x-show="open"
                @click.outside="open=false"
                  class="absolute right-0 mt-2 w-40 bg-white shadow rounded">

                  <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign Out</a>

                </div>

          </div>

    </header>

     <main class="p-6">
      <!-- isi halaman -->
      </main>

  </div>

</div>