document.querySelector('.burger').addEventListener('click', function (e) {
    e.preventDefault();
    this.classList.toggle('on');
    let checkbox = document.getElementById('drawer_input');
    checkbox.checked = !checkbox.checked;
});