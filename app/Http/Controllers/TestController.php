<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // Eloquent(エロクアント）
        $values = Test::all();

        $conunt = Test::count();

        $firest = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb');

        // クエリビルダ
        $queryBilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->get();

        dd($values, $conunt, $firest, $whereBBB, $queryBilder);

        return view('tests.test', compact('values'));
    }
}

