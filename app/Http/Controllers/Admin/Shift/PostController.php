<?php

namespace App\Http\Controllers\Admin\Shift;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shift;
use Cloudinary;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.shift.create');
    }
    
    public function store(Request $request, Shift $shift)
    {
        $input = $request['shift'];
        $image_url = Cloudinary::upload($request->file('shift.image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        $shift->fill($input)->save();
        return redirect('/admin/');
    }
}
