<!DOCTYPE html>
<html lang="en">
<head>
    <title>No vacancies</title>
    <meta charset="utf-8" />

    <!-- Bootstrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <style>body { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);}
        .error-template {padding: 40px 15px;text-align: center;}
        .error-actions {margin-top:15px;margin-bottom:15px;}
        .error-actions .btn { margin-right:10px; }</style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Sorry! <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUVSURBVGhD1ZpVqC5VGIa3gRggKrYgthfGEePCQEWxLixUDrYHERW9sVExsQvFwEK9UNEbsQ4H7MBCbOxCTCywO55ncDbfv86a+mv/vvCwYc+sNd+aFV/MPzVkrQg7wtFwAVwHt/z39xI4EfaAtWCitABsAVfBm/BPBz6DW2F3WARmRIvBUfAe5IzsyjfgDC4PY9GCcBh8ATmDBuVncEBLwMi0NjwNOQPkL3gZroDDYXvYBGy3MWwFB8F58Dj8Brl+5CPYAYau/eB7yD30dTgGVoAuWhz2h4cg168v5lxYCIai0yD3oFfAjeqGH1TO3P2Qe87dsCgMpMsg7fgXOBYWhmFrV/gE0mc+Bs5gXzoF0g7fgg1hlFoOHoD02fdA52W2L6QdPQvLwDikwTdCaoP+qrXWhXRjO4iRHokZufeugWiH7A2NsnF6xLqcnO6ZkDPjkor26Dwb7dHZxUY6qFHviSYtCe9CtOsmqJRhx+cQG3g6TYI2B/1KadffsAFkZewUB6GfGMUR269ugGjf7TCf3Bvp9O0Gk6SV4Vco7fsTVoEebQlxEIYdw/DYw5Z5TbTzBOiR53O8wdipSW7CK0FPbG5hAtU2DDf/OAvehy/BMGRNaNJmEO18EXr0BpQX3VRmenUy9nHWYqdi1Lo01MmZzsVVP4CRcpPehrKNti4LhVaC2KGheJNOhtgmcinUaU/ItZP7oEnp6pl2kObY8YL5RJPmQmwTeR7qlAtES76DJml4bHM2FLJQEC8cAU26A2KbyCNQJx+cayfutyatD7GNthS6EOKF7aBJhtuxTWQO1Gk9qMoOtaVJHhSxzVNQKA3MTEvbyPKOHja2vRnaHNtHwu8Q2zqTbROon6Bs96r/UJZkYodOXVttA27uy2Fn/9FBhhjng5vXVNrCRlt9BaW9npSFUiczCyZdHgqlvbqOQr7ROBDf8iTL0D7a+xwUOgnihQNhkrU6RHvvhUIGh/GCdadJ1i4Q7b0ICq0D8YLFs0mWta5ob89x/ymUFwyVB8nPPUI3hUPgeNABunzNPreFpWAQWT+IA3GpTes2iBcPgC7SSVkONRi07hX7SjHQsy7gILtWZVaD6Ls+hB75zSI+zLpSG5lBGuLEGe3Cj+Cp2XaWTofYfnp/lPKNfg3xJsuYdTLUeAnK+/XUvmmr6c7O1mAf5hkbgXn3bDgV5kEsOVkrsPxaJ5d7dISSLYxoQLzJZVIlI1DzB/eTy9LKedd95WyaKF0MlnhcMudAVYiTpg5PQlZW0y3/xJsNDlNZQff7iCXVrhX4KlnBORRM1sw608GsCr64aNtOUCljn3izYXUshvnN42poygL7lbN0HMQylJ78QYh2WdSulcvDICw2cj3bmUHdGjAOWTFxltQZEO1xL7YKbF3vaXhuYDkTVZWDIbXFgbVW6j3FvMWZGZd0qNauog0PQycbvDktHstdYBlolHIJ+9bTmbCA2Fcx3S9Ej0LsTN4BfcIo5OmUbmz5GNrUvSrlYCzRpB0bZlwP85Us+5SHjH4iPWLFOpahycDySPRsTx8gOsRrwSCxH2mgy8hqY65/8/ihf5vZB76F3APFJeeAvc/wJf1ZhvvO49t8Qg9uFJvug5I/4EwY2eFiedKPLFUGpFjtcPAxx27CfemLGIusgBhjpcfjIDwBtWHHKKUH9qdLL0DbWYp8AAaNlV+fZkIuu73AjPBOeAZeAz8d+BMoa8J+PjCHMD0dV7jzf9LU1L/pYKGF9RvS6AAAAABJRU5ErkJggg=="></h1>
                <h2>Suscriptions are closed right now.</h2>
                <div class="error-details">You have been added to waiting list. We will send you an email to the provided adress as soon as we have vacancies again.</div>
                <div class="error-actions">
                    <a href="http://courseswiki.clinbioinfosspa.es/gatk2018/start" class="btn btn-primary btn-lg"><i class="fas fa-home"></i> Course Wiki</a><a href="mailto:secretariatecnica-clinbioinfosspa@juntadeandalucia.es" class="btn btn-default btn-lg"><i class="fas fa-envelope"></i> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
