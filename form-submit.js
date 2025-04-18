document.querySelector('.forma').addEventListener('submit', function(event) {
    event.preventDefault();

    const numberInput = this.querySelector('input[name="number"]');
    const numberValue = numberInput.value;

    if (!/^\d+$/.test(numberValue)) {
        alert("Пожалуйста, введите только цифры в поле 'Номер'.");
        numberInput.focus();
        return;
    }

    const formData = new FormData(this);

    fetch('submit_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(message => {
        alert(message); 
        this.reset(); 
    })
    .catch(error => {
        console.error('Ошибка:', error);
        alert("Произошла ошибка при отправке данных.");
    });
});
