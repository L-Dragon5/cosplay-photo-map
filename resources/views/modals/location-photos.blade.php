<div class="uk-position-relative uk-light" uk-slideshow>
	<ul class="uk-slideshow-items">
	@foreach ($photos as $image)
		<li><img src='{{ asset("storage/locations/$image") }}' alt="" uk-cover></li>
	@endforeach
	</ul>
	
	<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
	<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
</div>