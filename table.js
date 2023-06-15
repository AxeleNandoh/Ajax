export function createTableCell(value) {
  const cell = document.createElement("td");
  cell.textContent = value;
  return cell;
}

export function createActionTableCell(persona) {
  const actionTd = document.createElement("td");
  const editButton = createActionButton("Edit", "warning");
  const deleteButton = createActionButton("Delete", "danger");

  editButton.addEventListener("click", () => {
    console.log(`Editing ${persona.id}`);
  });

  deleteButton.addEventListener("click", () => {
    console.log(`Deleting ${persona.id}`);
  });

  actionTd.appendChild(editButton);
  actionTd.appendChild(deleteButton);

  return actionTd;
}

export function createActionButton(text, color) {
  const button = document.createElement("button");
  button.textContent = text;
  button.classList.add("btn", `btn-${color}`);
  return button;
}
// insert dei fakedati su db con chiamata ajax.
export function insertPerson(form) {
  form.append("firstName", "Marco");
  form.append("lastName", "Brunelli");
  form.append("email", "coglione@hotmail.it");

  fetch("./php/query/insert.php", {
    method: "POST",
    header: {
      "Content-Type": "application/json",
    },
    body: form,
  })
    .then((response) => response.json())
    .then((data) => {
      // const persone = data;
      console.log("Dati ricevuti dalla response hahahahahah = ", data);
      location.reload();
    })
    .catch((err) => {
      console.error("Cazzzoooooo un Errore Something goes wrong!!", err);
    });
}
