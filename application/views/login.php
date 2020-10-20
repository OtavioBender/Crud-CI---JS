

<form  method="post" style=" width: 65%; padding: 5% 0 0 35%;" action="<?=base_url() ?>login/autentica">
  <div class="container">
  <div class="form-group">
    <h2 style="text-align: center; color:#8B0000">Faça login</h2>
    <label for="email" style="color:#8B0000 ">Endereço de email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Seu email">
  </div>
  <div class="form-group">
    <label for="password" style="color:#8B0000 ">Senha</label>
    <input type="password" class="form-control" id="password" placeholder="Senha" name="password">
  </div>
<div class="row" style="padding: 2% 0 0 4%">
  <button type="submit" class="btn btn-primary" style="background-color:#8B0000; border-color:#8B0000 ">Enviar</button>
  <div class="col-12 col-sm-8 text-left">
    <a style="color:#8B0000;"  href="<?= base_url()?>registro">Clique aqui para se cadastrar</a>
  </div>
  </div>
</div>
</form>
</body>
</html>
