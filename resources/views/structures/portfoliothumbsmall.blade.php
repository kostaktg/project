
	        	<div class="col-md-3 col-sm-6">
					<figure>
						<img src="{{URL('img/portfolio/' . $blog->image)}}" alt="Картина {{$blog->name}}">
						<figcaption>
							<h3>Кръжоци</h3>
							<span class="stitle">{{ $blog->name }}</span>
							<a href="{{ URL(route('portfolioitem' , $blog->id )) }}">Погледни</a>
						</figcaption>
					</figure>
	        	</div>	