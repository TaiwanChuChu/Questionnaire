<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<style type="text/css">
    #wraper {
        /*border: 1px solid red;*/
        padding: 5px;
        overflow: auto;
        background-color: gray;
        width: 600px;
        height: 450px;
        box-sizing: border-box;
        position: absolute;
        margin: -225px 0 0 -300px;
        left: 50%;
        top: 50%;
    }

    #bulletin {
        width: 380px;
        float: left;
        /*border: 1px solid yellow;*/
    }

    #login {
        margin-top: 100px;
        width: 200px;
        float: left;
        /*border: 1px solid green;*/
    }

    #login > label {
        font-size: 15px;
    }

    #btn_option {
        width: 196px;
        text-align: right;
        padding-top: 2px;
    }
</style>
<body>
    <form method="POST">
        @csrf
        <div id="wraper">
            <div id="bulletin">
                佈告欄內容
            </div>
            <div id="login">
                <img src="{{ asset('style/img/Logo.png') }}" alt="Logo" width="196" height="150"><br />
                <label for="account">
                    帳號:<input type="text" id="account" name="account" value="{{ $account }}">
                </label>
                <label for="pass">
                    密碼:<input type="password" id="pass" name="pass">
                </label>
                <div id="btn_option">
                    <input type="submit" value="Login">
                    <input type="reset" value="Reset">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
