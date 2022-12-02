<style>
   .container {
      font-family: ariel;
      width: 100vw;
      height: 100vh;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
   }

   .box {
      padding-top: 90px;
      background-color: rgba(0, 0, 0, 0.8);
      width: 350px;
      height: 400px;
      border-radius: 15px;
   }

   .input {
      padding: 15px;
      border: none;
      outline: none;
      font-size: 15px;
   }

   .button {
      background-color: dodgerblue;
      border: none;
      padding: 15px;
      width: 90%;
      border-radius: 10px;
      color: white;
      font-size: 15px;
      align-items: center;
   }

   .button:hover {
      background-color: deepskyblue;
      cursor: pointer;
   }

   .h1_login {
      text-align: center;
   }
</style>
<div class="container">
   <div class="box">
      <form action="<?php echo base_url();?>/admin/auth" method="post"><!--NÃO PRECISA ESTILIZAR ESTA TAG-->
         <h1 class="h1_login">Login</h1>
         <input class="input" name="login" type="text" placeholder="Nome"><br><br>
         <input class="input" name="password" type="password" placeholder="Senha">
         <br><br>
         <button class="button">Enviar</button><br>
      </form>
   </div>
</div>