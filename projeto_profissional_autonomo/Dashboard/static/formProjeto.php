<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'header.php'; ?>
</head>

<!-- Importação do Ajax-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<body>
    <div class="wrapper">
        <?php include 'menu.php'; ?>

        <div class="main">
            <?php include 'topo.php'; ?>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Cadastro de Serviços</h1>


                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Formulário de Cadastro</h5>
                            </div>
                            <div class="card-body">
                                <form action="cadastro_cliente.php" enctype='multipart/form-data' method='post'>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name='nome' required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Local do serviço</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Selecione um local de servico</option>
                                            <option value="1">Casa</option>
                                            <option value="2">Empresa</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Descrição do problema</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2"></label>

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tarefas</label>
                                        <div style="text-align: left; ">
                                            <a class="btn btn-primary btn-sm" href="javascript:void(0)" id="addInput">Adicionar</a>
                                        </div>
                                    </div>

                                    <div id="dynamicDiv" class="mb-3">
                                        <p>
                                          <!--  <input type="text" id="inputeste" class="form-control" name="tarefa[]" size="70px" value="" required/>
                                            <a class="btn btn-dark btn-sm" style="margin-top:3px!important" href="javascript:void(0)" id="remInput"> Remover </a> -->
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Contrato</label>
                                        <input class="form-control" type="file" name='foto' id="formFile">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formData" class="form-label">Data de conclusão</label>
                                        <input class="form-control" type="date" name='data' id="formData">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="exampleInputPassword1">Valor R$</label>
                                        <input type="text" class="form-control input1" id="money" name='valor' required autocomplete="off"
                                                onchange="tiraMascara(this)">

                                        <input type="number" class="form-control total" name="var_est_sem_mask" value=""
                                            style="display: none">
                                    </div>

                                    <div class="form-group">
                                        <table>
                                            <tbody>
                                                <tr name="condicao-pag" id="condicao-pag">
                                                    <td>
                                                        <label for="exampleInputPassword1">Pagamento</label>
                                                        <select class="form-select" name="pagamento" />
                                                            <option>Selecione</option>
                                                            <option value=1>Número de parcelas</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr id="parcelamento" style="display:none">
                                                    <td>
                                                        <select id="n-parcelas" class="form-select" name="nroparcela">
                                                            <option value="1" selected>1x</option>
                                                            <option value="2">2x</option>
                                                            <option value="3">3x</option>
                                                            <option value="4">4x</option>
                                                            <option value="5">5x</option>
                                                            <option value="6">6x</option>
                                                            <option value="7">7x</option>
                                                            <option value="8">8x</option>
                                                            <option value="9">9x</option>
                                                            <option value="10">10x</option>
                                                            <option value="11">11x</option>
                                                            <option value="12">12x</option>
                                                        </select>
                                                        <br>
                                                    </td>
                                                </tr>

                                                <tr id="parcelas" style="display:none">
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div style="text-align: start; " class="mt-3">
                                        <button type="submit" class="btn btn-primary me-2">Cadastrar</button>
                                        <button type="reset" class="btn btn-light">Cancelar</button>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>


                </div>
            </main>

            


            <footer class="footer">
                <?php include 'footer.php' ?>
            </footer>

        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>

<!-- Importação do Jquery Mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
<script type="text/javascript">
  $("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', { reverse: true });
  $('.cnpj').mask('00.000.000/0000-00', { reverse: true });
  $('#money').mask('000.000.000.000.000,00', { reverse: true });
  $('.money2').mask("#.##0,00", { reverse: true });
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', { reverse: true });
  $('.clear-if-not-match').mask("00/00/0000", { clearIfNotMatch: true });
  $('.placeholder').mask("00/00/0000", { placeholder: "__/__/____" });
  $('.fallback').mask("00r00r0000", {
    translation: {
      'r': {
        pattern: /[\/]/,
        fallback: '/'
      },
      placeholder: "__/__/____"
    }
  });
  $('.selectonfocus').mask("00/00/0000", { selectOnFocus: true });
</script>


<!-- Função para criar um campo input text e um botão para remover as tarefas -->
<script> 
  $(function () {
    var scntDiv = $('#dynamicDiv');

    $(document).on('click', '#addInput', function () {
      $('<p>' +
        '<input type="text" id="inputeste" class="form-control" name="tarefa[]" size="70px" value="" required /> ' +
        '<a class="btn btn-dark btn-sm" style="margin-top:5px!important;text-align:right!important" href="javascript:void(0)" id="remInput">'  +
        'Remover' +
        '</a>' +
        '</p>').appendTo(scntDiv);
      return false;
    });

    $(document).on('click', '#remInput', function () {
      $(this).parents('p').remove();
      return false;
    });
  });
</script>

<!-- Função para criar as parcelas, atualizar valores, e etc incluindo em novos campos-->
<script type="text/javascript">
  //Funcao para atualizar as parcelas e seus valores
  function atualizaValores() {
    // pegando a quantidade de parcelas
    var valor = $("#n-parcelas").val();

    //variavel que recebe os inputs(HTML)
    var geraInputs = "";

    //Calculando o valor de cada parcela
    var valorParcela = parseFloat($(".total").val() / valor).toFixed(2);

    //gerando os inputs com os valores de cada parcela
    for (var i = 0; i < valor; i++) {
      geraInputs += "<input type='text' class='form-control' name='parcela[]' value='" + valorParcela + "'> <input type='date' class='form-control' name='datapagamento[]' value=''><br>";
    }

    // inserindo as parcelas 
    $("#parcelas").html(geraInputs);
  }

  $(document).ready(function (e) {
    $(".total").on('change keyup keydown keypress', function () {
      // ao alterar o valor total, chama a funcao para alterar as parcelas
      atualizaValores();


    });
    $('#condicao-pag').on('change', 'select', function () {
      // ao alterar a condicao de pagamento,chama a funcao para alterar as parcelas
      atualizaValores();
      if ($(this).val() == 1) {
        $('#parcelamento').show();
        /*Calcular valor das parcelas (2x, 3x, 4x) e preencher inputs*/
        $('#parcelas').show();
      }
      else {
        $('#parcelamento').hide();
        $('#parcelas').hide();
        $("input[name='parcela[]']").val('');
      }
    })

    $('#n-parcelas').on('change', function () {
      /*Calcular valor das parcelas (2x, 3x, 4x) e preencher inputs*/
      //Ao alterar a quantidade e parcelas chama a funcao para alterar as parcelas
      atualizaValores();
    });
  });
</script>

<!-- Função pare remover a formatação da Mask para não dar problema na criação das parcelas -->
<script type="text/javascript">
  function removeMaskMoney(x) {
    x = "" + x;
    if ((x.replace(",", ".") != x)) {
      if (x.replace(".", "") != x) {
        aux = x;
        x = x.replace(".", "");
      }
      else {
        aux = x;
      }
      if (x.replace(",", ".") != x) {
        x = x.replace(",", ".")
      } else {
        x = aux;
      }
    }
    if (isNaN(parseFloat(x))) {
      x = 0;
    } else {
      x = parseFloat(x)
    }
    return x;
  }

  function tiraMascara(e) {
    value = removeMaskMoney($(e).val());
    $("[name=var_est_sem_mask]").val(value)
  }
</script>


