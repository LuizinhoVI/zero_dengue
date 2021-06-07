<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <META HTTP-EQUIV="REFRESH" CONTENT="10;" > -->
    <title>Zero@Dengue</title>
    <h1 align="center " class="titulo">Zero@Dengue</h1>

    <style>
        .menu {

            font-size: 22px;
color: blue;
        }
        .resposta{
            font-size: 15px;

        color: whiter       ;
        }

        .titulo {

            font-size: 40px;

        }
        .tabela{
            background: white;
        }
        .cadastro{
            font-size:60px;
        }
    </style>

</head>

<body bgcolor="black">
        <form action="inicio.php" method="POST" >
            <table border="5" width="500px" height="100px" align="center" class="tabela">
                <td colspan="2" align="center" class="cadastro">
                    Cadastro
                </td>
                <tr></tr>
                <td align=" right" class="menu"> Nome Completo</td>
                <td> <input type="text" class="resposta" size="30"></td>
                <tr></tr>
                <td align="right" class="menu"> E-mail </td>
                <td> <input type="email" class="resposta" size="30"></td>
                <tr></tr>
                <td align="right" class="menu"> Senha </td>
                <td> <input type="password" class="resposta" size="30"> </td>
                <tr></tr>
                <td align="right" class="menu"> Confirmar Senha </td>
                <td> <input type="password" class="resposta" size="30"> </td>
                <tr></tr>
                
                

                <td align="right" class="menu"> RG </td>
                <td> <input type="text" class="resposta" maxlength="9"  placeholder="00 000 000-0" size="30"></td>
                <tr></tr>
                <td align="right" class="menu"> CPF </td>
                <td > <input type="text" class="resposta" size="10" maxlength="11" placeholder="000-000-000-00"></td>
                <tr></tr>
                <td align="right" class="menu"> Endereço </td>
                <td> <input type="text" class="resposta" size="30"></td>
                <tr></tr>
                <td align="right" class="menu"> Telefone </td>
                <td> <input type="tel" id="phone" maxlength="12"  size="30" class="resposta" name="phone" placeholder="00000-0000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"></td>
                <tr></tr>
                <td align="right" class="menu"> Cidade </td>
                <td> <input type="text" class="resposta" size="30"></td>
                <tr></tr>
                <td align="right" class="menu"> Bairro </td>
                <td> <input type="text" class="resposta" size="30"></td>
                <tr></tr>
                <td align="right" class="menu">Estado</td>
                <td> <select class="resposta"  >
                    <option selected value="Acre"> Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte </option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>

                </select></td>
                <tr></tr>
                <td align="center" colspan="2 " height="100" align="center"> <input type="submit" class="menu"
                        value="Cadastrar"> <input class="menu" type="reset" value="Limpar"></td>
            </table>
        </form>
</body>
</html>
