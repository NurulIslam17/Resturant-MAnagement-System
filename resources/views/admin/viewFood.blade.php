<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.adminStyle")
  <style>
    table {
      background-color: #FFF;
      color: black;
      padding: 10px;
      width: 90%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid;
    }

    th {
      padding: 11px;
      font-size: 18px;
      font-weight: bold;
      background: blue;
      color: #FFF;
    }

    td {
      padding: 5px;
    }

    tr:nth-child(even) {
      background-color: #d5e5eb;
    }

    .actionTd {
      text-align: center;
    }

    .actionTd a {
      text-decoration: none;
      background-color: red;
      padding: 5px 10px;
      color: #fff;
      font-weight: bold;
    }
    .actionTd .update{
      background-color: blue;
      text-decoration: none;
      padding: 5px 10px;
      font-weight: bold;
    }
    img{
        width: 100%;
        height: 100px;
        text-align: center;
    }
    .imgTd {
      width: 140px;
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
          <center>
            <h1>View Food</h1>
            <table>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th class="actionTd">Action</th>
              </tr>
             @foreach($data as $x)
             <tr>
                <td class="actionTd">{{$x->id}}</td>
                <td>{{$x->title}}</td>
                <td>{{$x->price}}৳</td>
                <td>{{$x->desc}}</td>
                <td><img class="imgTd img" src="/FoodImage/{{$x->image}}"></td>
                <td class="actionTd">
                  <a href="{{url('/delFood',$x->id)}}">DELETE</a>
                  <a class="update" href="{{url('/updateFood',$x->id)}}">Update</a>
                </td>
              </tr>
             @endforeach
            </table>
          </center>
        </div>
      </div>
    </div>
  </div>
  <!-- All the Scripts -->
  @include("admin.adminScript")
</body>

</html>