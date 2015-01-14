<?php include "php/header.php";?>

<body>
  
<?php include "php/nav.php";?>

            <section class="grayBackground">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                                    <div class="myBreadcrumbs">
                                            <ol class="breadcrumb">
                                              <li class="active">Doors</li>
                                              <li><a href="http://mcsit.es/rdl-supply/frames.php">Frames</a></li>
                                              <li><a href="http://mcsit.es/rdl-supply/hardware.php">Hardware</a></li>
                                            </ol>
                                    </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="accordionSection">
                            <div class="col-md-8">
                                <div class="productsAccordion">
                                    <h3>Doors</h3>
                                    <?php include "php/doors-accordion.php";?>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="requestquoteBox">    
                                    <form>

                                        <div class="form-group">
                                            <h3>Request A Quote</h3>
                                            <label for="textExample">Placeholder</label>
                                            <input type="text" class="form-control" id="textExample" placeholder="Text">
                                        </div>
                                        <div class="form-group">
                                            <label for="textExample">Placeholder</label>
                                            <input type="text" class="form-control" id="textExample" placeholder="Text">
                                        </div>
                                        <div class="form-group">
                                            <label for="textExample">Placeholder</label>
                                            <input type="text" class="form-control" id="textExample" placeholder="Text">
                                        </div>
                                        <div class="form-group">
                                            <label for="textExample">Placeholder</label>
                                            <input type="text" class="form-control" id="textExample" placeholder="Text">
                                        </div>

                                        <button type="submit" class="btn btn-info">Send</button>

                                    </form>
                                </div>  

                                <div class="row">
                                    <div class="customerserviceButton">
                                        <p class="customerButton"><a href="http://mcsit.es/rdl-supply/customer-service.php" class="btn btn-block"><span class="glyphicon glyphicon-user"></span> Customer Service <span class="serviceButton glyphicon glyphicon-chevron-right"></span></a></p>                                       
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php include "php/footer.php";?>
