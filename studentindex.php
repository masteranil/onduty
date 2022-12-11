<!DOCTYPE html>
<html>
    <head>
        <title> onduty enrollment system </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>onduty </title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'studentheader.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What we organize</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img src="images/sona.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1>technical and non technical events</h1><!--title-->
                            <p><!--content-->
                            It also includes function, speakers forum , intra and inter depatment events
                            </p>

                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

           
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
