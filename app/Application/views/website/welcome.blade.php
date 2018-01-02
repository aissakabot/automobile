@extends('layouts.app')

@section('content')
           
    <div id="carousel-up" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner " role="listbox">
        @foreach(\App\Application\Model\Slider::get() as $slide)
            <div class="item {{$loop->first ? 'active' :''}}">
                <img src="{{url(env('UPLOAD_PATH').'/'.$slide->image)}}" alt="{{$slide->title}}">
                <div class="carousel-caption">
                    <h2>{{getDefaultValueKey($slide->title)}}</h2>
                    <p>{{getDefaultValueKey($slide->body)}} </p>
                </div>
            </div>
            @endforeach
            
            
        </div>
        
    </div>
<div class="latestcars">
    <h1 class="text-center">&bullet; {{trans('website.latestcar')}} &bullet;</h1>
    <ul class="nav nav-tabs navbar-left latest-navleft">
        <li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
        <li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
        <li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
        <li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
        <li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
        <li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
        <li id="hideonmobile">
    </ul>
</div>
<br>
<br>
    <div class="grid">
        <div class="row">
        @foreach(\App\Application\Model\Car::limit(8)->get() as $car)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="txthover">
                    <img src="{{url(env('UPLOAD_PATH').'/'.$car->image)}}" alt="car1">
                        <div class="txtcontent" style="color:#fff;text-align: center">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            
                                <h3 class="name">{{$car->title}}</h3>
                                
                                <h4 class="price"> {{$car->price}}</h4>
                                <a href="{{url('/car/'.$car->id)}}"<button>READ MORE</button></a>
                            
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                </div>   
            </div>
            @endforeach
            
        </div>
    </div>


@endsection
