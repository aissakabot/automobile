@extends('layouts.app')

@section('title')
    {{ trans('activite.activite') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection

@section('content')
<div class="container">
         @include('layouts.messages')
         <a href="{{ url('activite') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
        <form action="{{ concatenateLangToUrl('activite/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
             		<div class="form-group">
			<label for="title">{{ trans("activite.title")}}</label>
				<input type="text" name="title" class="form-control" id="title" value="{{ isset($item->title) ? $item->title : old("title") }}"  placeholder="{{ trans("activite.title")}}">
			</label>
		</div>
		<div class="form-group">
			<label for="video">{{ trans("activite.video")}}</label>
				<input type="text" name="video" class="form-control" id="video" value="{{ isset($item->video) ? $item->video : old("video") }}"  placeholder="{{ trans("activite.video")}}">
			</label>
		</div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="fa fa-save"></i>
                    {{ trans('website.Update') }}  {{ trans('website.activite') }}
                </button>
            </div>
        </form>
</div>
@endsection
