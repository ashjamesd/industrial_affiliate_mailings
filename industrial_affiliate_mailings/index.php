<?php
// Your existing template code

// Add the button and input fields HTML
?>
<div>
    <h3> NYU Wireless Industrial Affiliate Contacts </h3>
    <button id="showFieldsButton">Add a new Contact</button>
    <div id="inputFields" style="display: none;">
        <input type="text" id="nameInput" placeholder="Name">
        <input type="email" id="emailInput" placeholder="Email">
        <button id="submitButton">Submit</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("showFieldsButton");
        var inputFields = document.getElementById("inputFields");
        var nameInput = document.getElementById("nameInput");
        var emailInput = document.getElementById("emailInput");
        var submitButton = document.getElementById("submitButton");

        button.addEventListener("click", function() {
            inputFields.style.display = "block";
        });

        submitButton.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form submission

            var nameValue = nameInput.value;
            var emailValue = emailInput.value;

            if (nameValue && emailValue) {
                // Do something with the values, e.g., display or process them
                console.log("Name:", nameValue);
                console.log("Email:", emailValue);

                // You can also reset the input fields
                nameInput.value = "";
                emailInput.value = "";
            } else {
                alert("Please fill in both name and email.");
            }
        });
    });
</script>
