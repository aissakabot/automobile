@extends(layoutExtend())

@section('title')
    {{ trans('activite.activite') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => trans('activite.activite') , 'model' => 'activite' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/activite/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

 		<div class="form-group">
			<label for="title">{{ trans("activite.title")}}</label>
				<input type="text" name="title" class="form-control" id="title" value="{{ isset($item->title) ? $item->title : old("title")  }}"  placeholder="{{ trans("activite.title")}}">
			</label>
		</div>
		<div class="form-group">
   <label for="image">{{ trans("activite.video")}}</label>
    @if(isset($item) && $item->video != "")
    <br>
    <img src="{{ url(env("UPLOAD_PATH")."/".$item->video) }}" class="thumbnail" alt="" width="200">
    <br>
    @endif
    <input type="file" name="video" >
   </label>
  </div>


            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ trans('home.save') }}  {{ trans('activite.activite') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
