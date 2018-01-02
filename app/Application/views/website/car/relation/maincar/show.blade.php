		<tr>
			<th>
			{{ trans( "maincar.maincar") }}
			</th>
			<td>
				@php $maincar = App\Application\Model\Maincar::find($item->maincar_id);  @endphp
				{{ is_json($maincar->title) ? getDefaultValueKey($maincar->title) :  $maincar->title}}
			</td>
		</tr>
