@extends('blood.frontend.layout.frontend')
@section('title','Contact')
@section('content')
<section class="page-header" data-stellar-background-ratio="1.2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Contact Us</h3>
                <p class="page-breadcrumb"><a href="#">Home</a> / Contact</p>
            </div>
        </div> 
    </div> 
</section>

<section class="section-content-block section-contact-block no-bottom-padding">
    <div class="container">
        <div class="row">
            <div class ="col-md-12">
                <h2 class="contact-title">Contact us</h2>                           
            </div>               
            <div class="col-md-3">
                <ul class="contact-info">
                    <li>
                        <span class="icon-container"><i class="fa fa-home"></i></span>
                        <address>Dhaka, Bangladesh</address>
                    </li>
                </ul> 
            </div>
            <div class="col-md-3">
                <ul class="contact-info">
                    <li>
                        <span class="icon-container"><i class="fa fa-phone"></i></span>
                        <address><a href="tel:+8801885738929">+8801885738929</a></address>
                    </li>
                </ul>     
            </div>

            <div class="col-md-3">
                <ul class="contact-info">
                    <li>
                        <span class="icon-container"><i class="fa fa-envelope"></i></span>
                        <address><a href="mailto: support@shagor.xyz">support@shagor.xyz</a></address>
                    </li>
                </ul>    
            </div>

            <div class="col-md-3">
                <ul class="contact-info">
                    <li>
                        <span class="icon-container"><i class="fa fa-globe"></i></span>
                        <address><a href="https://blood.shagor.xyz">www.blood.shagor.xyz</a></address>
                    </li>
                </ul>     
            </div>      
        </div> 
    </div>
</section>

<section class="section-content-block section-contact-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInLeft">
                <div class="contact-form-block">
                    <h2 class="contact-title">Say hello to us</h2>
                    <form role="form" action="{{ route('frontend.mail.send') }}" method="post" id="contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="user_name" name="name" placeholder="Name" data-msg="Please Write Your Name" />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" id="user_email" name="email" placeholder="Email" data-msg="Please Write Your Valid Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email_subject" name="subject" placeholder="Subject" data-msg="Please Write Your Message Subject" />
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="email_message" id="message" placeholder="Message" data-msg="Please Write Your Message" ></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-custom">Send Now</button>
                        </div>
                    </form>
                </div> 
            </div> <!--  end col-sm-6  -->
            <div class="col-sm-6 wow fadeInRight">
                <h2 class="contact-title">Our Location</h2>
                <div class="section-google-map-block wow fadeInUp">
                    <div id="map_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.460305753523!2d90.37582356352735!3d23.828192895379836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14a3366b005%3A0x901b07016468944c!2sMirpur%20DOHS%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1667228781349!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</section>
@endsection