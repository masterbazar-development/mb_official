
    function show() {
        document.querySelector('.hamburger').classList.
        toggle('open')
        document.querySelector('.navigation').classList.
        toggle('active')
    }



// this is a script for blur
    document.getElementById('blurButton').addEventListener('click', function() {
        var targetDiv = document.getElementById('targetDiv');
        targetDiv.classList.toggle('filter-blur');
    });
