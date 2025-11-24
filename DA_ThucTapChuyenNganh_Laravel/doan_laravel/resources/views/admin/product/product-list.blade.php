@extends('layout/admin')
@section('body')
<div class="card-footer" style="width: 100%; padding: 30px;">
    <table class="table table-info table-striped-columns">
        <h1 class="text-primary fw-bolder">Products</h1>
        <a href="" class="btn btn-primary">Add</a>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Sản phẩm/Dịch vụ</th>
            <th>Loại Sản phẩm</th>
            <th>Mô tả Ngắn</th>
            <th>Giá (VNĐ)</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
         @forelse($products as $object)
        <tr>
            <td>1</td>
            <td>Gói Tư Vấn 1-1 Chuyên sâu</td>
            <td>Gói Tư Vấn</td>
            <td>Phiên cố vấn chiến lược 60 phút</td>
            <td>1.500.000</td>
            <td>Còn hàng</td>
            <td class="action-buttons">
                <button class="edit">Sửa</button>
                <button class="delete">Xóa</button>
            </td>
        </tr>
         @empty
      <tr>
        <td colspan="7"><h1>Chua co du lieu</h1></td>
      </tr>
    @endforelse
    </tbody>
  </table>
@endsection