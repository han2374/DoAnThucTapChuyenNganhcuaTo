<x:layoutAdmin>
@section('body')

<div class="card-footer" style="width: 100%; padding: 5px;">
    <table class="table table-info table-striped-columns">
        <h1 class="text-primary fw-bolder">Category</h1>
        <a href="{{route('admin.category.create')}}" class="btn btn-primary" style="background-color: white; border-color: black; display: inline-flex; align-items: center; gap: 8px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
</svg> Add</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Handle</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as $object)
      <tr>
        <th scope="row">{{ $object->id }}</th>
        <td>{{ $object->name }}</td>
        <td><img src="{{ $object->image }}" alt="" style="width: 150px"></td>
        <td>
          @if($object->status==1)
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
</svg>
@else
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg>
@endif</td>
        <td><a href=""><i class="fa-solid fa-at"></i></td>
        <td><a href=""><i class="fa-solid fa-eye text-primary"></i></a></td>
        <td><a href="{{ route('admin.category.edit', ['category' => $object->id]) }}"><i class="fa-solid fa-user-pen text-primary"></i></a></td>
        <td>{{-- Nút xoá --}}
                    <a href="#"
                       class="text-primary"
                       onclick="event.preventDefault(); 
                                if (confirm('Bạn có chắc chắn muốn xóa không?')) {
                                    document.getElementById('category-delete-{{ $object->id }}').submit();
                                }">
                       <i class="fa-solid fa-trash text-primary"></i>
                    </a>

                    {{-- Form xoá --}}
                    <form id="category-delete-{{ $object->id }}"
                          action="{{ route('admin.category.destroy', ['category' => $object->id]) }}"
                          method="POST"
                          style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
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
</x:layoutAdmin>