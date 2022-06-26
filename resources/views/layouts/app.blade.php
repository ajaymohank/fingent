<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fingent</title>
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <!-- Styles -->
        <style>
            body{
  background-color:#dde8f1;
}
header {
    transition: all 0.3s ease-in-out;
    box-shadow: 0 1px 6px 0 rgba(214, 220, 239, 1);
    top: 0px;
    background-color: #fff;
    position: sticky;
    z-index: 40;
    height: auto;
}
.logo {
    padding: 26px 0px;
}
.logo a {
    color: #3a76cb;
    text-transform: capitalize;
    color: #000000;
    font-size: 35px;
    font-weight: 500;
    text-decoration: none;
}
.card-body{
    font-size: medium !important;
}
.mob-menu {
    display: none;
}
.main-menu {
    margin: 20px 0px;
    float: right;
}
.main-menu ul.nav {
    float: left;
    margin-right: 20px;
    list-style: none;
    padding-left: 0px;
    margin-bottom: 0px;
    padding-top:10px;
}
.nav li:first-child {
    margin-left: 0px;
}
.main-menu ul {  display: inline-block; }
.main-menu ul li {
    position: relative;
    display: inline-block;
    margin: 12px 20px;
}
.main-menu ul li a {
    font-size: 20px;
    font-weight: 500;
    line-height: 1.3;
    color: #3a76cb;
    display: block;
   text-decoration:none;
}
.main-menu ul.right-nav{   
 padding-left:0px;
}
.main-menu ul.right-nav li a {
    width: 150px;
    height: 45px;
    border-radius: 4px;
    background-color: #fff;
    text-align: center;
    color: #3a76cb;
    border: solid 1px #3a76cb;
    vertical-align: middle;
    display: table-cell;
}
.main-menu ul.right-nav li:last-child {
    margin-right: 0px;
}
.main-menu ul.right-nav li.active a {
    background-color: #3a76cb;
    color: #fff;
}
@media(max-width:1000px){
  .logo {
    display: inline-block;
    width: 78%;
    padding: 10px 10px 10px 0px;
}
.mob-menu {
    display: inline-block;
    width: 20%;
}
.mob-menu span {
    border: solid 2px #3a76cb;
    display: block;
    text-align: center;
    border-radius: 4px;
    padding: 2px 6px;
    width: 50px;
    color: #3a76cb;
    font-size: 25px;
    cursor: pointer;
} 
.main-menu {
    margin: 0px 0px 20px 0px;
    float: left;
    background-color: #f1f1f1;
    width: 100%;
    display: none;
} 
.main-menu ul {
    list-style: none;
    padding-left: 0px;
    margin-bottom: 0px;
    width: 100%;
}
  .main-menu ul.right-nav {
    text-align: center;
    margin-top: 6px;
}
ul.right-nav {
    margin-bottom: 10px;
}
.main-menu {
    margin: 0px 0px 20px 0px;
    float: left;
    background-color: #f1f1f1;
    width: 100%;
    display: none;
}
.main-menu ul li {
    display: block;
    width: 100%;
    margin: 0px;
}
 .nav li:first-child {
    margin-left: 0px;
}
.main-menu ul li a {
    padding: 10px 15px;
    display: block;
    border-bottom: solid 1px #e2e4e6;
    text-align: center;
}
 .main-menu ul.right-nav li {
    margin-left: 0px;
    margin-right: 30px;
    display: inline-block;
    width: 150px;
}
 .main-menu ul.right-nav li a {
    font-size: 18px !important;
}

}
        </style>
    </head>
    <body>
        <div>
            <header>
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-lg-12 col-xl-6">
                  <div class="logo">
                     <a href="/" title="logo"> Student Management System </a>
                  </div>
                </div>
               <div class="col-md-12 col-sm-12 col-lg-12 col-xl-6">
                  <div class="main-menu">
                    <ul class="nav">
                        <li><a href="{{ route('home') }}"> Staff </a> </li>
                        <li><a href="{{ route('marks') }}"> Marks </a> </li>
                    </ul>
                    
                  </div>
               </div>
            </div>
         </div>
      </header>
            
        </div>
        <div id="content-container">
            <div id="page-content">

                @yield('content')

            </div>
        </div>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @stack('js')



    </body>
</html>
