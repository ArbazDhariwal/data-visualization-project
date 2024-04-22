<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataVisualizationController extends Controller
{
    public function index()
    {
        return view('data-visualization');
    }

    public function executequery(Request $request)
{

    $query = $request->input('query');
    $result = DB::select($query);$data = [];
    foreach ($result as $row) {
        $data[] = [
            'name' => $row->name,
            'value_count' => $row->value_count
        ];
    }

    return response()->json($data);
}
}
