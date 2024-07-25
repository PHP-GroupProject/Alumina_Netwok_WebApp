<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');
        $users = User::where('name', 'LIKE', "%{$query}%")->get();

        return response()->json($users);
    }
}
