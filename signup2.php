<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
      width: 360px;
      padding: 8% 0 0;
      margin: auto;
    }
    .form {
      position: relative;
      z-index: 1;
      background: #FFFFFF;
      max-width: 360px;
      margin: 0 auto 100px;
      padding: 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }
    .form button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 0;
      background: #4CAF50;
      width: 100%;
      border: 0;
      padding: 15px;
      color: #FFFFFF;
      font-size: 14px;
      -webkit-transition: all 0.3 ease;
      transition: all 0.3 ease;
      cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
      background: #43A047;
    }
    .form .message {
      margin: 15px 0 0;
      color: #b3b3b3;
      font-size: 12px;
    }
    .form .message a {
      color: #4CAF50;
      text-decoration: none;
    }
    .form .register-form {
      display: none;
    }
    .container {
      position: relative;
      z-index: 1;
      max-width: 300px;
      margin: 0 auto;
    }
    .container:before, .container:after {
      content: "";
      display: block;
      clear: both;
    }
    .container .info {
      margin: 50px auto;
      text-align: center;
    }
    .container .info h1 {
      margin: 0 0 15px;
      padding: 0;
      font-size: 36px;
      font-weight: 300;
      color: #1a1a1a;
    }
    .container .info span {
      color: #4d4d4d;
      font-size: 12px;
    }
    .container .info span a {
      color: #000000;
      text-decoration: none;
    }
    .container .info span .fa {
      color: #EF3B3A;
    }
    /* body {
      background: #a18d6c; 
      background: "0600776f-047c-4853-92f2-bb6a87601341.jpg";
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      font-family: "Roboto", sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;      
    } */
    body {
    /* background-position: center; */
    background-repeat: no-repeat;
    background-size: cover;
    }
    .header{
            position: absolute;
            top: calc(50% - 35px);
            /* left: calc(50% - 255px); */
            right: calc(30% - 50px);
            z-index: 2;
        }

        .header div{
            float: left;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 35px;
            font-weight: 200;
        }

    

        .login{
            position: absolute;
            top: calc(50% - 75px);
            /* right: calc(2% - 20px);  */
            height: 150px;
            width: 350px;
            padding: 10px;
            z-index: 2;
        }

        .login input[type=text]{
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2px;
            color: rgb(0, 0, 0);
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
        }

        .login input[type=password]{
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2px;
            color: rgb(0, 0, 0);
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
            margin-top: 10px;
        }

        .login input[type=button]{
            width: 260px;
            height: 35px;
            background: rgb(255, 255, 255);
            border: 1px solid #fff;
            cursor: pointer;
            border-radius: 2px;
            color: #a18d6c;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 6px;
            margin-top: 10px;
        }

        .login input[type=button]:hover{
            opacity: 0.8;
        }

        .login input[type=button]:active{
            opacity: 0.6;
        }

        .login input[type=text]:focus{
            outline: none;
            border: 1px solid rgba(0, 0, 0, 0.9);
        }

        .login input[type=password]:focus{
            outline: none;
            border: 1px solid rgba(0, 0, 0, 0.9);
        }

        .login input[type=button]:focus{
            outline: none;
        }

        ::-webkit-input-placeholder{
        color: rgba(0, 0, 0, 0.6);
        }

        ::-moz-input-placeholder{
        color: rgba(255,255,255,0.6);
        }
  </style>
</head>
  <body background="images/squash1.jpg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Squash Ladder</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="top.html">score board</a>
            </li> -->
            <li class="nav-item active">
                <a class="nav-link" href="login2.php">login</a>
              </li>
          </ul>
        </div>
      </nav>
    <div class="login-page">
      <div class="form">
        <!-- <form class="register-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
         
          <button>create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form> -->
        SIGN UP <br><br>
        <form class="login-form" action="signup.php" method="POST">

          <!-- <input type="text" placeholder="email address"/> -->
          <input type="text" placeholder="username" name="user" required/>
          <input type="password" placeholder="password" name="password" required/>
          <button type="submit" value="signup">signup</button>
          <p style="font-size: 90%;"><?php echo $_GET['err'] ?></p>
          <p style="font-size: 80%;">already a member? <a href = "login2.php">login</a></p>
        </form>
      </div>
    </div>
  </body>
</html>