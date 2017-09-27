





    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Виртуален свят</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::route('index')}}"><img style="margin:-30px 0 0 0" src="{{URL('img/vworld.png')}}" alt=" Читалище Виртуален свят - Лого - Благоевград"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($title==1){echo 'class="active"';} ?> ><a href="{{URL::route('index')}}">Начало</a></li>
                    <li <?php if($title==2){echo 'class="active"';} ?> ><a href="{{URL::route('blog')}}">Дейности</a></li> 
                    <li class=" <?php if($title==3){echo 'active';} ?> dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Кръжоци/Клубове <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu newdrop">
                          <h4 class="droptitle">Общ преглед</h4>
                         <li><a href="{{URL::route('portfolio')}}">Всички Кръжоци</a></li>
                         <li><a href="{{URL::route('club')}}">Всички Клубове</a></li>
<!--                           <li><a href="{{URL::route('portfolio')}}">Курсове</a></li>
                          <li><a href="{{URL::route('portfolio')}}">Школи по изкуствата</a></li> -->
                            
                      <h4 class="droptitle">Кръжоци</h4>
                        @foreach($blogs as $blog)

                        <li ><a href="{{URL::route('portfolioitem' , $blog->id)}}">{{$blog->name}}</a></li>

                        @endforeach

                                              <h4 class="droptitle">Клубове</h4>
                                                                   @foreach($clubs as $club)

                        <li ><a href="{{URL::route('clubitem' , $club->id)}}">{{$club->name}}</a></li>

                        @endforeach

<h4 class="droptitle">Курсове</h4>
                        <li><a href="{{URL::route('pages')}}">Курс по Английски език</a></li>
                           
                      
                            <li class="divider"></li>
                           
                        </ul>
                    </li>
                    <li <?php if($title==4){echo 'class="active"';} ?>><a href="{{URL::route('about')}}">За нас</a></li>
                    <li <?php if($title==5){echo 'class="active"';} ?>><a href="{{URL::route('donate')}}">Дарения</a></li>
                    <li <?php if($title==6){echo 'class="active"';} ?>><a href="{{URL::route('services')}}">Услуги</a></li>
                    <li <?php if($title==7){echo 'class="active"';} ?>><a href="{{URL::route('contact')}}">Контакти</a></li>
  @if (Auth::user())
                            <li class="dropdown newwidth">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img class="avatarSmall" src="{{ URL('/uploads/avatars/'.Auth::user()->image ) }} " >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>



                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('profile') }}"
                                           >
                                            Профил
                                        </a>

                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Изход
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
  @endif
                  <div id="hamal">
                    <a href="{{ url('Техническа-информация') }}">
                      <img width="25" src="{{ url('img/flags/bg.jpg') }}" alt="">
                    </a>
                    <a href="{{ url('en/technical-information') }}">
                      <img width="25" src="{{ url('img/flags/en.png') }}" alt="">
                    </a>
                  </div>
                </ul>
            </div>
        </div>
    </header><!--/header-->