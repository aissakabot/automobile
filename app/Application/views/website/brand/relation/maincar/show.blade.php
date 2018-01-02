		<tr>
			<th>
			{{ trans( "maincar.maincar") }}
			</th>
			<td>
		<div class="form-group"><ol>
			@php  $maincars = $item->maincar ? $item->maincar->pluck("title" ,"id")->all() : [] @endphp
			@foreach( $maincars as $key => $relatedItem)
		<li>
		<a href="/maincar/item/{{ $key }}">{{ is_json($relatedItem) ? getDefaultValueKey($relatedItem) :  $relatedItem}}</a>
		</li>
			@endforeach
		</ol></div>
			</td>
		</tr>
