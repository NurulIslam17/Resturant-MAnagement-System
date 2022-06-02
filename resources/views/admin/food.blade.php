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