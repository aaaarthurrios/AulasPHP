<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Idade</title>
</head>
<body>
    <div class="login-container">
    <form method="get" action="02idade.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="Email">Email:</label>
        <input type="text" name="Email" id="Email"><br><br>
        
       <label for="data_nascimento" class="label-data">Data de Nascimento:</label>
<input  type="date"   id="data_nascimento"   name="data_nascimento" placeholder="DD/MM/AAAA"   required   class="campo-data"/>

 <br></br>
       

        <label for="CPF">CPF:</label>
        <input type="number" name="CPF" id="CPF"><br><br>

        <label for="Celular">Celular:</label>
        <input type="number" name="celular" id="celular"><br><br>
        
        <fieldset>
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="m" value="masculino">
            <label for="m">Masculino</label><br>
            <input type="radio" name="sexo" id="f" value="feminino">
            <label for="f">Feminino</label><br>
        </fieldset><br>

        <button type="submit">Por favor, de acordo com nós</button>
    </div>
    </form>
</body>
</html>