    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <style>
        .input-borders {
            border-radius: 5px;
        }
    </style>
    <div class="container-fluid">
        <form id="signup_form" onsubmit="return false" class="login100-form">
            <div class="billing-details">
                <div class="section-title">
                    <h2 class="login100-form-title p-b-49">Register Here</h2>
                </div>
            </div>
                <div class="form-group ">

                    <input class="input form-control input-borders" type="text" name="f_name" id="f_name" placeholder="First Name">
                </div>
                <div class="form-group">

                    <input class="input form-control input-borders" type="text" name="l_name" id="l_name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="input form-control input-borders" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="input form-control input-borders" type="password" name="password" id="password1" placeholder="password">
                </div>
                <div class="form-group">
                    <input class="input form-control input-borders" type="password" name="repassword" id="repassword" placeholder="confirm password">
                </div>
                <div class="form-group">
                    <input class="input form-control input-borders" type="text" name="mobile" id="mobile" placeholder="mobile">
                </div>
                <div class="form-group">
                    <input class="input form-control input-borders" type="text" name="address1" id="address1" placeholder="Address">
                </div>
                <div class="form-group">
                    <input class="input form-control input-borders" type="text" name="address2" id="address2" placeholder="City">
                </div>


                <div class="form-group">
                    <input class="primary-btn btn-block" value="Sign Up" type="submit" name="signup_button">
                </div>
                <div class="text-pad">
                    <a href="" data-toggle="modal" data-target="#Modal_login">Already have an Account ? then login</a>
                </div>


        </form>
        <div class="login-marg">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="signup_msg">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>