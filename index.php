<!doctype html>
<html lang="pt-br">
  <head>
    <title>dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

      <div class="row bg-dark ">
          <div class="col">
            <h3>Deshboard</h3>  
          </div>
          <div class="col text-right">
              <div class="dropdown">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                  notification
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <script>
                    $('#exampleModal').on('show.bs.modal', event => {
                        var button = $(event.relatedTarget);
                        var modal = $(this);
                        // Use above variables to manipulate the DOM
                        
                    });
                </script>
                  <button id="my-dropdown" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">perfil</button>
                  <div class="dropdown-menu" aria-labelledby="my-dropdown">
                      <a class="dropdown-item active" href="#">perfil</a>
                      <a class="dropdown-item active" href="#">configuração</a>
                      <a class="dropdown-item active" href="#">sair</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="w-100 h-100">
        <div class="row">
            <div class="menu col bg-dark col-lg-2 text-center align-middle h-100 d-inline-block">
                <nav class="nav flex-column text-white">
                    <li class="nav-item">
                        <a class="nav-link disable" href="index.php">Deshboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Item 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Item 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Item 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Item 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Item 2</a>
                    </li>
                </nav>
            </div>

            <div class="col">
                 <div class="container">
                     <div class="row">
                         <div class="col">
                             
                         </div>
                         <div class="col">
                             
                         </div>
                         <div class="col">
                             
                         </div>
                      
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         
                     </div>
                     <div class="col">
                         
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