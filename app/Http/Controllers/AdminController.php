<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
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
            return view('index.index', ['data' => $data]);
            
        } else {
            // đăng nhập thất bại, quay trở lại trang đăng nhập
            return redirect('/admin/admin')->with('error', 'Tài khoản hoặc mật khẩu không đúng!');
        }
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
