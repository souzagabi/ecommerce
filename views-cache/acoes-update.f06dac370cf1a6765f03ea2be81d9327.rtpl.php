<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Ação</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/acoes/<?php echo htmlspecialchars( $acoes["idinvestiment"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="box-body">
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="descompany">Empresa</label>
                  <input type="text" class="form-control" name="descompany" id="descompany" value="<?php echo htmlspecialchars( $acoes["descompany"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="sgcompany">Sigla</label>
                  <input type="text" class="form-control" name="sgcompany" id="sgcompany" value="<?php echo htmlspecialchars( $acoes["sgcompany"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="descnpj">CPF/CNPJ</label>
                  <input type="text" class="form-control" name="descnpj" id="descnpj" value="<?php echo htmlspecialchars( $acoes["descnpj"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="tipe">Tipo</label>
                  <select class="form-control" name="tipe" id="tipe">
                    <option value="1" <?php if( $acoes["tipe"] == 1 ){ ?>selected<?php } ?>>Swing Trade</option>
                    <option value="2" <?php if( $acoes["tipe"] == 2 ){ ?>selected<?php } ?>>Day Trade</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="dtbuy">Data Compra</label>
                  <input type="text" class="form-control" name="dtbuy" id="dtbuy" value="<?php echo htmlspecialchars( $acoes["dtbuy"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onChange="replaceSlash(dtbuy)" required>
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="qtdebuy">Qtde</label>
                  <input type="text" class="form-control" name="qtdebuy" id="qtdebuy" value="<?php echo htmlspecialchars( $acoes["qtdebuy"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="prcbuy">Valor Compra</label>
                  <input type="text" class="form-control" name="prcbuy" id="prcbuy" onChange="sumTotal(qtdebuy.value, prcbuy, tlbuy)" value="<?php echo htmlspecialchars( $acoes["prcbuy"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="tlbuy">Total Compra</label>
                  <input type="text" class="form-control" id="tlbuy" name="tlbuy" value="<?php echo htmlspecialchars( $acoes["tlbuy"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" readonly>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="dtsell">Data Venda</label>
                  <input type="text" class="form-control" name="dtsell" id="dtsell" value="<?php echo htmlspecialchars( $acoes["dtsell"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onChange="replaceSlash(dtsell)">
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="qtdesell">Qtde</label>
                  <input type="text" class="form-control" name="qtdesell" id="qtdesell" value="<?php echo htmlspecialchars( $acoes["qtdesell"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="prcsell">Valor Venda</label>
                  <input type="text" class="form-control" name="prcsell" id="prcsell" onChange="sumTotal(qtdesell.value, prcsell, tlsell)" value="<?php echo htmlspecialchars( $acoes["prcsell"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="tlsell">Total Venda</label>
                  <input type="text" class="form-control" id="tlsell" name="tlsell" value="<?php echo htmlspecialchars( $acoes["tlsell"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" readonly>
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="lucre">Lucro</label>
                  <input type="text" class="form-control" id="lucre" name="lucre" value="<?php echo htmlspecialchars( $acoes["lucre"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" readonly>
                </div>
              </div>
              <div class="col col-md-2">
                <div class="form-group">
                  <label for="tax">Taxa</label>
                  <input type="text" class="form-control" id="tax" name="tax" value="<?php echo htmlspecialchars( $acoes["tax"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" readonly>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Alualizar</button>
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