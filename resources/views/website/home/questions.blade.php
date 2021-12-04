@extends('layouts.web')
@section('title', 'Hỏi đáp')
@section('content')

  <!--faq area start-->
  <div class="faq_content_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="faq_content_wrapper">
                                        <h4>Những câu hỏi thường gặp, bạn có thể tìm thấy câu trả lời cho mình</h4>
                                    

                                    </div>
                                </div>
                            </div>  
                        </div>
                        
                        
                         <!--Accordion area-->
                        <div class="accordion_area">
                            <div class="row">
                                <div class="col-12"> 
                                    <div id="accordion" class="card__accordion">
                                      <div class="card card_dipult">
                                        <div class="card-header card_accor" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Hướng dẫn cách thay đổi/ cập nhật số điện thoại liên kết với tài khoản?

                                              <i class="fa fa-plus"></i>
                                              <i class="fa fa-minus"></i>

                                            </button>

                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                          <div class="card-body">
                                               <p>Trên Ứng dụng, vui lòng đăng nhập vào tài khoản, chọn mục Cá nhân > Thông tin tài khoản </p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingTwo">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Làm thế nào để tôi đặt hàng qua website?
                                               <i class="fa fa-plus"></i>
                                               <i class="fa fa-minus"></i>

                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>1. Đăng nhập tài khoản</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingThree">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                             Aenean elit orci, efficitur quis nisl at, accumsan?
                                               <i class="fa fa-plus"></i>
                                               <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfour">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                             Pellentesque habitant morbi tristique senectus et netus?
                                               <i class="fa fa-plus"></i>
                                               <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfive">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                             Nam pellentesque aliquam metus?
                                               <i class="fa fa-plus"></i>
                                               <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseseven" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingsix">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Aenean elit orci, efficitur quis nisl at?
                                               <i class="fa fa-plus"></i>
                                               <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapsefour" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingseven">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                             Morbi gravida, nisi id fringilla ultricies, elit lorem?
                                               <i class="fa fa-plus"></i>
                                               <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapsefive" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingeight">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                             Aenean elit orci, efficitur quis nisl at, accumsan?
                                               <i class="fa fa-plus"></i>
                                               <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapsesix" class="collapse" aria-labelledby="headingeight" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Accordion area end-->
@endsection