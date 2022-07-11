<?php include 'header.php'; ?>

<section class="master-layout-wrapper">
    <div class="container">
        <button class="btn" data-bs-toggle="modal" data-bs-target="#thankyou-modal">thankyou</button>
    </div>
</section>
<div class="modal fade thankyou-modal" id="thankyou-modal" tabindex="-1" aria-labelledby="thankyou-label"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="h1">Thank you for joining!</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <p>You will be notified when you have been assigned to a project.</p>
               <p>However, if you wish to join or create a team at a later date, simply navigate to the project and select either "Join Team" or "Create Team".</p>
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


<?php include 'footer.php'; ?>