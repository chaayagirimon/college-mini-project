<html>

<head>
    <title> squash ladder </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- <h1 face="Lucida Fax" size="11" font color="black;"> -->
    <style>
        body {
            background-repeat: no-repeat;
            background-size: 100% 100%;
            /* background-attachment: fixed; */
            background-color: #a18d6c;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap');





table {
  width: 800px;
  border-right-color: #ffffff;
  margin-top: 100px;
  font-size: 18px;
  /* /* border: 1px solid #343a40; */
  border-collapse: collapse; 
}

th, td {
  /* border: 1px solid #343a40; */
  padding: 16px 24px;
  text-align: left;
}

th {
  background-color: #087f5b;
  color: #fff;
  width: 25%;
}

tbody tr:nth-child(odd){
  background-color: #f8f9fa;
}


tbody tr:nth-child(even){
  background-color: #e9ecef;
}

   
    </style>
</head>

<body background="images/squash.jpg">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Squash Ladder</a>
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home_user.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">score board<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <table style="margin-left: 225px;" >
        <thead>
          <tr>
            <th>SNO</th>
            <th>NAME</th>
            <th>GAMES WON</th>
            <th>GAMES LOST</th>
            <th>TOTAL GAMES PLAYED</th>
          </tr>
        </thead>
  
        <tbody>
        <?php
                $connect = mysqli_connect("localhost","root","","demo") or die("connection failed");
                $sql = "select * from top";
                $result = $connect-> query($sql);
                if($result-> num_rows>0){
                  while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["won"]."</td><td>".$row["lost"]."</td><td>".$row["total"]."</td></tr>";
                  }
                }
                ?>
        </tbody>      
      </table>

        </body>

</html>