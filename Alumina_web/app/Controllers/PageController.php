
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

}
