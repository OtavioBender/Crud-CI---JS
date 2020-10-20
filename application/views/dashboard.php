
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<script>
  $(function(){
    showAllEmployee();

    function showAllEmployee(){
      $.ajax({
        type: 'ajax',
        url: '<? echo base_url()?>user/userDetails',
        async: false,
        dataType: 'json',
        success: function(data){
          console.log(data);

        },
        error: function(){
          alert("Não foi possivel carregar");

        }
      });
    }

  });
</script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"  >Dashboard</h1>
  </div>


  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2" >Usuarios cadastrados</h2>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <a type="button" class="btn btn-light" style="color:#8B0000;" href="<?= base_url()?>registro">Criar novo usuario</a>
    </div>
  </div>

     
      </tbody>
    </table>

    <div class="table-responsive">
  <!--  <button id="btn" type="submit" >Carregar</button> -->
    <table class="table table-bordered table-hover">
      <thead>

        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Alterar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
         <?php 

            foreach($tabela as $linha) : ?>
            <tr> 
                      <td><?=  $linha['id']  ?></td> 
                      <td><?=  $linha['name'] ?></td> 
                      <td><?=  $linha['email']  ?></td> 
                      <td><?=  $linha['telefone']  ?></td> 
                      <td>
                         <a href="<?= base_url() ?>registro/edit/<?= $linha['id'] ?>" style="color:#8B0000;">Alterar</a>
                      </td> 
                      <td>
                        <a href="<?= base_url() ?>registro/delete/<?= $linha['id'] ?>"style="color:#8B0000;">Excluir</a>
                      </td>   
                   </tr>       
           

        <?php endforeach; ?>       
      </tbody>
    </table>
    <style> 
      th{
        color:#8B0000;
      } 
  </style>
  </div>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2" >Produtos cadastrados</h2>
  </div>
  <div class="table-responsive">
  <!--  <button id="btn" type="submit" >Carregar</button> -->
    <table class="table table-bordered table-hover">
      <thead>

        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Valor</th>
          <th>Alterar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
         <?php 

            foreach($produtos as $produto) : ?>
            <tr> 
                      <td><?=  $produto['id']  ?></td> 
                      <td><?=  $produto['name'] ?></td> 
                      <td><?=  $produto['descricao']  ?></td> 
                      <td><?=  $produto['valor']  ?></td>  
                       <td>
                         <a href="<?= base_url() ?>produtos/edit/<?= $produto['id'] ?>" style="color:#8B0000;">Alterar</a>
                      </td> 
                      <td>
                        <a href="<?= base_url() ?>produtos/delete/<?= $produto['id'] ?>"style="color:#8B0000;">Excluir</a>
                      </td>  
                   </tr>       
           

        <?php endforeach; ?>       
      </tbody>
    </table>
    <style> 
      th{
        color:#8B0000;
      } 
  </style>
  </div>
</main>

   

