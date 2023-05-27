<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Contratação de Serviços</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>

        <header>
            <nav id="menu">
            <a href="index.php"><img src="https://github.com/JoaoRiquelme115/TrabalhoWEBII/blob/main/imagens/logoCS.png?raw=true" alt="Logo do site"></a>
            <div>
              <a href="index.php"><button class="botao1">Página inicial</button></a>
              <a href="comofunciona.php"><button class="botao2">Como funciona</button></a>
            </div>
            </nav>
        </header>

        <main><!--CONTEÚDO DA PÁGINA-->
            <form id="contato" action="arquivo.php" method="post">
                <h1>Consiga MAIS CLIENTES direto do seu celular </h1>
                <div id="primeiro">
                    <div id="oi">
                        <label>Nome:
                            <input class="cordefundo" type="text" name="nome">
                        </label>
                        <br>
                        <br>
                        <label>E-mail:
                            <input class="cordefundo" type="email" name="email">
                        </label>
                        <br>
                        <br>
                        <label>Idade:
                            <input class="cordefundo" type="number" name="idade" min="1" max="122" step="18">
                        </label>
                        <br>
                        <br>
                        <label>Telefone:
                            <input class="cordefundo" type="number" name="telefone">
                        </label>
                    </div>
                    <div class="spaco">
                        <label>Estado:
                            <select class="cordefundo" name="cidade">
                                <option value="">Informe seu Estado</option>
                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="Bahia">Bahia</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Paraná">Paraná</option>
                                <option value="Acre">Acre</option>
                                <option value="Alagoas">Alagoas</option>
                                <option value="Amapá">Amapá</option>
                                <option value="Ceará">Ceará</option>
                                <option value="Espírito Santo">Espírito Santo</option>
                                <option value="Goiás">Goiás</option>
                                <option value="Mato Grosso">Mato Grosso</option>
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                <option value="Minas Gerais">Minas Gerais</option>
                                <option value="Pará">Pará</option>
                                <option value="Paraíba">Paraíba</option>
                                <option value="Pernambuco">Pernambucos</option>
                                <option value="Piauí">Piauí</option>
                                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                <option value="Rondônia">Rondônia</option>
                                <option value="Roraima">Roraima</option>
                                <option value="Santa Catarina">Santa Catarina</option>
                                <option value="Sergipe">Sergipe</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Tocantins">Tocantins</option>
                            </select>
                        </label>
                        <div>
                            <button class="botao3">REGISTRE-SE</button>
                        </div>
                    </div>
                </div>
            </form>
        </main>
            <!-- rodapé-->
    <footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo"></h1>
        
    <h2>Atendimento ao cliente</h2>
    
    <address>
      (77) 40028922<br>
           <a class="footer__btn" href=""> suportecsgroup@gmail.com.br
</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">  Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Em todas as redes sociais</a>
        </li>
        <li>
          <a href="#">@Csgroup_Brasil</a>
        </li>
      </ul>
    </li>
    
    <li class="nav_item nav_item--extra">
      <h2 class="nav__title">Website Designer by</h2>
      <ul class="nav_ul nav_ul--extra">
             <li>
              <p>Elayne</p>
           </li>
          <li>
             <p>João Riquelme</p>
          </li>
          <li>
            <p>Ludmylla</p>
          </li>
          <li>
            <p>Rayka</p>

        </li>
      </ul>
    </li>
      
    
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Politica de Privacidade</a>
        </li>
        
        <li>
          <a href="#">Termos de uso</a>
        </li>
        
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2022  All rights reserved.</p>
    
    <div class="legal__links">
      <span>Made with <span class="heart">♥
    </div>
  </div>
</footer>
    </body>
</html>
