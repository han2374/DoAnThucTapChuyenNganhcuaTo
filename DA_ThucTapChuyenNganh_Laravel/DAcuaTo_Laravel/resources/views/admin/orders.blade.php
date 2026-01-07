<x:layoutAdmin>
@section('body')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper container">
    <h2 class="mb-4">Đơn hàng</h2>

    <div class="mdc-card p-3">
      @if($orders->isEmpty())
        <div class="p-4">Chưa có đơn hàng nào.</div>
      @else
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Khách hàng</th>
                <th scope="col">Tổng</th>
                <th scope="col">Phương thức</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Ngày</th>
                <th scope="col" class="text-end">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order)
                @php $m = json_decode($order->meta, true) ?: []; @endphp
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $m['name'] ?? ($order->user_id ? optional($order->user)->name : 'Khách lẻ') }}</td>
                  <td>{{ number_format($order->total,0,',','.') }} VND</td>
                  <td>{{ $m['payment_method'] ?? '---' }}</td>
                  <td>
                    <span class="badge bg-{{ $order->status === 'paid' ? 'success' : ($order->status === 'pending' ? 'warning' : 'secondary') }}">{{ $order->status }}</span>
                  </td>
                  <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-outline-primary">Xem chi tiết</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @endif
    </div>
  </main>
@endsection
</x:layoutAdmin>
