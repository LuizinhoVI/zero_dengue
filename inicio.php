<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZER@DENGUE</title>
    


 <style>
     .titulo{

    color: white;
    font-size: 50px;
     }
.menu{

    background: blue; 
    margin-top: 10%;
    width: 400px;
    height: 250px;
      border-radius: 25px;
  
  padding: 20px;
  width: 200px;
  height: 150px;

  
}

.entrada{
    font-size: 20px;
border-radius: 25px;
}
.bt{

margin-top: 10px;
    width: 150px;
    height: 40px;   
}
 .p{
        color: white;
    }
 </style>

</head>

<body bgcolor="black"> 

<div align="center">

    <form action="denuncia.php" method="GET">

    <table  class="menu" >
        <td colspan="2"  align="center" height="100" class="titulo" >
            Zero@Dengue
        </td>
        <tr>
    

        
        <!-- ENTRADA do email---------------------------------------------------------------------------->
        <td align="center">
        <input type="email" size="20" class="entrada" placeholder=" Email" id="email_">
        </td>
        <tr>


                <!--ENTRADA DA senha ------------------------------------------------------------------- -->
                <td align="center"  >
                    <input type="password" size="20" class="entrada"placeholder=" Senha" id="senha_">
                    </td>
                    <tr>
                        <!-- botão para loguin------------------------------------------------------------- -->
        <td colspan="2" align="center" >
    <input type="submit"  value="Entrar"  id="bt_" class="bt" > 
        </td>
        <tr>
            <tr>
            <!-- BT DE CADASTRO------------------------------------------------------------------ -->
        <td align="center">
        </form>

        <form action="cadastro.php" method="POST">

            <input type="submit" value="Cadastrar" id="cadastro">

       </form>
        </td>

    </table>
    
</div>

<br>
    <p class="p" align="center"> Zero Dengue é um site organizado por pessoas com o bem maior de manter a população 
       em segura, 
    <br>
       sendo assim fizeram uma grande corrente de amigos para poder parar o propagação de casos de dengue. <br>
        esse Site foi designado para fazer a sua parte, que é de ajudar os vigilantes de retirar os focos da dengue, <br>
        entrando no site você vai efetuar o cadastro e fazer o loguin, e assim na parte da denucia vai colocar o local <br>
        do endereço e a foto onde se localiza os focos da dengue.      

    </p>

</body>
</html>
