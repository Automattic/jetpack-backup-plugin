document.addEventListener("DOMContentLoaded",(function(){function t(){this.querySelector(".jetpack-sso-invitation-tooltip").style.display="block"}function e(t){if(document.activeElement!==t.target)this.querySelector(".jetpack-sso-invitation-tooltip").style.display="none"}document.querySelectorAll(".jetpack-sso-invitation-tooltip-icon:not(.sso-disconnected-user)").forEach((function(t){t.innerHTML+=" [?]";const e=document.createElement("span");e.classList.add("jetpack-sso-invitation-tooltip","jetpack-sso-th-tooltip");const n=window.Jetpack_SSOTooltip.tooltipString;function o(){t.appendChild(e),e.style.display="block"}function i(){if(document.activeElement!==t)t.removeChild(e)}e.innerHTML+=n,t.addEventListener("mouseenter",o),t.addEventListener("focus",o),t.addEventListener("mouseleave",i),t.addEventListener("blur",i)})),document.querySelectorAll(".jetpack-sso-invitation-tooltip-icon:not(.jetpack-sso-status-column)").forEach((function(n){n.addEventListener("mouseenter",t),n.addEventListener("focus",t),n.addEventListener("mouseleave",e),n.addEventListener("blur",e)}))}));