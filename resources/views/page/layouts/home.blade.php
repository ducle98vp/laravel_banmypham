@extends('page.layouts.main')
@section('content')

		<!-- start home slider -->
        <div class="slider-area an-1 hm-1">
            <!-- slider -->
           <div class="bend niceties preview-2">
               <div id="ensign-nivoslider" class="slides">	
                   <img src="/img/slider/home-1/bannertop.jpg" alt="" title="#slider-direction-1"  />
                   <img src="/img/slider/home-1/sl2.jpg" alt="" title="#slider-direction-2"  />
               </div>
               <!-- direction 1 -->
               <div id="slider-direction-1" class="t-cn slider-direction">
                   <div class="slider-progress"></div>
                   <div class="slider-content t-cn s-tb slider-1">
                       <div class="title-container s-tb-c title-compress">
                           <h2 class="title1">minimal bags</h2>
                           <h3 class="title2" >collection</h3>
                           <h4 class="title2" >Simple is the best.</h4>
                           <a class="btn-title" href="">View collection</a>
                       </div>
                   </div>	
               </div>
               <!-- direction 2 -->
               <div id="slider-direction-2" class="slider-direction">
                   <div class="slider-progress"></div>
                   <div class="slider-content t-lfl s-tb slider-2 lft-pr">
                       <div class="title-container s-tb-c">
                           <h2 class="title1">minimal bags</h2>
                           <h3 class="title2" >collection</h3>
                           <h4 class="title2" >Simple is the best.</h4>
                           <a class="btn-title" href="">View collection</a>
                       </div>
                   </div>	
               </div>
           </div>
           <!-- slider end-->
       </div>
       <!-- end home slider -->
       <!-- product section start -->
       <div class="our-product-area">
           <div class="container">
               <!-- area title start -->
               <div class="area-title">
                   <h2>Our products</h2>
               </div>
               <!-- area title end -->
               <!-- our-product area start -->
               <div class="row">
                   <div class="col-md-12">
                       <div class="features-tab">
                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs">
                               <li role="presentation" class="active"><a href="#home" data-toggle="tab">Bán Chạy Nhất</a></li>
                               <li role="presentation"><a href="#profile" data-toggle="tab">Sản Phẩm Radom</a></li>
                           </ul>
                           <!-- Tab pans -->
                           <div class="tab-content">
                               <div role="tabpanel" class="tab-pane fade in active" id="home">
                                   <div class="row">
                                       <div class="features-curosel">
                                            @foreach ($products as $product)
                                           <div class="col-lg-12 col-md-12">
                                                   <!-- single-product start -->
                                               <div class="single-product first-sale">
                                                <div class="product-img">
                                                <a href="{{Route('detail.index',$product->id)}}">
                                                    <img class="primary-image" src="/assets/uploads/{{$product->avatar}}" alt="" />
                                                        <img class="secondary-image" src="/img/products/{{$product->avatar}}g" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                        <a href="{{Route('cart.add',$product->id)}}" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="{{Route('cart.add',$product->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>									
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                    <span class="new-price">{{$product->price}}đ</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                <h2 class="product-name"><a href="#">{{$product->title}}</a></h2>
                                                <p>{{substr($product->summary,0,50)}}</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                              
                                               
                                           </div> 
                                           @endforeach                                                                                                                     
                                       </div>
                                   </div>
                               </div>
                               <div role="tabpanel" class="tab-pane fade" id="profile">
                                   <div class="row">
                                       <div class="features-curosel">
                                        @foreach ($products as $product)
                                        <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                            <div class="single-product first-sale">
                                             <div class="product-img">
                                                 <a href="{{Route('detail.index',$product->id)}}">
                                                 <img class="primary-image" src="/assets/uploads/{{$product->avatar}}" alt="" />
                                                     <img class="secondary-image" src="/img/products/{{$product->avatar}}g" alt="" />
                                                 </a>
                                                 <div class="action-zoom">
                                                     <div class="add-to-cart">
                                                         <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                     </div>
                                                 </div>
                                                 <div class="actions">
                                                     <div class="action-buttons">
                                                         <div class="add-to-links">
                                                             <div class="add-to-wishlist">
                                                                 <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                             </div>
                                                             <div class="compare-button">
                                                                 <a href="{{Route('cart.add',$product->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                             </div>									
                                                         </div>
                                                         <div class="quickviewbtn">
                                                             <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="price-box">
                                                 <span class="new-price">{{$product->price}}đ</span>
                                                 </div>
                                             </div>
                                             <div class="product-content">
                                             <h2 class="product-name"><a href="#">{{$product->title}}</a></h2>
                                             <p>{{substr($product->summary,0,50)}}...</p>
                                             </div>
                                         </div>
                                         <!-- single-product end -->
                                           
                                            
                                        </div> 
                                        @endforeach   
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>				
                   </div>
               </div>
               <!-- our-product area end -->	
           </div>
       </div>
       <!-- product section end -->
       <!-- banner-area start -->
       <div class="banner-area">
           <div class="container-fluid">
               <div class="row">
                   <a href=""><img src="/img/banner/bannerbot.jpg" alt="" /></a>
               </div>
           </div>
       </div>
       <!-- banner-area end -->
       <!-- product section start -->
       <div class="our-product-area new-product">
           <div class="container">
               <div class="area-title">
                   <h2>Sản Phẩm Mới</h2>
               </div>
               <!-- our-product area start -->
               <div class="row">
                   <div class="col-md-12">
                       <div class="row">
                          
                           <div class="features-curosel">
                            @foreach ($products_new as $product_new)
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        <a href="{{Route('detail.index',$product->id)}}">
                                        <img class="primary-image" src="/assets/uploads/{{$product_new->avatar}}" alt="" />
                                            <img class="secondary-image" src="/assets/uploads/{{$product_new->avatar}}" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="{{Route('cart.add',$product->id)}}" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="{{Route('cart.add',$product->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>									
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                        <span class="new-price">{{$product_new->price}}</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                    <h2 class="product-name"><a href="#">{{$product_new->title}}</a></h2>
                                    <p>{{substr($product->summary,0,50)}}...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            @endforeach
                        </div>
                          
                           
                       </div>	
                   </div>
               </div>
               <!-- our-product area end -->	
           </div>
       </div>
       <!-- product section end -->
       <!-- latestpost area start -->
       <!-- <div class="latest-post-area"> -->
           <div class="container">
               <div class="area-title">
                   <h2>LATEST POST

                   </h2>
               </div>
               <div class="row">
                   <div class="all-singlepost">
                       @foreach ($news as $new)
                            <!-- single latestpost start -->
                       <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-post">
                            <div class="post-thumb">
                                <a href="#">
                                <img src="/assets/uploads/{{$new->avatar}}" alt="" class="xxx" />
                                </a>
                            </div>
                            <div class="post-thumb-info">
                                <div class="post-time">
                                <a href="#">{{$new->title}}</a>
                                    <span>/</span>
                                    <span>Post by</span>
                                    <span>BootExperts</span>
                                </div>
                                <div class="postexcerpt">
                                <p>{{substr($new->summary,0,50)}}...</p>
                                    <a href="#" class="read-more">Đọc Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single latestpost end -->
                       @endforeach
                      
                   </div>
               </div>
           </div>
       <!-- </div> -->
       <!-- latestpost area end -->
       <!-- block category area start -->
       <div class="block-category">
           <div class="container">
               <div class="row">
                   <!-- featured block start -->
                   <div class="col-md-4">
                       <!-- block title start -->
                       <div class="block-title">
                           <h2>Đặc Trưng</h2>
                       </div>
                       <!-- block title end -->
                       <!-- block carousel start -->
                       <div class="block-carousel">
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-1.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Donec ac tempus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-2.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Primis in faucibus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$205.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Voluptas nulla</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Cras neque metus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$235.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-5.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Occaecati cupiditate</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-6.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Accumsan elit</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$165.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Pellentesque habitant</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Donec non est</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$560.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                       </div>
                       <!-- block carousel end -->
                   </div>
                   <!-- featured block end -->
                   <!-- featured block start -->
                   <div class="col-md-4">
                       <!-- block title start -->
                       <div class="block-title">
                           <h2>Giảm Giá</h2>
                       </div>
                       <!-- block title end -->
                       <!-- block carousel start -->
                       <div class="block-carousel">
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Voluptas nulla</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-10.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Cras neque metus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$235.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Donec ac tempus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-8.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Primis in faucibus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$205.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Occaecati cupiditate</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Accumsan elit</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$165.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Pellentesque habitant</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Donec non est</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$560.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                       </div>
                       <!-- block carousel end -->
                   </div>
                   <!-- featured block end -->
                   <!-- featured block start -->
                   <div class="col-md-4">
                       <!-- block title start -->
                       <div class="block-title">
                           <h2>Phổ Biến</h2>
                       </div>
                       <!-- block title end -->
                       <!-- block carousel start -->
                       <div class="block-carousel">
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Voluptas nulla</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Cras neque metus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$235.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Donec ac tempus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Primis in faucibus</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$205.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Occaecati cupiditate</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Accumsan elit</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$165.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                           <div class="block-content">
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Pellentesque habitant</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                               <!-- single block start -->
                               <div class="single-block">
                                   <div class="block-image pull-left">
                                       <a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
                                   </div>
                                   <div class="category-info">
                                       <h3><a href="product-details.html">Donec non est</a></h3>
                                       <p>Nunc facilisis sagittis ullamcorper...</p>
                                       <div class="cat-price">$560.00</div>
                                       <div class="cat-rating">
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                           <a href="#"><i class="fa fa-star"></i></a>
                                       </div>								
                                   </div>
                               </div>
                               <!-- single block end -->
                           </div>
                       </div>
                       <!-- block carousel end -->
                   </div>
                   <!-- featured block end -->
               </div>
           </div>
       </div>
       <!-- block category area end -->
         
@endsection