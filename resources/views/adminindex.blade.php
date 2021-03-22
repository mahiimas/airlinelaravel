<!----
@function:admin index
@author:Mahima S
@date:09/03/2021
@module:admin--->
<!DOCTYPE html>
<html>
<head>
<title>new</title>

<style>

.menubar
{
background-color:black;
text-align:center;

}
.menubar ul
{
list-style:none;
display:inline-flex;
padding:15px;

}
.menubar ul li a
{
text-decoration:none;
color:white;
padding:15px;
}
.menubar ul li
{
padding:10px;

}
.menubar ul li a:hover
{
background-color:green;
border-radius:10px;

}
.submenu
{
display:none;
}
.menubar ul li:hover .submenu
{
display:block;
position:absolute;
background-color:black;
border-radius:10px;

}
.menubar ul li:hover .submenu ul
{
display:block;
}
.submenu ul li
{
border-bottom:2px solid green;
}
.row
{

display:flex;
}
.col h2
{
text-align:center;
text-decoration:underline;
}
.ft
{
background-color:black;
padding:50px;
text-align:center;
color:white;
}

.first
{
background-image:url("../img/fg.jpg");
background-size:cover;



}
h1
{
font-size: 60px;
}




</style>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
</head>
<body class="first" >
  <!-- Header start -->
  <header>
      <nav>
     
    
        <div class="top container-fluid">
            <div class="row">
           
                <div class="col-7 text-white">

                    <h4 class="h5">Admin Home Page</h4>
                </div>
                <div class="col-5 text-end text-white">
                    <i class="fab fa-facebook  "></i>
                    <i class="fab fa-instagram "></i>
                    <i class="fab fa-youtube "></i>
                     <i class="fab fa-google "></i>
                </div>
            </div>
        </div>
      </nav>
<div class="first">
<nav class="menubar navbar-light">

<ul>
<li> <a href="index">HOME </a></li>
<li> <a href="#">ADD</a>
<div class="submenu">
<ul>
<li> <a href="add">Add Flight Details</a></li>
<li> <a href="addairport">Add Airport</a></li>
<li> <a href="notification">Add Flight Status</a></li>
</ul>
</div>
</li>
<li> <a href="#">VIEW</a>
<div class="submenu">
<ul>
<li> <a href="getdata">Flights</a></li>
<li> <a href="airportlist">Airports</a></li>
<li> <a href="admin_view_user">Registered User</a></li>
li> <a href="getnoti">Notification</a></li>




</ul>
</div>
</li>

  <li> <a href="logoutadmin">LOGOUT</a>
</ul>
</nav>


</body>
</html>