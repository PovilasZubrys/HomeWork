console.log('Labas')

const buttonAgurkas = document.querySelector('.sodintiAgurka');
const list = document.querySelector('#list');
const errorMsg = document.querySelector('#error');

const addNewList = () => {
    const agurkai = document.querySelectorAll('.agurkas');
    agurkai.forEach(agurkas => {
        agurkas.querySelector('[type=button]').addEventListener('click', () => {

            const id = agurkas.querySelector('[name=rautiAgurka]').value;
            axios.post(apiUrl, {
                id: id,
                rauti: 1
            })
                .then(function (response) {
                    list.innerHTML = response.data.list;
                    errorMsg.innerHTML = '';
                    addNewList();
                })
                .catch(function (error) {
                    errorMsg.innerHTML = error.response.data.msg;
                });
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    axios.post(apiUrl, {
        list: 1,
    })
        .then(function (response) {
            list.innerHTML = response.data.list;
            errorMsg.innerHTML = '';
            // augurku klases nodai, is naujo pasetint trynimo mygtuko eventus
            addNewList();
        })
        .catch(function (error) {
            console.log(error.response.data.msg);
            errorMsg.innerHTML = error.response.data.msg;
        });

})


buttonAgurkas.addEventListener('click', () => {
    const count = document.querySelector('[name=kiekAgurku]').value;
    console.log(count);
    axios.post(apiUrl, {
        kiekis: count,
        sodinti: 1
    })
        .then(function (response) {
            console.log(response.data.list);
            list.innerHTML = response.data.list;
            errorMsg.innerHTML = '';
            addNewList();
        })
        .catch(function (error) {
            console.log(error.response.data.msg);
            errorMsg.innerHTML = error.response.data.msg;
        });
});