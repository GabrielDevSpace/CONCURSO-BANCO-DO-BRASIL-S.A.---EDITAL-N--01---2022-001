        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="/" class="logo">SubjectNotes<span>Aprendendo a Aprender</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    @foreach($registros as $registro)
                    <li class="has-submenu">
                        <a href="#"><span class="fa fa-book mr-3 text-white"></span>{{$registro->title}}</a>
                        <ul class="submenu">
                            @foreach($subtitles as $subtitle)
                            @if($subtitle->id_title == $registro->id_title)
                            <li><a href="{{ route('edit', ['id_title' => $subtitle->id_title, 'id_subtitle' => $subtitle->id, 'subtitle' => $subtitle->subtitle]) }}">{{ $subtitle->subtitle }}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                    <br><br>
                    <li>
                        <a href="{{ route('subject') }}"><span class="fa fa-save mr-3"></span> Cadastrar Matérias</a>
                    </li>
                </ul>
                <div class="footer">
                    <p align="center">
                        Projeto desenvolvido para organizar os estudos e registrar as anotações referente a cada matéria. <i class="icon-heart" aria-hidden="true"></i><br><br>Criado por: <a href="https://developerspace.com.br/" target="_blank" style="color: #fff">@developerspace</a>
                    </p>
                </div>
            </div>
        </nav>