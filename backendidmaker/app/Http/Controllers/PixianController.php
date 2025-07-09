<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PixianController extends Controller
{
    public function removeSignatureBg(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:5120', // Max 5MB
        ]);

        try {
            $imageBase64 = base64_encode(file_get_contents($request->file('image')->getRealPath()));

            $pixianRes = Http::timeout(30)->post('https://api.pixian.ai/removebg', [
                'image' => $imageBase64
            ]);

            if (!$pixianRes->ok()) {
                return response()->json(['error' => 'Failed to connect to Pixian'], 500);
            }

            return response()->json([
                'cleaned' => $pixianRes->json('cleaned')
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong. ' . $e->getMessage()], 500);
        }
    }
}

