<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Application::where('is_new', 1)->get();
        return view('applications.index', compact('applications'));
    }

    public function detail($id){
        $app = Application::findOrFail($id);
        return view('applications.detail', compact('app'));
    }

    public function hide($id){
        $app = Application::findOrFail($id);
        $app->is_new = 0;
        $app->save();
        return to_route('applications.index');
    }

    public function history(){
        $applications = Application::where('is_new', 0)->get();
        return view('applications.index', compact('applications'));
    }

    public function indexSearch(Request $request){
        $applications = Application::where('country_sender', 'LIKE', '%'.$request->search.'%')
            ->orWhere('station_sender', 'LIKE', '%'.$request->search.'%')
            ->orWhere('country_receiver', 'LIKE', '%'.$request->search.'%')
            ->orWhere('station_receiver', 'LIKE', '%'.$request->search.'%')
            ->orWhere('sender', 'LIKE', '%'.$request->search.'%')
            ->orWhere('receiver', 'LIKE', '%'.$request->search.'%')
            ->get();
        return view('ajax.applications.index', compact('applications'))->render();
    }
}
