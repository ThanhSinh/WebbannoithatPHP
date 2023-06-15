<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Loaisanpham;
use App\Models\KH;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = Sanpham::with('loaisanpham:MaLSP,TenLSP')->paginate(8);
        return view('indexUser', compact('sanpham'))->with('i', (request()->input('page', 1) - 1) * 5);
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
    public function showLoginForm()
    {
        return view('loginUser');
    }
    
    public function login(Request $request)
{
    $tk = $request->input('tk');
    $mk = $request->input('mk');

    $khachhang = KH::where('tk', $tk)->where('mk', $mk)->first();

    if ($khachhang) {
        // đăng nhập thành công, lưu thông tin vào session
        session()->put('khachhang', $khachhang);
        return redirect('/')->with('success', 'Đăng nhập thành công!');
    } else {
        // đăng nhập thất bại, quay trở lại trang đăng nhập
        return redirect('/login')->with('error', 'Tài khoản hoặc mật khẩu không đúng!');
    }
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
    public function search(Request $request)
{
    $search = $request->input('search');
    $sanpham = Sanpham::with('loaisanpham:MaLSP,TenLSP')
                    ->where('TenSP', 'LIKE', '%'.$search.'%')
                    ->paginate(4);
    return view('indexUser', compact('sanpham', 'search'));
        
}

}
