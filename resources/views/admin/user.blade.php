<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
</head>

<body>
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
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
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
</body>

</html>