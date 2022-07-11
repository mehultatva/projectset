<?php include 'header.php'; ?>

<section class="master-layout-wrapper projectstudio-page">
	<div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Projects</a></li>
            <li class="breadcrumb-item"><a href="#">UniHack Social</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sigma Gamma’s ProjectStudio</li>
        </ol>
        <div class="title-wrapper">
            <div class="title-actions-wrapper">
                <div class="title-actions-inner">
                    <div class="title-inner">
                        <h1>Sigma Gamma’s ProjectStudio</h1>
                    </div>
                    <div class="action-wrapper">
                        <ul class="actions-list">
                            <li class="more-actions-popup-wrapper add-link-wrapper">
                                <a href="#" class="popup-open-link" title="Add">
                                    <em><img src="<?php echo $rootUrl ?>images/plus-icon-blue.svg" alt="Plus Icon"></em>
                                    Add
                                </a>
                                <div class="custom-tooltip-wrapper">
                                    <div class="custom-tooltip-inner">
                                        <ul class="actions-listing">
                                            <li>
                                                <a href="#" title="Task">Task</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Event">Event</a>
                                            </li>
                                            <li>
                                                <a href="#" title="File">File</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="action-popup-wrapper call-link-wrapper">
                                <a href="#" class="action-link" title="Call" data-bs-target="#call-modal" data-bs-toggle="modal">
                                    <em><img src="<?php echo $rootUrl ?>images/video-icon-filled.svg" alt="Video Icon"></em>
                                    Call
                                </a>
                            </li>
                            <li class="action-popup-wrapper message-link-wrapper">
                                <a href="#" class="action-link" title="Message" data-bs-target="#message-modal" data-bs-toggle="modal">
                                    <em><img src="<?php echo $rootUrl ?>images/message-icon-blue.svg" alt="Message Icon"></em>
                                    Message
                                </a>
                                <div class="action-popup">
                                </div>
                            </li>
                        </ul>
                        <div class="user-list-wrapper">
                            <span class="user-list">
                                <em>
                                    <img src="<?php echo $rootUrl ?>images/recent-user-icon.svg" alt="recent-user-icon">
                                </em>
                                <em>
                                    <img src="<?php echo $rootUrl ?>images/recent-user-icon.svg" alt="recent-user-icon">
                                </em>
                                <em>
                                    <img src="<?php echo $rootUrl ?>images/recent-user-icon.svg" alt="recent-user-icon">
                                </em>
                            </span>
                            <a href="#" title="See all" data-bs-target="#all-team-members-modal" data-bs-toggle="modal">
                                <span class="link-text">
                                    See all
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="master-layout-grid-wrapper project-page-wrapper project-studio-page-wrapper">
            <div class="master-layout-left-column full-width">
                <div class="custom-tabbing-wrapper">
                    <div class="custom-tab-heading">
                        <em class="next-link"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Right arrow"></em>
                        <em class="prev-link disable"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Left arrow"></em>
                        <ul>
                            <li class="active"><a href="#" title="Team Space" data-id="teamspace">Team Space</a></li>
                            <li><a href="#" title="Submission" data-id="submission">Submission</a></li>
                            <li><a href="#" title="Evaluation" data-id="evaluation">Evaluation</a></li>
                        </ul>
                    </div>
                    <div class="custom-tab-content-wrapper">
                        <div class="custom-tab-content active" data-target="teamspace">
                            <div class="master-layout-gray-column">
                                <div class="grey-card main-card custom-nested-tabbing">
                                    <div class="card-heading">
                                        <div class="custom-tab-heading nested-tab-heading">
                                            <em class="next-link"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Right arrow"></em>
                                            <em class="prev-link disable"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Left arrow"></em>
                                            <ul>
                                                <li class="active"><a href="#" title="Update" data-id="update">Updates</a></li>
                                                <li><a href="#" title="Tasks" data-id="tasks">Tasks</a></li>
                                                <li><a href="#" title="Events" data-id="events">Events</a></li>
                                                <li><a href="#" title="Files" data-id="files">Files</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="custom-tab-content active" data-target="update">
                                            <div class="updates-tab-wrapper">
                                                <div class="white-card">
                                                    <div class="card-body">
                                                        <div class="updates-filter-block">
                                                            <div class="filter-outer-wrapper">
                                                                <div class="filter-inner-wrapper">
                                                                    <div class="custom-dropdown form-group">
                                                                        <h5 class="dropdown-toggle" data-bs-toggle="dropdown">
                                                                        Filter: <span class="dropdown-title">Notifications</span>
                                                                        </h5>
                                                                        <ul class="dropdown-menu">
                                                                            <li class="active"><a class="dropdown-item" href="#">Notification 1</a></li>
                                                                            <li><a class="dropdown-item" href="#">Notification 2</a></li>
                                                                            <li><a class="dropdown-item" href="#">Notification 3</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="form-group has-search-btn">
                                                                        <label></label>
                                                                        <input class="form-control" placeholder="Search">
                                                                        <button type="submit" href="#" class="search-btn"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="btn-wrapper">
                                                                <a href="#" class="btn mark-all-read" title="Mark all as Read">Mark all as Read</a>
                                                            </div>
                                                        </div>
                                                        <div class="updates-listing-block">
                                                            <div class="update-wrapper">
                                                                <div class="update">
                                                                    <div class="update-icon">
                                                                        <em class="icon">
                                                                            <img src="<?php echo $rootUrl ?>images/bg-calender-icon.svg" alt="bg-calender-icon">
                                                                        </em>
                                                                    </div>
                                                                    <div class="update-description">
                                                                        <p class="description"><span class="highlited-text">Sam Phillips</span> has added a new events: 
                                                                            <a href="#" title="Check Event">Project Submission Deadline</a>
                                                                        </p>
                                                                        <span class="timestamp">30 minutes ago</span>
                                                                    </div>
                                                                    <div class="update-actions">
                                                                        <div class="update-action-inner">
                                                                            <a href="#" title="Mark as Read" class="mark-read-text">Mark as read</a>
                                                                            <a href="#" title="Add to Starred Messages" class="star-msg">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12.0001 17.2717L16.1501 19.7817C16.9101 20.2417 17.8401 19.5617 17.6401 18.7017L16.5401 13.9817L20.2101 10.8017C20.8801 10.2217 20.5201 9.12172 19.6401 9.05172L14.8101 8.64172L12.9201 4.18172C12.5801 3.37172 11.4201 3.37172 11.0801 4.18172L9.19007 8.63172L4.36007 9.04172C3.48007 9.11172 3.12007 10.2117 3.79007 10.7917L7.46007 13.9717L6.36007 18.6917C6.16007 19.5517 7.09007 20.2317 7.85007 19.7717L12.0001 17.2717Z" fill="#B9B8B8"/>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="update-wrapper">
                                                                <div class="update">
                                                                    <div class="update-icon">
                                                                        <em class="icon">
                                                                            <img src="<?php echo $rootUrl ?>images/bg-announcement-icon.svg" alt="bg-announcement-icon">
                                                                        </em>
                                                                    </div>
                                                                    <div class="update-description">
                                                                        <p class="description"> 
                                                                            <a href="#" title="Check Event">Late Submission for Hackathon Competition</a>
                                                                            : Hope this meets you well, this is to let you know that the date for the hackathon will not changed further. If you want to partake in this hackathon, please submit the following information
                                                                        </p>
                                                                        <span class="timestamp">1 hours ago</span>
                                                                    </div>
                                                                    <div class="update-actions">
                                                                        <div class="update-action-inner">
                                                                            <a href="#" title="Mark as Read" class="mark-read-text">Mark as read</a>
                                                                            <a href="#" title="Add to Starred Messages" class="star-msg">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12.0001 17.2717L16.1501 19.7817C16.9101 20.2417 17.8401 19.5617 17.6401 18.7017L16.5401 13.9817L20.2101 10.8017C20.8801 10.2217 20.5201 9.12172 19.6401 9.05172L14.8101 8.64172L12.9201 4.18172C12.5801 3.37172 11.4201 3.37172 11.0801 4.18172L9.19007 8.63172L4.36007 9.04172C3.48007 9.11172 3.12007 10.2117 3.79007 10.7917L7.46007 13.9717L6.36007 18.6917C6.16007 19.5517 7.09007 20.2317 7.85007 19.7717L12.0001 17.2717Z" fill="#B9B8B8"/>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="update-wrapper">
                                                                <div class="update">
                                                                    <div class="update-icon">
                                                                        <em class="icon">
                                                                            <img src="<?php echo $rootUrl ?>images/bg-user-icon.svg" alt="bg-user-icon">
                                                                        </em>
                                                                    </div>
                                                                    <div class="update-description">
                                                                        <p class="description">A new member, James Corden, has joined your team.
                                                                        </p>
                                                                        <span class="timestamp">3 hours ago</span>
                                                                    </div>
                                                                    <div class="update-actions">
                                                                        <div class="update-action-inner">
                                                                            <a href="#" title="Mark as Read" class="mark-read-text">Mark as read</a>
                                                                            <a href="#" title="Add to Starred Messages" class="star-msg">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12.0001 17.2717L16.1501 19.7817C16.9101 20.2417 17.8401 19.5617 17.6401 18.7017L16.5401 13.9817L20.2101 10.8017C20.8801 10.2217 20.5201 9.12172 19.6401 9.05172L14.8101 8.64172L12.9201 4.18172C12.5801 3.37172 11.4201 3.37172 11.0801 4.18172L9.19007 8.63172L4.36007 9.04172C3.48007 9.11172 3.12007 10.2117 3.79007 10.7917L7.46007 13.9717L6.36007 18.6917C6.16007 19.5517 7.09007 20.2317 7.85007 19.7717L12.0001 17.2717Z" fill="#B9B8B8"/>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="update-wrapper marked-read">
                                                                <div class="update">
                                                                    <div class="update-icon">
                                                                        <em class="icon">
                                                                            <img src="<?php echo $rootUrl ?>images/bg-calender-icon.svg" alt="bg-calender-icon">
                                                                        </em>
                                                                    </div>
                                                                    <div class="update-description">
                                                                        <p class="description"><span class="highlited-text">Sam Phillips</span> has added a new events: 
                                                                            <a href="#" title="Check Event">Project Submission Deadline</a>
                                                                        </p>
                                                                        <span class="timestamp">30 minutes ago</span>
                                                                    </div>
                                                                    <div class="update-actions">
                                                                        <div class="update-action-inner">
                                                                            <a href="#" title="Mark as Read" class="mark-read-text">Mark as read</a>
                                                                            <a href="#" title="Add to Starred Messages" class="star-msg">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12.0001 17.2717L16.1501 19.7817C16.9101 20.2417 17.8401 19.5617 17.6401 18.7017L16.5401 13.9817L20.2101 10.8017C20.8801 10.2217 20.5201 9.12172 19.6401 9.05172L14.8101 8.64172L12.9201 4.18172C12.5801 3.37172 11.4201 3.37172 11.0801 4.18172L9.19007 8.63172L4.36007 9.04172C3.48007 9.11172 3.12007 10.2117 3.79007 10.7917L7.46007 13.9717L6.36007 18.6917C6.16007 19.5517 7.09007 20.2317 7.85007 19.7717L12.0001 17.2717Z" fill="#B9B8B8"/>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="update-wrapper marked-read">
                                                                <div class="update">
                                                                    <div class="update-icon">
                                                                        <em class="icon">
                                                                            <img src="<?php echo $rootUrl ?>images/bg-announcement-icon.svg" alt="bg-announcement-icon">
                                                                        </em>
                                                                    </div>
                                                                    <div class="update-description">
                                                                        <p class="description"> 
                                                                            <a href="#" title="Check Event">Late Submission for Hackathon Competition</a>
                                                                            : Hope this meets you well, this is to let you know that the date for the hackathon will not changed further. If you want to partake in this hackathon, please submit the following information
                                                                        </p>
                                                                        <span class="timestamp">1 hours ago</span>
                                                                    </div>
                                                                    <div class="update-actions">
                                                                        <div class="update-action-inner">
                                                                            <a href="#" title="Mark as Read" class="mark-read-text">Mark as read</a>
                                                                            <a href="#" title="Add to Starred Messages" class="star-msg">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12.0001 17.2717L16.1501 19.7817C16.9101 20.2417 17.8401 19.5617 17.6401 18.7017L16.5401 13.9817L20.2101 10.8017C20.8801 10.2217 20.5201 9.12172 19.6401 9.05172L14.8101 8.64172L12.9201 4.18172C12.5801 3.37172 11.4201 3.37172 11.0801 4.18172L9.19007 8.63172L4.36007 9.04172C3.48007 9.11172 3.12007 10.2117 3.79007 10.7917L7.46007 13.9717L6.36007 18.6917C6.16007 19.5517 7.09007 20.2317 7.85007 19.7717L12.0001 17.2717Z" fill="#B9B8B8"/>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="update-wrapper marked-read">
                                                                <div class="update">
                                                                    <div class="update-icon">
                                                                        <em class="icon">
                                                                            <img src="<?php echo $rootUrl ?>images/bg-user-icon.svg" alt="bg-user-icon">
                                                                        </em>
                                                                    </div>
                                                                    <div class="update-description">
                                                                        <p class="description">A new member, James Corden, has joined your team.
                                                                        </p>
                                                                        <span class="timestamp">3 hours ago</span>
                                                                    </div>
                                                                    <div class="update-actions">
                                                                        <div class="update-action-inner">
                                                                            <a href="#" title="Mark as Read" class="mark-read-text">Mark as read</a>
                                                                            <a href="#" title="Add to Starred Messages" class="star-msg">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12.0001 17.2717L16.1501 19.7817C16.9101 20.2417 17.8401 19.5617 17.6401 18.7017L16.5401 13.9817L20.2101 10.8017C20.8801 10.2217 20.5201 9.12172 19.6401 9.05172L14.8101 8.64172L12.9201 4.18172C12.5801 3.37172 11.4201 3.37172 11.0801 4.18172L9.19007 8.63172L4.36007 9.04172C3.48007 9.11172 3.12007 10.2117 3.79007 10.7917L7.46007 13.9717L6.36007 18.6917C6.16007 19.5517 7.09007 20.2317 7.85007 19.7717L12.0001 17.2717Z" fill="#B9B8B8"/>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-wrapper older-updates-btn-wrapper">
                                                    <a href="#" title="See older updates">See older updates</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-tab-content" data-target="tasks">
                                            Tasks
                                        </div>
                                        <div class="custom-tab-content" data-target="events">Events</div>
                                        <div class="custom-tab-content" data-target="files">
                                            Files
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-tab-content" data-target="submission">submission</div>
                        <div class="custom-tab-content" data-target="evaluation">evaluation</div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
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
<div class="modal fade all-team-members-modal join-modal" id="all-team-members-modal" tabindex="-1" aria-labelledby="all-team-members-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="h1">Team Members</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="member-search-form">
                    <div class="form-group">
                        <label></label>
                        <input class="form-control" placeholder="Type Email Address">
                    </div>
                    <div class="form-group btn-wrapper">
                        <a href="#" title="Send invite" class="btn primary-fill-btn">Send invite</a>
                    </div>
                    <div class="form-group has-search-btn">
                        <label></label>
                        <input class="form-control" placeholder="Search Existing Team Members">
                        <button type="submit" href="#" class="search-btn"></button>
                    </div>
                </div>
                <div class="members-listing-block">
                    <div class="white-card member-card">
                        <div class="card-body">
                            <div class="member-info-block">
                                <div class="image-text-wrapper">
                                    <em class="user-img">
                                        <img src="<?php echo $rootUrl ?>images/recent-user-icon.svg" alt="recent-user-icon">
                                    </em>
                                    <div class="user-info">
                                        <p class="name">Sam Phillips</p>
                                        <span class="role">Team Leader</span>
                                    </div>
                                </div>
                                <div class="member-actions-block">
                                    <div class="member-actions-wrapper">
                                        <div class="single-action-wrapper more-actions-popup-wrapper">
                                            <a href="#" class="single-action">
                                                <img src="<?php echo $rootUrl ?>images/more-actions-icon.svg" alt="more-actions-icon">
                                            </a>
                                            <div class="custom-tooltip-wrapper">
                                                <div class="custom-tooltip-inner">
                                                    <ul class="actions-listing">
                                                        <li>
                                                            <a href="#" title="Leave Team">Leave Team</a>
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
                    <div class="white-card member-card">
                        <div class="card-body">
                            <div class="member-info-block">
                                <div class="image-text-wrapper">
                                    <em class="user-img">
                                        <img src="<?php echo $rootUrl ?>images/recent-user-icon.svg" alt="recent-user-icon">
                                    </em>
                                    <div class="user-info">
                                        <p class="name">McLaren Susan</p>
                                        <span class="role">Mentor</span>
                                    </div>
                                </div>
                                <div class="member-actions-block">
                                    <div class="member-actions-wrapper">
                                        <div class="single-action-wrapper more-actions-popup-wrapper">
                                            <a href="#" class="single-action">
                                                <img src="<?php echo $rootUrl ?>images/more-actions-icon.svg" alt="more-actions-icon">
                                            </a>
                                            <div class="custom-tooltip-wrapper">
                                                <div class="custom-tooltip-inner">
                                                    <ul class="actions-listing">
                                                        <li>
                                                            <a href="#" title="Remove from team">Remove from team</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-action-wrapper">
                                            <a href="#" class="single-action">
                                                <img src="<?php echo $rootUrl ?>images/more-actions-icon.svg" alt="more-actions-icon">
                                            </a>
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


