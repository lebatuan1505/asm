@extends('client.layout.master_layout')
@section('news')
<div class="fh5co-hero fh5co-hero-2">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url({{asset('client')}}/images/bg2.jpg);">
				<div class="desc animate-box">
					<h2></h2>
					<span>Sự phát triển của chúng tôi dựa vào các bạn <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">-newshoure.ogr</a></span>
				</div>
			</div>
		</div>
<div id="fh5co-about">
			<div class="container">
				<div class="row">	
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>{{$ctt->tieuDe}}</h3>
						<p>{!!$ctt->tomTat!!}</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-12 animate-box">
						<!-- <figure>
							<img src="{{asset('user/'.$ctt->urlHinh)}}" alt="Free HTML5 Bootstrap Template by code-projects.org" class="img-responsive">
						</figure> -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box">
						<h3>{{$ctt->tieuDe}}</h3>
						<p>{!!$ctt->noiDung!!}</p>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form action="#">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<h2>Để lại bình luận của bạn</h2>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Gửi bình luận của bạn" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
@endsection