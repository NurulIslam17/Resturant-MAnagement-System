<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/public">
  @include("admin.adminStyle")
  <title>Update Food</title>
  <style>
    .formContainer {
      background-color: #4de8d1;
      width: 600px;
      padding: 10px;
    }

    h1 {
      color: #000;
    }

    label {
      display: inline-block;
      width: 115px;
      text-align: left;
    }

    .inputDiv {
      margin-top: 12px;
      color: black;
      font-weight: bold;
    }

    .inputDiv input {
      font-size: 18px;
    }
    .oldImg{
      height: 100px;
      width: 120px;
    }

    form .addFood input {
      border: 1px blus solid;
      background-color: blue;
      padding: 8px;
      font-size: 20px;
      font-weight: bold;
      border-radius: 13px;
    }
    .formContainer h1{
      font-size: 40px;
      font-weight: bolder;
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
            <div class="formContainer">
              <h1>Food Menu Update Section</h1>
              <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inputDiv">
                  <label>Title</label>
                  <input type="text" name="title" value="{{$data->title}}" required>
                </div>

                <div class="inputDiv">
                  <label>Price</label>
                  <input type="number" name="price" value="{{$data->price}}" required>
                </div>

                <div class="inputDiv">
                  <label>Description</label>
                  <input type="text" name="desc" value="{{$data->desc}} " required><br/><br/>
                </div>
                <div class="inputDiv">
                  <label>Old Image</label>
                  <img class="oldImg" src="/FoodImage/{{$data->image}}">
                </div>
                <div class="inputDiv">
                  <label>Image</label>
                  <input type="file" name="img"  required><br /><br />
                </div>

                <div class="addFood">
                  <input type="submit" value="Update Food"><br /><br />
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