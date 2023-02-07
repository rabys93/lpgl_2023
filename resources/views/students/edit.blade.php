<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="card col-sm-6 m-auto mt-5">
    <div class="card-body">
        <h1 class="justify-content-center">Modifier Etudiant</h1>

        <form method="POST" action="{{route('students.update',$student->id)}}">
            @csrf
            @method('PUT')
            <fieldset>
                <div class="mb-3">
                    <label for="Inputmatricule" class="form-label">Matricule</label>
                    <input type="text" id="Inputmatricule" class="form-control" value="{{$student->matricule}}" name="matricule">
                </div>
                <div class="mb-3">
                    <label for="InputFirstname" class="form-label">Prénom</label>
                    <input type="text" id="InputFirstname" class="form-control" value="{{$student->first_name}}" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="InputLastname" class="form-label">Nom</label>
                    <input type="text" id="InputLastname" class="form-control" value="{{$student->last_name}}"  name="nom">
                </div>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Email</label>
                    <input type="email" id="InputEmail" class="form-control" value="{{$student->email}}" name="email">
                </div>
                <div class="mb-3">
                    <label for="InputPhone" class="form-label">Phone</label>
                    <input type="text" id="InputPhone" class="form-control" value="{{$student->phone}}" name="tel">
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-info">Valider</button>
                </div>

            </fieldset>
        </form>
        {{--<a href="{{route('students.index')}}">Liste des étudiants</a>--}}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
