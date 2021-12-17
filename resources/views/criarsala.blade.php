<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/criarsala.css">
    <link href="https://fonts.googleapis.com/css2?family=Changa+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Changa One";
            justify-content: center;
    
        }

        .botao{
          border: 1ch;
          border-radius: 20px;
          border-color: #FFC700;
          margin: auto;
          padding: 10px;
          width: 60%;
          text-align: center;
          transition: transform 1s;
          align-self: center;
          font-family: "Changa One";
        }

        .botao:hover {
            transform: rotate(360deg);
        }

        .image{
            max-width: 100px;
            max-height: 100px;
            margin-left: 55px;

        }
    </style>
    <title>Criar Sala</title>
</head>
<body>
    <div class ="row">
        <header class="col-12">
            <div class="menu col-2">
                <img src="{{asset('assets/Logo.png')}}" alt="Logo" class="image" style="max-width:60%; height:auto;">
            </div>
            <div class="menu col-8">
                <p style="font-size: 25px; margin-left: 10px; margin-top: 40px;">Camarada Absconso</p>
            </div>
            <div class="menu col-1">
                <div class="dropdown">
                    <button class="dropbtn">MENU</button>
                    <div class="dropdown-content">
                        <a href="/" style="color: white; text-decoration: none" >INICIO</a>
                        <a href="/Cadastrar" style="color: white; text-decoration: none;">CADASTRAR SALA</a>
                        <a href="/Perfil" style="color: white; text-decoration: none">PERFIL</a>
                        <a href="/Admsala" style="color: white; text-decoration: none">ADMINISTRAR SALA</a>
                        <br>
                        <a href="/Excluirsala" style="color: white; text-decoration: none">EXCLUIR SALA</a>
                        <br>
                        <a href="/Grupos" style="color: white; text-decoration: none"> GRUPOS</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <label style="color: red; text-align: center; margin-top: 35px; font-size: 24px;">Delimite as informações básicas do evento: </label>
    <br>
    <article>
        <form style="background-color: #FFC700; max-width: 600px; height: 35px; border-radius: 20px; margin-top: 40px; ">
            <label for id="nome" style="color: black; margin-left: 20px; font-size: 24px; margin-top: 20px;">Nome da Sala:* </label>
            <input type="text" id="nome" style="background-color: transparent; border: none;">
        </form>
        <form style="background-color: #FFC700; max-width: 600px; height: 35px; border-radius: 20px; margin-top: 40px; ">
            <label for id="data" style="color: black; margin-left: 20px; font-size: 24px; margin-top: 20px;">Data da Troca:* </label>
            <input type="date" id="data" style="background-color: transparent; border: none;">
        </form>
        <form style="background-color: #FFC700; max-width: 600px; height: 35px; border-radius: 20px; margin-top: 40px; ">
            <label for id="valormax" style="color: black; margin-left: 20px; font-size: 24px; margin-top: 20px;">Valor máximo:* </label>
            <input type="number" id="valormax" style="background-color: transparent; border: none;">
        </form>
        <form style="background-color: #FFC700; max-width: 600px; height: 35px; border-radius: 20px; margin-top: 40px; ">
            <label for id="valormin" style="color: black; margin-left: 20px; font-size: 24px; margin-top: 20px;">Valor mínimo: </label>
            <input type="number" id="valormin" style="background-color: transparent; border: none;">
        </form>
        <form style="background-color: #FFC700; max-width: 600px; height: 35px; border-radius: 20px; margin-top: 40px; ">
            <label for id="nparticipantes" style="color: black; margin-left: 20px; font-size: 24px; margin-top: 20px;">Número máximo de participantes: </label>
            <input type="number" id="nparticipantes" style="background-color: transparent; border: none;">
        </form>
        <label style="color: black; margin-left: 525px; margin-top: 10px; font-size: 12px;">* obrigatório </label>
        <br>
        <br>
        <input class="botao" type="button" onclick="alert('Oi Pedro')" style="background-color: transparent; color: red; font-size: 25px; border-style: solid; border-width: 1px; max-width: 150px; float: right; border-color: red;" value="Gerar Sala">
   </article>
</body>
</html>

