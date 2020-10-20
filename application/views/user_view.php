<!doctype html>
<html>
 <head>

  <script src='<?php echo base_url(); ?>script/script.js' type='text/javascript' ></script>

<script type='text/javascript'>
var baseURL= "<?php echo base_url();?>user";
</script>
   <script src='<?php echo base_url(); ?>script/script.js' type='text/javascript' ></script>
   
 </head>
 <body>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2"  >Consulta de usuarios</h1>
  </div>
 
 
  Selecione o nome do usuario:  <select id='sel_user' style="color:#8B0000">
     <?php 
     foreach($tb_users as $tb_user){
  echo "<option value='".$tb_user['name']."' >".$tb_user['name']."</option>";
     }
     ?>
  </select>

  <!-- User details -->

  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <br/>
   <font style="">Nome :</font> <span id='suname' style="color:#8B0000"></span><br/><br/>
   Identificador : <span id='sid' style="color:#8B0000"></span><br/><br/>
   E-mail : <span id='semail' style="color:#8B0000"></span><br/><br/>
   Telefone : <span id='stelefone' style="color:#8B0000"></span><br/><br/>
    </thead>
      <tbody>
  </div>
</main>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type='text/javascript'>
  $(document).ready(function(){
 
   $('#sel_user').change(function(){
    var name = $(this).val();
    $.ajax({
     url:'<?=base_url()?>index.php/User/userDetails',
     method: 'post',
     data: {name: name},
     dataType: 'json',
     success: function(response){
       var len = response.length;
       $('#suname,#sid,#semail,#stelefone').text('');
       if(len > 0){
         // Read values
         var name = response[0].name;
         var id = response[0].id;
         var email = response[0].email;
         var telefone = response[0].telefone;
 
         $('#suname').text(name);
         $('#sid').text(id);
         $('#semail').text(email);
         $('#stelefone').text(telefone);
 
       }
 
     }
   });
  });
 });
  

 </script>
 </body>
</html>
