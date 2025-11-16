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
        <tr>
            <td>2</td>
            <td>Khóa học: Kịch bản Video Hiệu quả</td>
            <td>Khóa học</td>
            <td>Học cách viết kịch bản hấp dẫn</td>
            <td>850.000</td>
            <td>Còn hàng</td>
            <td class="action-buttons">
                <button class="edit">Sửa</button>
                <button class="delete">Xóa</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>E-book: 100 Chủ đề YouTube Hot</td>
            <td>Tài nguyên số</td>
            <td>Tài liệu PDF độc quyền</td>
            <td>199.000</td>
            <td>Còn hàng</td>
            <td class="action-buttons">
                <button class="edit">Sửa</button>
                <button class="delete">Xóa</button>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Gói Thành viên Premium (3 tháng)</td>
            <td>Thành viên</td>
            <td>Truy cập không giới hạn tài liệu</td>
            <td>750.000</td>
            <td>Còn hàng</td>
            <td class="action-buttons">
                <button class="edit">Sửa</button>
                <button class="delete">Xóa</button>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Tư vấn: Chẩn đoán Kênh YouTube</td>
            <td>Gói Tư Vấn</td>
            <td>Phân tích và đề xuất chiến lược kênh</td>
            <td>1.000.000</td>
            <td>Còn hàng</td>
            <td class="action-buttons">
                <button class="edit">Sửa</button>
                <button class="delete">Xóa</button>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Template Đồ họa Intro/Outro</td>
            <td>Tài nguyên số</td>
            <td>Mẫu template After Effects & Premiere Pro</td>
            <td>250.000</td>
            <td>Còn hàng</td>
            <td class="action-buttons">
                <button class="edit">Sửa</button>
                <button class="delete">Xóa</button>
            </td>
        </tr>
    </tbody>
  </table>
</div>
@endsection