<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title> Lanchonete ONE </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="navbar navbar-default">
        <div class="container">
            <h2><span class="glyphicon glyphicon-home"></span> PDV Lanchonete ONE</h2>
        </div>
    </div>

     <div class="container">
        <h1>CARDAPIO</h1>
        <BR>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalpedido"> Realizar Pedido </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalfim"> Finalizar Pedido </button>
        </form>
<BR><BR>

            <table class="table table-bordered table-resposive"> 
                <thead align="center">
                    <tr>
                        <td>ID</td>
                        <td>Nome do Lanche</td>
                        <td>Igredientes</td>
                        <td>Preço</td>
                    </tr>
                </thead>
                    <tbody>
                    <?php foreach($busca as $busca)  :?>
                        <tr>
                            <td><?= $busca ['id'] ?></td>
                            <td><?= $busca ['nomel'] ?></td>
                            <td><?= $busca ['descricao'] ?></td>
                            <td><?= $busca ['valor'] ?></td>

 <!-- INICIO MODAL 'finaliza pedido'-->
    <div class="modal fade" id="myModalfim" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                        <h4 class="modal-title texte-center" id="myModalLabel" align="center"> FINALIZAR PEDIDO</h4>
                    </div>
                    <div class="modal-body">
                                    <p>PEDIDO: </p>
                                    <p>PRODUTO: </p>
                        </div>
                        <div class="modal-body">
                                    <p>FORMAS DE PAGAMENTO: </p>
                        </div>
                        <div class="modal-footer">
                                <p aling="right">TOTAL:</p>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">FINALIZAR</button>
                        </div>
                </div>
            </div>
     </div>
  <!-- FIM MODAL 'finaliza pedido' -->

  <!-- INICIO MODAL 'realizar pedido'-->
            <div class="modal fade" id="myModalpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                            <h3 class="modal-title texte-center" id="myModalLabel" align="center" target="_blank"> PEDIDO</h3>
                            <div>

<form action="<?= base_url("blog/resultado/"); ?>" method="post">
<input type="text" class="form-control" placeholder="Pesquisar por Nome" name="pesquisar" size="auto">
<button type="submit" class="btn btn-info"> Pesquisar </button>
</form>
                            </div>



                            <BR>
               <form method="GET" action="<?= base_url("salvapedido/"); ?>" enctype="multipart/form-data">
                                <div>ID: <?= $busca ['id'] ?></div>
                                <div>Nome Lanche: <?= $busca ['nomel'] ?></div>
                                <div>Igredientes: <?= $busca ['descricao'] ?></div>
                                <div>Preço: <?= $busca ['valor'] ?></div>
                        </div>
    
                                <div class="modal-body">
                                    <h4>PRODUTO ADICIONAL</h4>

                            <div class="radio">
                            <label><input type="radio" name="optradio">Option 1</label>
                            </div>
                            <div class="radio">
                            <label><input type="radio" name="optradio">Option 2</label>
                            </div>
                            <div class="radio">
                            <label><input type="radio" name="optradio">Option 3</label>
                            </div>


        
                    <!-- ver depois' -->
                                    <p><?php  ['produtoadicional']; ?></p>
                                    <p><?php ['valor']; ?></p>
                    <!-- ver depois' -->
                                </div>
                        <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">GRAVAR PEDIDO</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
  <!-- FIM MODAL 'realiza pedido' -->
         </td>
            </tr>
                    <?php endforeach; ?> 
                    </tbody>
            </table>
    </div>
</body>
</html>