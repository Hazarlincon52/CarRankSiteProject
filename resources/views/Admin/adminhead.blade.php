

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: 'Trebuchet MS', sans-serif;
  margin:0px;
  background-color:#bebebe;
  height:1000px;
}
/* Home */
.admin{
  background-color:white;
  width:80%;
  margin-top:30px;
  margin-left:130px;
  padding-top:20px;
  padding-bottom:20px;
  border-radius:10px;
}
/* End Home*/

/* Header */
.bar {
  overflow: hidden;
  background-color: #e54140;
}

.bar a {
float:left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float:left;
  overflow: hidden;
}

.dropdownright {
  float:right;	
  overflow: hidden;
}

.dropdown .dropbtn, .dropdownright .dropbtn{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content, .dropdownright:hover  .dropdown-content{
  display: block;
}
/* End Header */

/* Create Car*/ 
.formpro{
    position:absolute;
    left: 40%;
    top: 30%;
}
.productcon{
    margin-top:80px;
    margin-left:310px;
    border-radius:10px;
    background-color:white;
    text-align:center;
    padding-top:20px;
    padding-bottom:20px;
    width:60%;
}
.inputpro{
    background-color: #000000;
	border: none;
	border-radius:15px;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 12px;
  	padding-right: 80px;
  	padding-left:80px;
  	cursor: pointer;
}

.namepro{
    width:600px;
    height:30px;
    border-radius:10px;
    border:solid;
}

/* End Create Car*/ 

/* Create Brand */
.formcat{
    margin-top:80px;
    margin-left:310px;
    border-radius:10px;
    background-color:white;
    text-align:center;
    padding-top:20px;
    padding-bottom:20px;
    width:60%;
}
.inputcat{
    background-color: #000000;
	border: none;
	border-radius:15px;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 12px;
  	padding-right: 80px;
  	padding-left:80px;
  	cursor: pointer;
}
.namecat{
    width:600px;
    height:30px;
    border-radius:10px;
    border:solid;
}
/* End Create Brand */

/* View Car*/
.tablepro, th, td{
    border: 1px solid black;
    margin-left:30px;
}
.img{
    height:100px;
    width:80PX;
    max-width:80px;
}
.productcont{
    margin-left:90px;
    width:90%;
    background-color:white;
    padding-top:20px;
    padding-bottom:20px;
    border-radius:10px;
}
/* End View Car*/

/* View Brand*/
.tablecat, th, td{
    border: 1px solid black;
    margin-left:500px;
}
.buttoncat{
  display: block;
  width: 80%;
  border: none;
  color: black;
  padding: 14px 28px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
  border-radius:10px;

}
.categorycont{
    margin-left:150px;
    width:80%;
    background-color:white;
    padding-top:20px;
    padding-bottom:20px;
    border-radius:10px;
}
/* End View Brand*/

/* Create Car*/ 
.formsh{
    position:absolute;
    left: 40%;
    top: 30%;
}
.showcon{
    margin-top:80px;
    margin-left:310px;
    border-radius:10px;
    background-color:white;
    text-align:center;
    padding-top:20px;
    padding-bottom:20px;
    width:60%;
}
.inputsh{
    background-color: #000000;
	border: none;
	border-radius:15px;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 12px;
  	padding-right: 80px;
  	padding-left:80px;
  	cursor: pointer;
}

.namesh{
    width:600px;
    height:30px;
    border-radius:10px;
    border:solid;
}
/* End Create Show*/

/* View Show*/
.tableshow, th, td{
    border: 1px solid black;
    margin-left:30px;
}
.img1{
    height:200px;
    width:300PX;
    max-width:300px;
}
.showcont{
    margin-left:90px;
    width:90%;
    background-color:white;
    padding-top:20px;
    padding-bottom:20px;
    border-radius:10px;
}
.size{
  width:300px;

}
/* End View Show*/
</style>
</head>
<body>

<div class="bar">
  <a href="/Admin/admin_home">Admin</a>
  <div class="dropdown">
    <button class="dropbtn">Cars
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/admin_add_car">Create Cars</a>
      <a href="/admin_view_car">View Cars</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Brands 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/admin_add_bran">Create Brand</a>
      <a href="/admin_view_bran">View Brand</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Shop 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/admin_add_show">Create Shop </a>
      <a href="/admin_view_show">View Shop </a>
    </div>
  </div>
  @if($auth && Auth::User()->role == 'admin')    
  <div class="dropdownright">
    <button class="dropbtn">{{ Auth::User()->username }}
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/logoutadmin">Log Out</a>
    </div>
  </div> 
  @endif
</div>

@yield('content')
</body>
</html>
