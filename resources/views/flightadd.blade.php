<!----
@function:adding flight
@author:Radhika J 
@date:10/03/2021
@module:admin--->
<!DOCTYPE html>
<html>
    <head>
        <title>Afrs</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    </head>
    <style>
        *
{
padding:0px;
margin:0px;
}

.menubar
{
background-color:rgba(0,0,0,0.5);
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
<body class="bg1">
<!------header section---->
<!--container-->
<div class="container-fluid">
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
<li> <a href="admin_view_user">Registered User</a></li>
<li> <a href="getdata">Flight details</a></li>
<li> <a href="getnoti">Flight Status</a></li>
</ul>
</div>
</li>
<!-- <li> <a href="#">PAYMENT DETAILS</a> -->
  <li> <a href="logoutadmin">LOGOUT</a>
</ul>
</nav>




<!----form---->
<form class="form-group" action="insertflight" method="get">

            <h1 class="text-center text-white">Flight Details</h1>

            <div id="forms" >
                <h3 class="text-white">Flight Details</h3>
           
            <div id="input">
                <input type="text" id="group" placeholder="Company Name" name="cname" required>
                <input type="text" id="group" placeholder="Flight ID" name="flightid" required><br>
                <input type="text" id="group" placeholder="From" name="flyfrom" required>
                <input type="text" id="group" placeholder="To" name="flyto" required><br>
       
            <div id="input1" >
                 <label for="group" class="text-white">Departure Time</label>
                <input type="time" id="group" placeholder="Departure Time" name="dtime"  required>
               
                 <label for="group" class="text-white">Arrival Time</label>
                <input type="time" id="group" placeholder="Arrival Time" name="atime"  required><br>
               
             </div>
                <input type="text" id="group" value= "Economy Class">
                <input type="number" id="group" placeholder= "Seat Capacity" name="eseat"  required>
                <input type="text" id="group" placeholder="Cost" name="ecost"  required><br>
                <input type="text" id="group" value= "Bussiness  Class">
                <input type="number" id="group" placeholder= "Seat Capacity" name="bseat"  required>
                <input type="text" id="group" placeholder="Cost" name="bcost"  required><br>
                <input type="text" id="group" value= "First Class">
                <input type="number" id="group" placeholder= "Seat Capacity" name="fseat"  required>
                <input type="text" id="group" placeholder="Cost" name="fcost"  required>
                </div>
               
               
                <div id="input4">
                    <input type="date" id="group" placeholder="Date" name="date"  required>
                   
               
                   
                </div>
               
               
                <button type="submit" class="btn btn-warning text-white" name="update" style="width: 80px;" >Add</button>
               
            </div>
        </form>
    </div>
</body>


<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</script>
</body>
</html>
