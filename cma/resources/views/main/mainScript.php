<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
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
</script>