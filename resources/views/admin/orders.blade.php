<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.adminStyle")
  <style>
    .ordersMain {
      background-color: #f7f1e3;
      width: 100%;
      padding: 3px;
      color: #000;
    }

    .ordersMain h1 {
      font-size: 32px;
      font-weight: bold;
      margin-top: 10px 0px;
    }

    table {
      width: 97%;
      border: 2px solid #000;
    }

    th,
    td {
      border: 1px solid white;
      padding-left: 5px;
    }

    th {
      background-color: blue;
      font-size: 20px;
      font-weight: bold;
      padding: 5px;
      color: #fff;
    }

    td {
      font-size: 18px;
      padding: 5px;
    }

    tr:nth-child(odd) {
      background-color: #bfffff;
    }
  </style>

</head>

<body>
  <div class="container-scroller">
    <!-- sidebar.html -->
    @include("admin.sidebar")

    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="mb-2">
            <form action="/search" method="get">
              <input type="text" name="search" style="color:#000">
              <input type="submit" value="search" class="btn btn-primary">
            </form>
          </div>
          <center>
            <div class="ordersMain">
              <h1>Orders Information</h1>
              <table>
                <tr>
                  <th>User</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Food</th>
                  <th>price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>

                @foreach($order as $od)
                <tr>
                  <td> {{ $od -> user_name}}</td>
                  <td> {{ $od -> phone}}</td>
                  <td> {{ $od -> address}}/v</td>
                  <td> {{ $od -> food_name}}</td>
                  <td> {{ $od -> price}}৳</td>
                  <td> {{ $od -> quantity}}</td>
                  <td> {{ $od -> price * $od -> quantity}}৳</td>
                </tr>

                @endforeach
              </table>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
  <!-- All the Scripts -->
  @include("admin.adminScript")
</body>

</html>