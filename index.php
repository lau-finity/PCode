<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Scraper</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
  

  <style>

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .container {
      background-image:url("background-image.jpg");
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0.9;
      padding-top: 150px;
    }

    p {
      padding-top: 15px;
      padding-bottom: 15px;
    }

    .black {
      color: black;
      text-transform: bold;
      font-family: verdana;
      font-weight: 1.0px;
    }

    button {
      margin-top: 20px;
    }
    

  </style>

  </head>

  <body> 

      <div class="container">

          <div class="row">

            <div class="col-md-6 col-md-offset-3">

            <center>

              <h1 class="black">Weather Prognosticator</h1>

              <p class="lead black">Enter your city below to get a forecast for the weather.</p>

              <form>

              <div class="form-group">

                <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco, etc."/>

              </div>

                <button class="btn btn-success btn-lg">Find My Weather</button>

              </form>

              </center>

            </div>
            
          </div>
        
      </div>

 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>