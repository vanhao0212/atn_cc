<!DOCTYPE html>
<html>
<head>
    <title>FPT SHOP - Home</title>

 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"> -->

                                   <!-- footer icon -->
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('css/cssindex.css ')}}">
<link rel="stylesheet" href="{{asset('css/css_header_index.css ')}}">
<!-- <link rel="stylesheet" href="{{asset('css/csssp.css ')}}"> -->
<link rel="stylesheet" href="{{asset('js/js_header_index.js ')}}">


</head>

<body class="fullbody" style=" background-color: #FFFACD;">

@include('layout.headerindex')

@include('layout.spnoibat')

@include('layout.categoryproduct')

<hr class="sidebar-divider">
@include('layout.footerindex')
<script>
function toggleAccountInfo() {
  var accountInfo = document.getElementById("account-info");
  accountInfo.classList.toggle("show");
}
</script>
</body>
</html>