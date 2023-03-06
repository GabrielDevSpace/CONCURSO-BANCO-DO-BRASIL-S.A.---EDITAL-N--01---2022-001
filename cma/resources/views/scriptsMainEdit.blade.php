
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!--
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
-->
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
        placeholder: 'Matéria',
        height: 600
    });
</script>

<script>
    $('#summernote2').summernote({
        placeholder: 'Anotações',
        height: 600
    });
</script>
<script>
      // Array para armazenar os valores adicionados
      var valores = [];

      function adicionarValor() {
        // Obtém o valor digitado no input
        var valor = document.getElementById("valor").value;
        // Adiciona o valor ao array
        valores.push(valor);
        // Atualiza o valor da área de texto
        document.getElementById("valores").value = valores.join(", ");
        
        document.getElementById("valor").value = "";
        document.getElementById("valor").focus();
      }
    </script>


<script>
$(document).ready(function() {
    $('#formSubject').submit(function(e) {
        e.preventDefault(); // evitar que o formulário seja enviado normalmente
        var subject = $('#subject').val();
        var valores = $('#valores').val();
        $.ajax({
            type: "POST",
            url: "{{ route('submit_formSubject') }}",
            data: { 
                '_token': $('input[name=_token]').val(),
                'subject': subject, 
                'valores': valores 
            },
            success: function(data) {
                alert(data.message); // exibir a mensagem de retorno
                $('#valor').val(''); // limpar o campo de valores
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText); // exibir o erro
            }
        });
    });
});
</script>