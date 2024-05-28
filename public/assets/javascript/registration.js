document.addEventListener("DOMContentLoaded", function () {
    // Hide sections initially
    document.getElementById("personalInfoSection").style.display = "none";
    document.getElementById("emergencyContactsSection").style.display = "none";
    document.getElementById("changeAddressSection").style.display = "none";
    document.getElementById("changeSurnameSection").style.display = "none";

    // Continue button click event
    var continueButton = document.querySelector('.continue-button');
    continueButton.addEventListener("click", function () {
        var selectedRadioButton = document.querySelector('input[name="applicantType"]:checked');
        if (selectedRadioButton.value === "newApplicantRadio") {
            // Hide "Choose if you are" section
            document.getElementById("chooseIfYouAreSection").style.display = "none";
            // Show "Personal Information" section
            document.getElementById("personalInfoSection").style.display = "block";
            // Show "Emergency Contacts" section
            document.getElementById("emergencyContactsSection").style.display = "block";
        } else if (selectedRadioButton.value === "changeAddressRadio") {
            // Hide "Choose if you are" section
            document.getElementById("chooseIfYouAreSection").style.display = "none";
            // Show "Change Address" section
            document.getElementById("changeAddressSection").style.display = "block";
        } else if (selectedRadioButton.value === "changeSurnameRadio") {
            // Hide "Choose if you are" section
            document.getElementById("chooseIfYouAreSection").style.display = "none";
            // Show "Change Surname" section
            document.getElementById("changeSurnameSection").style.display = "block";
        } else if (selectedRadioButton.value === "renewalRadio") {
            // Hide "Choose if you are" section
            document.getElementById("chooseIfYouAreSection").style.display = "none";
            // Show "Personal Information" section
            document.getElementById("personalInfoSection").style.display = "block";
            // Show "Emergency Contacts" section
            document.getElementById("emergencyContactsSection").style.display = "block";
        }
    });
});
