<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => ['required', 'image', 'max:5120'], // 5MB
        ]);

        // store in storage/app/public/assets/construction/tmp
        $path = $request->file('file')->store('assets/construction/tmp', 'public');

        return response()->json([
            'path' => $path,
            'url'  => asset('storage/'.$path),
        ]);
    }

    public function storeConstructionProjectMedia(Request $request)
    {
        $request->validate([
            'file' => ['required', 'image', 'max:5120'], // 5MB
        ]);

        // store in storage/app/public/assets/construction/tmp
        $path = $request->file('file')->store('assets/construction/tmp', 'public');

        return response()->json([
            'path' => $path,
            'url'  => asset('storage/'.$path),
        ]);
    }

    // ConstructionProjectController.php
    public function tempUpload(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'file' => ['required', 'image', 'max:5120'], // 5MB
        ]);

        // Temporary area
        $path = $request->file('file')->store('tmp/construction', 'public');

        return response()->json([
            'path' => $path,                          // e.g. tmp/construction/abcd.jpg
            'url'  => asset('storage/'.$path),
        ]);
    }


}
