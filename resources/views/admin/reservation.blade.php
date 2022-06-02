<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.adminStyle")
  <title>Document</title>
  <style>
    .tableDiv {
      background-color: #dce5e6;
      padding: 10px;
      color: #000;
    }

    .tableDiv h1 {
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    table {
      border: 3px solid #FFF;
      padding: 3px;
      width: 100%;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    th {
      background-color: #ed9911;
      padding: 5px;
      font-size: 19px;
      color: #000;
      font-weight: bold;
    }

    td {
      padding: 10px;
    }

    tr {
      font-size: 17px;
    }

    tr:nth-child(even) {
      background-color: #b4daed;
    }

    tr:nth-child(odd) {
      background-color: #bffffd;
    }
    .btnDiv a{
      border: 2px solid;
      text-decoration: none;
      padding: 4px;
      font-weight: bold;
      border-radius: 8px;
    }
    .btnDiv a:hover{
      color: #FFF;
    }
    .btnDiv .edit{
      background-color: green;
    }
    .btnDiv .delete{
      background-color: red;
    }
    .action{
      text-align: center;
    }
  </style>
</head>

<body>
  <x-app-layout>
  </x-app-layout>
  <div class="container-scroller">
    <!-- sidebar.html -->
    @include("admin.sidebar")
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <center>

            <div class="tableDiv">
              <h1>All Reservation Request</h1>
              <table>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Massage</th>
                  <th class="action">Action</th>
                </tr>
                @foreach($data as $x)
                <tr>
                  <td>{{$x->name}}</td>
                  <td>{{$x->email}}</td>
                  <td>{{$x->phone}}</td>
                  <td>{{$x->data}}</td>
                  <td>{{$x->time}}</td>
                  <td>{{$x->msg}}</td>
                  <td class="btnDiv">
                    <a class="edit" href="{{url('/upReserve',$x->id)}}">Update</a>
                    <a class="delete" href="{{url('/delReserve',$x->id)}}">Delete</a>
                  </td>
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