
<div id="instant-callback-div">
    <div class="instant-switch"></div>
    <div class="content-switcher">
        <h4>Instant Callback !</h4>

        <p>Please fill in your details below:</p>
        <form id="contactForm" name="contactForm-1" method="post" action="contact_me.php">
            <input type="text" name="name" id="name2" placeholder="Name" required/>
            <input type="number" name="mobile" id="mobile2" onChange="checkLength2()" placeholder="Number" required/>
            <input type="email" name="email" id="email2" onChange="validateForm()" placeholder="Email" required />
            <div id="success"></div>
            <input class="btn btn-default" id="savedata" type="submit" name="submit" value="SUBMIT"/>
        </form>
        <div class="clearfix"></div>
    </div>
</div>


<section class="main-section" id="service"><!--main-section-start-->
    <div class="container">
        <h2>Services</h2>
        <h6>We offer exceptional service with complimentary hugs.</h6>
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-paw"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Home Loan</h3>
                        <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                    </div>
                </div>
                <!--                <div class="service-list">
                                    <div class="service-list-col1">
                                        <i class="fa-gear"></i>
                                    </div>
                                    <div class="service-list-col2">
                <?php
                $a = Model_emicalculation::calculatevalue(200000, 9.5, 20);
                echo $a;
                ?>
                                    </div>
                                </div>-->
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-apple"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Loan against Property(LAP)</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-apple"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Balance Transfer</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-medkit"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>24/7 Support</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                <img src="assets/img/loan_services.jpg" alt="">

            </figure>

        </div>
    </div>
</section><!--main-section-end-->


<!--main-section alabaster-start-->
<section class="main-section" id="bankrates">
    <div class="container">
        <div class="row">
            <h3 class="col-lg-offset-5">Bank Rates</h3><br>
            <table class="table table-bordered table-striped table-hover ratestable">
                <thead>
                    <tr>
                        <th>
                            Sr. No.
                        </th>
                        <th>
                            Bank Name
                        </th>
                        <th>
                            Rate of Interest
                        </th>
                        <th>
                            Rate of Interest(Women)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <span><img src="assets/img/bank_logos/sbi.png"></span>
                        </td>
                        <td>
                            9.35
                        </td>
                        <td>
                            9.30
                        </td>
                    </tr>
                    <tr>
                        <td>
                             2
                        </td>
                        <td>
                            <span><img src="assets/img/bank_logos/hdfc.png"></span>
                        </td>
                        <td>
                             9.45
                        </td>
                        <td>
                             9.40
                        </td>
                    </tr>
                    <tr>
                        <td>
                             3
                        </td>
                        <td>
                             <span><img src="assets/img/bank_logos/icici.png"></span>
                        </td>
                        <td>
                             9.45
                        </td>
                        <td>
                             9.40
                        </td>
                    </tr>
                    <tr>
                        <td>
                             4
                        </td>
                        <td>
                             <span><img src="assets/img/bank_logos/lic.png"></span>
                        </td>
                        <td>
                             9.50
                        </td>
                        <td>
                             9.50
                        </td>
                    </tr>
                    <tr>
                        <td>
                             5
                        </td>
                        <td>
                             <span><img src="assets/img/bank_logos/indiabulls.gif"></span>
                        </td>
                        <td>
                             9.45
                        </td>
                        <td>
                             9.40
                        </td>
                    </tr>
                    <tr>
                        <td>
                             6
                        </td>
                        <td>
                             <span><img src="assets/img/bank_logos/dhfl.png"></span>
                        </td>
                        <td>
                             9.55
                        </td>
                        <td>
                             9.50
                        </td>
                    </tr>
                    <tr>
                        <td>
                             7
                        </td>
                        <td>
                             <span><img src="assets/img/bank_logos/axis.png"></span>
                        </td>
                        <td>
                             9.45
                        </td>
                        <td>
                             9.40
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--main-section alabaster-end-->



<section class="main-section client-part" id="client">
    <div class="container">
        <div>
            <h2>
                Our Clients
            </h2>
        </div>
        <div class="my-slider">
            <ul>
                <li>
                    <div class="clientstyle">

                        <img class="img-responsive col-lg-offset-5" src="assets/img/client-logo-icon.png"><br />
                        <h4>John Dagade</h4>    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tincidunt venenatis sem sed dapibus. Ut iaculis felis sit amet ligula vestibulum convallis. Sed placerat, diam a mollis suscipit, mauris arcu pharetra nisi, vitae porta diam nibh ac sapien. Nulla non tellus efficitur, euismod lectus sit amet, ultricies nibh. In dapibus erat tempus lacus tempus congue. Nulla facilisi. Etiam dapibus ipsum ut nisl dictum malesuada.

                            Nullam a ante tortor. Quisque fermentum diam in mauris cursus elementum. Nullam a vestibulum urna. Etiam et euismod metus. Sed aliquam sed nunc a porta. Quisque nec ligula bibendum, bibendum mauris non, interdum mi. Praesent sollicitudin velit felis, ac scelerisque erat lacinia at. In hac habitasse platea dictumst. Curabitur placerat velit ac imperdiet dignissim. Sed ut nunc purus. Etiam malesuada tellus ut nulla congue facilisis. In pretium metus ut tortor tincidunt aliquet. Aenean vitae tincidunt enim. Nulla id ultricies ante, sed fermentum ex. Nulla accumsan molestie sodales.

                        </p>

                    </div>
                </li>
                <li>
                    <div class="clientstyle">

                        <img class="img-responsive col-lg-offset-5" src="assets/img/client-logo-icon.png"><br />
                        <h4>John Dagade</h4>    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tincidunt venenatis sem sed dapibus. Ut iaculis felis sit amet ligula vestibulum convallis. Sed placerat, diam a mollis suscipit, mauris arcu pharetra nisi, vitae porta diam nibh ac sapien. Nulla non tellus efficitur, euismod lectus sit amet, ultricies nibh. In dapibus erat tempus lacus tempus congue. Nulla facilisi. Etiam dapibus ipsum ut nisl dictum malesuada.

                            Nullam a ante tortor. Quisque fermentum diam in mauris cursus elementum. Nullam a vestibulum urna. Etiam et euismod metus. Sed aliquam sed nunc a porta. Quisque nec ligula bibendum, bibendum mauris non, interdum mi. Praesent sollicitudin velit felis, ac scelerisque erat lacinia at. In hac habitasse platea dictumst. Curabitur placerat velit ac imperdiet dignissim. Sed ut nunc purus. Etiam malesuada tellus ut nulla congue facilisis. In pretium metus ut tortor tincidunt aliquet. Aenean vitae tincidunt enim. Nulla id ultricies ante, sed fermentum ex. Nulla accumsan molestie sodales.

                        </p>

                    </div>
                </li>
                <li>
                    <div class="clientstyle">

                        <img class="img-responsive col-lg-offset-5" src="assets/img/client-logo-icon.png"><br />
                        <h4>John Dagade</h4>    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tincidunt venenatis sem sed dapibus. Ut iaculis felis sit amet ligula vestibulum convallis. Sed placerat, diam a mollis suscipit, mauris arcu pharetra nisi, vitae porta diam nibh ac sapien. Nulla non tellus efficitur, euismod lectus sit amet, ultricies nibh. In dapibus erat tempus lacus tempus congue. Nulla facilisi. Etiam dapibus ipsum ut nisl dictum malesuada.

                            Nullam a ante tortor. Quisque fermentum diam in mauris cursus elementum. Nullam a vestibulum urna. Etiam et euismod metus. Sed aliquam sed nunc a porta. Quisque nec ligula bibendum, bibendum mauris non, interdum mi. Praesent sollicitudin velit felis, ac scelerisque erat lacinia at. In hac habitasse platea dictumst. Curabitur placerat velit ac imperdiet dignissim. Sed ut nunc purus. Etiam malesuada tellus ut nulla congue facilisis. In pretium metus ut tortor tincidunt aliquet. Aenean vitae tincidunt enim. Nulla id ultricies ante, sed fermentum ex. Nulla accumsan molestie sodales.

                        </p>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>


<section class="business-talking"><!--business-talking-start-->
    <div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
    <section class="main-section contact" id="contact">

        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <div class="contact-info-box address clearfix">
                    <h3><i class=" icon-map-marker"></i>Address:</h3>
                    <span>Office No.8 & 9, Shree Chamunda Harmony, Plot No.68A, 69 & 69A, Sector-18,Kamothe,<br>
                        Panvel, Navi Mumbai, Maharashtra 410209</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>Phone:</h3>
                    <span>9769697738</span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa-pencil"></i>email:</h3>
                    <span>info@loansolutions.co.in</span>
                </div>
                <div class="contact-info-box hours clearfix">
                    <h3><i class="fa-clock-o"></i>Hours:</h3>
                    <span><strong>Monday - Saturday:</strong> 10am - 6pm<br>Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                    <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">
                    <input class="input-text" type="text" name="" value="Your Name *" onfocus="if (this.value == this.defaultValue)
                                this.value = '';" onblur="if (this.value == '')
                                            this.value = this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Your E-mail *" onfocus="if (this.value == this.defaultValue)
                                this.value = '';" onblur="if (this.value == '')
                                            this.value = this.defaultValue;">
                    <textarea class="input-text text-area" cols="0" rows="0" onfocus="if (this.value == this.defaultValue)
                                this.value = '';" onblur="if (this.value == '')
                                            this.value = this.defaultValue;">Your Message *</textarea>
                    <input class="input-btn" type="submit" value="send message">
                </div>	
            </div>
        </div>
    </section>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Please provide your details for loan enquiry</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="home/insertit" method="POST">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="name" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="name" name="phone" class="form-control" id="phone">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal Home Loan-->
<div class="modal fade" id="LoanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Please provide your details for loan enquiry</h4>
            </div>
            <div class="modal-body">
                <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                    <div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">

                    </div>
                    <!--                    <div id="ecww-more" style="background:#333;font:normal 13px/1 Helvetica, Arial, Verdana, Sans-serif;padding:10px 0;color:#FFF;text-align:center;width:100%;clear:both;margin:0;clear:both;float:left;">
                                            <a style="background:#333;color:#FFF;text-decoration:none;border-bottom:1px dotted #ccc;" href="http://emicalculator.net/" title="Loan EMI Calculator" rel="nofollow" target="_blank">emicalculator.net</a>
                                        </div>-->
                </div><!-- EMI Calculator Widget END -->

            </div>

        </div>
    </div>
</div>
<!-- Modal Home Loan-->
<div class="modal fade" id="LoanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Please provide your details for loan enquiry</h3>
            </div>
            <div class="modal-body">
                <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                    <div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">

                    </div>
                    <!--                    <div id="ecww-more" style="background:#333;font:normal 13px/1 Helvetica, Arial, Verdana, Sans-serif;padding:10px 0;color:#FFF;text-align:center;width:100%;clear:both;margin:0;clear:both;float:left;">
                                            <a style="background:#333;color:#FFF;text-decoration:none;border-bottom:1px dotted #ccc;" href="http://emicalculator.net/" title="Loan EMI Calculator" rel="nofollow" target="_blank">emicalculator.net</a>
                                        </div>-->
                </div><!-- EMI Calculator Widget END -->

            </div>

        </div>
    </div>
</div>
<!-- Modal Mortgage Loan-->
<div class="modal fade" id="MortgageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Please provide your details for loan enquiry</h4>
            </div>
            <div class="modal-body">

                <div class="span4">
                    <form action="http://www.mlcalc.com/" method="post" onsubmit="return mlcalcCalculate(this)" class="form-horizontal">
                        <fieldset>
                            <input type="hidden" name="wl" value="en">
                            <div class="control-group">
                                <label class="control-label" for="ma">Purchase price:</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" id="ma" name="ma" class="input-small" value="250,000">
                                        <span class="add-on">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="dp">Down payment:</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" id="dp" name="dp" class="input-mini" value="10">
                                        <span class="add-on">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="mt">Mortgage term:</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" id="mt" name="mt" class="input-mini" value="30">
                                        <span class="add-on">years</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="ir">Interest rate:</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" id="ir" name="ir" class="input-mini" value="4.5">
                                        <span class="add-on">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="pt">Property tax:</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" id="pt" name="pt" class="input-mini" value="3,000">
                                        <span class="add-on">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="pi">Property insurance:</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" id="pi" name="pi" class="input-mini" value="1,500">
                                        <span class="add-on">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="mi">PMI:</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" id="mi" name="mi" class="input-mini" value="0.52">
                                        <span class="add-on">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">First payment date (month): <div class="input-append"> <input type="text" class="input-mini" name="sm" value="3"></div></label><br>

                            </div>
                            <div class="control-group">
                                <label class="control-label">First payment date (year): <div class="input-append"><input type="text" class="input-mini" name="sy" value="2010"></div></label><br>    
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="as">Amortization:</label>
                                <div class="controls">
                                    <label class="radio">
                                        <input type="radio" id="as1" name="as" class="input-mini" value="year" checked="checked">
                                        show by year
                                    </label>
                                    <label class="radio">
                                        <input type="radio" id="as2" name="as" class="input-mini" value="month">
                                        show by month
                                    </label>
                                    <label class="radio">
                                        <input type="radio" id="as3" name="as" class="input-mini" value="none">
                                        don't show
                                    </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Calculate</button>
                            </div>
                        </fieldset>
                    </form>

                    <div class="hide"> 
                        <a href="http://www.mlcalc.com/">Mortgage Calculator</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>
<!--

<form action="http://www.mlcalc.com/" method="post" onsubmit="return mlcalcCalculate(this)">
<input type="hidden" name="wl" value="en">
<label>Purchase price: <input type="text" name="ma" value="250,000"> $</label><br>
<label>Down payment: <input type="text" name="dp" value="10"> %</label><br>
<label>Mortgage term: <input type="text" name="mt" value="30"> years</label><br>
<label>Interest rate: <input type="text" name="ir" value="5.5"> %</label><br>
<label>Property tax: <input type="text" name="pt" value="3,000"> $</label><br>
<label>Property insurance: <input type="text" name="pi" value="1,500"> $</label><br>
<label>PMI: <input type="text" name="mi" value="0.52"> %</label><br>
<label>First payment date (month): <input type="text" name="sm" value="3"></label><br>
<label>First payment date (year): <input type="text" name="sy" value="2010"></label><br>
<label>Amortization:
   <label><input type="radio" name="as" value="year" checked="checked"> show by year</label>
   <label><input type="radio" name="as" value="month"> show by month</label>
   <label><input type="radio" name="as" value="none"> don't show</label>
</label><br><br>
<input type="submit" value="Calculate"><br><br>
</form>

<br><br>-->
