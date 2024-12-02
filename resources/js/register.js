document.getElementById('signup-form').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form submission

    // Get form values
    const fullName = document.getElementById('full-name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const university = document.getElementById('university').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirm-password').value.trim();
    const userType = document.getElementById('user-type').value;
    const termsAccepted = document.getElementById('terms').checked;

    // Validation
    if (!fullName || !email || !phone || !password || !confirmPassword || !userType) {
        alert("Veuillez remplir tous les champs obligatoires !");
        return;
    }
    if (password !== confirmPassword) {
        alert("Les mots de passe ne correspondent pas !");
        return;
    }
    if (!termsAccepted) {
        alert("Vous devez accepter les conditions générales d'utilisation !");
        return;
    }

    // Form is valid
    alert("Inscription réussie !");
    // Here you can handle form submission (e.g., send data to the server)
});
