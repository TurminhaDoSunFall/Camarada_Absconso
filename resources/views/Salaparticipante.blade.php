<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/salaparticipante.css">
    <link href="https://fonts.googleapis.com/css2?family=Changa+One&display=swap" rel="stylesheet">
</head>
<body>
  <title>Sala - Participante</title>
</head>
<body>
    <div class ="row">

        <header class="col-12" style="background-color: red;">
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
      <section>
        <form action="/action_page.php">
            <form class="info">
                <label for="fname">Data do evento:</label>
                <label id="fname">21/12/21</label>
            </form>
            <br>
            <form class="info">
                <label for="vM">Valor máximo:</label>
                <label id="vM">100 reais</label>
            </form>
            <br>
            <form class="info">
                <label for="vm">Valor mínimo:</label>
                <label id="vm">15 reais</label>
            </form>
            <br>
            <form class="info">
                <label for="confirm">Organizador participa do sorteio:</label>
                <input type="radio" id="confirm" name="confirm">
            </form>
            <br>
            <form class="info">
                <label for="np">Número de Participantes</label>
                <label id="np">20</label>
            </form>
          </form> 
      </section>
      <article class="participa" style=" margin-right:140px;">
          <form>
          <label for="nome">Participantes</label><br><br>
          <label for="nome">Richard Alves</label><br>
          <label for="nome">Jaciara Fernandes</label><br>
          <label for="nome">Cláudia Leitte</label><br>
          <label for="nome">Edivaldo Rodrigues</label><br>
          <label for="nome">Marcos Daré Silva Hess</label><br>
          <label for="nome">Luís Azevedo Vitória</label>
          </form>
      </article>
      <aside>
        <form class="sorteio">
            <h3>Você sorteou o(a): Edivaldo Rodrigues</h3>
        </form>
        <button class="button">Iniciar Sorteio</button>
        <button class="button">Excluir Sala</button>
        <button class="button">Finalizar Evento</button><br><br>
        <button class="button">Mostrar tabela do Sorteio</button>
    </aside>
    <section class="nomes">
        <table>
            <tr>
                <th>Richard Alves</th>
            </tr>
            <tr>
                <th>Jaciara Fernandes</th>
            </tr>
            <tr>
                <th>Cláudia Leitte</th>
            </tr>
            <tr>
                <th>Edivaldo Rodrigues</th>
            </tr>
            <tr>
                <th>Marcos Daré Silva Hess</th>
            </tr>
            <tr>
                <th>Luís Azevedo Vitória</th>
            </tr>
        </table>
        <table  >
            <tr>
                 <th>Edivaldo Rodrigues</th>
            </tr>
            <tr>
                <th>Marcos Daré Silva Hess</th>
            </tr>
            <tr>
                <th>Luís Azevedo Vitória</th>
            </tr>
            <tr>
                <th>Cláudia Leitte</th>
            </tr>
            <tr>
                <th>Jaciara Fernandes</th>
            </tr>
            <tr>
                <th>Richard Alves</th>
            </tr>

        </table>
    </section>
</body>
</html>