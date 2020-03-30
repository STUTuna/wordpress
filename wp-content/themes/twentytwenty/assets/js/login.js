$(document).ready(function (params) {
    //登入、註冊頁面切換
    $('#article_login').show();
    $('#article_signup').hide();
    $(document).on('click', '#show_signup', function () {
        $('#article_login').hide();
        $('#article_signup').show();
    });

    $(document).on('click','#show_login',function () {
        $('#article_login').show();
        $('#article_signup').hide();
    });

    //註冊功能
    $(document).on('click','#btn_signup',function () {
        console.log('btn_signup');
        let user_email = $('input[name="signup_user_email"]').val();
        let user_password = $('input[name="signup_user_password"]').val();

        // console.log(user_email);
        // console.log(user_password);

        
        $.ajax({
            type: "post",
            url: "/process/wp-content/themes/twentytwenty/process.php",
            data: {
                action: 'signup',
                user_email: user_email,
                user_password: user_password
            },
            dataType: "html",
            success: function (response) {
                console.log('signup:response:'+response);
            }
        });
    });
});