<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/style.css"/>
</head>
<body>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="googleMap" 
                style="margin: 20px; width:100%; height:450px;">
            </div>

            <script>
                function myMap() {
                var mapProp= {
                  center:new google.maps.LatLng(51.508742,-0.120850),
                  zoom:5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhI2pW9TVr2mA8fWX_B-JwS31CPSM4EDg&callback=myMap"></script>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>To participate in the conference, please fill out the form</h3></div>
                <div class="panel-body">
                    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Fill out the form</button></div><hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>List users, who register for conference </h3>
                            <hr>
                            <div class="records_content">
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>

    </div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">To participate in the conference, please fill out the form</h4>
            </div>

            <div class="modal-body">
                <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" id="firstname" placeholder="Firstname" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" placeholder="Lastname" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input type="text" id="birthdate" placeholder="Birthdate" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="Subject" class="form-control"/>
                </div>
               </div> 
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" placeholder="Country" class="form-control"/>
                </div>
        
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" placeholder="Phone" class="form-control"/>
                </div>

                 <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" placeholder="E-mail" class="form-control"/>
                </div>
            </div>
        </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add new</button>
                <button type="button" class="btn btn-danger" onclick="form2()">Next-></button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- //form2 -->
<!-- <div class="modal fade" id="add_new_record_modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">To participate in the conference, please fill out the form</h4>
            </div>

            <div class="modal-body">

                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" id="company" placeholder="Company" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" id="position" placeholder="Position" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="about">About me </label>
                    <input type="text" id="about" placeholder="About me" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="text" id="photo" placeholder="Photo" class="form-control"/>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add new</button>
            </div>
        </div>
    </div>
</div> -->
<!-- // Modal --> 

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="update_firstname" placeholder="Firstname" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="update_lastname" placeholder="Lastname" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input type="text" id="update_birthdate" placeholder="Birthdate" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="update_subject" placeholder="Subject" class="form-control"/>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" id="update_country" placeholder="Country" class="form-control"/>
                    </div>
            
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="update_phone" placeholder="Phone" class="form-control"/>
                    </div>

                     <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" id="update_email" placeholder="E-mail" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<!-- <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script> -->
</body>
</html>
