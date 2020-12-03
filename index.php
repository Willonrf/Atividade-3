<!DOCTYPE html>
<html>
    <head>
        <script src="JS/script.js"></script>
        <link rel = "stylesheet" href = "css/bootstrap.css"/>
        <link rel = "stylesheet" href = "css/estilo.css"/>
        <title>Atividade 3</title>
    </head>
    <body>
        <div>
            <form action="processos.php"  method="POST" class="row">
                <div class="col-5">
                    <label for="nome">Nome: </label>
                    <input id="nome" type="text" name="nome"/>
                </div>
                <div class="col-5">
                    <label for="anoCursado">Ano Cursado:</label>
                    <input id="anoCursado" type = "number" name="anoCursado"/>
                </div>
                <div class="col-5">
                    <label for="nascimento">Data de Nascimento:</label>
                    <input id="nascimento" type="date" name="nascimento"/>
                </div>
                
                <div class="col-5">
                    <label for="materia">Materia Preferida:</label>
                    <input id="materia" type="text" name="materia"/> 
                </div>
                <div class="col-12">
                    <button type="reset" class="btn btn-info botao" >Limpar</button>
                    <button type="submit" class="btn btn-success botao">Enviar</button>
                </div>
            </form>
            <form class="row" method="POST" action="busca.php">
                <div class="col-12">
                    <label for="buscar">Oque procura?</label>
                    <input id="buscar" type="text" name="buscar"/>
                    <button type="button" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
        <br/>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Materia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conexao = new mysqli("localhost", "root", "vertrigo","escola");
                    $tabela = $conexao->query("SELECT nome, materia FROM alunos WHERE  ");
                    while($linha = $tabela->fetch_assoc()){
                ?>        
                    <tr>
                        <td><?=$linha["nome"];?></td>
                        <td><?=$linha["materia"];?></td>
                    </tr>
                <?php        
                    }
                    mysqli_close($conexao);
                ?>
            </tbody>
        </table>
    </body>
</html>