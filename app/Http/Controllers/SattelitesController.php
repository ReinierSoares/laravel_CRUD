<?php

namespace App\Http\Controllers;

use App\Models\Sattelite;
use Illuminate\Http\Request;
use Laravel\Sanctum\Sanctum;

class SattelitesController extends Controller
{
    public function index()
    {
        $sattelites = Sattelite::all();
        // dd($sattelites);

        return view('sattelite.index', ['sattelites' => $sattelites]);
    }

    public function create()
    {

        return view('sattelite.create');
    }

    public function store(Request $request)
    {

        Sattelite::create($request->all());
        return redirect()->route('satellites-index');
    }

    public function edit($id)
    {
        $sattelites = Sattelite::where('id', $id)->first();
        if (!empty($sattelites)) {
            return view('sattelite.edit', ['sattelites' => $sattelites]);
        } else {
            return redirect()->route('satellites-index');
        }
    }

    public function update(Request $request, $id)
    {

        $data = [
            'name' => $request->name,
            'year' => $request->year,
            'value' => $request->value,
        ];

        Sattelite::where('id', $id)->update($data);
        return redirect()->route('satellites-index');
    }

    public function destroy($id)
    {

        Sattelite::where('id', $id)->delete();
        return redirect()->route('satellites-index');
    }
}
