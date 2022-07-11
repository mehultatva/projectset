<?php include 'header.php'; ?>

<section class="master-layout-wrapper project-organizers-page">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Opportunities</a></li>
            <li class="breadcrumb-item active" aria-current="page">UniHack Social</li>
        </ol>
        <div class="title-wrapper has-back-arrow has-right-col">
            <h1>UniHack Social</h1>
            <div class="right-col">
                <a href="#" title="Post Project" class="btn primary-fill-btn">Post Project</a>
            </div>
        </div>

        <div class="custom-tabbing-wrapper">
            <div class="custom-tab-heading">
                <em class="next-link"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Right arrow"></em>
                <em class="prev-link disable"><img src="<?php echo $rootUrl ?>images/right-arrow.svg"
                        alt="Left arrow"></em>
                <ul>
                    <li><a href="#" title="Details" data-id="details">Details</a></li>
                    <li><a href="#" title="Schedule" data-id="schedule">Schedule</a></li>
                    <li><a href="#" title="Prizes" data-id="prizes">Prizes</a></li>
                    <li><a href="#" title="Announcements" data-id="announcements">Announcements</a></li>
                    <li><a href="#" title="Help" data-id="help">Help</a></li>
                    <li><a href="#" title="Deliverables" data-id="deliverables">Deliverables</a></li>
                    <li class="active"><a href="#" title="Learners" data-id="learners">Learners</a></li>
                    <li><a href="#" title="Mentors" data-id="mentors">Mentors</a></li>
                    <li><a href="#" title="Judges" data-id="judges">Judges</a></li>
                    <li><a href="#" title="Other" data-id="other">Other</a></li>
                </ul>
            </div>
            <div class="custom-tab-content-wrapper">
                 <div class="custom-tab-content" data-target="details">
                    Details
                </div>
                <div class="custom-tab-content" data-target="schedule">
                    Schedule
                </div>
                <div class="custom-tab-content" data-target="prizes">
                    Prizes
                </div>
                <div class="custom-tab-content" data-target="announcements">
                    Announcements
                </div>
                <div class="custom-tab-content" data-target="help">
                    Help
                </div>
                <div class="custom-tab-content" data-target="deliverables">
                    Deliverables
                </div>
                <div class="custom-tab-content active" data-target="learners">
                    <div class="grey-card myproject-learners-detail teams-info-wrapper">
                        <div class="organizers-team-wrapper">
                            <div class="title-wrapper">
                                <h3>Teams (3)</h3>
                                <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                    <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                        <em>
                                            <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                            </svg>
                                        </em>
                                    </a>
                                    <div class="custom-tooltip-wrapper">
                                        <div class="custom-tooltip-inner">
                                            <ul class="actions-listing">
                                                <li>
                                                    <em><img src="<?php echo $rootUrl ?>images/plus-icon-blue.svg" alt="plus-icon-blue"></em> 
                                                    <a href="#" title="Create One Team">Create One Team</a>
                                                </li>
                                                <li>
                                                    <em><img src="<?php echo $rootUrl ?>images/plus-icon-blue.svg" alt="plus-icon-blue"></em>
                                                    <a href="#" title="Create Multiple Team">Create Multiple Team</a>
                                                </li>
                                                <li>
                                                    <em><img src="<?php echo $rootUrl ?>images/edit-icon-blue.svg" alt="edit-icon-blue"></em>
                                                    <a href="#" title="Edit Registration Details">Edit Registration Details</a>
                                                </li>
                                                <li>
                                                    <em><img src="<?php echo $rootUrl ?>images/chart-icon.svg" alt="chart-icon"></em>
                                                    <a href="#" title="View Overall Stats">View Overall Stats</a>
                                                </li>
                                                <li>
                                                    <em><img src="<?php echo $rootUrl ?>images/two-persons.svg" alt="two-persons"></em>
                                                    <a href="#" title="Public Voting Results">Public Voting Results</a>
                                                </li>
                                                <li>
                                                    <em><img src="<?php echo $rootUrl ?>images/certificate-icon.svg" alt="certificate-icon"></em>
                                                    <a href="#" title="Generate Certificates">Generate Certificates</a>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-outer-wrapper">
                                <ul>
                                    <li>
                                        <a href="#" class="btn" title="Assign Learners">Assign Learners (23)</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" title="Applications" data-bs-toggle="modal" data-bs-target="#learners-applicants-modal">Applications (2)</a>
                                    </li>
                                </ul>
                                <div class="filter-inner-wrapper">
                                    <div class="custom-dropdown form-group">
                                        <h5 class="dropdown-toggle" data-bs-toggle="dropdown">
                                        Filter: <span class="dropdown-title">Most Recently Registered</span>
                                        </h5>
                                        <ul class="dropdown-menu">
                                            <li class="active"><a class="dropdown-item" href="#">Fintech 1</a></li>
                                            <li><a class="dropdown-item" href="#">Fintech 2</a></li>
                                            <li><a class="dropdown-item" href="#">Fintech 3</a></li>
                                        </ul>
                                    </div>
                                    <div class="form-group has-search-btn">
                                        <label></label>
                                        <input class="form-control" placeholder="Search">
                                        <button type="submit" href="#" class="search-btn"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-wrapper">
                                <table id="team-listing-table" class="team-listing-table responsive dt-responsive">
                                    <thead>
                                        <tr>
                                            <th data-priority="-2">Name</th>
                                            <th data-priority="0">Teammates</th>
                                            <th class="table-actions" data-priority="-1">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="image-text-wrapper">
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/member-icon-placeholder.png" alt="member-icon-placeholder">
                                                    </em>
                                                    <a href="myproject-learners-detail.php"><span class="title-text">GoGoGirl</span></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="image-text-wrapper has-team-profiles">
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon-2.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon-3.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon-2.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon-3.png" alt="profile-icon">
                                                    </em>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="action-listing">
                                                <li>
                                                    <a href="#">
                                                        <em class="badge-wrapper">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.158" height="16" viewBox="0 0 15.158 16">
                                                                <path id="user-icon" d="M6.789,5.789A3.789,3.789,0,1,0,10.579,2,3.794,3.794,0,0,0,6.789,5.789ZM17.316,18h.842v-.842a5.9,5.9,0,0,0-5.895-5.895H8.895A5.9,5.9,0,0,0,3,17.158V18Z" transform="translate(-3 -2)" fill="#747272"/>
                                                            </svg>
                                                            <span class="badge black-badge">5</span>
                                                        </em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <em class="badge-wrapper">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.99967 1.66602C4.08301 1.66602 3.34134 2.41602 3.34134 3.33268L3.33301 16.666C3.33301 17.5827 4.07467 18.3327 4.99134 18.3327H14.9997C15.9163 18.3327 16.6663 17.5827 16.6663 16.666V7.35768C16.6663 6.91602 16.4913 6.49102 16.1747 6.18268L12.1497 2.15768C11.8413 1.84102 11.4163 1.66602 10.9747 1.66602H4.99967ZM10.833 6.66602V2.91602L15.4163 7.49935H11.6663C11.208 7.49935 10.833 7.12435 10.833 6.66602Z" fill="#747272"/>
                                                        </svg>
                                                        <span class="badge"><img src="<?php echo $rootUrl ?>images/green-tick.svg" alt="check icon"></span>
                                                        </em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <em class="badge-wrapper">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.99994 14.3911L13.4583 16.4828C14.0916 16.8661 14.8666 16.2995 14.6999 15.5828L13.7833 11.6495L16.8416 8.99948C17.3999 8.51615 17.0999 7.59948 16.3666 7.54115L12.3416 7.19948L10.7666 3.48281C10.4833 2.80781 9.5166 2.80781 9.23327 3.48281L7.65827 7.19115L3.63327 7.53281C2.89994 7.59115 2.59994 8.50781 3.15827 8.99115L6.2166 11.6411L5.29994 15.5745C5.13327 16.2911 5.90827 16.8578 6.5416 16.4745L9.99994 14.3911Z" fill="#747272"/>
                                                            </svg>
                                                            <span class="badge black-badge">50</span>
                                                        </em>
                                                    </a> 
                                                </li>
                                                    <li>
                                                        <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                                            <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                                <em>
                                                                    <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                    </svg>
                                                                </em>
                                                            </a>
                                                            <div class="custom-tooltip-wrapper">
                                                                <div class="custom-tooltip-inner">
                                                                    <ul class="actions-listing">
                                                                        <li>
                                                                            <a href="#" title="Message Team">Message Team</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="View Team Stats">View Team Stats</a>
                                                                        </li>                                                    
                                                                        <li>
                                                                            <a href="#" title="Move to Different Project">Move to Different Project</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Delete Team">Delete Team</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="image-text-wrapper">
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/member-icon-placeholder.png" alt="member-icon-placeholder">
                                                    </em>
                                                    <a href="#"><span class="title-text">Sigma Gamma</span></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="image-text-wrapper has-team-profiles">
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon-2.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon-3.png" alt="profile-icon">
                                                    </em>
                                                </div>
                                            </td>
                                            <td>
                                            <ul class="action-listing">
                                                <li>
                                                    <a href="#">
                                                        <em class="badge-wrapper">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.158" height="16" viewBox="0 0 15.158 16">
                                                                <path id="user-icon" d="M6.789,5.789A3.789,3.789,0,1,0,10.579,2,3.794,3.794,0,0,0,6.789,5.789ZM17.316,18h.842v-.842a5.9,5.9,0,0,0-5.895-5.895H8.895A5.9,5.9,0,0,0,3,17.158V18Z" transform="translate(-3 -2)" fill="#747272"/>
                                                            </svg>
                                                            <span class="badge black-badge">5</span>
                                                        </em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <em class="badge-wrapper">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.99967 1.66602C4.08301 1.66602 3.34134 2.41602 3.34134 3.33268L3.33301 16.666C3.33301 17.5827 4.07467 18.3327 4.99134 18.3327H14.9997C15.9163 18.3327 16.6663 17.5827 16.6663 16.666V7.35768C16.6663 6.91602 16.4913 6.49102 16.1747 6.18268L12.1497 2.15768C11.8413 1.84102 11.4163 1.66602 10.9747 1.66602H4.99967ZM10.833 6.66602V2.91602L15.4163 7.49935H11.6663C11.208 7.49935 10.833 7.12435 10.833 6.66602Z" fill="#747272"/>
                                                        </svg>
                                                        <span class="badge"><img src="<?php echo $rootUrl ?>images/green-tick.svg" alt="check icon"></span>
                                                        </em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <em class="badge-wrapper">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.99994 14.3911L13.4583 16.4828C14.0916 16.8661 14.8666 16.2995 14.6999 15.5828L13.7833 11.6495L16.8416 8.99948C17.3999 8.51615 17.0999 7.59948 16.3666 7.54115L12.3416 7.19948L10.7666 3.48281C10.4833 2.80781 9.5166 2.80781 9.23327 3.48281L7.65827 7.19115L3.63327 7.53281C2.89994 7.59115 2.59994 8.50781 3.15827 8.99115L6.2166 11.6411L5.29994 15.5745C5.13327 16.2911 5.90827 16.8578 6.5416 16.4745L9.99994 14.3911Z" fill="#747272"/>
                                                            </svg>
                                                            <span class="badge black-badge">50</span>
                                                        </em>
                                                    </a> 
                                                </li>
                                                <li>
                                                    <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                                        <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                            <em>
                                                                <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                </svg>
                                                            </em>
                                                        </a>
                                                        <div class="custom-tooltip-wrapper">
                                                            <div class="custom-tooltip-inner">
                                                                <ul class="actions-listing">
                                                                    <li>
                                                                        <a href="#" title="Message Team">Message Team</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="View Team Stats">View Team Stats</a>
                                                                    </li>                                                    
                                                                    <li>
                                                                        <a href="#" title="Move to Different Project">Move to Different Project</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Delete Team">Delete Team</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="image-text-wrapper">
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/member-icon-placeholder.png" alt="member-icon-placeholder">
                                                    </em>
                                                    <a href="#"><span class="title-text">The Moon</span></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="image-text-wrapper has-team-profiles">
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon-2.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon-3.png" alt="profile-icon">
                                                    </em>
                                                    <em>
                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                    </em>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="action-listing">
                                                    <li>
                                                        <a href="#">
                                                            <em class="badge-wrapper">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15.158" height="16" viewBox="0 0 15.158 16">
                                                                    <path id="user-icon" d="M6.789,5.789A3.789,3.789,0,1,0,10.579,2,3.794,3.794,0,0,0,6.789,5.789ZM17.316,18h.842v-.842a5.9,5.9,0,0,0-5.895-5.895H8.895A5.9,5.9,0,0,0,3,17.158V18Z" transform="translate(-3 -2)" fill="#747272"/>
                                                                </svg>
                                                                <span class="black-badge badge">5</span>
                                                            </em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <em class="badge-wrapper">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.99967 1.66602C4.08301 1.66602 3.34134 2.41602 3.34134 3.33268L3.33301 16.666C3.33301 17.5827 4.07467 18.3327 4.99134 18.3327H14.9997C15.9163 18.3327 16.6663 17.5827 16.6663 16.666V7.35768C16.6663 6.91602 16.4913 6.49102 16.1747 6.18268L12.1497 2.15768C11.8413 1.84102 11.4163 1.66602 10.9747 1.66602H4.99967ZM10.833 6.66602V2.91602L15.4163 7.49935H11.6663C11.208 7.49935 10.833 7.12435 10.833 6.66602Z" fill="#747272"/>
                                                            </svg>
                                                            <span class="badge"><img src="<?php echo $rootUrl ?>images/red-cross.svg" alt="cross icon"></span>
                                                            </em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <em class="badge-wrapper">
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.99994 14.3911L13.4583 16.4828C14.0916 16.8661 14.8666 16.2995 14.6999 15.5828L13.7833 11.6495L16.8416 8.99948C17.3999 8.51615 17.0999 7.59948 16.3666 7.54115L12.3416 7.19948L10.7666 3.48281C10.4833 2.80781 9.5166 2.80781 9.23327 3.48281L7.65827 7.19115L3.63327 7.53281C2.89994 7.59115 2.59994 8.50781 3.15827 8.99115L6.2166 11.6411L5.29994 15.5745C5.13327 16.2911 5.90827 16.8578 6.5416 16.4745L9.99994 14.3911Z" fill="#747272"/>
                                                                </svg>
                                                                <span class="black-badge badge">50</span>
                                                            </em>
                                                        </a> 
                                                    </li>
                                                    <li>
                                                        <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                                            <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                                <em>
                                                                    <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                    </svg>
                                                                </em>
                                                            </a>
                                                            <div class="custom-tooltip-wrapper">
                                                                <div class="custom-tooltip-inner">
                                                                    <ul class="actions-listing">
                                                                        <li>
                                                                            <a href="#" title="Message Team">Message Team</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="View Team Stats">View Team Stats</a>
                                                                        </li>                                                    
                                                                        <li>
                                                                            <a href="#" title="Move to Different Project">Move to Different Project</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Delete Team">Delete Team</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                    </div>
                </div>
                <div class="custom-tab-content" data-target="mentors">
                    Mentors
                </div>
                <div class="custom-tab-content" data-target="judges">
                    Judges
                </div>
                <div class="custom-tab-content" data-target="other">
                    other
                </div>
            </div>
        </div>


    </div>
</section>
<div class="modal fade project-application-popup" id="learners-applicants-modal" tabindex="-1" aria-labelledby="learners-applicants-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title-wrapper">
                    <h4 class="h1">List of Applicants</h3>
                    <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                        <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                            <em>
                                <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                </svg>
                            </em>
                        </a>
                        <div class="custom-tooltip-wrapper">
                            <div class="custom-tooltip-inner">
                                <ul class="actions-listing">
                                    <li>
                                        <a href="#" title="Pause Applications"><em><img src="<?php echo $rootUrl ?>images/pause-icon.svg" alt="pause-icon"></em> Pause Applications</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Close Applications"><em><img src="<?php echo $rootUrl ?>images/blue-close.svg" alt="blue-close"></em>Close Applications</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="appplications-list-wrapper">
                <div class="list-inner card-body ">
                            <ul class="profile-listing">
                                <li class=" white-card has-light-blue-border">
                                    <em class="user-profile">
                                        <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user-profile">
                                    </em>
                                    <div class="profile-content">
                                        <span>Sam Philips</span>
                                        <p>02/09/2022</p>
                                    </div>
                                    <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                        <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                            <em>
                                                <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                </svg>
                                            </em>
                                        </a>
                                        <div class="custom-tooltip-wrapper">
                                            <div class="custom-tooltip-inner">
                                                <ul class="actions-listing">
                                                    <li>
                                                        <a href="#" title="Accept">Accept</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Message">Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Interview">Interview</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Reject">Reject</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=" white-card has-light-blue-border">
                                    <em class="user-profile">
                                        <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user-profile">
                                    </em>
                                    <div class="profile-content">
                                        <span>Evans Timothy</span>
                                        <p>02/09/2022</p>
                                    </div>
                                    <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                        <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                            <em>
                                                <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                </svg>
                                            </em>
                                        </a>
                                        <div class="custom-tooltip-wrapper">
                                            <div class="custom-tooltip-inner">
                                                <ul class="actions-listing">
                                                    <li>
                                                        <a href="#" title="Accept">Accept</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Message">Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Interview">Interview</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Reject">Reject</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=" white-card has-light-blue-border">
                                    <em class="user-profile">
                                        <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user-profile">
                                    </em>
                                    <div class="profile-content">
                                        <span>McLaren Susan</span>
                                        <p>02/09/2022</p>
                                    </div>
                                    <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                        <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                            <em>
                                                <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                </svg>
                                            </em>
                                        </a>
                                        <div class="custom-tooltip-wrapper">
                                            <div class="custom-tooltip-inner">
                                                <ul class="actions-listing">
                                                    <li>
                                                        <a href="#" title="Accept">Accept</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Message">Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Interview">Interview</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Reject">Reject</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=" white-card has-light-blue-border">
                                    <em class="user-profile">
                                        <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user-profile">
                                    </em>
                                    <div class="profile-content">
                                        <span>Evans Timothy</span>
                                        <p>02/09/2022</p>
                                    </div>
                                    <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                        <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                            <em>
                                                <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                </svg>
                                            </em>
                                        </a>
                                        <div class="custom-tooltip-wrapper">
                                            <div class="custom-tooltip-inner">
                                                <ul class="actions-listing">
                                                    <li>
                                                        <a href="#" title="Accept">Accept</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Message">Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Interview">Interview</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Reject">Reject</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=" white-card has-light-blue-border">
                                    <em class="user-profile">
                                        <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user-profile">
                                    </em>
                                    <div class="profile-content">
                                        <span>Sam Philips</span>
                                        <p>02/09/2022</p>
                                    </div>
                                    <div class="more-actions-popup-wrapper table-popup-wrapper">                                                                                                       
                                        <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                            <em>
                                                <svg width="5" height="16" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                </svg>
                                            </em>
                                        </a>
                                        <div class="custom-tooltip-wrapper">
                                            <div class="custom-tooltip-inner">
                                                <ul class="actions-listing">
                                                    <li>
                                                        <a href="#" title="Accept">Accept</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Message">Message</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Interview">Interview</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Reject">Reject</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="modal fade learners-join-modal join-modal" id="learners-join-modal" tabindex="-1" aria-labelledby="learners-join-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">Learners Joining</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="joining-date-wrapper">
                    <div class="form-group">
                         <div class="tooltip-wrapper">
                             <label for="">
                                Application opens
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>
                              </label>
                            <div class="custom-datepicker"><input type="text" id="application-opens-date" class="form-control datepicker" placeholder="DD/MM/YYY"></div>
                         </div>
                    </div>
                    <div class="form-group">
                           <div class="tooltip-wrapper">
                                <label for="">
                                Application closes
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>
                              </label>
                            <div class="custom-datepicker"><input type="text" id="application-close-date" class="form-control datepicker" placeholder="DD/MM/YYY"></div>
                           </div>
                    </div>
                </div>
                <h5 class="h2">Where do you want them to join from?</h5>
                <div class="form-wrapper">  
                    <div class="form-group radio-wrapper secondary">
                        <div class="tooltip-wrapper radio-title">
                            <input type="radio" id="opportunities" name="join-locations" value="opportunities" >
                            <label for="opportunities">Opportunities
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>
                            </label>  
                        </div>
                        <div class="inner-feild-wrapper">
                            <p>Where can they join from?</p>
                            <div class="custom-dropdown form-group tooltip-wrapper">
                                <label for="">
                                    Region
                                    <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                     </a>
                                </label>
                                <select name="" id="" class="custom-select">
                                    <option value="Region1">Region 1</option>
                                    <option value="Region2">Region 2</option>
                                </select>
		    				</div>
                            <div class="custom-dropdown form-group tooltip-wrapper">
                                <label for="">
                                    Country
                                    <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                     </a>
                                </label>
                                <select name="" id="" class="custom-select">
                                    <option value="Country1">Country 1</option>
                                    <option value="Country2">Country 2</option>
                                </select>
		    				</div>
                            <div class="custom-dropdown form-group tooltip-wrapper">
                                <label for="">
                                    State
                                    <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                     </a>
                                </label>
                                <select name="" id="" class="custom-select">
                                    <option value="State1">State 1</option>
                                    <option value="State2">State 2</option>
                                </select>
		    				</div>

                        </div>                             
                    </div>
                    <div class="form-group radio-wrapper secondary">
                        <div class="tooltip-wrapper radio-title">
                            <input type="radio" id="community"  name="join-locations" value="community" >
                            <label for="community">Community
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>                              
                            </label>  
                        </div>
                        <div class="inner-feild-wrapper">
                            <div class="custom-dropdown form-group">
                                <select name="" id="" class="custom-select">
                                    <option value="Not Started">Not Started</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="In Review">In Review</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Overdue">Overdue</option>
                                </select>
		    				</div>
                        </div>                              
                    </div>
                   
                </div>
            </div>
            <div class="modal-footer">
                <div class="modal-footer-inner">
                    <div class="modal-btn-wrapper">
                        <a href="#" title="Confirm" class="btn primary-fill-btn create-btn" data-bs-dismiss="modal">Confirm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>