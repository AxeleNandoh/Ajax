import { createTableCell, createActionTableCell } from "./table.js";

fetch('./php/query/selector.php', {
    method: 'POST',
    header: {
        'Content-Type': 'application/json',
    }
})
.then(response => response.json())
.then(data => {
    const persone = data;
    console.log('Dati ricevuti dalla response = ', persone);

    persone.forEach(persona => {
        tbody.document.querySelector('#tbody');
        const row = document.createElement('tr');
        const id = createTableCell(persona.id);
        const firstName = createTableCell(persona.firstName);
        const lastName = createTableCell(persona.lastName);
        const email = createTableCell(persona.email);
        const actionTd = createActionTableCell(persona);
        
        row.appendChild(id);
        row.appendChild(firstName);
        row.appendChild(lastName);
        row.appendChild(email);
        row.appendChild(actionTd);
        
        tbody.appendChild(row);
    });
})
.catch((err) => {
    console.error('opss Errore Something goes wrong', err);
});

// INSERT DEI DATI
const formDatifake = new FormData();
let persona;
let inserisciPersona = document.getElementById('newRow');


inserisciPersona.addEventListener('click', () => insertPerson);


formDatifake.append('firstName', 'Mark');
formDatifake.append('lastName', 'Rondinelli');
formDatifake.append('email', 'mark@gmail.com');

fetch('./php/query/selector.php', {
    method: 'POST',
    header: {
        'Content-Type': 'application/json',
    },
    body: formDatifake
})
.then(response => response.json())
.then(data => {
    console.log('Dati ricevuti dalla response = ', persone);

})
.catch((err) => {
    console.error('opss Errore Something goes wrong', err);
});