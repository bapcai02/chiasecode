@extends('master')

@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản Phẩm {{ $sanpham->name }}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ route('trang-chu') }}">Trang chủ</a> / <span>Chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-sm-9">

				<div class="row">
					<div class="col-sm-4">
						<img src="source/image/product/{{ $sanpham->image }}" alt="">
					</div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title"><h3>{{ $sanpham->name }}<h3></p>
							<p class="single-item-price">
								@if( $sanpham->promotion_price==0)
									<span class="flash-sale">{{number_format( $sanpham->unit_price )}} VND</span>
								@else
									<span class="flash-del">{{number_format( $sanpham->unit_price )}} VND</span>	
									<span class="flash-sale">{{number_format($sanpham->promotion_price )}} VND</span>
								@endif
							</p>
						</div>

						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p>{{ $sanpham->description }}</p>
						</div>
						<div class="space20">&nbsp;</div>

						<p>Số Lượng:</p>
						<div class="single-item-options">
							<select class="wc-select" name="color">
								<option>số lượng</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Mô Tả</a></li>
					</ul>
					
					<div class="panel" id="tab-description">
					
					</div>
					<div class="panel" id="tab-reviews">
						<p>No Reviews</p>
					</div>
				</div>
				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4>Sản Phẩm Tương Tự</h4>
					<div class="beta-products-details">
							<div class="clearfix"></div>
						</div>
					<div class="row">
						@foreach( $sp_tuongtu as $sptt)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{ route('chitietsanpham',$sptt->id) }}"><img src="source/image/product/{{ $sptt->image }}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{ $sptt->name }}</p>
										<p class="single-item-price">
											@if( $sptt->promotion_price==0)
													<span class="flash-sale">{{number_format( $sptt->unit_price )}} VND</span>
												@else
													<span class="flash-del">{{number_format( $sptt->unit_price )}} VND</span>	
													<span class="flash-sale">{{number_format($sptt->promotion_price )}} VND</span>
												@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach	
					</div>
				</div> <!-- .beta-products-list -->
			</div>
			<div class="col-sm-3 aside">
				<div class="widget">
					<h3 class="widget-title">Best Sellers</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- best sellers widget -->
				<div class="widget">
					<h3 class="widget-title">New Products</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- best sellers widget -->
			</div>
		</div>
	</div> <!-- #content -->
</div>

@endsection