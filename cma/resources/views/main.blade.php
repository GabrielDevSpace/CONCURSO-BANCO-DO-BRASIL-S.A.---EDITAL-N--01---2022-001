<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4" >
                
                <h1><a href="index.html" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>

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
                    <li class="has-submenu ">
                        <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
                        <ul class="submenu">
                            <li><a href="#">Submenu Item 1</a></li>
                            <li><a href="#">Submenu Item 2</a></li>
                            <li><a href="#">Submenu Item 3</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><span class="fa fa-user mr-3"></span> About</a>
                        <ul class="submenu">
                            <li><a href="#">Submenu Item 1</a></li>
                            <li><a href="#">Submenu Item 2</a></li>
                            <li><a href="#">Submenu Item 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-briefcase mr-3"></span> Works</a>
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

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row" style='margin:0; padding:10px'>
                <div class="col-md-6">
                    <div class="card" style='height:100%; '>
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <textarea style="height:100%" id="summernote" name="editordata"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <textarea id="summernote2" name="editordata2"></textarea>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
// seleciona todos os elementos "a" dentro de "li" com a classe "has-submenu"
const linksHasSubmenu = document.querySelectorAll('.has-submenu > a');

// adiciona um event listener a cada link
linksHasSubmenu.forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // evita que o link seja redirecionado

    // seleciona o elemento "ul" correspondente
    const submenu = this.parentNode.querySelector('.submenu');

    // alterna a propriedade "display"
    submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
  });
});


        const heightBody = window.innerHeight;
        console.log(heightBody);
    </script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 4',
            height: 600
        });
    </script>

    <script>
        $('#summernote2').summernote({
            placeholder: 'Hello Bootstrap 4',
            height: 600
        });
    </script>
</body>

</html>