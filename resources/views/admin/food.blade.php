<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foods</title>
  <style>
    .formContainer {
      background-color: #4de8d1;
      width: 600px;
      padding: 10px;
    }
    h1{
      color: #000;
    }

    label {
      display: inline-block;
      width: 115px;
      text-align: left;
    }

    .inputDiv {
      margin-top: 14px;
      color: black;
      font-weight: bold;
    }

    .inputDiv input {
      font-size: 18px;
    }

    form .addFood input {
      border: 1px blus solid;
      background-color: blue;
      padding: 8px;
      font-size: 20px;
      font-weight: bold;
      border-radius: 13px;
    }
  </style>
</head>

<body>
  <x-app-layout>
  </x-app-layout>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    @include("admin.adminStyle")
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
              <div class="formContainer">
                <h1>Food Menu Add Section</h1>
                <form action="{{url('/addFood')}}" method="post" enctype="multipart/form-data">
                @csrf  
                <div class="inputDiv">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Food Title" required>
                  </div>

                  <div class="inputDiv">
                    <label>Price</label>
                    <input type="number" name="price" placeholder="Food Price" required>
                  </div>

                  <div class="inputDiv">
                    <label>Description</label>
                    <input type="text" name="desc" placeholder="Food description" required><br /><br />
                  </div>
                  <div class="inputDiv">
                    <label>Image</label>
                    <input type="file" name="img" placeholder="Food image" required><br /><br />
                  </div>

                  <div class="addFood">
                    <input type="submit" value="Add Food"><br /><br />
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
</body>

</html>