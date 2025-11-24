@extends('layout/admin')
@section('body')

<div class="card-footer" style="width: 100%; padding: 30px;">
    <table class="table table-info table-striped-columns">
        <h1 class="text-primary fw-bolder">Category</h1>
        <a href="" class="btn btn-primary">Add</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
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
        <td></td>
        <td></td>
        <td><i class="fa-solid fa-eye text-primary"></i></td>
        <td><i class="fa-solid fa-user-pen text-primary"></i></td>
        <td><i class="fa-solid fa-trash text-primary"></i></td>
      </tr>
    @empty
      <tr>
        <td colspan="7"><h1>Chua co du lieu</h1></td>
      </tr>
    @endforelse
  </tbody>
</table>
  @endsection