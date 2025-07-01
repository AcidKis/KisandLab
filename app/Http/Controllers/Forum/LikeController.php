<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggleLike(Request $request)
    {
        $request->validate([
            'likeable_id' => 'required|integer',
            'likeable_type' => 'required|string|in:post,comment'
        ]);

        $likeableType = $request->likeable_type === 'post' 
            ? 'App\Models\Posts' 
            : 'App\Models\Comment';

        $like = Like::where('user_id', Auth::id())
            ->where('likeable_id', $request->likeable_id)
            ->where('likeable_type', $likeableType)
            ->first();

        if ($like) {
            $like->delete();
            return response()->json(['status' => 'unliked']);
        }

        $like = new Like([
            'user_id' => Auth::id(),
            'likeable_id' => $request->likeable_id,
            'likeable_type' => $likeableType
        ]);
        
        $like->save();
        
        return response()->json(['status' => 'liked']);
    }
}