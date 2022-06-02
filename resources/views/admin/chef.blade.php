<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.adminStyle")
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
          <h1>Chef</h1>
          </center>
        </div>
      </div>
    </div>
  </div>
  <!-- All the Scripts -->
  @include("admin.adminScript")
</body>

</html>