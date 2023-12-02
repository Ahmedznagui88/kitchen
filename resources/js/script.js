const swup = new Swup();


let btn = document.getElementById('btn');
let form = document.getElementById('form-logout');
btn.addEventListener('click', (event) => {
    event.preventDefault();
    form.submit();
});


