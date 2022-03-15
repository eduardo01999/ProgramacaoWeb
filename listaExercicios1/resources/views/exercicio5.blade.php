<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 5</title>
</head>
<body>
<h1>Calcular média aritmética para saber se passou ou não</h1>

<form action="/resultadoex5" method="post">
@csrf <!-- Obrigatório usar o @csrf-->
    <div class="room">
        <label for="nt1" class="label-control">
            Informe a nota1:
        </label>
        <input type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="nt1" class="form-control">
        <label for="nt2" class="label-control">
            Informe a nota2:
        </label>
        <input type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="nt2" class="form-control">
        <label for="nt3" class="label-control">
            Informe a nota3:
        </label>
        <input type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="nt3" class="form-control">
        <label for="nt4" class="label-control">
            Informe a nota4:
        </label>
        <input type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="nt4" class="form-control">
    </div>
    </br>
    <div class="room">
        <button class="btn btn-primary" type="submit">
            Exibir resultado
        </button>
    </div>
</form>

@if(isset($resultado))
    <div class="alert alert-info">{{$resultado}}</div>
@endif

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
