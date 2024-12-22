// script.js
$(document).ready(function() {
    $("#registrationForm").submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        $.ajax({
            type: "POST",
            url: "process.php",
            data: $(this).serialize(), // Serialize form data
            success: function(response) {
                $("#registrationForm").hide(); // Hide the form
                $("#displayArea").show(); // Show the display area
                $("#detailsContent").html(response); // Display the formatted response
            },
            error: function() {
                alert("An error occurred.");
            }
        });
    });
});