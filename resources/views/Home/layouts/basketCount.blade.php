<script>
    function basketCount() {


        $.ajax({
            method:'POST',
            url:'/basketCount',
        }).done(function (msg) {
            $('.basket_count').text(msg)
            // console.log(msg)
        });
    }
    basketCount();
</script>