<?php include 'header.php'; ?>

<section class="master-layout-wrapper">
	<div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My network</a></li>
            <li class="breadcrumb-item active" aria-current="page">Glasgow University</li>
        </ol>
		<div class="title-wrapper has-back-arrow has-right-col">
			<h1><a href="javascript:history.back()" title="Back"><img src="<?php echo $rootUrl ?>images/back-arrow-blue.svg" alt="Back arrow"></a>Glasgow University</h1>
			<div class="right-col">
				<a href="#" title="Join Community" class="btn primary-fill-btn">Join Community</a>
				<a href="#" title="Message Community" class="btn primary-fill-btn">Message Community</a>
			</div>
		</div>
        <div class="custom-tabbing-wrapper">
            <div class="custom-tab-heading">
            <em class="next-link"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Right arrow"></em>
            <em class="prev-link disable"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Left arrow"></em>
                <ul>
                    <li class="active"><a href="#" title="About" data-id="about">About</a></li>
                    <li><a href="#" title="Projects" data-id="projects">Projects</a></li>
                    <li><a href="#" title="Announcements" data-id="announcements">Announcements</a></li>
                    <li><a href="#" title="FAQs" data-id="faqs">FAQs</a></li>
                </ul>
            </div>
            <div class="custom-tab-content-wrapper">
                <div class="custom-tab-content active" data-target="about">
                    <div class="master-layout-grid-wrapper grey-card uniheck-social-wrapper">
                        <div class="master-layout-left-column">
                            <div class="master-layout-gray-column">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="white-card border-card">
                                            <div class="card-header-grey">
                                                <span class="header-title">Mission Brief</span>
                                            </div>
                                            <div class="card-body">                                    
                                                <p>
                                                    This is some very interesting information about UniHack Social. 
                                                    This is some very interesting information about UniHack Social.
                                                    This is some very interesting information about UniHack Social.
                                                    This is some very interesting information about UniHack Social.
                                                    This is some very interesting information about UniHack Social. 
                                                    This is some very interesting information about UniHack Social.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row profile-slider">
                                    <div class="col-md-4">
                                        <div class="white-card has-dark-blue-border">
                                            <div class="card-header-grey">
                                                <span class="header-title">Participants</span>
                                            </div>
                                            <div class="card-body unihack-social-profiles">                                    
                                                <ul class="profile-listing">
                                                    <li>
                                                        <em class="user-profile">
                                                            <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
                                                        </em>
                                                        <div class="profile-content">
                                                            <span>Aaron Raminsky</span>
                                                            <p>Chief Administrative Officer</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <em class="user-profile">
                                                            <img src="<?php echo $rootUrl?>images/user-img.jpg" alt="user-img">
                                                        </em>
                                                        <div class="profile-content">
                                                            <span>David Cooper</span>
                                                            <p>QA Officer</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="white-card has-dark-blue-border">
                                            <div class="card-header-grey">
                                                <span class="header-title">Mentors</span>
                                            </div>
                                            <div class="card-body unihack-social-profiles">                                    
                                                <ul class="profile-listing">
                                                    <li>
                                                        <em class="user-profile">
                                                            <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
                                                        </em>
                                                        <div class="profile-content">
                                                            <span>Emily Greyson</span>
                                                            <p>Visiting Student</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <em class="user-profile">
                                                            <img src="<?php echo $rootUrl?>images/user-img.jpg" alt="user-img">
                                                        </em>
                                                        <div class="profile-content">
                                                            <span>Johnson Williams</span>
                                                            <p>Visiting Student</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="white-card has-dark-blue-border">
                                            <div class="card-header-grey">
                                                <span class="header-title">Judges</span>
                                            </div>
                                            <div class="card-body unihack-social-profiles">                                    
                                                <ul class="profile-listing">
                                                    <li>
                                                        <em class="user-profile">
                                                            <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
                                                        </em>
                                                        <div class="profile-content">
                                                            <span>Grace Smiths</span>
                                                            <p>Level 5 Mentor</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <em class="user-profile">
                                                            <img src="<?php echo $rootUrl?>images/user-img.jpg" alt="user-img">
                                                        </em>
                                                        <div class="profile-content">
                                                            <span>Matieu Hudson</span>
                                                            <p>Level 5 Mentor</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="master-layout-right-column">
                            <div class="white-card border-card">
                                <div class="card-header-grey">
                                    <span class="header-title">Information</span>
                                </div>
                                <div class="card-body">                                    
                                    <ul class="information-list">
                                        <li>
                                            <em>
                                                <img src="<?php echo $rootUrl ?>images/bulb-icon.svg" alt="user icon">
                                            </em>
                                            <span>Online</span>
                                        </li>
                                        <li>
                                            <em>
                                                <img src="<?php echo $rootUrl ?>images/bulb-icon.svg" alt="user icon">
                                            </em>
                                            <span>Competition</span>
                                        </li>
                                        <li>
                                            <em>
                                                <img src="<?php echo $rootUrl ?>images/bulb-icon.svg" alt="user icon">
                                            </em>
                                            <span>Online</span>
                                        </li>
                                        <li>
                                            <em>
                                                <img src="<?php echo $rootUrl ?>images/bulb-icon.svg" alt="user icon">
                                            </em>
                                            <span>Competition</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                                               
                    </div>
                </div>
                <div class="custom-tab-content" data-target="projects">
                    <div class="grey-card uniheck-social-wrapper network-project-slider">
                        <div class="row-wrapper">
                            <h2 class="row-header">Available (2)</h2>
                            <div class="row profile-slider has-0-left-margin">
                                <div class="profile-slide-item">
                                    <div class="white-card has-light-blue-border">
                                        <div class="card-header-grey">
                                            <div class="user-profile-wrapper">
                                                <div class="user-profile-inner">
                                                    <div class="user-wrapper">
                                                        <em class="user-img">
                                                            <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                        </em>
                                                        <span class="header-title">David Cooper</span>
                                                    </div>
                                                </div>
                                                <em class="users-icon multiple-icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                </em>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" title="body-title" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                            <ul class="duration-link-list">
                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                <li><a href="#" title="Apply" tabindex="0">Apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-slide-item">
                                    <div class="white-card has-light-blue-border">
                                        <div class="card-header-grey">
                                            <div class="user-profile-wrapper">
                                                <div class="user-profile-inner">
                                                    <div class="user-wrapper">
                                                        <em class="user-img">
                                                            <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                        </em>
                                                        <span class="header-title">David Cooper</span>
                                                    </div>
                                                </div>
                                                <em class="users-icon multiple-icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                </em>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" title="body-title" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                            <ul class="duration-link-list">
                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                <li><a href="#" title="Apply" tabindex="0">Apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-wrapper">
                            <h2 class="row-header">Ongoing (5)</h2>
                            <div class="row profile-slider has-0-left-margin"> 
                                <div class="profile-slide-item">
                                    <div class="white-card has-light-blue-border">
                                        <div class="card-header-grey">
                                            <div class="user-profile-wrapper">
                                                <div class="user-profile-inner">
                                                    <div class="user-wrapper">
                                                        <em class="user-img">
                                                            <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                        </em>
                                                        <span class="header-title">David Cooper</span>
                                                    </div>
                                                </div>
                                                <em class="users-icon multiple-icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                </em>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" title="body-title" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                            <ul class="duration-link-list">
                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                <li><a href="#" title="Apply" tabindex="0">Apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-slide-item">
                                    <div class="white-card has-light-blue-border">
                                        <div class="card-header-grey">
                                            <div class="user-profile-wrapper">
                                                <div class="user-profile-inner">
                                                    <div class="user-wrapper">
                                                        <em class="user-img">
                                                            <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                        </em>
                                                        <span class="header-title">David Cooper</span>
                                                    </div>
                                                </div>
                                                <em class="users-icon multiple-icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                </em>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" title="body-title" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                            <ul class="duration-link-list">
                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                <li><a href="#" title="Apply" tabindex="0">Apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-slide-item">
                                    <div class="white-card has-light-blue-border">
                                        <div class="card-header-grey">
                                            <div class="user-profile-wrapper">
                                                <div class="user-profile-inner">
                                                    <div class="user-wrapper">
                                                        <em class="user-img">
                                                            <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                        </em>
                                                        <span class="header-title">David Cooper</span>
                                                    </div>
                                                </div>
                                                <em class="users-icon multiple-icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                </em>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" title="body-title" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                            <ul class="duration-link-list">
                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                <li><a href="#" title="Apply" tabindex="0">Apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-slide-item">
                                    <div class="white-card has-light-blue-border">
                                        <div class="card-header-grey">
                                            <div class="user-profile-wrapper">
                                                <div class="user-profile-inner">
                                                    <div class="user-wrapper">
                                                        <em class="user-img">
                                                            <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                        </em>
                                                        <span class="header-title">David Cooper</span>
                                                    </div>
                                                </div>
                                                <em class="users-icon multiple-icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                </em>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" title="body-title" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                            <ul class="duration-link-list">
                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                <li><a href="#" title="Apply" tabindex="0">Apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-slide-item">
                                    <div class="white-card has-light-blue-border">
                                        <div class="card-header-grey">
                                            <div class="user-profile-wrapper">
                                                <div class="user-profile-inner">
                                                    <div class="user-wrapper">
                                                        <em class="user-img">
                                                            <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                        </em>
                                                        <span class="header-title">David Cooper</span>
                                                    </div>
                                                </div>
                                                <em class="users-icon multiple-icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                </em>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" title="body-title" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                            <ul class="duration-link-list">
                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                <li><a href="#" title="Apply" tabindex="0">Apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-wrapper">
                            <h2 class="row-header">Completed (1)</h2>
                            <div class="row profile-slider has-0-left-margin">
                                <div class="profile-slide-item">
                                    <div class="white-card has-light-blue-border">
                                        <div class="card-header-grey">
                                            <div class="user-profile-wrapper">
                                                <div class="user-profile-inner">
                                                    <div class="user-wrapper">
                                                        <em class="user-img">
                                                            <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                        </em>
                                                        <span class="header-title">David Cooper</span>
                                                    </div>
                                                </div>
                                                <em class="users-icon multiple-icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                    <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                </em>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" title="body-title" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                            <ul class="duration-link-list">
                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                <li><a href="#" title="Apply" tabindex="0">Apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-tab-content" data-target="announcements">
                    
                </div>
                <div class="custom-tab-content" data-target="faqs">
                    
                </div>
            </div>
        </div>

        
    </div>
</section>


<?php include 'footer.php'; ?>

