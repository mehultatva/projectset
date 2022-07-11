<?php include 'header.php'; ?>

<section class="master-layout-wrapper">
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
                    <li class="active"><a href="#" title="Learners" data-id="participants">Participants</a></li>
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
                <div class="custom-tab-content active" data-target="participants">
                    <div class="grey-card project-joining-tab-wrapper">
                        <div class="no-project-block">
                            <em><img src="<?php echo $rootUrl ?>images/social-icon.svg" alt="socialicon"></em>
                            <span>Seems like there’s no one here yet!</span>
                        </div>
                        <div class="project-joining-detail">
                            <h2>How would you like mentors to join this project?</h2>
                           <div class="form-row-wrapper">
                                <div class="form-group half-width tooltip-wrapper">
                                    <label for="team-numbers">Number of teams<a href="#" data-toggle="tooltip" title="" data-bs-placement="right" data-bs-original-title="Some tooltip text!">
                                        <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                    </a></label>
                                    <input type="text" id="team-numbers" class="form-control" value="5">
                                </div>
                                <div class="form-group half-width tooltip-wrapper">
                                    <label for="team-size">Team size<a href="#" data-toggle="tooltip" title="" data-bs-placement="right" data-bs-original-title="Some tooltip text!">
                                        <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                    </a></label>
                                    <input type="text" id="team-size-start" class="form-control" value="1">
                                    <em>to</em>
                                    <input type="text" id="team-size-end" class="form-control" value="8">
                                </div>
                           </div>
                           <h2>How would you like mentors to join this project?</h2>
                            <div class="form-group radio-wrapper secondary">
                                <div class="tooltip-wrapper">
                                    <input type="radio" id="join" name="join-options">
                                    <label for="join">Join
                                        <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                            <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                        </a>                              
                                    </label>  
                                </div>                           
                            </div>
                            <div class="form-group radio-wrapper secondary">
                                <div class="tooltip-wrapper">
                                    <input type="radio" id="apply"  name="join-options" value="apply">
                                    <label for="apply">Apply 
                                        <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                            <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                        </a> 
                                    </label>                             
                                </div>                            
                            </div>
                            <div class="form-group radio-wrapper secondary">
                                <div class="tooltip-wrapper">
                                    <input type="radio" id="assign"  name="join-options" value="assign">
                                    <label for="assign">Assign
                                        <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                            <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                        </a> 
                                    </label>                             
                                </div>                            
                            </div>
                            <div class="btn-wrapper">
                                <a href="#" class="btn primary-fill-btn" title="Confirm" data-bs-toggle="modal" data-bs-target="#participants-join-modal">Confirm</a>
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
<div class="modal fade learners-join-modal join-modal" id="participants-join-modal" tabindex="-1" aria-labelledby="participants-join-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">Participants Applications</h4>
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
                    <div class="custom-dropdown form-group tooltip-wrapper">
                        <label for="">
                            Auto Rejection
                            <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                            </a>
                        </label>
                        <select name="" id="" class="custom-select">
                            <option value="Option1">Option 1</option>
                            <option value="Option2">Option 2</option>
                        </select>
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
                <h5 class="h2">Screening questions</h5>
                <div class="screening-quetion-wrapper">
                    <div class="screening-question">
                        <div class="question-block">
                            <span class="question-no">1.</span>
                            <div class="question-feild-wrapper">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Type your question">
                                </div>
                                <div class="custom-dropdown form-group">
                                    <select name="" id="" class="custom-select">
                                        <option value="Short Answer">Short Answer</option>
                                        <option value="Answer 1">Answer 1</option>
                                        <option value="Answer 2">Answer 2</option>
                                    </select>
                                </div>
                            </div>
                            <a href="#" title="Cancel" class="cancel-btn">
                            <img src="<?php echo $rootUrl ?>images/blue-close.svg" alt="blue close">
                            </a>   
                        </div>
                    </div>
                    <span class="blue-text">
                        <em><img src="<?php echo $rootUrl ?>images/plus-icon-blue.svg" alt="plus icon"></em>
                        Add a screening questions</span>
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