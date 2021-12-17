<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/visualizarperfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Changa+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Changa One";
    
        }
        .divizinha{
            max-width: 50%;
            display: inline-block;
        }

        .divizona{
            width: 100%;
            display: inline-block;
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
    <title>Perfil</title>
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
        <h2 style="color: #FF0000; text-align: center;">{{config('user.name')}}</h2>
    
   <div class="divizona">
        <div class="divizinha"> 
            <form>
                <h2 style="font-size: 25px; color: #FFC700; margin-left: 30px; ">Listas de Desejos: </h2>
                <p class="paragrafo">{{config('user.lista')}}</p>
            </form>
        </div>
        <div class="divizinha" style="float: right; "> 
            <form>
                <h2 style="font-size: 25px; color: #FFC700; margin-left: 30px;">Perfil: </h2>
                <p class="paragrafos">{{config('user.perfil')}}</p>
            </form>
        </div>
    </div>
    <br>
    <input class="botao" type="button" onclick="alert('Oi João')" style="background-color: #FFC700; color: white; font-size: 25px; border-style: solid; border-width: 1px; max-width: 150px; float: right;" value="Voltar">
</body>
</html>

