<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SignatureController extends Controller
{
    public function store(Request $request)
{
    $dataURL = $request->input('signature');

    if (!$dataURL) {
        return response()->json(['error' => 'Walang laman ang signature'], 400);
    }

    $image = str_replace('data:image/png;base64,', '', $dataURL);
    $image = str_replace(' ', '+', $image);
    $imageName = uniqid() . '.png';
    $savePath = public_path('signatures/' . $imageName);

    File::ensureDirectoryExists(public_path('signatures'));
    File::put($savePath, base64_decode($image));

    return response()->json([
        'message' => 'Signature saved!',
        'filename' => $imageName,
        'url' => asset('signatures/' . $imageName)
    ]);
}
}
