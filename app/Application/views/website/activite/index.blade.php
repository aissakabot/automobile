@extends('layouts.app')

@section('title')
     {{ trans('activite.activite') }} {{ trans('home.control') }}
@endsection

@section('content')
<div class="container">
    <div><h1>{{ trans('website.activite') }}</h1></div>
     <div><a href="{{ url('activite/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.activite') }}</a><br></div>
 <table class="table table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans("activite.title") }}</th>
				<th>{{ trans("activite.video") }}</th>
				<th>{{ trans("activite.edit") }}</th>
				<th>{{ trans("activite.show") }}</th>
				<th>{{ trans("activite.delete") }}</th>
				</thead>
		<tbody>
		@if(count($items) > 0)
			@foreach($items as $d)
				<tr>
					<td>{{ str_limit($d->title , 20) }}</td>
				<td>{{ str_limit($d->video , 20) }}</td>
				<td>@include("website.activite.buttons.edit", ["id" => $d->id ])</td>
					<td>@include("website.activite.buttons.view", ["id" => $d->id ])</td>
					<td>@include("website.activite.buttons.delete", ["id" => $d->id ])</td>
					</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	@include("layouts.paginate" , ["items" => $items])
		
</div>
@endsection
