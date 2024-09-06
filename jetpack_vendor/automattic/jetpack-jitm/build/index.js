(()=>{"use strict";var t={428:t=>{t.exports=window.jQuery}},a={};function e(i){var n=a[i];if(void 0!==n)return n.exports;var c=a[i]={exports:{}};return t[i](c,c.exports,e),c.exports}e.n=t=>{var a=t&&t.__esModule?()=>t.default:()=>t;return e.d(a,{a:a}),a},e.d=(t,a)=>{for(var i in a)if(e.o(a,i)&&!e.o(t,i))Object.defineProperty(t,i,{enumerable:!0,get:a[i]})},e.o=(t,a)=>Object.prototype.hasOwnProperty.call(t,a);var i=e(428);e.n(i)()(document).ready((function(t){var a={default:function(a){const e='\n\t\t\t\t<svg class="gridicon gridicons-external-link" height="17" width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\n\t\t\t\t\t<g>\n\t\t\t\t\t\t<path d="M19 13v6c0 1.105-.895 2-2 2H5c-1.105 0-2-.895-2-2V7c0-1.105.895-2 2-2h6v2H5v12h12v-6h2zM13 3v2h4.586l-7.793 7.793 1.414 1.414L19 6.414V11h2V3h-8z" />\n\t\t\t\t\t</g>\n\t\t\t\t</svg>\n\t\t\t\t';var i='<div class="jitm-card jitm-banner '+(a.CTA.message?"has-call-to-action":"")+" is-upgrade-premium "+a.content.classes+'" data-stats_url="'+a.jitm_stats_url+'">';if(i+='<div class="jitm-banner__background"></div>',i+='<div class="jitm-banner__content">',i+='<div class="jitm-banner__icon-plan">'+a.content.icon+"</div>",i+='<div class="jitm-banner__info">',i+='<div class="jitm-banner__title">'+a.content.message+"</div>",a.content.description&&""!==a.content.description){if(i+='<div class="jitm-banner__description">'+a.content.description,a.content.list.length>0){i+='<ul class="banner__list">';for(var n=0;n<a.content.list.length;n++){var c=a.content.list[n].item;if(a.content.list[n].url)c='<a href="'+a.content.list[n].url+'" target="_blank" rel="noopener noreferrer" data-module="'+a.feature_class+'" data-jptracks-name="nudge_item_click" data-jptracks-prop="jitm-'+a.id+'">'+c+e+"</a>";i+='<li>\n\t\t\t\t<svg class="gridicon gridicons-checkmark" height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\n\t\t\t\t\t<g>\n\t\t\t\t\t\t<path d="M9 19.414l-6.707-6.707 1.414-1.414L9 16.586 20.293 5.293l1.414 1.414" />\n\t\t\t\t\t</g>\n\t\t\t\t</svg>'+c+"</li>"}}i+="</div>"}if(i+="</div>",i+="</div>",i+='<div class="jitm-banner__buttons_container">',a.activate_module)if(i+='<div class="jitm-banner__action" id="jitm-banner__activate">',i+='<a href="#" data-module="'+a.activate_module+'" data-settings_link="'+a.module_settings_link+'" type="button" class="jitm-button is-compact is-primary" data-jptracks-name="nudge_click" data-jptracks-prop="jitm-'+a.id+'-activate_module" data-jitm-path="'+a.message_path+'">'+window.jitm_config.activate_module_text+"</a>",i+="</div>",a.module_settings_link)i+='<div class="jitm-banner__action" id="jitm-banner__settings" style="display:none;">',i+='<a href="'+a.module_settings_link+'" type="button" class="jitm-button is-compact is-primary" data-jptracks-name="nudge_click" data-jptracks-prop="jitm-'+a.id+'-settings_link">'+window.jitm_config.settings_module_text+"</a>",i+="</div>";if(a.CTA.message){var o="jitm-button is-compact";if(a.CTA.primary&&null===a.activate_module)o+=" is-primary";else o+=" is-secondary";var s=a.CTA.ajax_action,r=a.CTA.newWindow&&!s;i+='<div class="jitm-banner__action">',i+='<a href="'+(a.CTA.hasOwnProperty("link")&&a.CTA.link.length?a.CTA.link:a.url)+'" target="'+(r?"_blank":"_self")+'" rel="noopener noreferrer" title="'+a.CTA.message+'" data-module="'+a.feature_class+'" type="button" class="'+o+'" data-jptracks-name="nudge_click" data-jptracks-prop="jitm-'+a.id+'" data-jitm-path="'+a.message_path+'" '+(s?'data-ajax-action="'+s+'"':"")+">"+a.CTA.message+(r?e:""),i+="</div>"}if(i+="</div>",a.is_dismissible)i+='<a href="#" data-module="'+a.feature_class+'" class="jitm-banner__dismiss"></a>';return t(i+="</div>")}},e=function(){t(".jetpack-jitm-message").each((function(){var e=t(this),i=e.data("message-path"),n=e.data("query"),c=e.data("redirect"),o=location.hash;if(o=o.replace(/#\//,"_"),i.includes("jetpack_page_my-jetpack"))i=i.replace("jetpack_page_my-jetpack","jetpack_page_my-jetpack"+o);else if("_dashboard"!==o)i=i.replace("toplevel_page_jetpack","toplevel_page_jetpack"+o);var s=t(".jetpack-logo__masthead").length?!0:!1;t.get(window.jitm_config.api_root+"jetpack/v4/jitm",{message_path:i,query:n,full_jp_logo_exists:s,_wpnonce:e.data("nonce")}).then((function(i){if("object"==typeof i&&i[1])i=[i[1]];if(0!==i.length&&i[0].content)!function(e,i,n){var c;if(!(c=i.template)||!a[c])c="default";i.url=i.url+"&redirect="+n;var o,s=a[c](i);if(s.find(".jitm-banner__dismiss").on("click",(o=s,function(a){a.preventDefault(),o.hide(),t.ajax({url:window.jitm_config.api_root+"jetpack/v4/jitm",method:"POST",beforeSend:function(t){t.setRequestHeader("X-WP-Nonce",window.jitm_config.nonce)},data:{id:i.id,feature_class:i.feature_class}})})),t("#jp-admin-notices").length>0){if(e.innerHTML=s,t("#jp-admin-notices").find(".jitm-card"))t(".jitm-card").replaceWith(s);s.prependTo(t("#jp-admin-notices"))}else e.replaceWith(s);s.find("#jitm-banner__activate a").on("click",(function(){var a=t(this);if(a.attr("disabled"))return!1;t.ajax({url:window.jitm_config.api_root+"jetpack/v4/module/"+a.data("module")+"/active",method:"POST",beforeSend:function(a){a.setRequestHeader("X-WP-Nonce",e.data("nonce")),t("#jitm-banner__activate a").text(window.jitm_config.activating_module_text),t("#jitm-banner__activate a").attr("disabled",!0)}}).done((function(){if(t("#jitm-banner__activate a").text(window.jitm_config.activated_module_text),t("#jitm-banner__activate a").attr("disabled",!0),a.data("settings_link"))return t("#jitm-banner__settings").show(),void t("#jitm-banner__activate").hide();setTimeout((function(){s.fadeOut("slow")}),2e3)}))})),s.find(".jitm-button[data-ajax-action]").on("click",(function(a){a.preventDefault();var i=t(this);return i.attr("disabled",!0),t.post(window.ajaxurl,{action:i.data("ajax-action"),_nonce:e.data("ajax-nonce")}).done((function(){s.fadeOut("slow")})).fail((function(){i.attr("disabled",!1)})),!1})),s.find(".jitm-button").on("click",(function(a){var e=t(this),i=e.attr("data-jptracks-name");if(void 0!==i){var n={clicked:e.attr("data-jptracks-prop")||!1,jitm_message_path:e.attr("data-jitm-path")||!1};if(window.jpTracksAJAX)window.jpTracksAJAX.record_ajax_event(i,"click",n)}}))}(e,i[0],c)}))}))};e(),t(window).on("hashchange",(function(t){const a=t.originalEvent.newURL;if(["jetpack","my-jetpack","jetpack-backup","jetpack-boost","jetpack-protect","jetpack-search","jetpack-social","jetpack-videopress"].some((t=>a.includes(`admin.php?page=${t}`)))){var i=document.querySelector(".jitm-card");if(i)i.remove();e()}}))}))})();