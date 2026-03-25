function envoyerMail() {
    const nom = encodeURIComponent(document.getElementById('name').value);
    const corps = encodeURIComponent(document.getElementById('form_textarea').value);
    const sujet = encodeURIComponent('Message de ' + nom);

    window.open(`mailto:ethan@meideck.net?subject=${sujet}&body=${corps}`);
}