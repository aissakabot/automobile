@extends('layouts.app')

@section('title')
     {{ trans('region.region') }} {{ trans('home.control') }}
@endsection

@section('content')
<div class="container">
    <div><h1>{{ trans('website.region') }}</h1></div>
     <div><a href="{{ url('region/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.region') }}</a><br></div>
 <table class="table table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans("region.title") }}</th>
				
				</thead>
		<tbody>
		@if(count($items) > 0)
			@foreach($items as $d)
				<tr>
					<td><a href="{{url(getCurrentlang().'/car?region='.$d->id)}}" id="btnRl">{{ str_limit(getDefaultValueKey($d->title) , 20) }}</a></td>
				
					</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	@include("layouts.paginate" , ["items" => $items])
		
</div>
@endsection
