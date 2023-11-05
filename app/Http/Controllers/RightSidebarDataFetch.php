<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RightSidebarDataFetch extends Controller
{
    public function __invoke()
    {
         echo json_encode( Expense::where('user_id','=',Auth::user()->id)->get());
    }
}
