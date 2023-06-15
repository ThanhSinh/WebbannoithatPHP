<?php

namespace App\Http\Controllers;
use App\Models\DonHang;
use App\Models\ChiTietDonHang;
use App\Models\KH;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $donhang = DonHang::with('kh:MaKH,HoTen')->paginate(20);
        $kh = KH::paginate(20);
        return view('donhang', ['donhang' => $donhang, 'kh' => $kh]);
    }
    public function showDetails($MaHoaDon)
    {
        $donhang = DonHang::findOrFail($MaHoaDon);
        $chitietdonhang = ChiTietDonHang::where('MaHoaDon', $MaHoaDon)->get();
        
    
        return view('CTCartAdmin', compact('donhang', 'chitietdonhang'));
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
    public function edit($id)
    {
        //
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
