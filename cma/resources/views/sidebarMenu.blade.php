        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">

                <h1><a href="index.html" class="logo">SubjectNotes<span>Aprendendo a Aprender</span></a></h1>

                <!-- <div class="mb-5">

                    <form action="#" class="subscribe-form">
                <div class="row" style="margin-right:0">
                <div class="col-md-9 form-group d-flex">
                            <div class="icon"><span class="icon-paper-plane"></span></div>
                            <input type="text" class="form-control" placeholder="Add Nova Materia">
                </div>
                <div class="col-md-3">
                    <button class="form-group btn btn-success">ADD</button>
                </div>    
                    
                    </form>
                </div> -->
                <ul class="list-unstyled components mb-5">
                    @foreach($registros as $registro)
                    <li class="has-submenu">
                        <a href="#"><span class="fa fa-book mr-3"></span>{{$registro->title}}</a>
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
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </nav>