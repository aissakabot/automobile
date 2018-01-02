		<div class="form-group">
			<label for="maincar">{{ trans( "maincar.maincar") }}</label>
			@php $maincars = App\Application\Model\Maincar::pluck("title" ,"id")->all()  @endphp
			@php  $maincar_id = isset($item) ? $item->maincar_id : null @endphp
			<select name="maincar_id"  class="form-control" >
			@foreach( $maincars as $key => $relatedItem)
			<option value="{{ $key }}"  {{ $key == $maincar_id  ? "selected" : "" }}> {{ is_json($relatedItem) ? getDefaultValueKey($relatedItem) :  $relatedItem}}</label>
			@endforeach
			</select>
		</div>
