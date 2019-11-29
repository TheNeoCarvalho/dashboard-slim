<!doctype html>
<html lang="pt-br">
    <head>
        <title>Dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="bg-light">   
  
        <div class="row w-100" style="height: 100vh;">

            <div class="col h-100 col-lg-2 bg-dark"> 
            <!-- slide bar -->         
                <center class="text-white" style="margin-top:20px; margin-bottom: 20px;">
                    <svg id="i-activity" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="100" height="100" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
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
            <!-- top bar -->
                <nav class="bg-light navbar navbar-expand-sm navbar-light border-bottom w-100 shadow-sm rounded">           
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="display: flex;align-items: center;justify-content: center">
                            <svg id="i-search" class="h-100" style="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="14" cy="14" r="12" />
                                <path d="M23 23 L30 30"  />
                            </svg>
                            <!-- Search form -->
                            <form class="form-inline">
                                <i class="fas fa-search" aria-hidden="true"></i>
                                <input class="form-control form-control-sm ml-3 w-100" style="" type="text" placeholder="procurar"aria-label="Search">
                            </form>
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
                                <a class="dropdown-item" href="#">configurações</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">sair</a>
                            </div>
                        </div>
                    </div>         
                </nav> 
                <!-- -->
                <div class="row text-center mt-3">
                    <div class="col bg-primary m-3 p-3 rounded shadow-sm">
                        <div class="row text-right text-white align-middle">
                            <div class="col-3" style="display: flex;align-items: center;justify-content: center">
                                <svg id="i-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="49" height="49" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M21 2 L11 2 C10 2 9 3 9 4 L9 28 C9 29 10 30 11 30 L21 30 C22 30 23 29 23 28 L23 4 C23 3 22 2 21 2 Z M9 5 L23 5 M9 27 L23 27" />
                                </svg>
                            </div>
                            <div class="col">
                                <h4>223456623</h4>
                                <h6 class="text-white-50">Usos do SRM hoje</h6>
                            </div>
                        </div>     
                    </div>
                    <div class="col bg-primary m-3 p-3 rounded shadow-sm">
                        <div class="row text-right text-white align-middle">
                            <div class="col-3" style="display: flex;align-items: center;justify-content: center">
                                <svg id="i-download" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="49" height="49" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M9 22 C0 23 1 12 9 13 6 2 23 2 22 10 32 7 32 23 23 22 M11 26 L16 30 21 26 M16 16 L16 30" />
                                </svg>
                            </div>
                            <div class="col">
                                <h4>1321233</h4>
                                <h6 class="text-white-50">Downloads</h6>
                            </div>
                        </div>     
                    </div>
                    <div class="col bg-primary  m-3 p-3 rounded shadow-sm" style="">
                        <div class="row text-right text-white align-middle">
                            <div class="col-3" style="display: flex;align-items: center;justify-content: center">
                                <svg id="i-cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="49" height="49" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M6 6 L30 6 27 19 9 19 M27 23 L10 23 5 2 2 2" />
                                    <circle cx="25" cy="27" r="2" />
                                    <circle cx="12" cy="27" r="2" />
                                </svg>
                            </div>
                            <div class="col">
                                <h4>R$ 23432390</h4>
                                <h6 class="text-white-50">Lucro atual</h6>
                            </div>
                        </div>         
                    </div>
                </div>
            </div>    
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
