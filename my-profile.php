<?php include 'header.php'; ?>

<section class="master-layout-wrapper profile-layout-page">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">My Profile</a></li>
        </ol>
        <div class="title-wrapper profile-title-wrapper">
            <em class="profile-image">
                <img src="<?php echo $rootUrl ?>images/user-profile.svg" alt="Profile">
            </em>
            <h1>Elliot Shaw <span>[Ellio]</span></h1>
            <ul class="edit-share-listing">
                <li>
                    <a href="#" title="Edit">
                        <img src="<?php echo $rootUrl ?>images/edit-icon.svg" alt="Edit icon">
                    </a>
                </li>
                <li>
                    <a href="#" title="Share">
                        <img src="<?php echo $rootUrl ?>images/share-icon.svg" alt="Share icon">
                    </a>
                </li>
            </ul>
        </div>
        <div class="master-layout-grid-wrapper project-page-wrapper">
            <div class="master-layout-left-column full-width-col">
                <div class="custom-tabbing-wrapper">
                    <div class="custom-tab-heading">
                        <em class="next-link"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Right arrow"></em>
                        <em class="prev-link disable"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Left arrow"></em>
                        <ul>
                            <li class="active"><a href="#" title="Details" data-id="details">Details</a></li>
                            <li><a href="#" title="portfolio" data-id="portfolio">Portfolio</a></li>
                            <li><a href="#" title="Skills GPS" data-id="skills-gps">Skills GPS</a></li>
                        </ul>
                    </div>
                    <div class="custom-tab-content-wrapper">
                        <div class="custom-tab-content active" data-target="details">
                            <div class="profile-layout-grid-outer grey-card">
                                <div class="profile-layout-grid-wrapper">
                                    <div class="profile-layout-left-column">
                                        <div class="white-card border-card">
                                            <div class="card-header-grey">
                                                <div class="profile-info-wrapper">
                                                    <span class="header-title">Personal Information</span>
                                                    <ul class="add-edit-list">
                                                        <li>
                                                            <a href="#" title="Add">
                                                                <img src="<?php echo $rootUrl ?>images/plus-icon.svg" alt="Add icon">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Edit">
                                                                <img src="<?php echo $rootUrl ?>images/edit-icon.svg" alt="Edit icon">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">                                    
                                                <ul class="profile-listing">
                                                    <li>
                                                        <div class="personal-info-list">
                                                            <em class="user-profile">
                                                                <img src="<?php echo $rootUrl ?>images/user-profile.svg" alt="Profile">
                                                            </em>
                                                            <div class="profile-content">
                                                                <span>Pronouns</span>
                                                                <p>He/Him</p>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                                            <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                                        </span>
                                                    </li>
                                                    <li class="disable">
                                                        <div class="personal-info-list">
                                                            <em class="user-profile">
                                                                <img src="<?php echo $rootUrl ?>images/birthday-icon.svg" alt="birthday-icon">
                                                            </em>
                                                            <div class="profile-content">
                                                                <span>Date of Birth</span>
                                                                <p>26th July</p>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                                            <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                                        </span>
                                                    </li>
                                                    <li class="disable">
                                                        <div class="personal-info-list">
                                                            <em class="user-profile">
                                                                <img src="<?php echo $rootUrl ?>images/call-icon.svg" alt="call-icon">
                                                            </em>
                                                            <div class="profile-content">
                                                                <span>Contact Number</span>
                                                                <p>+44 77665432190</p>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                                            <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                                        </span>
                                                    </li>
                                                    <li class="disable">
                                                        <div class="personal-info-list">
                                                            <em class="user-profile">
                                                                <img src="<?php echo $rootUrl ?>images/email-icon.svg" alt="email-icon">
                                                            </em>
                                                            <div class="profile-content">
                                                                <span>Email</span>
                                                                <p>elliot.shaw@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                                            <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <div class="personal-info-list">
                                                            <em class="user-profile">
                                                                <img src="<?php echo $rootUrl ?>images/location-icon.svg" alt="location-icon">
                                                            </em>
                                                            <div class="profile-content">
                                                                <span>Location</span>
                                                                <p>Glasgow, Scotland</p>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                                            <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <div class="personal-info-list">
                                                            <em class="user-profile">
                                                                <img src="<?php echo $rootUrl ?>images/website-icon.svg" alt="website-icon">
                                                            </em>
                                                            <div class="profile-content">
                                                                <span>Website</span>
                                                                <p><a href="#" title="elliot-shaw">elliotshaw.com</a></p>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                                            <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <div class="personal-info-list">
                                                            <em class="user-profile">
                                                                <img src="<?php echo $rootUrl ?>images/linkedin-icon.svg" alt="linkedin-icon">
                                                            </em>
                                                            <div class="profile-content">
                                                                <span>LinkedIn</span>
                                                                <p><a href="#" title="LinkedIn">linkedin.com/elliot-shaw</a></p>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                                            <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <div class="personal-info-list">
                                                            <em class="user-profile">
                                                                <img src="<?php echo $rootUrl ?>images/instagram-icon.svg" alt="instagram">
                                                            </em>
                                                            <div class="profile-content">
                                                                <span>Instagram</span>
                                                                <p><a href="#" title="Instagram">Instagram.com/elliot4shaw</a></p>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            <img src="<?php echo $rootUrl ?>images/eye.svg" alt="eye" class="eye-icon">
                                                            <img src="<?php echo $rootUrl ?>images/eye-cross-line.svg" alt="eye" class="eye-cross-line">
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="white-card border-card">
                                            <div class="card-header-grey">
                                                <span class="header-title">My Roles</span>
                                            </div>
                                            <div class="card-body">                                    
                                                <ul class="switch-listing">
                                                   <li class="form-switch-wrapper">
                                                       <div class="form-check form-switch">
                                                            <label class="form-check-label" for="participant">
                                                                <input class="form-check-input" type="checkbox" id="participant" checked>
                                                                <span class="switch-wrapper"></span>
                                                                <p>Participant</p>
                                                            </label>
                                                        </div>
                                                   </li> 
                                                   <li class="form-switch-wrapper">
                                                       <div class="form-check form-switch">
                                                            <label class="form-check-label" for="mentor">
                                                                <input class="form-check-input" type="checkbox" id="mentor" checked>
                                                                <span class="switch-wrapper"></span>
                                                                <p>Mentor</p>
                                                            </label>
                                                        </div>
                                                   </li> 
                                                   <li class="form-switch-wrapper">
                                                       <div class="form-check form-switch">
                                                            <label class="form-check-label" for="judge">
                                                                <input class="form-check-input" type="checkbox" id="judge">
                                                                <span class="switch-wrapper"></span>
                                                                <p>Judge</p>
                                                            </label>
                                                        </div>
                                                   </li>         
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-layout-right-column">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="white-card border-card">
                                                    <div class="card-header-grey">
                                                            <div class="profile-info-wrapper">
                                                                <span class="header-title">Title</span>
                                                                <ul class="add-edit-list">
                                                                    <li>
                                                                        <a href="#" title="Edit">
                                                                            <img src="<?php echo $rootUrl ?>images/edit-icon.svg" alt="Edit icon">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>Creative Entrepreneur at ProjectSet, London</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="#" title="Upload CV" class="btn">Upload CV</a>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="#" title="Add Section" class="btn add-section-btn">Add Section</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="white-card border-card">
                                                    <div class="card-header-grey">
                                                        <div class="profile-info-wrapper">
                                                            <span class="header-title">About me</span>
                                                            <ul class="add-edit-list">
                                                                <li>
                                                                    <a href="#" title="Edit">
                                                                        <img src="<?php echo $rootUrl ?>images/edit-icon.svg" alt="Edit icon">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>I am a 24-year-old digital designer who is currently looking for a full-time position in the technological design field for the foreseeable future.
                                                            My area of practice include Interaction Design, Creative Coding, Website Design, Apps, Augmented and Virtual Reality, and Video Editing. 
                                                            I enjoy all areas of technological, really!
                                                        </p> 
                                                        <p>With these projects, I wish to gain professional experience within the field that I hope to work in and to keep developing my skillset! 
                                                            When I am not creating, I'm either gaming, waterboarding, or attending festivals.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 video-card">
                                                <div class="white-card border-card">
                                                    <div class="card-header-grey">
                                                        <div class="profile-info-wrapper">
                                                            <span class="header-title">Video CV</span>
                                                            <ul class="add-edit-list">
                                                                <li>
                                                                    <a href="#" title="Edit">
                                                                        <img src="<?php echo $rootUrl ?>images/edit-icon.svg" alt="Edit icon">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="video-wrapper">
                                                            <video width="100%" height="auto" controls>
                                                                <source src="<?php echo $rootUrl ?>images/video/profile-video-cv.mp4" type="video/mp4">
                                                            </video>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 skills-card">
                                                <div class="white-card border-card">
                                                    <div class="card-header-grey">
                                                        <div class="profile-info-wrapper">
                                                            <span class="header-title">Skills</span>
                                                            <ul class="add-edit-list">
                                                                <li>
                                                                    <a href="#" title="Add">
                                                                        <img src="<?php echo $rootUrl ?>images/plus-icon.svg" alt="Add icon">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" title="Edit">
                                                                        <img src="<?php echo $rootUrl ?>images/edit-icon.svg" alt="Edit icon">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul class="skill-badge-list">
                                                            <li>
                                                                <span class="primary-badge dark-blue">Teamwork</span>
                                                            </li>
                                                            <li>
                                                                <span class="primary-badge dark-blue">Communication</span>
                                                            </li>
                                                            <li>
                                                                <span class="primary-badge">C++</span>
                                                            </li>
                                                            <li>
                                                                <span class="primary-badge dark-blue">Innovation</span>
                                                            </li>
                                                            <li>
                                                                <span class="primary-badge dark-blue">Presentation Skills</span>
                                                            </li>
                                                            <li>
                                                                <span class="primary-badge">C#</span>
                                                            </li>
                                                            <li>
                                                                <span class="primary-badge">Prototyping</span>
                                                            </li>
                                                            <li>
                                                                <span class="primary-badge dark-blue">Creative Thinking</span>
                                                            </li>
                                                            <li>
                                                                <span class="primary-badge">After Effects</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="white-card border-card">
                                                    <div class="card-header-grey">
                                                        <div class="profile-info-wrapper">
                                                            <span class="header-title">Experience</span>
                                                            <ul class="add-edit-list">
                                                                <li>
                                                                    <a href="#" title="Add">
                                                                        <img src="<?php echo $rootUrl ?>images/plus-icon.svg" alt="Add icon">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" title="Edit">
                                                                        <img src="<?php echo $rootUrl ?>images/edit-icon.svg" alt="Edit icon">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul class="profile-listing">
                                                            <li>
                                                                <div class="personal-info-list">
                                                                    <em class="user-profile">
                                                                        <img src="<?php echo $rootUrl ?>images/user-profile.svg" alt="Profile">
                                                                    </em>
                                                                    <div class="profile-content">
                                                                        <span>Product Manager</span>
                                                                        <p>ProjectSet</p>
                                                                    </div>
                                                                </div>
                                                                <div class="online-status-wrapper">
                                                                    <span>Jun 2021 - Nov 2021</span>
                                                                    <p>Online</p>
                                                                </div>
                                                                <div class="profile-detail-text">
                                                                    <p>I am a 24-year-old digital designer who is currently looking for a full-time position in the technological design field for the foreseeable future. My area of practice include Interaction Design, Creative Coding, Website Design, Apps, Augmented and Virtual Reality, and Video Editing. I enjoy all areas of technological, really!</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="personal-info-list">
                                                                    <em class="user-profile">
                                                                        <img src="<?php echo $rootUrl ?>images/user-profile.svg" alt="Profile">
                                                                    </em>
                                                                    <div class="profile-content">
                                                                        <span>Engagement Executive</span>
                                                                        <p>ProjectSet</p>
                                                                    </div>
                                                                </div>
                                                                <div class="online-status-wrapper">
                                                                    <span>Jan 2021 - Jun 2021</span>
                                                                    <p>Online</p>
                                                                </div>
                                                                <div class="profile-detail-text">
                                                                    <p>I am a 24-year-old digital designer who is currently looking for a full-time position in the technological design field for the foreseeable future. My area of practice include Interaction Design, Creative Coding, Website Design, Apps, Augmented and Virtual Reality, and Video Editing. I enjoy all areas of technological, really!</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-tab-content" data-target="portfolio">
                            <div class="master-layout-grid-wrapper grey-card profile-portfolio-tab">
                                <div class="master-layout-left-column full-width-col">
                                    <div class="row profile-add-item-wrapper">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="custom-dropdown form-group">
                                                <h5 class="dropdown-toggle" data-bs-toggle="dropdown">
                                                Filter: <span class="dropdown-title"> Presentation Skills</span>
                                                </h5>
                                                <ul class="dropdown-menu">
                                                    <li class="active"><a class="dropdown-item" href="#">Fintech 1</a></li>
                                                    <li><a class="dropdown-item" href="#">Fintech 2</a></li>
                                                    <li><a class="dropdown-item" href="#">Fintech 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=" col-lg-8 col-sm-6 add-item-btn">
                                            <a href="#" title="add-item" class="btn primary-fill-btn">
                                                <em><img src="<?php echo $rootUrl ?>images/plus-white.svg" alt="add-icon"></em>
                                                Add Item
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row profile-portfolio-grid">
                                                <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                            <a href="#" class="h2 card-blue-title"  data-bs-toggle="modal" data-bs-target="#profile-modal">ProjectSet: UniHack 2020 - 'Watercooler' (Overall WInners)</a>
                                                            <div class="card-content-wrapper">
                                                                <p>Phase - 1</p>
                                                                <ul class="badge-list">
                                                                    <li><span class="primary-badge">Presentation</span></li>
                                                                    <li><span class="primary-badge black">Prototyping</span></li>
                                                                    <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                </ul>
                                                            </div>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">Jan 2022 - Mar 2022</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                                <a href="#" class="h2 card-blue-title">ProjectSet: UniHack 2020 - 'Watercooler' (Overall WInners)</a>
                                                                <div class="card-content-wrapper">
                                                                <p>Phase - 1</p>
                                                                <ul class="badge-list">
                                                                    <li><span class="primary-badge">Presentation</span></li>
                                                                    <li><span class="primary-badge black">Prototyping</span></li>
                                                                    <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                </ul>
                                                                </div>
                                                                <ul class="duration-link-list">
                                                                    <li class="duration">Jan 2022 - Mar 2022</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                                <a href="#" class="h2 card-blue-title"  data-bs-toggle="modal" data-bs-target="#profile-modal">ProjectSet: UniHack 2020 - 'Watercooler' (Overall WInners)</a>
                                                                <div class="card-content-wrapper">
                                                                <p>Phase - 1</p>
                                                                <ul class="badge-list">
                                                                    <li><span class="primary-badge">Presentation</span></li>
                                                                    <li><span class="primary-badge black">Prototyping</span></li>
                                                                    <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                </ul>
                                                                </div>
                                                                <ul class="duration-link-list">
                                                                    <li class="duration">Jan 2022 - Mar 2022</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                            <a href="#" class="h2 card-blue-title">ProjectSet: UniHack 2020</a>
                                                            <div class="card-content-wrapper">
                                                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the.....</p>
                                                                <ul class="badge-list">
                                                                    <li><span class="primary-badge">Presentation</span></li>
                                                                    <li><span class="primary-badge black">Prototyping</span></li>
                                                                    <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                </ul>
                                                            </div>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">Jan 2022 - Mar 2022</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                                <a href="#" class="h2 card-blue-title">ProjectSet: UniHack 2020</a>
                                                                <div class="card-content-wrapper">
                                                                <p>Phase - 1</p>
                                                                <ul class="badge-list">
                                                                    <li><span class="primary-badge">Presentation</span></li>
                                                                    <li><span class="primary-badge black">Prototyping</span></li>
                                                                    <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                </ul>
                                                                </div>
                                                                <ul class="duration-link-list">
                                                                    <li class="duration">Jan 2022 - Mar 2022</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                                <a href="#" class="h2 card-blue-title">ProjectSet: UniHack 2020 - 'Watercooler' (Overall WInners)</a>
                                                                <div class="card-content-wrapper">
                                                                    <p>Phase - 1</p>
                                                                    <ul class="badge-list">
                                                                        <li><span class="primary-badge">Presentation</span></li>
                                                                        <li><span class="primary-badge black">Prototyping</span></li>
                                                                        <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                    </ul>
                                                                </div>
                                                                    <ul class="duration-link-list">
                                                                        <li class="duration">Jan 2022 - Mar 2022</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                                <a href="#" class="h2 card-blue-title">ProjectSet: UniHack 2020 - 'Watercooler' (Overall WInners)</a>
                                                                <div class="card-content-wrapper">
                                                                    <p>Phase - 1</p>
                                                                    <ul class="badge-list">
                                                                        <li><span class="primary-badge">Presentation</span></li>
                                                                        <li><span class="primary-badge black">Prototyping</span></li>
                                                                        <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                    </ul>
                                                                </div>
                                                                <ul class="duration-link-list">
                                                                    <li class="duration">Jan 2022 - Mar 2022</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                                    <a href="#" class="h2 card-blue-title">ProjectSet: UniHack 2020 - 'Watercooler' (Overall WInners)</a>
                                                                    <div class="card-content-wrapper">
                                                                    <p>How to remove "white" space from a string in PHP · Answer: Use the PHP's trim() functio.....</p>
                                                                    <ul class="badge-list">
                                                                        <li><span class="primary-badge">Presentation</span></li>
                                                                        <li><span class="primary-badge black">Prototyping</span></li>
                                                                        <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                    </ul>
                                                                </div>
                                                                    <ul class="duration-link-list">
                                                                        <li class="duration">Jan 2022 - Mar 2022</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-4 has-margin-bottom">
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
                                                                    <a href="#" class="h2 card-blue-title">ProjectSet: UniHack 2020 - 'Watercooler' (Overall WInners)</a>
                                                                    <div class="card-content-wrapper">
                                                                    <p>Phase - 1</p>
                                                                    <ul class="badge-list">
                                                                        <li><span class="primary-badge">Presentation</span></li>
                                                                        <li><span class="primary-badge black">Prototyping</span></li>
                                                                        <li><span class="primary-badge black">HTML/CSS</span></li>
                                                                    </ul>
                                                                </div>
                                                                <ul class="duration-link-list">
                                                                    <li class="duration">Jan 2022 - Mar 2022</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                    </div>
                                </div>                                             
                            </div>
                        </div>
                        <div class="custom-tab-content" data-target="skills-gps">
                            3
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</section>
<div class="modal fade profile-modal" id="profile-modal" tabindex="-1" aria-labelledby="profile-label"
    aria-hidden="true">
    <div class="modal-dialog extra-large-modal">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">ProjectSet: UniHack 2020 - 'Watercooler' (Overall WInners)</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="profile-modal-grid row">
                    <div class="left-sidebar sidebar">
                        <div class="sidebar-title h3">Nov 2020 - Dec 2020</div>
                        <ul class="badge-list">
                            <li><span class="primary-badge">Presentation</span></li>
                            <li><span class="primary-badge black">Prototyping</span></li>
                            <li><span class="primary-badge black">HTML/CSS</span></li>
                        </ul>
                        <div class="white-card-wrapper">
                            <div class="white-card border-card">
                                <div class="card-header-grey">
                                    <span class="header-title">Organiser</span>
                                </div>
                                <div class="card-body unihack-social-profiles">
                                    <ul class="profile-listing">
                                        <li>
                                            <em class="user-profile">
                                                <img src="<?php echo $rootUrl ?>images/user-blue.svg" alt="user-profile">
                                            </em>
                                            <div class="profile-content" style="height: 40px;">
                                                <span>Aaron Raminsky</span>
                                                <p>Chief Administrative Officer</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="white-card border-card">
                                <div class="card-header-grey">
                                    <span class="header-title">Collaborated with</span>
                                </div>
                                <div class="card-body unihack-social-profiles">
                                    <ul class="profile-listing">
                                        <li>
                                            <em class="user-profile">
                                                <img src="<?php echo $rootUrl ?>images/user-blue.svg" alt="user-profile">
                                            </em>
                                            <div class="profile-content" style="height: 40px;">
                                                <span>Aaron Raminsky</span>
                                                <p>Chief Administrative Officer</p>
                                            </div>
                                        </li>
                                        <li>
                                            <em class="user-profile">
                                                <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user-img">
                                            </em>
                                            <div class="profile-content">
                                                <span>David Cooper</span>
                                                <p>QA Officer</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="white-card border-card">
                                <div class="card-header-grey">
                                    <span class="header-title">Mentor</span>
                                </div>
                                <div class="card-body unihack-social-profiles">
                                    <ul class="profile-listing">
                                        <li>
                                            <em class="user-profile">
                                                <img src="<?php echo $rootUrl ?>images/user-blue.svg" alt="user-profile">
                                            </em>
                                            <div class="profile-content" style="height: 40px;">
                                                <span>Aaron Raminsky</span>
                                                <p>Chief Administrative Officer</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-col">
                        <div class="white-card border-card content-card">
                            <div class="card-body">
                                <div class="card-inner custom-scrollbar">
                                    <p>Our team 'Tech Tacos' developed a digitally innovative solution to 'social
                                        isolation
                                        whilst working remotely'.</p>
                                    <p>As 1 of 12 teams selected within the UK to proceed to
                                        'Phase 2'. we developed a pitch and prototype that we presented to a judging
                                        panel
                                        including guests from BT. Nestle. Bupa and Schneider. We worked on a range of
                                        topical socio-economic issues, developed extensive communication and
                                        problem-solving
                                        skills, and strengthened our presentation skills.</p>
                                    <p>
                                        My role as a UX/UI designer
                                        allowed me to design a prototype (within PowerPoint!] for our web application
                                        that
                                        simulated aesthetic decisions and user interaction. Usability was at the focus
                                        of
                                        the prototype as I implemented a walkthrough that users can follow to ensure
                                        that
                                        digital illiteracy doesn't create a barrier to the product.</p>
                                    <p>'Tech Tacos' won
                                        'Overall Winner' for the whole hackathon. We plan to take this project forward
                                        by
                                        applying for funding and ultimately releasing it on the market.</p>
                                    <p>'Tech Tacos' won
                                        'Overall Winner' for the whole hackathon. We plan to take this project forward
                                        by
                                        applying for funding and ultimately releasing it on the market.</p>
                                </div>
                            </div>
                        </div>
                        <div class="white-card border-card quote-card">
                            <div class="card-body">
                                <blockquote>
                                    <p>Working on this project was a great learning experience for me. I have more
                                        confidence to take on even bigger undertakings.</p>
                                    <span>James Julian</span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="right-sidebar sidebar">
                        <div class="white-card border-card">
                            <div class="card-header-grey">
                                <span class="header-title">Collaborated with</span>
                            </div>
                            <div class="card-body vertical-slider-wrapper">
                                <div class="collabration-slider vertical-image-slider">
                                    <div class="vertical-slide-item">
                                        <div class="slide-inner">
                                            <img src="<?php echo $rootUrl ?>images/attachment.jpg" alt="attachment">
                                        </div>
                                    </div>
                                    <div class="vertical-slide-item">
                                        <div class="slide-inner">
                                            <img src="<?php echo $rootUrl ?>images/attachment.jpg" alt="attachment">
                                        </div>
                                    </div>
                                    <div class="vertical-slide-item">
                                        <div class="slide-inner">
                                            <img src="<?php echo $rootUrl ?>images/attachment.jpg" alt="attachment">
                                        </div>
                                    </div>
                                    <div class="vertical-slide-item">
                                        <div class="slide-inner">
                                            <img src="<?php echo $rootUrl ?>images/attachment.jpg" alt="attachment">
                                        </div>
                                    </div>
                                    <div class="vertical-slide-item">
                                        <div class="slide-inner">
                                            <img src="<?php echo $rootUrl ?>images/attachment.jpg" alt="attachment">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <a href="#" title="Share" class="btn primary-fill-btn"> <em><img
                                        src="<?php echo $rootUrl ?>images/share-icon-white.svg" alt="share icon">
                                </em>Share</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>