function startLoader() {
    $('#loader').html('<div class="loader" style="position: fixed;z-index:100;top:0;width: 100%;height: 100%;background: rgba(0,0,0,0.6)">'+'<img style="margin: 20% auto;display: inherit;" src="/img/loader/Ripple-1s-99px.gif" />' + '</div>');
    return;
}
function endLoader() {
    $('#loader').html('');
    return;
}