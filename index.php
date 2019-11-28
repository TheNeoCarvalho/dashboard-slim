<!doctype html>
<html lang="pt-br">
    <head>
        <title>dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="bg-light">   
  
        <div class="row w-100" style="height: 100vh;">

            <div class="col h-100 col-lg-2 bg-dark"> 
            <!-- barra lateral -->         
                <center class="text-white" style="margin-top:20px; margin-bottom: 20px;">
                    <svg id="i-activity" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="70" height="70" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M4 16 L11 16 14 29 18 3 21 16 28 16" />
                    </svg>
                </center>
                    <nav class="nav flex-column text-center">
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-decoration-none text-white text-light" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-decoration-none text-white text-light" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-decoration-none text-white text-light" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-decoration-none text-white text-light" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                        </li>
                    </nav>
            </div>

            <div class="col">
            <!-- barra do topo -->
                <nav class="bg-light navbar navbar-expand-sm navbar-light border-bottom w-100">           
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <a href="#"class="text-monospace text-decoration-none text-body font-weight-light"><h4>Dashboard</h4></a>
                        </ul>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn" style="margin-right:5px;" data-toggle="modal" data-target="#modelId">
                            <svg id="i-bell" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M8 17 C8 12 9 6 16 6 23 6 24 12 24 17 24 22 27 25 27 25 L5 25 C5 25 8 22 8 17 Z M20 25 C20 25 20 29 16 29 12 29 12 25 12 25 M16 3 L16 6" />
                            </svg>
                            <span class="badge badge-primary">10</span> 
                        </button>   
                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">notificações</h5>   
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div> 
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            sem notificações
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <a name="" id="" class="btn" style="margin-right:5px;" href="#" role="button">
                            <svg id="i-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 14 L16 23 M16 8 L16 10" />
                                <circle cx="16" cy="16" r="14" />
                            </svg>
                        </a>
                        <div class="btn-group">
                            <button class="btn" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg id="i-user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="#">perfil</a>
                                <a class="dropdown-item" href="#">configuração</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">sair</a>
                            </div>
                        </div>
                    </div>         
                </nav> 
            </div>    
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
