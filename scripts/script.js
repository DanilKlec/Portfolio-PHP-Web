const table = document.getElementById('userTable');

// Делегирование для редактируемых ячеек
table.addEventListener('click', (e) => {
    const cell = e.target.closest('.editable');
    if (!cell) return;

    if (cell.querySelector('input')) return; // если уже редактируется

    const originalValue = cell.textContent;
    const input = document.createElement('input');
    input.type = 'text';
    input.value = originalValue;
    input.classList.add('form-control');
    cell.textContent = '';
    cell.appendChild(input);
    input.focus();

    input.addEventListener('blur', () => cell.textContent = input.value);
    input.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') cell.textContent = input.value;
        if (e.key === 'Escape') cell.textContent = originalValue;
    });
});

// Делегирование для кнопки удаления
table.addEventListener('click', (e) => {
    if (!e.target.closest('.delete-btn')) return;
    const row = e.target.closest('tr');
    row.remove();
});


// Добавление пользователя через модальное окно
document.getElementById('addForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const form = e.target;
    const name = form.name.value;
    const email = form.email.value;

    const table = document.getElementById('userTable');
    const newId = table.querySelectorAll('tr').length + 1;

    const row = document.createElement('tr');
    row.dataset.id = newId;
    row.innerHTML = `
        <td>${newId}</td>
        <td class="editable" data-field="name">${name}</td>
        <td class="editable" data-field="email">${email}</td>
        <td><button class="btn btn-sm btn-danger delete-btn">Удалить</button></td>
    `;
    table.appendChild(row);

    // Снова навешиваем события на новые элементы
    row.querySelectorAll('.editable').forEach(cell => {
        cell.addEventListener('click', () => {
            const originalValue = cell.textContent;
            const input = document.createElement('input');
            input.type = 'text';
            input.value = originalValue;
            input.classList.add('form-control');
            cell.textContent = '';
            cell.appendChild(input);
            input.focus();

            input.addEventListener('blur', () => {
                cell.textContent = input.value;
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') cell.textContent = input.value;
                if (e.key === 'Escape') cell.textContent = originalValue;
            });
        });
    });

    row.querySelector('.delete-btn').addEventListener('click', () => row.remove());

    form.reset();
    const modal = bootstrap.Modal.getInstance(document.getElementById('addModal'));
    modal.hide();
});

// Плавная прокрутка по якорям
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth' });
    });
});

// Модальные окна для проектов
document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
        const modalId = card.dataset.modal;
        const modal = new bootstrap.Modal(document.getElementById(modalId));
        modal.show();
    });
});
