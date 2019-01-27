// Add Record
function addRecord() {
    // get values
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var birthdate = $("#birthdate").val();
    var subject = $("#subject").val();
    var country = $("#country").val();
    var phone = $("#phone").val();
    var email = $("#email").val();


    // Add record
    $.post("ajax/addRecord.php", {
        firstname: firstname,
        lastname: lastname,
        birthdate: birthdate,
        subject: subject,
        country: country,
        phone: phone,
        email: email
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#firstname").val("");
        $("#lastname").val("");
        $("#birthdate").val("");
        $("#subject").val("");
        $("#country").val("");
        $("#phone").val("");
        $("#email").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Delete ?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails( id ) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function ( data, status ) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_firstname").val(user.firstname);
            $("#update_lastname").val(user.lastname);
            $("#update_birthdate").val(user.birthdate);
            $("#update_subject").val(user.subject);
            $("#update_country").val(user.country);
            $("#update_phone").val(user.phone);
            $("#update_email").val(user.email);
        }
    );
    // Open modal popup
    $( "#update_user_modal" ).modal( "show" );
}

function UpdateUserDetails() {
    // get values
    var firstname = $("#update_firstname").val();
    var lastname = $("#update_lastname").val();
    var birthdate = $("#update_birthdate").val();
    var subject = $("#update_subject").val();
    var country = $("#update_country").val();
    var phone = $("#update_phone").val();
    var email = $("#update_email").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            firstname: firstname,
            lastname: lastname,
            birthdate: birthdate,
            subject: subject,
            country: country,
            phone: phone,
            email: email


        },
        function (data, status)  {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function() {
    // READ recods on page load
    readRecords(); // calling function
});