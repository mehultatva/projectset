<?php include 'header-login-register.php'; ?>

<section class="register-login-wrapper login-wrapper">
<div class="banner-image">
        <img src="<?php echo $rootUrl ?>images/login-banner.jpg" alt="register-banner">
    </div>
	<div class="container">
        <div class="register-login-outer-wrapper">
            <div class="register-login-content-wrapper">
                <div class="title-wrapper">
                    <h1>Login</h1>
                    <p>Your dashboard awaits you</p>                    
                </div>                
                <div class="form-wrapper">
                    <form action="" class="form">
                        <div class="form-group">
                            <div class="tooltip-wrapper">                          
                                <label for="email">Email Address</label>   
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>                               
                            </div>                            
                            <input type="email" id="email" class="form-control" placeholder="yourname@email.com">                            
                        </div>
                        <div class="form-group password-group">
                            <div class="tooltip-wrapper">                          
                                <label for="password">Password</label>
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>                               
                            </div>  
                            <div class="password">
                                <input type="password" id="password" class="form-control" placeholder="Enter password">                                
                                <span>
                                    <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                    <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                </span>
                            </div>                                                        
                        </div>                        
                        <div class="checkbox-outer-wrapper">                           
                            <div class="checkbox-wrapper form-group">
                                <div class="form-check">
                                    <input class="form-check-input form-control" type="checkbox" value="" id="Remember me">
                                    <label class="form-check-label" for="Remember me">
                                    Remember me
                                    </label>
                                </div>
                            </div>      
                            <div class="forgot-password">
                                <a href="#" title="Forgotten details?">Forgotten details?</a>
                            </div>                         
                        </div>                       
                        <div class="btn-wrapper form-group">
                            <button type="submit" class="btn primary-fill-btn">Login</button>
                        </div>                        
                    </form>
                    <div class="account-link-wrapper">
                        <a href="#" title="Don't have an account yet?">Don't have an account yet?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>

