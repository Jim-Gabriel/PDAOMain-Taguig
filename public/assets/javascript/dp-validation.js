document.addEventListener('DOMContentLoaded', function() {
    function validateConsent() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkedCount = 0;
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                checkedCount++;
            }
        });
        if (checkedCount !== checkboxes.length) {
            alert("Please check all consent boxes before proceeding.");
            return false;
        }
        return true;
    }
    const continueButton = document.querySelector('.continue-button');
    continueButton.addEventListener('click', function() {
        if (validateConsent()) {
            window.location.href = 'registration.php';
        }
    });

    const noConsentButton = document.querySelector('.no-consent-button');
    noConsentButton.addEventListener('click', function() {
        window.location.href = 'homepage.php';
    });
});
