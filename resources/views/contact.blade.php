@extends('layout.app')


@section('content')

<div class="page-title parallax parallax4"> 
    	<div class="overlay"></div>            
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h2 class="title">CONTACT US</h2>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">
                          
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /page-title parallax -->
	
      <section class="flat-row contact-page pad-top-134">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">                                    
                                   <img src="images/icon/c1.png" alt="image">
                                </div> 
                                <div class="details">
                                    <h5>Our Location</h5>
                                    <p>Department of Computer EngineeringPlot No. 2 & 3, Sector - 16, Near Thana Naka, Khandagao, New Panvel,Navi Mumbai, Maharashtra 410206</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="images/icon/c2.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Contact us Anytime</h5>
                                    <p>Moin: 7738545542
                                    <br>Munaf: 8652524925
                                    <br>Haaris: 7977024868
                                    </p><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="images/icon/c3.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Write Some Words</h5>
                                    <p>connect@programmersclub.co.in</p>
                                    <br><br><br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row">
                    <div class="flat-spacer d74px"></div>
                </div>

                <div id="respond" class="comment-respond contact style2">
                    <h1 class="title comment-title">Leave a Message</h1>
                    <form id="contactform" class="flat-contact-form style2 bg-dark height-small" method="post" action="./contact/contact-process.php">
                        <div class="field clearfix">      
                            <div class="wrap-type-input">                    
                                <div class="input-wrap name">
                                    <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required>
                                </div>
                                <div class="input-wrap email">
                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required>
                                </div>
                                <div class="input-wrap last Subject">
                                    <input type="text" value="" placeholder="Subject (Optinal)" name="subject" id="subject" >
                                </div>  
                            </div>
                            <div class="textarea-wrap">
                                <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required></textarea>
                            </div>
                        </div>
                        <div class="submit-wrap">
                            <button class="flat-button bg-orange">Send Your Message</button>
                        </div>
                    </form><!-- /.comment-form -->                     
                </div><!-- /#respond -->
            </div><!-- /.container -->   
        </section>

        <!-- Map -->
        <section class="row-map">
            <div class="container-fluid">
                <div class="row">
                    <div id="map" style="width: 100%; height: 559px; "></div> 
                </div>
            </div><!-- /.container -->
        </section>

@endsection