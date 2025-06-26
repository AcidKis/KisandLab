<?

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Posts;

class PostList extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('created_at', 'desc')->get();
        return view('forum', compact('posts'));
    }
}