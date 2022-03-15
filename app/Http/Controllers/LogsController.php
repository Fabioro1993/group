<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\LogsRequest;
use Illuminate\Http\Request;
use App\Mail\LogsMail;
use App\Models\Tasks;
use App\Models\Logs;
use Carbon\Carbon;

class LogsController extends Controller
{
    public function store(LogsRequest $request)
    {
        $all = $request->validated();
        $logs = Logs::create($all);

        //Envio del correo, comentado
        $receiver = $logs->tasks->user->email;
        //Mail::to($receiver)->send(new LogsMail($logs));

        $min_date = Carbon::now()->format('Y-m-d');
        $tasks = Tasks::find($all['tasks_id']);

        return redirect('tasks/'.$all['tasks_id'])->with(['tasks',$tasks, 'min_date',$min_date]);
    }
}
