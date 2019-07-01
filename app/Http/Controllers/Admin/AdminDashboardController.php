<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Photo;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $postsCount = count(Post::all());
//        $posts = Post::with('category')->take(10)->get(); //eager loading
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();        $categoriesCount = count(Category::all());
        $usersCount = count(User::all());
        $users = User::orderBy('created_at', 'desc')->limit(5)->get();
        $photosCount = count(Photo::all());
        return view('admin.dashboard.index',
            compact([
                'postsCount',
                'posts',
                'categoriesCount',
                'usersCount',
                'users',
                'photosCount']));
    }
}
