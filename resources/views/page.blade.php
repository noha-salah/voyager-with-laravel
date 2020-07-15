
@extends('layout.app')
@section('content')

{{
  setting('site.title')
}}
<div class="section padding_layout_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>{{ $page->title }}</h2>
                        <p class="large">{!! $page->body !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="full text_align_center margin_bottom_30">
                    <div class="center">
                        <div class="icon"> <img src="images/it_service/i1.png" alt="#" /> </div>
                    </div>
                    <h4 class="theme_color">Data recovery</h4>
                    <p>Perspiciatis eos quos totam cum minima aut!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="full text_align_center margin_bottom_30">
                    <div class="center">
                        <div class="icon"> <img src="images/it_service/i2.png" alt="#" /> </div>
                    </div>
                    <h4 class="theme_color">Computer repair</h4>
                    <p>Perspiciatis eos quos totam cum minima aut!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="full text_align_center margin_bottom_30">
                    <div class="center">
                        <div class="icon"> <img src="images/it_service/i3.png" alt="#" /> </div>
                    </div>
                    <h4 class="theme_color">Mobile service</h4>
                    <p>Perspiciatis eos quos totam cum minima aut!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="full text_align_center margin_bottom_30 margin_0">
                    <div class="center">
                        <div class="icon"> <img src="images/it_service/i4.png" alt="#" /> </div>
                    </div>
                    <h4 class="theme_color">Network solutions</h4>
                    <p>Perspiciatis eos quos totam cum minima aut!</p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 35px">
            <div class="col-md-8">
                <div class="full margin_bottom_30">
                    <div class="accordion border_circle">
                        <div class="bs-example">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Recovery Photo, Image, Video and Audio<i class="fa fa-angle-down"></i></a> </p>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i> Mobile Phone Recovery<i class="fa fa-angle-down"></i></a> </p>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full" style="margin-top: 35px;">
                    <h3>Need file recovery?</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt explicabo.. </p>
                    <p><a class="btn main_bt" href="#">Read More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="contact_us_section">
                        <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
                        <div class="inner_cont">
                            <h2>REQUEST A FREE QUOTE</h2>
                            <p>Get answers and advice from people you want it from.</p>
                        </div>
                        <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <ul class="brand_list">
                        <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>
                        <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>
                        <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>
                        <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>
                        <li><img src="images/it_service/brand_icon5.png" alt="#" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="#" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
