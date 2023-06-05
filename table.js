export function createTableCell(value) {
    const cell = document.createElement('td');
    cell.textContent = value;
    return cell;
}

export function createActionTableCell(persona) {
    const actionTd = document.createElement('td');
    const editButton = createActionButton('Edit', 'warning');
    const deleteButton = createActionButton('Delete', 'danger');

    editButton.addEventListener('click', () => {
        console.log(`Editing ${persona.id}`);
    });

    deleteButton.addEventListener('click', () => {
        console.log(`Deleting ${persona.id}`);
    });

    actionTd.appendChild(editButton);
    actionTd.appendChild(deleteButton);

    return actionTd;
}

export function createActionButton(text, color) {
    const button = document.createElement('button');
    button.textContent = text;
    button.classList.add('btn', `btn-${color}`);
    return button;
}
