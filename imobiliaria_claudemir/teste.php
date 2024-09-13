<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Harpia Imobiliaria</title>
</head>


<body>
    <main>
        <section id="#pagina-home">
            <header>
                <img src="./logo.jpg" alt="" class="logo">
                <nav class="menu-principal">
                    <ul class="menu">
                        <li><a href="#">Inicial</a></li>
                        <li><a href="#">Venda</a>
                            <ul>
                                <li><a href="#">Apartamento</a></li>
                                <li><a href="#">Casa</a></li>
                                <li><a href="#">Terreno</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Informações</a>
                            <ul>
                                <li><a href="#">Sobre Nós</a></li>
                                <li><a href="#">Corretor Online</a></li>
                                <li><a href="#">Vender seu imóvel</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>HARPIA IMOBILIARIA</h1>
            </main>

        </section>
    </main>

    <div class="barra-pesquisa">
        <div>
            <h2>ENCONTRE<br> SEU<br> <strong>IMÓVEL</strong></h2>
        </div>

        <div>
            <span>
                Tipo:
                <select name="tipo" id="tipo">
                    <option value="">Todos</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="casa">Casa</option>
                    <option value="sala-comercial">Sala Comercial</option>
                    <option value="terreno">Terreno</option>
                    <option value="sobrado">Sobrado</option>
                    <option value="jk">JK</option>
                    <option value="cobertura">Cobertura</option>
                    <option value="apartamento-2-quartos">Apartamento 2 Quartos</option>
                    <option value="apartamento-1-dormitorio">Apartamento 1 dormitório</option>
                    <option value="apartamento-2-dormitorios">Apartamento 2 dormitórios</option>
                    <option value="apartamento-3-dormitorios">Apartamento 3 dormitórios</option>
                    <option value="casa-2-dormitorios">Casa 2 dormitórios</option>
                    <option value="casa-3-dormitorios">Casa 3 dormitórios</option>
                    <option value="casa-4-dormitorios-ou">Casa 4 dormitórios ou +</option>
                </select>
            </span>

            <span>
                Finalidade:
                <select name="finalidade" id="finalidade">
                    <option value="venda">Venda</option>
                </select>
            </span>
        </div>

        <div>
            <span>
                Cidade:
                <select name="cidade" id="cidadebus2">
                    <option value="">- todas as cidades -</option>
                    <option value="Campinas">Campinas</option>
                    <option value="Sumare">Sumaré</option>
                </select>
            </span>

            <span>
                Bairro:
                <select name="bairro" id="bairrobus2">
                    <option value="" selected="">Todos</option>
                </select>
            </span>
        </div>

        <div>
            <span>
                Valor Mínimo:
                <select name="vmi" id="vmi">
                    <option selected="selected" value="0">- sem valor -</option>
                    <option value="500">R$ 500</option>
                    <option value="750">R$ 750</option>
                    <option value="1000">R$ 1.000</option>
                    <option value="1500">R$ 1.500</option>
                    <option value="2500">R$ 2.500</option>
                    <option value="5000">R$ 5.000</option>
                    <option value="10000">R$ 10.000</option>
                    <option value="25000">R$ 25.000</option>
                    <option value="40000">R$ 40.000</option>
                    <option value="60000">R$ 60.000</option>
                    <option value="80000">R$ 80.000</option>
                    <option value="100000">R$ 100.000</option>
                    <option value="150000">R$ 150.000</option>
                    <option value="200000">R$ 200.000</option>
                    <option value="300000">R$ 300.000</option>
                    <option value="400000">R$ 400.000</option>
                    <option value="500000">R$ 500.000</option>
                    <option value="600000">R$ 600.000</option>
                    <option value="700000">R$ 700.000</option>
                    <option value="800000">R$ 800.000</option>
                    <option value="900000">R$ 900.000</option>

                    <option value="1000000">R$ 1.000.000</option>
                    <option value="1200000">R$ 1.200.000</option>
                    <option value="1400000">R$ 1.400.000</option>
                    <option value="1600000">R$ 1.600.000</option>
                    <option value="1800000">R$ 1.800.000</option>

                    <option value="2000000">R$ 2.000.000</option>
                    <option value="2500000">R$ 2.500.000</option>
                    <option value="3000000">R$ 3.000.000</option>
                    <option value="3500000">R$ 3.500.000</option>
                    <option value="4000000">R$ 4.000.000</option>
                    <option value="4500000">R$ 4.500.000</option>
                    <option value="5000000">R$ 5.000.000</option>
                    <option value="5000000">Acima de R$ 5.000.000</option>

                </select>
            </span>

            <span>
                Valor Máximo:
                <select name="vma" id="vma">
                    <option selected="selected" value="0">- sem valor -</option>
                    <option value="750">R$ 750</option>
                    <option value="1000">R$ 1.000</option>
                    <option value="1500">R$ 1.500</option>
                    <option value="2500">R$ 2.500</option>
                    <option value="5000">R$ 5.000</option>
                    <option value="10000">R$ 10.000</option>
                    <option value="25000">R$ 25.000</option>
                    <option value="40000">R$ 40.000</option>

                    <option value="60000">R$ 60.000</option>
                    <option value="80000">R$ 80.000</option>
                    <option value="100000">R$ 100.000</option>
                    <option value="150000">R$ 150.000</option>
                    <option value="200000">R$ 200.000</option>
                    <option value="300000">R$ 300.000</option>
                    <option value="400000">R$ 400.000</option>
                    <option value="500000">R$ 500.000</option>
                    <option value="600000">R$ 600.000</option>
                    <option value="700000">R$ 700.000</option>
                    <option value="800000">R$ 800.000</option>
                    <option value="900000">R$ 900.000</option>

                    <option value="1000000">R$ 1.000.000</option>
                    <option value="1200000">R$ 1.200.000</option>
                    <option value="1400000">R$ 1.400.000</option>
                    <option value="1600000">R$ 1.600.000</option>
                    <option value="1800000">R$ 1.800.000</option>

                    <option value="2000000">R$ 2.000.000</option>
                    <option value="2500000">R$ 2.500.000</option>
                    <option value="3000000">R$ 3.000.000</option>
                    <option value="3500000">R$ 3.500.000</option>
                    <option value="4000000">R$ 4.000.000</option>
                    <option value="4500000">R$ 4.500.000</option>
                    <option value="5000000">R$ 5.000.000</option>

                    <option value="0">Acima de R$ 5.000.000</option>
                </select>
            </span>
        </div>

        <div>
            <span>
                Dormitórios:
                <select name="dormitorios" id="dormitorios">
                    <option selected="selected" value="">Todos</option>
                    <option value="1">1 dormitório</option>
                    <option value="2">2 dormitórios</option>
                    <option value="3">3 dormitórios</option>
                    <option value="4">4 dormitórios</option>
                    <option value="5">5 dormitórios</option>
                    <option value="21">1 ou + dormitórios</option>
                    <option value="22">2 ou + dormitórios</option>
                    <option value="23">3 ou + dormitórios</option>
                    <option value="24">4 ou + dormitórios</option>
                    <option value="25">5 ou + dormitórios</option>
                </select>
            </span>

            <span><button name="btenviar" class="btbuscartopo">Buscar</button></span>
        </div>

    </div>

</div>

<!-- IMOVEIS DISPONIVEIS -->

<div class="card">
        <h5>IMOVEIS DISPONIVEIS</h5>
        <img decoding="async" src="#" alt="#">
        <form method="POST" action="./camisetas.php">

            <div class="principal">
                <div class="tudo">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu Nome">
                </div>

                <div class="tudo">
                    <label for="tamanho">Tamanho:</label>
                    <input type="text" name="tamanho" id="tamanho" placeholder="Qual o tamanho?">
                </div>

                <div class="tudo">
                    <label for="qtd">Quantidade:</label>
                    <input type="text" name="qtd" id="qtd" placeholder="Quantas camisetas serão?">
                </div>
            </div>
            <div class="btn">
                <button type="submit" class="btn btn-primary botao2">Enviar</button>
            </div>
        </form>
    </div>


</body>

</html>