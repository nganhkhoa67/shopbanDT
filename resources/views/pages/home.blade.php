@extends('layout')
@section('content')

<div class="features_items"><!--features_items-->
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                        @php 
                            $i =0;
                        @endphp

                        @foreach($slider as $key => $slide)
                            @php
                                $i++;
                            @endphp

                            <div class="item {{$i==1 ? 'active' : ''}}">
                                
                                <div class="col-sm-12">
                                    <img alt="{{$slide->slider_desc}}" src="public/uploads/slider/{{$slide->slider_image}}" height="100" width="150%" class ='img img-responsive'>
                                </div>
                            </div>
                        @endforeach   
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
<br><br>    
     <div class='row'></div><!--/slider-->
                        <h2 class="title ">Sản phẩm mới</h2>
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                                {{ csrf_field()}}
                        @foreach($all_product as $key => $product)
                        
                        <div class="col-sm-4">
                            <div class="=product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                           <a href="{{route('chitiet',$product->product_id)}}"> <img  src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" /></a>
                                            <h2>{{number_format($product -> product_price).' '.'VNĐ'}}</h2>
                                            <p>{{$product -> product_name}}</p>
                                            <button type='submit' name='productid_hidden' class='btn btn-primary' value='{{$product->product_id}}'><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>

                                        </div>
                                       
                                </div>                              
                            </div>
                        </div>
                    
                        @endforeach
                        </form>

                    </div><!--features_items-->
                    
@endsection                        