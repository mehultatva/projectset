<?php include 'header.php'; ?>

<section class="master-layout-wrapper">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Projects</a></li>
            <li class="breadcrumb-item"><a href="#">UniHack Social</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Sigma Gamma's ProjectStudio</a></li>
        </ol>
        <div class="title-wrapper has-right-col">
            <h1>Sigma Gamma's ProjectStudio</h1>
            <div class="right-col">
                <a href="#" title="Project Details" class="btn primary-fill-btn">Project Details</a>
            </div>
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
                            <div class="master-layout-gray-column grey-card p-b-less evaluation-wrapper">
                                <div class="evaluation-block-wrapper">
                                    <div class="title-wrapper">
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
                                    </div>
                                    <div class="average-ratings-wrapper">
                                        <div class="white-card border-card">
                                            <div class="card-header-black">
                                                <span class="header-title">
                                                    Average Ratings 
                                                    <span class="subtext">(The average rating for each criteria is calculated from the summative rating by each individual)</span> 
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <div class="avg-rating-list">
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Design & Usability</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper torquiouse-border">
                                                                    7
                                                                </span>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Originality & Impact</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper green-border">
                                                                    10
                                                                </span>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Video Editing</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper alert-orange-border">
                                                                    4
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Pitching</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper green-border">
                                                                    9
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="evaluation-slider-block">
                                        <div class="evaluation-card-slider">
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Matthew Adams (Product Manager. Twitter)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Sergey Bin (Co-founder, Google)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Matthew Adams (Product Manager. Twitter)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Sergey Bin (Co-founder, Google)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="evaluation-slider-block">
                                        <div class="evaluation-card-slider">
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Matthew Adams (Product Manager. Twitter)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Sergey Bin (Co-founder, Google)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Matthew Adams (Product Manager. Twitter)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Sergey Bin (Co-founder, Google)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="evaluation-block-wrapper">
                                    <div class="title-wrapper">
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
                                    </div>
                                    <div class="average-ratings-wrapper">
                                        <div class="white-card border-card">
                                            <div class="card-header-black">
                                                <span class="header-title">
                                                    Average Ratings 
                                                    <span class="subtext">(The average rating for each criteria is calculated from the summative rating by each individual)</span> 
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <div class="avg-rating-list has-description">
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Adaptability</span>
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
                                                                <span class="header-title text-center">Communication</span>
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
                                                                <span class="header-title text-center">Conflict Management</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper green-border">
                                                                    10
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Critical Thinking</span>
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
                                                                <span class="header-title text-center">Decision Making</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper alert-orange-border">
                                                                    4
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Initiative</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper green-border">
                                                                    9
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Innovation</span>
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
                                                                <span class="header-title text-center">Learning</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper torquiouse-border">
                                                                    8
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Problem Solving</span>
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
                                                                <span class="header-title text-center">Team Work</span>
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
                                                                <span class="header-title text-center">Time Management</span>
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
                                                                <span class="header-title text-center">Work Planning</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper green-border">
                                                                    10
                                                                </span>
                                                                <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="evaluation-slider-block">
                                        <div class="evaluation-card-slider">
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Matthew Adams (Product Manager. Twitter)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Sergey Bin (Co-founder, Google)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Matthew Adams (Product Manager. Twitter)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Evaluation: Sergey Bin (Co-founder, Google)</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="evaluation-slider-block">
                                        <div class="evaluation-card-slider">
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Public Feedback: Emily Cooper</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Public Feedback: Juan Valdez</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Public Feedback: Emily Cooper</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-card border-card slide-item">
                                                <div class="card-header-grey">
                                                    <span class="header-title">Public Feedback: Juan Valdez</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avg-rating-list">
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
                                                                    <span class="rating-number-wrapper green-border">
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
                                                                    <span class="header-title text-center">Video Editing</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper alert-orange-border">
                                                                        4
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-wrapper">
                                                            <div class="rating-card white-card">
                                                                <div class="card-header-grey">
                                                                    <span class="header-title text-center">Pitching</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <span class="rating-number-wrapper green-border">
                                                                        9
                                                                    </span>
                                                                    <p class="text-center">Overall design was great with user-friendly interface. Nothing innovative with the design, so was hoping for something a bit different and new.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="evaluation-slider-block">
                                        <div class="white-card border-card engagement-stats-block">
                                            <div class="card-header-grey">
                                                <span class="header-title">Engagement Statistics</span>
                                            </div>
                                            <div class="card-body">
                                                <div class="avg-rating-list statistic-card-slider engagement-stats-slider">
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Adaptability</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper torquiouse-border">
                                                                    7
                                                                </span>
                                                                <ul class="detail-stats">
                                                                    <li>
                                                                        <span>Calendar events created</span>
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
                                                                        <span>Messages sent</span>
                                                                        <span class="value">12</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Events attended</span>
                                                                        <span class="value">12</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Conversations initiated with mentor</span>
                                                                        <span class="value">12</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Conflict Management</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper green-border">
                                                                    10
                                                                </span>
                                                                <ul class="detail-stats">
                                                                    <li>
                                                                        <span>Tasks Completed</span>
                                                                        <span class="value">12</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-wrapper">
                                                        <div class="rating-card white-card">
                                                            <div class="card-header-grey">
                                                                <span class="header-title text-center">Critical Thinking</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <span class="rating-number-wrapper alert-red-border">
                                                                    2
                                                                </span>
                                                                <ul class="detail-stats">
                                                                    <li>
                                                                        <span>Tasks created</span>
                                                                        <span class="value">12</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Tasks assigned</span>
                                                                        <span class="value">12</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Calendar events created</span>
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
    </div>
</section>
<?php include 'footer.php'; ?>
