<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <link rel="stylesheet" type="text/css" href="/website/source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/website/style/slider.css">
    <link rel="stylesheet" type="text/css" href="/website/style/mystyle.css">
    @if(getDir() == 'rtl')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    @endif
    {{ Html::style('css/sweetalert.css') }}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @stack('css')
</head>
<body>
   <div class="allcontain">
    <div class="header">
            <ul class="socialicon">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
            <ul class="givusacall">
                <li>Call us to  : +66666666 </li>
            </ul>
            <ul class="logreg">
                @if (Auth::check())
            <li><a href="{{ url('/home') }}">{{ trans('website.home') }}</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>

            
        @else
            <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
            <li><a href="{{ url('/login') }}">{{ trans('website.login') }}</a></li>
            <li><a href="{{ url('/register') }}">{{ trans('website.register') }}</a></li>
        @endif
        @php $page = page(); @endphp
        
        

            </ul>
    </div>
    <!-- Navbar Up -->
    <nav class="topnavbar navbar-default topnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                    <span class="sr-only"> Toggle navigaion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="{{url('/')}}"><img src="/website/image/logo1.png" alt="logo"></a>
            </div>   
        </div>
        <div class="collapse navbar-collapse" id="upmenu">
            <ul class="nav navbar-nav" id="navbarontop">
                <li class="active"><a href="{{url('/')}}">{{trans('website.home')}}</a> </li>
                
                <li>
                    <a href="{{url('car')}}">{{trans('website.car')}}</a>
                    
                </li>
                <li>
                    <a href="{{url('maincar')}}">{{trans('website.category')}}</a>
                    
                </li>
                <li>
                    <a href="{{url('brand')}}">{{trans('website.brand')}}</a>
                    
                </li>
                <li><a href="{{ url('/page/'.$page->slug) }}">{{ getDefaultValueKey($page->title) }}</a></li>
        <li><a href="{{ url('contact') }}">{{ trans('website.Contact Us') }}</a></li>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
                <button><span class="postnewcar">POST NEW CAR</span></button>
            </ul>
        </div>
    </nav>


</div>
<div class="allcontain">
<div id="carousel-up" class="carousel slide" data-ride="carousel">
        
        <nav class="navbar navbar-default midle-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
                        <h1>SEARCH TEXT</h1>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarmidle">
                <form action="{{url(getCurrentLang().'/car')}}" method="get">
                <ul class="nav navbar-nav navbarborder" style="padding-top: 10px">
                
                    <li class="li-category">
                        
                        
                            <select name="brand" id="" class="form-control">
                                @foreach(\App\Application\Model\Brand::get() as $brand)

                                <option value="{{$brand->id}}">{{getDefaultValueKey($brand->title)}}</option>
                                @endforeach
                            </select>
                        
                    </li>

                    <li class="li-minyear">
                        <select name="country" id="" class="form-control">
                                @foreach(\App\Application\Model\Country::get() as $country)

                                <option value="{{$country->id}}">{{getDefaultValueKey($country->title)}}</option>
                                @endforeach
                            </select>
                    </li>
                    <li class="li-maxyear">
                    <select name="region" id="" class="form-control">
                                @foreach(\App\Application\Model\region::get() as $region)

                                <option value="{{$region->id}}">{{getDefaultValueKey($region->title)}}</option>
                                @endforeach
                            </select>
                    </li>
                    <li class="li-maxyear">
                    <select name="maincar" id="" class="form-control">
                                @foreach(\App\Application\Model\Maincar::get() as $maincar)

                                <option value="{{$maincar->id}}">{{getDefaultValueKey($maincar->title)}}</option>
                                @endforeach
                            </select>
                    </li>
                    <li class="li-slideprice">
                       
                            <input name="price" type="text" class="form-control">
                      
                            
                            
                    </li>
                    <li class="li-search"> <button class="searchbutton" type="submit"><span class="glyphicon glyphicon-search "></span></button></li>
                
                </ul>
                </form>

 
            </div>
        </nav>
    </div>
@yield('content')


<div class="newslettercontent">
        <div class="leftside">
            <img src="{{url('website/image/border.png')}}" alt="border">
            <h1>NEWSLETTER</h1>
            <p>Subscribe to the COLLECTIONCARS mailing list to <br>
                receive updates on new arrivals, special offers <br>
                and other discount information.</p>
        </div>
        <div class="rightside">
            <img class="newsimage" src="{{url('website/image/newsletter.jpg')}}" alt="newsletter">
            <input type="text" class="form-control" id="subemail" placeholder="EMAIL">
            <button>SUBSCRIBE</button>
        </div>
    </div>
    <!-- ______________________________________________________Bottom Menu ______________________________-->
    <div class="bottommenu">
        <div class="bottomlogo">
        <span class="dotlogo">&bullet;</span><img src="{{url('website/image/collectionlogo1.png')}}" alt="logo1"><span class="dotlogo">&bullet;;</span>
        </div>
        <ul class="nav nav-tabs bottomlinks">
            <li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
            <li role="presentation"><a href="#/">CATEGORIES</a></li>
            <li role="presentation"><a href="#/">PREORDERS</a></li>
            <li role="presentation"><a href="#/">CONTACT US</a></li>
            <li role="presentation"><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
        </ul>
        <p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
            eiusmod tempor incididunt </p>
         <img src="image/line.png" alt="line"> <br>
         <div class="bottomsocial">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
        </div>
            <div class="footer">
                <div class="copyright">
                  &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
                </div>
                <div class="atisda">
                     Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a> 
                </div>
            </div>
    </div>
</div>




    {!! Links::track(true) !!}
    {{ Html::script('js/sweetalert.min.js') }}
    <script type="application/javascript">
        function deleteThisItem(e){
            var link = $(e).data('link');
            swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this Item Again!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function(){
                        window.location = link;
                    });
        }
    </script>
    @include('sweet::alert')
    @stack('js')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 

</body>
</html>
