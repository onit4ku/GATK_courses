<html lang="{{ config('app.locale') }}">

<head>
    @include ('layouts.heads')
    <title>GATK form</title>
    @include ('layouts.imports')
</head>

<body>
    <div class="overlay">
        <div class="form-style-10" id="large-header" class="large-header">
            <form action="/upload" id="GATKForm" data-toggle="validator" role="form" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}

                <h2><i class="far fa-calendar-alt" style="color:#2f88c3"></i> Application for GATK Workshop</h2>
                <h5>2019-10-21 - 2019-10-24, Seville, Spain.</h5>

                <br>
                <div class="logoGATK">
                    <a href="http://clinbioinfosspa.es" target="_blank"><img
                            src="http://www.clinbioinfosspa.es/files/image/logo-CBA.png" alt="logoBroad"
                            class="img-responsive" style="width:150px;"></a>
                    <a href="https://software.broadinstitute.org/gatk/" target="_blank"><img
                            src="http://www.clinbioinfosspa.es/files/image/logoGATK1.png" alt="logoGATK"
                            class="img-responsive" style="width:150px;"></a>
                    <a href="https://www.broadinstitute.org/"><img
                            src="http://www.clinbioinfosspa.es/files/image/logoGATK.png"
                            alt="logoBroad" class="img-responsive" style="width:200px;"></a>
                </div>

                <div class="clear"></div>
                <br>

                <h4>Please answer the following application questions:</h4>
                <p><b>* All the fields are required.</b></p>
                <br>

                <div class="form-group has-feedback">
                    <label for="commandLine" class="control-label">Are you familiar with using the command line in a
                        Unix/Linux environment?</label>
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
                    <label for="researchInterests" class="control-label">Describe your group's research
                        interests:</label>
                    <textarea rows="4" cols="50" maxlength="190" class="form-control" id="interestsId"
                        name="researchInterests" aria-describedby="researchInterests"
                        placeholder="Tell us about your interests briefly."
                        data-error="Please enter the required information." required></textarea>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span id='remainingC'></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="institution" class="control-label">Institution / Group:</label>
                    <input type="text" maxlength="190" class="form-control" id="institution" name="institution"
                        aria-describedby="institution" placeholder="Enter your group name."
                        data-error="Please enter your group name." required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="position" class="control-label">Position:</label>
                    <input type="text" maxlength="190" class="form-control" id="position" name="position"
                        aria-describedby="position" placeholder="Enter your position."
                        data-error="Please enter your position." required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="fullName" class="control-label">Full Name:</label>
                    <input type="text" maxlength="190" class="form-control" id="fullName" name="fullName"
                        aria-describedby="inputInstitution" placeholder="Enter your full name."
                        data-error="Please type you full name." required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="inputDinner" class="control-label">Course registration:</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="inputDinner" value="withDinner" required> Course and networking
                            dinner (150€)
                        </label>
                        <label>
                            <input type="radio" name="inputDinner" value="onlyEvent" required> Only course (100€)
                        </label>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label for="email" class="control-label">Email:</label>
                    <input type="email" maxlength="190" class="form-control" id="email"
                        placeholder="Enter your email address." name="email" data-error="That email address is invalid."
                        required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                @include ('layouts.errors')

                <input type="submit" value="Submit" class="btn btn-success">
            </form>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        var len = 0;
        var maxchar = 190;
        $('#interestsId').keyup(function() {
            len = this.value.length
            if (len > maxchar) {
                return false;
            } else if (len > 0) {
                $("#remainingC").html("Remaining characters: " + (maxchar - len));
            } else {
                $("#remainingC").html("Remaining characters: " + (maxchar));
            }
        })
    });
    </script>
</body>

</html>