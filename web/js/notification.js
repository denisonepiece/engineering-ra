        $(function () {
            $('.notification-click-hidden').click(function () {
                $('.notification-bottom').toggleClass('notification-hidden');
                $.ajax({
                    url:'/site/ok',
                    type: 'POST',
                    success: function(){
                    },
                    error: function () {
                        alert('Error!');
                    }
                });
            });
        });
