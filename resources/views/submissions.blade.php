<html lang="{{ config('app.locale') }}">

<head>
    @include ('layouts.heads')
    <title>GATK form</title>
    @include ('layouts.imports')
</head>

<body>
    <!-- <div class="overlay"> -->
        <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Submissions GATK2019</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <input class="form-controller" id="search" name="search" type="text" value="">
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!-- <th>ID</th>
                                <th>commandLine</th>
                                <th>GATKfamiliar</th>
                                <th>analyzeData</th> -->
                                <th>Full Name</th>
                                <th>Institution</th>
                                <th>Position</th>
                                <!-- <th>email</th> -->
                                <th>Plan</th>
                                <th>Alhambra</th>
                                <th>Dietary Req.</th>
                                <th>Payment</th>
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
        const search = document.getElementById('search');
        const tableBody = document.getElementById('tbody');
        function getContent(){

        const searchValue = search.value;

            const xhr = new XMLHttpRequest();
            xhr.open('GET','{{route('search')}}/?search=' + searchValue ,true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onreadystatechange = function() {

                if(xhr.readyState == 4 && xhr.status == 200)
                {
                    tableBody.innerHTML = xhr.responseText;
                }
            }
            xhr.send()
        }
        search.addEventListener('input',getContent);
    </script>
    </body>

</html>