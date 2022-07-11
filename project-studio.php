<?php include 'header.php'; ?>

<section class="master-layout-wrapper">
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
                            <li class="action-popup-wrapper add-link-wrapper">
                                <a href="#" class="action-link" title="Add">
                                    <em><img src="<?php echo $rootUrl ?>images/plus-icon-blue.svg" alt="Plus Icon"></em>
                                    Add
                                </a>
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
                            <a href="#" title="See all">
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
                                                <li><a href="#" title="Update" data-id="update">Update</a></li>
                                                <li><a href="#" title="Tasks" data-id="tasks">Tasks</a></li>
                                                <li><a href="#" title="Events" data-id="events">Events</a></li>
                                                <li class="active"><a href="#" title="Files" data-id="files">Files</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="custom-tab-content" data-target="update">update</div>
                                        <div class="custom-tab-content" data-target="tasks">
                                        <div class="white-card">
                                            <div class="custom-progrss-bar-wrapper">
                                                <div class="progress-bar-title">
                                                    <p class="title">Progress:</p>
                                                    <p class="message">You are almost there!</p>
                                                </div>
                                                <div class="progerss-bar">
                                                    <div class="progress-bar-inner" style='width:65%;' >
                                                        <span class="progress-value" data-progress-prcent="65">%</span>
                                                    </div>
                                                </div>
                                                <div class="progrss-date-wrapper">
                                                    <p>20th Jan,2022</p>
                                                </div>
                                            </div>
                                            <div class="table-control-strip">
                                                <div class="btn-wrapper">
                                                    <a href="#" class="btn blue-btn" title="Add Task">                                
                                                        Add Task
                                                    </a>
                                                </div>
                                                <div class="filter-block">
                                                    <div class="filter-block-wrapper">
                                                        <em class="filter-icon"><img src="<?php echo $rootUrl ?>images/filter-icon.svg" alt="filter-icon"></em>
                                                        <div class="form-group custom-filter-wrapper task-page-filter">
                                                            <select name="" id="table-filter" class="custom-select" multiple="multiple">
                                                                <option selected value="all">All</option>
                                                                <option value="unselect all">Unselect All</option>
                                                                <option value="completed">Completed</option>
                                                                <option value="ongoing">Ongoing</option>
                                                                <option value="future">Future</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-wrapper">
                                                <table id="task-studio-table" class="task-studio-table responsive dt-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th class="blank no-sort" data-priority="-4"></th>
                                                            <th data-priority="0" class="no-sort">Name</th>
                                                            <th data-priority="2" class="no-sort">Task Description</th>
                                                            <th data-priority="0" class="no-sort uploaded-by">Assigned To</th>
                                                            <th data-priority="-1" class="due-date-sorting">Due Date</th>
                                                            <th data-priority="-2" class="no-sort">Status</th>
                                                            <th data-priority="-1" class="no-sort">Actions</th>                    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>  
                                                            <td class="blank"></td>                
                                                            <td>
                                                                <span class="title-text has-popup" data-bs-target="#create-campaign-modal" data-bs-toggle="modal">Create Campaign</span>
                                                            </td>
                                                            <td>
                                                                <p class="descritpion">Use canva to create a template key activities, partners etc.</p>
                                                            </td>
                                                            <td>
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            
                                                            <td>
                                                                <!-- status dropdown -->
                                                                <div class="form-group task-status-dropdown overdue">
                                                                    <select name="" id="select-a" class="custom-select">
                                                                        <option value="Overdue">Overdue</option>
                                                                        <option value="Not Started">Not Started</option>
                                                                        <option value="In Progress">In Progress</option>
                                                                        <option value="In Review">In Review</option>
                                                                        <option value="Completed">Completed</option>
                                                                    </select>
                                                                </div>

                                                            </td>
                                                            <td class="has-action-list">
                                                                <!-- actions list -->
                                                                <ul class="tasks-actions-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em class="badge-wrapper">
                                                                                <span class="black-badge">5</span>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Clip">
                                                                            <em class="badge-wrapper">
                                                                                <span class="black-badge">4</span>
                                                                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M8.74992 4.9987V14.582C8.74992 16.4237 7.25825 17.9154 5.41659 17.9154C3.57492 17.9154 2.08325 16.4237 2.08325 14.582V4.16536C2.08325 3.61283 2.30275 3.08293 2.69345 2.69223C3.08415 2.30152 3.61405 2.08203 4.16659 2.08203C4.71912 2.08203 5.24902 2.30152 5.63972 2.69223C6.03043 3.08293 6.24992 3.61283 6.24992 4.16536V12.9154C6.24992 13.3737 5.87492 13.7487 5.41659 13.7487C4.95825 13.7487 4.58325 13.3737 4.58325 12.9154V4.9987H3.33325V12.9154C3.33325 13.4679 3.55275 13.9978 3.94345 14.3885C4.33415 14.7792 4.86405 14.9987 5.41659 14.9987C5.96912 14.9987 6.49902 14.7792 6.88972 14.3885C7.28043 13.9978 7.49992 13.4679 7.49992 12.9154V4.16536C7.49992 2.3237 6.00825 0.832031 4.16659 0.832031C2.32492 0.832031 0.833252 2.3237 0.833252 4.16536V14.582C0.833252 17.1154 2.88325 19.1654 5.41659 19.1654C7.94992 19.1654 9.99992 17.1154 9.99992 14.582V4.9987H8.74992Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                                            <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                                                <em>
                                                                                    <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                                    </svg>
                                                                                </em>
                                                                            </a>
                                                                            <div class="custom-tooltip-wrapper">
                                                                                <div class="custom-tooltip-inner">
                                                                                    <ul class="actions-listing">
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/edit-icon-blue.svg" alt="edit-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Edit">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/duplicate-icon-blue.svg" alt="duplicate-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Duplicate">Duplicate</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                                            </em>
                                                                                            <a href="#" title="Delete">Delete</span></a>
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
                                                            <td class="blank"></td>                 
                                                            <td>
                                                                <span class="title-text has-popup">Create business plan template</span>
                                                            </td>
                                                            <td>
                                                                <p class="descritpion">Use canva to create a template key activities, partners etc.</p>
                                                            </td>
                                                            <td>
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            
                                                            <td>
                                                                <!-- status dropdown -->
                                                                <div class="form-group task-status-dropdown in-review">
                                                                    <select name="" id="select-b" class="custom-select">
                                                                        <option value="In Review">In Review</option>
                                                                        <option value="Not Started">Not Started</option>
                                                                        <option value="In Progress">In Progress</option>
                                                                        <option value="Completed">Completed</option>
                                                                        <option value="Overdue">Overdue</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td class="has-action-list">
                                                                <!-- actions list -->
                                                                <ul class="tasks-actions-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Clip">
                                                                            <em>
                                                                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M8.74992 4.9987V14.582C8.74992 16.4237 7.25825 17.9154 5.41659 17.9154C3.57492 17.9154 2.08325 16.4237 2.08325 14.582V4.16536C2.08325 3.61283 2.30275 3.08293 2.69345 2.69223C3.08415 2.30152 3.61405 2.08203 4.16659 2.08203C4.71912 2.08203 5.24902 2.30152 5.63972 2.69223C6.03043 3.08293 6.24992 3.61283 6.24992 4.16536V12.9154C6.24992 13.3737 5.87492 13.7487 5.41659 13.7487C4.95825 13.7487 4.58325 13.3737 4.58325 12.9154V4.9987H3.33325V12.9154C3.33325 13.4679 3.55275 13.9978 3.94345 14.3885C4.33415 14.7792 4.86405 14.9987 5.41659 14.9987C5.96912 14.9987 6.49902 14.7792 6.88972 14.3885C7.28043 13.9978 7.49992 13.4679 7.49992 12.9154V4.16536C7.49992 2.3237 6.00825 0.832031 4.16659 0.832031C2.32492 0.832031 0.833252 2.3237 0.833252 4.16536V14.582C0.833252 17.1154 2.88325 19.1654 5.41659 19.1654C7.94992 19.1654 9.99992 17.1154 9.99992 14.582V4.9987H8.74992Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                                            <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                                                <em>
                                                                                    <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                                    </svg>
                                                                                </em>
                                                                            </a>
                                                                            <div class="custom-tooltip-wrapper">
                                                                                <div class="custom-tooltip-inner">
                                                                                    <ul class="actions-listing">
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/edit-icon-blue.svg" alt="edit-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Edit">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/duplicate-icon-blue.svg" alt="duplicate-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Duplicate">Duplicate</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                                            </em>
                                                                                            <a href="#" title="Delete">Delete</span></a>
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
                                                            <td class="blank"></td>               
                                                            <td>
                                                                <span class="title-text">Create Campaign</span>
                                                            </td>
                                                            <td>
                                                                <p class="descritpion">Use canva to create a template key activities, partners etc.</p>
                                                            </td>
                                                            <td>
                                                                <div class="image-text-wrapper">
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
                                                                20/01/2022
                                                            </td>
                                                            
                                                            <td>
                                                                <!-- status dropdown -->
                                                                <div class="form-group task-status-dropdown overdue">
                                                                    <select name="" id="select-c" class="custom-select">
                                                                        <option value="Overdue">Overdue</option>
                                                                        <option value="Not Started">Not Started</option>
                                                                        <option value="In Progress">In Progress</option>
                                                                        <option value="In Review">In Review</option>
                                                                        <option value="Completed">Completed</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td class="has-action-list">
                                                                <!-- actions list -->
                                                                <ul class="tasks-actions-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em class="badge-wrapper">
                                                                                <span class="black-badge">9</span>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Clip">
                                                                            <em>
                                                                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M8.74992 4.9987V14.582C8.74992 16.4237 7.25825 17.9154 5.41659 17.9154C3.57492 17.9154 2.08325 16.4237 2.08325 14.582V4.16536C2.08325 3.61283 2.30275 3.08293 2.69345 2.69223C3.08415 2.30152 3.61405 2.08203 4.16659 2.08203C4.71912 2.08203 5.24902 2.30152 5.63972 2.69223C6.03043 3.08293 6.24992 3.61283 6.24992 4.16536V12.9154C6.24992 13.3737 5.87492 13.7487 5.41659 13.7487C4.95825 13.7487 4.58325 13.3737 4.58325 12.9154V4.9987H3.33325V12.9154C3.33325 13.4679 3.55275 13.9978 3.94345 14.3885C4.33415 14.7792 4.86405 14.9987 5.41659 14.9987C5.96912 14.9987 6.49902 14.7792 6.88972 14.3885C7.28043 13.9978 7.49992 13.4679 7.49992 12.9154V4.16536C7.49992 2.3237 6.00825 0.832031 4.16659 0.832031C2.32492 0.832031 0.833252 2.3237 0.833252 4.16536V14.582C0.833252 17.1154 2.88325 19.1654 5.41659 19.1654C7.94992 19.1654 9.99992 17.1154 9.99992 14.582V4.9987H8.74992Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                                            <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                                                <em>
                                                                                    <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                                    </svg>
                                                                                </em>
                                                                            </a>
                                                                            <div class="custom-tooltip-wrapper">
                                                                                <div class="custom-tooltip-inner">
                                                                                    <ul class="actions-listing">
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/edit-icon-blue.svg" alt="edit-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Edit">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/duplicate-icon-blue.svg" alt="duplicate-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Duplicate">Duplicate</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                                            </em>
                                                                                            <a href="#" title="Delete">Delete</span></a>
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
                                                            <td class="blank"></td>               
                                                            <td>
                                                                <span class="title-text has-popup" data-bs-target="#create-campaign-modal" data-bs-toggle="modal">Create business plan template</span>
                                                            </td>
                                                            <td>
                                                                <p class="descritpion">Use canva to create a template key activities, partners etc.</p>
                                                            </td>
                                                            <td>
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            
                                                            <td>
                                                                <!-- status dropdown -->
                                                                <div class="form-group task-status-dropdown not-started">
                                                                    <select name="" id="select-d" class="custom-select">
                                                                        <option value="Not Started">Not Started</option>
                                                                        <option value="In Progress">In Progress</option>
                                                                        <option value="In Review">In Review</option>
                                                                        <option value="Completed">Completed</option>
                                                                        <!-- <option value="Overdue">Overdue</option> -->
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td class="has-action-list">
                                                                <!-- actions list -->
                                                                <ul class="tasks-actions-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Clip">
                                                                            <em>
                                                                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M8.74992 4.9987V14.582C8.74992 16.4237 7.25825 17.9154 5.41659 17.9154C3.57492 17.9154 2.08325 16.4237 2.08325 14.582V4.16536C2.08325 3.61283 2.30275 3.08293 2.69345 2.69223C3.08415 2.30152 3.61405 2.08203 4.16659 2.08203C4.71912 2.08203 5.24902 2.30152 5.63972 2.69223C6.03043 3.08293 6.24992 3.61283 6.24992 4.16536V12.9154C6.24992 13.3737 5.87492 13.7487 5.41659 13.7487C4.95825 13.7487 4.58325 13.3737 4.58325 12.9154V4.9987H3.33325V12.9154C3.33325 13.4679 3.55275 13.9978 3.94345 14.3885C4.33415 14.7792 4.86405 14.9987 5.41659 14.9987C5.96912 14.9987 6.49902 14.7792 6.88972 14.3885C7.28043 13.9978 7.49992 13.4679 7.49992 12.9154V4.16536C7.49992 2.3237 6.00825 0.832031 4.16659 0.832031C2.32492 0.832031 0.833252 2.3237 0.833252 4.16536V14.582C0.833252 17.1154 2.88325 19.1654 5.41659 19.1654C7.94992 19.1654 9.99992 17.1154 9.99992 14.582V4.9987H8.74992Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                                            <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                                                <em>
                                                                                    <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                                    </svg>
                                                                                </em>
                                                                            </a>
                                                                            <div class="custom-tooltip-wrapper">
                                                                                <div class="custom-tooltip-inner">
                                                                                    <ul class="actions-listing">
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/edit-icon-blue.svg" alt="edit-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Edit">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/duplicate-icon-blue.svg" alt="duplicate-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Duplicate">Duplicate</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                                            </em>
                                                                                            <a href="#" title="Delete">Delete</span></a>
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
                                                            <td class="blank"></td>                  
                                                            <td>
                                                                <span class="title-text has-popup" data-bs-target="#create-campaign-modal" data-bs-toggle="modal">Create business plan template</span>
                                                            </td>
                                                            <td>
                                                                <p class="descritpion">Use canva to create a template key activities, partners etc.</p>
                                                            </td>
                                                            <td>
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            
                                                            <td>
                                                                <!-- status dropdown -->
                                                                <div class="form-group task-status-dropdown in-progress">
                                                                    <select name="" id="select-e" class="custom-select">
                                                                        <option value="In Progress">In Progress</option>
                                                                        <option value="Not Started">Not Started</option>
                                                                        <option value="In Review">In Review</option>
                                                                        <option value="Completed">Completed</option>
                                                                        <option value="Overdue">Overdue</option>
                                                                    </select>
                                                                </div>

                                                            </td>
                                                            <td class="has-action-list">
                                                                <!-- actions list -->
                                                                <ul class="tasks-actions-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Clip">
                                                                            <em>
                                                                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M8.74992 4.9987V14.582C8.74992 16.4237 7.25825 17.9154 5.41659 17.9154C3.57492 17.9154 2.08325 16.4237 2.08325 14.582V4.16536C2.08325 3.61283 2.30275 3.08293 2.69345 2.69223C3.08415 2.30152 3.61405 2.08203 4.16659 2.08203C4.71912 2.08203 5.24902 2.30152 5.63972 2.69223C6.03043 3.08293 6.24992 3.61283 6.24992 4.16536V12.9154C6.24992 13.3737 5.87492 13.7487 5.41659 13.7487C4.95825 13.7487 4.58325 13.3737 4.58325 12.9154V4.9987H3.33325V12.9154C3.33325 13.4679 3.55275 13.9978 3.94345 14.3885C4.33415 14.7792 4.86405 14.9987 5.41659 14.9987C5.96912 14.9987 6.49902 14.7792 6.88972 14.3885C7.28043 13.9978 7.49992 13.4679 7.49992 12.9154V4.16536C7.49992 2.3237 6.00825 0.832031 4.16659 0.832031C2.32492 0.832031 0.833252 2.3237 0.833252 4.16536V14.582C0.833252 17.1154 2.88325 19.1654 5.41659 19.1654C7.94992 19.1654 9.99992 17.1154 9.99992 14.582V4.9987H8.74992Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                                            <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                                                <em>
                                                                                    <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                                    </svg>
                                                                                </em>
                                                                            </a>
                                                                            <div class="custom-tooltip-wrapper">
                                                                                <div class="custom-tooltip-inner">
                                                                                    <ul class="actions-listing">
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/edit-icon-blue.svg" alt="edit-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Edit">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/duplicate-icon-blue.svg" alt="duplicate-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Duplicate">Duplicate</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                                            </em>
                                                                                            <a href="#" title="Delete">Delete</span></a>
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
                                                            <td class="blank"></td>                
                                                            <td>
                                                                <span class="title-text has-popup" data-bs-target="#create-campaign-modal" data-bs-toggle="modal">Create business plan template</span>
                                                            </td>
                                                            <td>
                                                                <p class="descritpion">Use canva to create a template key activities, partners etc.</p>
                                                            </td>
                                                            <td>
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            
                                                            <td>
                                                                <!-- status dropdown -->
                                                                <div class="form-group task-status-dropdown completed">
                                                                    <select name="" id="select-f" class="custom-select">
                                                                        <option value="Completed">Completed</option>
                                                                        <option value="Not Started">Not Started</option>
                                                                        <option value="In Progress">In Progress</option>
                                                                        <option value="In Review">In Review</option>
                                                                        <option value="Overdue">Overdue</option>
                                                                    </select>
                                                                </div>

                                                            </td>
                                                            <td class="has-action-list">
                                                                <!-- actions list -->
                                                                <ul class="tasks-actions-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Clip">
                                                                            <em class="badge-wrapper">
                                                                                <span class="black-badge">6</span>
                                                                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M8.74992 4.9987V14.582C8.74992 16.4237 7.25825 17.9154 5.41659 17.9154C3.57492 17.9154 2.08325 16.4237 2.08325 14.582V4.16536C2.08325 3.61283 2.30275 3.08293 2.69345 2.69223C3.08415 2.30152 3.61405 2.08203 4.16659 2.08203C4.71912 2.08203 5.24902 2.30152 5.63972 2.69223C6.03043 3.08293 6.24992 3.61283 6.24992 4.16536V12.9154C6.24992 13.3737 5.87492 13.7487 5.41659 13.7487C4.95825 13.7487 4.58325 13.3737 4.58325 12.9154V4.9987H3.33325V12.9154C3.33325 13.4679 3.55275 13.9978 3.94345 14.3885C4.33415 14.7792 4.86405 14.9987 5.41659 14.9987C5.96912 14.9987 6.49902 14.7792 6.88972 14.3885C7.28043 13.9978 7.49992 13.4679 7.49992 12.9154V4.16536C7.49992 2.3237 6.00825 0.832031 4.16659 0.832031C2.32492 0.832031 0.833252 2.3237 0.833252 4.16536V14.582C0.833252 17.1154 2.88325 19.1654 5.41659 19.1654C7.94992 19.1654 9.99992 17.1154 9.99992 14.582V4.9987H8.74992Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                                            <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                                                <em>
                                                                                    <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1.99992 3.66536C2.91658 3.66536 3.66658 2.91536 3.66658 1.9987C3.66658 1.08203 2.91658 0.332031 1.99992 0.332031C1.08325 0.332031 0.333252 1.08203 0.333252 1.9987C0.333252 2.91536 1.08325 3.66536 1.99992 3.66536ZM1.99992 5.33203C1.08325 5.33203 0.333252 6.08203 0.333252 6.9987C0.333252 7.91536 1.08325 8.66536 1.99992 8.66536C2.91658 8.66536 3.66658 7.91536 3.66658 6.9987C3.66658 6.08203 2.91658 5.33203 1.99992 5.33203ZM1.99992 10.332C1.08325 10.332 0.333252 11.082 0.333252 11.9987C0.333252 12.9154 1.08325 13.6654 1.99992 13.6654C2.91658 13.6654 3.66658 12.9154 3.66658 11.9987C3.66658 11.082 2.91658 10.332 1.99992 10.332Z" fill="#747272"/>
                                                                                    </svg>
                                                                                </em>
                                                                            </a>
                                                                            <div class="custom-tooltip-wrapper">
                                                                                <div class="custom-tooltip-inner">
                                                                                    <ul class="actions-listing">
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/edit-icon-blue.svg" alt="edit-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Edit">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/duplicate-icon-blue.svg" alt="duplicate-icon-blue">
                                                                                            </em>
                                                                                            <a href="#" title="Duplicate">Duplicate</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                                            </em>
                                                                                            <a href="#" title="Delete">Delete</span></a>
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
                                        <div class="custom-tab-content" data-target="events">events</div>
                                        <div class="custom-tab-content active" data-target="files">
                                        <div class="white-card">
                                            <div class="btn-wrapper">
                                                <a href="#" class="btn blue-btn" title="Add File">                                
                                                    Add File
                                                </a>
                                                <a href="#" class="btn blue-btn" title="Create Folder">                                
                                                    Create Folder
                                                </a>
                                            </div>
                                            <div class="table-wrapper">
                                                <table id="page-studio-table" class="dt-responsive responsive page-studio-table">
                                                    <thead>
                                                        <tr>
                                                            <th data-priority="-3">
                                                                <div class="checkbox-wrapper form-group">
                                                                    <input type="checkbox" id="table-checkbox-1" class="form-check-input form-control select-all">
                                                                    <label for="table-checkbox-1"></label>
                                                                </div>
                                                            </th>
                                                            <th class="has-image" data-priority="-2"></th>
                                                            <th data-priority="-1">Name</th>
                                                            <th data-priority="0" class="uploaded-by">Uploaded By</th>
                                                            <th data-priority="-1">Upload Date</th>
                                                            <th data-priority="2">Type</th>
                                                            <th data-priority="-3">Size</th>                    
                                                            <th data-priority="2">Associated Tasks</th>
                                                            <th data-priority="-3" class="has-action-list">
                                                                <ul class="action-list">
                                                                    <li></li>
                                                                    <li>
                                                                        <em>
                                                                            <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#B9B8B8"/>
                                                                            </svg>
                                                                        </em>
                                                                    </li>
                                                                    <li>
                                                                        <em>
                                                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#B9B8B8"/>
                                                                            </svg>
                                                                        </em>
                                                                    </li>
                                                                </ul>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-checkbox-wrapper checkbox-wrapper form-group">
                                                                    <input type="checkbox" id="table-checkbox-2" class="form-check-input form-control">
                                                                    <label for="table-checkbox-2"></label>
                                                                </div>
                                                            </td>
                                                            <td class="has-image">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/pdf.svg" width="20px" style="width:20px !important;" alt="pdf">
                                                                </em>
                                                            </td>                   
                                                            <td>
                                                                <span class="title-text has-popup" data-bs-target="#bussiness-template-modal" data-bs-toggle="modal">Project Brief</span>
                                                                <p class="description">Project description and other n</p>
                                                            </td>
                                                            <td class="uploaded-by">
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            <td>
                                                                PNG
                                                            </td>
                                                            <td>
                                                                1MB
                                                            </td>
                                                            <td>
                                                                -
                                                            </td>
                                                            <td class="has-action-list">
                                                                <ul class="action-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Download">
                                                                            <em>
                                                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action delete-action" href="#" title="Delete">
                                                                            <em>
                                                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-wrapper form-group">
                                                                    <input type="checkbox" id="table-checkbox-3" class="form-check-input form-control">
                                                                    <label for="table-checkbox-3"></label>
                                                                </div>
                                                            </td>
                                                            <td class="has-image">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/jpg.svg" width="20px" style="width:20px !important;" alt="jpg">
                                                                </em>
                                                            </td>
                                                            <td>
                                                                <span class="title-text">Business Template Infographics</span>
                                                                <p class="description">Infographics highlighting the different sys...</p>
                                                            </td>
                                                            <td class="uploaded-by">
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            <td>
                                                                PNG
                                                            </td>
                                                            <td>
                                                                1MB
                                                            </td>
                                                            <td>
                                                                Create bussiness plan template
                                                            </td>
                                                            <td class="has-action-list">
                                                                <ul class="action-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Download">
                                                                            <em>
                                                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action delete-action" href="#" title="Delete">
                                                                            <em>
                                                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class="has-inner-table">
                                                            <td>
                                                                <div class="checkbox-wrapper form-group">
                                                                    <input type="checkbox" id="table-checkbox-4" class="form-check-input form-control">
                                                                    <label for="table-checkbox-4"></label>
                                                                </div>
                                                            </td>
                                                            <td class="has-image accordian-toggle">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/folder.svg" width="20px" style="width:20px !important;" alt="folder">
                                                                </em>
                                                            </td>
                                                            <td class="accordian-toggle">
                                                                <span class="title-text">Screenshots</span>
                                                                <p class="description">Market research for competitor products</p>
                                                            </td>
                                                            <td class="accordian-toggle uploaded-by">
                                                                <div class="image-text-wrapper">
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
                                                            <td class="accordian-toggle">
                                                                20/01/2022
                                                            </td>
                                                            <td class="accordian-toggle">
                                                                Folder
                                                            </td>
                                                            <td class="accordian-toggle">
                                                                105MB
                                                            </td>
                                                            <td class="accordian-toggle">
                                                                -
                                                            </td>
                                                            <td class="has-action-list accordian-toggle">
                                                                <ul class="action-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Download">
                                                                            <em>
                                                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action delete-action" href="#" title="Delete">
                                                                            <em>
                                                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-wrapper form-group">
                                                                    <input type="checkbox" id="table-checkbox-5" class="form-check-input form-control">
                                                                    <label for="table-checkbox-5"></label>
                                                                </div>
                                                            </td>
                                                            <td class="has-image">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/sheets.svg" width="20px" style="width:20px !important;" alt="sheets">
                                                                </em>
                                                            </td>
                                                            <td>
                                                                <span class="title-text">Social Media Copywriting Content</span>
                                                                <p class="description">Copywriting for social media strategy</p>
                                                            </td>
                                                            <td class="uploaded-by">
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            <td>
                                                                Sheets
                                                            </td>
                                                            <td>
                                                                1MB
                                                            </td>
                                                            <td>
                                                                -
                                                            </td>
                                                            <td class="has-action-list">
                                                                <ul class="action-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Download">
                                                                            <em>
                                                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action delete-action" href="#" title="Delete">
                                                                            <em>
                                                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-wrapper form-group">
                                                                    <input type="checkbox" id="table-checkbox-6" class="form-check-input form-control">
                                                                    <label for="table-checkbox-6"></label>
                                                                </div>
                                                            </td>
                                                            <td class="has-image">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/powerpoint.svg" width="20px" style="width:20px !important;" alt="powerpoint">
                                                                </em>
                                                            </td>
                                                            <td class="uploaded-by">
                                                                <span class="title-text">Social Media Post</span>
                                                                <p class="description">Social Media Post</p>
                                                            </td>
                                                            <td>
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            <td>
                                                                PPTx
                                                            </td>
                                                            <td>
                                                                1MB
                                                            </td>
                                                            <td>
                                                                -
                                                            </td>
                                                            <td class="has-action-list">
                                                                <ul class="action-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Download">
                                                                            <em>
                                                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action delete-action" href="#" title="Delete">
                                                                            <em>
                                                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-wrapper form-group">
                                                                    <input type="checkbox" id="table-checkbox-7" class="form-check-input form-control">
                                                                    <label for="table-checkbox-7"></label>
                                                                </div>
                                                            </td>
                                                            <td class="has-image">
                                                                <em>
                                                                    <img src="<?php echo $rootUrl ?>images/mp4.svg" width="20px" style="width:20px !important;" alt="mp4">
                                                                </em>
                                                            </td>
                                                            <td>
                                                                <span class="title-text">Conference Documentation</span>
                                                                <p class="description">Videos of keynote speeches given during t...</p>
                                                            </td>
                                                            <td class="uploaded-by">
                                                                <div class="image-text-wrapper">
                                                                    <em>
                                                                        <img src="<?php echo $rootUrl ?>images/profile-icon.png" alt="profile-icon">
                                                                    </em>
                                                                    <span class="title-text">Sam Philips</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20/01/2022
                                                            </td>
                                                            <td>
                                                                MP4
                                                            </td>
                                                            <td>
                                                                1MB
                                                            </td>
                                                            <td>
                                                                -
                                                            </td>
                                                            <td class="has-action-list">
                                                                <ul class="action-list">
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Message">
                                                                            <em class="badge-wrapper">
                                                                                <span class="black-badge">2</span>
                                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="row-action" href="#" title="Download">
                                                                            <em>
                                                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/>
                                                                                </svg>
                                                                            </em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="delete-popup-wrapper table-popup-wrapper">
                                                                            <a class="row-action delete-action popup-open-link" href="#" title="Delete">
                                                                                <em>
                                                                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/>
                                                                                    </svg>
                                                                                </em>
                                                                            </a>
                                                                            <div class="custom-tooltip-wrapper">
                                                                                <div class="custom-tooltip-inner">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <!-- <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                                            </em> -->
                                                                                            <a href="#">Delete folder <span class="bold-text">and all items in the folder</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <em class="icon">
                                                                                                <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                                            </em>
                                                                                            <a href="#">Delete folder <span class="bold-text">and move items out of the folder</span></a>
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
<div class="modal fade template-modal" id="template-modal" tabindex="-1" aria-labelledby="templatemodal-label" aria-hidden="true">
  	<div class="modal-dialog large-modal">
	    <div class="modal-content">
	    	<div class="modal-header justify-content-center">
		        <h4 class="h1">Templates</h4>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
		    <div class="modal-body">
		    	<div class="search-dropdown-wrapper">
		    		<div class="row">
		    			<div class="col-md-6">
		    				<div class="custom-dropdown form-group">
		    					<h5 class="dropdown-toggle" data-bs-toggle="dropdown">
							      Filter: <span class="dropdown-title"> Please Choose</span>
							    </h5>
							    <ul class="dropdown-menu">
							      <li class="active"><a class="dropdown-item" href="#">Fintech 1</a></li>
							      <li><a class="dropdown-item" href="#">Fintech 2</a></li>
							      <li><a class="dropdown-item" href="#">Fintech 3</a></li>
							    </ul>
		    				</div>
		    			</div>
		    			<div class="col-md-6">
		    				<div class="form-group has-search-btn">
		    					<label></label>
								<input class="form-control" placeholder="Search">
								<button type="submit" href="#" class="search-btn"></button>
		    				</div>
		    			</div>
		    		</div>
                </div>
                <div class="card-list-overflow-block">
                    <div class="card-list-wrapper custom-card-list-block template-card-slider">
                        <div class="card-wrapper">
                            <div class="white-card has-light-blue-border template-card">
                                <div class="card-header-grey">
                                    <span class="h2 card-blue-title">This is designed to accept fifty characters in all</span>
                                </div>
                                <div class="card-body">
                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                    <div class="template-btn-wrapper">
                                        <a  href="#" title="Select" class="btn">Select</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="white-card has-light-blue-border template-card">
                                <div class="card-header-grey">
                                    <span class="h2 card-blue-title">This is designed to accept fifty characters in all</span>
                                </div>
                                <div class="card-body">
                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                    <div class="template-btn-wrapper">
                                        <a  href="#" title="Select" class="btn">Select</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="white-card has-light-blue-border template-card">
                                <div class="card-header-grey">
                                    <span class="h2 card-blue-title">This is designed to accept fifty characters in all</span>
                                </div>
                                <div class="card-body">
                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                    <div class="template-btn-wrapper">
                                        <a  href="#" title="Select" class="btn">Select</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="white-card has-light-blue-border template-card">
                                <div class="card-header-grey">
                                    <span class="h2 card-blue-title">This is designed to accept fifty characters in all</span>
                                </div>
                                <div class="card-body">
                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                    <div class="template-btn-wrapper">
                                        <a  href="#" title="Select" class="btn">Select</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="modal-footer">
				<div class="modal-footer-inner">
					<div class="modal-btn-wrapper">
						<a href="#" title="Create new" class="btn primary-fill-btn">Create new</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade apply-modal" id="apply-modal" tabindex="-1" aria-labelledby="applymodal-label" aria-hidden="true">
    <div class="modal-dialog medium-modal initial-step modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">Apply</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content-wrapper">                    
                    <div class="tabbing-outer-wrapper">    
                        <div class="tab-content">
                            <p>What role would you like to apply to?</p>
                                          
                            <ul class="tabbing-header-wrapper">                            
                                <li>
                                    <a href="#" title="Participant" data-id="Participant">
                                        <em>
                                            <img src="<?php echo $rootUrl?>images/apply-modal-user-icon.svg" alt="user-icon">
                                        </em>
                                        <span>Participant</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Mentor" data-id="Mentor">
                                        <em>
                                            <img src="<?php echo $rootUrl?>images/mentor-icon.svg" alt="mentor-icon">
                                        </em>
                                        <span>Mentor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Judge" data-id="Judge">
                                        <em>
                                            <img src="<?php echo $rootUrl?>images/judge-icon.svg" alt="judge-icon">
                                        </em>
                                        <span>Judge</span>
                                    </a>
                                </li>
                            </ul>
                        </div>  
                        <div class="tabbing-content-wrapper">
                            <div class="tab-wrapper" data-attr="Participant">
                                <p>Answer the screening questions below</p>
                                <div class="form-wrapper">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="about-yourself">Tell us a bit about yourself</label>
                                            <textarea id="about-yourself" class="form-control" placeholder="Type your answer here"></textarea>
                                            <div class="word-wrapper">
                                                <p>Words remaining: <span>200</span></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="part-of-project">Why do you want to be a part of this project?</label>
                                            <textarea id="part-of-project" class="form-control" placeholder="Type your answer here"></textarea>
                                            <div class="word-wrapper">
                                                <p>Words remaining: <span>200</span></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>                                
                            </div>
                            <div class="tab-wrapper" data-attr="Mentor">
                                <p>Answer the screening questions below</p>
                                <div class="form-wrapper">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="about-yourself">Tell us a bit about yourself</label>
                                            <textarea id="about-yourself" class="form-control" placeholder="Type your answer here"></textarea>
                                            <div class="word-wrapper">
                                                <p>Words remaining: <span>200</span></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="part-of-project">Why do you want to be a part of this project?</label>
                                            <textarea id="part-of-project" class="form-control" placeholder="Type your answer here"></textarea>
                                            <div class="word-wrapper">
                                                <p>Words remaining: <span>200</span></p>
                                            </div>
                                        </div>
                                    </form>
                                </div> 
                            </div>
                            <div class="tab-wrapper" data-attr="Judge">                                
                                <p>Answer the screening questions below</p>
                                <div class="form-wrapper">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="about-yourself">Tell us a bit about yourself</label>
                                            <textarea id="about-yourself" class="form-control" placeholder="Type your answer here"></textarea>
                                            <div class="word-wrapper">
                                                <p>Words remaining: <span>200</span></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="part-of-project">Why do you want to be a part of this project?</label>
                                            <textarea id="part-of-project" class="form-control" placeholder="Type your answer here"></textarea>
                                            <div class="word-wrapper">
                                                <p>Words remaining: <span>200</span></p>
                                            </div>
                                        </div>
                                    </form>
                                </div> 
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>    
            <div class="modal-footer">
                <div class="modal-footer-inner modal-btn-wrapper">
                    <a href="#" title="Back" class="back-btn">Back</a>
                    <div class="btn-wrapper">
                        <a href="#" title="Save Draft" class="btn">Save Draft</a>
                        <a href="#" title="Next" class="btn primary-fill-btn btn-next" data-bs-toggle="modal" data-bs-target="#success-modal">Next</a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade template-modal success-modal" id="success-modal" tabindex="-1" aria-labelledby="successmodal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">Application submitted</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body-inner">
                    <p>
                        <span>Thank you for applying!</span>
                        You will hear back in a maximum of two weeks.</p>
                    <em><img src="<?php echo $rootUrl ?>images/true-mark-icon.svg" alt="true-mark-icon"></em>
                </div>
            </div>
            <div class="modal-footer">
                <div class="modal-footer-inner">
                    <div class="modal-btn-wrapper">
                        <a href="#" title="close-btn" class="btn primary-fill-btn" data-bs-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade join-modal" id="join-modal" tabindex="-1" aria-labelledby="join-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">Join this project</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>How do you want to be a part of a team?</p>
                <div class="form-wrapper">  
                    <div class="form-group radio-wrapper">
                        <div class="tooltip-wrapper">
                            <input type="radio" id="create-team" name="join-options" value="create-team" >
                            <label for="create-team">Create a team
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>
                            </label>  
                        </div>
                        <div class="inner-feild-wrapper">
                            <div class="form-group">
                                <label for="team-name">Team name</label>
                                <input type="text" id="team-name" class="form-control" placeholder="Team name">
                            </div>
                        </div>                             
                    </div>
                    <div class="form-group radio-wrapper">
                        <div class="tooltip-wrapper">
                            <input type="radio" id="join-team"  name="join-options" value="join-team" >
                            <label for="join-team">Join a team
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>                              
                            </label>  
                        </div>
                        <div class="inner-feild-wrapper">
                            <div class="form-group">
                                <label for="team-name">Team name</label>
                                <input type="text" id="team-name" class="form-control" placeholder="Team name">
                            </div>
                        </div>                              
                    </div>
                    <div class="form-group radio-wrapper">
                        <div class="tooltip-wrapper">
                            <input type="radio" id="wait-to-assigned"  name="join-options" value="wait-to-assigned" >
                            <label for="wait-to-assigned">Wait to be randomly assigned  
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a> 
                            </label>                             
                        </div>                            
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="modal-footer-inner">
                    <div class="modal-btn-wrapper">
                        <a href="#" title="Create Team" class="btn primary-fill-btn create-btn" data-bs-dismiss="modal">Create Team</a>
                        <a href="#" title="continue" class="btn primary-fill-btn" data-bs-dismiss="modal">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade call-modal" id="call-modal" tabindex="-1" aria-labelledby="call-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="h1">Team members</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="all-select-wrapper">
                    <div class="checkbox-wrapper form-group">
                        <input type="checkbox" id="select-all" class="form-check-input form-control">
                        <label for="select-all">Select all</label>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-1" class="form-check-input form-control">
                            <label for="member-1">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="call">
                            <img src="<?php echo $rootUrl ?>images/video-icon-filled.svg" alt="Video Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-2" class="form-check-input form-control">
                            <label for="member-2">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="call">
                            <img src="<?php echo $rootUrl ?>images/video-icon-filled.svg" alt="Video Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-3" class="form-check-input form-control">
                            <label for="member-3">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="call">
                            <img src="<?php echo $rootUrl ?>images/video-icon-filled.svg" alt="Video Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-4" class="form-check-input form-control">
                            <label for="member-4">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="call">
                            <img src="<?php echo $rootUrl ?>images/video-icon-filled.svg" alt="Video Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-5" class="form-check-input form-control">
                            <label for="member-5">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="call">
                            <img src="<?php echo $rootUrl ?>images/video-icon-filled.svg" alt="Video Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-6" class="form-check-input form-control">
                            <label for="member-6">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="call">
                            <img src="<?php echo $rootUrl ?>images/video-icon-filled.svg" alt="Video Icon">
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <div class="modal-footer-inner">
                    <div class="modal-btn-wrapper">
                        <a href="#" title="Schedule" class="btn create-btn blue-btn" data-bs-dismiss="modal">Schedule</a>
                        <a href="#" title="Call" class="btn primary-fill-btn" data-bs-dismiss="modal">Call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade call-modal message-modal" id="message-modal" tabindex="-1" aria-labelledby="message-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="h1">Team members</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="all-select-wrapper">
                    <div class="checkbox-wrapper form-group">
                        <input type="checkbox" id="select-all" class="form-check-input form-control">
                        <label for="select-all">Select all</label>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-a1" class="form-check-input form-control">
                            <label for="member-a1">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="message">
                            <img src="<?php echo $rootUrl ?>images/message-icon-blue.svg" alt="Message Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-a2" class="form-check-input form-control">
                            <label for="member-a2">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="message">
                            <img src="<?php echo $rootUrl ?>images/message-icon-blue.svg" alt="Message Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-a3" class="form-check-input form-control">
                            <label for="member-a3">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="message">
                            <img src="<?php echo $rootUrl ?>images/message-icon-blue.svg" alt="Message Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-a4" class="form-check-input form-control">
                            <label for="member-a4">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="message">
                            <img src="<?php echo $rootUrl ?>images/message-icon-blue.svg" alt="Message Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-a5" class="form-check-input form-control">
                            <label for="member-a5">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="message">
                            <img src="<?php echo $rootUrl ?>images/message-icon-blue.svg" alt="Message Icon">
                        </a>
                    </div>
                </div>
                <div class="members-wrapper">
                    <div class="member-call-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input type="checkbox" id="member-a6" class="form-check-input form-control">
                            <label for="member-a6">
                                <div class="member-info">
                                    <em>
                                        <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                    </em>
                                    <span class="member-name">Sam Phillips</span>
                                </div>
                            </label>
                        </div>
                        <a href="#" title="message">
                            <img src="<?php echo $rootUrl ?>images/message-icon-blue.svg" alt="Message Icon">
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <div class="modal-footer-inner">
                    <div class="modal-btn-wrapper">
                        <a href="#" title="Call" class="btn primary-fill-btn" data-bs-dismiss="modal">Send message to group</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bussiness-template-modal" id="bussiness-template-modal" tabindex="-1" aria-labelledby="bussiness-template-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Business Template</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="subtitle">Project description and scope</p>
                <div class="uploaded-by-info">
                    <p class="title">Uploaded By: </p>
                    <div class="member-info">
                        <em>
                            <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                        </em>
                        <span class="member-name">Sam Phillips</span>
                    </div>
                </div>
                <div class="submission-wrapper">
                    <div class="white-card">
                        <div class="card-header-grey">  
                            <div class="header-inner">
                                <p>Submisson 1: PDF</p>
                                <a href="#" title="upload">
                                    <img src="<?php echo $rootUrl ?>images/hyperlink-icon.svg" alt="hyperlink-icon">
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-inner">
                                <em class="file-type-icon">
                                <img src="<?php echo $rootUrl ?>images/pdf.svg" alt="pdf">
                                </em>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-comments-block">
                    <div class="block-heading-wrapper">
                        <h5>Comments (2)</h5>
                    </div>
                    <div class="add-comment-wrapper">
                        <div class="member-info">
                            <em>
                                <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                            </em>
                        </div>
                        <div class="new-comment-wrapper">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Write Comment Here">
                                <button class="post-comment" type="button"><img src="<?php echo $rootUrl ?>images/ic_baseline-send.svg" alt="ic_baseline-send"></button>
                            </div>
                        </div>
                    </div>
                    <div class="prev-comments-wrapper">
                        <div class="prev-comment">
                            <div class="comment-head">
                                <div class="commentor-wrapper">
                                    <div class="member-info">
                                        <em>
                                            <img src="<?php echo $rootUrl ?>images/member-icon-placeholder.png" alt="member-icon-placeholder">
                                        </em>
                                        <span class="member-name">Sam Phillips</span>
                                    </div>
                                    <p class="timestamp">3 Minutes ago</p>
                                </div>
                            </div>
                            <div class="comment-body">
                                <p>This looks super amazing</p>
                            </div>
                        </div>
                        <div class="prev-comment">
                            <div class="comment-head">
                                <div class="commentor-wrapper">
                                    <div class="member-info">
                                        <em>
                                            <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                        </em>
                                        <span class="member-name">Sam Phillips</span>
                                    </div>
                                    <p class="timestamp">33 Minutes ago</p>
                                </div>
                            </div>
                            <div class="comment-body">
                                <p>This looks super amazing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade create-campaign-modal bussiness-template-modal" id="create-campaign-modal" tabindex="-1" aria-labelledby="create-campaign-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Create Campaign</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <span class="duration-badge red-badge">Overdue</span> 
               <p class="description">During this session, we will be announcing the problem statements, going through the schedule and answering any question you may have about the project.</p>

                <ul class="campaign-info">
                    <li>
                        <span class="label">Due on: </span>
                        <p class="due-date">10th April, 2022</p>
                    </li>
                    <li>
                        <span class="label">Assigned to: </span>
                        <p class="has-images">
                            <em>
                                <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                            </em>
                            <em>
                                <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                            </em>
                            <em>
                                <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                            </em>
                            <a href="#"  title="show all"> +372 more</a>
                           
                        </p>
                    </li>
                </ul>
                <div class="modal-comments-block">
                    <div class="block-heading-wrapper">
                        <h5>Comments & Attachment</h5>
                        <div class="filter-block">
                            <div class="filter-block-wrapper">
                                <em class="filter-icon"><img src="<?php echo $rootUrl ?>images/filter-icon.svg" alt="filter-icon"></em>
                                <div class="form-group custom-filter-wrapper task-page-filter">
                                    <select name="" id="popup-comments-filter" class="custom-select" multiple="multiple">
                                        <option selected value="all">All</option>
                                        <option value="comments">Comments</option>
                                        <option value="attachments">Attachments</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-comment-wrapper">
                        <div class="member-info">
                            <em>
                                <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                            </em>
                        </div>
                        <div class="new-comment-wrapper">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Write Comment Here">
                                <button class="post-comment" type="button"><img src="<?php echo $rootUrl ?>images/ic_baseline-send.svg" alt="ic_baseline-send"></button>
                            </div>
                        </div>
                    </div>
                    <div class="prev-comments-wrapper">
                        <div class="prev-comment">
                            <div class="comment-head">
                                <div class="commentor-wrapper">
                                    <div class="member-info">
                                        <em>
                                            <img src="<?php echo $rootUrl ?>images/member-icon-placeholder.png" alt="member-icon-placeholder">
                                        </em>
                                        <span class="member-name">Sam Phillips</span>
                                    </div>
                                    <p class="timestamp">3 Minutes ago</p>
                                </div>
                            </div>
                            <div class="comment-body">
                                <p>This looks super amazing</p>
                            </div>
                        </div>
                        <div class="prev-comment">
                            <div class="comment-head">
                                <div class="commentor-wrapper">
                                    <div class="member-info">
                                        <em>
                                            <img src="<?php echo $rootUrl ?>images/member-img-icon.svg" alt="member-img-icon">
                                        </em>
                                        <span class="member-name">Sam Phillips</span>
                                    </div>
                                    <p class="timestamp">33 Minutes ago</p>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="attachment">
                                    <span class="title">Attachment:</span>
                                    <span class="attachment-file">
                                        <em><img src="<?php echo $rootUrl ?>images/pdf.svg" alt="pdf"></em> 
                                        <a href="#" title="campaign_branding.pdf">campaign_branding.pdf</a>
                                    </span>
                                </div>
                                <p>This looks super amazing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>