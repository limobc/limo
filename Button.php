<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Chats Preview</title>
<style type="text/css">.eapps-preview {
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  width: 100%;
  min-width: 150px;
  min-height: 100%;
  transition: 0.2s;
}
.eapps-preview-toolbar {
  position: fixed;
  top: 80px;
  right: 0;
  z-index: 10;
}
@media only screen and (max-width: 480px) {
  .eapps-preview-toolbar {
    display: none;
  }
}
.eapps-preview-toolbar-item {
  position: relative;
}
.eapps-preview-toolbar-item-trigger {
  box-sizing: border-box;
  padding: 3px 6px;
  background: #38393a;
  cursor: pointer;
}
.eapps-preview-toolbar-item-trigger:first-child {
  padding-top: 6px;
}
.eapps-preview-toolbar-item-trigger:last-child {
  padding-bottom: 6px;
}
.eapps-preview-toolbar-item-trigger:hover .eapps-preview-toolbar-item-icon svg {
  fill: #fff;
}
.eapps-preview-toolbar-item-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 26px;
  height: 26px;
}
.eapps-preview-toolbar-item-active .eapps-preview-toolbar-item-icon {
  background: #2c2c2d;
}
.eapps-preview-toolbar-item-icon svg {
  width: 16px;
  height: 16px;
  fill: #66686a;
  transition: 0.1s;
}
.eapps-preview-toolbar-item-active .eapps-preview-toolbar-item-icon svg {
  fill: #fff;
}
.eapps-preview-toolbar-item-values {
  visibility: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 0px;
  right: 38px;
  padding: 0 2px;
  border-radius: 2px;
  transition: 0.2s;
  opacity: 0;
  background: #38393a;
}
.eapps-preview-toolbar-item-active .eapps-preview-toolbar-item-values {
  visibility: visible;
  opacity: 1;
  right: 42px;
}
.eapps-preview-toolbar-item-value {
  display: flex;
  align-items: center;
  justify-content: center;
  box-sizing: border-box;
  padding: 4px 2px;
  cursor: pointer;
}
.eapps-preview-toolbar-item-value-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 26px;
  height: 26px;
  border-radius: 2px;
}
html {
  height: 100%;
  overflow: auto;
}
body {
  margin: 0;
  height: 100%;
  background: #38393a;
}
.widget {
  max-width: 100%;
}
.eapps-preview-background-white {
  background: #fff;
}
.eapps-preview-background-black {
  background: #252627;
  color: #fff;
}
.eapps-preview-background-white-chess {
  background-image: url(data:image/png;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAUAAA/+4AJkFkb2JlAGTAAAAAAQMAFQQDBgoNAAABpgAAAccAAAIDAAACMP/bAIQAAgICAgICAgICAgMCAgIDBAMCAgMEBQQEBAQEBQYFBQUFBQUGBgcHCAcHBgkJCgoJCQwMDAwMDAwMDAwMDAwMDAEDAwMFBAUJBgYJDQsJCw0PDg4ODg8PDAwMDAwPDwwMDAwMDA8MDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM/8IAEQgAFAAUAwERAAIRAQMRAf/EAH8AAAMBAQAAAAAAAAAAAAAAAAIDBAEIAQEAAAAAAAAAAAAAAAAAAAAAEAACAwEAAAAAAAAAAAAAAAAAATARMRARAQAAAAAAAAAAAAAAAAAAADASAQAAAAAAAAAAAAAAAAAAADATAAEEAwEAAAAAAAAAAAAAAAEAEDAx8BGxYf/aAAwDAQACEQMRAAAB7kHhgCzCgnBP/9oACAEBAAEFAhYUjC3x6f/aAAgBAgABBQKH/9oACAEDAAEFAof/2gAIAQICBj8CH//aAAgBAwIGPwIf/9oACAEBAQY/Ah//2gAIAQEDAT8hVTeSJJaFL2a5v//aAAgBAgMBPyGH/9oACAEDAwE/IYf/2gAMAwEAAhEDEQAAEBBJBB//2gAIAQEDAT8QXV1sRKOD6CgsQDcXG//aAAgBAgMBPxCH/9oACAEDAwE/EIf/2Q==);
}
.eapps-preview-background-black-chess {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACxJREFUeNpiVFfXYMAN/v3/j0eWiYECMKp5ZGhmIZCGGBlHA2xUMyWaAQIMAJSTBpxFdlboAAAAAElFTkSuQmCC);
  color: #fff;
}
</style><style>.eapp-whatsapp-chat-root-layout-component {
  position: relative;
  width: 100%;
  -webkit-font-smoothing: antialiased;
}
.eapp-whatsapp-chat-root-layout-component,
.eapp-whatsapp-chat-root-layout-component * {
  box-sizing: border-box !important;
  outline: none !important;
}
.eapp-whatsapp-chat-root-layout-component a {
  text-decoration: none;
}
.eapp-whatsapp-chat-root-layout-component a:hover,
.eapp-whatsapp-chat-root-layout-component a:focus {
  text-decoration: underline;
}
</style><style>body {
  font: 400 normal 15px/1.3 -apple-system, BlinkMacSystemFont, Roboto, Open Sans, Helvetica Neue, sans-serif;
}
.eapps-preview-widget {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
          align-items: center;
  -webkit-justify-content: center;
          justify-content: center;
  margin: 0 auto;
  min-width: 150px;
  min-height: 100%;
  transition: 0.2s;
}
</style><style type="text/css" data-styled-jsx=""></style><style data-styled="active" data-styled-version="5.1.1"></style>



<!--  new head -->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Send Button Widget</title>

    <meta name="robots" content="none">

    <link  href="./style.css" type="text/css" rel="stylesheet" />
   
    <script type="text/javascript">
        whWidgetInit = function() {
            const widget = WidgetInitializer.widgetInitialize(
                "desktop",
                {"wrapperId":"wh-widget-send-button-wrapper","host":"widget.getbutton.io","proto":"https:","clientHostname":"www.water-decal.com","showHelloPopup":0,"parentWrapperId":"wh-widget-send-button","isMobile":0,"widgetType":"desktop"},
                {"position":"right","button_color":"#FF6550","order":"facebook,whatsapp","facebook":"m.me/108638057482699","whatsapp":"00201220127714","viber":"00201220127714","snapchat":"00201220127714","line":"00201220127714","telegram":"00201220127714","vkontakte":"00201220127714","email":"00201220127714","sms":null,"call":null,"instagram":null,"company_logo_url":null,"greeting_message":null,"call_to_action":"\u0647\u0644 \u0644\u062f\u064a\u0643 \u0627\u0633\u062a\u0641\u0633\u0627\u0631\u061f","ga":false,"branding":true,"mobile":true,"desktop":true,"shift_vertical":0,"shift_horizontal":0,"domain":null,"key":null});
            if (window.parent) {
                window.parent.postMessage(JSON.stringify({'name' : 'wh-widget-loaded'}), '*');
            }
            let timeoutHandle;
            function listener(event) {
              const payload = JSON.parse(event.data);
              if (payload.name !== 'parentWindow') {
                return;
              }
              document.body.dataset.parent = JSON.stringify(payload.data);
              if (payload.data.width <= 370) {
                document.body.classList.add('wh-small-screen');
              } else {
                document.body.classList.remove('wh-small-screen');
              }
              if (payload.data.height <= 350) {
                document.body.classList.add('wh-small-height');
              } else {
                document.body.classList.remove('wh-small-height');
              }
              const helloPopup = document.getElementById('wh-popup-hello');
              if (!isHidden(helloPopup)) {
                if (!timeoutHandle) {
                  clearTimeout(timeoutHandle);
                }
                timeoutHandle = setTimeout(() => {
                  widget.helloPopup.show()
                }, 100)
              }
            }
            window.addEventListener('message', listener, false);
        };
        function isHidden(el) {
          return (el.offsetParent === null)
        }
    </script>
    <script async="" src="https://drive.google.com/file/d/1yferqjMDTa74Mf2H2vAVz2p1esdYVdQH/view" onload="whWidgetInit();"></script>




</head>
<body class="eapps-preview-background-white-chess">
<div class="eapps-preview">
<div class="eapps-preview-widget"><div id="eapps-whatsapp-chat-f8527d01-d37a-45fb-a02c-5b5c2f5f6ffa" data-app="eapps-whatsapp-chat" data-app-version="1.1.4" class="jsx-3706666457 eapp-whatsapp-chat-root-layout-component eapps-whatsapp-chat-f8527d01-d37a-45fb-a02c-5b5c2f5f6ffa-custom-css-hook"></div></div>
</div>
<script type="text/javascript" src="./preview.js"></script>

<body class="wh-widget-send-button-desktop wh-free" data-parent="{&quot;width&quot;:1400,&quot;height&quot;:1050}">
    <div id="wh-widget-send-button-wrapper" class="wh-widget-send-button-wrapper wh-widget-right">

        <div class="wh-widget-hello-popup-wrapper wh-popup-right wh-hide popup-slide popup-slide-in" id="wh-popup-hello">
            <div class="wh-widget-hello-popup">
                <div class="wh-widget-hello-popup-close" wh-click="closeHelloPopup">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        <path d="M0 0h24v24H0z" fill="none"></path>
                    </svg>
                </div>
                <div class="wh-widget-hello-popup-content">
                    <div class="wh-widget-hello-popup-content-logo">
                        <img wh-src="logoUrl" alt="">
                    </div>
                    <div class="wh-widget-hello-popup-content-text" wh-click="showMessengers">
                        <a wh-href="href" wh-target="target">
                            <div wh-html-br="text"></div>
                        </a>
                    </div>
                    <div class="wh-clear"></div>
                </div>

                <div class="wh-messengers wh-hide" wh-multi-class="{&#39;wh-hide&#39;: &#39;!showMessengersIcons&#39;}"><ul wh-html-element="buttons"></ul></div>
            </div>
        </div>

        <div id="popup-placement" class="popup-slide"></div>
        <div id="wh-call-to-action" class=" wh-animation-in" wh-click="clickOnCallToAction" style="top: 29px;">
            <a wh-href="href" wh-target="target" href="javascript:void(0)" target="">
                <div class="wh-call-to-action-content" wh-html-unsafe="text">هل لديك استفسار؟</div>
            </a>
        </div>
    <div id="wh-widget-send-button-wrapper-list" class=" wh-widget-send-button-wrapper-list"><a class=" wh-widget-button button-slide" href="javascript:void(0);"><div class=" wh-widget-button-icon wh-messenger-bg-facebook"><div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-9 -10 41 44" class="wh-messenger-svg-close wh-svg-close"><path d=" M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" class="wh-messenger-svg-facebook wh-svg-icon"><path d=" M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z" fill-rule="evenodd"></path></svg></div></div><div class=" mes-us">Facebook Messenger</div><div class=" clear"></div></a><a class=" wh-widget-button button-slide" href="https://wa.me/201220127714" target="_blank"><div class=" wh-widget-button-icon wh-messenger-bg-whatsapp"><div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-9 -10 41 44" class="wh-messenger-svg-close wh-svg-close"><path d=" M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" class="wh-messenger-svg-whatsapp wh-svg-icon"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg></div></div><div class=" mes-us">WhatsApp</div><div class=" clear"></div></a><a class=" wh-widget-button wh-widget-button-activator" href="javascript:void(0);"><div class=" wh-widget-button-icon wh-messenger-bg-activator" style="background-color:#FF6550;"><div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-9 -10 41 44" class="wh-messenger-svg-close wh-svg-close"><path d=" M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill-rule="evenodd"></path></svg><i class="wh-icon-whatshelp wh-svg-icon"></i></div></div><div class=" mes-us">More</div><div class=" clear"></div></a><div class=" clear"></div></div><div class=" clear"></div></div>

    <!-- MessengerPopup template -->
    <div id="template-popup-messenger" class="wh-widget-hello-popup-wrapper wh-popup wh-popup-right">
        <div class="wh-popup-title-bar" wh-class="bgColorMessenger">
            <div class="title-bar-icon-close" wh-click="closePopup">
                <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                    <path d="M0 0h24v24H0z" fill="none"></path>
                </svg>
            </div>
            <div class="title-bar-icon-messenger" wh-html="icon">
            </div>
            <div class="title-bar-text" wh-html-unsafe="title"></div>
            <div class="wh-clear"></div>
        </div>
        <div class="wh-popup-content">
        </div>
        <div class="wh-clear"></div>

        <div class="wh-widget-hello-popup-powered" wh-class="pwdByClass">
         
        </div>
        <div class="wh-clear"></div>
    </div>

    <div id="template-popup-content-facebook" class="content-facebook">
        <iframe wh-src="fbIframeURL" width="302" height="300" style="border:none; border-radius: 0 0 16px 16px; overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" src="./saved_resource.html"></iframe>
    </div>
    <div id="template-popup-content-facebook-messenger" class="content-facebook-messenger">
        <iframe wh-src="fbIframeURL" width="302" height="300" style="border:none; border-radius: 0 0 16px 16px; overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" src="./saved_resource(1).html"></iframe>
    </div>
    <div id="template-popup-content-snapchat">
        <div class="content-snapchat-qrcode" wh-html="snapchatQRCode"></div>
        <div class="content-snapchat-name" wh-html-unsafe="snapchatUser"></div>
    </div>
    <div id="template-popup-content-viber">
        <div class="content-viber-qrcode" wh-html="viberQRCode"></div>
    </div>
    <div id="template-popup-content-line" class="content-line">
        <iframe wh-src="lineIframeURL" scrolling="no" frameborder="0" allowtransparency="true" src="./saved_resource(2).html"></iframe>
    </div>
    <div id="template-popup-content-call">
        <div class="content-call-number" wh-html="callPhone"></div>
    </div>
    <!-- /MessengerPopup template -->


</body></html>
