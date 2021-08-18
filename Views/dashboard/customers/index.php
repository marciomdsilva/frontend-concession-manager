<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<!--<h2 class="text-center"> Clientes </h2>-->


<div class="card mb-3">
    <div class="card-header bg-dark main-color-bg">
        <div class="card-title"><?php echo $this->pageTitle; ?></div>
    </div>
    <div class="card-body">
        <div id="pageAlert" class="alert alert-warning collapse" role="alert">
        </div>

        <table id="example" class="display nowrap" style="width:100%">
            <button id="addRow" type="button" class="btn btn-secondary mr-1"> Adicionar </button>
            <button id="editRow" type="button" class="btn btn-secondary mr-1"> Editar </button>
            <button id="deleteRow" type="button" class="btn btn-danger mr-1">Eliminar </button>

            <thead>

            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Morada</th>
                <th>Cidade</th>
                <th>Código Postal</th>
                <th>Concelho</th>
                <th>Pais</th>
            </tr>
            </thead>
            <tfoot>
            <hr>
            <!--    <tr>-->
            <!--        <th>Name</th>-->
            <!--        <th>Position</th>-->
            <!--        <th>Office</th>-->
            <!--        <th>Extn.</th>-->
            <!--        <th>Start date</th>-->
            <!--        <th>Salary</th>-->
            <!--    </tr>-->
            </tfoot>
        </table>
    </div>

    <!-- Modal EDIT-->
    <div class="modal fade" id="modalEditRow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formEditRow" class="form-container"  method="post">
                        <div class="form-group">
                            <label for="form-id">Id</label>
                            <input type="text" class="form-control form-control-sm" id="form-id" name="form-id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="form-name">Nome</label>
                            <input type="text" class="form-control form-control-sm" id="form-name" name="form-name">
                        </div>
                        <div class="form-group">
                            <label for="form-phone">Telefone</label>
                            <input type="text" class="form-control form-control-sm" id="form-phone" name="form-phone">
                        </div>
                        <div class="form-group">
                            <label for="form-address">Morada</label>
                            <input type="text" class="form-control form-control-sm" id="form-address" name="form-address">
                        </div>
                        <div class="form-group">
                            <label for="form-postal_code">Código Postal</label>
                            <input type="text" class="form-control form-control-sm" id="form-postal_code" name="form-postal_code">
                        </div>
                        <div class="form-group">
                            <label for="form-city">Cidade</label>
                            <input type="text" class="form-control form-control-sm" id="form-city" name="form-city">
                        </div>
                        <div class="form-group">
                            <label for="form-state">Concelho</label>
                            <input type="text" class="form-control form-control-sm" id="form-state" name="form-state">
                        </div>
                        <div class="form-group">
                            <label for="form-country">Pais</label>
                            <input type="text" class="form-control form-control-sm" id="form-country" name="form-country">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <button id="submitEdit" type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal ADD -->
    <div class="modal fade" id="modalAddRow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formAddRow" class="form-container"  method="post">
                        <div class="form-group">
                            <label for="formAdd-name">Nome</label>
                            <input type="text" class="form-control form-control-sm" id="formAdd-name" name="formAdd-name">
                        </div>
                        <div class="form-group">
                            <label for="formAdd-phone">Telefone</label>
                            <input type="text" class="form-control form-control-sm" id="formAdd-phone" name="formAdd-phone">
                        </div>
                        <div class="form-group">
                            <label for="formAdd-address">Morada</label>
                            <input type="text" class="form-control form-control-sm" id="formAdd-address" name="formAdd-address">
                        </div>
                        <div class="form-group">
                            <label for="formAdd-postal_code">Código Postal</label>
                            <input type="text" class="form-control form-control-sm" id="formAdd-postal_code" name="formAdd-postal_code">
                        </div>
                        <div class="form-group">
                            <label for="formAdd-city">Cidade</label>
                            <input type="text" class="form-control form-control-sm" id="formAdd-city" name="formAdd-city">
                        </div>
                        <div class="form-group">
                            <label for="formAdd-state">Concelho</label>
                            <input type="text" class="form-control form-control-sm" id="formAdd-state" name="formAdd-state">
                        </div>
                        <div class="form-group">
                            <label for="formAdd-country">Pais</label>
                            <input type="text" class="form-control form-control-sm" id="formAdd-country" name="formAdd-country">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <button id="submitAdd" type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Modal DELETE-->
    <div class="modal fade" id="modalDeleteRow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formDeleteRow" class="form-container"  method="post">
                        <div class="form-group">
                            <label for="formDelete-id">Id</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-id" name="formDelete-id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formDelete-name">Nome</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-name" name="formDelete-name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formDelete-phone">Telefone</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-phone" name="formDelete-phone" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formDelete-address">Morada</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-address" name="formDelete-address" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formDelete-postal_code">Código Postal</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-postal_code" name="formDelete-postal_code" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formDelete-city">Cidade</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-city" name="formDelete-city" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formDelete-state">Concelho</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-state" name="formDelete-state" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formDelete-country">Pais</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-country" name="formDelete-country" readonly>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <button id="submitDelete" type="submit" class="btn btn-danger">Save changes</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        $("#formEditRow").submit(function(event) {
            event.preventDefault(); // avoid to execute the actual submit of the form.
            var data = {
                'data': JSON.stringify(jQuery($(this)).serializeArray())
            }

            // console.log(data);

            $.ajax({
                url: "<?php echo HOME_URL; ?>/customers/update",
                type: "post",
                data: data,
                success: function (response) {
                    if (response) {
                        $("#modalEditRow").modal("hide");
                        // var tmpl = '<div class="alert alert-warning alert-dismissable">' +
                        //     '<button class="close" data-dismiss="alert">&times;</button>' + response + '</div>';
                        //
                        // $('.form-container').append(tmpl);
                        // setTimeout(function () {
                        //     $('.alert').addClass('on');
                        // }, 200);
                        // location.reload();
                        // alert(response);
                    } else {
                        //window.location.href = "<?php //echo HOME_URL; ?>///customers";
                    }
                }
            });
        });

        $(document).ready(function () {
            var table = $('#example').DataTable({
                "ajax": '<?php echo HOME_URL; ?>/customers/searchAll',
                "scrollX": true
            });

            $("#formAddRow").submit(function(event) {
                event.preventDefault(); // avoid to execute the actual submit of the form.
                var data = {
                    'data': JSON.stringify(jQuery($(this)).serializeArray())
                }
                // console.log(data);
                $.ajax({
                    url: "<?php echo HOME_URL; ?>/customers/add",
                    type: "post",
                    data: data,
                    success: function (response) {
                        if (response) {
                            var obj = JSON.parse(response)
                            if (obj['statusCode'] === 201) {
                                var user = JSON.parse(obj['response'])
                                table.row.add([
                                    user['customer_id'],
                                    user['name'],
                                    user['phone'],
                                    user['address_line'],
                                    user['city'],
                                    user['postal_code'],
                                    user['state'],
                                    user['country']
                                ]).draw(false);
                                $("#modalAddRow").modal("hide");
                            }

                            /* Resposta da API*/
                            var msg = JSON.parse(obj['response'])
                            var tmpl = '<div id="alert-warning" class="alert alert-warning alert-dismissable">' +
                                '<button class="close" data-dismiss="alert">&times;</button>' + msg['message'] + '</div>';

                            $('.form-container').append(tmpl)

                            $(".alert-warning").fadeTo(5000, 500).slideUp(500, function(){
                                $(".alert-warning").slideUp(500);
                                $(".alert-warning").alert('close');
                            });

                            setTimeout(function () {
                                $('.alert').addClass('on');
                            }, 200);
                        }
                    }
                });
            });

            $("#formDeleteRow").submit(function(event) {
                event.preventDefault(); // avoid to execute the actual submit of the form.
                var data = {
                    'data': JSON.stringify(jQuery($(this)).serializeArray())
                }
                // console.log(data);
                $.ajax({
                    url: "<?php echo HOME_URL; ?>/customers/delete",
                    type: "post",
                    data: data,
                    success: function (response) {
                        if (response) {
                            var obj = JSON.parse(response)
                            var msg = JSON.parse(obj['response'])
                            if (obj['statusCode'] === 200) {
                                table.row('.selected').remove().draw(false);
                                $("#modalDeleteRow").modal("hide");
                            }
                            var tmpl = '<div class="alert alert-warning alert-dismissable">' +
                                '<button class="close" data-dismiss="alert">&times;</button>' + msg['message'] + '</div>';

                            $('.form-container').append(tmpl)

                            $(".alert-warning").fadeTo(5000, 500).slideUp(500, function(){
                                $(".alert-warning").slideUp(500);
                                $(".alert-warning").alert('close');
                            });
                        }
                    }
                });
            });

            $('#submitEdit').on('click', function () {
                table.row('.selected').data([
                    $("#form-id").val(),
                    $("#form-name").val(),
                    $("#form-phone").val(),
                    $("#form-address").val(),
                    $("#form-city").val(),
                    $("#form-postal_code").val(),
                    $("#form-state").val(),
                    $("#form-country").val()
                ]).draw(false);
            });

            $('#addRow').on('click', function () {
                $("#modalAddRow").modal('show');
            });

            // Select a row
            $('#editRow').click(function () {
                try {
                    // alert(table.rows('.selected').data().length + ' row(s) selected');
                    var row = Array.from(table.rows('.selected').data()[0]);
                    // var customerId = row[0];
                    // alert(customerId);
                    // Add response in Modal body
                    // $('.modal-body').html(customerId); // meter os dados do utilizador no formulario
                    $("#form-id").val(row[0]);//change input
                    $("#form-name").val(row[1]);//change input
                    $("#form-phone").val(row[2]);//change input
                    $("#form-address").val(row[3]);//change input
                    $("#form-city").val(row[4]);//change input
                    $("#form-state").val(row[6]);//change input
                    $("#form-postal_code").val(row[5]);//change input
                    $("#form-country").val(row[7]);//change input
                    // Display Modal
                    $("#modalEditRow").modal('show');
                }
                catch(err) {
                    // document.getElementById("demo").innerHTML = err.message;
                    // console.log('aiai');
                    $('#pageAlert').append('<div class="added">É necessário selecionar um cliente!</div>');
                    $("#pageAlert").fadeTo(2500, 500).slideUp(500, function(){
                        $("#pageAlert").slideUp(500);
                        $("#pageAlert").hide();
                        $('.added').remove();
                    });
                }
            });

            //Select row dataTable
            $('#example tbody').on('click', 'tr', function () {
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                } else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });

            $('#deleteRow').click(function () {
                try {
                    var row = Array.from(table.rows('.selected').data()[0]);
                    $("#formDelete-id").val(row[0]);//change input
                    $("#formDelete-name").val(row[1]);//change input
                    $("#formDelete-phone").val(row[2]);//change input
                    $("#formDelete-address").val(row[3]);//change input
                    $("#formDelete-city").val(row[4]);//change input
                    $("#formDelete-state").val(row[6]);//change input
                    $("#formDelete-postal_code").val(row[5]);//change input
                    $("#formDelete-country").val(row[7]);//change input
                    $("#modalDeleteRow").modal('show');
                }
                catch(err) {
                    $('#pageAlert').append('<div class="added">É necessário selecionar um cliente!</div>');
                    $("#pageAlert").fadeTo(2500, 500).slideUp(500, function(){
                        $("#pageAlert").slideUp(500);
                        $("#pageAlert").hide();
                        $('.added').remove();
                    });
                }
            });
        });
    </script>
