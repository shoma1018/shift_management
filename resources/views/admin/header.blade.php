<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @yield('title')
        
        <link href = "{{ mix('css/app.css') }}" rel = "stylesheet">
        
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    
    <body>
      <header class="h-15 bg-gray-200">
        <div class="flex flex-wrap p-5 flex-col md:flex-row items-center">
          
          <nav class="md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href = "/admin/dashboard" class = "mr-5 hover:text-gray-900">Dashboard</a>
            <a href = "/admin/shift/post" class = "mr-5 hover:text-gray-900">シフト投稿</a>
            <a href = "/admin/accept" class = "mr-5 hover:text-gray-900">申請承認</a>
            <a href = "/admin/info" class = "mr-5 hover:text-gray-900">従業員情報</a>
          </nav>
          
          <div x-data="{ dropdown: false }" class="p-2">
            <button @click="dropdown = true" class="px-4 py-2 text-gray rounded-md">
              <div class = "mx-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
              </div>
            </button>
            <ul @click.away="dropdown = false" x-transition.opacity.duration.150ms x-show="dropdown" class="absolute w-32 border px-1 py-2 bg-gray-50 rounded-md">
              <li class="p-2"><a href = "/admin/setting" class = "text-sm hover:text-gray-900">管理者情報</a></li>
              <li class="p-2"><a href = "/admin//setting/password" class = "text-sm hover:text-gray-900">パスワード変更</a></li>
              <li class="p-2"><a href = "/admin/logout" class = "text-sm hover:text-gray-900">ログアウト</a></li>
            </ul>
        </div>
          
          
          
          
          
          
          
        </div>
      </header>
      <main>
        @yield('content')
      </main>
    </body>
</html>