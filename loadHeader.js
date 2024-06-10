// loadHeader.js
document.addEventListener('DOMContentLoaded', function() {
    fetch('header.html')
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro ao carregar o cabeçalho: ' + response.statusText);
            }
            return response.text();
        })
        .then(data => {
            document.body.insertAdjacentHTML('afterbegin', data);
        })
        .catch(error => console.error(error));
});
