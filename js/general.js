function footerAdj() {
    var footerH = jQuery(".site-footer").outerHeight();
    jQuery(".site-footer").css({ "margin-top": -footerH });
    jQuery(".wrapper").css({ "padding-bottom": footerH });
}

/***Add browser specific class***/
jQuery("a[href='#']").click(function(e) {
    e.preventDefault();
});
var BrowserDetect = {
    init: function() {
        this.browser = this.searchString(this.dataBrowser) || "Other";
        this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
    },
    searchString: function(data) {
        for (var i = 0; i < data.length; i++) {
            var dataString = data[i].string;
            this.versionSearchString = data[i].subString;

            if (dataString.indexOf(data[i].subString) !== -1) {
                return data[i].identity;
            }
        }
    },
    searchVersion: function(dataString) {
        var index = dataString.indexOf(this.versionSearchString);
        if (index === -1) {
            return;
        }

        var rv = dataString.indexOf("rv:");
        if (this.versionSearchString === "Trident" && rv !== -1) {
            return parseFloat(dataString.substring(rv + 3));
        } else {
            return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
        }
    },

    dataBrowser: [
        { string: navigator.userAgent, subString: "Edge", identity: "MS Edge" },
        { string: navigator.userAgent, subString: "MSIE", identity: "Explorer" },
        { string: navigator.userAgent, subString: "Trident", identity: "Explorer" },
        { string: navigator.userAgent, subString: "Firefox", identity: "Firefox" },
        { string: navigator.userAgent, subString: "Opera", identity: "Opera" },
        { string: navigator.userAgent, subString: "OPR", identity: "Opera" },

        { string: navigator.userAgent, subString: "Chrome", identity: "Chrome" },
        { string: navigator.userAgent, subString: "Safari", identity: "Safari" }
    ]
};

BrowserDetect.init();

var bv = BrowserDetect.browser;
if (bv == "Chrome") {
    jQuery("html").addClass("chrome");
} else if (bv == "MS Edge") {
    jQuery("html").addClass("edge");
} else if (bv == "Explorer") {
    jQuery("html").addClass("ie");
} else if (bv == "Firefox") {
    jQuery("html").addClass("Firefox");
}
/***For browser and os specific class***/
var deviceAgent = navigator.userAgent.toLowerCase();

if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
    jQuery('html').addClass('ios');
    jQuery('html').addClass('mobile');
}

if (deviceAgent.match(/android/)) {
    jQuery('html').addClass('android');
    jQuery('html').addClass('mobile');
}

if (deviceAgent.match(/blackberry/)) {
    jQuery('html').addClass('blackberry');
    jQuery('html').addClass('mobile');
}

if (deviceAgent.match(/(symbianos|^sonyericsson|^nokia|^samsung|^lg)/)) {
    jQuery('html').addClass('mobile');
}
/*for equal height*/
function equalHeight() {
    jQuery.fn.extend({
        equalHeight: function() {
            var top = 0;
            var row = [];
            var classname = ('equalHeight' + Math.random()).replace('.', '');
            jQuery(this).each(function() {
                var thistop = jQuery(this).offset().top;
                if (thistop > top) {
                    jQuery('.' + classname).removeClass(classname);
                    top = thistop;
                }
                jQuery(this).addClass(classname);
                jQuery(this).height('auto');
                var h = (Math.max.apply(null, jQuery('.' + classname).map(function() {
                    return jQuery(this).outerHeight();
                }).get()));
                jQuery('.' + classname).height(h);
            }).removeClass(classname);
        }
    });
    setTimeout(function() {
        jQuery('.profile-slider .profile-listing .profile-content p').equalHeight();
        jQuery('.profile-slider .profile-listing .profile-content span').equalHeight();
    }, 900);
    jQuery('.card-body .image-list-slider .image-title').equalHeight();
    jQuery('.statistic-card-slider .white-card').equalHeight();
    jQuery('.two-slide-slider .card-wrapper .white-card .card-body .card-blue-title').equalHeight();
    jQuery('.white-card .card-blue-title-wrapper').equalHeight();
   jQuery('.card-list-wrapper .card-wrapper .white-card .card-body .card-blue-title').equalHeight();
   jQuery('.card-list-wrapper .card-wrapper .white-card .card-body p').equalHeight();
   jQuery('.master-layout-wrapper .profile-portfolio-tab .white-card .card-body p').equalHeight();
   jQuery('.master-layout-wrapper .profile-portfolio-tab .white-card .card-blue-title').equalHeight();
}
// tabbing
var totalLength;

function tabResponsive() {
    if (jQuery('.custom-tabbing-wrapper').length) {
        jQuery('.custom-tabbing-wrapper').each(function() {
            var wrapperWidth = jQuery(".custom-tabbing-wrapper").width();
            var tabLinkWidth = 30;
            jQuery(this).find('.custom-tab-heading ul li').each(function() {
                tabLinkWidth += jQuery(this).outerWidth(true);
            });
            if (wrapperWidth < tabLinkWidth) {
                jQuery(this).addClass('mobile-view');
            } else {
                jQuery(this).removeClass('mobile-view');
            }
        });
    }
}

function tabResponsiveProgress() {
    if (jQuery('.custom-tabbing-wrapper').length) {
        jQuery('.custom-tabbing-wrapper .custom-tab-heading ul').each(function() {
            var tabLinkWidth = 0;
            jQuery(this).find('li').each(function() {
                tabLinkWidth += jQuery(this).outerWidth(true);
            });
            totalLength = tabLinkWidth - jQuery(this).closest('.custom-tab-heading').width();
            if (jQuery(this).closest('.custom-tabbing-wrapper').hasClass('mobile-view')) {
                jQuery(this).animate({
                    scrollLeft: 0
                });
                jQuery(this).closest('.custom-tabbing-wrapper').find('.custom-tab-heading .prev-link').addClass('disable');
                jQuery(this).closest('.custom-tabbing-wrapper').find('.custom-tab-heading .next-link').removeClass('disable');
            }
            jQuery(this).scroll(function(event) {
                if (jQuery(this).scrollLeft() == 0) {
                    jQuery(this).closest('.custom-tab-heading').find('.prev-link').addClass('disable');
                } else {
                    jQuery(this).closest('.custom-tab-heading').find('.prev-link').removeClass('disable');
                }
                if (totalLength - jQuery(this).scrollLeft() < 1) {
                    jQuery(this).closest('.custom-tab-heading').find('.next-link').addClass('disable');
                } else {
                    jQuery(this).closest('.custom-tab-heading').find('.next-link').removeClass('disable');
                }
            });
        });
    }
}

// my profile popup
function profilePopupScroll() {
    if (jQuery(".profile-modal .custom-scrollbar").length) {
        var right_sidebar_height = jQuery('.profile-modal .profile-modal-grid .right-sidebar').height();
        var bottom_quote_block_height = jQuery('.profile-modal .profile-modal-grid .quote-card').outerHeight(true);
        var contentmaxHeight = right_sidebar_height - bottom_quote_block_height - 20;
        jQuery('.profile-modal .profile-modal-grid .content-card .card-inner').css({
            maxHeight: contentmaxHeight
        });
    }
}

function expand_btn_func() {
    if(jQuery('.announcements-wrapper .announcements-text-block .text-block').length) {
        jQuery('.announcements-wrapper .announcements-text-block .text-block .details').each(function(){
            jQuery(this).removeClass('lineclamp-text');
            if(jQuery(this).height()>40) {
                jQuery(this).addClass('lineclamp-text');
                jQuery(this).siblings('.expand-link').show();
                jQuery(this).siblings('.expand-link').text('Expand for more');
                jQuery(this).siblings('.expand-link').removeClass('expanded');
            }
            else {
                jQuery(this).removeClass('lineclamp-text');
                jQuery(this).siblings('.expand-link').hide();
            }
        })
    }
}

// profile popup custom scrollbar
var scroll_flag = true;

function customScroll() {
    if (jQuery(".profile-modal .custom-scrollbar").length) {
        if (jQuery(window).innerWidth() > 991 && scroll_flag) {
            jQuery(".profile-modal .custom-scrollbar").mCustomScrollbar({
                theme: "inset-dark",
                advanced: {
                    updateOnContentResize: true
                }
            });
            scroll_flag = false;
        } else {
            if (jQuery(window).innerWidth() <= 991 && !scroll_flag) {
                jQuery(".profile-modal .custom-scrollbar").mCustomScrollbar('destroy');
                scroll_flag = true;
            }
        }
    }
}
// percentage to degree count
function percentageToDegrees(percentage) {
    return percentage / 100 * 360
}

// multiselect position
function dropdown_position() {
    if (jQuery('.custom-dropdown.multiselect-dropdown .dropdown-menu').length) {
        var $target_var = jQuery('.custom-dropdown.multiselect-dropdown .dropdown-menu:not(.inner)');
        var _this_top = $target_var.closest('body').find('.custom-dropdown.multiselect-dropdown').offset().top;
        var _this_left = $target_var.closest('body').find('.custom-dropdown.multiselect-dropdown').offset().left;
        var _this_width = $target_var.closest('body').find('.custom-dropdown.multiselect-dropdown').width;
        jQuery('.custom-dropdown.multiselect-dropdown .dropdown-toggle').on('click', function() {
            jQuery('.custom-dropdown.multiselect-dropdown .dropdown-menu:not(.inner)').css({
                top: _this_top,
                left: _this_left,
                width: _this_width,
            });
        });
    }
}

function InitSlider() {
     equalHeight();
}
function studioPageFormat(d) {
    return '<div class="table-wrapper">' +
        '<table class="inner-table">' +
        '<tbody>' +
        '<tr>' +
        '<td>'+
        '<div class="checkbox-wrapper form-group">'+
        '<input type="checkbox" id="table-checkbox-8" class="form-check-input form-control">'+
        '<label for="table-checkbox-8"></label>' +
        '</div>'+
        '</td>' +
        '<td class="has-image">'+
        '<em><img src="images/png.svg" alt="png"></em>'+
        '</td>'+
        '<td>'+
        '<span class="title-text">Social Media Post</span>'+
        '<p class="description">Social Media Post</p>'+
        '</td>'+
        '<td>'+
        '<div class="image-text-wrapper">'+
        '<em><img src="images/profile-icon.png" alt="profile-icon"></em>'+
        '<span class="title-text">Sam Philips</span>'+
        '</div>'+
        '</td>'+
        '<td>20/01/2022</td>'+
        '<td>PNG</td>'+
        '<td>1MB</td>'+
        '<td>-</td>'+
        '<td class="has-action-list">'+
        '<ul class="action-list">'+
        '<li><a class="row-action" href="#" title="Message"><em><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/></svg></em></a></li>'+
        '<li><a class="row-action" href="#" title="download"><em><svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/></svg></em></a></li>'+
        '<li><a class="row-action delete-action" href="#" title="delete"><em><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/></svg></em></a></li>'+
        '</ul>'+
        '</td>'+      
        '</tr>' +
        '<tr>' +
        '<td>'+
        '<div class="checkbox-wrapper form-group">'+
        '<input type="checkbox" id="table-checkbox-9" class="form-check-input form-control">'+
        '<label for="table-checkbox-9"></label>' +
        '</div>'+
        '</td>' +
        '<td class="has-image">'+
        '<em><img src="images/png.svg" alt="png"></em>'+
        '</td>'+
        '<td>'+
        '<span class="title-text">Social Media Post</span>'+
        '<p class="description">Social Media Post</p>'+
        '</td>'+
        '<td>'+
        '<div class="image-text-wrapper">'+
        '<em><img src="images/profile-icon-2.png" alt="profile-icon"></em>'+
        '<span class="title-text">Evans Timothy</span>'+
        '</div>'+
        '</td>'+
        '<td>20/01/2022</td>'+
        '<td>PNG</td>'+
        '<td>1MB</td>'+
        '<td>-</td>'+
        '<td class="has-action-list">'+
        '<ul class="action-list">'+
        '<li><a class="row-action" href="#" title="Message"><em><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/></svg></em></a></li>'+
        '<li><a class="row-action" href="#" title="download"><em><svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/></svg></em></a></li>'+
        '<li><a class="row-action delete-action" href="#" title="delete"><em><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/></svg></em></a></li>'+
        '</ul>'+
        '</td>'+
        '</tr>' +
        '<tr>' +
        '<td>'+
        '<div class="checkbox-wrapper form-group">'+
        '<input type="checkbox" id="table-checkbox-10" class="form-check-input form-control">'+
        '<label for="table-checkbox-10"></label>' +
        '</div>'+
        '</td>' +
        '<td class="has-image">'+
        '<em><img src="images/png.svg" alt="png"></em>'+
        '</td>'+
        '<td>'+
        '<span class="title-text">Social Media Post</span>'+
        '<p class="description">Social Media Post</p>'+
        '</td>'+
        '<td>'+
        '<div class="image-text-wrapper">'+
        '<em><img src="images/profile-icon-3.png" alt="profile-icon"></em>'+
        '<span class="title-text">McLaren Susan</span>'+
        '</div>'+
        '</td>'+
        '<td>20/01/2022</td>'+
        '<td>PNG</td>'+
        '<td>1MB</td>'+
        '<td>-</td>'+
        '<td class="has-action-list">'+
        '<ul class="action-list">'+
        '<li><a class="row-action" href="#" title="Message"><em><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6667 1.66797H3.33341C2.41675 1.66797 1.67508 2.41797 1.67508 3.33464L1.66675 18.3346L5.00008 15.0013H16.6667C17.5834 15.0013 18.3334 14.2513 18.3334 13.3346V3.33464C18.3334 2.41797 17.5834 1.66797 16.6667 1.66797ZM15.0001 11.668H5.00008V10.0013H15.0001V11.668ZM15.0001 9.16797H5.00008V7.5013H15.0001V9.16797ZM15.0001 6.66797H5.00008V5.0013H15.0001V6.66797Z" fill="#747272"/></svg></em></a></li>'+
        '<li><a class="row-action" href="#" title="download"><em><svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.166748 14.6667H11.8334V13H0.166748V14.6667ZM11.8334 5.5H8.50008V0.5H3.50008V5.5H0.166748L6.00008 11.3333L11.8334 5.5Z" fill="#747272"/></svg></em></a></li>'+
        '<li><a class="row-action delete-action" href="#" title="delete"><em><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.00008 13.8333C1.00008 14.75 1.75008 15.5 2.66675 15.5H9.33342C10.2501 15.5 11.0001 14.75 11.0001 13.8333V3.83333H1.00008V13.8333ZM11.8334 1.33333H8.91675L8.08342 0.5H3.91675L3.08342 1.33333H0.166748V3H11.8334V1.33333Z" fill="#747272"/></svg></em></a></li>'+
        '</ul>'+
        '</td>'+
        '</tr>' +
        '</tbody>' +
        '</table>' +
        '</div>';
}

function tableFeildWidthCalc(){
    var i = 0;
    var td_width = [];
    jQuery('#page-studio-table tbody tr.has-inner-table td').each(function(){
        td_width[i] = jQuery(this).width();
        i++;
    });
    var j = 0;
    jQuery('#page-studio-table tbody tr.child .inner-table tr td').each(function(){
        jQuery(this).css('width',td_width[j]);
        j++;
    });
}
function tableRowWidth(){
    jQuery('#page-studio-table tbody tr.has-inner-table').each(function(){
        var rowWidth = jQuery(this).width();
    });
}

function checkNewUpdateNum(){
    var newUpdateNumber = jQuery('.project-studio-page-wrapper .updates-tab-wrapper .update-wrapper:not(.marked-read)').length;
    if(newUpdateNumber > 0){
        jQuery('.project-studio-page-wrapper .custom-tabbing-wrapper .custom-nested-tabbing .custom-tab-heading ul li a[data-id="update"]').addClass('has-new-updates');
    }
    if(newUpdateNumber == 0){
        jQuery('.project-studio-page-wrapper .custom-tabbing-wrapper .custom-nested-tabbing .custom-tab-heading ul li a[data-id="update"]').removeClass('has-new-updates');
    }
}



/***Document Ready***/
jQuery(document).ready(function() {
    checkNewUpdateNum();
    setTimeout(function() {
        equalHeight();
        tabResponsive();
        tabResponsiveProgress();
        profilePopupScroll();
        dropdown_position();
        expand_btn_func();
    }, 300);
    jQuery('.datepicker').datepicker();
    tableRowWidth();

    var pageStudioTable = jQuery('#page-studio-table').DataTable({
        "ordering": false,
        "paging": false,
        "searching": false,
        "info":false,
        responsive: true       
    });
    if(jQuery('#page-studio-table').length){
        jQuery('#page-studio-table tbody').on('click', 'tr:not(.parent) td.accordian-toggle', function(e) {
            e.stopPropagation();
            var tr = jQuery(this).closest('tr');        
            var row = pageStudioTable.row(tr);     
            if (row.child.isShown()) {
                row.child.hide();
                tr.removeClass('shown');
                tr.next().removeClass('child');
            } else {
                var _this = tr.width();
                row.child(studioPageFormat(row.data())).show();
                tr.addClass('shown');
                tr.next().addClass('child');
                tableFeildWidthCalc();
                tr.next().find('.table-wrapper').width(_this);
            }
        });
    }
    if(jQuery('#page-studio-table').length){
        jQuery('#page-studio-table .select-all').click(function(event) {   
            if(this.checked) {
                jQuery(':checkbox').each(function() {
                    this.checked = true;                        
                });
            } else {
                jQuery(':checkbox').each(function() {
                    this.checked = false;                       
                });
            }
        }); 
    }
    var taskStudioTable = jQuery('#task-studio-table').DataTable({
        "ordering": true,
        "paging": false,
        "searching": false,
        "info":false,
        responsive: true,
        autoWidth:false,
        columnDefs: [
            { orderable: false, targets: 'no-sort'},
        ]
    });
    var learnerteamTable = jQuery('#learner-team-table').DataTable({
        "ordering": false,
        "paging": false,
        "searching": false,
        "info":false,
        responsive: true,
        autoWidth:false,
    });
    var listofTemasTable = jQuery('#team-listing-table').DataTable({
        "ordering": false,
        "paging": false,
        "searching": false,
        "info":false,
        responsive: true,
        autoWidth:false,
    });

    // custom accordion js
    jQuery('.custom-accordion-outer .custom-accordion-wrapper .custom-accordion-title .arrow-link').click(function(){
        jQuery(this).closest('.custom-accordion-wrapper').toggleClass('is-open');
        jQuery(this).closest('.custom-accordion-wrapper').find('.custom-accordion-body').slideToggle();
    });



    // updates tab 
    
    jQuery('.project-studio-page-wrapper .updates-tab-wrapper .update-wrapper .update .update-actions .mark-read-text').on('click',function(e){
        jQuery(this).closest('.update-wrapper').addClass('marked-read');
        checkNewUpdateNum();
        
    });
    jQuery('.project-studio-page-wrapper .updates-tab-wrapper .mark-all-read').click(function(e){
        jQuery(this).closest('.updates-filter-block').siblings('.updates-listing-block').find('.update-wrapper').addClass('marked-read');
        checkNewUpdateNum();
    });


    jQuery('.custom-select').each(function(){
        var _this = jQuery(this);
        var _dropdownParentElement =  jQuery(this).closest('div');
        if(_this.closest('.form-group').hasClass('task-page-filter')){
            var _dropdownParentElement =  jQuery(this).closest('.task-page-filter');
        }
        _this.select2({
            minimumResultsForSearch: -1,
            dropdownParent: _dropdownParentElement,
        });
        if(_this.parent().hasClass('task-status-dropdown')){
            _this.on('change',function(e){
                _this.find(':selected');
                if(_this.find(':selected').val() == 'Not Started'){
                    _this.closest('.task-status-dropdown').attr('class', 'form-group task-status-dropdown not-started')
                }
                if(_this.find(':selected').val() == 'In Progress'){
                    _this.closest('.task-status-dropdown').attr('class', 'form-group task-status-dropdown in-progress')
                }
                if(_this.find(':selected').val() == 'In Review'){
                    _this.closest('.task-status-dropdown').attr('class', 'form-group task-status-dropdown in-review')
                }
                if(_this.find(':selected').val() == 'Overdue'){
                    _this.closest('.task-status-dropdown').attr('class', 'form-group task-status-dropdown overdue')
                }
                if(_this.find(':selected').val() == 'Completed'){
                    _this.closest('.task-status-dropdown').attr('class', 'form-group task-status-dropdown completed')
                }
            });
        }
    });
    jQuery('body').delegate(".popup-open-link", "click", function(e){
        jQuery(this).closest('body').find('.popup-visible').removeClass('popup-visible');
        e.stopPropagation();
        e.preventDefault();
        jQuery(this).parent().addClass('popup-visible');
    });
    jQuery(document).on('click',function(e){
        jQuery('.more-actions-popup-wrapper').removeClass('popup-visible'); 
    });

    // expand text js
    jQuery('.grey-card .blue-link.expand-link').click(function(){
        jQuery(this).toggleClass('expanded');
        jQuery(this).siblings('.details').toggleClass('lineclamp-text');
        if(jQuery(this).hasClass('expanded')){
            // jQuery(this).innerHTML = 'Show Less';
            jQuery(this).text('Show less');
        }
        else{
            jQuery(this).text('Expand for more');
        }
    });


    // custom file upload
	jQuery('.form-group .custom-file-upload-wrapper .file-upload-input').on('change', function () {
		var fileCount = jQuery(this)[0].files.length;
		if(fileCount == 0){
			jQuery(this).siblings('p').text('No Files Chosen');
		}
		else if(fileCount == 1){
			var fileName = jQuery(this).val();
			jQuery(this).siblings('p').text(fileName);
		}
		else if(fileCount > 1){
			var fileCountText = fileCount + ' files uploaded';
			jQuery(this).siblings('p').text(fileCountText);
		}
	});

    
    
    // apply modal JS
    jQuery('.apply-modal .tabbing-header-wrapper li a').click(function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('data-id');
        jQuery(this).closest('li').addClass('active-tab').siblings().removeClass('active-tab');
        jQuery('.apply-modal .tabbing-content-wrapper').find('.tab-wrapper[data-attr="' + id + '"]').addClass('active-tab').siblings().removeClass('active-tab');
        jQuery('.apply-modal .tabbing-outer-wrapper .tab-content').css('display', 'none');
        jQuery('.apply-modal .modal-dialog').removeClass('initial-step');
    });
    jQuery('.apply-modal .back-btn').click(function(e) {
        e.preventDefault();
        jQuery('.apply-modal .modal-dialog').addClass('initial-step');
        jQuery('.apply-modal .tabbing-outer-wrapper .tab-content').css('display', 'block');
        jQuery('.apply-modal .tabbing-outer-wrapper .tabbing-content-wrapper .tab-wrapper').removeClass('active-tab');
    });
    jQuery('.apply-modal .btn-next').click(function() {
        setTimeout(function() {
            jQuery('.apply-modal').modal('hide');
        }, 100);
    });
    jQuery("#apply-modal").on("hidden.bs.modal", function() {
        jQuery('.apply-modal .tabbing-outer-wrapper .tabbing-content-wrapper .tab-wrapper').removeClass('active-tab');
        jQuery('.apply-modal .tabbing-outer-wrapper .tab-content').removeAttr('style');
        jQuery('.apply-modal .modal-dialog').addClass('initial-step');

    });
    jQuery(".apply-modal textarea").on('keyup', function() {
        var words = 0;
        if ((this.value.match(/\S+/g)) != null) {
            words = this.value.match(/\S+/g).length;
        }
        if (words > 200) {
            var trimmed = jQuery(this).val().split(/\s+/, 200).join(" ");
            jQuery(this).val(trimmed + " ");
        } else {
            jQuery(this).closest('.form-group').find('.word-wrapper p span').text(200 - words);
        }
    });

    // circular progressbar JS
    jQuery(".progress").each(function() {
        var value = jQuery(this).find('.rating-number-wrapper').text().replace('%', '');
        var left = jQuery(this).find('.progress-left .progress-bar');
        var right = jQuery(this).find('.progress-right .progress-bar');
        if (value > 0) {
            if (value <= 50) {
                left.addClass('alert-red');
                right.addClass('alert-red');
                right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
            } else {
                if (value >= 95) {
                    left.addClass('alert-green');
                    right.addClass('alert-green');
                } else {
                    left.addClass('alert-orange');
                    right.addClass('alert-orange');
                }
                right.css('transform', 'rotate(180deg)')
                left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
            }
        }
    });

    // accordian
    jQuery('.accordion-btn').click(function() {
        var expand_value = jQuery(this).attr('aria-expanded');
        if (expand_value === "true") {
            jQuery(this).find('span').text('Collapse');
        } else if (expand_value === "false") {
            jQuery(this).find('span').text('Evaluate');
        }
    });

    // notification toggle
    jQuery('.notification-link').click(function() {
        jQuery(this).toggleClass('notify-off');
    });

    // tooltip
    jQuery('[data-toggle="tooltip"]').tooltip({
        trigger : 'hover'
    });

    // password toggle
    jQuery('.form-group .password span').click(function() {
        var current_input = jQuery(this).closest('.password').find('.form-control');
        jQuery(this).toggleClass('show-password');
        if (current_input.attr('type') == 'password') {
            current_input.prop('type', 'text');
        } else {
            current_input.prop('type', 'password');
        }
    });

    // tabbing
    jQuery(".custom-tabbing-wrapper .custom-tab-heading ul li a").click(function(e) {
        if(jQuery(this).attr('href') == '#'){
            e.preventDefault();
        }
        var current_id = jQuery(this).data('id');
        jQuery(this).closest('li').addClass('active').siblings().removeClass('active');
        jQuery(this).closest('.custom-tabbing-wrapper').find('.custom-tab-content[data-target="' + current_id + '"]').addClass('active').siblings().removeClass('active');
        if (jQuery('.custom-tab-content.active').find('.slick-slider')) {
            jQuery('.slick-slider').slick('refresh');
        }
        if (jQuery(this).closest('.custom-tabbing-wrapper').hasClass('mobile-view')) {
            var pos = jQuery(this).closest('.custom-tabbing-wrapper').find('.custom-tab-heading ul li.active').position().left;
            var currentscroll = jQuery(this).closest('.custom-tabbing-wrapper').find('.custom-tab-heading ul').scrollLeft();
            var divwidth = jQuery(this).closest('.custom-tabbing-wrapper').find('.custom-tab-heading ul').width();
            pos = (pos + currentscroll) - (divwidth / 2) + 10;
            jQuery(this).closest('.custom-tabbing-wrapper').find('.custom-tab-heading ul').animate({
                scrollLeft: pos
            });
        }
        setTimeout(function(){
        	equalHeight();
            expand_btn_func();
           
        },500);
        jQuery('.dataTable').css("width", '100%');
        jQuery($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
    });
    jQuery(".custom-tabbing-wrapper .custom-tab-heading .next-link").click(function() {
        var space_width_flag = true;
        var current_index;
        jQuery(this).closest('.custom-tab-heading').find('ul li').each(function() {
            if (jQuery(this).outerWidth(true) + jQuery(this).position().left > jQuery(this).closest('.custom-tab-heading').find('ul').scrollLeft() + jQuery(this).closest('.custom-tab-heading').width() + 60 && space_width_flag) {
                current_index = jQuery(this).index();
                space_width_flag = false;
            }
        });
        var nextScroll = jQuery(this).closest('.custom-tab-heading').find('ul').scrollLeft() + jQuery(this).closest('.custom-tab-heading').find('ul li').eq(current_index).outerWidth(true);
        jQuery(this).closest('.custom-tab-heading').find('.prev-link').removeClass('disable');
        if (totalLength > nextScroll) {
            jQuery(this).closest('.custom-tab-heading').find('ul').animate({ scrollLeft: nextScroll }, 500);
            jQuery(this).removeClass('disable');
        } else {
            jQuery(this).closest('.custom-tab-heading').find('ul').animate({ scrollLeft: totalLength }, 500);
            jQuery(this).addClass('disable');
        }
    });
    jQuery(".custom-tabbing-wrapper .custom-tab-heading .prev-link").click(function() {
        var space_width_flag = true;
        var current_index = 0;
        jQuery(this).closest('.custom-tab-heading').find('ul li').each(function() {
            if (jQuery(this).position().left < 0) {
                if (jQuery(this).index() > current_index) {
                    current_index = jQuery(this).index();
                }
                space_width_flag = false;
                current_index = current_index;
            }
        });
        var prevScroll = jQuery(this).closest('.custom-tab-heading').find('ul').scrollLeft() - jQuery(this).closest('.custom-tab-heading').find('ul li').eq(current_index).outerWidth(true);
        jQuery(this).closest('.custom-tab-heading').find('.next-link').removeClass('disable');
        if (prevScroll > 0) {
            jQuery(this).closest('.custom-tab-heading').find('ul').animate({ scrollLeft: prevScroll }, 500);
            jQuery(this).removeClass('disable');
        } else {
            jQuery(this).closest('.custom-tab-heading').find('ul').animate({ scrollLeft: 0 }, 500);
            jQuery(this).addClass('disable');
        }
    });

    // profile card slider
    if (jQuery('.network-project-slider .profile-slider').length) {
        jQuery('.network-project-slider .profile-slider').slick({
            dots: false,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });
    };

    // vertical slider
    if (jQuery('.vertical-slider-wrapper').length) {
        jQuery('.vertical-slider-wrapper .vertical-image-slider').slick({
            dots: false,
            arrows: true,
            slidesToShow: 2.5,
            slidesToScroll: 1,
            vertical: true,
            verticalSwiping: true,
            infinite: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2.5,
                        slidesToScroll: 1,
                        vertical: false,
                        verticalSwiping: false,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1,
                        vertical: false,
                        verticalSwiping: false,
                    }
                },
            ]
        });
    }

    // rating card slider
    if (jQuery('.rating-card-slider').length) {
        jQuery('.rating-card-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ]
        });
    };

    // recommendation card slider
    if (jQuery('.recommended-card-slider').length) {
        jQuery('.recommended-card-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ]
        });
    };

    // organiser slider
    if (jQuery('.organisers-slider').length) {
        jQuery('.organisers-slider').slick({
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },

                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },

                },
            ]
        });
    }

    // sponsors slider
    if (jQuery('.sponsors-slider').length) {
        jQuery('.sponsors-slider').slick({
            dots: false,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            responsive: [{
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },

            }, ]
        });
    }

    // two slide slider
    if (jQuery('.two-slide-slider').length) {
        jQuery('.two-slide-slider').slick({
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }, ]
        });
    };

    // full-width slide slider
    if (jQuery('.evaluation-slider-block .evaluation-card-slider').length) {
        jQuery('.evaluation-slider-block .evaluation-card-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            nextArrow: `<button type="button" class="slick-next">Next`+
                        `<em><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99984 6L8.58984 7.41L13.1698 12L8.58984 16.59L9.99984 18L15.9998 12L9.99984 6Z" fill="#2F64FF"/>
                        </svg>
                        </em>`+
                        `</button>`,
            prevArrow: `<button type="button" class="slick-prev">`+
            `<em><svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.59 12L8 10.59L3.42 6L8 1.41L6.59 -1.23266e-07L0.590001 6L6.59 12Z" fill="#2F64FF"/>
            </svg>            
            </em> Prev`+
            `</button>`,
        });
    };
    // Engagement Stats Slider
    if (jQuery('.evaluation-slider-block .engagement-stats-slider').length) {
        jQuery('.evaluation-slider-block .engagement-stats-slider').slick({
            dots: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: false,
            nextArrow: `<button type="button" class="slick-next">Next`+
                        `<em><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99984 6L8.58984 7.41L13.1698 12L8.58984 16.59L9.99984 18L15.9998 12L9.99984 6Z" fill="#2F64FF"/>
                        </svg>
                        </em>`+
                        `</button>`,
            prevArrow: `<button type="button" class="slick-prev">`+
            `<em><svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.59 12L8 10.59L3.42 6L8 1.41L6.59 -1.23266e-07L0.590001 6L6.59 12Z" fill="#2F64FF"/>
            </svg>            
            </em> Prev`+
            `</button>`,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,

                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        arrows:true,
                    },
                },
            ]
        });
    };





    jQuery('.join-modal .modal-body .form-wrapper .form-group.radio-wrapper input[type="radio"]').on('click',function(){
        jQuery(this).closest('.modal-dialog').addClass('feild-visible');
        jQuery(this).closest('.radio-wrapper').siblings().find('.inner-feild-wrapper').slideUp();
        jQuery(this).closest('.radio-wrapper').find('.inner-feild-wrapper').slideToggle();
        jQuery(this).closest('.radio-wrapper').toggleClass('current-active').siblings().removeClass('current-active');
        if(jQuery(this).prop('checked') && (!jQuery(this).closest('.radio-wrapper').hasClass('current-active'))){            
            jQuery(this).prop('checked',false);
        }
    });
    jQuery('#join-modal').on('hidden.bs.modal', function() {
        setTimeout(function() {
            jQuery('#join-modal').find('.modal-dialog').removeClass('feild-visible');
            jQuery('.join-modal .modal-body .form-wrapper .form-group.radio-wrapper input[type="radio"]').prop('checked', false);
            jQuery('.join-modal .modal-body .form-wrapper .form-group.radio-wrapper .inner-feild-wrapper').slideUp();
        }, 100);
    });
    
    jQuery('.select-team-modal .form-wrapper').on('click',function(){        
        jQuery(this).closest('.content-wrapper').siblings().find('.team-information').slideUp();
        jQuery(this).closest('.content-wrapper').toggleClass('active').siblings().removeClass('active');        
        jQuery(this).closest('.content-wrapper').find('.team-information').slideToggle();               
    });  
    jQuery('#select-team-modal').on('hidden.bs.modal', function() {
        setTimeout(function() {  
            jQuery('.select-team-modal .radio-wrapper input[type="radio"]').prop('checked', false);         
            jQuery('#select-team-modal .content-wrapper').find('.team-information').slideUp();
            jQuery('#select-team-modal .content-wrapper').removeClass('active');
        }, 100);

    });  
    jQuery('.select-team-modal .content-wrapper .form-group').click(function(e) {
        e.stopPropagation();
    })
    
    // modal
    jQuery('.modal').on('show.bs.modal', function() {
        setTimeout(function() {
            if (jQuery('.modal .vertical-slider-wrapper').length) {
                jQuery('.vertical-slider-wrapper .vertical-image-slider').slick('refresh');
            }
            jQuery('.modal .custom-select').each(function() {
                var _this = jQuery(this);
                _this.select2({
                    minimumResultsForSearch: -1,
                    dropdownParent: _this.closest("div")

                });
            })
        }, 300);
    });

    jQuery('.profile-modal').on('show.bs.modal', function() {
        setTimeout(function() {
            profilePopupScroll();
        }, 500);
        setTimeout(function() {
            customScroll();
        }, 700)
    });

    jQuery('.template-modal').on('show.bs.modal', function() {
        setTimeout(function() {
            jQuery('.template-modal .template-card-slider').css({
                opacity: 1,
                height: 'auto'
            });
        }, 500);
    });

    jQuery('.template-modal').on('hidden.bs.modal', function() {
        setTimeout(function() {
            jQuery('.template-modal .template-card-slider').removeAttr('style');
        }, 100);
	});

    // scroll to section
    jQuery(".scroll-link").click(function(e) {
        e.preventDefault();
        var _this_id = jQuery(this).attr('scroll-id');

        jQuery('html, body').stop().animate({
            scrollTop: jQuery(".evaluation-block-wrapper[scroll-block='" + _this_id + "']").offset().top - 50
        }, 1000, 'linear');
    });


    // custom dropdown
    if (jQuery('.custom-dropdown .dropdown-menu').length) {
        jQuery('.custom-dropdown .dropdown-menu').each(function() {
            jQuery('.custom-dropdown .dropdown-menu li .dropdown-item').click(function() {
                jQuery(this).parent().siblings().removeClass('active');
                jQuery(this).parent().addClass('active');
                if (jQuery(this).parent().hasClass('active')) {
                    var title_text = jQuery(this).text();
                    jQuery(this).parents('.custom-dropdown').find('.dropdown-title').text(title_text);
                } else {
                    jQuery(this).parents('.custom-dropdown').find('.dropdown-title').text('Please choose');
                }
            });
        });
    }

    // multiple select dropdown
    jQuery('.selectpicker').selectpicker();
    if (jQuery('.selectpicker').length) {
        jQuery('<div class="value-controls"><div class="value-controls-inner"><span class="value-link"><a  href="#" title="Clear all" class="btn btn-outline-primary">Clear all</a></span><span class="value-link"><a href="#" title="Apply filters" class="btn primary-fill-btn">Apply filters</a></span></div></div>').appendTo('.custom-dropdown.multiselect-dropdown .dropdown-menu>.inner');
    }

    // for custom tooltip css changes
    if (jQuery('.tooltip-wrapper .custom-tooltip').length) {
        jQuery('.tooltip-wrapper .custom-tooltip').closest('body').addClass('custom-tooltip-show');
    }

    // header
    jQuery('.site-header .user-account-links .user-dropdown-wrapper>a').click(function(e) {
        e.preventDefault();
        if (jQuery(window).width() < 992) {
            jQuery(this).closest('.user-dropdown-wrapper').toggleClass('open');
        }
    });
    jQuery('.site-header .main-nav ul .has-submenu em').click(function(e) {
        e.stopPropagation();
        if (jQuery(window).width() < 992) {
            jQuery(this).closest('.has-submenu').toggleClass('open').siblings().removeClass('open');
            jQuery(this).closest('.has-submenu').find('.header-submenu').stop(true, true).slideToggle();
            jQuery(this).closest('.has-submenu').siblings().find('.header-submenu').stop(true, true).slideUp();
        }
    });
    jQuery('.site-header .hamburger').click(function() {
        jQuery('html,body').toggleClass('mobile-menu-open');
        jQuery(this).closest(".site-header").find('.has-submenu').removeClass('open');
        jQuery(this).closest(".site-header").find('.has-submenu').find('.header-submenu').stop(true, true).slideUp();
    });

    // step js
    if (jQuery("#step-content-block").length) {
        jQuery("#step-content-block").steps({
            headerTag: ".step-navigation",
            bodyTag: ".details-block",
            transitionEffect: "fade",
            transitionEffectSpeed: 400,
            labels: {
                next: "Next",
                previous: "Back",
                // finish : "Get Results"
            },
            onInit: function(event, current) {
                jQuery('.actions > ul > li:first-child a').attr('class', 'back-step');
                jQuery('.actions > ul > li:nth-child(2) a').attr('class', 'next-step primary-fill-btn btn disable');
                jQuery('.actions > ul > li:last-child a').attr('class', 'finish-btn primary-fill-btn btn disable');

            },

            onStepChanged: function(event, currentIndex, priorIndex) {
                if (priorIndex < currentIndex) {
                    setTimeout(function() {
                        var _this;
                        var arr = [];
                        i = 0;
                        if (jQuery.inArray(true, arr) != -1) {
                            jQuery('.actions > ul > li:nth-child(2) a').attr('class', 'next-step primary-fill-btn btn');
                            if (jQuery('.actions > ul > li:last-child a.finish-btn:visible')) {
                                jQuery('.actions > ul > li:last-child a').attr('class', 'finish-btn primary-fill-btn btn');
                            }
                        } else {
                            jQuery('.actions > ul > li:nth-child(2) a').attr('class', 'next-step primary-fill-btn btn disable');
                            if (jQuery('.actions > ul > li:last-child a.finish-btn:visible')) {
                                jQuery('.actions > ul > li:last-child a').attr('class', 'finish-btn primary-fill-btn btn disable');
                            }
                        }

                    }, 300);
                } else {
                    jQuery('.actions > ul > li:nth-child(2) a').attr('class', 'next-step primary-fill-btn btn');
                }
                if (currentIndex == 0) {
                    jQuery(".custom-steps-block-wrapper").addClass("previous-content");
                } else {
                    jQuery(".custom-steps-block-wrapper").removeClass("previous-content");
                }
            },
        });

    }

    // rating-number-slider js active only perticular number
    jQuery('.rating-card.white-card .card-body .rating-number-list a').on('click',function(){
        jQuery(this).closest('li').siblings().removeClass('active');
        jQuery(this).closest('li').toggleClass('active');
    });



});

/***Window Load***/
jQuery(window).load(function() {
    footerAdj();
});

/***Window Resize***/
jQuery(window).resize(function() {
    footerAdj();
    tabResponsive();
    setTimeout(function() {
        equalHeight();
        tabResponsiveProgress();
        profilePopupScroll();
        dropdown_position();
        expand_btn_func();
    }, 300);
    setTimeout(function() {
        customScroll();
    }, 500);
});