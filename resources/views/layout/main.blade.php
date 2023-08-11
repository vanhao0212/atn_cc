<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="{{asset('css/cssdashboard.css ')}}">
    <style>
table, th, td {
  border: 1px solid;
}
    </style>

</head>

<body>

<div class="header">

@include('layout.navbar')
</div>
<table>
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
</table>
  
  @include('layout.sidebar')
  @include('layout.content')

  
</body>
</html>