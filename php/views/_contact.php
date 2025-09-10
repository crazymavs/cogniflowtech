 <!-- Section Header Title -->
    <section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <div class="col-md-12">
              <h2>Contact</h2>
            </div>
          </div>
        </div><!-- End Row -->
      </div><!-- End container -->

    </section><!--  End Section -->
    <!-- Section BreadCrumb -->
    <div class="no-padding border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb breadcrumb-finance">
              <li><a href="index.html"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
              <li class="active">Contact</li>
            </ol>
          </div><!--  End col -->
        </div> <!-- End Row -->
      </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>

    <!-- Section form contact -->
    <section class="padding-top:50px;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 left-contact">
            <h4> Send Us a Message</h4>
            <form class="form-inline form-contact-finance" name="contact" method="post" action="send_form_email.php">
              <div class="row">
                <div class="form-group col-sm-12  col-md-4">
                  <input type="text" class="form-control" name="yourName" id="yourName" placeholder="Your Name">
                </div>
                <div class="form-group col-sm-12 col-md-4">
                  <input type="email" class="form-control" name="yourEmail" id="yourEmail" placeholder="Your Email">
                </div>
                <div class="form-group col-sm-12 col-md-4">
                  <input type="text" class="form-control" name="yourPhone" id="phoneNumber" placeholder="Phone Number">
                </div>
              </div>
              <div class="input-content">
                <div class="form-group form-textarea">
                  <textarea id="textarea" class="form-control" name="comments" rows="6"
                    placeholder="Your Messages"></textarea>
                </div>
              </div>
              <button class="ot-btn large-btn btn-rounded  btn-main-color btn-submit">Send Mail</button>
            </form> <!-- End Form -->
          </div> <!-- End col -->
          <div class="col-md-4 right-contact">
            <h4>Contact Info</h4>
            
            <ul class="address">
              <li>
                <p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp; 306, Vaastu Lavender Apts, 16/1
                  Mylasandra, BBMP
                  Kengeri, Bangalore 560059</p>
              </li>
              <li>
                <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; +91-9987156436</p>
              </li>

              <li>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp; info@cogniflowtech.com</p>
              </li>
              <li>
                <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp; Mon-Fri 09:00 - 17:00</p>
              </li>
            </ul>
            </div> <!-- End col -->
        </div>
        <div class="md-col-12">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d578.0859186192357!2d77.50285976391477!3d12.915239781930007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f1d10555555%3A0x699c36a2e52a2f9a!2sVaastu%20Lavender%20Apartment!5e0!3m2!1sen!2sin!4v1756368125280!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </section>
    <!-- End Section -->
    
         <!-- Section Text 3 Column-->
    <section class="bg-grey">
      <div class="container">
        <div class="some-row" >
          <div class="three-column-text ">
            <h2 class="title ">To know more....</h2>
          </div> <!-- End 3 column text -->
          <div class="">
              <a href="<?= $asset_base ?>contact">
                <button type="button" class="ot-btn large-btn btn-rounded btn-main-color btn-submit">Contact Us</button>
                </a>
            </div>
        </div><!-- End row -->
      </div><!-- End Container -->
    </section><!-- End Section -->
