<?php include 'header.php'; ?>

<section class="master-layout-wrapper project-organizers-page">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Projects</a></li>
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
                    <div class="grey-card myproject-learners-detail">
                        <a href="myproject-learners-listing.php" class="back-link" title="Back to Teams">
                            <em class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 7H3.83L9.42 1.41L8 0L0 8L8 16L9.41 14.59L3.83 9H16V7Z" fill="#2F64FF"/>
                                </svg>
                            </em> 
                            Back to Teams
                        </a>
                        <div class="custom-accordion-outer">
                            <div class="custom-accordion-wrapper is-open">
                                <div class="organizers-team-wrapper custom-accordion-title">
                                    <div class="title-wrapper">
                                        <a href="#" class="arrow-link" title="arrow-link">
                                            <em>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9.12" viewBox="0 0 16 9.12">
                                                    <path id="ic_expand_more_24px" d="M20.12,8.59,14,14.227,7.88,8.59,6,10.325l8,7.385,8-7.385Z" transform="translate(-6 -8.59)" fill="#2f64ff"/>
                                                </svg>
                                            </em>
                                            <h3 class="h2">
                                                GoGoGirl
                                            </h3>
                                        </a>
                                        <div class="more-actions-popup-wrapper">
                                                <a href="#" class="more-actions-link popup-open-link" title="More Actions">
                                                    <em>
                                                        <svg width="5" height="18" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#373737"></path>
                                                        </svg>
                                                    </em>
                                                </a>
                                                <div class="custom-tooltip-wrapper">
                                                    <div class="custom-tooltip-inner">
                                                        <ul class="actions-listing">
                                                            <li >
                                                                <em class="icon">
                                                                    <img src="<?php echo $rootUrl ?>images/plus-icon-blue.svg" alt="plus-icon">
                                                                </em>
                                                                <a href="#" title="Add Member">Add Member</span></a>
                                                            </li>
                                                            <li >
                                                                <em class="icon">
                                                                    <img src="<?php echo $rootUrl ?>images/plus-icon-blue.svg" alt="plus-icon">
                                                                </em>
                                                                <a href="#" title="Add Mentor">Add Mentor</span></a>
                                                            </li>
                                                            <li >
                                                                <em class="icon">
                                                                    <img src="<?php echo $rootUrl ?>images/edit-icon-blue.svg" alt="edit-icon">
                                                                </em>
                                                                <a href="#" title="Edit Team Name">Edit Team Name</span></a>
                                                            </li>                                                      
                                                            <li >
                                                                <em class="icon">
                                                                    <img src="<?php echo $rootUrl ?>images/statistics-icon-blue.svg" alt="statistics-icon-blue">
                                                                </em>
                                                                <a href="#" title="View Team Stats">View Team Stats</span></a>
                                                            </li> 
                                                            <li >
                                                                <em class="icon">
                                                                    <img src="<?php echo $rootUrl ?>images/lock-icon-blue.svg" alt="lock-icon-blue">
                                                                </em>
                                                                <a href="#" title="Toggle Public/Private">Toggle Public/Private</span></a>
                                                            </li> 
                                                            <li class="orange-link">
                                                                <em class="icon">
                                                                    <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                </em>
                                                                <a href="#" title="Delete Team">Delete Team</span></a>
                                                            </li>                                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>                        
                                </div>
                                <div class="custom-accordion-body">
                                    <div class="white-card no-box-shadow">
                                        <div class="table-wrapper">
                                            <table id="learner-team-table" class="learner-team-table responsive dt-responsive">
                                                <thead>
                                                    <tr>
                                                        <th data-priority="-1" class="name-col">Name</th>
                                                        <th data-priority="0" class="title-col">Title</th>
                                                        <th data-priority="-1" class="table-actions">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="image-text-wrapper">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/member-icon-placeholder.png" alt="member-icon-placeholder">
                                                                </em>
                                                                <a href="#" class="profile-link"><span class="title-text">Elliot Shaw</span></a>
                                                            </div>
                                                        </td>
                                                        <td>Project Manager, ProjectSet</td>
                                                        <td>
                                                            <div class="more-actions-popup-wrapper  ">
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
                                                                                <a href="#" title="View Profile">View Profile</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Message">Message</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Make Team Lead">Make Team Lead</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="View Stats">View Stats</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Move to Another Team">Move to Another Team</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Remove from Project">Remove from Project</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="image-text-wrapper">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/profile-icon-3.png" alt="profile-icon">
                                                                </em>
                                                                <a href="#" class="profile-link"><span class="title-text">McLaren Susan</span></a>
                                                            </div>
                                                        </td>
                                                        <td>Project Manager, ProjectSet</td>
                                                        <td>
                                                            <div class="more-actions-popup-wrapper  ">
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
                                                                                <a href="#" title="View Profile">View Profile</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Message">Message</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Make Team Lead">Make Team Lead</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="View Stats">View Stats</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Move to Another Team">Move to Another Team</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Remove from Project">Remove from Project</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="image-text-wrapper">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/profile-icon-3.png" alt="profile-icon">
                                                                </em>
                                                                <a href="#" class="profile-link"><span class="title-text">McLaren Susan</span></a>
                                                            </div>
                                                        </td>
                                                        <td>Project Manager, ProjectSet</td>
                                                        <td>
                                                            <div class="more-actions-popup-wrapper  ">
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
                                                                                <a href="#" title="View Profile">View Profile</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Message">Message</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Make Team Lead">Make Team Lead</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="View Stats">View Stats</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Move to Another Team">Move to Another Team</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Remove from Project">Remove from Project</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-accordion-wrapper is-open submissions-block">
                                <div class="organizers-team-wrapper custom-accordion-title">
                                    <div class="title-wrapper">
                                        <a href="#" class="arrow-link" title="arrow-link">
                                            <em>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9.12" viewBox="0 0 16 9.12">
                                                    <path id="ic_expand_more_24px" d="M20.12,8.59,14,14.227,7.88,8.59,6,10.325l8,7.385,8-7.385Z" transform="translate(-6 -8.59)" fill="#2f64ff"/>
                                                </svg>
                                            </em>
                                            <h3 class="h2">Submissions</h3>
                                        </a>
                                    </div>                        
                                </div>
                                <div class="custom-accordion-body">
                                    <div class="submission-list">
                                        <div class="submission-item">
                                            <div class="submission-item-inner" data-bs-toggle="modal" data-bs-target="#submission-modal">
                                                <div class="white-card">
                                                    <div class="card-header-grey">
                                                        <div class="card-header-inner">
                                                            <span class="title">Submisson 1</span>
                                                            <div class="submission-actions">
                                                                <a href="#" title="download" class="download-link">
                                                                    <em>
                                                                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                               <a href="#" title="external-link" class="external-link">
                                                                    <em>
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.001 16H2.00098C1.47054 16 0.961836 15.7893 0.586763 15.4142C0.21169 15.0391 0.000976563 14.5304 0.000976562 14V3C0.000976562 2.46957 0.21169 1.96086 0.586763 1.58579C0.961836 1.21071 1.47054 1 2.00098 1H6.00098V3H2.00098V14H13.001V10H15.001V14C15.001 14.5304 14.7903 15.0391 14.4152 15.4142C14.0401 15.7893 13.5314 16 13.001 16ZM7.70098 9.707L6.29098 8.293L12.584 2H9.00098V0H16.001V7H14.001V3.415L7.70098 9.707Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <em class="file-type-icon">
                                                            <img src="<?php echo $rootUrl ?>images/pdf.svg" alt="pdf-icon">
                                                        </em>
                                                        <span class="filename">Project Papers</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submission-item">
                                            <div class="submission-item-inner">
                                                <div class="white-card">
                                                    <div class="card-header-grey">
                                                        <div class="card-header-inner">
                                                            <span class="title">Submisson 2</span>
                                                            <div class="submission-actions">
                                                                <a href="#" title="download" class="download-link">
                                                                    <em>
                                                                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                               <a href="#" title="external-link" class="external-link">
                                                                    <em>
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.001 16H2.00098C1.47054 16 0.961836 15.7893 0.586763 15.4142C0.21169 15.0391 0.000976563 14.5304 0.000976562 14V3C0.000976562 2.46957 0.21169 1.96086 0.586763 1.58579C0.961836 1.21071 1.47054 1 2.00098 1H6.00098V3H2.00098V14H13.001V10H15.001V14C15.001 14.5304 14.7903 15.0391 14.4152 15.4142C14.0401 15.7893 13.5314 16 13.001 16ZM7.70098 9.707L6.29098 8.293L12.584 2H9.00098V0H16.001V7H14.001V3.415L7.70098 9.707Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <em class="file-type-icon">
                                                            <img src="<?php echo $rootUrl ?>images/sheets.svg" alt="sheets-icon">
                                                        </em>
                                                        <span class="filename">List of references</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submission-item">
                                            <div class="submission-item-inner">
                                                <div class="white-card">
                                                    <div class="card-header-grey">
                                                        <div class="card-header-inner">
                                                            <span class="title">Submisson 3</span>
                                                            <div class="submission-actions">
                                                                <a href="#" title="download" class="download-link">
                                                                    <em>
                                                                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                               <a href="#" title="external-link" class="external-link">
                                                                    <em>
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.001 16H2.00098C1.47054 16 0.961836 15.7893 0.586763 15.4142C0.21169 15.0391 0.000976563 14.5304 0.000976562 14V3C0.000976562 2.46957 0.21169 1.96086 0.586763 1.58579C0.961836 1.21071 1.47054 1 2.00098 1H6.00098V3H2.00098V14H13.001V10H15.001V14C15.001 14.5304 14.7903 15.0391 14.4152 15.4142C14.0401 15.7893 13.5314 16 13.001 16ZM7.70098 9.707L6.29098 8.293L12.584 2H9.00098V0H16.001V7H14.001V3.415L7.70098 9.707Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <em class="file-type-icon">
                                                            <img src="<?php echo $rootUrl ?>images/pdf.svg" alt="pdf-icon">
                                                        </em>
                                                        <span class="filename">Project Papers</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submission-item">
                                            <div class="submission-item-inner">
                                                <div class="white-card">
                                                    <div class="card-header-grey">
                                                        <div class="card-header-inner">
                                                            <span class="title">Submisson 2</span>
                                                            <div class="submission-actions">
                                                                <a href="#" title="download" class="download-link">
                                                                    <em>
                                                                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                               <a href="#" title="external-link" class="external-link">
                                                                    <em>
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.001 16H2.00098C1.47054 16 0.961836 15.7893 0.586763 15.4142C0.21169 15.0391 0.000976563 14.5304 0.000976562 14V3C0.000976562 2.46957 0.21169 1.96086 0.586763 1.58579C0.961836 1.21071 1.47054 1 2.00098 1H6.00098V3H2.00098V14H13.001V10H15.001V14C15.001 14.5304 14.7903 15.0391 14.4152 15.4142C14.0401 15.7893 13.5314 16 13.001 16ZM7.70098 9.707L6.29098 8.293L12.584 2H9.00098V0H16.001V7H14.001V3.415L7.70098 9.707Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <em class="file-type-icon">
                                                            <img src="<?php echo $rootUrl ?>images/sheets.svg" alt="sheets-icon">
                                                        </em>
                                                        <span class="filename">List of references</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submission-item">
                                            <div class="submission-item-inner">
                                                <div class="white-card">
                                                    <div class="card-header-grey">
                                                        <div class="card-header-inner">
                                                            <span class="title">Submisson 5</span>
                                                            <div class="submission-actions">
                                                                <a href="#" title="download" class="download-link">
                                                                    <em>
                                                                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                               <a href="#" title="external-link" class="external-link">
                                                                    <em>
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.001 16H2.00098C1.47054 16 0.961836 15.7893 0.586763 15.4142C0.21169 15.0391 0.000976563 14.5304 0.000976562 14V3C0.000976562 2.46957 0.21169 1.96086 0.586763 1.58579C0.961836 1.21071 1.47054 1 2.00098 1H6.00098V3H2.00098V14H13.001V10H15.001V14C15.001 14.5304 14.7903 15.0391 14.4152 15.4142C14.0401 15.7893 13.5314 16 13.001 16ZM7.70098 9.707L6.29098 8.293L12.584 2H9.00098V0H16.001V7H14.001V3.415L7.70098 9.707Z" fill="#2F64FF"/>
                                                                        </svg>
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <em class="file-type-icon">
                                                            <img src="<?php echo $rootUrl ?>images/pdf.svg" alt="pdf-icon">
                                                        </em>
                                                        <span class="filename">Project Papers</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating-info-wrapper">
                                        <div class="rating-system">
                                            <div class="card-wrapper">
                                                <div class="rating-card white-card">
                                                    <div class="card-header-grey">
                                                        <span class="header-title text-center">Design &amp; Usability</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul class="rating-number-list">
                                                            <li class="scale-1 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-1.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >1</a>
                                                            </li>
                                                            <li class="scale-2 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-2.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >2</a>
                                                            </li>
                                                            <li class="scale-3 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-3.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >3</a>
                                                            </li>
                                                            <li class="scale-4 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-4.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >4</a>
                                                            </li>
                                                            <li class="scale-5 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-5.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >5</a>
                                                            </li>
                                                            <li class="scale-6 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-6.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >6</a>
                                                            </li>
                                                            <li class="scale-7 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-7.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >7</a>
                                                            </li>
                                                            <li class="scale-8 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-8.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >8</a>
                                                            </li>
                                                            <li class="scale-9 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-9.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >9</a>
                                                            </li>
                                                            <li class="scale-10 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-10.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >10</a>
                                                            </li>
                                                        </ul>
                                                        <div class="form-group">		
                                                            <textarea id="mission" class="form-control" placeholder="Type your comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper">
                                                <div class="rating-card white-card">
                                                    <div class="card-header-grey">
                                                        <span class="header-title text-center">Technical Optimization</span>
                                                    </div>
                                                    <div class="card-body">
                                                    <ul class="rating-number-list">
                                                            <li class="scale-1 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-1.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >1</a>
                                                            </li>
                                                            <li class="scale-2 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-2.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >2</a>
                                                            </li>
                                                            <li class="scale-3 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-3.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >3</a>
                                                            </li>
                                                            <li class="scale-4 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-4.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >4</a>
                                                            </li>
                                                            <li class="scale-5 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-5.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >5</a>
                                                            </li>
                                                            <li class="scale-6 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-6.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >6</a>
                                                            </li>
                                                            <li class="scale-7 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-7.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >7</a>
                                                            </li>
                                                            <li class="scale-8 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-8.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >8</a>
                                                            </li>
                                                            <li class="scale-9 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-9.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >9</a>
                                                            </li>
                                                            <li class="scale-10 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-10.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >10</a>
                                                            </li>
                                                        </ul>
                                                        <div class="form-group">		
                                                            <textarea id="mission" class="form-control" placeholder="Type your comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper">
                                                <div class="rating-card white-card">
                                                    <div class="card-header-grey">
                                                        <span class="header-title text-center">Originality &amp; Impact</span>
                                                    </div>
                                                    <div class="card-body">
                                                    <ul class="rating-number-list">
                                                            <li class="scale-1 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-1.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >1</a>
                                                            </li>
                                                            <li class="scale-2 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-2.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >2</a>
                                                            </li>
                                                            <li class="scale-3 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-3.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >3</a>
                                                            </li>
                                                            <li class="scale-4 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-4.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >4</a>
                                                            </li>
                                                            <li class="scale-5 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-5.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >5</a>
                                                            </li>
                                                            <li class="scale-6 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-6.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >6</a>
                                                            </li>
                                                            <li class="scale-7 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-7.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >7</a>
                                                            </li>
                                                            <li class="scale-8 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-8.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >8</a>
                                                            </li>
                                                            <li class="scale-9 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-9.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >9</a>
                                                            </li>
                                                            <li class="scale-10 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-10.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >10</a>
                                                            </li>
                                                        </ul>
                                                        <div class="form-group">		
                                                            <textarea id="mission" class="form-control" placeholder="Type your comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper">
                                                <div class="rating-card white-card">
                                                    <div class="card-header-grey">
                                                        <span class="header-title text-center">Accessibility</span>
                                                    </div>
                                                    <div class="card-body">
                                                    <ul class="rating-number-list">
                                                            <li class="scale-1 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-1.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >1</a>
                                                            </li>
                                                            <li class="scale-2 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-2.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >2</a>
                                                            </li>
                                                            <li class="scale-3 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-3.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >3</a>
                                                            </li>
                                                            <li class="scale-4 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-4.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >4</a>
                                                            </li>
                                                            <li class="scale-5 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-5.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >5</a>
                                                            </li>
                                                            <li class="scale-6 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-6.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >6</a>
                                                            </li>
                                                            <li class="scale-7 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-7.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >7</a>
                                                            </li>
                                                            <li class="scale-8 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-8.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >8</a>
                                                            </li>
                                                            <li class="scale-9 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-9.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >9</a>
                                                            </li>
                                                            <li class="scale-10 tooltip-wrapper">
                                                                <a href="#" class="custom-tooltip"
                                                                data-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                                                                <div class='custom-tooltip-wrapper rating-info-tooltip' tooltip-content='custom-tooltip'>
                                                                    <div class='white-card'>
                                                                        <p>Rubic-10.</p>
                                                                    </div>
                                                                </div>
                                                                "
                                                                >10</a>
                                                            </li>
                                                        </ul>
                                                        <div class="form-group">		
                                                            <textarea id="mission" class="form-control" placeholder="Type your comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submission-btn-wrapper">
                                        <a href="#" title="Submit Evaluation" class="btn primary-fill-btn">Submit Evaluation</a>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-accordion-wrapper is-open evaluation-block">
                                <div class="organizers-team-wrapper custom-accordion-title">
                                    <div class="title-wrapper">
                                        <a href="#" class="arrow-link" title="arrow-link">
                                            <em>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9.12" viewBox="0 0 16 9.12">
                                                    <path id="ic_expand_more_24px" d="M20.12,8.59,14,14.227,7.88,8.59,6,10.325l8,7.385,8-7.385Z" transform="translate(-6 -8.59)" fill="#2f64ff"/>
                                                </svg>
                                            </em>
                                            <h3 class="h2">Evaluation</h3>
                                        </a>
                                        <div class="tooltip-wrapper">
                                            <a class="custom-tooltip" href="#" data-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="" data-bs-original-title="
                                            <div class=&quot;custom-tooltip-wrapper&quot; tooltip-content=&quot;custom-tooltip&quot; >
                                                <div class=&quot;white-card&quot;>
                                                    <ul class=&quot;rating-number-list&quot;>
                                                        <li>
                                                            <span class=&quot;rating-number-wrapper torquiouse-border&quot;>6-8</span>
                                                            <span class=&quot;rating-category&quot;>Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class=&quot;rating-number-wrapper alert-green-border&quot;>6-8</span>
                                                            <span class=&quot;rating-category&quot;>Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class=&quot;rating-number-wrapper alert-orange-border&quot;>6-8</span>
                                                            <span class=&quot;rating-category&quot;>Beginner</span>                
                                                        </li> 
                                                        <li>
                                                            <span class=&quot;rating-number-wrapper alert-red-border&quot;>6-8</span>
                                                            <span class=&quot;rating-category&quot;>Beginner</span>                
                                                        </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            ">
                                                <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                            </a>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="custom-accordion-body">
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
                                </div>
                            </div>
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
<?php include 'footer.php'; ?>
<div class="modal fade submission-modal" id="submission-modal" tabindex="-1" aria-labelledby="submission-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4>Submission 1</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="white-card submission-detail">
                    <div class="card-header-grey">
                        <div class="card-header-inner">
                            <span class="title">
                                <em class="icon">
                                    <img src="<?php echo $rootUrl ?>images/pdf.svg" alt="pdf-icon">
                                </em>
                                Submisson 1
                            </span>
                            <div class="submission-actions">
                                <a href="#" title="download" class="download-link">
                                    <em>
                                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#2F64FF"/>
                                        </svg>
                                    </em>
                                </a>
                                <a href="#" title="external-link" class="external-link">
                                    <em>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.001 16H2.00098C1.47054 16 0.961836 15.7893 0.586763 15.4142C0.21169 15.0391 0.000976563 14.5304 0.000976562 14V3C0.000976562 2.46957 0.21169 1.96086 0.586763 1.58579C0.961836 1.21071 1.47054 1 2.00098 1H6.00098V3H2.00098V14H13.001V10H15.001V14C15.001 14.5304 14.7903 15.0391 14.4152 15.4142C14.0401 15.7893 13.5314 16 13.001 16ZM7.70098 9.707L6.29098 8.293L12.584 2H9.00098V0H16.001V7H14.001V3.415L7.70098 9.707Z" fill="#2F64FF"/>
                                        </svg>
                                    </em>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>The academic literature within social psychology focuses on describing what leaders and groups do wrong rather than what they do right. We refer to this as the “negative psychology” of leaders and groups.</p>
                        <p>This chapter reviews the negative and positive research perspectives on leadership and groups. We propose that scholarly research makes more references to the shortcomings of leaders and groups rather than their successes. We conjecture that the pressure by the academic community to produce compelling counterintuitive research findings fuels the tendency to concentrate on failures.</p>
                        <p>In contrast, we suggest that popular articles and books more often focus on the positive achievement of leaders and groups because their audience, namely managers, are more interested in learning how to achieve positive results than to avoid negative outcomes.</p>
                        <p>Finally, we suggest that scholarly research on the psychology of leaders and groups could benefit from understanding how to achieve and maintain positive outcomes, whereas popular press may better prevent organizational failure and ruin by understanding managers’ blunders and faults.</p>
                        <p>The academic literature within social psychology focuses on describing what leaders and groups do wrong rather than what they do right. We refer to this as the “negative psychology” of leaders and groups.</p>
                        <p>This chapter reviews the negative and positive research perspectives on leadership and groups. We propose that scholarly research makes more references to the shortcomings of leaders and groups rather than their successes. We conjecture that the pressure by the academic community to produce compelling counterintuitive research findings fuels the tendency to concentrate on failures.</p>
                        <p>In contrast, we suggest that popular articles and books more often focus on the positive achievement of leaders and groups because their audience, namely managers, are more interested in learning how to achieve positive results than to avoid negative outcomes.</p>
                        <p>Finally, we suggest that scholarly research on the psychology of leaders and groups could benefit from understanding how to achieve and maintain positive outcomes, whereas popular press may better prevent organizational failure and ruin by understanding managers’ blunders and faults.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

