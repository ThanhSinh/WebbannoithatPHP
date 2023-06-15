<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonHang;
use App\Models\ChiTietDonHang;
use App\Models\KH;
use App\Models\Sanpham;



class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5);
}
public function view()
{
    return view('checkout')->with('i', (request()->input('page', 1) - 1) * 5);
}
   
public function save_cart(Request $request, $MaSP)
{
    $sanpham = Sanpham::findOrFail($MaSP);
    $cart = session()->get('cart', []);

    if (isset($cart[$MaSP])) {
        $cart[$MaSP]['quantity'] += $request->input('quantity', 1);
    } else {
        $cart[$MaSP] = [
            'MaSP' => $MaSP,
            'quantity' => $request->input('quantity', 1),
            'tensp' => $sanpham->tensp,
            'gia' => $sanpham->gia,
            'image' => $sanpham->image,
        ];
    }

    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Đã thêm vào giỏ hàng thành công');
}

    
    public function checkout()
{
    if(session()->has('khachhang')){
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['quantity'] * $item['gia'];
        }
        return view('checkout', ['cart' => $cart, 'total' => $total]);
    } else {
        return redirect()->back()->with('success','Vui lòng đăng nhập');
    }
}




public function add_to_order(Request $request)
{
    // Lấy thông tin giỏ hàng từ session
    $cart = session('cart', []);
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['quantity'] * floatval($item['gia']);
    }

    // Lấy thông tin khách hàng từ session
    $khachhang = session()->get('khachhang');

    // Tạo đơn hàng
    $order = new DonHang();
   
    $maHoaDon = mt_rand(100000, 999999);
    $order->MaHoaDon = $maHoaDon;
    $order->tongtien = $total;
    $order->ngaydat = now();
    $order->tinhtrang = 'Chưa thanh toán';
    $order->ghichu = $request->input('ghichu', '');
    $order->MaKH = $khachhang->MaKH; // Lấy thông tin khách hàng từ session
    $order->fill($request->except('_token'));
    $order->save();
   


    foreach ($cart as $item) {
        $ctdh = new ChiTietDonHang();
        $ctdh->MaCTHoaDon = (string) \Illuminate\Support\Str::uuid();
        $ctdh->soluong = $item['quantity'];
        $ctdh->MaSP = $item['MaSP'];
        $ctdh->MaHoaDon = $order->MaHoaDon;
        $ctdh->save();
    }
  



// Xóa giỏ hàng
session()->forget('cart');

// Hiển thị thông báo
return redirect()->route('index')->with('success', 'Đã đặt hàng thành công.');
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
