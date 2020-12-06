@extends('layout')
@section('content')

<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Tìm kiếm sản phẩm</h2>
                        @foreach($search_product as $key => $product)
                        <div class="col-sm-4">
                            <div class="=product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                           <a href="{{route('chitiet',$product->product_id)}}"> <img   src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" /></a>
                                            <h2>{{number_format($product -> product_price).' '.'VNĐ'}}</h2>
                                            <p>{{$product -> product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                       
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Thêm sản phẩm yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items-->
                    
@endsection                        