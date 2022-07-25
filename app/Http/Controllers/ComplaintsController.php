<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function index(){
        $complaints = Complaint::where('is_new', 1)->get();
        return view('complaints.index', compact('complaints'));
    }

    public function detail($id){
        $comp = Complaint::findOrFail($id);
        return view('complaints.detail', compact('comp'));
    }

    public function hide($id){
        $comp = Complaint::find($id);
        $comp->is_new = 0;
        $comp->save();
        return to_route('complaints.index');
    }

    public function history(){
        $complaints = Complaint::where('is_new', 0)->get();
        return view('complaints.index', compact('complaints'));
    }

    public function search(Request $request){
        $complaints = Complaint::where('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('company', 'LIKE', '%'.$request->search.'%')
            ->orWhere('phone', 'LIKE', '%'.$request->search.'%')
            ->orWhere('message1', 'LIKE', '%'.$request->search.'%')
            ->orWhere('message2', 'LIKE', '%'.$request->search.'%')
            ->get();
        return view('ajax.complaints.index', compact('complaints'))->render();
    }
}
