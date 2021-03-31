<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Açoes
  </h1>
  <ol class="breadcrumb">
    <li><a href="/acoes"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/acoes">Ação</a></li>
    <li class="active"><a href="/acoes/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nova Ação</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/acoes/create" method="post">
          <div class="box-body">
            <div class="col col-md-2">
              <div class="form-group">
                <label for="descompany">Empresa</label>
                <input type="text" class="form-control" name="descompany" id="descompany">
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="sgcompany">Sigla</label>
                <input type="text" class="form-control" name="sgcompany" id="sgcompany" required>
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="descnpj">CPF/CNPJ</label>
                <input type="text" class="form-control" name="descnpj" id="descnpj">
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="tipe">Tipo</label>
                <select class="form-control" name="tipe" id="tipe">
                  <option value="1" selected>Swing Trade</option>
                  <option value="2">Day Trade</option>
                </select>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="col col-md-2">
              <div class="form-group">
                <label for="dtbuy">Data Compra</label>
                <input type="text" class="form-control" name="dtbuy" id="dtbuy" onChange="replaceSlash(dtbuy)" required>
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="qtdebuy">Qtde</label>
                <input type="text" class="form-control" name="qtdebuy" id="qtdebuy" required>
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="prcbuy">Valor Compra</label>
                <input type="text" class="form-control" name="prcbuy" id="prcbuy" onChange="sumTotal(qtdebuy.value, prcbuy, tlbuy);" required>
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="tlbuy">Total Compra</label>
                <input type="text" class="form-control" id="tlbuy" name="tlbuy" readonly>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="col col-md-2">
              <div class="form-group">
                <label for="dtsell">Data Venda</label>
                <input type="text" class="form-control" name="dtsell" id="dtsell" onChange="replaceSlash(dtsell)">
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="qtdesell">Qtde</label>
                <input type="text" class="form-control" name="qtdesell" id="qtdesell">
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="prcsell">Valor Venda</label>
                <input type="text" class="form-control" name="prcsell" id="prcsell" onChange="sumTotal(qtdesell.value, prcsell, tlsell)">
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="tlsell">Total Venda</label>
                <input type="text" class="form-control" id="tlsell" name="tlsell" readonly>
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="lucre">Lucro</label>
                <input type="text" class="form-control" id="lucre" name="lucre" readonly>
              </div>
            </div>
            <div class="col col-md-2">
              <div class="form-group">
                <label for="tax">Taxa</label>
                <input type="text" class="form-control" id="tax" name="tax" readonly>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="/acoes" class="btn btn-warning">Voltar</a>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->