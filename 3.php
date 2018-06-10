<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Contacts</title>
	<base href="{{base_url}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Contacts" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20180129095003" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20180117130644" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1517778470" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1517778470" rel="stylesheet" type="text/css" />
	<style type="text/css">
		@media (min-width: 768px) {
			.wb_form_site th,
			.wb_form_site td {
				display: table-cell !important;
			}
			.wb_form_site tr {
				display: table-row !important;
			}
		}
	</style>
	{{ga_code}}
	<script type="text/javascript">
		var currLang = '';
	</script>
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113610850-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-113610850-1');
	</script>

</head>


<body>
	<div class="root">
		<div class="vbox wb_container" id="wb_header">

			<div class="wb_cont_inner">
				<div id="wb_element_instance23" class="wb_element wb-menu">
					<ul class="hmenu">
						<li>
							<a href="Home/" target="_self">Home</a>
						</li>
						<li class="active">
							<a href="Contact-Me/" target="_self">Contact Me</a>
						</li>
						<li>
							<a href="Discord-Applications/" target="_self">Discord Applications</a>
						</li>
						<li>
							<a href="Super-Smash-Builds/" target="_self">Super Smash Builds!</a>
						</li>
						<li>
							<a href="https://scattervolt.com/forum" target="_blank">Forum</a>
						</li>
						<li>
							<a href="Teespring/" target="_blank">Merch</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div id="wb_element_instance24" class="wb_element wb_element_picture">
					<a href="Home/">
						<img alt="gallery/mlg_scattervolt" src="gallery/photo-ts1517260810.jpg">
					</a>
				</div>
				<div id="wb_element_instance25" class="wb_element" style=" line-height: normal;">
					<h5 class="wb-stl-subtitle">
						<strong>
							<a href="Home/">
								<span style="color:rgba(255,200,0,1);">
									<span class="wb_tr_ok">ScatterVolt</span>
								</span>
							</a>
						</strong>
					</h5>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_main">

			<div class="wb_cont_inner">
				<div id="wb_element_instance27" class="wb_element" style=" line-height: normal;">
					<h5 class="wb-stl-subtitle" style="text-align: center;">
						<span class="wb_tr_ok">Contact Me</span>
					</h5>
				</div>
				<div id="wb_element_instance28" class="wb_element">
					<form class="wb_form wb_form_site" method="post" enctype="multipart/form-data">
						<input type="hidden" name="wb_form_id" value="8e3c8b8b">
						<textarea name="message" rows="3" cols="20" class="hpc"></textarea>
						<table>
							<tr>
								<th class="wb-stl-normal">Name&nbsp;&nbsp;</th>
								<td>
									<input type="hidden" name="wb_input_0" value="Name">
									<input class="form-control form-field" type="text" value="" name="wb_input_0" required="required">
								</td>
							</tr>
							<tr>
								<th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th>
								<td>
									<input type="hidden" name="wb_input_1" value="E-mail">
									<input class="form-control form-field" type="text" value="" name="wb_input_1" required="required">
								</td>
							</tr>
							<tr>
								<th class="wb-stl-normal">Country&nbsp;&nbsp;</th>
								<td>
									<input type="hidden" name="wb_input_2" value="Country">
									<input class="form-control form-field" type="text" value="" name="wb_input_2" required="required">
								</td>
							</tr>
							<tr class="area-row">
								<th class="wb-stl-normal">Message&nbsp;&nbsp;</th>
								<td>
									<input type="hidden" name="wb_input_3" value="Message">
									<textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_3" required="required"></textarea>
								</td>
							</tr>
							<tr>
								<th class="wb-stl-normal">Attachments&nbsp;&nbsp;</th>
								<td>
									<input class="form-control form-field" type="file" multiple name="wb_input_4[]">
								</td>
							</tr>
							<tr class="form-footer">
								<td colspan="2">
									<button type="submit" class="btn btn-default">Send</button>
								</td>
							</tr>
						</table>
						<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
					</form>
					<script type="text/javascript">
						<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "8e3c8b8b") { ?>
						var formValues = <?php echo json_encode($_POST); ?>;
						var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
						wb_form_validateForm("8e3c8b8b", formValues, formErrors);
						<?php if ($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state")) { ?>
						setTimeout(function () {
									alert("<?php echo addcslashes($wb_form_send_state, "\\
										'\"&\n\r\0\t<>"); ?>");
									}, 100);
								<?php $wb_form_send_state = null; ?>
								<?php } ?>
								<?php } ?>
					</script>
				</div>
				<div id="wb_element_instance29" class="wb_element" style="width: 100%;">
					<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(3);
			?>
						<script type="text/javascript">
							$(function () {
								var block = $("#wb_element_instance29");
								var comments = block.children(".wb_comments").eq(0);
								var contentBlock = $("#wb_main");
								contentBlock.height(contentBlock.height() + comments.height());
							});
						</script>
						<?php
				} else {
			?>
							<script type="text/javascript">
								$(function () {
									$("#wb_element_instance29").hide();
								});
							</script>
							<?php
				}
			?>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_footer">

			<div class="wb_cont_inner" style="height: 124px;">
				<div id="wb_element_instance26" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-footer">© 2018 Marc Aranibar and Nick#7925 -
						<a href="http://scattervolt.com">ScatterVolt.com</a>
					</p>
				</div>
				<div id="wb_element_instance30" class="wb_element" style="text-align: center; width: 100%;">
					<div class="wb_footer"></div>
					<script type="text/javascript">
						$(function () {
							var footer = $(".wb_footer");
							var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
							if (!html) {
								footer.parent().remove();
								footer = $("#wb_footer, #wb_footer .wb_cont_inner");
								footer.css({
									height: ""
								});
							}
						});
					</script>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="wb_sbg"></div>
	</div>{{hr_out}}</body>

</html>