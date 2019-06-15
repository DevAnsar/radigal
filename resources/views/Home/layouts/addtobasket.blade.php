<script>
    function addtobasket(productId, numbers, status) {
        startLoader();
        let product_id = productId;
        let number = numbers;
        let Status = status;
        let formData = new FormData();
        formData.append('product_id', product_id);
        formData.append('number', number);
        formData.append('status', Status);
        $.ajax({
            method: 'POST',
            url: '/addtobasket',
            data: formData,
            contentType: false,
            processData: false,
        }).done(function (msg) {
            // console.log(msg);
            endLoader();
            if (msg[1] == 1) {
                if (msg[0] == 0) {
                    swal({
                        text: "{!! 'بیشتر از موجودی محصول ، نمیتوان به سبد خرید اضافه کرد ' !!}",
                        title: "{!! '' !!}",
                        timer: "{!! '5000' !!}",
                        icon: "{!! '/img/error1.png' !!}",
                        buttons: "{!! 'باشه' !!}",
                        // more options
                    });
                } else if (msg[0] == 1) {
                    swal({
                        text: "{!! 'محصول به سبد خرید اضافه شد' !!}",
                        title: "{!! '' !!}",
                        timer: "{!! '5000' !!}",
                        icon: "{!! '/img/success2.png' !!}",
                        buttons: "{!! 'باشه' !!}",
                        // more options
                    });
                } else if (msg[0] > 1) {
                    swal({
                        text: "{!! 'به تعداد محصول در سبد خرید اضافه شد' !!}",
                        title: "{!! '' !!}",
                        timer: "{!! '5000' !!}",
                        icon: "{!! '/img/success2.png' !!}",
                        buttons: "{!! 'باشه' !!}",
                        // more options
                    });
                }

            }
        });

    }

    function editdata() {
        // console.log('x');
        let name = $('#edit_data input[name="name"]').val();
        let email = $('#edit_data input[name="email"]').val();


        if (name.length != 0 && email.length != 0) {
            let mobile = $('#edit_data input[name="mobile"]').val();
            let _token = $('#edit_data input[name="_token"]').val();
            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('mobile', mobile);

            $.ajax({
                method: 'POST',
                url: '/editdata',
                data: formData,
                contentType: false,
                processData: false,
                headers: {'X-CSRF-TOKEN': _token}
            }).done(function (msg) {
                // console.log(msg);
                // $('#edit_data').modal('hide');

                if (msg['id']){
                    swal({
                        text: "{!! 'اطلاعات بروز رسانی شد ' !!}",
                        title: "{!! '' !!}",
                        timer: "{!! '7000' !!}",
                        icon: "{!! '/img/success2.png' !!}",
                        buttons: "{!! 'باشه' !!}",
                        // more options
                    });
                    location.reload();
                }else {
                    swal({
                        text: msg[0],
                        title: "{!! '' !!}",
                        timer: "{!! '7000' !!}",
                        icon: "{!! '/img/error1.png' !!}",
                        buttons: "{!! 'باشه' !!}",
                        // more options
                    });
                }

            });

        } else {
            swal({
                text: "{!! 'همه ی مقادیر را صحیح وارد کنید ' !!}",
                title: "{!! '' !!}",
                timer: "{!! '7000' !!}",
                icon: "{!! '/img/error1.png' !!}",
                buttons: "{!! 'باشه' !!}",
                // more options
            });
        }

    }
</script>