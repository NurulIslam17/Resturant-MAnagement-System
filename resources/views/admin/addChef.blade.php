<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.adminStyle")
  <style>
    .formDiv {
      background-color: #62f255;
      width: 593px;
      color: #000;
      padding: 10px;
    }

    .formDiv h1 {
      font-size: 32px;
      padding: 5px;
      margin: 5px;
      font-weight: bold;
    }

    label {
      display: inline-block;
      width: 129px;
      text-align: left;
      font-size: 18px;
      font-weight: bold;
    }

    .inpDiv {
      margin-top: 20px;
    }

    .inpDiv input {
      font-size: 18px;
    }

    .inpDiv .upload {
      background-color: #1163fa;
      font-size: 20px;
      font-weight: bold;
      padding: 9px;
      border-radius: 5px;
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
              <h1>Chef Information Upload</h1>
              <form action="{{url('/uploadChef')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inpDiv">
                  <label for="name">Chef Name</label>
                  <input type="text" name="name" placeholder="Enter Chef Name">
                </div>

                <div class="inpDiv">
                  <label for="name">Speciality</label>
                  <input type="text" name="speciality" placeholder="Enter Chef speciality">
                </div>

                <div class="inpDiv">
                  <label for="name">Chef Image</label>
                  <input type="file" name="image">
                </div>

                <div class="inpDiv">
                  <input class="upload" type="submit" value="Upload Chef Information">
                </div>
              </form>
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