<?php include 'header.php'; ?>

<section class="master-layout-wrapper">
	<div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Network</li>
        </ol>
        <div class="title-wrapper">
            <h1>My Network</h1>
        </div>
        <div class="master-layout-grid-wrapper project-page-wrapper">
            <div class="master-layout-left-column">
                <div class="custom-tabbing-wrapper">
                    <div class="custom-tab-heading">
                        <em class="next-link"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Right arrow"></em>
                        <em class="prev-link disable"><img src="<?php echo $rootUrl ?>images/right-arrow.svg" alt="Left arrow"></em>
                        <ul>
                            <li class="active"><a href="#" title="Ongoing" data-id="communities">Communities</a></li>
                            <li><a href="#" title="Pending" data-id="connections">Connections</a></li>
                        </ul>
                    </div>
                    <div class="custom-tab-content-wrapper">
                        <div class="custom-tab-content active" data-target="communities">
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
                                <div class="network-profile-wrapper">
                                	<div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile badge-icon">
		                                                    <img src="<?php echo $rootUrl?>images/university-profile.png" alt="user-profile">
		                                                    <span class="badge red-badge">3</span>
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Glasgow University</a>
		                                                    <span>127 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
	                                <div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Museum of Art and Design</a>
		                                                    <span>342 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
	                                <div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Museum of Art and Design</a>
		                                                    <span>342 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
	                                <div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Museum of Art and Design</a>
		                                                    <span>342 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
	                                <div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Museum of Art and Design</a>
		                                                    <span>342 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
                                </div>
                            </div>
                            <div class="join-more-block">
                            	<div class="join-title-block">
                            		<h2>Join More</h2>	
                            		<a href="#" title="Join more" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
                            			<img src="<?php echo $rootUrl ?>images/question-mark.svg" alt="Question">
                            		</a>
                            	</div>
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
	                                <div class="card-list-slider two-slide-slider card-list-wrapper has-0-left-margin join-more-row">
	                            		<div class="card-wrapper">
	                            			<div class="white-card has-dark-blue-border">
			                                    <div class="card-header-grey">
			                                        <div class="user-profile-wrapper">
			                                            <div class="user-profile-inner">
			                                            	<div class="user-wrapper">
				                                            	<em class="user-profile">
			                                                        <img src="<?php echo $rootUrl ?>images/user-blue.svg" alt="user image">
			                                                    </em>
				                                            	<span class="h2 card-blue-title">Women in STEM - South Carolina Chapter</span>
				                                            </div>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class="card-body">
			                                        <span class="members"><em><img src="<?php echo $rootUrl ?>images/user-black.svg" alt="user"></em>461 Members</span>
			                                        <p>This group is for everyone who wants to learn and take part in projects that encompass Science, Tech, Engineering and Maths.</p>
			                                        <ul class="duration-link-list">
			                                            <li><a href="#" title="Message Admin">Message Admin</a></li>
			                                            <li><a href="#" title="Apply">Apply</a></li>
			                                        </ul>
			                                    </div>
			                                </div>
										</div>
	                            	</div>
                            	</div>
                            </div>                            
                        </div>
                        <div class="custom-tab-content" data-target="connections">
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
                                <div class="network-profile-wrapper">
                                	<div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile badge-icon">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                    <span class="badge red-badge">3</span>
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Glasgow University</a>
		                                                    <span>127 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
	                                <div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Museum of Art and Design</a>
		                                                    <span>342 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link notify-off">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link badge-icon">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        			<span class="small-right-badge red-badge">2</span>
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
	                                <div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Museum of Art and Design</a>
		                                                    <span>342 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link notify-off">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
	                                <div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Museum of Art and Design</a>
		                                                    <span>342 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link notify-off">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        		</a>	
	                                        			</li>
	                                        		</ul>
	                                        	</div>
	                                        </div>
										</div>
	                                </div>
	                                <div class="white-card has-dark-blue-border network-profile">
	                                    <div class="card-body">                                    
	                                        <div class="notification-listing">
	                                        	<div class="notification-listing-left">
	                                        		<div class="notification-detail">
		                                        		<em class="user-profile">
		                                                    <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
		                                                </em>
		                                                <div class="profile-content">
		                                                    <a href="<?php echo $rootUrl; ?>network-detail.php" title="Glasgow University" class="profile-name">Museum of Art and Design</a>
		                                                    <span>342 Members</span>
		                                                </div>
		                                            </div>
	                                        	</div>
	                                        	<div class="notification-listing-right">
	                                        		<ul class="notify-listing">
	                                        			<li>
	                                        				<a href="#" title="Notification" class="notification-link">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-blue.svg" class="on" alt="Notification">
			                                        			<img src="<?php echo $rootUrl ?>images/notification-off-blue.svg" class="off" alt="Notification">
			                                        		</a>	
	                                        			</li>
	                                        			<li>
	                                        				<a href="#" title="Comment" class="network-link badge-icon">
			                                        			<img src="<?php echo $rootUrl ?>images/comments-blue.svg" alt="Comment">
			                                        			<span class="small-right-badge red-badge">2</span>
			                                        		</a>	
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
            <div class="master-layout-right-column">
                <div class="grey-card">
                    <h3 class="h4">Leaderboard</h3>
                    <div class="notification-list">
                    	<div class="notification-list-inner">
                    		<a href="#" title="Museum of Art and Design" class="notification-detail">
	                    		<em class="user-profile badge-icon">
	                                <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
	                                <span class="small-left-badge dark-yellow-badge">1</span>
	                            </em>
	                            <div class="profile-content">
	                                <span class="profile-name">Museum of Art and Design</span>
	                                <p class="two-text-wrap"><span>342 Members</span><span>87 projects</span></p>
	                            </div>
	                        </a>
                    	</div>
                    	<div class="notification-list-inner">
                    		<a href="#" title="Museum of Art and Design" class="notification-detail">
	                    		<em class="user-profile badge-icon">
	                                <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
	                                <span class="small-left-badge gray-badge">2</span>
	                            </em>
	                            <div class="profile-content">
	                                <span class="profile-name">Museum of Art and Design</span>
	                                <p class="two-text-wrap"><span>342 Members</span><span>87 projects</span></p>
	                            </div>
	                        </a>
                    	</div>
                    	<div class="notification-list-inner">
                    		<a href="#" title="Museum of Art and Design" class="notification-detail">
	                    		<em class="user-profile badge-icon">
	                                <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
	                                <span class="small-left-badge orange-badge">3</span>
	                            </em>
	                            <div class="profile-content">
	                                <span class="profile-name">Museum of Art and Design</span>
	                                <p class="two-text-wrap"><span>342 Members</span><span>87 projects</span></p>
	                            </div>
	                        </a>
                    	</div>
                    	<div class="notification-list-inner">
                    		<a href="#" title="Museum of Art and Design" class="notification-detail">
	                    		<em class="user-profile badge-icon">
	                                <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
	                                <span class="small-left-badge blue-badge">4</span>
	                            </em>
	                            <div class="profile-content">
	                                <span class="profile-name">Museum of Art and Design</span>
	                                <p class="two-text-wrap"><span>342 Members</span><span>87 projects</span></p>
	                            </div>
	                        </a>
                    	</div>
                    	<div class="notification-list-inner">
                    		<a href="#" title="Museum of Art and Design" class="notification-detail">
	                    		<em class="user-profile badge-icon">
	                                <img src="<?php echo $rootUrl?>images/user-blue.svg" alt="user-profile">
	                                <span class="small-left-badge blue-badge">5</span>
	                            </em>
	                            <div class="profile-content">
	                                <span class="profile-name">Museum of Art and Design</span>
	                                <p class="two-text-wrap"><span>342 Members</span><span>87 projects</span></p>
	                            </div>
	                        </a>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

