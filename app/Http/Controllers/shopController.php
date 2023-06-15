<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Loaisanpham;

class shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $id_loai_sp = $request->get('category');
    $sanpham = Sanpham::when($id_loai_sp, function ($query, $id_loai_sp) {
        $query->where('MaLSP', $id_loai_sp);
    })->with('loaisanpham')->paginate(4);
    $loaisanpham_all = Loaisanpham::all();
    $category_id = $id_loai_sp;
    $loaisanpham = $id_loai_sp ? Loaisanpham::where('MaLSP', $id_loai_sp)->get() : $loaisanpham_all;
    return view('shop', compact('sanpham', 'loaisanpham', 'loaisanpham_all', 'category_id'))->with('i', (request()->input('page', 1) - 1) * 5);
}

public function search(Request $request)
{
    $search = $request->input('search');
    $sanpham = Sanpham::with('loaisanpham:MaLSP,TenLSP')
                    ->where('TenSP', 'LIKE', '%'.$search.'%')
                    ->paginate(4);
    return view('indexUser', compact('sanpham', 'search'))
        ->with('i', (request()->input('page', 1) - 1) * 2);
}

public function loaisanpham($id)
{
    $loaisanpham = Loaisanpham::where('MaLSP', $id)->firstOrFail();
    $sanpham = Sanpham::where('MaLSP', $id)->with('loaisanpham')->paginate(5);
    $loaisanpham_all = Loaisanpham::all();
    $category_id = $id;
    return view('shop', compact('sanpham', 'loaisanpham_all', 'category_id', 'loaisanpham'))->with('i', (request()->input('page', 1) - 1) * 5);
}

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($MaSP)
    {
        $sanpham = Sanpham::findOrFail($MaSP);
    $loaisanpham = Loaisanpham::all();
    return view('deltail', compact('sanpham', 'loaisanpham'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
