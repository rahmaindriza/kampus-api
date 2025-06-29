<?php
namespace App\Http\Controllers;
use App\Models\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index() {
        return response()->json(Kampus::all());
    }

    public function show($id) {
        return response()->json(Kampus::find($id));
    }

    public function store(Request $request) {
        $data = $request->all();
        $kampus = Kampus::create($data);
        return response()->json($kampus);
    }

    public function update(Request $request, $id) {
        $kampus = Kampus::findOrFail($id);
        $kampus->update($request->all());
        return response()->json($kampus);
    }

    public function destroy($id) {
        Kampus::destroy($id);
        return response()->json(['message' => 'Data deleted']);
    }
}
