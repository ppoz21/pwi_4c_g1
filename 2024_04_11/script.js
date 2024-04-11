function insertRow(name, surname, description) {
    const row = document.createElement('tr');

    const nameCell = document.createElement('td');
    nameCell.textContent = name;
    row.appendChild(nameCell);

    const surnameCell = document.createElement('td');
    surnameCell.textContent = surname;
    row.appendChild(surnameCell);

    const descriptionCell = document.createElement('td');
    descriptionCell.textContent = description;
    row.appendChild(descriptionCell);

    const table = document.querySelector('#users-holder');
    table.appendChild(row);
}

function createUser(e) {
    e.preventDefault()

    const name = document.querySelector('#name').value;

    const surname = document.querySelector('#surname').value;

    const description = document.querySelector('#description').value;

    if (name !== '' && surname !== '' && description !== '') {
        insertRow(name, surname, description)
    } else {
        alert('All fields are required')
    }
}

(() => {
    const form = document.querySelector('#users-form');

    form.addEventListener('submit', createUser);
})()