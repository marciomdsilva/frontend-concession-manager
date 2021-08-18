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
                <th>Fila</th>
                <th>Lugar</th>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar Lugar</h5>
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
                            <label for="form-x">Fila</label>
                            <input type="text" class="form-control form-control-sm" id="form-x" name="form-x">
                        </div>
                        <div class="form-group">
                            <label for="form-y">Lugar</label>
                            <input type="text" class="form-control form-control-sm" id="form-y" name="form-y">
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
                            <label for="form-x">Fila</label>
                            <input type="text" class="form-control form-control-sm" id="form-x" name="form-x">
                        </div>
                        <div class="form-group">
                            <label for="form-y">Lugar</label>
                            <input type="text" class="form-control form-control-sm" id="form-y" name="form-y">
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
                            <label for="formDelete-x">Linha</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-x" name="formDelete-x" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formDelete-y">Lugar</label>
                            <input type="text" class="form-control form-control-sm" id="formDelete-y" name="formDelete-y" readonly>
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
                url: "<?php echo HOME_URL; ?>/places/update",
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
                "ajax": '<?php echo HOME_URL; ?>/places/searchAll',
                "scrollX": true
            });

            $("#formAddRow").submit(function(event) {
                event.preventDefault(); // avoid to execute the actual submit of the form.
                var data = {
                    'data': JSON.stringify(jQuery($(this)).serializeArray())
                }
                // console.log(data);
                $.ajax({
                    url: "<?php echo HOME_URL; ?>/places/add",
                    type: "post",
                    data: data,
                    success: function (response) {
                        if (response) {
                            var obj = JSON.parse(response)
                            if (obj['statusCode'] === 201) {
                                var place = JSON.parse(obj['response'])
                                table.row.add([
                                    place['place_id'],
                                    place['place_axis_x'],
                                    place['place_axis_y']
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
                    url: "<?php echo HOME_URL; ?>/places/delete",
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
                    $("#form-x").val(),
                    $("#form-y").val(),
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
                    $("#form-x").val(row[1]);//change input
                    $("#form-y").val(row[2]);//change input
                    // Display Modal
                    $("#modalEditRow").modal('show');
                }
                catch(err) {
                    // document.getElementById("demo").innerHTML = err.message;
                    // console.log('aiai');
                    $('#pageAlert').append('<div class="added">É necessário selecionar um lugar!</div>');
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
                    $("#formDelete-x").val(row[1]);//change input
                    $("#formDelete-y").val(row[2]);//change input
                    $("#modalDeleteRow").modal('show');
                }
                catch(err) {
                    $('#pageAlert').append('<div class="added">É necessário selecionar um lugar!</div>');
                    $("#pageAlert").fadeTo(2500, 500).slideUp(500, function(){
                        $("#pageAlert").slideUp(500);
                        $("#pageAlert").hide();
                        $('.added').remove();
                    });
                }
            });
        });
    </script>
