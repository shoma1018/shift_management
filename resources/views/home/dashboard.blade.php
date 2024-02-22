<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>トップページ</title>
        
        <link href = "{{ mix('css/app.css') }}" rel = "stylesheet">
    </head>
    <body>
        <section class="text-gray-600 body-font">
            <h1 class="text-2xl text-center mt-16">シフト管理システム</h1>
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                    <div class="sm:w-1/2 mb-10 px-4">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="object-cover object-center h-full w-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>  
                        </div>
                        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">管理者</h2>
                        <a href="/admin/login" class="mt-6 text-white bg-green-500 border-0 py-2 px-5 focus:outline-none hover:bg-green-600 rounded">ログインはこちら</a>
                    </div>
                    <div class="sm:w-1/2 mb-10 px-4">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="object-cover object-center h-full w-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </div>
                        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">従業員</h2>
                        <a href="/employee/login" class="mt-6 text-white bg-green-500 border-0 py-2 px-5 focus:outline-none hover:bg-green-600 rounded">ログインはこちら</a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>