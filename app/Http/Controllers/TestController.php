<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        // Eloquent(エロクアント）
        $values = Test::all();

        $conunt = Test::count();

        $firest = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb');

        dd($values, $conunt, $firest, $whereBBB);

        return view('tests.test', compact('values'));
    }
}

