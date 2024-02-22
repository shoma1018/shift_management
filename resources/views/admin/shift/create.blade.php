@extends('admin.header')
@section('title')
    <title>シフト投稿</title>
@endsection
@section('content')
    <body>
            <h1 class = "text-2xl text-center mt-10">シフト投稿</h1>
            <form action="/admin/dashboard" method="POST" enctype="multipart/form-data">
                @csrf
                <div class = "text-base text-center mt-12">
                    <label for="date">シフト投稿日</label><br>
                    <input class = "mt-7 rounded-lg border border-gray-500" type="date" name="shift[date]" value="" />
                </div>
                <div class="text-center mt-20">
                    <input type="file" name="shift[image]"/>
                </div>
                <div class="p-2 w-full mt-20">
                    <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">投稿</button>
                </div>
            </form>
    </body>
@endsection
</html>