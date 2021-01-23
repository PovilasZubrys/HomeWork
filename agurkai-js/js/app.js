console.log('Labas')

const button = document.querySelector('[type=button]');
const list = document.querySelector('#list');

button.addEventListener('click', () => {
    const add = document.querySelector('[name=kiekis]').value;

    axios.post(apiUrl, {
        input: add
    })
        .then(function (response) {
            console.log(response.data.ans);
            place.innerHTML = response.data.ans;
        })
        .catch(function (error) {
            console.log(error);
        });
});