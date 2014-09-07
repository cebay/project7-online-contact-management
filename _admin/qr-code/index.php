<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" type="text/css" href="../../bootstrap-3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-full-width">
            <div class="container mt-90">
                <div class="main-content">
                    <?php include("../partials/header.php"); ?>

                    <!--main-->
                    <div class="container">
                        <div class="row">
                          <!--left-->
                            <div class="col-md-3" id="leftCol">
                                <?php include("../partials/nav.php"); ?>
                            </div><!--/left-->
                          
                          <!--right-->
                          <div class="col-md-9">
                            
                            <div class="row">
                                <form role="form">
                                    <div class="col-xs-12 col-sm-4">
                                      <div class="form-group">
                                        <label for="con_fname" class="lb-size">First Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_fname" id="con_fname">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_lname" class="lb-size">Last Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_lname" id="con_lname">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_com_name" class="lb-size">Company Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_com_name" id="con_com_name">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_title" class="lb-size">Title:</label>
                                        <input type="text" class="form-control f-control-size" name="con_title" id="con_title">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_phone" class="lb-size">Telephone:</label>
                                        <input type="text" class="form-control f-control-size" name="con_phone" id="con_phone">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_email" class="lb-size">Email:</label>
                                        <input type="text" class="form-control f-control-size" name="con_email" id="con_email">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_url" class="lb-size">URL:</label>
                                        <input type="text" class="form-control f-control-size" name="con_url" id="con_url">
                                      </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                      <div class="form-group">
                                        <label for="con_street_name" class="lb-size">Street Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_street_name" id="con_street_name">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_city" class="lb-size">City:</label>
                                        <input type="text" class="form-control f-control-size" name="con_city" id="con_city">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_state_name" class="lb-size">State:</label>
                                        <input type="text" class="form-control f-control-size" name="con_state_name" id="con_state_name">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_postal_code" class="lb-size">Postal Code:</label>
                                        <input type="text" class="form-control f-control-size" name="con_postal_code" id="con_postal_code">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_country" class="lb-size">Country:</label>
                                        <input type="text" class="form-control f-control-size" name="con_country" id="con_country">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_note" class="lb-size">Note:</label>
                                        <textarea col="5" rows="4" class="form-control" name="con_note" id="con_note"></textarea>
                                      </div>
                                      <input type="button" id="qr_generate" value="Generate" class="btn btn-success pull-right btn-lg">
                                    </div>
                                </form>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="qr-image"></div>
                                </div>
                            </div>
                            

                          </div><!--/right-->
                        </div><!--/row-->
                    </div><!--/container-->
                </div>
            </div>
        </div>

        <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
        <script src="../../bootstrap-3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
          function img_create(src, alt, title) {
              var ua = window.navigator.userAgent;
              var msie = ua.indexOf('MSIE ');

              var img= msie? new Image() : document.createElement('img');
              img.src= src;
              if (alt!=null) img.alt= alt;
              if (title!=null) img.title= title;
              return img;
          }
          
          $("#qr_generate").click(function(){
            var base_uri = "http://chart.apis.google.com/chart";

            var con_fname       = document.getElementById("con_fname").value;
            var con_lname       = document.getElementById("con_lname").value;
            var con_com_name    = document.getElementById("con_com_name").value;
            var con_title       = document.getElementById("con_title").value;
            var con_phone       = document.getElementById("con_phone").value;
            var con_email       = document.getElementById("con_email").value;
            var con_url         = document.getElementById("con_url").value;
            var con_street_name = document.getElementById("con_street_name").value;
            var con_city        = document.getElementById("con_city").value;
            var con_state_name  = document.getElementById("con_state_name").value;
            var con_postal_code = document.getElementById("con_postal_code").value;
            var con_country     = document.getElementById("con_country").value;
            var con_note        = document.getElementById("con_note").value;

            var uri = base_uri + "?cht=qr&chs=190x190&chl=BEGIN:VCARD\nVERSION:2.1\nN:" + con_lname + ";" + con_fname + "\nFN:" + con_fname + " " + con_lname + "\nORG:" + con_com_name + "\nTITLE:" + con_title + "\nADR:;;" + con_street_name + ";" + con_city + ";" + con_state_name + ";" + con_postal_code + ";" + con_country + "\nTEL;WORK;VOICE:" + con_phone + "\nEMAIL;PREF;INTERNET:" + con_email + "\nURL:" + con_url + "\nNOTE:" + con_note + "\nEND:VCARD&choe=UTF-8&chld=L";

            var oImage = img_create(encodeURI(uri), "some alt", "some title");
            var oImageWrapper = document.getElementsByClassName("qr-image")[0];
            oImageWrapper.appendChild(oImage);
          });
        </script>
    </body>
</html>
