<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TasksRequest;
use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\User;
use Carbon\Carbon;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Tasks::orderBy('id', 'desc')->get();
        return view('tasks.dashboard', compact('tasks'));
    }

    public function create()
    {
        $responsable = User::where('id', '!=', Auth::id())->get();
        $min_date = Carbon::now()->format('Y-m-d');

        return view('tasks.create', compact('responsable', 'min_date'));
    }

    public function store(TasksRequest $request)
    {
        $all = $request->validated();
        $all['author_id'] = Auth::id();
        Tasks::create($all);
        $tasks = Tasks::all();

        return redirect('dashboard')->with('tasks',$tasks);
    }

    public function show(Tasks $tasks)
    {
        $min_date = Carbon::now()->format('Y-m-d');
        $tasks = $tasks->with('logs')->where('user_id', Auth::id())->find($tasks->id);
        return view('tasks.show', compact('tasks', 'min_date'));
    }
}
