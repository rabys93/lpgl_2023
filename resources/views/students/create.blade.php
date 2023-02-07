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
        <h1 class="justify-content-center">Nouveau Etudiant</h1>
      {{--  @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif--}}
        <form method="post" action="{{route('students.store')}}">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label for="Inputmatricule" class="form-label">Matricule</label>
                    <input type="text" id="Inputmatricule" class="form-control"
                           placeholder="Votre matricule" name="matricule">
                    @error('matricule')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="InputFirstname" class="form-label">Prénom</label>
                    <input type="text" id="InputFirstname" class="form-control" placeholder="Votre prénom" name="prenom">
                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="InputLastname" class="form-label">Nom</label>
                    <input type="text" id="InputLastname" class="form-control" placeholder="Votre nom" name="nom">
                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Email</label>
                    <input type="text" id="InputEmail" class="form-control" placeholder="exemple@gmail.com" name="email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="InputPhone" class="form-label">Phone</label>
                    <input type="text" id="InputPhone" class="form-control " placeholder="Votre numéro de telephone" name="tel">
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-info">Valider</button>
                </div>

            </fieldset>
        </form>
       {{-- <a href="{{route('students.index')}}">Liste des étudiants</a>--}}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
