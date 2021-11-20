<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        return Todo::latest()->get();
    }

    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->text = $request->get('text');
        $todo->save();

        return response()->json([
            'message' => 'Todo successfully created.'
        ]);
    }

    public function delete(Request $request)
    {
        $todo = Todo::find($request->get('id'));
        $todo->delete();

        return response()->json([
            'message' => 'Todo successfully deleted.'
        ]);
    }

    public function markAsDone(Request $request)
    {
        $todo = Todo::find($request->get('id'));
        $todo->done = true;
        $todo->update();

        return response()->json([
            'message' => 'Todo successfully marked as done.'
        ]);
    }

    public function markAsUnDone(Request $request)
    {
        $todo = Todo::find($request->get('id'));
        $todo->done = false;
        $todo->update();

        return response()->json([
            'message' => 'Todo successfully marked as undone.'
        ]);
    }
}
