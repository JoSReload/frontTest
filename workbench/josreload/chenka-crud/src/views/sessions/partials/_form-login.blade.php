<h2><span class="label label-primary">ChenkaCrud</span></h2>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            {{ Form::email('email', null , array('class' => 'form-control',
                                                 'placeholder' => 'Enter email',
                                                 'id' => 'email')) }}
        </div>
        <div class="form-group">
            {{ Form::password('password', array('class' => 'form-control',
                                                'placeholder' => 'Password',
                                                'id' => 'password')) }}
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    {{ Form::checkbox( 'remember' , null, false) }} Remember me
                </label>
            </div>
        </div>
        <div class="form-group footer-group">
            {{ Form::button('Sign in', array('type' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block')) }}
            <a href="#">Forgot Password?</a>
        </div>
    </div>
</div>