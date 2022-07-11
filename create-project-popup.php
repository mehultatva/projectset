<?php include 'header.php'; ?>

<a href="#" title="New" class="btn primary-fill-btn" data-bs-toggle="modal" data-bs-target="#create-modal">Create</a>
<div class="modal fade create-modal" id="create-modal" tabindex="-1" aria-labelledby="createmodal-label" aria-hidden="true">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-header justify-content-center">
		        <h4 class="h1">Create Project</h4>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
		    <div class="modal-body">
		    	<p class="text-center subtitle-text">Follow this 3-step process</p>
		    	<div id="step-content-block">
                    <div class="step-navigation">
                    	<h5><span class=step-number>1</span>General Details</h5>
                    </div>
                    <div class="details-block step-1">
						<div class="step-title-wrapper">
							<span class="h2">1. General Details</span>
							<p>You can edit and make changes later</p>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<div class="tooltip-wrapper">
									<label for="project-name">Project Name</label>  
									<a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
										<img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
									</a>                              
								</div>
								<input type="text" id="project-name" class="form-control" placeholder="What do you want to call your project?">
								<!-- <span class="error-msg">Please Enter valid Project Name</span> -->
							</div>
							<div class="form-group">
								<div class="tooltip-wrapper">
									<label for="mission">Mission</label>  
									<a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
										<img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
									</a>                              
								</div>
								<textarea id="mission"  class="form-control" placeholder="What is your mission?"></textarea>
							</div>
							<div class="form-two-col-row">
								<div class="form-group">
									<div class="tooltip-wrapper">
										<label for="project-launch-date">Project Launches</label>  
										<a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
											<img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
										</a>                              
									</div>
									<input type="date" id="project-launch-date" class="form-control datepicker">
									<!-- <span class="error-msg">Please Enter valid Project Name</span> -->
								</div>
								<div class="form-group">
									<div class="tooltip-wrapper">
										<label for="project-finish-date">Project Finishes</label>  
										<a href="#" data-toggle="tooltip" title="Some tooltip text!" data-bs-placement="right">
											<img src="<?php echo $rootUrl ?>images/tool-tip-icon.svg" alt="tool-tip-icon">
										</a>                              
									</div>
									<input type="date" id="project-finish-date" class="form-control datepicker">
									<!-- <span class="error-msg">Please Enter valid Project Name</span> -->
								</div>
								
							</div>
						</div>
                    </div>
                    <div class="step-navigation">
                    	<h5><span class=step-number>2</span>Team Details
                    	</h5>
                    </div>
                    <div class="details-block step-2">
                    	step2
                    </div>
                    <div class="step-navigation">
                    	<h5><span class=step-number>3</span>How participants join</h5>
                    </div>
                    <div class="details-block step-3">
                    	step3
					</div>
					<div class="save-draft-wrapper">
					<a  href="#" title="Save Draft" class="btn btn-outline-primary">Save Draft</a>
					</div>
                </div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>

