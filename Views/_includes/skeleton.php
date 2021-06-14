<header id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <?php echo $this->pageTitle; ?> </h1>
            </div>
            <div class="col-md-2">
                <!--------------------------------------------------------------------------------------------------------------------->
                <!--                <div class="dropdown create" >-->
                <!--                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                        Dropdown button-->
                <!--                    </button>-->
                <!--                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">-->
                <!--                        <a class="dropdown-item" data-toggle="modal" href="#addPage">Add Page</a>-->
                <!--                        <a class="dropdown-item" href="action.htmk">Action</a>-->
                <!--                        <a class="dropdown-item" href="anotheraction.html">Another action</a>-->
                <!--                        <a class="dropdown-item" href="someting.html">Something else here</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--------------------------------------------------------------------------------------------------------------------->
            </div>
        </div>
    </div>
</header>


<section id="breadcrumb">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="active">Ainda por fazer!!</li>
        </ol>
    </div>
</section>



<div id="content">

    <!--    Aqui Fica toda a estrutura do site -->
    <!--    As tags que fecham o body e o div de content são fechadas dentro do footer.php-->
    <section id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!--------------------------------------------------------------------------------------------------------------------->
                    <div class="list-group mb-3">
                        <?php if ($this->pageTitle === 'Dashboard'): ?>
                        <a href="index" class="list-group-item list-group-item-action active bg-dark ">
                        <?php else: ?>
                            <a href="index" class="list-group-item list-group-item-action">
                        <?php endif; ?>
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard </a>
                        <!--------------------------------------------------------------------------------------------------------------------->
                        <?php if ($this->pageTitle === 'Clientes'): ?>
                        <a href="customers" class="list-group-item list-group-item-action active bg-dark">
                        <?php else: ?>
                        <a href="customers" class="list-group-item list-group-item-action">
                        <?php endif; ?>
                            <span class="fas fa-portrait" aria-hidden="true"></span> Clientes </a>
                        <!--------------------------------------------------------------------------------------------------------------------->
                        <?php if ($this->pageTitle === 'Reservas'): ?>
                            <a href="reservations" class="list-group-item list-group-item-action active bg-dark">
                        <?php else: ?>
                            <a href="reservations" class="list-group-item list-group-item-action">
                        <?php endif; ?>
                            <span class="fas fa-receipt" aria-hidden="true"></span> Reservas </a>
                        <!--------------------------------------------------------------------------------------------------------------------->
                        <a href="../../../index.php" class="list-group-item list-group-item-action">
                            <span class="fas fa-umbrella-beach fa-flip-horizontal" aria-hidden="true">
                            </span> Lugares </a>

                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Fora de Serviço</a>
                    </div>
                    <!--------------------------------------------------------------------------------------------------------------------->
                    <div class="card card-body bg-light dash-box">
                        <h4>Disk Space Used</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                        <h4>Bandwidth Used </h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                    <!--------------------------------------------------------------------------------------------------------------------->
                </div>
                <div class="col-md-9">