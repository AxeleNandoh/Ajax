let persone;

fetch('./php/query/selector.php', {
    method: 'POST',
    header: {
        'Content-Type': 'application/json',
    }
})
.then(response => response.json())
.then(data => {
    persone = data;
    console.log('Dati ricevuti dalla response = ', persone);
})
.catch((err) => {
    console.error('opss Errore Something goes wrong', err);
});

