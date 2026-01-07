<x:layoutAdmin>
@section('body')

<div class="card-footer" style="width: 100%; padding: 16px;">
    <h1 class="text-primary fw-bolder">Khách Hàng (Actors)</h1>
    <a href="#" class="btn btn-secondary" style="margin-bottom:12px;">Refresh</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Registered</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Chưa có người dùng nào.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
</x:layoutAdmin>
