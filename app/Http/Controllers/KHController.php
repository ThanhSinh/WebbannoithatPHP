<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KH;
use App\Models\SanPham;
class KHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $kh = KH::paginate(20);
        return view('KH', ['kh' => $kh]);
    }
   
public function showForgetForm()
{
    return view('forget');
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kh = KH::all();
        return view('AddKH', compact('kh'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $kh = new KH;
    $kh->MaKH = mt_rand(100000, 999999);
    $kh->fill($request->except('_token'));
    $kh->save();
    return redirect()->route('kh')->with('thongbao', 'Thêm khách hàng thành công');
}

public function DKTC(Request $request)
{
    $kh = new KH;
    $kh->MaKH = mt_rand(100000, 999999);
    $kh->fill($request->except('_token'));
    $kh->save();
    return redirect()->route('kh.showLoginForm')->with('thongbao', 'Thêm khách hàng thành công');
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
    public function edit($MaKH)
    {
        $kh = KH::findOrFail($MaKH);
   
    return view('editKH', compact('kh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MaKH)
    {
        $kh = KH::findOrFail($MaKH);
   
    return redirect()->route('kh')->with('thongbao', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($MaKH)
    {
        $kh = KH::find($MaKH);
        $kh->delete();
        return redirect()->route('kh')->with('thongbao', 'xoa thanh cong');
    }
}
