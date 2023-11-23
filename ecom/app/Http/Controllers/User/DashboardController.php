<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
	public function Index()
	{
		$username = Auth::user()->name;
		return view('user.dashboard_user', ['username' => $username]);
	}
}
?>