<!doctype html>
<html lang="en">
  <head>
    <title>Social Networks API's</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <style>
        body{
            background: url(bees.jpg) center center fixed;
            background-size: cover;
            text-align: center;
            font-family: 'Arvo',serif;
        }
        .jumbotron{
            background-color: transparent;
            color: cyan;
            text-shadow: 1px 1px 2px black; 
        }
        .jumbotron h1{
            letter-spacing: 2px;
        }
        .form-horizontal{
            margin-top: 60px;
        }
    </style>
  </head>
  <body>
    <!-- facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v14.0" nonce="MXMlG0Br"></script>

    <!-- whatsapp -->
    <script>  
    //user-defined function to open and share web content on WhatsApp  
    function openWhatsApp() {  
        window.open('whatsapp://send?text= https://github.com/mbpfilho');  
    }  
</script>  


    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Join us and build Freedom</h1>
            <p>Make freedom, love freedom, spread freedom</p>
        </div>

        <form class="form-horizontal">
            <div class="form-group row justify-content-center">
                <div class="col-8">
                    <input type="email" id="email" placeholder="Your email" class="form-control">
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-6">
                    <input type="submit" id="submit" value="Subscribe" class="btn btn-info btn-lg">
                </div>
            </div>
        </form>

        <div class="row">
            <!-- facebook button -->
            <div class="offset-sm-3 col-sm-2">
                <div class="fb-like" data-href="https://github.com/mbpfilho" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
            </div>

            <!-- whatsapp button -->
            <div class="col-sm-2">
                <!-- create an image icon to open the WhatsApp onclick -->     
                <img src = "zap2.png" height="45" size="45" onclick="openWhatsApp()">
            </div>

            <!-- twitter button -->
            <div class="col-sm-2">
            <!-- a href="https://twitter.com/intent/tweet?button_hashtag=LoveTwitter&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false">Tweet #LoveTwitter</a -->
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=https://github.com/mbpfilho">Tweet</a>
            </div>

            twitter timeline
        </div>

        <!-- twitter timeline -->
        <div></div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>