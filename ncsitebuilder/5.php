<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Contacts"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Contacts"); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta property="og:image" content="<?php echo htmlspecialchars(($seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20210902202610" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20210909180648" rel="stylesheet" type="text/css" id="wb-site-stylesheet" />
	<link href="css/common.css?ts=1633533354" rel="stylesheet" type="text/css" />
	<link href="css/5.css?ts=1633533354" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
	
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php if (isset($wbLandingPage) && $wbLandingPage) echo ' data-landing-page="'.$wbLandingPage.'"'; ?>><div class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="header" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="main" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"></div></div><div id="wb_footer_5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="footer" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="wb_element_instance6_0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;">© 2021 <a href="http://kohort.in">kohort.in</a></p></div><div id="wb_footer_c_0" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
