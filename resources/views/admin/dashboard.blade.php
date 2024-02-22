@extends('admin.header')
@section('title')
    <title>管理者ダッシュボード</title>
@endsection
@section('content')
    <body>
        <div class = "flex justify-center mt-5">
            <form action="/admin/dashboard" method="GET" enctype="multipart/form-data">
                @csrf
                @if(isset($shift->date))
                    <input class = "rounded-lg border border-gray-500" type="date" name="date" value="{{$shift->date}}"/>
                @else
                    <input class = "rounded-lg border border-gray-500" type="date" name="date" value="{{$search}}"/>
                @endif
                <div class="bg-gray-50 inline-flex border border-gray-200 rounded-lg text-gray-900 select-none divide-x">
                    <button type="submit" class="py-0.5 px-4 bg-gray-50 hover:bg-gray-100 active:bg-gray-200 border border-gray-500 first:rounded-l-lg last:rounded-r-lg">
                        検索
                    </button>
                </div>
            </form>
        </div>
        
        @if(isset($shift->image_url))
            <div class = "border border-indigo">
                <img src="{{ $shift->image_url }}" alt="画像が読み込めません。"/>
            </div>
        @else
            <p class="text-center">No image</p>
        @endif
    </body>
@endsection
</html>