<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.admincss")
</head>

<body>
  <div class="container-scroller">
    @include("admin.navbar")
    <div class="container">
      <h1>Customer Orders</h1>
      <form action="{{ url('/search') }}" method="get">
        @csrf
        <input type="text" name="search" style="color: blue;">
        <input type="submit" value="Search" class="btn btn-success">
      </form>
      <table>
        <tr align="center">
          <td style="padding: 30px; height: 40px; ">Name</td>
          <td style="padding: 30px; height: 40px; ">Phone</td>
          <td style="padding: 30px; height: 40px; ">Address</td>
          <td style="padding: 30px; height: 40px; ">Foodname</td>
          <td style="padding: 30px; height: 40px; ">Price</td>
          <td style="padding: 30px; height: 40px; ">Quantity</td>
          <td style="padding: 30px; height: 40px; ">Total Price</td>
        </tr>
        @foreach($data as $data)
        <tr align="center" style="background-color:black;">
          <td style="height: 40px">{{$data->name}}</td>
          <td style="height: 40px">{{$data->phone}}</td>
          <td style="height: 40px">{{$data->address}}</td>
          <td style="height: 40px">{{$data->foodname}}</td>
          <td style="height: 40px">${{$data->price}}</td>
          <td style="height: 40px">{{$data->quantity}}</td>
          <td style="height: 40px">{{$data->quantity * $data->price}}</td>
        </tr>
        @endforeach
      </table>
    </div>

  </div>

  @include("admin.adminscript")

</body>

</html>