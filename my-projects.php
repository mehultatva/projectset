<?php include 'header.php'; ?>

<section class="master-layout-wrapper">
	<div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Projects</li>
        </ol>
        <div class="title-wrapper">
            <h1>My Projects</h1>
        </div>
        <div class="master-layout-grid-wrapper project-page-wrapper">
            <div class="master-layout-left-column">
                <div class="custom-tabbing-wrapper">
                    <div class="custom-tab-heading">
                        <em class="next-link"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Right arrow"></em>
                        <em class="prev-link disable"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Left arrow"></em>
                        <ul>
                            <li class="active"><a href="#" title="Ongoing" data-id="ongoing">Ongoing</a></li>
                            <li><a href="#" title="Pending" data-id="pending">Pending</a></li>
                            <li><a href="#" title="Drafts" data-id="drafts">Drafts</a></li>
                            <li><a href="#" title="Complete" data-id="complete">Complete</a></li>
                        </ul>
                    </div>
                    <div class="custom-tab-content-wrapper">
                        <div class="custom-tab-content active" data-target="ongoing">
                            <div class="master-layout-gray-column grey-card">
                                <div class="search-dropdown-wrapper">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="custom-dropdown form-group">
                                                <h5 class="dropdown-toggle" data-bs-toggle="dropdown">
                                                Filter: <span class="dropdown-title">Most Recent Notifications</span>
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
                                <div class="card-list-wrapper custom-card-list-block">
                                    <div class="card-wrapper">
                                        <div class="white-card has-light-blue-border">
                                            <div class="card-header-grey">
                                                <div class="user-profile-wrapper">
                                                    <div class="user-profile-inner">
                                                        <div class="user-wrapper">
                                                            <em class="user-img">
                                                                <img src="<?php echo $rootUrl ?>images/user-img.jpg" alt="user image">
                                                            </em>
                                                            <span class="header-title">David Cooper David Cooper David Cooper David Cooper</span>
                                                        </div>
                                                    </div>
                                                    <em class="users-icon multiple-icon">
                                                        <img src="<?php echo $rootUrl ?>images/user-icon-solid-black.svg" alt="user icon">
                                                        <img src="<?php echo $rootUrl ?>images/user-icon-solid.svg" alt="user icon">
                                                    </em>
                                                </div>
                                            </div>
                                            <div class="card-body">                         
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-more-btn">
                                    <a href="#" title="Load More" class="btn primary-fill-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-tab-content" data-target="pending">
                            <div class="master-layout-gray-column grey-card">
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
                                <div class="card-list-wrapper custom-card-list-block">
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-more-btn">
                                    <a href="#" title="Load More" class="btn primary-fill-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-tab-content" data-target="drafts">
                            <div class="master-layout-gray-column grey-card">
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
                                <div class="card-list-wrapper custom-card-list-block">
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-more-btn">
                                    <a href="#" title="Load More" class="btn primary-fill-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-tab-content" data-target="complete">
                            <div class="master-layout-gray-column grey-card">
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
                                <div class="card-list-wrapper custom-card-list-block">
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <a href="<?php echo $rootUrl; ?>project-detail.php" title="Building Artificial Brain Using MongoDB" class="h2 card-blue-title">Building Artificial Brain Using MongoDB</a>
                                                <div class="card-body-inner">
                                                    <p>This is designed to accommodate 100 characters by when MTV ax quiz prog. Junk MTV quiz graced.</p>
                                                    <ul class="duration-link-list">
                                                        <li class="duration">14th Jun 2021 - 20th Sep 2021</li>
                                                        <li>     
                                                            <a href="#" title="Apply" data-bs-toggle="modal" data-bs-target="#apply-modal">Apply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-more-btn">
                                    <a href="#" title="Load More" class="btn primary-fill-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="master-layout-right-column">
                <div class="grey-card">
                    <h2>Create Project</h2>
                    <ul class="button-list">
                        <li>
                            <a href="#" title="New" class="btn primary-fill-btn">New</a>
                        </li>
                        <li>
                            <a href="#" title="Public Project Bank" class="btn" data-bs-toggle="modal" data-bs-target="#template-modal">Public Project Bank</a>
                        </li>
                        <li>
                            <a  href="#" title="My Project Bank" class="btn">My Project Bank</a>
                        </li>
                        <li>
                            <a  href="#" title="Join" class="btn" data-bs-toggle="modal" data-bs-target="#join-modal">Join</a>
                        </li>
                    </ul>
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