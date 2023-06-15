<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Loaisanpham;
use App\Models\admin;


class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = Sanpham::with('loaisanpham:MaLSP,TenLSP')->paginate(20);
        $loaisanpham = Loaisanpham::paginate(20);
        return view('indexAdmin', ['sanpham' => $sanpham, 'loaisanpham' => $loaisanpham]);
    }
    
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaisanpham = Loaisanpham::all();
        return view('createAdmin', compact('loaisanpham'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $sanpham = new Sanpham;
    $sanpham->MaSP = mt_rand(1, 999999);
    $sanpham->MaLSP = $request->input('loaisanpham');
    $sanpham->fill($request->except(['_token', 'loaisanpham']));
    $sanpham->save();
    return redirect()->route('index.index')->with('thongbao', 'them thanh cong');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showLoginAdmin()
    {
        return view('loginAdmin');
    }
    public function loginAdmin(Request $request)
    {
        $tk = $request->input('tk');
        $mk = $request->input('mk');
        
        $admin = admin::where('tk', $tk)->where('mk', $mk)->first();
        
        if ($admin) {
            // đăng nhập thành công, lưu thông tin vào session
            session()->put('admin', $admin);
            $data = json_encode($request->session()->all());
            return redirect()->route('index.index')->with('thongbao', 'Sửa thành công');
         
            
        } else {
            // đăng nhập thất bại, quay trở lại trang đăng nhập
            return redirect('/admin/admin')->with('error', 'Tài khoản hoặc mật khẩu không đúng!');
        }
    }
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
    return view('editAdmin', compact('sanpham', 'loaisanpham'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MaSP)
{
    $sanpham = Sanpham::findOrFail($MaSP);
    $sanpham->update($request->all());
    return redirect()->route('index.index')->with('thongbao', 'Sửa thành công');
}
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($MaSP)
{
    $sanpham = Sanpham::find($MaSP);
    $sanpham->delete();
    return redirect()->route('index.index')->with('thongbao', 'xoa thanh cong');
}


}
