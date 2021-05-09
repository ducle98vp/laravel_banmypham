@extends('page.layouts.main')
@section('content')
<!-- category-banner area start -->
		
		<!-- category-banner area end -->
		<!-- breadcrumbs area start -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="index.html">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Shop Grid</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- shop-with-sidebar Start -->
		<div class="shop-with-sidebar">
			<div class="container">
				<div class="row">
					<!-- left sidebar start -->
					<div class="col-md-3 col-sm-12 col-xs-12 text-left">
						<div class="topbar-left">
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img src="/img/bar-ping.png" alt=""></div>
									<h2>Filter</h2>
								</div>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Nhà Cung Cấp</h6>
								</div>
								<ul class="sidebar-tags">
									
									@foreach ($categories as $category)
								<li><a href="{{Route('filter.categories',$category->id)}}">{{$category->name}}</a><span> ({{$category->products->count()}})</span></li>
									@endforeach
									
									
								</ul>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Giá Tiền</h6>
								</div>
								<ul>
								<li><a href="{{Route('filter.categories',$category_id)}}">Tất Cả</a><span> (1)</span></li>
								<li><a href="?price=0:100000">Nhỏ hơn 100,000₫</a><span> (1)</span></li>
									<li><a href="?price=100000:200000">Từ 100,000₫ - 200,000₫</a><span> (2)</span></li>
									<li><a href="?price=200000:300000">Từ 200,000₫ - 300,000₫</a><span> (2)</span></li>
									<li><a href="?price=300000:500000">Từ 300,000₫ - 500,000₫</a><span> (2)</span></li>
									<li><a href="?price=500000:600000">Từ 500,000₫ - 600,000₫</a><span> (2)</span></li>
									<li><a href="?price=600000:max">Trên 600,000đ</a><span> (2)</span></li>



								</ul>
							</aside>
							<aside class="hd-gg sidebar-content">
								<div class="sidebar-title">
									<h6>Mặt Hàng</h6>
								</div>
								<ul>
									<li><a href="#">S</a><span> ()</span></li>
									<li><a href="#">M</a><span> (24)</span></li>
									<li><a href="#">L</a><span> (21)</span></li>
								</ul>
							</aside>
							
							
							
							
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img src="/img/bar-ping.png" alt=""></div>
									<h2>Tags</h2>
								</div>
								<div class="exp-tags">
									<div class="tags">
										<a href="#">camera</a>
										<a href="#">mobile</a>
										<a href="#">electronic</a>
										<a href="#">destop</a>
										<a href="#">tablet</a>
										<a href="#">accessories</a>
										<a href="#">camcorder</a>
										<a href="#">laptop</a>
									</div>
								</div>
							</aside>
						</div>
					</div>
					<!-- left sidebar end -->
					<!-- right sidebar start -->
					<div class="col-md-9 col-sm-12 col-xs-12">
						<!-- shop toolbar start -->
						<div class="shop-content-area">
							<div class="shop-toolbar">
								<div class="col-md-4 col-sm-4 col-xs-12 nopadding-left text-left">
									<form class="tree-most" method="get">
										<div class="orderby-wrapper">
											<label>Sort By</label>
											<select name="orderby" class="orderby">
												<option value="menu_order" selected="selected">Default sorting</option>
												<option value="popularity">Sort by popularity</option>
												<option value="rating">Sort by average rating</option>
												<option value="date">Sort by newness</option>
												<option value="price">Sort by price: low to high</option>
												<option value="price-desc">Sort by price: high to low</option>
											</select>
										</div>
									</form>
								</div>
								<div class="col-md-4 col-sm-4 none-xs text-center">
									<div class="limiter hidden-xs">
										<label>Show</label>
										<select>
											<option selected="selected" value="">9</option>
											<option value="">12</option>
											<option value="">24</option>
											<option value="">36</option>
										</select>
										per page        
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
									<div class="view-mode">
										<label>View on</label>
										<ul>
											<li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
											<li class=""><a href="#shop-list-tab" data-toggle="tab" ><i class="fa fa-th-list"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- shop toolbar end -->
						<!-- product-row start -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="shop-grid-tab">
								<div class="row">
									<div class="shop-product-tab first-sale">
										
										@if ($products->isEmpty())
										<h2>Không có sản phẩm tương ứng</h2>
										@else	
											@foreach ($products as $product)
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<span class="sale-text">Sale</span>
															<div class="product-img">
																<a href="#">
																<img class="primary-image" src="/assets/uploads/{{$product->avatar}}" alt="" />
																	<img class="secondary-image" src="/assets/uploads/{{$product->avatar}}" alt="" />
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
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
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
															<h2 class="product-name"><a href="#">{{$product->name}}</a></h2>
															<p>{{substr($product->summary,0,50)}}...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
											@endforeach
										@endif
										
										
										
									</div>
								</div>
								<!-- product-row end -->
						
							</div>
							<!-- list view -->
							<div class="tab-pane fade" id="shop-list-tab">
								<div class="list-view">
									<!-- single-product start -->
									<div class="product-list-wrapper">
										@if ($products->isEmpty())
										<h2>Không có sản phẩm tương ứng</h2>
										@else	
											@foreach ($products as $product)
												<div class="single-product">								
													<div class="col-md-4 col-sm-4 col-xs-12">
														<div class="product-img">
															<a href="#">
																<img class="primary-image" src="/assets/uploads/{{$product->avatar}}" alt="" />
																<img class="secondary-image" src="/assets/uploads/{{$product->avatar}}" alt="" />
															</a>
														</div>								
													</div>
													<div class="col-md-8 col-sm-8 col-xs-12">
														<div class="product-content">
															<h2 class="product-name"><a href="#">{{$product->name}}</a></h2>
															<div class="rating-price">	
																<div class="pro-rating">
																	<a href="#"><i class="fa fa-star"></i></a>
																	<a href="#"><i class="fa fa-star"></i></a>
																	<a href="#"><i class="fa fa-star"></i></a>
																	<a href="#"><i class="fa fa-star"></i></a>
																	<a href="#"><i class="fa fa-star"></i></a>
																</div>
																<div class="price-boxes">
																	<span class="new-price">{{$product->price}}đ</span>
																</div>
															</div>
															<div class="product-desc">
																<p>{{substr($product->summary,0,50)}}...</p>
															</div>
															<div class="actions-e">
																<div class="action-buttons">
																	<div class="add-to-cart">
																		<a href="#">Add to cart</a>
																	</div>
																	<div class="add-to-links">
																		<div class="add-to-wishlist">
																			<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																		</div>
																		<div class="compare-button">
																			<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																		</div>									
																	</div>
																</div>
															</div>										
														</div>									
													</div>
												</div>
											@endforeach
										@endif
									</div>
									<!-- single-product end -->	
								</div>
							</div>
							<!-- shop toolbar start -->
							<div class="shop-content-bottom">
								<div class="shop-toolbar btn-tlbr">
									<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs nopadding-left text-left">
										<form class="tree-most" method="get">
											<div class="orderby-wrapper">
												<label>Sort By</label>
												<select name="orderby" class="orderby">
													<option value="menu_order" selected="selected">Default sorting</option>
													<option value="popularity">Sort by popularity</option>
													<option value="rating">Sort by average rating</option>
													<option value="date">Sort by newness</option>
													<option value="price">Sort by price: low to high</option>
													<option value="price-desc">Sort by price: high to low</option>
												</select>
											</div>
										</form>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12 text-center">
										<div class="pages">
											<label>Page:</label>
											<ul>
												<li class="current">1</li>
												<li><a href="#">2</a></li>
												<li><a href="#" class="next i-next" title="Next"><i class="fa fa-arrow-right"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
										<div class="view-mode">
											<label>View on</label>
											<ul>
												<li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
												<li class=""><a href="#shop-list-tab" data-toggle="tab" ><i class="fa fa-th-list"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- shop toolbar end -->
						</div>
					</div>
					<!-- right sidebar end -->
				</div>
			</div>
		</div>
		<!-- shop-with-sidebar end -->
		<!-- Brand Logo Area Start -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="brand-carousel">
						<div class="brand-item"><a href="#"><img src="/img/brand/bg1-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="/img/brand/bg2-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="/img/brand/bg3-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="/img/brand/bg4-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="/img/brand/bg5-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="/img/brand/bg2-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="/img/brand/bg3-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="/img/brand/bg4-brand.jpg" alt="" /></a></div>
					</div>
				</div>
			</div>
		</div>
        <!-- Brand Logo Area End -->
        @endsection