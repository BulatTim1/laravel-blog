const links = document.querySelectorAll('.table-action');
links.forEach(link => {
    link.querySelector('.btn-success').addEventListener('click', function(e) {
        const active = link.querySelector('ul').classList.contains('d-none');
        link.querySelector('ul').classList.toggle('d-none');
        if (active){
            link.querySelector('.btn-success').innerHTML = "Hide action";
        } else {
            link.querySelector('.btn-success').innerHTML = "Show action";
        }
    });
});