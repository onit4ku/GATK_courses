<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submit Success!</title>
    <meta charset="utf-8" />

    <!-- Bootstrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
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
                <h1>
                    Yeah! <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAS5SURBVGhD7ZhdaBxVFMe31o8Eqhb6oOB+aNAnFbTVZnaNDqJ2Z12/0roQlRDtrgkqSiVK60OJgnUmah9EKVTEKqni3u02QiaBmofQVw0U7EMhfkSTmU3jR2LoziZQ2fHc6dl0ZvbOdjOb3S44P/g/5N5z7vxPZu7Muevz8PDw8FgTur4hOaodAY2zlJK1z2kMRjcvSbmQSI0W9Ep6cVTbheHNSYLoVydl7WeWeYtk7afeSf0qTGs+UiPaHqZxhqDg1zCtuegZXtwMBv+yG3ZScrTwZ+/4wvWYXn/CMdLPxYhEFRYyCRwuAx6XQZbhytJETK8v4Wg6Ho5l9FUJRLvvMRLEaQupkcJetlln7ZYLb2C6O7Y/kr4F/rtzYG763oeOb8FhCzx/pIUTyC+WQgyRLIZYeD1dbIW7MsMyzBTE9kzoLZjuDjC4Z9WYQLpw2AL/5PBmKPastQgqMoEhqwSkuduDYq43OvTPl0zTLMnLz2O6e7in061QzCeckPkwkSAbcbgMmO8xFwH75Hw4nr0Dpy8AH7egpEwGJVUPgbqyebZxq04PDOhX4AqNQN8Ad+VjKIIYimbKXpnBwVw3LaKkbYf+YBm3aLecj2N6cxAamG4JiMrv5kKoYkcX9c70kqGu7LlpS5siFz7F9PUDHolIUFQepvIP5ngcrpqApO6zF2EXxCzf/EEuhCnrT0ia5aCAouXC4uyabjnkf2fJd5BfUpgvlNqBjQYmfii7qKhO3frR1DUYdUmY/wy7RPVHH9EdXyg1Af+hF5gXpRKVNzGsKiDnm7I1TAq8p+7A0PXHL+YeYF2Uyj+oPoVhVREUz7YFRHWFtRbswRMYVj/gQsR+YdiY4zi9JsCwBLkLZsEj9bdfnLkTQ+pHm6QGwYB2sRDlvP/AnPVj51FOJJoOQ3tTNHUK7+BU7UDHej+cCxacpb2NoTVB2yBod06ZioB2J7PcET/WhiHugWPpRjB7itVClASnuJW+kZXbMMU1kdixXeYiTPoMQ9yTHNNeYplnSMYU10Se+PZa6NkUaxGk2C6QDgxxR/fxpS1gsOpjqbnJ43myibbyYGwSuuHv6dkGpyoCDecztkK+wCn3pOTCIZZhJ8FemXp1rGh88aGAgxZDAhkzFq0CLprd2h4n26i2C0PX4bA7UnL+Ljgr/8syXEnQte6j+XCOOW0uBP5erNmUG2CDv8UyemlpJ2k+J6R582uUi5I+Y2EE7tjdMD8OcZ04VB9entA3QTEK26yDZK2YGtM4XMIXETI7wHCiPZrZSQ9fOGwAj9oBvFPDOFQ/oJBnmYYdpVW9MS+c9UnvunwjnIjEMvfAh+gw92j2cPdX8zm2aZtkbalHzt+IS1x+7F/XB7tPwAbOF5nmTYK7149LNAdg/pVSESXtlM5ULAReu2dKPzbTYzGcLfaWRA9VxsKNBt4k/fZCOjqHi88NzR8FwxJLpQ2OPzL8Zmn5ReVXOm4s3kh4fuJK+zeg2q8r3I395iIuStmPIY2FttLGZke1P/71DTjliP/gTCscf/PMQmD8stwVtwQkZYhdiFp7v9RI/O/O3ASP0TlzEVDcUuj9+eZ5LVdLQJrto2f6kuiP1jjl4eHh8b/H5/sPe3fulj5pJ0MAAAAASUVORK5CYII="></h1>
                <h2>Submit Success!</h2>
                <div class="error-details">
                    <p>The submit form has been uploaded correctly, an email has been sent to you with the related information, If you do not receive an email in the next 24 hours, please notify us.</p>
                    <p>Thank you!</p>
                </div>
                <div class="error-actions">
                    <a href="http://courseswiki.clinbioinfosspa.es/gatk2019/start" class="btn btn-primary btn-lg"><i class="fas fa-home"></i> Course Wiki</a><a href="mailto:secretariatecnica-clinbioinfosspa.fps@juntadeandalucia.es" class="btn btn-default btn-lg"><i class="fas fa-envelope"></i> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>