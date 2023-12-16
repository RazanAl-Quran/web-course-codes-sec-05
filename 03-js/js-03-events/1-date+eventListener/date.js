document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#myBtn').addEventListener('click', function () {
        const date = new Date();
        // let day = date.getDate();
        document.querySelector('#demo').innerHTML = date.getDate();
    });
});
