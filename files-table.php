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
