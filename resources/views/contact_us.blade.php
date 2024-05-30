@extends('layouts.app')
@section('content')
<div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>Contact</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Accueil </a>&nbsp; / &nbsp; </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	  <!-- contact_icon_section start-->
    <div class="contact_icon_section jb_cover">
        <div class="container">
            <div class="row">
			   <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>contactez nous</h3>

                        {{-- <p>Your next level Product developemnt company assets</p> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					 <h4>contact us</h4>
                        <div class="contact_rotate">
                          <i class="fas fa-phone"></i>
                        </div>

                        <p>+237-698549128

                            <br> +237-6999999</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					 <h4>Email</h4>
                        <div class="contact_rotate">
                           <i class="fas fa-envelope"></i>
                        </div>

                        <p><a href="#">contact.bullGroup@gmail.com </a>
                        <a href="#">lucfotso0@gmail.com </a>
                        </p>                {{-- <br><a href="#">support@example.com</a></p> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					   <h4>location</h4>
                        <div class="contact_rotate">

						     <i class="fas fa-map-marker-alt"></i>
                        </div>

                        <p>Douala

                            <br> Nyalla pariso</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info section end -->
	  <!-- map wrapper  start-->
<div class="contact_field_wrapper comments_form" style="">
                        <div class="jb_heading_wraper left_rivew_heading">
                        <h3>envoyez nous un mail</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, --}}
                            {{-- <br> sed do eiusmod tempor incididunt </p> --}}
                        </div>
                        <form action="{{route('mail')}}" method="GET">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-pos">
                                            <div class="form-group i-name">

                                                <input type="text" class="form-control require" name="full_name"  id="namTen-first" placeholder=" Name*">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.col-md-12 -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-e">
                                            <div class="form-group i-email">
                                                <label class="sr-only">Email </label>
                                                <input type="email" class="form-control require" name="email"  id="emailTen" placeholder=" Email *" data-valid="email" data-error="Email should be valid.">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-m">
                                            <div class="form-group i-message">

                                                <textarea class="form-control require" name="message" rows="5" id="messageTen" placeholder=" Message"></textarea>
                                                <i class="fas fa-comment"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <div class="tb_es_btn_div">
                                            <div class="response"></div>
                                            <div class="tb_es_btn_wrapper">
                                                <button type="submit" class="submitForm">envoyer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>


	  <!-- map wrapper  end-->
	  <!-- news app wrapper start-->
    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->

@endsection
