<!--
   /**
    * Class: CST-336
    * Final Project: HTML, CSS, Node.js and Express.js
    * Authors:
    * - Victor Ramirez
    * - Aboubacar Diawara
    * - Juan Sebastian Delgado
    * - Cristian Palomo-Ramirez
    **/
    -->
    <!DOCTYPE html>
<html lang="en">
   <head>
      <title>Landing Gear</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <style>
         /* Remove the navbar's default margin-bottom and rounded borders */ 
         .navbar {
         margin-bottom: 0;
         border-radius: 0;
         }
         /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
         .row.content {height: 450px}
         /* Set gray background color and 100% height */
         .sidenav {
         padding-top: 20px;
         background-color: #f1f1f1;
         height: 100%;
         }
         /* Set black background color, white text and some padding */
         footer {
         background-color: #555;
         color: white;
         padding: 15px;
         }
         /* On small screens, set height to 'auto' for sidenav and grid */
         @media screen and (max-width: 767px) {
         .sidenav {
         height: auto;
         padding: 15px;
         }
         .row.content {height:auto;} 
         }
      </style>
   </head>
   <body>
      <form action="submit.html">
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                  </button>
                  <a class="navbar-brand" href="#">Team Logo</a>
               </div>
               <!-- end of class="navbar-header" -->
               <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                     <li class="active"><a href="#">Home</a></li>
                     <li><a href="#">My Reservations</a></li>
                     <li><a href="dataTable.html">Data Table Selection Option</a></li>
                     <li><a href="dataFilter.html">Data Filter Option</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin Login </a></li>
                  </ul>
               </div>
               <!-- end of class="collapse navbar-collapse" -->
            </div>
            <!-- end of class="container-fluid -->
         </nav>
         <!-- end of class="navbar navbar-inverse" -->
         <div class="container-fluid text-center">
            <!-- Remove the link menu 
               <div class="row content">
                 <div class="col-sm-2 sidenav">
                   <p><a href="#">Link</a></p>
                   <p><a href="#">Link</a></p>
                   <p><a href="#">Link</a></p>
                 </div>
               -->
            <div class="col-sm-8 text-left">
               <h1>Welcome to Landing Gear</h1>
               <p>Please select a flight. You can search flight by Flight, Airport or Date.</p>
               <hr>
               <h3>Find Flight</h3>
               <p>By Flight...</p>
               <!-- Dropdown by Flight -->        
               <div class="form-group">
                  <label for="sel1">Select list:</label>
                  <select class="form-control" id="sel1">
                     <option>Select</option>
                     <option>Flight DY7076 Oakland to Barcelona Tuesday October, 15, 2019</option>
                     <option>Flight WN1785 Sacramento to Portland Wednesday October, 16, 2019</option>
                     <option>Flight DY7116 Los Angeles to Rome Wednesday October, 16, 2019</option>
                     <option>Flight AS3354 San Jose to Dallas Wednesday October, 16, 2019</option>
                  </select>
               </div>
               <p>By Airport...</p>
               <!-- Dropdown by Airport -->        
               <div class="form-group">
                  <label for="sel2">Select list:</label>
                  <select class="form-control" id="sel2">
                     <option>Select</option>
                     <option>Oakland to Barcelona Flight DY7076 Tuesday October, 15, 2019</option>
                     </option>            
                     <option>Sacramento to Portland Flight WN1785 Wednesday October, 16, 2019</option>
                     <option>Los Angeles to Rome Flight DY7116 Wednesday October, 16, 2019</option>
                     <option>San Jose to Dallas Flight AS3354 Tuesday, October 15, 2019</option>
                  </select>
               </div>
               <p>By Date...</p>
               <!-- Dropdown by Date -->        
               <div class="form-group">
                  <label for="sel3">Select list:</label>
                  <select class="form-control" id="sel3">
                     <option>Select</option>
                     <option>Tuesday October, 15, 2019 Oakland to Barcelona Flight DY7076</option>
                     <option>Wednesday October, 16, 2019 Sacramento to Portland Flight WN1785</option>
                     <option>Wednesday October, 16, 2019Los Angeles to Rome Flight DY7116</option>
                     <option>Tuesday, October 15, 2019 San Jose to Dallas Flight AS3354</option>
                  </select>
               </div>
               <input class="btn btn-primary" type="submit" value="Submit">        
            </div>
            <!-- end of class="col-sm-8 text-left" -->      
            <!-- Remove the ad bar 
               <div class="col-sm-2 sidenav">
                 <div class="well">
                   <p>ADS</p>
                 </div>
                 <div class="well">
                   <p>ADS</p>
                 </div>
               </div> -->
         </div>
         <!-- end of div class="container-fluid text-center" -->
      </form>
      <footer class="container-fluid text-center">
         <p>Footer Text</p>
      </footer>
   </body>
</html>