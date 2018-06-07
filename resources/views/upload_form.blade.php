<html lang="{{ config('app.locale') }}">

<head>
    @include ('layouts.heads')
    <title>GATK form</title>
    @include ('layouts.imports')
</head>

<body>
    <div class="overlay">
    <div class="form-style-10" id="large-header" class="large-header">
        <form action="/upload" id="GATKForm" data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <h2>Application for GATK Workshop</h2>
            <h5>17/09/2018 - 21/09/2018, Seville, Spain.</h5>

            <br>
            <div class="logoGATK">
                <a href="http://clinbioinfosspa.es" target="_blank"><img src="http://www.clinbioinfosspa.es/files/image/logo-CBA.png" alt="logoBroad" class="img-responsive" style="width:150px;"></a>
                <a href="https://software.broadinstitute.org/gatk/" target="_blank"><img src="https://cloud.google.com/genomics/resources/gatk-logo.png" alt="logoGATK" class="img-responsive" style="width:150px;"></a>
                <a href="https://www.broadinstitute.org/"><img src="http://genomicinfo.broadinstitute.org/cdnr/78/acton/attachment/13431/f-0004/2/-/-/-/-/image.png" alt="logoBroad" class="img-responsive" style="width:200px;"></a>
            </div>
        
            <div class="clear"></div>
            <br>

            <h4>Please answer the following application questions:</h4>
            <p>All the fields are required.</p>
            <br>

            <div class="form-group has-feedback">
                <label for="commandLine" class="control-label">Are you familiar with using the command line in a Unix/Linux environment?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="commandLine" value="Yes" required> Yes
                    </label>
                    <label>
                        <input type="radio" name="commandLine" value="No" required> No
                    </label>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label for="GATKfamiliar" class="control-label">Are you familiar with GATK?</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="GATKfamiliar" value="Yes" required> Yes
                    </label>
                    <label>
                        <input type="radio" name="GATKfamiliar" value="No" required> No
                    </label>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label for="analyzeData" class="control-label">Do you currently have data to analyze?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="analyzeData" value="Yes" required> Yes
                    </label>
                    <label>
                        <input type="radio" name="analyzeData" value="No" required> No
                    </label>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label for="inputInterests" class="control-label">Describe your group's research interests:</label>
                <input type="text" class="form-control" id="interestsId" name="inputInterests" aria-describedby="inputInterests" placeholder=""
                    data-error="Please enter the required information." required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group has-feedback">
                <label for="inputCompany" class="control-label">Institution / Group:</label>
                <input type="text" class="form-control" id="inputCompany" name="inputCompany" aria-describedby="inputCompany" placeholder="Enter your group name."
                    data-error="Please enter your group name." required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group has-feedback">
                <label for="inputPosition" class="control-label">Position:</label>
                <input type="text" class="form-control" id="inputPosition" name="inputPosition" aria-describedby="inputPosition" placeholder="Enter your position."
                    data-error="Please enter your position." required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group has-feedback">
                <label for="inputFullName" class="control-label">Full Name:</label>
                <input type="text" class="form-control" id="inputFullName" name="inputFullName" aria-describedby="inputInstitution" placeholder="Enter your full name."
                    data-error="Please type you full name." required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group has-feedback">
                <label for="inputDinner" class="control-label">Do you want to attend the Gala Dinner? (+50€)</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="inputDinner" value="Yes" required> Yes
                    </label>
                    <label>
                        <input type="radio" name="inputDinner" value="No" required> No
                    </label>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label for="inputEmail" class="control-label">Email:</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Enter a valid email address." name="inputEmail" data-error="That email address is invalid."
                    required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
            </div>

            @include ('layouts.errors')

            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div></div>
</body>

</html>