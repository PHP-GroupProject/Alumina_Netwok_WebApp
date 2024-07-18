
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function jobsApply()
    {
        return view('jobsApply');
    }
    public function jAForm()
    {
        return view('jAForm');
    }
    
    public function view_alumini()
{
    $users = User::all()->toArray(); // Fetch all users and convert to array
    return view('alumini', compact('users')); // Pass the users data to the view

}

}
