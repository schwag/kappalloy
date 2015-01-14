<?php include "php/header.php";?>

<body>

<?php include "php/nav.php";?>

          <section class="grayBackground">
                <div class="container">
                     <div class="row">
                        <div class="aboutSection">
                            <div class="col-md-12">
                                <div class="customerserviceBox">
                                    <h3>Customer Service</h3>

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                          <li class="active"><a href="#home" role="tab" data-toggle="tab">Contact the Credit Department</a></li>
                                          <li><a href="#profile" role="tab" data-toggle="tab">Make a Payment</a></li>
                                          <li><a href="#messages" role="tab" data-toggle="tab">Forms</a></li>
                                          <li><a href="#settings" role="tab" data-toggle="tab">Credit Application</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                        <div class="tab-pane active" id="home">
                                                <div class="contactCreditbox">
                                                      <h4><span class="glyphicon glyphicon-phone"></span> Phone</h4>
                                                          <p>Phone: <a href="tel:214-630-3965">214.630.3965 </a>ext. 1143</p>
                                                          <p>Fax: 214-560-0359</p>
                                                      <h4><span class="glyphicon glyphicon-send"></span> Email</h4>
                                                          <p><a href="mailto:youremailaddress">CREDIT@RDLSUPPLY.COM</a></p>    
                                                      <h4><span class="glyphicon glyphicon-map-marker"></span> Remittance Address</h4>
                                                          <p>RDL Supply</br>
                                                            P.O. Box 59985</br>
                                                            Dallas, TX 75229</p>                                                                                                                                 
                                                </div>
                                        </div>

                                        <div class="tab-pane" id="profile">
                                          <div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean blandit ultricies pharetra. Maecenas ac sem porta, vehicula nisl sit amet, feugiat felis. Morbi at gravida arcu, sed sollicitudin dui. Vestibulum iaculis nulla in metus commodo lacinia. Phasellus suscipit porttitor leo at ornare. Curabitur quis nulla tortor. Aliquam accumsan aliquet turpis, eget pulvinar sem interdum a.</p>

                                            <p>Integer vestibulum facilisis quam a iaculis. Duis elementum, nisl quis commodo tincidunt, diam nulla iaculis odio, in porta mi dolor sodales orci. Duis massa sapien, cursus id justo eget, tristique tristique nisl. Integer viverra, purus quis semper fringilla, augue tellus faucibus risus, vel iaculis elit felis eu nunc. Vivamus imperdiet aliquet mauris, eu tempus sapien pellentesque congue. Nam quis diam dui. Pellentesque mollis sem eu mi congue luctus. Aliquam fermentum vel ex eget accumsan.</p>
                                          </div>
                                        </div>

                                        <div class="tab-pane" id="messages">
                                          <div class="row">
                                              <div class="col-md-6">
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">Texas Resale Certificate</button></a>
                                                </div>
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">Texas Exemption Certification</button></a>
                                                </div>
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">Uniform Sales & Use Tax Certificate</br>
                                                    Multijurisdiction</button></a>
                                                </div>
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">Job information sheet</button></a>
                                                </div>
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">Privacy policy</button></a>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">Cash Customer Setup Form</button></a>
                                                </div>
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">EFT Customer Authorization Form</button></a>
                                                </div>
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">HUB Certificate - State of Texas</button></a>
                                                </div>
                                                <div class="creditapplicationButton">
                                                  <a href="#" target="_blank"><button type="button" class="btn btn-default">Women-Owned Business Certification</button></a>
                                                </div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="tab-pane" id="settings">
                                          <div class="creditapplicationButton">
                                            <a href="pdf/credit_app_8-15-13.pdf" target="_blank"><button type="button" class="btn btn-default">Click Here For Our Credit Application</button></a>
                                          </div>
                                          <div class="faqSection">
                                            <h3>FAQ</h3>
                                              <?php include "php/faq-accordion.php";?>
                                              <p>In order for the credit application process to go as quickly and as smoothly as possible, it is imperative that the entire application be completed, all reference fax and telephone numbers are current and that an authorized signer signs the application. </p>
                                          </div>
                                        </div>
                                        
                                        </div><!--end of tab content-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php include "php/footer.php";?>
