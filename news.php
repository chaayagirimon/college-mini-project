<!DOCTYPE html>
<html>
    <head>
        <title> Squash News</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="Stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    </head>
    <style>
        body {
    font-family: 'helvetica', 'sans-serif';
    margin: 0;
    background-color: #a18d6c;
    }


   

    .flex {
        display: flex;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
        justify-content: space-between;
    }

    .badge {
        padding: 9px 20px;
        color: #eee;
        display: inline-block;
        text-transform: uppercase;
        font-weight: 600;
        text-align: center;
        font-size: 0.75em;
    }

    

    .shade {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.7);
    }
    /* end: global style rules */
    
    /* start: game types styles */
   

    #game-types-boxes .box {
        flex-basis: 25%;
        position: relative;
        height: 380px;
    }

    #game-types-boxes .box.new {
        background: url('images/squash1.jpg') top center no-repeat;
        background-size: cover;
    }

    #game-types-boxes .box.strategy {
        background: url('images/squash1.jpg') top center no-repeat;
        background-size: cover;
    }

    #game-types-boxes .box.rpg {
        background: url('images/squash1.jpg') top center no-repeat;
        background-size: cover;
    }

    #game-types-boxes .box.racing {
        background: url('images/squash1.jpg') top center no-repeat;
        background-size: cover;
    }

    #game-types-boxes .box .badge {
        position: relative;
        z-index: 2;
        top: 20px;
        left: 20px;
    }

    #game-types-boxes .box .contents {
        position: absolute;
        z-index: 2;
        bottom: 20px;
        left: 0;
        color: #eee;
        padding: 0 35px 0 25px;
    }

    #game-types-boxes .box .contents a {
        font-size: 0.8em;
        font-weight: 300;
        color: #999;
    }
    a.fill-div {
    display: block;
    height: 100%;
    width: 100%;
    text-decoration: none;
    }
    /* end: game types styles */

    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Squash Ladder</a>
            
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="home_user.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">News<span class="sr-only">(current)</span></a>
                </li>
            
              </ul>
            </div>
          </nav>

        <main>

            <section id="game-types-boxes" style="margin-top: 100px;">
                <div class="flex">
                    <div class="box new">
                    <a href="sample_news.php" class="fill-div">
                        <div class="shade"></div>
                        <span class="badge new">New</span>
                        <div class="contents">
                            <h4>regional match cancelled</h4>
                            <p>Due to incessant rain in Chennai, the Tamil Nadu...</p>
                        </div>
                        </a>
                    </div>

                    <!-- <div class="box strategy">
                        <div class="shade"></div>
                        <span class="badge strategy">New</span>
                        <div class="contents">
                            <h4>Suspendisse ut justo tem por, rutrum</h4>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing elit.</p>
                        </div>
                    </div> -->

                    <div class="box rpg">
                        <a href="#" class="fill-div">
                        <div class="shade"></div>
                        <span class="badge rpg">New</span>
                        <div class="contents">
                            <h4>Victory for Wendy</h4>
                            <p>Two time champion Wendy bags another cup in the interstate squash summit.</p>
                        </div>
                        </a>
                    </div>

                    <div class="box rpg">
                    <a href="#" class="fill-div">
                        <div class="shade"></div>
                        <span class="badge new">New</span>
                        <div class="contents">
                            <h4>Due to incessant rains regional match cancelled</h4>
                            <p>The rain is said to continue for the next 3 days...</p>
                        </div>
                        </a>
                    </div>

                    <div class="box racing">
                        <a href="#" class="fill-div">
                        <div class="shade"></div>
                        <span class="badge new">New</span>
                        <div class="contents">
                            <h4>Due to incessant rains regional match cancelled</h4>
                            <p>The rain is said to continue for the next 3 days. The TN regional match is said to be kept later</p>
                        </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <!-- <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script> -->
    </body>
</html>