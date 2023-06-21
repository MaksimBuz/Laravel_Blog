@extends('layouts.main')
@section('content')
<body class="archive-page">
	<div class="wrap-body">
		<section id="container">
			<div class="wrap-container">
				<div id="main-content">
					<div class="wrap-content" style="display: flex;justify-content:space-around">
                            @foreach ($PostData as $item)
							<div class="col-12">
								<div class="wrap-col" style="width: 550px; ">
									<article>
										<div class="post-thumbnail-wrap" >
											<a href="single.html" class="portfolio-box">
												<img src="{{ asset('storage/' . $item->preview_img	) }}" alt="">
												<div class="portfolio-box-second" >
													<img src="{{ asset('storage/' . $item->preview_img	) }}"  alt="">
												</div>
											</a>
										</div>
										<div class="entry-header " >
											<h3 class="entry-title">{{$item->title}}</h3>
											<center><a href="{{route('main.show',$item->id)}}">читать дальше</a></center>	
										</div>
									</article>
								</div>
							</div>
                            @endforeach
					</div>
				</div>
			</div>
		</section>
    @endsection
