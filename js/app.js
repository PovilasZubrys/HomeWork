console.log('Labas')

const button = document.querySelector('#button');
const place = document.querySelector('#atsakymas');

button.addEventListener('click', () => {
    const info = document.querySelector('#infojs').value;

    axios.post(apiUrl, {
        input: info,
        kitkas: 'Zuikio ausys'
    })
        .then(function (response) {
            console.log(response.data.ans);
            place.innerHTML = response.data.ans;
        })
        .catch(function (error) {
            console.log(error);
        });
});