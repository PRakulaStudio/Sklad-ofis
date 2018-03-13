window.addEventListener('load', function () {
    var poisk = document.querySelector('poisk');

    poisk.querySelector('.search').addEventListener('click', function (e) {
        e.preventDefault();
        location.href = '/submit/' + document.querySelector('#poisk input[name="search"]').value
    })

    document.querySelectorAll(".sliderkit-nav-clip").forEach(element => {
        element.querySelectorAll(".sliderkit-nav-btn").forEach(btn => {
            btn.remove();
        })
    })
})