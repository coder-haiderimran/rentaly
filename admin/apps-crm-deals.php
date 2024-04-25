<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from qoduby.tempload.com/html/demo1/dist/apps-crm-deals.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 06:36:24 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Qoduby - Admin & Dashboard template by tempload." />
	<meta name="keywords" content="qoduby, tempload, bootstrap, bootstrap 5, admin, template, dashboard, theme, admin themes, admin, templates" />
	<meta name="author" content="tempload" />	
	<title>Qoduby - Admin & Dashboard Template</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/media/logo/favicon.png" />	

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

	<!-- Global CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

	<!-- Light-Dark Mode & Theme Direction Selector -->
	<script src="assets/js/theme.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Add Modal Start -->
	<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form method="post" action="#" id="addcar" class="needs-validation" novalidate>
					<div class="modal-header px-4">
						<h5 class="modal-title fs-5">Add Deal</h5>
						<button type="button" class="outline-none border-0 p0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">
							<i data-feather="x" stroke-width="1.5" class="text-body"></i>
						</button>
					</div>
					<div class="modal-body p6 px-3">
						<div class="container-fluid">
							<div class="row">
								<div class="col-8">
									<div class="row">
										<div class="col-sm-12 mb5">
											<label for="add-form-1" class="form-label">
												<span>Title</span>
												<span class="text-danger">*</span>
												<i data-feather="info" stroke-width="2" width="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Type a title."></i>
											</label>
											<input id="add-form-1" class="form-control" type="text" autocomplete="off" required>
											<div class="invalid-feedback">You need to fill this field.</div>
										</div>
										<div class="col-sm-12 mb5">
											<label for="add-form-2" class="form-label">
												<span>Category</span>
												<span class="text-danger">*</span>
												<i data-feather="info" stroke-width="2" width="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Choose a category from the list."></i>
											</label>
											<select id="add-form-2" class="form-select js-choice" required>
												<option value="">Select Category</option>
												<option value="1">Contact Initiated</option>
												<option value="2">Needs Initiated</option>
												<option value="3">Meeting Arranged</option>
												<option value="4">Needs Initiated</option>
											</select>
											<div class="invalid-feedback">You need to fill this field.</div>
										</div>
										<div class="col-sm-6 mb5">
											<label for="add-form-3" class="form-label">
												<span>Price</span>
												<i data-feather="info" stroke-width="2" width="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Type a price."></i>
											</label>
											<input id="add-form-3" class="form-control" type="text" autocomplete="off">
										</div>
										<div class="col-sm-6 mb5">
											<label for="add-form-4" class="form-label">
												<span>Date</span>
												<i data-feather="info" stroke-width="2" width="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Type a date."></i>
											</label>
											<input id="add-form-4" class="form-control qd-datepicker-single" type="text" autocomplete="off">
										</div>
										<div class="col-12">
											<label for="add-form-4" class="form-label">
												<span>Notes</span>
												<i data-feather="info" stroke-width="2" width="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Type a notes (optional)."></i>
											</label>
											<textarea class="form-control" id="add-form-4" rows="3"></textarea>
										</div>
									</div>
								</div>
								<div class="col-4">
									<label for="add-form-1" class="form-label">
										<span>Photo</span>
										<i data-feather="info" stroke-width="2" width="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Supports: *.png or *.jpg"></i>
									</label>
									<div id="drop-area" class="d-flex flex-column align-items-center bg-light height-350">
										<div class="width-120 height-120 border-dashed rounded bg-body-secondary position-relative overflow-hidden d-flex align-items-center justify-content-center mb4 mt4">
											<i data-feather="image" stroke-width="1.5" class="text-body"></i>
											<div class="img-fix width-120 height-120 position-absolute top-0 start-0">
												<img id="preview-img" class="">
											</div>
										</div>
										<div class="d-flex flex-grow-1 align-items-center justify-content-center">
											<div class="d-flex flex-column justify-content-start align-items-center">
												<strong class="d-block mb2">Drag & Drop</strong>
												<span class="d-block mb2">OR</span>
												<label for="fileElem" id="fileSelect" class="d-block mb3 text-primary">Browse Photo</label>
												<small>Supports: *.png, *.jpg and *.jpeg</small>
											</div>
										</div>
										<input type="file" id="fileElem" accept="image/*" class="d-none">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
						<button type="submit" class="btn btn-primary">Add Deal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Add Modal End -->

	<div class="app-root d-flex flex-column">
		<!-- ***** Sidebar Start ***** -->
		<div class="app-sidebar">
			<!-- ***** Logo Start ***** -->
			<div class="sidebar-logo d-flex justify-content-center">
				<a href="index.php">
					<img src="assets/media/logo/logo-default.svg" height="30" alt="Qoduby">
				</a>
			</div>
			<!-- ***** Logo End ***** -->

			<!-- ***** Sidebar Menu Start ***** -->
			<div class="sidebar-menu custom-scroll pt-4">
				<!-- ***** Dashboards Menu Start ***** -->
				<ul class="menu-group m-0 px-4 mb-4">
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="home" stroke-width="1.5" height="20" class="me2"></i>
								<span>Dashboards</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="index.php"><span>Default</span></a></li>
							<li><a href="dashboards-ecommerce.php"><span>eCommerce</span></a></li>
							<li><a href="dashboards-projects.php"><span>Projects</span></a></li>
							<li><a href="dashboards-website-analytics.php"><span>Website Analytics</span></a></li>
							<li><a href="dashboards-crypto.php"><span>Crypto</span></a></li>
							<li><a href="dashboards-car-rental.php"><span>Car Rental</span></a></li>
						</ul>
					</li>
				</ul>
				<!-- ***** Dashboards Menu End ***** -->

				<!-- ***** Projects Menu Start ***** -->
				<div class="menu-title mb-2">
					<small>PROJECTS</small>
				</div>
				<ul class="menu-group m-0 px-4 mb-4">	
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="monitor" stroke-width="1.5" height="18" class="me2"></i>
								<span>Car Rental</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="projects-car-rental-car-list.php"><span>Car List</span></a></li>
							<li><a href="projects-car-rental-car-details.php"><span>Car Details</span></a></li>
							<li><a href="projects-car-rental-reservations.php"><span>Reservations</span></a></li>
							<li><a href="projects-car-rental-reservation-details.php"><span>Reservation Details</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="shopping-cart" stroke-width="1.5" height="18" class="me2"></i>
								<span>eCommerce</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="projects-ecommerce-categories.php"><span>Categories</span></a></li>
							<li><a href="projects-ecommerce-add-category.php"><span>Add Category</span></a></li>
							<li><a href="projects-ecommerce-products.php"><span>Products</span></a></li>
							<li><a href="projects-ecommerce-add-product.php"><span>Add Product</span></a></li>
							<li><a href="projects-ecommerce-order-list.php"><span>Order List</span></a></li>
							<li><a href="projects-ecommerce-order-details.php"><span>Order Details</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="layout" stroke-width="1.5" height="18" class="me2"></i>
								<span>Blog</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="projects-blog-categories.php"><span>Categories</span></a></li>
							<li><a href="projects-blog-blog-list.php"><span>Blog List</span></a></li>
							<li><a href="projects-blog-add-blog.php"><span>Add Blog</span></a></li>
							<li><a href="projects-blog-comments.php"><span>Comments</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="code" stroke-width="1.5" height="16" class="me2"></i>
								<span>API Key Manager</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="projects-api-key-manager-api-list.php"><span>API List</span></a></li>
							<li><a href="projects-api-key-manager-languages.php"><span>Languages</span></a></li>
							<li><a href="projects-api-key-manager-language-details.php"><span>Language Details</span></a></li>
						</ul>
					</li>
				</ul>
				<!-- ***** Projects Menu End ***** -->

				<!-- ***** Apps Menu Start ***** -->
				<div class="menu-title mb-2">
					<small>APPS</small>
				</div>
				<ul class="menu-group m-0 px-4 mb-4">	
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="calendar" stroke-width="1.5" height="18" class="me2"></i>
								<span>Calendar</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-calendar-calendar-1.php"><span>Calendar 1</span></a></li>
							<li><a href="apps-calendar-calendar-2.php"><span>Calendar 2</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="message-circle" stroke-width="1.5" height="18" class="me2"></i>
								<span>Chat</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-chat-single-chat.php"><span>Single Chat</span></a></li>
							<li><a href="apps-chat-group-chat.php"><span>Group Chat</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="mail" stroke-width="1.5" height="18" class="me2"></i>
								<span>Inbox</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-inbox-mailbox.php"><span>Mailbox</span></a></li>
							<li><a href="apps-inbox-compose.php"><span>Compose</span></a></li>
							<li><a href="apps-inbox-view-reply.php"><span>View & Reply</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="phone" stroke-width="1.5" height="18" class="me2"></i>
								<span>Contacts</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-contacts-contact-list.php"><span>Contact List</span></a></li>
							<li><a href="apps-contacts-add-contact.php"><span>Add Contact</span></a></li>
							<li><a href="apps-contacts-view-contact.php"><span>View Contact</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="database" stroke-width="1.5" height="18" class="me2"></i>
								<span>Projects</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-projects-project-list.php"><span>Project List</span></a></li>
							<li><a href="apps-projects-add-project.php"><span>Add Project</span></a></li>
							<li><a href="apps-projects-project-overview.php"><span>Project Overview</span></a></li>
							<li><a href="apps-projects-users.php"><span>Users</span></a></li>
							<li><a href="apps-projects-files.php"><span>Files</span></a></li>
							<li><a href="apps-projects-activity.php"><span>Activity</span></a></li>
							<li><a href="apps-projects-settings.php"><span>Settings</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="check-circle" stroke-width="1.5" height="18" class="me2"></i>
								<span>Tasks</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-tasks-overview.php"><span>Overview</span></a></li>
							<li><a href="apps-tasks-add-task.php"><span>Add Task</span></a></li>
							<li><a href="apps-tasks-task-detail.php"><span>Task Detail</span></a></li>
							<li><a href="apps-tasks-users.php"><span>Users</span></a></li>
							<li><a href="apps-tasks-files.php"><span>Files</span></a></li>
						</ul>
					</li>
					<li class="single-menu">
						<a href="apps-kanban-kanban-board.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="columns" stroke-width="1.5" height="18" class="me2"></i>
								<span>Kanban Board</span>
							</div>
						</a>
					</li>
					<li class="sub-menu active">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="pie-chart" stroke-width="1.5" height="18" class="me2"></i>
								<span>CRM</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-crm-contact.php"><span>Contact</span></a></li>
							<li><a href="apps-crm-company.php"><span>Company</span></a></li>
							<li class="active"><a href="apps-crm-deals.php"><span>Deals</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="file" stroke-width="1.5" height="18" class="me2"></i>
								<span>Invoice Manager</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-invoice-manager-invoice-list.php"><span>Invoice List</span></a></li>
							<li><a href="apps-invoice-manager-new-invoice.php"><span>New Invoice</span></a></li>
							<li><a href="apps-invoice-manager-invoice-details.php"><span>Invoice Details</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="headphones" stroke-width="1.5" height="18" class="me2"></i>
								<span>Support Center</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-support-center-overview.php"><span>Overview</span></a></li>
							<li><a href="apps-support-center-ticket-details.php"><span>Ticket Details</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="folder" stroke-width="1.5" height="18" class="me2"></i>
								<span>File Manager</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="apps-file-manager-files.php"><span>Files</span></a></li>
							<li><a href="apps-file-manager-blank-directory.php"><span>Blank Directory</span></a></li>
							<li><a href="apps-file-manager-setting.php"><span>Settings</span></a></li>
						</ul>
					</li>
				</ul>
				<!-- ***** Apps Menu End ***** -->

				<!-- ***** Pages Menu Start ***** -->
				<div class="menu-title mb-2">
					<small>PAGES</small>
				</div>
				<ul class="menu-group m-0 px-4 mb-4">	
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="user" stroke-width="1.5" height="18" class="me2"></i>
								<span>Account & User</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="pages-account-user-overview.php"><span>Overview</span></a></li>
							<li><a href="pages-account-user-settings.php"><span>Settings</span></a></li>
							<li><a href="pages-account-user-security.php"><span>Security</span></a></li>
							<li><a href="pages-account-user-activity.php"><span>Activity</span></a></li>
							<li><a href="pages-account-user-billing.php"><span>Billing</span></a></li>
							<li><a href="pages-account-user-statements.php"><span>Statements</span></a></li>
							<li><a href="pages-account-user-referrals.php"><span>Referrals</span></a></li>
							<li><a href="pages-account-user-project.php"><span>Project</span></a></li>
							<li><a href="pages-account-user-documents.php"><span>Documents</span></a></li>
							<li><a href="pages-account-user-followers.php"><span>Followers</span></a></li>
							<li><a href="pages-account-user-api-keys.php"><span>API Keys</span></a></li>
							<li><a href="pages-account-user-logs.php"><span>Logs</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="key" stroke-width="1.5" height="18" class="me2"></i>
								<span>Authentication</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="pages-authentication-sign-in.php"><span>Sign-in</span></a></li>
							<li><a href="pages-authentication-sign-up.php"><span>Sign-up</span></a></li>
							<li><a href="pages-authentication-reset-password.php"><span>Reset Password</span></a></li>
							<li><a href="pages-authentication-new-password.php"><span>New Password</span></a></li>
						</ul>
					</li>
					<li class="single-menu">
						<a href="pages-timeline.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="clock" stroke-width="1.5" height="18" class="me2"></i>
								<span>Timeline</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a href="pages-faqs.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="help-circle" stroke-width="1.5" height="18" class="me2"></i>
								<span>FAQs</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a href="pages-pricing.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="dollar-sign" stroke-width="1.5" height="18" class="me2"></i>
								<span>Pricing</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a href="pages-gallery.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="camera" stroke-width="1.5" height="18" class="me2"></i>
								<span>Gallery</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a href="pages-search-result.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="search" stroke-width="1.5" height="18" class="me2"></i>
								<span>Search Result</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a href="pages-coming-soon.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="watch" stroke-width="1.5" height="18" class="me2"></i>
								<span>Coming Soon</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a href="pages-404-error.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
								<span>404 Error</span>
							</div>
						</a>
					</li>
				</ul>
				<!-- ***** Pages Menu End ***** -->

				<!-- ***** Help Menu Start ***** -->
				<div class="menu-title mb-2">
					<small>HELP</small>
				</div>
				<ul class="menu-group m-0 px-4 pb-1 mb-3">	
					<li class="single-menu">
						<a target="_blank" href="../../../documentation/components.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="book" stroke-width="1.5" height="18" class="me2"></i>
								<span>Components</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a target="_blank" href="../../../documentation/index.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="file" stroke-width="1.5" height="18" class="me2"></i>
								<span>Documentation</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a target="_blank" href="../../../documentation/changelog.php" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="terminal" stroke-width="1.5" height="18" class="me2"></i>
								<span>Changelog</span>
							</div>
						</a>
					</li>
				</ul>
				<!-- ***** Help Menu End ***** -->
			</div>
			<!-- ***** Sidebar Menu End ***** -->

			<!-- ***** Sidebar Footer Start ***** -->
			<div class="sidebar-footer d-flex align-items-center justify-content-center">
				<a href="../../../documentation/index.php" class="sidebar-footer-button">Docs & Components</a>
			</div>
			<!-- ***** Sidebar Footer End ***** -->
		</div>
		<!-- ***** Sidebar End ***** -->

		<!-- ***** Responsive Menu Backdrop Start ***** -->
		<div class="menu-backdrop"></div>
		<!-- ***** Responsive Menu Backdrop End ***** -->
		
		<!-- ***** Main Start ***** -->
		<main class="app-main">
			<!-- ***** Header Start ***** -->
			<header class="main-header d-flex justify-content-between">
				<!-- ***** Sidebar Menu Open Button Start ***** -->
				<a href="javascript:;" class="sidebar-menu-trigger"><span>Menu</span></a>
				<!-- ***** Sidebar Menu Open Button End ***** -->

				<!-- ***** Navbar Start ***** -->
				<nav class="top-nav">
					<ul class="menu-group">
						<!-- ***** Dashboards Menu Start ***** -->
						<li class="sub-menu open-mega-menu">
							<a class="menu-link" href="javascript:;">
								Dashboards
								<i class="arrow" data-feather="chevron-down" width="14"></i>
							</a>
							<div class="mega-menu-wrapper">
								<div class="mega-menu">
									<div class="container-fluid">
										<div class="row g-0 align-items-center">
											<div class="col-lg-7 mb-sm-1">
												<div class="cover">
													<img src="assets/media/menu/1.jpg" class="img-fluid w-100" alt="">
													<div class="text p-3 d-flex align-items-center justify-content-center">
														<div class="text-center">
															<h6 class="text-white mb-1">Want to see an overview?</h6>
															<p class="text-white mb-4">See all the pages at once.</p>
															<a href="#" class="btn btn-success">View All Pages</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-5">
												<div class="menu-content ps6 sm-p-0">
													<strong class="text-heading d-block mb-2">DASHBOARDS</strong>
													<ul class="mega-sub-menu">
														<li><a class="hover-primary" href="index.php">Default</a></li>
														<li><a class="hover-primary" href="dashboards-ecommerce.php">eCommerce</a></li>
														<li><a class="hover-primary" href="dashboards-projects.php">Projects</a></li>
														<li><a class="hover-primary" href="dashboards-website-analytics.php">Website Analytics</a></li>
														<li><a class="hover-primary" href="dashboards-crypto.php">Crypto</a></li>
														<li><a class="hover-primary" href="dashboards-car-rental.php">Car Rental</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!-- ***** Dashboards Menu End ***** -->
						
						<!-- ***** Projects Menu Start ***** -->
						<li class="sub-menu open-mega-menu">
							<a class="menu-link" href="javascript:;">
								Projects
								<i class="arrow" data-feather="chevron-down" width="14"></i>
							</a>
							<div class="mega-menu-wrapper large-menu">
								<div class="mega-menu">
									<div class="container-fluid">
										<div class="row g-0">
											<div class="col-lg-12">
												<div class="menu-content">
													<div class="row">
														<div class="col-sm-3 mb-sm-1">
															<strong class="text-heading d-block mb-2">E-COMMERCE</strong>
															<ul class="mega-sub-menu">
																<li><a class="hover-primary" href="projects-ecommerce-categories.php">Categories</a></li>
																<li><a class="hover-primary" href="projects-ecommerce-add-category.php">Add Category</a></li>
																<li><a class="hover-primary" href="projects-ecommerce-products.php">Products</a></li>
																<li><a class="hover-primary" href="projects-ecommerce-add-product.php">Add Product</a></li>
																<li><a class="hover-primary" href="projects-ecommerce-order-list.php">Order List</a></li>
																<li><a class="hover-primary" href="projects-ecommerce-order-details.php">Order Details</a></li>
															</ul>
														</div>
														<div class="col-sm-3 mb-sm-1">
															<strong class="text-heading d-block mb-2">BLOG & CMS</strong>
															<ul class="mega-sub-menu">
																<li><a class="hover-primary" href="projects-blog-categories.php">Categories</a></li>
																<li><a class="hover-primary" href="projects-blog-blog-list.php">Blog List</a></li>
																<li><a class="hover-primary" href="projects-blog-add-blog.php">Add Blog</a></li>
																<li><a class="hover-primary" href="projects-blog-comments.php">Comments</a></li>
															</ul>
														</div>
														<div class="col-sm-3 mb-sm-1">
															<strong class="text-heading d-block mb-2">CAR RENTAL</strong>
															<ul class="mega-sub-menu">
																<li><a class="hover-primary" href="projects-car-rental-car-list.php">Car List</a></li>
																<li><a class="hover-primary" href="projects-car-rental-car-details.php">Car Details</a></li>
																<li><a class="hover-primary" href="projects-car-rental-reservations.php">Reservations</a></li>
																<li><a class="hover-primary" href="projects-car-rental-reservation-details.php">Reservation Details</a></li>
															</ul>
														</div>
														<div class="col-sm-3">
															<strong class="text-heading d-block mb-2">API KEY MANAGER</strong>
															<ul class="mega-sub-menu">
																<li><a class="hover-primary" href="projects-api-key-manager-api-list.php">API List</a></li>
																<li><a class="hover-primary" href="projects-api-key-manager-languages.php">Languages</a></li>
																<li><a class="hover-primary" href="projects-api-key-manager-language-details.php">Language Details</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!-- ***** Projects Menu End ***** -->

						<!-- ***** Apps Menu Start ***** -->
						<li class="sub-menu open-sub-menu">
							<a class="menu-link" href="javascript:;">
								Apps
								<i class="arrow" data-feather="chevron-down" width="14"></i>
							</a>
							<div class="top-menu-group-wrapper">
								<ul class="top-menu-group">	
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="calendar" stroke-width="1.5" height="18" class="me2"></i>
												<span>Calendar</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-calendar-calendar-1.php"><span>Calendar 1</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-calendar-calendar-2.php"><span>Calendar 2</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="message-circle" stroke-width="1.5" height="18" class="me2"></i>
												<span>Chat</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-chat-single-chat.php"><span>Single Chat</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-chat-group-chat.php"><span>Group Chat</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="mail" stroke-width="1.5" height="18" class="me2"></i>
												<span>Inbox</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-inbox-mailbox.php"><span>Mailbox</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-inbox-compose.php"><span>Compose</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-inbox-view-reply.php"><span>View & Reply</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="phone" stroke-width="1.5" height="18" class="me2"></i>
												<span>Contacts</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-contacts-contact-list.php"><span>Contact List</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-contacts-add-contact.php"><span>Add Contact</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-contacts-view-contact.php"><span>View Contact</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="database" stroke-width="1.5" height="18" class="me2"></i>
												<span>Projects</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-projects-project-list.php"><span>Project List</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-projects-add-project.php"><span>Add Project</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-projects-project-overview.php"><span>Project Overview</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-projects-users.php"><span>Users</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-projects-files.php"><span>Files</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-projects-activity.php"><span>Activity</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-projects-settings.php"><span>Settings</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="check-circle" stroke-width="1.5" height="18" class="me2"></i>
												<span>Tasks</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-tasks-overview.php"><span>Overview</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-tasks-add-task.php"><span>Add Task</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-tasks-task-detail.php"><span>Task Detail</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-tasks-users.php"><span>Users</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-tasks-files.php"><span>Files</span></a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="apps-kanban-kanban-board.php" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="columns" stroke-width="1.5" height="18" class="me2"></i>
												<span>Kanban Board</span>
											</div>
										</a>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="pie-chart" stroke-width="1.5" height="18" class="me2"></i>
												<span>CRM</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-crm-contact.php"><span>Contact</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-crm-company.php"><span>Company</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-crm-deals.php"><span>Deals</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="file" stroke-width="1.5" height="18" class="me2"></i>
												<span>Invoice Manager</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-invoice-manager-invoice-list.php"><span>Invoice List</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-invoice-manager-new-invoice.php"><span>New Invoice</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-invoice-manager-invoice-details.php"><span>Invoice Details</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="headphones" stroke-width="1.5" height="18" class="me2"></i>
												<span>Support Center</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-support-center-overview.php"><span>Overview</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-support-center-ticket-details.php"><span>Ticket Details</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="folder" stroke-width="1.5" height="18" class="me2"></i>
												<span>File Manager</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="apps-file-manager-files.php"><span>Files</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-file-manager-blank-directory.php"><span>Blank Directory</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="apps-file-manager-setting.php"><span>Settings</span></a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<!-- ***** Apps Menu End ***** -->

						<!-- ***** Pages Menu Start ***** -->
						<li class="sub-menu open-sub-menu">
							<a class="menu-link" href="javascript:;">
								Pages
								<i class="arrow" data-feather="chevron-down" width="14"></i>
							</a>
							<div class="top-menu-group-wrapper">
								<ul class="top-menu-group">	
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="user" stroke-width="1.5" height="18" class="me2"></i>
												<span>Account & User</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-overview.php"><span>Overview</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-settings.php"><span>Settings</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-security.php"><span>Security</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-activity.php"><span>Activity</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-billing.php"><span>Billing</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-statements.php"><span>Statements</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-referrals.php"><span>Referrals</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-project.php"><span>Project</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-documents.php"><span>Documents</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-followers.php"><span>Followers</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-api-keys.php"><span>API Keys</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-account-user-logs.php"><span>Logs</span></a></li>
											</ul>
										</div>
									</li>
									<li class="top-sub-menu">
										<a href="javascript:;" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="key" stroke-width="1.5" height="18" class="me2"></i>
												<span>Authentication</span>
											</div>
											<i class="arrow" data-feather="chevron-right" height="14"></i>
										</a>
										<div class="top-level-menu-wrapper">
											<ul class="top-sub-menu-group">
												<li><a class="d-flex align-items-center justify-content-between" href="pages-authentication-sign-in.php"><span>Sign-in</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-authentication-sign-up.php"><span>Sign-up</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-authentication-reset-password.php"><span>Reset Password</span></a></li>
												<li><a class="d-flex align-items-center justify-content-between" href="pages-authentication-new-password.php"><span>New Password</span></a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="pages-timeline.php" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="clock" stroke-width="1.5" height="18" class="me2"></i>
												<span>Timeline</span>
											</div>
										</a>
									</li>
									<li>
										<a href="pages-faqs.php" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="help-circle" stroke-width="1.5" height="18" class="me2"></i>
												<span>FAQs</span>
											</div>
										</a>
									</li>
									<li>
										<a href="pages-pricing.php" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="dollar-sign" stroke-width="1.5" height="18" class="me2"></i>
												<span>Pricing</span>
											</div>
										</a>
									</li>
									<li>
										<a href="pages-gallery.php" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="camera" stroke-width="1.5" height="18" class="me2"></i>
												<span>Gallery</span>
											</div>
										</a>
									</li>
									<li>
										<a href="pages-search-result.php" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="search" stroke-width="1.5" height="18" class="me2"></i>
												<span>Search Result</span>
											</div>
										</a>
									</li>
									<li>
										<a href="pages-coming-soon.php" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="watch" stroke-width="1.5" height="18" class="me2"></i>
												<span>Coming Soon</span>
											</div>
										</a>
									</li>
									<li>
										<a href="pages-404-error.php" class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
												<span>404 Error</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- ***** Pages Menu End ***** -->

						<!-- ***** Help Menu Start ***** -->
						<li class="sub-menu open-mega-menu">
							<a class="menu-link" href="javascript:;">
								Help
								<i class="arrow" data-feather="chevron-down" width="14"></i>
							</a>
							<div class="mega-menu-wrapper small-menu">
								<div class="mega-menu">
									<div class="container-fluid">
										<div class="row g-0 align-items-center">
											<div class="col-lg-6 mb-sm-1">
												<div class="menu-content">
													<ul class="mega-sub-menu">
														<li class="mb-3">
															<a href="../../../documentation/components.php" class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<i data-feather="book" stroke-width="1.5" height="18" class="me2"></i>
																	<span>Components</span>
																</div>
															</a>
														</li>
														<li class="mb-3">
															<a href="../../../documentation/index.php" class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<i data-feather="file" stroke-width="1.5" height="18" class="me2"></i>
																	<span>Documentation</span>
																</div>
															</a>
														</li>
														<li>
															<a href="../../../documentation/changelog.php" class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<i data-feather="terminal" stroke-width="1.5" height="18" class="me2"></i>
																	<span>Changelog</span>
																</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="cover">
													<img src="assets/media/menu/3.jpg" class="img-fluid w-100" alt="">
													<div class="text p-3 d-flex align-items-center justify-content-center">
														<div class="text-center">
															<p class="text-white mb-0">Do you need help?</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!-- ***** Help Menu End ***** -->
					</ul>
				</nav>
				<!-- ***** Navbar End ***** -->

				<div class="header-tools d-flex align-items-center">
					<!-- ***** Search Dropdown Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<i data-feather="search" stroke-width="2" height="22" class="text-secondary"></i>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-350 p0">
							<!-- ***** Content Start ***** -->
							<div class="p3">
								<div class="w-100 position-relative d-flex align-items-center">
									<i data-feather="search" stroke-width="2" height="22" class="text-body-tertiary position-absolute"></i>
									<input type="text" class="form-control border-0 outline-none input-reset ps6 bg-transparent" placeholder="Search...">
								</div>
							</div>
							<hr class="opacity-20 m0">
							<div class="p5 d-flex flex-row justify-content-between">
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-primary-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="message-circle" stroke-width="2" height="36" class="text-primary"></i>
									</div>
									<span>Chat</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-info-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="folder" stroke-width="2" height="36" class="text-info"></i>
									</div>
									<span>Files</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-success-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="mail" stroke-width="2" height="36" class="text-success"></i>
									</div>
									<span>Inbox</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-warning-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="check-circle" stroke-width="2" height="36" class="text-warning"></i>
									</div>
									<span>Tasks</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-danger-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="pie-chart" stroke-width="2" height="36" class="text-danger"></i>
									</div>
									<span>CRM</span>
								</a>
							</div>
							<div class="bg-light p5 pt3 pb3">Recently Searched:</div>
							<div class="height-350 overflow-hidden search-scroll ss-container">
								<div class="p5">
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="calendar" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Calendar</span>
										<span class="text-heading">"birthday"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="message-circle" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Chat</span>
										<span class="text-heading">"october invoice"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="mail" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Inbox</span>
										<span class="text-heading">"project files"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="phone" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Contacts</span>
										<span class="text-heading">"justin case"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="database" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Projects</span>
										<span class="text-heading">"mobile app sketch file"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="check-circle" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Tasks</span>
										<span class="text-heading">"seo report"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="columns" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Kanban Board</span>
										<span class="text-heading">"design assets"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="check" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">ToDo</span>
										<span class="text-heading">"shopping list"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="pie-chart" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">CRM</span>
										<span class="text-heading">"barry tone"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="calendar" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Calendar</span>
										<span class="text-heading">"birthday"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="message-circle" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Chat</span>
										<span class="text-heading">"october invoice"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="mail" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Inbox</span>
										<span class="text-heading">"project files"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="phone" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Contacts</span>
										<span class="text-heading">"justin case"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="database" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Projects</span>
										<span class="text-heading">"mobile app sketch file"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="check-circle" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Tasks</span>
										<span class="text-heading">"seo report"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="columns" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Kanban Board</span>
										<span class="text-heading">"design assets"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="check" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">ToDo</span>
										<span class="text-heading">"shopping list"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="pie-chart" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">CRM</span>
										<span class="text-heading">"barry tone"</span>
									</a>
								</div>
							</div>
							<!-- ***** Content End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Search Dropdown End ***** -->

					<!-- ***** Chat Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-disableScrolling="false">
							<i data-feather="message-square" stroke-width="2" height="22" class="text-secondary"></i>
							<span class="badge rounded-pill text-bg-danger position-absolute scale-70 top-0 end-0">3</span>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Chat Content Start ***** -->
						<div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
							<div class="offcanvas-header p6">
								<div class="d-flex">
									<div class="d-flex align-items-center">
										<div class="position-relative">
											<div class="img-fix rounded-circle me3 height-40 width-40">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="badge rounded-pill text-bg-success position-absolute scale-70 bottom-0 end-0">&nbsp;</span>
										</div>
										<h6 class="mb0">Justin Case</h6>
									</div>
								</div>
								<div class="d-flex">
									<div class="dropdown">
										<button type="button" class="border-0 bg-transparent p0 outline-none me2 dropdown-toggle arrow-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
											<i data-feather="more-horizontal" stroke-width="2" height="22" class="text-body"></i>
										</button>
										<ul class="dropdown-menu">
											<li>
												<a class="dropdown-item d-flex align-items-center" href="#">
													<i data-feather="archive" stroke-width="1.5" height="14" class="text-body me1"></i>
													Archive
												</a>
											</li>
											<li>
												<a class="dropdown-item d-flex align-items-center" href="#">
													<i data-feather="mic-off" stroke-width="1.5" height="16" class="text-body me1"></i>
													Muted
												</a>
											</li>
											<li>
												<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
													<div class="d-flex align-items-center">
														<i data-feather="trash-2" stroke-width="1.5" height="16" class="text-body me1"></i>
														Delete
													</div>
													<i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
												</a>
											</li>
										</ul>
  									</div>
									<button type="button" class="border-0 bg-transparent p0 outline-none" data-bs-dismiss="offcanvas" aria-label="Close">
										<i data-feather="x" stroke-width="2" height="22" class="text-body"></i>
									</button>
								</div>
							</div>
							<div class="offcanvas-body p0 overflow-hidden">
								<div class="p6 pt3 pb3 chat-scroll ss-container" style="height: 100%;">
									<div class="d-flex flex-column align-items-start mb6">
										<div class="d-flex align-items-center mb3">
											<div class="img-fix rounded-circle me3 height-30 width-30 me3">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="text-heading me3">Justin Case</span>
											<span>48 min.</span>
										</div>
										<div class="p4 bg-info-subtle rounded">
											<span class="text-heading">Hi, can you send me the files of the new project by email?</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-end mb6">
										<div class="d-flex align-items-center mb3">
											<span>46 min.</span>
											<span class="text-heading ms3">You</span>
											<div class="img-fix rounded-circle me3 height-30 width-30 ms3">
												<img src="assets/media/avatars/6.jpg" alt="">
											</div>
										</div>
										<div class="p4 bg-light rounded">
											<span class="text-heading">I don't have all the files. I can only send documents.</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-start mb6">
										<div class="d-flex align-items-center mb3">
											<div class="img-fix rounded-circle me3 height-30 width-30 me3">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="text-heading me3">Justin Case</span>
											<span>43 min.</span>
										</div>
										<div class="p4 bg-info-subtle rounded">
											<span class="text-heading">Okey send.</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-end mb6">
										<div class="d-flex align-items-center mb3">
											<span>40 min.</span>
											<span class="text-heading ms3">You</span>
											<div class="img-fix rounded-circle me3 height-30 width-30 ms3">
												<img src="assets/media/avatars/6.jpg" alt="">
											</div>
										</div>
										<div class="p4 mb1 bg-light rounded">
											<a href="#" class="text-heading d-flex align-items-center text-decoration-none">
												<i data-feather="file" stroke-width="1.5" height="22" class="text-heading me2"></i>
												New Project.docx
											</a>
										</div>
										<div class="p4 bg-light rounded">
											<span class="text-heading">This file contains all the information.</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-start">
										<div class="d-flex align-items-center mb3">
											<div class="img-fix rounded-circle me3 height-30 width-30 me3">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="text-heading me3">Justin Case</span>
											<span>38 min.</span>
										</div>
										<div class="p4 bg-info-subtle rounded">
											<span class="text-heading">Thank you very much. I owe you lunch 😁</span>
										</div>
									</div>
								</div>
							</div>
							<div class="p6 bg-light">
								<div class="bg-chat border p1 rounded d-flex align-items-center justify-content-between">
									<div>
										<a href="#" class="bg-light width-40 height-40 rounded d-flex align-items-center justify-content-center">
											<i data-feather="paperclip" stroke-width="1.5" height="18" class="text-body"></i>
										</a>
									</div>
									<div class="w-100">
										<input type="text" class="form-control border-0 outline-none input-reset bg-transparent" placeholder="Type your message here">
									</div>
									<div>
										<a href="#" class="width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="send" stroke-width="1.5" height="22" class="text-body"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- ***** Chat Content Start ***** -->
					</div>
					<!-- ***** Chat End ***** -->

					<!-- ***** My Apps Dropdown Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<i data-feather="hard-drive" stroke-width="2" height="22" class="text-secondary"></i>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-350 p0">
							<!-- ***** Content Start ***** -->
							<div class="d-flex justify-content-between align-items-center p5">
								<h6 class="mb0">My Apps</h6>
								<span class="badge rounded-pill badge-soft text-bg-info">7 Updates</span>
							</div>
							<hr class="opacity-20 m0">
							<div class="p5">
								<div class="container-fluid p0">
									<div class="row">
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light position-relative">
												<span class="badge rounded-pill text-bg-success position-absolute scale-50 top-0 end-0">
													<i data-feather="check" stroke-width="2" height="22" class="text-white"></i>
												</span>
												<img class="mb-2" src="assets/media/logos/github.svg" height="30" alt="">
												<span class="text-heading">Github</span>
											</a>
										</div>
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
												<img class="mb-2" src="assets/media/logos/bitbucket.svg" height="30" alt="">
												<span class="text-heading">Bitbucket</span>
											</a>
										</div>
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
												<img class="mb-2" src="assets/media/logos/dribbble.svg" height="30" alt="">
												<span class="text-heading">Dribbble</span>
											</a>
										</div>
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
												<img class="mb-2" src="assets/media/logos/dropbox.svg" height="30" alt="">
												<span class="text-heading">Dropbox</span>
											</a>
										</div>
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
												<img class="mb-2" src="assets/media/logos/mailchimp.svg" height="30" alt="">
												<span class="text-heading">Mail</span>
											</a>
										</div>
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
												<img class="mb-2" src="assets/media/logos/slack.svg" height="30" alt="">
												<span class="text-heading">Slack</span>
											</a>
										</div>
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
												<img class="mb-2" src="assets/media/logos/amazon.svg" height="30" alt="">
												<span class="text-heading">AWS</span>
											</a>
										</div>
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
												<img class="mb-2" src="assets/media/logos/gitlab.svg" height="30" alt="">
												<span class="text-heading">Gitlab</span>
											</a>
										</div>
										<div class="col-4 mb5">
											<a href="#" class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
												<img class="mb-2" src="assets/media/logos/figma.svg" height="30" alt="">
												<span class="text-heading">Figma</span>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<a class="btn btn-primary btn-soft btn-sm d-block" href="#" role="button">View App Market</a>
										</div>
									</div>
								</div>
							</div>
							<!-- ***** Content End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** My Apps Dropdown End ***** -->

					<!-- ***** Notification Dropdown Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<i data-feather="bell" stroke-width="2" height="22" class="text-secondary"></i>
							<span class="badge rounded-pill text-bg-info position-absolute scale-70 top-0 end-0">2</span>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-350 p0">
							<!-- ***** Content Start ***** -->
							<div class="d-flex justify-content-between align-items-center p5">
								<h6 class="mb0">Notifications</h6>
								<span class="badge rounded-pill badge-soft text-bg-primary">4 New</span>
							</div>
							<hr class="opacity-20 m0">
							<div class="p5">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="img-fix width-40 height-40 rounded-circle me3">
										<img src="assets/media/avatars/1.jpg" alt="">
									</div>
									<div class="d-flex flex-column align-items-start">
										<strong class="text-heading me1">Congratulations Barry! 🥳</strong>
										<span class="mb1 text-body">You've been the top seller this month.</span>
										<span class="badge rounded-pill badge-soft text-bg-info">16 minutes ago</span>
									</div>
								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="me3">
										<div class="rounded-circle bg-primary-subtle width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="dollar-sign" stroke-width="1.5" height="22" class="text-primary"></i>
										</div>
									</div>
									<div class="d-flex flex-column align-items-start">
										<strong class="text-heading me1">Qoduby has been sold 🤑</strong>
										<span class="mb1 text-body">You earned $40 from this sale.</span>
										<span class="badge rounded-pill badge-soft text-bg-primary">22 minutes ago</span>
									</div>
								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="me3">
										<div class="rounded-circle bg-success-subtle width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="bar-chart-2" stroke-width="1.5" height="22" class="text-success"></i>
										</div>
									</div>
									<div class="d-flex flex-column align-items-start">
										<strong class="text-heading me1">Monthly Report 👨‍💻</strong>
										<span class="mb1 text-body">The monthly report was uploaded.</span>
										<span class="badge rounded-pill badge-soft text-bg-success">27 minutes ago</span>
									</div>
								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="img-fix width-40 height-40 rounded-circle me3">
										<img class="rounded-circle" src="assets/media/avatars/8.jpg" alt="">
									</div>
									<div class="d-flex flex-column align-items-start">
										<strong class="text-heading me1">New message received 👋🏻</strong>
										<span class="mb1 text-body">You have 7 unread messages.</span>
										<span class="badge rounded-pill badge-soft text-bg-info">48 minutes ago</span>
									</div>
								</a>
								<hr class="opacity-20 border-dashed">
								<a class="btn btn-primary btn-soft btn-sm d-block" href="#" role="button">Read All Notifications</a>
							</div>
							<!-- ***** Content End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Notification Dropdown End ***** -->

					<!-- ***** Profile Dropdown Start ***** -->
					<div class="dropdown">
						<!-- ***** Profile Image Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="img-fix width-40 height-40 rounded">
								<img src="assets/media/avatars/6.jpg" alt="">
							</div>
						</a>
						<!-- ***** Profile Image End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-250 p0">
							<!-- ***** Content Info Start ***** -->
							<div class="d-flex justify-content-start mb3 p5 pb0">
								<div class="img-fix width-40 height-40 me3 rounded">
									<img src="assets/media/avatars/6.jpg" alt="">
								</div>
								<div class="d-flex flex-column text-start">
									<div class="d-flex flex-row align-items-center">
										<strong class="text-heading me1">Barry Tone</strong>
										<span class="badge badge-soft rounded-pill text-bg-success">Pro</span>
									</div>
									<small>@QodubyTheme</small>
								</div>
							</div>
							<!-- ***** Content Info End ***** -->

							<!-- ***** Balance Start ***** -->
							<div class="p5 pt0">
								<div class="bg-secondary-subtle p3 rounded d-flex justify-content-between">
									<span>Balance</span>
									<strong class="text-heading">$3.754,45</strong>
								</div>
							</div>
							<hr class="opacity-20 mt0">
							<!-- ***** Balance End ***** -->

							<!-- ***** Menu Start ***** -->
							<div class="p5 pt0 pb0">
								<ul class="nav flex-column text-start p0">
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-overview.php">My Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="apps-file-manager-files.php">My Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-project.php">My Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-statements.php">My Statements</a>
									</li>
								</ul>
							</div>
							<hr class="opacity-20">
							<!-- ***** Menu End ***** -->

							<!-- ***** Settings Start ***** -->
							<div class="p5 pt0">
								<ul class="nav flex-column text-start p0">
									<li class="nav-item">
										<div class="dropdown">
											<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center dropdown-toggle outline-none" data-bs-toggle="dropdown" aria-expanded="false" href="#">
												Language
												<span class="badge badge-soft rounded-pill text-bg-primary">English</span>
											</a>
											<ul class="dropdown-menu width-200 flex-column p5 pt4 pb4 text-start">
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center" href="#">
														English
														<i data-feather="check" stroke-width="1.5" height="22" class="text-success"></i>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0" href="#">Spanish</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0" href="#">French</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0" href="#">Japanese</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="nav-item">
										<div class="dropdown">
											<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center dropdown-toggle outline-none" data-bs-toggle="dropdown" aria-expanded="false" href="#">
												Theme
												<span class="badge badge-soft rounded-pill text-bg-light" id="current-theme">Light</span>
											</a>
											<ul class="dropdown-menu width-200 flex-column p5 pt4 pb4 text-start">
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center theme-change-light" href="#">
														Light
														<i data-feather="check" stroke-width="1.5" height="22" class="text-success"></i>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center theme-change-dark" href="#">Dark</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-settings.php">Account Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-authentication-sign-in.php">Sign Out</a>
									</li>
								</ul>
							</div>
							<!-- ***** Settings End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Profile Dropdown End ***** -->

					<!-- ***** Header Menu Open Button Start ***** -->
					<a class="header-menu-trigger ms3"><span>Menu</span></a>
					<!-- ***** Header Menu Open Button End ***** -->
				</div>
			</header>
			<!-- ***** Header End ***** -->

			<!-- ***** Content Start ***** -->
			<div class="app-content p6 pb2 smp1">
				<div class="container p0">
					<!-- Page Top Start -->
					<div class="row mb6 align-items-center">
						<div class="col-md-6 mobile-bottom-fix">
							<h1 class="page-title mb2">Deals</h1>
							<nav class="breadcrumb-nav" aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Deals</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 text-start text-md-end">
							<!-- Export Button Start-->
							<button class="btn btn-primary btn-soft me2">Export</button>
							<!-- Export Button End-->

							<!-- Add Button Start-->
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add New</button>
							<!-- Add Button End-->
						</div>
					</div>
					<!-- Page Top End -->

					<!-- Content Start -->
					<div class="row">
						<!-- Contact Initiated Start -->
						<div class="col-xxl-3 col-lg-6 mb5">
							<div class="d-flex align-items-center justify-content-start mb4">
								<h6 class="m0 me2">CONTACT INITIATED</h6>
								<span class="badge rounded-pill badge-soft text-bg-primary">5</span>
							</div>
							<div class="deal-list">
								<div class="accordion" id="accordionContact">
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contactCollapse-1" aria-expanded="true" aria-controls="contactCollapse-1">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/3.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Negotiation for marketing meeting</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$48k</span>
															<span>09 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="contactCollapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionContact">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contactCollapse-2" aria-expanded="false" aria-controls="contactCollapse-2">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/4.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Software agreement with Sage Technologies</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$26k</span>
															<span>10 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="contactCollapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionContact">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contactCollapse-3" aria-expanded="false" aria-controls="contactCollapse-3">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/13.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Social media deal with Equipmentee</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$1.4k</span>
															<span>01 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="contactCollapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionContact">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contactCollapse-4" aria-expanded="false" aria-controls="contactCollapse-4">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/10.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Quote from Norman & Jane Gordon.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$120k</span>
															<span>17 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="contactCollapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionContact">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contactCollapse-5" aria-expanded="false" aria-controls="contactCollapse-5">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="width-40 height-40 rounded-circle me3 d-flex align-items-center justify-content-center bg-danger-subtle">
														<h6 class="m0 text-danger">SA</h6>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Justin Case needs list interview.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$53k</span>
															<span>02 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="contactCollapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionContact">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Contact Initiated End -->
						
						<!-- Needs Initiated Start -->
						<div class="col-xxl-3 col-lg-6 mb5">
							<div class="d-flex align-items-center justify-content-start mb4">
								<h6 class="m0 me2">NEEDS IDENTIFIED</h6>
								<span class="badge rounded-pill badge-soft text-bg-info">6</span>
							</div>
							<div class="deal-list">
								<div class="accordion" id="accordionNeeds">
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#needsCollapse-1" aria-expanded="false" aria-controls="needsCollapse-1">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/8.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Recruitment process tracking software</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$54k</span>
															<span>26 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="needsCollapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionNeeds">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#needsCollapse-2" aria-expanded="false" aria-controls="needsCollapse-2">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/3.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Chief physician meeting for hospital automation</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$34k</span>
															<span>12 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="needsCollapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionNeeds">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#needsCollapse-3" aria-expanded="false" aria-controls="needsCollapse-3">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="width-40 height-40 rounded-circle me3 d-flex align-items-center justify-content-center bg-info-subtle">
														<h6 class="m0 text-info">PA</h6>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Internet speed optimizer purchase.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$3.5k</span>
															<span>20 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="needsCollapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionNeeds">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#needsCollapse-4" aria-expanded="false" aria-controls="needsCollapse-4">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/15.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Security camera storage device rental.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$26k</span>
															<span>16 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="needsCollapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionNeeds">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#needsCollapse-5" aria-expanded="false" aria-controls="needsCollapse-5">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="width-40 height-40 rounded-circle me3 d-flex align-items-center justify-content-center bg-warning-subtle">
														<h6 class="m0 text-warning">YB</h6>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Editing a cargo tracking application.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$16k</span>
															<span>27 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="needsCollapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionNeeds">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#needsCollapse-6" aria-expanded="false" aria-controls="needsCollapse-6">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/11.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Negotiation for sales meeting.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$27k</span>
															<span>10 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="needsCollapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionNeeds">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Needs Initiated End -->

						<!-- Meeting Arranged Start -->
						<div class="col-xxl-3 col-lg-6 mb5">
							<div class="d-flex align-items-center justify-content-start mb4">
								<h6 class="m0 me2">MEETING ARRANGED</h6>
								<span class="badge rounded-pill badge-soft text-bg-warning">5</span>
							</div>
							<div class="deal-list">
								<div class="accordion" id="accordionMeeting">
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#meetingCollapse-1" aria-expanded="false" aria-controls="meetingCollapse-1">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="width-40 height-40 rounded-circle me3 d-flex align-items-center justify-content-center bg-info-subtle">
															<h6 class="m0 text-info">SA</h6>
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Warehouse software for Grocery companies.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$22k</span>
															<span>09 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="meetingCollapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionMeeting">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#meetingCollapse-2" aria-expanded="false" aria-controls="meetingCollapse-2">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/4.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Pharmacy warehouse software package</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$46k</span>
															<span>07 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="meetingCollapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionMeeting">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#meetingCollapse-3" aria-expanded="false" aria-controls="meetingCollapse-3">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/12.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">City hospital computer procurement tender.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$11k</span>
															<span>04 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="meetingCollapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionMeeting">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#meetingCollapse-4" aria-expanded="false" aria-controls="meetingCollapse-4">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="width-40 height-40 rounded-circle me3 d-flex align-items-center justify-content-center bg-success-subtle">
															<h6 class="m0 text-success">CA</h6>
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Price quote for furniture company.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$7.5k</span>
															<span>25 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="meetingCollapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionMeeting">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#meetingCollapse-5" aria-expanded="false" aria-controls="meetingCollapse-5">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/1.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Automatic door lock hardware and software</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$40k</span>
															<span>20 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="meetingCollapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionMeeting">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Meeting Arranged End -->

						<!-- Needs Initiated Start -->
						<div class="col-xxl-3 col-lg-6 mb5">
							<div class="d-flex align-items-center justify-content-start mb4">
								<h6 class="m0 me2">OFFER ACCEPTED</h6>
								<span class="badge rounded-pill badge-soft text-bg-success">6</span>
							</div>
							<div class="deal-list">
								<div class="accordion" id="accordionOffer">
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#offerCollapse-1" aria-expanded="false" aria-controls="offerCollapse-1">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/9.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Need list for Technologyia company</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$21k</span>
															<span>18 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="offerCollapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionOffer">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#offerCollapse-2" aria-expanded="false" aria-controls="offerCollapse-2">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="width-40 height-40 rounded-circle me3 d-flex align-items-center justify-content-center bg-success-subtle">
															<h6 class="m0 text-success">AB</h6>
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Computing software for Justice Engineering.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$43k</span>
															<span>16 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="offerCollapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionOffer">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#offerCollapse-3" aria-expanded="false" aria-controls="offerCollapse-3">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/7.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">New orders from Thomas Rodney Toe.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$64k</span>
															<span>17 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="offerCollapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionOffer">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#offerCollapse-4" aria-expanded="false" aria-controls="offerCollapse-4">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/16.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Demo files prepared for Bella Technologies</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$67k</span>
															<span>12 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="offerCollapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionOffer">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#offerCollapse-5" aria-expanded="false" aria-controls="offerCollapse-5">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="width-40 height-40 rounded-circle me3 d-flex align-items-center justify-content-center bg-primary-subtle">
															<h6 class="m0 text-primary">BB</h6>
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Railroading purchases a new security camera.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$22k</span>
															<span>04 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="offerCollapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionOffer">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#offerCollapse-6" aria-expanded="false" aria-controls="offerCollapse-6">
												<div class="d-flex align-items-start justify-content-start w-100">
													<div class="d-flex">
														<div class="img-fix width-40 height-40 rounded-circle me3">
															<img src="assets/media/avatars/5.jpg" alt="">
														</div>
													</div>
													<div class="d-flex flex-column">
														<strong class="text-heading mb1">Opening a tender for the hotel reservation system.</strong>
														<div class="d-flex align-items-center justify-content-start">
															<span class="badge rounded-pill badge-soft text-bg-primary me3">$10k</span>
															<span>13 Apr, 2023</span>
														</div>
													</div>
												</div>
											</button>
										</div>
										<div id="offerCollapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionOffer">
											<div class="accordion-body border-top-dashed">
												<p class="mb4">Quisque tempor risus enim, sed bibendum tellus molestie eu. Morbi nunc odio, pellentesque.</p>
												<div class="d-flex align-items-center justify-content-between">
													<button class="btn btn-info btn-soft w-50 me4">Call</button>													
													<button class="btn btn-success btn-soft w-50">Message</button>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Needs Initiated End -->
					</div>
					<!-- Content End -->
				</div>
			</div>
			<!-- ***** Content End ***** -->

			<!-- ***** Footer Start ***** -->
			<footer class="p6 pt5 pb5">
				<div class="container-fluid p0">
					<div class="row">
						<div class="col-sm-6 text-center text-lg-start mb-sm-1">
							<span>2023©</span>
							<span class="text-heading">Qoduby</span>
						</div>
						<div class="col-sm-6">
							<ul class="list-inline m0 text-center text-lg-end">
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">Support</a></li>
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">License</a></li>
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">Documentation</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- ***** End Start ***** -->
		</main>
		<!-- ***** Main End ***** -->
	</div>

	<!-- Plugin Bundle -->
	<script src="assets/js/plugins.bundle.js" crossorigin="anonymous"></script>
	<!-- Common Javascript -->
	<script src="assets/js/app.js" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from qoduby.tempload.com/html/demo1/dist/apps-crm-deals.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 06:36:25 GMT -->
</html>