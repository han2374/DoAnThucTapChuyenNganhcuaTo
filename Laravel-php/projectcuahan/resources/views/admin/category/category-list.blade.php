@extends('layout/admin')
@section('body')

<div class="card-footer">
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><i class="fa-solid fa-eye text-primary"></i></td>
      <td><i class="fa-solid fa-user-pen text-primary"></i></td>
      <td><i class="fa-solid fa-trash text-primary"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><i class="fa-solid fa-eye-slash text-primary"></i></td>
      <td><i class="fa-solid fa-user-pen text-primary"></i></td>
      <td><i class="fa-solid fa-trash text-primary"></i></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
      <td><i class="fa-solid fa-eye text-primary"></i></td>
      <td><i class="fa-solid fa-user-pen text-primary"></i></td>
      <td><i class="fa-solid fa-trash text-primary"></i></td>
    </tr>
  </tbody>
</table>
</div>
@endsection