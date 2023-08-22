<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sageal</title>
    <link rel="stylesheet" href="calendario (1).css">
   
   <!-- </div>
        </div>
        <div class="usuario">
            <select name="Willames" id="estudante">
                <option value="Willames Paulino"> &#x1F466 Willames Paulino</option>
                <option value="Trocar de Senha">&#x1F512 Trocar de Senha</option> 
                <option value="Ajuda">&#x1F481 Ajuda com o site</option>
                <option value="Sair">&#x2716 Sair do Sageal</option>
            </select>
        </div>
    </header>
</head>

    <div class="sair">
        <a href="inicio.html"><img src="./imagens/xnormal.png" width="0px"></a>
    </div>-->
  
    </head>
    <header>
      
        <select name="Willames" id="estudante">
            <option value="Willames Paulino">Willames Paulino da Silva</option>
            <option value="Trocar de Senha">&#x1F512 Trocar de Senha</option> 
            <option value="Ajuda">&#x1F481 Ajuda com o site</option>
            <option value="Sair">&#x274C Sair do Sageal</option>
        </select>
   
    </header>
    <body>

      <div class="logo">
        <img src="./imagens/1678492714157.png" width="230px" alt="">
      </div>
      <h1 class="cale">Calendário - Março</h1>
      <table>
        <thead>
          <tr>
            <th>Domingo</th>
            <th>Segunda-feira</th>
            <th>Terça-feira</th>
            <th>Quarta-feira</th>
            <th>Quinta-feira</th>
            <th>Sexta-feira</th>
            <th>Sábado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
          </tr>
          <tr>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td class="sab">11</td>
          </tr>
          <tr>
            <td>12</td>
            <td class="eventos">13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
          </tr>
          <tr>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td class="eventos">23</td>
            <td>24</td>
            <td class="sab">25</td>
          </tr>
          <tr>
            <td>26</td>
            <td>27</td>
            <td class="eventos">28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td></td>
          </tr>
        
        </tbody>
      </table>

      <h3 class="h1">◉ Dia Letivo: Dias destacados na cor Branca.  </h3> <br>
      <h3>◉ Sábado Letivo: Dias destacados na cor <span style="color: red;">Vermelha.</span></h3> <br>
      <h3>◉ Feriado: Dias destacados na cor <span style="color: green;">Verde.</span></h3>
       
      <p>Nosso calendario é atualizado todos os meses no sistema<br>
        de acordo com o ano letivo.
      </p>
      <div class="sair ">
        <a href="inicio.html" title="Página Inicial">Voltar a página inicial</a>
    </div>
    <?php 
        session_start();
        if(!isset($_SESSION['logado'])) {
            header("Location: login.php");
        }
        ?>
</body>
</html>