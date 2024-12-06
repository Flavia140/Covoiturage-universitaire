document.getElementById('search-form').addEventListener('submit', function (e) {
    const inputs = document.querySelectorAll('#search-form input, #search-form select');
    let isValid = true;

    inputs.forEach(input => {
        if (!input.value) {
            isValid = false;
            alert(`Veuillez remplir le champ : ${input.name}`);
            input.focus();
            return false;
        }
    });

    if (!isValid) {
        e.preventDefault();
    }
});
