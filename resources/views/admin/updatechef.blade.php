<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/public" />
  @include("admin.adminStyle")
  <style>
    .formDiv {
      background-color: #60acf7;
      width: 500px;
      color: #000;
      font-size: 19px;
      font-weight: bolder;
      padding: 10px;
    }

    .formDiv h1 {
      font-size: 30px;
      font-weight: bolder;
      padding: 5px;
    }

    label {
      display: inline-block;
      width: 200px;

    }

    .inputDiv {
      margin-top: 15px;
    }

    .inputDiv img {
      height: 100px;
      width: 100px;
    }

    .inputDiv .btn {
      background-color: blue;
      font-size: 20px;
      font-weight: bolder;
      margin: 5px;
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
            <div class="formDiv">
              <form action="{{url('/upChef',$update->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Edit Chef Information</h1>
                <div class="inputDiv">
                  <label>Name</label>
                  <input type="text" name="name" value="{{$update->name}}">
                </div>
                <div class="inputDiv">
                  <label>Speciality</label>
                  <input type="text" name="speciality" value="{{$update->speciality}}">
                </div>
                <div class="inputDiv">
                  <label>Old Image</label>
                  <img src="ChefImage/{{$update->image}}">
                </div>
                <div class="inputDiv">
                  <input type="file" name="image">
                </div>
                <div class="inputDiv">
                  <input class="btn" type="submit" value="Update Chef">
                </div>
              </form>
            </div>
        </div>
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