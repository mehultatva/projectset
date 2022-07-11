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
