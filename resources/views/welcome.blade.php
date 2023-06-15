<div class="container">
    <p>Thông tin khách hàng:</p>
    @if (session()->has('khachhang'))
        <p>Tên khách hàng: {{ session('khachhang')->HoTen }}</p>
        
    @endif

    
</div>
