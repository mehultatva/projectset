<?php include 'header-login-register.php'; ?>

<section class="register-login-wrapper">
    <div class="banner-image">
        <img src="<?php echo $rootUrl ?>images/register-banner.jpg" alt="register-banner">
    </div>
	<div class="container">
        <div class="register-login-outer-wrapper">
            <div class="register-login-content-wrapper">
                <div class="title-wrapper">
                    <h1>Create an account</h1>
                    <p>Don't worry! You can edit these details later.</p>                    
                </div>                
                <div class="form-wrapper">
                    <form action="" class="form">
                        <div class="form-group">
                            <div class="tooltip-wrapper">
                                <label for="first-name">First name</label>  
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>                              
                            </div>
                            <input type="text" id="first-name" class="form-control" placeholder="Enter your first name">                            
                        </div>
                        <div class="form-group">  
                            <div class="tooltip-wrapper">                          
                                <label for="last-name">Last name</label>    
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>                               
                            </div>
                            <input type="text" id="last-name" class="form-control" placeholder="Enter your last name">
                        </div>
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
                        <div class="form-group password-group">
                            <div class="tooltip-wrapper">                          
                                <label for="confirm-password">Confirm Password</label>
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>                               
                            </div> 
                            <div class="password">
                            <input type="password" id="confirm-password" class="form-control" placeholder="Enter password">
                                <span>
                                <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                    <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                </span>
                            </div>                              
                        </div>
                        <div class="form-group">
                            <label for="captcha">Verify yourself with a click</label>                            
                        </div>
                        <div class="checkbox-outer-wrapper">
                            <p>Options</p>
                            <div class="checkbox-wrapper form-group">
                                <div class="form-check">
                                    <input class="form-check-input form-control" type="checkbox" value="" id="terms-and-condition">
                                    <label class="form-check-label" for="terms-and-condition">
                                    I have read and agree to the <a href="#" title="terms and condition">terms and condition.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="checkbox-wrapper form-group">
                                <div class="form-check">
                                    <input class="form-check-input form-control" type="checkbox" value="" id="terms-condition">
                                    <label class="form-check-label" for="terms-condition">
                                    I have read and understood the <a href="#" title="terms and condition">terms and condition.</a>
                                    </label>
                                </div>
                            </div>                           
                        </div>                       
                        <div class="btn-wrapper form-group">
                            <button type="submit" class="btn primary-fill-btn">Join ProjectSet</button>
                        </div>                        
                    </form>
                    <div class="account-link-wrapper">
                        <a href="#" title="Already have an account?">Already have an account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>

