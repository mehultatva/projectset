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
                <a href="#" title="Edit Project" class="btn primary-fill-btn">Edit Project</a>
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
                    <li class="active"><a href="#" title="Prizes" data-id="prizes">Prizes</a></li>
                    <li><a href="#" title="Announcements" data-id="announcements">Announcements</a></li>
                    <li><a href="#" title="Help" data-id="help">Help</a></li>
                    <li><a href="#" title="Deliverables" data-id="deliverables">Deliverables</a></li>
                    <li><a href="#" title="Learners" data-id="participants">Participants</a></li>
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
                <div class="custom-tab-content active" data-target="prizes">
                    Prizes
                </div>
                <div class="custom-tab-content" data-target="announcements">
                    <div class="grey-card announcements-wrapper">
                        <div class="announcements-list">
                            <div class="title-wrapper">
                                <h2>Announcements</h2>
                                <a href="#" title="Add Modal" class="add-modal action-link">
                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 8.998H8V14.998H6V8.998H0V6.998H6V0.998001H8V6.998H14V8.998Z" fill="#151515"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="announcements-text-block">
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Announcement Title</h3>
                                                <div class="details lineclamp-text">
                                                    <p>Announcement details details details details 
                                                    </p>
                                                    
                                                </div>
                                                <a href="#" class="blue-link expand-link" title="Expand for more">Expand for more</a>
                                            </div>
                                            <div class="text-meta-block">
                                               <div class="meta-listing">
                                                   <div class="listing-item">
                                                       <div class="item-inner">
                                                           <em class="icon announcement-icon">
                                                               <img src="<?php echo $rootUrl ?>images/announcement-icon.svg" alt="announcement-icon">
                                                           </em>
                                                          <p>Announcement By</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item">
                                                       <div class="item-inner">
                                                           <em class="icon calendar-icon">
                                                            <img src="<?php echo $rootUrl ?>images/calendar-icon.svg" alt="calendar-icon">
                                                           </em>
                                                           <p>Date</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item">
                                                       <div class="item-inner">
                                                           <em class="icon clock-icon">
                                                            <img src="<?php echo $rootUrl ?>images/data-icon-grey.svg" alt="clock-icon">
                                                           </em>
                                                           <p>Time</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item is-last">
                                                       <div class="item-inner">
                                                            <a href="#" class="item-link" title="delete">
                                                                <em class="icon delete-icon">
                                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                        viewBox="0 0 346.8 427" style="enable-background:new 0 0 346.8 427;" xml:space="preserve">
                                                                    <path d="M232.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C242.4,159.2,237.9,154.7,232.4,154.7z" fill="#747272"/>
                                                                    <path d="M114.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C124.4,159.2,119.9,154.7,114.4,154.7z" fill="#747272"/>
                                                                    <path d="M28.4,127.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H268c13.5,0,26.4-5.6,35.7-15.4
                                                                        c9.3-9.8,14.7-23.5,14.7-38.1V127.1c18.5-4.9,30.6-22.8,28.1-41.9C344,66.2,327.8,52,308.6,52h-51.2V39.5c0.1-10.5-4.1-20.6-11.5-28
                                                                        C238.4,4,228.3-0.1,217.8,0H129c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V52H38.2C19,52,2.8,66.2,0.3,85.3
                                                                        C-2.2,104.3,9.9,122.2,28.4,127.1z M268,407H78.8c-17.1,0-30.4-14.7-30.4-33.5V128h250v245.5C298.4,392.3,285.1,407,268,407z
                                                                        M109.4,39.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6c3.7,3.7,5.7,8.7,5.7,13.9V52h-128
                                                                        V39.5z M38.2,72h270.4c9.9,0,18,8.1,18,18s-8.1,18-18,18H38.2c-9.9,0-18-8.1-18-18S28.3,72,38.2,72z" fill="#747272"/>
                                                                    <path d="M173.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C183.4,159.2,178.9,154.7,173.4,154.7z" fill="#747272"/>
                                                                    </svg>
                                                                </em>
                                                            </a>
                                                       </div>
                                                   </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Announcement Title</h3>
                                                <div class="details lineclamp-text">
                                                    <p>Announcement details details details details The information can fit on two lines after which this can be expanded to view the entire message. Continue writing the information Continue writing the information Continue writing the information Continue writing the information writing the information informa
                                                    </p>
                                                </div>
                                                <a href="#" class="blue-link expand-link" title="Expand for more">Expand for more</a>
                                            </div>
                                            <div class="text-meta-block">
                                               <div class="meta-listing">
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon announcement-icon">
                                                               <img src="<?php echo $rootUrl ?>images/announcement-icon.svg" alt="announcement-icon">
                                                           </em>
                                                          <p>Announcement By</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon calendar-icon">
                                                            <img src="<?php echo $rootUrl ?>images/calendar-icon.svg" alt="calendar-icon">
                                                           </em>
                                                           <p>Date</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon clock-icon">
                                                            <img src="<?php echo $rootUrl ?>images/data-icon-grey.svg" alt="clock-icon">
                                                           </em>
                                                           <p>Time</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item is-last">
                                                       <div class="item-inner">
                                                            <a href="#" class="item-link" title="delete">
                                                                <em class="icon delete-icon">
                                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                        viewBox="0 0 346.8 427" style="enable-background:new 0 0 346.8 427;" xml:space="preserve">
                                                                    <path d="M232.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C242.4,159.2,237.9,154.7,232.4,154.7z" fill="#747272"/>
                                                                    <path d="M114.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C124.4,159.2,119.9,154.7,114.4,154.7z" fill="#747272"/>
                                                                    <path d="M28.4,127.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H268c13.5,0,26.4-5.6,35.7-15.4
                                                                        c9.3-9.8,14.7-23.5,14.7-38.1V127.1c18.5-4.9,30.6-22.8,28.1-41.9C344,66.2,327.8,52,308.6,52h-51.2V39.5c0.1-10.5-4.1-20.6-11.5-28
                                                                        C238.4,4,228.3-0.1,217.8,0H129c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V52H38.2C19,52,2.8,66.2,0.3,85.3
                                                                        C-2.2,104.3,9.9,122.2,28.4,127.1z M268,407H78.8c-17.1,0-30.4-14.7-30.4-33.5V128h250v245.5C298.4,392.3,285.1,407,268,407z
                                                                        M109.4,39.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6c3.7,3.7,5.7,8.7,5.7,13.9V52h-128
                                                                        V39.5z M38.2,72h270.4c9.9,0,18,8.1,18,18s-8.1,18-18,18H38.2c-9.9,0-18-8.1-18-18S28.3,72,38.2,72z" fill="#747272"/>
                                                                    <path d="M173.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C183.4,159.2,178.9,154.7,173.4,154.7z" fill="#747272"/>
                                                                    </svg>
                                                                </em>
                                                            </a>
                                                       </div>
                                                   </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Announcement Title</h3>
                                                <div class="details lineclamp-text">
                                                    <p>Announcement details details details details The information can fit on two lines after which this can be expanded to view the entire message. Continue writing the information here details details details details details details details details details details details Announcement details details details details The information can fit on two lines after which this can be expanded to view the entire message. Continue writing the information here  details details details details details details details details details details details                                               
                                                    </p>
                                                    <p>Announcement details details details details The information can fit on two lines after which this can be expanded to view the entire message. Continue writing the information here details details details details details details details details details details details Announcement details details details details The information can fit on two lines after which this can be expanded to view the entire message. Continue writing the information here  details details details details details details details details details details details                                               
                                                    </p>
                                                </div>
                                                <a href="#" class="blue-link expand-link" title="Expand for more">Expand for more</a>
                                            </div>
                                            <div class="text-meta-block">
                                               <div class="meta-listing">
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon announcement-icon">
                                                               <img src="<?php echo $rootUrl ?>images/announcement-icon.svg" alt="announcement-icon">
                                                           </em>
                                                          <p>Announcement By</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon calendar-icon">
                                                            <img src="<?php echo $rootUrl ?>images/calendar-icon.svg" alt="calendar-icon">
                                                           </em>
                                                           <p>Date</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon clock-icon">
                                                            <img src="<?php echo $rootUrl ?>images/data-icon-grey.svg" alt="clock-icon">
                                                           </em>
                                                           <p>Time</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item is-last">
                                                       <div class="item-inner">
                                                            <a href="#" class="item-link" title="delete">
                                                                <em class="icon delete-icon">
                                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                        viewBox="0 0 346.8 427" style="enable-background:new 0 0 346.8 427;" xml:space="preserve">
                                                                    <path d="M232.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C242.4,159.2,237.9,154.7,232.4,154.7z" fill="#747272"/>
                                                                    <path d="M114.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C124.4,159.2,119.9,154.7,114.4,154.7z" fill="#747272"/>
                                                                    <path d="M28.4,127.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H268c13.5,0,26.4-5.6,35.7-15.4
                                                                        c9.3-9.8,14.7-23.5,14.7-38.1V127.1c18.5-4.9,30.6-22.8,28.1-41.9C344,66.2,327.8,52,308.6,52h-51.2V39.5c0.1-10.5-4.1-20.6-11.5-28
                                                                        C238.4,4,228.3-0.1,217.8,0H129c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V52H38.2C19,52,2.8,66.2,0.3,85.3
                                                                        C-2.2,104.3,9.9,122.2,28.4,127.1z M268,407H78.8c-17.1,0-30.4-14.7-30.4-33.5V128h250v245.5C298.4,392.3,285.1,407,268,407z
                                                                        M109.4,39.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6c3.7,3.7,5.7,8.7,5.7,13.9V52h-128
                                                                        V39.5z M38.2,72h270.4c9.9,0,18,8.1,18,18s-8.1,18-18,18H38.2c-9.9,0-18-8.1-18-18S28.3,72,38.2,72z" fill="#747272"/>
                                                                    <path d="M173.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C183.4,159.2,178.9,154.7,173.4,154.7z" fill="#747272"/>
                                                                    </svg>
                                                                </em>
                                                            </a>
                                                       </div>
                                                   </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Announcement Title</h3>
                                                <div class="details lineclamp-text">
                                                    <p>Announcement details details details
                                                    </p>
                                                    <p>Announcement details details details details The information can fit on two lines
                                                    </p>
                                                </div>
                                                <a href="#" class="blue-link expand-link" title="Expand for more">Expand for more</a>
                                            </div>
                                            <div class="text-meta-block">
                                               <div class="meta-listing">
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon announcement-icon">
                                                               <img src="<?php echo $rootUrl ?>images/announcement-icon.svg" alt="announcement-icon">
                                                           </em>
                                                          <p>Announcement By</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon calendar-icon">
                                                            <img src="<?php echo $rootUrl ?>images/calendar-icon.svg" alt="calendar-icon">
                                                           </em>
                                                           <p>Date</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item">
                                                       <div class="item-inner">

                                                           <em class="icon clock-icon">
                                                            <img src="<?php echo $rootUrl ?>images/data-icon-grey.svg" alt="clock-icon">
                                                           </em>
                                                           <p>Time</p>
                                                       </div>
                                                   </div>
                                                   <div class="listing-item is-last">
                                                       <div class="item-inner">
                                                            <a href="#" class="item-link" title="delete">
                                                                <em class="icon delete-icon">
                                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                        viewBox="0 0 346.8 427" style="enable-background:new 0 0 346.8 427;" xml:space="preserve">
                                                                    <path d="M232.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C242.4,159.2,237.9,154.7,232.4,154.7z" fill="#747272"/>
                                                                    <path d="M114.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C124.4,159.2,119.9,154.7,114.4,154.7z" fill="#747272"/>
                                                                    <path d="M28.4,127.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H268c13.5,0,26.4-5.6,35.7-15.4
                                                                        c9.3-9.8,14.7-23.5,14.7-38.1V127.1c18.5-4.9,30.6-22.8,28.1-41.9C344,66.2,327.8,52,308.6,52h-51.2V39.5c0.1-10.5-4.1-20.6-11.5-28
                                                                        C238.4,4,228.3-0.1,217.8,0H129c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V52H38.2C19,52,2.8,66.2,0.3,85.3
                                                                        C-2.2,104.3,9.9,122.2,28.4,127.1z M268,407H78.8c-17.1,0-30.4-14.7-30.4-33.5V128h250v245.5C298.4,392.3,285.1,407,268,407z
                                                                        M109.4,39.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6c3.7,3.7,5.7,8.7,5.7,13.9V52h-128
                                                                        V39.5z M38.2,72h270.4c9.9,0,18,8.1,18,18s-8.1,18-18,18H38.2c-9.9,0-18-8.1-18-18S28.3,72,38.2,72z" fill="#747272"/>
                                                                    <path d="M173.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C183.4,159.2,178.9,154.7,173.4,154.7z" fill="#747272"/>
                                                                    </svg>
                                                                </em>
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
                <div class="custom-tab-content" data-target="help">
                    <div class="grey-card help-wrapper">
                        <div class="help-form-wrapper">
                            <div class="form-group">
                                <label for="team-eligibility-criteria">Team Eligibility Criteria</label>
                                <div class="custom-file-upload-wrapper">
                                    <input type="file" class="file-upload-input">
                                    <button class="file-upload-btn btn primary-fill-btn">
                                       <span> Upload File</span> 
                                        <em class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="18" viewBox="0 0 69.818 48" fill="#fff">
                                            <g id="Group_72" data-name="Group 72" transform="translate(0 -2)">
                                                <path id="Path_61" data-name="Path 61" d="M14.911,5.643a2.192,2.192,0,0,1,3.1,0l8.769,8.769a2.2,2.2,0,0,1-3.1,3.1l-5.025-5.029v16.63a2.192,2.192,0,1,1-4.384,0V12.487L9.246,17.516a2.2,2.2,0,0,1-3.1-3.1Z" transform="translate(18.446 10.013)" fill-rule="evenodd"/>
                                                <path id="Path_62" data-name="Path 62" d="M19.226,7.856A24.131,24.131,0,0,1,34.909,2c11.738,0,21.482,8.727,22.543,19.981A14.064,14.064,0,0,1,55.361,50H16.5A16.289,16.289,0,0,1,0,33.933,16.177,16.177,0,0,1,12.838,18.255c.624-3.766,3.046-7.519,6.388-10.4Zm2.849,3.3c-3.3,2.849-5.031,6.284-5.031,8.972v1.955L15.1,22.3A11.866,11.866,0,0,0,4.364,33.933,11.923,11.923,0,0,0,16.5,45.636H55.361a9.91,9.91,0,0,0,10.093-9.718A9.91,9.91,0,0,0,55.361,26.2H53.18V24.015c0-9.687-8.112-17.651-18.271-17.651a19.767,19.767,0,0,0-12.833,4.8Z" transform="translate(0 0)"/>
                                            </g>
                                            </svg>
                                        </em>
                                    </button>
                                    <p class="chosen-filename"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tnc">T&Cs</label>
                                <div class="custom-file-upload-wrapper">
                                    <input type="file" class="file-upload-input">
                                    <button class="file-upload-btn btn primary-fill-btn">
                                        Upload File 
                                        <em class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="18" viewBox="0 0 69.818 48" fill="#fff">
                                            <g id="Group_72" data-name="Group 72" transform="translate(0 -2)">
                                                <path id="Path_61" data-name="Path 61" d="M14.911,5.643a2.192,2.192,0,0,1,3.1,0l8.769,8.769a2.2,2.2,0,0,1-3.1,3.1l-5.025-5.029v16.63a2.192,2.192,0,1,1-4.384,0V12.487L9.246,17.516a2.2,2.2,0,0,1-3.1-3.1Z" transform="translate(18.446 10.013)" fill-rule="evenodd"/>
                                                <path id="Path_62" data-name="Path 62" d="M19.226,7.856A24.131,24.131,0,0,1,34.909,2c11.738,0,21.482,8.727,22.543,19.981A14.064,14.064,0,0,1,55.361,50H16.5A16.289,16.289,0,0,1,0,33.933,16.177,16.177,0,0,1,12.838,18.255c.624-3.766,3.046-7.519,6.388-10.4Zm2.849,3.3c-3.3,2.849-5.031,6.284-5.031,8.972v1.955L15.1,22.3A11.866,11.866,0,0,0,4.364,33.933,11.923,11.923,0,0,0,16.5,45.636H55.361a9.91,9.91,0,0,0,10.093-9.718A9.91,9.91,0,0,0,55.361,26.2H53.18V24.015c0-9.687-8.112-17.651-18.271-17.651a19.767,19.767,0,0,0-12.833,4.8Z" transform="translate(0 0)"/>
                                            </g>
                                            </svg>
                                        </em>
                                    </button>
                                    <p class="chosen-filename"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="faqs">FAQs</label>
                                <div class="custom-file-upload-wrapper">
                                    <input type="file" class="file-upload-input">
                                    <button class="file-upload-btn btn primary-fill-btn">
                                        Upload File 
                                        <em class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="18" viewBox="0 0 69.818 48" fill="#fff">
                                            <g id="Group_72" data-name="Group 72" transform="translate(0 -2)">
                                                <path id="Path_61" data-name="Path 61" d="M14.911,5.643a2.192,2.192,0,0,1,3.1,0l8.769,8.769a2.2,2.2,0,0,1-3.1,3.1l-5.025-5.029v16.63a2.192,2.192,0,1,1-4.384,0V12.487L9.246,17.516a2.2,2.2,0,0,1-3.1-3.1Z" transform="translate(18.446 10.013)" fill-rule="evenodd"/>
                                                <path id="Path_62" data-name="Path 62" d="M19.226,7.856A24.131,24.131,0,0,1,34.909,2c11.738,0,21.482,8.727,22.543,19.981A14.064,14.064,0,0,1,55.361,50H16.5A16.289,16.289,0,0,1,0,33.933,16.177,16.177,0,0,1,12.838,18.255c.624-3.766,3.046-7.519,6.388-10.4Zm2.849,3.3c-3.3,2.849-5.031,6.284-5.031,8.972v1.955L15.1,22.3A11.866,11.866,0,0,0,4.364,33.933,11.923,11.923,0,0,0,16.5,45.636H55.361a9.91,9.91,0,0,0,10.093-9.718A9.91,9.91,0,0,0,55.361,26.2H53.18V24.015c0-9.687-8.112-17.651-18.271-17.651a19.767,19.767,0,0,0-12.833,4.8Z" transform="translate(0 0)"/>
                                            </g>
                                            </svg>
                                        </em>
                                    </button>
                                    <p class="chosen-filename"></p>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
                <div class="custom-tab-content" data-target="deliverables">
                    <div class="grey-card deliverable-wrapper">
                        <div class="deliverables-list">
                            <div class="title-wrapper">
                                <h2>Deliverables</h2>
                                <a href="#" title="Add Modal" class="add-modal action-link" data-bs-target="#add-deliverable-modal" data-bs-toggle="modal">
                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 8.998H8V14.998H6V8.998H0V6.998H6V0.998001H8V6.998H14V8.998Z" fill="#151515"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="deliverables-text-block">
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Submission 1 - Filetype</h3>
                                                <p>More details more details more details more details more details more details more details more details more details more details.</p>
                                            </div>
                                            <div class="text-tooltip-block">
                                                <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                    <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                        <em>
                                                            <svg width="10" height="35" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                        <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                    </em>
                                                                    <a href="#" title="Delete">Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Submission 2 - Filetype</h3>
                                                <p>More details more details more details more details more details more details more details more details more details more details.</p>
                                            </div>
                                            <div class="text-tooltip-block">
                                                <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                    <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                        <em>
                                                            <svg width="10" height="35" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                        <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                    </em>
                                                                    <a href="#" title="Delete">Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">A 3 minute pitch - mp4/mov</h3>
                                                <p>More details more details more details more details more details more details more details more details more details more details.</p>
                                            </div>
                                            <div class="text-tooltip-block">
                                                <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                    <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                        <em>
                                                            <svg width="10" height="35" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                        <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                    </em>
                                                                    <a href="#" title="Delete">Delete</span></a>
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
                        <div class="deliverables-list judging-criteria">
                            <div class="title-wrapper">
                                <h2>Judging Criteria</h2>
                                <a href="#" title="Add Modal" class="add-modal action-link" data-bs-target="#add-judging-modal" data-bs-toggle="modal">
                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 8.998H8V14.998H6V8.998H0V6.998H6V0.998001H8V6.998H14V8.998Z" fill="#151515"/>
                                    </svg>
                                </a>
                            </div>
                            <p class="title-descritption">For every project on ProjectSet, every learner will be evaluated on <a href="#" title="12 soft skills" class="blue-link">12 soft skills</a>, so you don't need to list these below.</p>
                            <div class="deliverables-text-block">
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Design & Usability</h3>
                                                <p>Themes will be evaluated based on their visual appeal and how easy they are to navigate and use from the perspective of a website visitor.</p>
                                            </div>
                                            <div class="text-tooltip-block">
                                                <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                    <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                        <em>
                                                            <svg width="10" height="35" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                        <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                    </em>
                                                                    <a href="#" title="Delete">Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Technical Optimization</h3>
                                                <p>We will be looking under the hood at how your code is organized, how well your pages perform, and how easy it is to customize your theme.</p>
                                            </div>
                                            <div class="text-tooltip-block">
                                                <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                    <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                        <em>
                                                            <svg width="10" height="35" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                        <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                    </em>
                                                                    <a href="#" title="Delete">Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Originality & Impact</h3>
                                                <p>Does your theme solve for a unique industry need? Does it stand out? Does it fit the requirements of the categories it is competing in?</p>
                                            </div>
                                            <div class="text-tooltip-block">
                                                <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                    <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                        <em>
                                                            <svg width="10" height="35" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                        <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                    </em>
                                                                    <a href="#" title="Delete">Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-card">
                                    <div class="card-body">
                                        <div class="text-block-listing">
                                            <div class="text-block">
                                                <h3 class="title">Accessibility</h3>
                                                <p>We will test your theme for accessibility best practices to ensure it provides a positive experience for users who rely on these features.</p>
                                            </div>
                                            <div class="text-tooltip-block">
                                                <div class="more-actions-popup-wrapper table-popup-wrapper">
                                                    <a class="row-action more-actions-link popup-open-link" href="#" title="More Actions">
                                                        <em>
                                                            <svg width="10" height="35" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                        <img src="<?php echo $rootUrl ?>images/delete-icon-orange.svg" alt="delete-icon-orange">
                                                                    </em>
                                                                    <a href="#" title="Delete">Delete</span></a>
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
                        <div class="public-voting-block">
                            <h2>Public Voting</h2>
                            <div class="form-switch-wrapper">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="participant">
                                        <input class="form-check-input" type="checkbox" id="participant" checked="">
                                        <span class="switch-wrapper"></span>
                                        <p>Sentence explaining what public <strong>voting</strong> is and what it does.</p>
                                    </label>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="custom-tab-content" data-target="participants">
                    Participants
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
<div class="modal fade add-deliverable-modal" id="add-deliverable-modal" tabindex="-1" aria-labelledby="add-deliverable-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">Add Deliverable</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="deliverable-block">
                    <div class="custom-dropdown form-group">
                        <div class="tooltip-wrapper">
                            <label for="">
                                Deliverable Name
                                <sup>*</sup>
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>
                            </label>
                        </div>
                        <select name="" id="" class="custom-select">
                            <option value="Region1">Region 1</option>
                            <option value="Region2">Region 2</option>
                        </select>
                    </div>
                    <div class="custom-dropdown form-group">
                        <div class="tooltip-wrapper">
                            <label for="">
                                Filetype
                                <sup>*</sup>
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>
                            </label>
                        </div>
                        <select name="" id="" class="custom-select">
                            <option value="type1">Type 1</option>
                            <option value="type2">Type 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="tooltip-wrapper">                          
                            <label for="description">Descritption</label>   
                            <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                            </a>                               
                        </div>                            
                        <input type="description" id="description" class="form-control" placeholder="">                            
                    </div>
                    <div class="checkbox-outer-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input class="form-check-input form-control" type="checkbox" value="" id="deliverable-template-checkbox">
                            <label class="form-check-label" for="deliverable-template-checkbox">
                                Save as a deliverable template? Doing this means you're adding to our deliverable template bank for faster project creation for you and other creators!
                            </label>
                        </div>                          
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="modal-footer-inner">
                    <div class="modal-btn-wrapper">
                        <a href="#" title="Add" class="btn primary-fill-btn create-btn" data-bs-dismiss="modal">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade add-judging-modal" id="add-judging-modal" tabindex="-1" aria-labelledby="add-judging-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">Add Judging Criteria</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="deliverable-block">
                    <div class="custom-dropdown form-group">
                        <div class="tooltip-wrapper">
                            <label for="">
                                Criteria Name
                                <sup>*</sup>
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>
                            </label>
                        </div>
                        <select name="" id="" class="custom-select">
                            <option value="Criteria1">Criteria 1</option>
                            <option value="Criteria2">Criteria 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="tooltip-wrapper">                          
                            <label for="description-judging">Descritption</label>   
                            <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                            </a>                               
                        </div>                            
                        <input type="text" id="description-judging" class="form-control" placeholder="">                            
                    </div>
                    <div class="custom-rating-wrapper">
                        <div class="rating-title">
                            <div class="tooltip-wrapper">
                                <p>Specify how each star rating translates to performance</p>
                                <a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                                    <img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
                                </a>
                            </div>
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>1</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                            <div class="inner-wrapper">
                                    <span>2</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>3</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>4</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>5</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>6</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>7</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>8</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>9</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                        <div class="form-group star-rating">
                            <label for="">
                                <div class="inner-wrapper">
                                    <span>10</span>
                                    <em class="star-icon">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99983 14.27L13.1498 16.78C13.9098 17.24 14.8398 16.56 14.6398 15.7L13.5398 10.98L17.2098 7.79999C17.8798 7.22 17.5198 6.12 16.6398 6.04999L11.8098 5.64L9.91983 1.17999C9.57983 0.369995 8.41983 0.369995 8.07983 1.17999L6.18983 5.62999L1.35983 6.03999C0.479829 6.10999 0.119828 7.20999 0.789828 7.78999L4.45983 10.97L3.35983 15.69C3.15983 16.55 4.08983 17.23 4.84983 16.77L8.99983 14.27Z" fill="#808080"/>
                                        </svg>
                                    </em>                              
                                </div>
                            </label>
                            <input id="" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="checkbox-outer-wrapper">
                        <div class="checkbox-wrapper form-group">
                            <input class="form-check-input form-control" type="checkbox" value="" id="criteria-template-checkbox">
                            <label class="form-check-label" for="criteria-template-checkbox">
                                Save as a criteria template? Doing this means you're adding to our criteria template bank for faster project creation for you and other creators!
                            </label>
                        </div>                          
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="modal-footer-inner">
                    <div class="modal-btn-wrapper">
                        <a href="#" title="Add" class="btn primary-fill-btn create-btn" data-bs-dismiss="modal">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>