<?php include 'header.php'; ?>

<section class="master-layout-wrapper">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Projects</a></li>
            <li class="breadcrumb-item"><a href="#">UniHack Social</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Sigma Gamma's ProjectStudio</a></li>
        </ol>
        <div class="title-wrapper">
            <h1>Sigma Gamma's ProjectStudio</h1>
        </div>
        <div class="master-layout-grid-wrapper project-page-wrapper">
            <div class="master-layout-left-column full-width-col">
                <div class="custom-tabbing-wrapper">
                    <div class="custom-tab-heading">
                        <em class="next-link"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Right arrow"></em>
                        <em class="prev-link disable"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Left arrow"></em>
                        <ul>
                            <li><a href="#" title="Team Space" data-id="team-space">Team Space</a></li>
                            <li><a href="#" title="Submissions" data-id="submissions">Submissions</a></li>
                            <li class="active"><a href="#" title="Evaluation" data-id="evaluation">Evaluation</a></li>
                        </ul>
                    </div>
                    <div class="custom-tab-content-wrapper">
                        <div class="custom-tab-content" data-target="team-space">
                            2
                        </div>
                        <div class="custom-tab-content" data-target="submissions">
                            3
                        </div>
                        <div class="custom-tab-content active" data-target="evaluation">
                            <div class="master-layout-gray-column grey-card p-b-less">
                                <div class="evaluation-block-wrapper" scroll-block="deliverable-evaluation-block">
                                    <div class="title-link-wrapper">
                                        <div class="tooltip-wrapper">
                                            <h2>Deliverable Evaluation</h2>
                                            <a class="custom-tooltip" href="#" data-toggle="tooltip" data-bs-placement="right" data-bs-html="true" 
                                            title='
                                            <div class="custom-tooltip-wrapper" tooltip-content="custom-tooltip" >
                                                <div class="white-card">
                                                    <ul class="rating-number-list">
                                                        <li>
                                                            <span class="rating-number-wrapper torquiouse-border">6-8</span>
                                                            <span class="rating-category">Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class="rating-number-wrapper alert-green-border">6-8</span>
                                                            <span class="rating-category">Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class="rating-number-wrapper alert-orange-border">6-8</span>
                                                            <span class="rating-category">Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class="rating-number-wrapper alert-red-border">6-8</span>
                                                            <span class="rating-category">Beginner</span>                
                                                        </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            '>
                                                <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                            </a>
                                        </div>
                                        <a href="#" class="scroll-link" scroll-id="collaboration-evaluation-block" title="Jump to Collaboration Evaluation">Jump to Collaboration Evaluation</a>
                                    </div>
                                    <div class="white-card border-card">
                                        <div class="card-header-grey">
                                            <span class="header-title">Average Ratings 
                                                <span class="subtext">(The average rating for each criteria is calculated from the summative rating by each individual)</span>
                                            </span>
                                        </div>
                                        <div class="card-body p-b-0">
                                            <div class="slider-outer-wrapper">
                                                <div class="card-list-slider rating-card-slider">
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Design & Usability</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper torquiouse-border">
                                                                    7
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Technical Optimisation</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper alert-orange-border">
                                                                    1-2
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Originality & Impact</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper torquiouse-border">
                                                                    10
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Accessibility</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper alert-red-border">
                                                                    2
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-link-wrapper has-filter-dropdown">
                                                <h3 class="h2">Recommended Projects</h3>
                                                <div class="dropdown-wrapper">
                                                    <div class="custom-dropdown multiselect-dropdown">                                                       
                                                        <!-- Multiselect dropdown -->
                                                        <select multiple class="selectpicker w-100">
                                                            <option value="Design & Usability">Design & Usability</option>
                                                            <option value="Technical Optimisation">Technical Optimisation</option>
                                                            <option value="Originality & Impact">Originality & Impact</option>
                                                            <option value="Accessibility">Accessibility</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-list-slider recommended-card-slider">
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Design & Usability</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Design & Usability</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Design & Usability</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Design & Usability</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Design & Usability</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="white-card border-card">
                                        <div class="card-header-grey">
                                            <span class="header-title">Evaluation: Matthew Adams (Product Manager, Twitter)</span>
                                        </div>
                                        <div class="card-body p-b-0">
                                            <div class="card-list-slider rating-card-slider">
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                7
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Technical Optimisation</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-orange-border">
                                                                1-2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Originality & Impact</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                10
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Accessibility</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="white-card border-card">
                                        <div class="card-header-grey">
                                            <span class="header-title">Public Feedback: Emily Cooper</span>
                                        </div>
                                        <div class="card-body p-b-0">
                                            <div class="card-list-slider rating-card-slider">
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                7
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Technical Optimisation</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-orange-border">
                                                                1-2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Originality & Impact</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                10
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Accessibility</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="evaluation-block-wrapper" scroll-block="collaboration-evaluation-block">
                                    <div class="title-link-wrapper">
                                        <div class="tooltip-wrapper">
                                            <h2>Collaboration Evaluation</h2>
                                            <a class="custom-tooltip" href="#" data-toggle="tooltip" data-bs-placement="right" data-bs-html="true" 
                                            title='
                                            <div class="custom-tooltip-wrapper" tooltip-content="custom-tooltip" >
                                                <div class="white-card">
                                                    <ul class="rating-number-list">
                                                        <li>
                                                            <span class="rating-number-wrapper torquiouse-border">6-8</span>
                                                            <span class="rating-category">Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class="rating-number-wrapper alert-green-border">6-8</span>
                                                            <span class="rating-category">Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class="rating-number-wrapper alert-orange-border">6-8</span>
                                                            <span class="rating-category">Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class="rating-number-wrapper alert-red-border">6-8</span>
                                                            <span class="rating-category">Beginner</span>                
                                                        </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            '>
                                                <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                            </a>
                                        </div>
                                        <a href="#" class="scroll-link" scroll-id="deliverable-evaluation-block" title="Jump to Deliverable Evaluation">Jump to Deliverable Evaluation</a>
                                    </div>
                                    <div class="white-card border-card">
                                        <div class="card-header-grey">
                                            <span class="header-title">Average Ratings 
                                                <span class="subtext">(The average rating for each criteria is calculated from the summative rating by each individual)</span>
                                            </span>
                                        </div>
                                        <div class="card-body p-b-0">
                                            <div class="card-list-slider rating-card-slider">
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                7
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Technical Optimisation</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-orange-border">
                                                                1-2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Originality & Impact</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                10
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Accessibility</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-link-wrapper has-filter-dropdown">
                                                <h3 class="h2">Recommended Projects</h3>
                                                <div class="dropdown-wrapper">
                                                    <div class="custom-dropdown multiselect-dropdown">
                                                         <!-- Multiselect dropdown -->
                                                         <select multiple class="selectpicker w-100">
                                                            <option value="Design & Usability">Design & Usability</option>
                                                            <option value="Technical Optimisation">Technical Optimisation</option>
                                                            <option value="Originality & Impact">Originality & Impact</option>
                                                            <option value="Accessibility">Accessibility</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-list-slider recommended-card-slider">
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Design & Usability</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge black">Technical Optimisation</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Originality & Impact</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Design & Usability</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
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
                                                            <a href="#" title="body-title" class="h2 card-blue-title">Considerations for building Accessible Products</a>
                                                            <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                            <ul class="badge-list">
                                                                <li><span class="primary-badge">Design & Usability</span></li>
                                                            </ul>
                                                            <ul class="duration-link-list">
                                                                <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                                <li><a href="#" title="Join">Join</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="white-card border-card">
                                        <div class="card-header-grey">
                                            <span class="header-title">Evaluation: Matthew Adams (Product Manager, Twitter)</span>
                                        </div>
                                        <div class="card-body p-b-0">
                                            <div class="card-list-slider rating-card-slider">
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                7
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Technical Optimisation</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-orange-border">
                                                                5
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Originality & Impact</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                10
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Accessibility</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                1-2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="white-card border-card">
                                        <div class="card-header-grey">
                                            <span class="header-title">Public Feedback: Emily Cooper</span>
                                        </div>
                                        <div class="card-body p-b-0">
                                            <div class="card-list-slider rating-card-slider">
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                7
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Technical Optimisation</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-orange-border">
                                                                5
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Originality & Impact</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                10
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Accessibility</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                1-2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Design & Usability</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-red-border">
                                                                2
                                                            </span>
                                                            <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="white-card border-card">
                                        <div class="card-header-grey">
                                            <span class="header-title">Engagement Statistics</span>
                                        </div>
                                        <div class="card-body p-b-0">
                                            <div class="card-list-slider statistic-card-slider rating-card-slider">
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Leadership</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                7
                                                            </span>
                                                            <ul class="detail-stats">
                                                                <li>
                                                                    <span>Number of calendar event created:</span>
                                                                    <span class="value">12</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Communication</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-orange-border">
                                                                5
                                                            </span>
                                                            <ul class="detail-stats">
                                                                <li>
                                                                    <span>Number of messages sent:</span>
                                                                    <span class="value">120</span>
                                                                </li>
                                                                <li>
                                                                    <span>Number of events attended:</span>
                                                                    <span class="value">1</span>
                                                                </li>
                                                                <li>
                                                                    <span>Conversations initiated with mentor:</span>
                                                                    <span class="value">7</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Leadership</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-green-border">
                                                                10
                                                            </span>
                                                            <ul class="detail-stats">
                                                                <li>
                                                                    <span>Number of completed tasks:</span>
                                                                    <span class="value">15</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Leadership</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-green-border">
                                                                10
                                                            </span>
                                                            <ul class="detail-stats">
                                                                <li>
                                                                    <span>Number of tasks created:</span>
                                                                    <span class="value">47</span>
                                                                </li>
                                                                <li>
                                                                    <span>Number of tasks assigned:</span>
                                                                    <span class="value">53</span>
                                                                </li>
                                                                <li>
                                                                    <span>Number of calendar event created:</span>
                                                                    <span class="value">12</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Leadership</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper torquiouse-border">
                                                                7
                                                            </span>
                                                            <ul class="detail-stats">
                                                                <li>
                                                                    <span>Number of calendar event created:</span>
                                                                    <span class="value">12</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Communication</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-orange-border">
                                                                5
                                                            </span>
                                                            <ul class="detail-stats">
                                                                <li>
                                                                    <span>Number of messages sent:</span>
                                                                    <span class="value">120</span>
                                                                </li>
                                                                <li>
                                                                    <span>Number of events attended:</span>
                                                                    <span class="value">1</span>
                                                                </li>
                                                                <li>
                                                                    <span>Conversations initiated with mentor:</span>
                                                                    <span class="value">7</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper">
                                                    <div class="rating-card white-card">
                                                        <div class="card-header-grey">
                                                            <span class="header-title text-center">Leadership</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="rating-number-wrapper alert-green-border">
                                                                10
                                                            </span>
                                                            <ul class="detail-stats">
                                                                <li>
                                                                    <span>Number of completed tasks:</span>
                                                                    <span class="value">15</span>
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
                        </div>
                        
                    </div>
                </div>            
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
