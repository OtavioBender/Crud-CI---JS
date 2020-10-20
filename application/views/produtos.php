<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Registro de produtos</title>
</head>
<body>


    <?php if(isset($linha)) : ?>
      <form  action="<?= base_url() ?>produto/update/<?= $linha['id'] ?>"  method="post" style=" width: 65%; padding: 6% 0 0 35%;">
    <?php else : ?>
      <form  action="<?= base_url() ?>produto/new" method="post" style=" width: 65%; padding: 6% 0 0 35%;">
    <?php endif; ?>

  <div class="row">
     <div style="padding: 6% 0% 0% 0%" class="container">
       <div class="form-group" >
        <h2 style="color:#8B0000; text-align: center;">Criar Produto</h2>
        <label style="color:#8B0000 ">Nome</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="" value="<?= isset($linha) ? $linha['name'] : "" ?>">
      <a style="color:red;"> <?php echo form_error('name'); ?> </a>
       </div>
      <div class="form-group">
        <label style="color:#8B0000 ">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" value="<?= isset($linha) ? $linha['descricao'] : "" ?> " >
         <a style="color:red;"> <?php echo form_error('descricao'); ?> </a>
      </div>
      <div class="form-group">
        <label style="color:#8B0000 ">Valor</label>
        <input type="text" class="form-control" id="valor" placeholder="" name="valor" value="<?= isset($linha) ? $linha['valor'] : "" ?>">
         <a style="color:red;"> <?php echo form_error('valor'); ?> </a>
      </div>
    </div>
    </div>
    <button  type="submit" class="btn btn-primary" style="background-color:#8B0000; border-color:#8B0000 ">Criar produto</button>
      <div class="col-12 col-sm-8 text-left">
       <a style="color: #8B0000" href="<?= base_url()?>principal">Voltar para dashboard</a>
      </div>
  
</form>
</body>
</html>
