<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.adminStyle")
  <style>
    .chefTable {
      background-color: #80e854;
      width: 90%;
      padding: 10px;
      color: #000;
    }

    .chefTable h1 {
      padding: 10px;
      font-size: 35px;
      font-weight: bolder;
    }

    table {
      width: 95%;
    }

    table,
    th,
    td {
      border: 1px solid white;
    }

    th {
      background-color: #5fb1e8;
      font-size: 20px;
      font-weight: bold;
      padding: 4px;
    }

    td {
      font-size: 18px;
      font-weight: 500;
      padding: 4px;
    }

    .imgTd {
      width: 150px;
    }

    .actTD {
      width: 200px;
    }

    img {
      height: 120px !important;
      width: 100%;
    }

    .center {
      text-align: center;
    }

    .btn .update {
      background-color: blue;
      font-size: 18px;
      font-weight: bold;
      margin-right: 5px;
      padding: 6px;
    }

    .btn .delete {
      background-color: red;
      font-size: 18px;
      font-weight: bold;
      margin-right: 5px;
      padding: 6px;
    }

    tr:nth-child(odd) {
      background-color: #b6ccdb;
    }

    tr:nth-child(even) {
      background-color: #bffcdb;
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
            <div class="chefTable">
              <h1>All Chef for the Service</h1>
              <table>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Speciality</th>
                  <th class="center">Image</th>
                  <th class="center">Action</th>
                </tr>
                @foreach($chef as $x)
                <tr>
                  <td>{{$x->id}}</td>
                  <td>{{$x->name}}</td>
                  <td>{{$x->speciality}}</td>
                  <td class="imgTd"><img src="ChefImage/{{$x->image}}"></td>
                  <td class="center ">
                    <div class="btn">
                      <a class="update" href="{{url('/updateChef/',$x->id)}}">Update</a>
                      <a class="delete" href="{{url('/deleteChef/',$x->id)}}">Delete</a>
                    </div>
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