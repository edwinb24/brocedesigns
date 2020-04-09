
    var renderOnLoad = function() {
        var e = document.getElementById('render-onload');
        var n = document.createElement('div');
        n.innerHTML = e.textContent;
        document.body.appendChild(n);
        e.parentElement.removeChild(e)
    };

    if(window.requestAnimationFrame) {
        window.requestAnimationFrame(function(){window.setTimeout(renderOnLoad, 0)})
    } else {
        window.addEventListener('load', renderOnLoad);
    }
