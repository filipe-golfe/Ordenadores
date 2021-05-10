<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/00a4711f34.js" crossorigin="anonymous"></script>
    <!--  -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--  -->
    <script src="BubbleSort.js"></script>
    <title>Bubble Sort</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item'><a class="navbar-brand text-white pr-2" href="#">Bubble Sort</a></li>
                <li class='nav-item'><a class="navbar-brand text-white pr-2" href="#"
                        onclick="window.open('quickSort.php','_self');">Quick Sort</a></li>
                <li class='nav-item'><a class="navbar-brand text-white pr-2" href="#"
                        onclick="window.open('heapSort.php','_self');">Heap Sort</a></li>
                <li class='nav-item'><a class="navbar-brand text-white pr-2" href="#"
                        onclick="window.open('insertionSort.php','_self');">Insertion Sort</a></li>
                <li class='nav-item'><a class="navbar-brand text-white pr-2" href="#"
                        onclick="window.open('shellSort.php','_self');">Shell Sort</a></li>
            </ul>
        </div>
    </nav>
    <div class='micro'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-sm-2'>
                    <div class='overflow'>
                        <table class="table mt-5 table-borderless" id='tabelaRandomMicro'>
                            <thead>
                                <tr>
                                    <th scope="col">Qtd</th>
                                    <th scope="col">Números</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class='col-sm-2'>
                    <div class='overflow'>
                        <table class="table mt-5 table-borderless" style='width:200px' id='tabelaOrdenadaMicro'>
                            <thead>
                                <tr>
                                    <th>Qtd</th>
                                    <th>Ordenados</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class='linha-vertical'>
                    <hr>
                </div>
                <div class='col mt-3'>
                    <div class='row'>
                        <div class='col-sm-4'>
                            <input type="text" class="form-control" id='numero' placeholder="Números">
                        </div>
                        <div class='col-sm-2'>
                            <button type="button" class="btn btn-primary" onclick='enviaNumeroBubble();'>Criar
                                Lista</button>
                        </div>
                        <div class='col-sm-2'>
                            <button type="button" class="btn btn-primary ml-4" onclick='bubbleSort(shuffledArray);'>Ordenar
                                Lista</button>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col mt-5' style='font-family:candara;font-size:20px'>
                            <b>Bubble Sort é um algoritmo de ordenação que pode ser aplicado em Arrays e Listas dinâmicas. Se o objetivo é ordenar os valores em forma decrescente, então, a posição atual é comparada com a próxima posição e, se a posição atual for maior que a posição posterior, é realizada a troca dos valores nessa posição. Caso contrário, não é realizada a troca,
                             apenas passa-se para o próximo par de comparações.</b>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col mt-5'>
                        <img style="-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://upload.wikimedia.org/wikipedia/commons/3/37/Bubble_sort_animation.gif">
                        </div>
                    </div>
                    <div class='row' id='relatorioMenos1100px'>
                        <div class='col mt-5'>
                            <p>relatório</p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4' id='relatorioMais1100px'>
                    <p>relatório</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class='celular'>
        <div class='container-fluid'>
            <div class="table">
                <table class="table mt-5" id='tabelaRandomCelular'>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">1</th>
                            <th scope="col">2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">números</th>
                            <td>celular</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table">
                <table class="table mt-5" id='tabelaOrdenadaCelular'>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">1</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                            <th scope="col">2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Ordenados</th>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                            <td>celular</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>
</body>

</html>