function validateForm() {
    // Get all the input elements
    const fullName = document.getElementById("fullName");
    const surname = document.getElementById("surname");
    const houseNumber = document.getElementById("houseNumber");
    const street = document.getElementById("street");
    const barangay = document.getElementById("barangay");
    const contactNumber = document.getElementById("contactNumber");
    const dateOfBirth = document.getElementById("dateOfBirth");
    const gender = document.getElementById("gender");
    const bloodType = document.getElementById("bloodType");
    const emergencyName = document.getElementById("emergencyName");
    const emergencyRelationship = documentgetElementById("emergencyRelationship");
    const emergencyContactNumber = document.getElementById("emergencyContactNumber");
  

    let errorMessage = "Please fill out this field.";
  
    // full name
    if (fullName.value.trim() === "") {
      errorMessage += "Full name is required.\n";
    }
  
    // Validate surname
    if (surname.value.trim() === "") {
      errorMessage += "Surname is required.\n";
    }
  
    // house number
    if (houseNumber.value.trim() === "") {
      errorMessage += "House number is required.\n";
    }
  
    // street
    if (street.value.trim() === "") {
      errorMessage += "Street is required.\n";
    }
  
    // Validate barangay
    if (barangay.value.trim() === "") {
      errorMessage += "Barangay is required.\n";
    }
  
    // contact number
    if (contactNumber.value.trim() === "") {
      errorMessage += "Contact number is required.\n";
    } else if (isNaN(contactNumber.value)) {
      errorMessage += "Contact number must be a valid phone number.\n";
    }
  
    // date of birth 
    const dobRegex = /^\d{4}-\d{2}-\d{2}$/; // YYYY-MM-DD format
    if (!dateOfBirth.value.match(dobRegex)) {
      errorMessage += "Invalid date of birth format. Please use YYYY-MM-DD.\n";
    }
  
    // gender 
    if (gender.selectedIndex === 0) {
      errorMessage += "Please select your gender.\n";
    }
  
    // blood type 
    if (bloodType.selectedIndex === 0) {
      errorMessage += "Please select your blood type.\n";
    }
  
    // emergency contact name
    if (emergencyName.value.trim() === "") {
      errorMessage += "Emergency contact name is required.\n";
    }
  
    // emergency contact relationship
    if (emergencyRelationship.value.trim() === "") {
      errorMessage += "Emergency contact relationship is required.\n";
    }
  
    // Validate emergency contact number
    if (emergencyContactNumber.value.trim() === "") {
      errorMessage += "Emergency contact number is required.\n";
    } else if (isNaN(emergencyContactNumber.value)) {
      errorMessage += "Emergency contact number must be a valid phone number.\n";
    }
  
    // Display error message (if any) and prevent form submission
    if (errorMessage !== "") {
      alert(errorMessage);
      return false;
    }
  
    // If no errors, submit the form
    return true;
  }
  