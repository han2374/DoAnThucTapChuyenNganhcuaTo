@extends('layout/admin')
@section('body')

<div class="card-footer">
    <table class="table table-info table-striped-columns">
        <h1 class="text-primary fw-bolder">Product<i class="text-primary fa-solid fa-shop"></i></h1>
  <thead>
    <tr>
      <th scope="col">Products</th>
      <th scope="col">Accessories</th>
      <th scope="col">Electronics & Computer</th>
      <th scope="col">Laptops & Desktops</th>
      <th scope="col">Mobiles & Tablets</th>
      <th scope="col">SmartPhone & Smart TV</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Power bank</td>
      <td>PC (Personal Computer)</td>
      <td>Dell</td>
      <td>Samsung</td>
      <td>LG</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Wireless</td>
      <td>Laptop</td>
      <td>HP</td>
      <td>Apple</td>
      <td>Sony</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Battery</td>
      <td>Desktop</td>
      <td>Asus</td>
      <td>Xiaomi</td>
      <td>Panasonic</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Phone case</td>
      <td>Keyboard</td>
      <td>Lenovo</td>
      <td>Vivo</td>
      <td>TCL</td>
    </tr>
      <tr>
      <th scope="row">5</th>
      <td>Screen</td>
      <td>Mouse</td>
      <td>MSI</td>
      <td>Lenovo</td>
      <td>Sharp<td>
    </tr>
      <tr>
      <th scope="row">6</th>
      <td>Shield</td>
      <td>Speakers</td>
      <td>Acer</td>
      <td>Honor</td>
      <td>Hisense</td>
    </tr>
  </tbody>
</table>
</div>
@endsection<