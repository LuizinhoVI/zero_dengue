<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denuncia</title>
    

    <style>

    .menu{

        margin-top: 4%;

         background: white; 

    width: 80%;
    height: 20%;
      border-radius: 25px;

    }
    .titulo{
        font-size: 60px;
    }

   .enviar{
    
    margin-top:10px; 
       width: 200px;
       height: 50px;
   }
   .voltar{
       margin-left:50px;
       width: 200px;
       height: 50px; 
   }
  .alerta{

    margin-top:50px;



  }
  
    </style>

    <script>

    </script>

</head>

<body bgcolor="black">
<br>
    
        <form action="inicio.php" method="POST" >
        <table border="" class="menu" align="center">
        <td colspan="2" align="center" class="titulo"> Denucia </td>
        
        <tr>

        <!-- endereço do local--------------------------------------------------------------------------------------->
        <td width="300px"  align="center"> 
           Endereço :<input type="text" size="110" placeholder="Endereço..."> </td>
        <tr></tr>        

     <td colspan="" width="500px" height="500px"  align="center"> 
        <!-- centro da foto --------------------------------------------------------------------------------------------->
     <input type="image" src="dengue.jpg" id="mostrar_foto"> 
        </td> 
     
     <TR>
         
         
           <!--foto do local --------------------------------------------------------------------------------------->
            <td colspan="2">
            <input type="file" id="pegar_foto" name="ft" >
            </td>
            <tr></tr>
            
        <td>
            <!-- entrada da descrição----------------------------------------------------------------------------------------- -->
            Descrição obrigatória com o relato do local:  <input type="text" size="80"  class="detalhes" >
     </td>
     <tr>
         <td align="center">
            <input type="submit" value="Enviar" class="enviar"> 

            <input type="submit" value="Voltar" class="voltar">
         </td>
       
    </table> 
        </form>
    
    <!-- -------------------------------------------------------------------------------------- -->

<table border="2 "  align="center" bgcolor="white" class="alerta">  

<td align="center" >

 <font color="green">   Denucia enviada com sucesso !</font>  
</td>

</table>


    </body>

</html>
