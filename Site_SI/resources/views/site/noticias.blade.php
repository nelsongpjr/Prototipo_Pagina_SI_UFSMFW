<div id="blog">
    <div class="container">
        <h2>Blog Sistemas de <span>Informação</span></h2>
        <hr>
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                @foreach($noticias as $noticia)
                    <div class="item active">
                        <ul class="thumbnails">
                            <li class="col-sm-4">
                                <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{asset($noticia->caminho)}}" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>{{ $noticia->titulo }}</h4>

                                        {!! substr(strip_tags($noticia->noticia), 0, 200) !!}

                                        <a class="btn btn-mini" data-toggle="modal" data-target="#myModal">... <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>


                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /Slide1 -->
                @endforeach
            </div>


            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>


        </div>
    </div>
</div>
