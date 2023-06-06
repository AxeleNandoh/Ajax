import * as tableJs from "./table.js";

<<<<<<< HEAD
fetch('./php/query/selector.php', {
=======
let tbody = document.querySelector('#dynamicTable tbody');

// chiamata ajax ;
fetch('./php/selector.php', {
>>>>>>> 712ba506bd89f230f6ab90ec68a58488e96daeff
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
        const row = document.createElement('tr');
        const id = tableJs.createTableCell(persona.id);
        const firstName = tableJs.createTableCell(persona.firstName);
        const lastName = tableJs.createTableCell(persona.lastName);
        const email = tableJs.createTableCell(persona.email);
        const actionTd = tableJs.createActionTableCell(persona);
        
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