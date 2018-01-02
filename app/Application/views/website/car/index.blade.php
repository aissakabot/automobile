@extends('layouts.app')

@section('title')
     {{ trans('car.car') }} {{ trans('home.control') }}
@endsection

@section('content')
<div class="container">
    <div><h1>{{ trans('website.car') }}</h1></div>
     
 <table class="table table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans("car.title") }}</th>
				
				<th>{{ trans("car.image") }}</th>
				
				<th>
				{{ trans("car.show") }}</th>
				
				</thead>
		<tbody>
		@if(count($items) > 0)
			@foreach($items as $d)
				<tr>
					<td><a href="{{url('car/'.$d->id.'/view')}}">

					{{ str_limit($d->title , 20) }}</a>
       <a href="{{url(getCurrentlang().'/car?country='.$d->country->id)}}"><small> from :{{getDefaultValueKey($d->country->title)}}</small></a>
       <small>{{getDefaultValueKey($d->region->title)}}</small>
       <a href="{{url(getCurrentlang().'/car?brand='.$d->brand->id)}}"><small> from :{{getDefaultValueKey($d->brand->title)}}</small></a>
					</td>
				
									<td>
				<img src="{{ url(env("UPLOAD_PATH")."/".$d->image)}}"  width="80" />
					</td>
				
                
				<td>
				@if($d->user_id == Auth::user()->id)
				@include("website.car.buttons.edit", ["id" => $d->id ])
				@endif
				@include("website.car.buttons.view", ["id" => $d->id ])</td>
				
					</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	@include("layouts.paginate" , ["items" => $items])
		
</div>
@endsection
