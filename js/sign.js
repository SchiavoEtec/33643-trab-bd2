document.addEventListener('DOMContentLoaded', () => {
    const ageElement = document.getElementById('age');
    if (ageElement) {
        ageElement.addEventListener('input', (event) => {
            document.getElementById('age-p').textContent = event.target.value;
        })
    }

    const home = document.getElementById('home');
    if (home) {
        home.addEventListener('click', () => {
            window.location.href = '../../index.html'
        })
    }

    const animal = document.getElementById('animals');
    if (animal) {
        animal.addEventListener('click', () => {
            window.location.href = '../animals/index.php'
        })
    }

    const users = document.getElementById('users');
    if (users) {
        users.addEventListener('click', () => {
            window.location.href = '../users/index.php'
        })
    }

    const apadri = document.getElementById('apadri');
    if (apadri) {
        apadri.addEventListener('click', () => {
            window.location.href = '../apadri/index.php'
        })
    }
})