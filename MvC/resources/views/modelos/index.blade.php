<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario-Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 jumbotron mx-auto">
             <form action="{{url('/')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <h2>Preecnha o Formulário</h2>
                </div>

                @if(count($errors)>0)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Campo Obrigatorio</strong> preencha corretamente
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>

                    @endforeach
                    </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif

                @if($message=Session::get('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Cadastro feito com sucesso</strong> {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif

                @if($message = Session::get('error'))
                
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Santa Maria! A coisa ta Feia</strong> {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Seu Nome Aqui" />
                     <br>
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite seu email"/>
                    <br>
                    <label for="telefone">Telefone</label>
                    <input type="number" name="telefone" class="form-control" placeholder="Numero aqui"/>
                    <br>
                    <label for="cargo_desejado">Cargo desejado</label>
                    <input type="text" name="cargo_desejado" class="form-control" placeholder="seu cargo aqui">
                    <br>
                    <label for="escolaridade">Escolaridade</label>
                    <select name="escolaridade" name="escolaridade" id="">
                    <option value="superior">Superior</option>
                    <option value="tecnico">Técnico</option>
                    <option value="fundamental">Fundamental</option>
                    </select>
                    <br>
                    <label for="arquivo">Curriculo</label>
                    <input type="file" name="arquivo"class="form-control" value="curriculo">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
             </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>