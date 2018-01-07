function () {
    addContactForm.on("submit", function (event) {
        var newContact = {
            firstName: firstNameInput.val(),
            lastName: lastNameInput.val(),
            email: emailInput.val(),
            phone: phoneInput.val()
        };
        addContact(newContact);
        hideAddContactForm();
        event.preventDefault();
    });
};

