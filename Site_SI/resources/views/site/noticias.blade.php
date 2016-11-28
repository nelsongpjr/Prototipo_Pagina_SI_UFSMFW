<div id="blog">
    <div class="container">
        <h2>Notícias Sistemas de <span>Informação</span></h2>
        <hr>
        <div class="carousel slide" id="Carousel-noticia" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">
                        @for($j = count($noticias); $j >= count($noticias)-3; $j--)
                            @if(!empty($noticias[$j]))
                                <li class="col-sm-4">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            @if(empty($noticias[$j]->caminho))
                                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('/images/placeholder.png')}}" alt=""></a>
                                            @else
                                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset($noticias[$j]->caminho)}}" alt=""></a>
                                            @endif
                                        </div>
                                        <div class="caption">
                                            <h4>{{ $noticias[$j]->titulo }}</h4>
                                            {!! substr(strip_tags($noticias[$j]->noticia), 0, 200) !!}
                                            <a href="#" class="btn btn-mini" data-toggle="modal" data-target="#myModal">... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endfor
                    </ul>
                </div><!-- /Slide1 -->

                @for($i = $j; $i > -2; $i-=3)
                    @php
                        $limite = $i;
                    @endphp

                    @if($i == 0)
                        @php
                            $limite=0;
                        @endphp
                    @endif
                    @if($i == -1)
                        @php
                            $limite= 1;
                        @endphp
                    @endif
                    @if($i == -2)
                        @php
                            $limite= 2;
                        @endphp
                    @endif

                @if(!empty($noticias[$limite]))
                    <div class="item">
                        <ul class="thumbnails">
                            @for($k = $limite ; $k >=$limite-2  ; $k--)
                                @if(!empty($noticias[$k]))
                                <li class="col-sm-4">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                @if(empty($noticias[$k]->caminho))
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('/images/placeholder.png')}}" alt=""></a>
                                                @else
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset($noticias[$k]->caminho)}}" alt=""></a>
                                                @endif
                                            </div>
                                            <div class="caption">
                                                <h4>{{ $noticias[$k]->titulo }}</h4>
                                                {!! substr(strip_tags($noticias[$k]->noticia), 0, 200) !!}
                                                <a href="#" class="btn btn-mini" data-toggle="modal" data-target="#myModal">... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endfor
                        </ul>
                    </div><!-- /Slides -->
                    @endif
                @endfor

            </div>
            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#Carousel-noticia" class="text-center" ><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>

                    <li><a data-slide="next" href="#Carousel-noticia" class="text-center" ><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>

        </div>
    </div>
</div>
