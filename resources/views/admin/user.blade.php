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
      border: 1px solid red;
      background-color: red;
      padding: 2px 10px;
      color: #fff;
      border-radius: 28px;
      font-weight: bold;
    }

    .actionTd p {
      color: red;
      padding: 0;
      margin: 0;
      font-weight: bold;
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
            <h1>User Information</h1>
            <table>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th class="actionTd">Action</th>
              </tr>
              @foreach($data as $data)
              <tr>
                <td class="actionTd">{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if($data->usertype=="0")
                <td class="actionTd"><a href="{{url('/del',$data->id)}}">Delete</a></td>
                @else
                <td class="actionTd">
                  <p>Not Allowed(Admin)</p>
                </td>
                @endif

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