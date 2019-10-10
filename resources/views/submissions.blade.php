<html lang="{{ config('app.locale') }}">

<head>
    @include ('layouts.heads')
    <title>GATK form</title>
    @include ('layouts.imports')
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Submissions GATK2019</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Institution</th>
                                <th>Position</th>
                                <th>Plan</th>
                                <th>Alhambra</th>
                                <th>Dietary Req.</th>
                                <th>WaitingList</th>
                            </tr>
                        </thead>
                        <tbody id='tbody'></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        const tableBody = document.getElementById('tbody');
                const xhr = new XMLHttpRequest();
                xhr.open('GET','/search' ,true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onload = function() {
                    if(xhr.readyState == 4 && xhr.status == 200)
                    {
                        tableBody.innerHTML = xhr.responseText;
                    }
                }
                xhr.send()
    </script>
    </body>
</html>
