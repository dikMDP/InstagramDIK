
<!DOCTYPE html>
<html lang="id-ID">
  <head><meta charset="UTF-8"/><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(e){this.triggerEvents=e,this.eventOptions={passive:!0},this.userEventListener=this.triggerListener.bind(this),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventListener,e.eventOptions)))}_removeUserInteractionListener(e){this.triggerEvents.forEach((t=>window.removeEventListener(t,e.userEventListener,e.eventOptions)))}triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}async _loadEverythingNow(){this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async),await this._triggerDOMContentLoaded(),await this._triggerWindowLoad(),window.dispatchEvent(new Event("rocket-allScriptsLoaded"))}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._requestAnimFrame(),new Promise((t=>{const n=document.createElement("script");let r;[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type",r=e.nodeValue),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t()),e.parentNode.replaceChild(n,e)}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){var e=document.createDocumentFragment();[...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async].forEach((t=>{const n=t.getAttribute("src");if(n){const t=document.createElement("link");t.href=n,t.rel="preload",t.as="script",e.appendChild(t)}})),document.head.appendChild(e)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(r){e["rocket"+t]=n=r}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._requestAnimFrame(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-load")),await this._requestAnimFrame(),window.rocketonload&&window.rocketonload(),await this._requestAnimFrame(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),window.dispatchEvent(new Event("rocket-pageshow")),await this._requestAnimFrame(),window.rocketonpageshow&&window.rocketonpageshow()}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,r=document.createRange(),i=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const a=document.createDocumentFragment();r.setStart(a,0),a.appendChild(r.createContextualFragment(t)),i.insertBefore(a,o)}}async _requestAnimFrame(){return new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts(["keydown","mousemove","touchmove","touchstart","touchend","wheel"]);e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();</script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><script type="text/javascript">(window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:false},ajax:{deny_list:["bam-cell.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={xpid:"VQcGVV9UDRAIUFdTDwcAU1E=",licenseKey:"a620b89621",applicationID:"846186755"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var i,o=t("ee"),a=t(28),s={};try{i=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,i.indexOf("dev")!==-1&&(s.dev=!0),i.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&o.on("internal-error",function(t){r(t.stack)}),s.dev&&o.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{p?p-=1:i(s||new UncaughtException(t,e,n),!0)}catch(f){try{o("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function i(t,e){var n=e?null:c.now();o("err",[t,n])}var o=t("handle"),a=t(29),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError";if(!c.disabled){var p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(10),t(9),"addEventListener"in window&&t(6),c.xhrWrappable&&t(11),d=!0)}s.on("fn-start",function(t,e,n){d&&(p+=1)}),s.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,i(n))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){o("ierr",[t,c.now(),!0])})}},{}],3:[function(t,e,n){var r=t("loader");r.disabled||(r.features.ins=!0)},{}],4:[function(t,e,n){function r(){var t=new PerformanceObserver(function(t,e){var n=t.getEntries();s(v,[n])});try{t.observe({entryTypes:["resource"]})}catch(e){}}function i(t){if(s(v,[window.performance.getEntriesByType(w)]),window.performance["c"+l])try{window.performance[h](m,i,!1)}catch(t){}else try{window.performance[h]("webkit"+m,i,!1)}catch(t){}}function o(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var a=t("ee"),s=t("handle"),c=t(10),f=t(9),u=t(5),d=t(19),l="learResourceTimings",p="addEventListener",h="removeEventListener",m="resourcetimingbufferfull",v="bstResource",w="resource",g="-start",y="-end",x="fn"+g,b="fn"+y,E="bstTimer",R="pushState",S=t("loader");if(!S.disabled){S.features.stn=!0,t(8),"addEventListener"in window&&t(6);var O=NREUM.o.EV;a.on(x,function(t,e){var n=t[0];n instanceof O&&(this.bstStart=S.now())}),a.on(b,function(t,e){var n=t[0];n instanceof O&&s("bst",[n,e,this.bstStart,S.now()])}),c.on(x,function(t,e,n){this.bstStart=S.now(),this.bstType=n}),c.on(b,function(t,e){s(E,[e,this.bstStart,S.now(),this.bstType])}),f.on(x,function(){this.bstStart=S.now()}),f.on(b,function(t,e){s(E,[e,this.bstStart,S.now(),"requestAnimationFrame"])}),a.on(R+g,function(t){this.time=S.now(),this.startPath=location.pathname+location.hash}),a.on(R+y,function(t){s("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),u()?(s(v,[window.performance.getEntriesByType("resource")]),r()):p in window.performance&&(window.performance["c"+l]?window.performance[p](m,i,d(!1)):window.performance[p]("webkit"+m,i,d(!1))),document[p]("scroll",o,d(!1)),document[p]("keypress",o,d(!1)),document[p]("click",o,d(!1))}}},{}],5:[function(t,e,n){e.exports=function(){return"PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&i(e)}function i(t){s.inPlace(t,[u,d],"-",o)}function o(t,e){return t[1]}var a=t("ee").get("events"),s=t("wrap-function")(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(i(window),i(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=o(arguments),e={};i.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var s=r.apply(this,t);return i.emit(n+"start",[t,a],s),s.then(function(t){return i.emit(n+"end",[null,t],s),t},function(t){throw i.emit(n+"end",[t],s),t})})}var i=t("ee").get("fetch"),o=t(29),a=t(28);e.exports=i;var s=window,c="fetch-",f=c+"body-",u=["arrayBuffer","blob","json","text","formData"],d=s.Request,l=s.Response,p=s.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,e){r(d[h],e,f),r(l[h],e,f)}),r(s,"fetch",c),i.on(c+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),i.emit(c+"done",[null,e],n)}else i.emit(c+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),i=t("wrap-function")(r);e.exports=r;var o=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;o&&o.pushState&&o.replaceState&&(a=o),i.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){var r=t("ee").get("raf"),i=t("wrap-function")(r),o="equestAnimationFrame";e.exports=r,i.inPlace(window,["r"+o,"mozR"+o,"webkitR"+o,"msR"+o],"raf-"),r.on("raf-start",function(t){t[0]=i(t[0],"fn-")})},{}],10:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function i(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var o=t("ee").get("timer"),a=t("wrap-function")(o),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=o,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),o.on(c+u,r),o.on(s+u,i)},{}],11:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function i(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function o(t){x.push(t),m&&(E?E.then(a):w?w(a):(R=-R,S.data=R))}function a(){for(var t=0;t<x.length;t++)r([],x[t]);x.length&&(x=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=t(19),p=NREUM.o,h=p.XHR,m=p.MO,v=p.PR,w=p.SI,g="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],x=[];e.exports=u;var b=window.XMLHttpRequest=function(t){var e=new h(t);try{u.emit("new-xhr",[e],e),e.addEventListener(g,i,l(!1))}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(h,b),b.prototype=h.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),o(e)}),u.on("open-xhr-start",r),m){var E=v&&v.resolve();if(!w&&!v){var R=1,S=document.createTextNode(R);new m(a).observe(S,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===g||a()})},{}],12:[function(t,e,n){function r(t){if(!s(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=p.generateSpanId(),m=p.generateTraceId(),v=Date.now(),w={spanId:h,traceId:m,timestamp:v};return(t.sameOrigin||c(t)&&l())&&(w.traceContextParentHeader=i(h,m),w.traceContextStateHeader=o(h,v,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&c(t)&&d())&&(w.newrelicHeader=a(h,m,v,n,r,f)),w}function i(t,e){return"00-"+e+"-"+t+"-01"}function o(t,e,n,r,i){var o=0,a="",s=1,c="",f="";return i+"@nr="+o+"-"+s+"-"+n+"-"+r+"-"+t+"-"+a+"-"+c+"-"+f+"-"+e}function a(t,e,n,r,i,o){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var s={v:[0,1],d:{ty:"Browser",ac:r,ap:i,id:t,tr:e,ti:n}};return o&&r!==o&&(s.d.tk=o),btoa(JSON.stringify(s))}function s(t){return f()&&c(t)}function c(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var i=h(n.allowed_origins[r]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function l(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var p=t(25),h=t(14);e.exports={generateTracePayload:r,shouldGenerateTrace:s}},{}],13:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):o(this,t),n.cbTime=this.cbTime,s("xhr",[e,n,this.startTime,this.endTime,"xhr"],this))}}function i(t,e){var n=c(e),r=t.params;r.hostname=n.hostname,r.port=n.port,r.protocol=n.protocol,r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=n,t.sameOrigin=n.sameOrigin}function o(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable&&!a.disabled){var s=t("handle"),c=t(14),f=t(12).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(20),m=t(18),v=t(15),w=t(19),g=NREUM.o.REQ,y=window.XMLHttpRequest;a.features.xhr=!0,t(11),t(7),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,e.params=this.params||{},e.metrics=this.metrics||{},t.addEventListener("load",function(n){o(e,t)},w(!1)),h&&(h>34||h<10)||t.addEventListener("progress",function(t){e.lastSize=t.loaded},w(!1))}),u.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],i=this;if(n&&r){var o=m(r);o&&(n.txSize=o)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||i.loadCaptureCalled||(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;s<l;s++)e.addEventListener(d[s],this.listener,w(!1))}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("xhr-resolved",function(){this.endTime=a.now()}),u.on("addEventListener-end",function(t,e){e instanceof y&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof y&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof y&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=c(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=f(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),e(o.headers,i)&&(this.dt=i),t.length>1?t[1]=o:t.push(o)}else t[0]&&t[0].headers&&e(t[0].headers,i)&&(this.dt=i)}),u.on("fetch-start",function(t,e){this.params={},this.metrics={},this.startTime=a.now(),this.dt=e,t.length>=1&&(this.target=t[0]),t.length>=2&&(this.opts=t[1]);var n,r=this.opts||{},o=this.target;"string"==typeof o?n=o:"object"==typeof o&&o instanceof g?n=o.url:window.URL&&"object"==typeof o&&o instanceof URL&&(n=o.href),i(this,n);var s=(""+(o&&o instanceof g&&o.method||r.method||"GET")).toUpperCase();this.params.method=s,this.txSize=m(r.body)||0}),u.on("fetch-done",function(t,e){this.endTime=a.now(),this.params||(this.params={}),this.params.status=e?e.status:0;var n;"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var r={txSize:this.txSize,rxSize:n,duration:a.now()-this.startTime};s("xhr",[this.params,r,this.startTime,this.endTime,"fetch"],this)})}},{}],14:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,i={};e.href=t,i.port=e.port;var o=e.href.split("://");!i.port&&o[1]&&(i.port=o[1].split("/")[0].split("@").pop().split(":")[1]),i.port&&"0"!==i.port||(i.port="https"===o[0]?"443":"80"),i.hostname=e.hostname||n.hostname,i.pathname=e.pathname,i.protocol=o[0],"/"!==i.pathname.charAt(0)&&(i.pathname="/"+i.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,s=e.hostname===document.domain&&e.port===n.port;return i.sameOrigin=a&&(!e.hostname||s),"/"===i.pathname&&(r[t]=i),i}},{}],15:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?i(t.response):"text"===n||""===n||void 0===n?i(t.responseText):void 0}var i=t(18);e.exports=r},{}],16:[function(t,e,n){function r(){}function i(t,e,n,r){return function(){return u.recordSupportability("API/"+e+"/called"),o(t+e,[f.now()].concat(s(arguments)),n?null:this,r),n?void 0:this}}var o=t("handle"),a=t(28),s=t(29),c=t("ee").get("tracer"),f=t("loader"),u=t(21),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var l=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",h=p+"ixn-";a(l,function(t,e){d[e]=i(p,e,!0,"api")}),d.addPageAction=i(p,"addPageAction",!0),d.setCurrentRouteName=i(p,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(h+"tracer",[f.now(),t,n],r),function(){if(c.emit((i?"":"no-")+"fn-start",[f.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(h,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),u.recordSupportability("API/noticeError/called"),o("err",[t,f.now(),!1,e])}},{}],17:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],18:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],19:[function(t,e,n){var r=!1;try{var i=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,i),window.removeEventListener("testPassive",null,i)}catch(o){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],20:[function(t,e,n){var r=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(r=+i[1]),e.exports=r},{}],21:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return o("storeMetric",n,null,"api"),n}function i(t,e){var n=[s,t,{name:t},e];return o("storeEventMetrics",n,null,"api"),n}var o=t("handle"),a="sm",s="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:s},recordSupportability:r,recordCustom:i}},{}],22:[function(t,e,n){function r(){return s.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,s=t(30);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],23:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],24:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?l("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&l("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(c&&c<r.startTime)return;l("lcp",[r])}}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||l("cls",[t])})}function a(t){if(t instanceof v&&!g){var e=Math.round(t.timeStamp),n={type:t.type};e<=p.now()?n.fid=p.now()-e:e>p.offset&&e<=Date.now()?(e-=p.offset,n.fid=p.now()-e):e=p.now(),g=!0,l("timing",["fi",e,n])}}function s(t){"hidden"===t&&(c=p.now(),l("pageHide",[c]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var c,f,u,d,l=t("handle"),p=t("loader"),h=t(27),m=t(19),v=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(w){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(w){}d=new PerformanceObserver(o);try{d.observe({type:"layout-shift",buffered:!0})}catch(w){}}if("addEventListener"in document){var g=!1,y=["click","keydown","mousedown","pointerdown","touchstart"];y.forEach(function(t){document.addEventListener(t,a,m(!1))})}h(s)}},{}],25:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var i,o="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<o.length;s++)i=o[s],"x"===i?a+=t().toString(16):"y"===i?(i=3&t()|8,a+=i.toString(16)):a+=i;return a}function i(){return a(16)}function o(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,i=window.crypto||window.msCrypto;i&&i.getRandomValues&&Uint8Array&&(n=i.getRandomValues(new Uint8Array(31)));for(var o=[],a=0;a<t;a++)o.push(e().toString(16));return o.join("")}e.exports={generateUuid:r,generateSpanId:i,generateTraceId:o}},{}],26:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}e.exports={agent:i,version:o,match:r}},{}],27:[function(t,e,n){function r(t){function e(){t(s&&document[s]?document[s]:document[o]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,i(!1))}var i=t(19);e.exports=r;var o,a,s;"undefined"!=typeof document.hidden?(o="hidden",a="visibilitychange",s="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",a="webkitvisibilitychange",s="webkitVisibilityState")},{}],28:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],29:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],30:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?f(t,c,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!p.aborted||o){t&&a&&t(n,r,i);for(var s=e(i),c=m(n),f=c.length,u=0;u<f;u++)c[u].apply(s,r);var l=d[y[n]];return l&&l.push([x,n,r,s]),s}}function o(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return l[t]=l[t]||i(n)}function w(t,e){p.aborted||u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:o,addEventListener:o,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:s,aborted:!1};return x}function o(t){return f(t,c,a)}function a(){return new r}function s(){(d.api||d.feature)&&(p.aborted=!0,d=p.backlog={})}var c="nr@context",f=t("gos"),u=t(28),d={},l={},p=e.exports=i();e.exports.getOrSetContext=o,p.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!T++){var t=O.info=NREUM.info,e=v.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();c(R,function(e,n){t[e]||(t[e]=n)});var n=a();s("mark",["onload",n+O.offset],null,"api"),s("timing",["load",n]);var r=v.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=h+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===v.readyState&&o()}function o(){s("mark",["domContent",a()+O.offset],null,"api")}var a=t(22),s=t("handle"),c=t(28),f=t("ee"),u=t(26),d=t(23),l=t(17),p=t(19),h=l.getConfiguration("ssl")===!1?"http":"https",m=window,v=m.document,w="addEventListener",g="attachEvent",y=m.XMLHttpRequest,x=y&&y.prototype,b=!d(m.location);NREUM.o={ST:setTimeout,SI:m.setImmediate,CT:clearTimeout,XHR:y,REQ:m.Request,EV:m.Event,PR:m.Promise,MO:m.MutationObserver};var E=""+location,R={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1212.min.js"},S=y&&x&&x[w]&&!/CriOS/.test(navigator.userAgent),O=e.exports={offset:a.getLastTimestamp(),now:a,origin:E,features:{},xhrWrappable:S,userAgent:u,disabled:b};if(!b){t(16),t(24),v[w]?(v[w]("DOMContentLoaded",o,p(!1)),m[w]("load",r,p(!1))):(v[g]("onreadystatechange",i),m[g]("onload",r)),s("mark",["firstbyte",a.getLastTimestamp()],null,"api");var T=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,c,f){function nrWrapper(){var o,a,u,l;try{a=this,o=d(arguments),u="function"==typeof r?r(o,a):r||{}}catch(p){i([p,"",[o,a,c],u],t)}s(n+"start",[o,a,c],u,f);try{return l=e.apply(a,o)}catch(h){throw s(n+"err",[o,a,h],u,f),h}finally{s(n+"end",[o,a,l],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[l]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var s,c,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)c=e[f],s=t[c],a(s)||(t[c]=n(s,u?c+r:r,i,c,o))}function s(n,r,o,a){if(!h||e){var s=h;h=!0;try{t.emit(n,r,o,e,a)}catch(c){i([c,n,r,o],t)}h=s}}return t||(t=u),n.inPlace=r,n.flag=l,n}function i(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)p.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[l])}function s(t,e){var n=e(t);return n[l]=t,o(t,n,u),n}function c(t,e,n){var r=t[e];t[e]=s(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(29),l="nr@original",p=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=s,e.exports.wrapInPlace=c,e.exports.argsToArray=f},{}]},{},["loader",2,13,4,3]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Meningkatkan Followers Instagram Bisnis dengan Murah - Jurnal</title><link rel="stylesheet" href="https://www.jurnal.id/wp-content/cache/min/1/ab8b52797f6daea6af54e7699ee13eac.css" media="all" data-minify="1" />
        <meta name="theme-color" content="#27106D"/>
    <meta property="og:image" itemprop="image" content="https://www.jurnal.id/wp-content/themes/jurnal/images/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="https://www.jurnal.id/wp-content/themes/jurnal/images/favicon.png"/>
    <meta property="og:image" content="https://www.jurnal.id/wp-content/themes/jurnal/images/logo-jurnal-entrepreneur.svg" />
    <link rel="preload" as="style" href="https://www.jurnal.id/wp-content/themes/jurnal/styles/plugin.css"/>
    <link rel="preload" as="style" href="https://www.jurnal.id/wp-content/themes/jurnal/styles/mains.css?v=1642099859"/>
    
    
    <link rel='dns-prefetch' href='//d39otahjdwbcpl.cloudfront.net' /><meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<link rel="alternate" hreflang="id" href="https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/" />

	<!-- This site is optimized with the Yoast SEO Premium plugin v17.9 (Yoast SEO v17.9) - https://yoast.com/wordpress/plugins/seo/ -->
	<meta name="description" content="Untuk meningkatkan followers instagram dan juga meningkatkan audience. Anda dapat melakukan langkah-langkah sebagai berikut." />
	<link rel="canonical" href="https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Meningkatkan Followers Instagram Bisnis dengan Murah" />
	<meta property="og:description" content="Untuk meningkatkan followers instagram dan juga meningkatkan audience. Anda dapat melakukan langkah-langkah sebagai berikut." />
	<meta property="og:url" content="https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/" />
	<meta property="og:site_name" content="Jurnal" />
	<meta property="article:published_time" content="2019-11-14T09:12:53+00:00" />
	<meta property="article:modified_time" content="2021-09-07T15:50:15+00:00" />
	<meta property="og:image" content="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2019/11/shutterstock_529915960.jpg" />
	<meta property="og:image:width" content="900" />
	<meta property="og:image:height" content="400" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Written by" />
	<meta name="twitter:data1" content="Desra" />
	<meta name="twitter:label2" content="Est. reading time" />
	<meta name="twitter:data2" content="4 menit" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://www.jurnal.id/id/#organization","name":"Jurnal by Mekari","url":"https://www.jurnal.id/id/","sameAs":[],"logo":{"@type":"ImageObject","@id":"https://www.jurnal.id/id/#logo","inLanguage":"id-ID","url":"https://www.jurnal.id/wp-content/uploads/2021/04/Jurnal-by-Mekari-Logo.jpg","contentUrl":"https://www.jurnal.id/wp-content/uploads/2021/04/Jurnal-by-Mekari-Logo.jpg","width":512,"height":512,"caption":"Jurnal by Mekari"},"image":{"@id":"https://www.jurnal.id/id/#logo"}},{"@type":"WebSite","@id":"https://www.jurnal.id/id/#website","url":"https://www.jurnal.id/id/","name":"Jurnal","description":"Software &amp; Aplikasi Akuntansi Online Terbaik dari Jurnal","publisher":{"@id":"https://www.jurnal.id/id/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.jurnal.id/id/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"id-ID"},{"@type":"ImageObject","@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#primaryimage","inLanguage":"id-ID","url":"https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2019/11/shutterstock_529915960.jpg","contentUrl":"https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2019/11/shutterstock_529915960.jpg","width":900,"height":400,"caption":"Tips Memulai Promosi Bisnis lewat Instagram"},{"@type":"WebPage","@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#webpage","url":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/","name":"Meningkatkan Followers Instagram Bisnis dengan Murah - Jurnal","isPartOf":{"@id":"https://www.jurnal.id/id/#website"},"primaryImageOfPage":{"@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#primaryimage"},"datePublished":"2019-11-14T09:12:53+00:00","dateModified":"2021-09-07T15:50:15+00:00","description":"Untuk meningkatkan followers instagram dan juga meningkatkan audience. Anda dapat melakukan langkah-langkah sebagai berikut.","breadcrumb":{"@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#breadcrumb"},"inLanguage":"id-ID","potentialAction":[{"@type":"ReadAction","target":["https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/"]}]},{"@type":"BreadcrumbList","@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Meningkatkan Followers Instagram Bisnis dengan Murah"}]},{"@type":"Article","@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#article","isPartOf":{"@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#webpage"},"author":{"@id":"https://www.jurnal.id/id/#/schema/person/293284b133a4c8c5374f621adebdf104"},"headline":"Meningkatkan Followers Instagram Bisnis dengan Murah","datePublished":"2019-11-14T09:12:53+00:00","dateModified":"2021-09-07T15:50:15+00:00","mainEntityOfPage":{"@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#webpage"},"wordCount":778,"publisher":{"@id":"https://www.jurnal.id/id/#organization"},"image":{"@id":"https://www.jurnal.id/id/blog/meningkatkan-followers-instagram/#primaryimage"},"thumbnailUrl":"https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2019/11/shutterstock_529915960.jpg","articleSection":["Bisnis"],"inLanguage":"id-ID"},{"@type":"Person","@id":"https://www.jurnal.id/id/#/schema/person/293284b133a4c8c5374f621adebdf104","name":"Desra","image":{"@type":"ImageObject","@id":"https://www.jurnal.id/id/#personlogo","inLanguage":"id-ID","url":"https://secure.gravatar.com/avatar/c174389c0ff8cdcdf9df4b92cf1b14de?s=96&d=mm&r=g","contentUrl":"https://secure.gravatar.com/avatar/c174389c0ff8cdcdf9df4b92cf1b14de?s=96&d=mm&r=g","caption":"Desra"},"url":"https://www.jurnal.id/id/blog/author/desra/"}]}</script>
	<!-- / Yoast SEO Premium plugin. -->


<link rel='dns-prefetch' href='//dev.visualwebsiteoptimizer.com' />
<link rel='dns-prefetch' href='//www.google-analytics.com' />
<link rel='dns-prefetch' href='//www.googletagmanager.com' />
<link rel='dns-prefetch' href='//connect.facebook.net' />
<link rel='dns-prefetch' href='//www.googleadservices.com' />
<link rel='dns-prefetch' href='//js-agent.newrelic.com' />

<link rel="alternate" type="application/rss+xml" title="Jurnal &raquo; Feed" href="https://www.jurnal.id/id/feed/" />
<link rel="alternate" type="application/rss+xml" title="Jurnal &raquo; Umpan Komentar" href="https://www.jurnal.id/id/comments/feed/" />
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	


<style id='wpml-legacy-dropdown-click-0-inline-css' type='text/css'>
.wpml-ls-statics-shortcode_actions, .wpml-ls-statics-shortcode_actions .wpml-ls-sub-menu, .wpml-ls-statics-shortcode_actions a {border-color:#ffffff;}
</style>



<style id='rocket-lazyload-inline-css' type='text/css'>
.rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player:focus-within{outline: 2px solid currentColor;outline-offset: 5px;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:100%;width:100%;left:0;top:0;position:absolute;background:url(https://www.jurnal.id/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;background-color: transparent !important;cursor:pointer;border:none;}
</style>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.jurnal.id/wp-content/cache/min/1/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown-click/script.min.js?ver=1642074199' id='wpml-legacy-dropdown-click-0-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://d39otahjdwbcpl.cloudfront.net/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<link rel="https://api.w.org/" href="https://www.jurnal.id/id/wp-json/" /><link rel="alternate" type="application/json" href="https://www.jurnal.id/id/wp-json/wp/v2/posts/8826" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.jurnal.id/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.jurnal.id/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.8.3" />
<link rel='shortlink' href='https://www.jurnal.id/id/?p=8826' />
<link rel="alternate" type="application/json+oembed" href="https://www.jurnal.id/id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.jurnal.id%2Fid%2Fblog%2Fmeningkatkan-followers-instagram%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.jurnal.id/id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.jurnal.id%2Fid%2Fblog%2Fmeningkatkan-followers-instagram%2F&#038;format=xml" />
<meta name="generator" content="WPML ver:4.4.12 stt:1,25;" />

<link rel="preload" as="font" href="https://www.jurnal.id/wp-content/themes/jurnal/fonts/graphik-medium.woff2" crossorigin>
<link rel="preload" as="font" href="https://www.jurnal.id/wp-content/themes/jurnal/fonts/graphik-regular.woff2" crossorigin>
<link rel="preload" as="font" href="https://www.jurnal.id/wp-content/themes/jurnal/fonts/graphik-semibold.woff2" crossorigin>
<link rel="preload" as="font" href="https://www.jurnal.id/wp-content/themes/jurnal/fonts/fontawesome-webfont.woff2?v=4.5.0" crossorigin><link rel="icon" href="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/05/13125619/cropped-favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/05/13125619/cropped-favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/05/13125619/cropped-favicon-180x180.png" />
<meta name="msapplication-TileImage" content="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/05/13125619/cropped-favicon-270x270.png" />
<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript> 
    <script type="rocketlazyloadscript">
      var ajaxurl = "https://www.jurnal.id/wp-admin/admin-ajax.php";
      var page_id = "Blog 8826";
    </script>
    <meta name="facebook-domain-verification" content="wmknliqp9iokv8mig1c9u3f56t9a6a" />
<!-- Google Tag Manager -->
<script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W23JLJG');</script>
<!-- End Google Tag Manager -->

<!-- Start VWO Async SmartCode -->
<script type="rocketlazyloadscript" data-rocket-type='text/javascript'>
window._vwo_code = window._vwo_code || (function(){
var account_id=584803,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
is_spa=1,
hide_element='body',

/* DO NOT EDIT BELOW THIS LINE */
f=false,d=document,code={use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){
window.settings_timer=setTimeout(function () {_vwo_code.finish() },settings_tolerance);var a=d.createElement('style'),b=hide_element?hide_element+'{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}':'',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('https://dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&f='+(+is_spa)+'&r='+Math.random());return settings_timer; }};window._vwo_settings_timer = code.init(); return code; }());
</script>
<!-- End VWO Async SmartCode -->  </head>
  <body> 
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W23JLJG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->    <header class="header insight">
      <div class="container-full">
        <div class="header-top"><a href="https://www.jurnal.id/id/"><img class="img--fluid" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20429%2048'%3E%3C/svg%3E" alt="Jurnal Enterpreneur" width="429" height="48" data-lazy-src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/logo-jurnal-enterpreneur.png"/><noscript><img class="img--fluid" src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/logo-jurnal-enterpreneur.png" alt="Jurnal Enterpreneur" width="429" height="48"/></noscript></a>
          <div class="header_right">
            <a class="open-sf" href="javascript:void(0);"></a>
                      </div>
          <div class="burger-menu" id="show_burger_menu"><span></span><span></span><span></span></div>
          <!-- search -->

<!-- /search -->

<form id='searchform' role="search" method="get" action="https://www.jurnal.id/id/">   
    <input  class="form-control" name="s" id="s" type="text"  placeholder="Search here ..."/>
    <button class="btn-search btn btn-primary" type="submit"> <span>Search</span></button>
    <div class="close"><a href="javascript:void(0);"></a></div>
</form>
        </div>
        <div class="container-fluid header-main"><a class="header_logo" href="https://www.jurnal.id/id/"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20215%2024'%3E%3C/svg%3E" alt="Jurnal Enterpreneur" width="215" height="24" data-lazy-src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/logo-jurnal-enterpreneur.png"/><noscript><img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/logo-jurnal-enterpreneur.png" alt="Jurnal Enterpreneur" width="215" height="24"/></noscript></a>
          <div class="header_right">
                      </div>
          <nav class="header_nav">
<!-- Collect the nav links, forms, and other content for toggling --><ul class="header_menu">
<li class="is-sm">
<a href="https://www.jurnal.id/id/fitur/aplikasi-akuntansi/" >Aplikasi Akuntansi</a>
</li>
<li class="is-sm">
<a href="https://www.jurnal.id/id/fitur/aplikasi-akuntansi/pembukuan/" >Aplikasi Pembukuan</a>
</li>
<li class="">
<a href="https://www.jurnal.id/id/fitur/invoice-faktur/" >Aplikasi Invoice</a>
</li>
<li class="is-sm">
<a href="https://www.jurnal.id/id/fitur/laporan-keuangan-bisnis/" >Aplikasi Laporan Keuangan</a>
</li>
<li class="">
<a href="https://www.jurnal.id/id/fitur/pajak/" >Online Pajak</a>
</li>
<a href="javascript:void(0);" class="open-sf"></a></ul></nav>
          <!-- search -->

<!-- /search -->

<form id='searchform' role="search" method="get" action="https://www.jurnal.id/id/">   
    <input  class="form-control" name="s" id="s" type="text"  placeholder="Search here ..."/>
    <button class="btn-search btn btn-primary" type="submit"> <span>Search</span></button>
    <div class="close"><a href="javascript:void(0);"></a></div>
</form>
        </div>
      </div>
    </header>
    <div class="web-wrapper">
      <main class="insight">
<section>     
  <div class="container">
    <div class="row ins-blog">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-9">
            <div class="ins-blog-header">
                            <div class="ins-blog-header-cat"><a href="https://www.jurnal.id/id/blog/category/bisnis/">Bisnis</a></div>
              <div class="ins-blog-header-title">
                <h1 itemprop="headline">Meningkatkan Followers Instagram Bisnis dengan Murah</h1>
              </div>
              <!--div class="ins-blog-header-meta">
                <div class="ins-blog-header-meta-author">BY <b>Desra</b></div>
                <div class="ins-blog-header-meta-date">14 Nov 2019</div>
              </div-->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="ins-blog-content">
          <div class="row">
            <div class="col-lg-9">
              <div class="row">
                <div class="col-lg-11">
                  <article>
                  <p>Sebagai <em>platform </em>media sosial yang paling populer, Instagram kini banyak sekali dimanfaatkan untuk melakukan promosi bisnis. Di <em>platform </em>ini, <em>followers </em>sangat dibutuhkan untuk membuat akun bisnis Anda lebih eksis dan dikenal oleh orang banyak. Oleh karenanya banyak sekali akun yang mencoba berbagai cara untuk meningkatkan <em>followers </em><a href="https://www.instagram.com/jurnalofficial/?hl=en" rel="nofollow noopener"><strong>Instagram</strong></a>.</p>
<p>Banyak yang berusaha meningkatkan <em>followers</em> dengan mengeluarkan biaya yang cukup besar dan mengunduh berbagai aplikasi, namun <em>followers </em>yang diberikan ternyata tidak aktif. Padahal ada banyak cara meningkatkan <em>followers </em>Instagram yang lebih mudah dan aman yang bisa diaplikasikan. Cara ini pun tidak memerlukan biaya yang tinggi. Apa saja cara tersebut? berikut penjelasannya.</p>
<p><strong>Baca Juga: <a href="https://www.jurnal.id/blog/7-cara-meningkatkan-penjualan-melalui-instagram/">7 Cara Meningkatkan Penjualan Melalui Instagram</a></strong></p>
<div class="lwptoc lwptoc-autoWidth lwptoc-baseItems lwptoc-light lwptoc-notInherit" data-smooth-scroll="1" data-smooth-scroll-offset="80"><div class="lwptoc_i">    <div class="lwptoc_header">
        <b class="lwptoc_title">Table of Contents</b>            </div>
<div class="lwptoc_items lwptoc_items-visible">
    <div class="lwptoc_itemWrap"><div class="lwptoc_item">    <a href="#Berikan_Konten_Berkualitas">
                    <span class="lwptoc_item_number">1</span>
                <span class="lwptoc_item_label">Berikan Konten Berkualitas</span>
    </a>
    </div><div class="lwptoc_item">    <a href="#Perbaiki_Feed">
                    <span class="lwptoc_item_number">2</span>
                <span class="lwptoc_item_label">Perbaiki Feed</span>
    </a>
    </div><div class="lwptoc_item">    <a href="#Gunakan_Hashtag">
                    <span class="lwptoc_item_number">3</span>
                <span class="lwptoc_item_label">Gunakan Hashtag</span>
    </a>
    </div><div class="lwptoc_item">    <a href="#Pertimbangkan_Waktu_Mengunggah">
                    <span class="lwptoc_item_number">4</span>
                <span class="lwptoc_item_label">Pertimbangkan Waktu Mengunggah</span>
    </a>
    </div><div class="lwptoc_item">    <a href="#Tinggalkan_Jejak_di_Berbagai_Akun">
                    <span class="lwptoc_item_number">5</span>
                <span class="lwptoc_item_label">Tinggalkan Jejak di Berbagai Akun</span>
    </a>
    </div><div class="lwptoc_item">    <a href="#Promosikan_di_Platform_Lain">
                    <span class="lwptoc_item_number">6</span>
                <span class="lwptoc_item_label">Promosikan di Platform Lain</span>
    </a>
    </div><div class="lwptoc_item">    <a href="#Hubungkan_dengan_Akun_yang_Lebih_Besar">
                    <span class="lwptoc_item_number">7</span>
                <span class="lwptoc_item_label">Hubungkan dengan Akun yang Lebih Besar</span>
    </a>
    </div><div class="lwptoc_item">    <a href="#Gunakan_Teknik_Follow-Unfollow">
                    <span class="lwptoc_item_number">8</span>
                <span class="lwptoc_item_label">Gunakan Teknik “Follow-Unfollow”</span>
    </a>
    </div></div></div>
</div></div><h2><span id="Berikan_Konten_Berkualitas"><strong>Berikan Konten Berkualitas</strong></span></h2>
<p><img class="size-full wp-image-4710 aligncenter" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20628'%3E%3C/svg%3E" alt="instagram marketing" width="1000" height="628" data-lazy-srcset="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102437/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-5.jpg 1000w, https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102437/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-5-796x500.jpg 796w" data-lazy-sizes="(max-width: 1000px) 100vw, 1000px" data-lazy-src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102437/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-5.jpg"><noscript><img class="size-full wp-image-4710 aligncenter" src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102437/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-5.jpg" alt="instagram marketing" width="1000" height="628" srcset="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102437/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-5.jpg 1000w, https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102437/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-5-796x500.jpg 796w" sizes="(max-width: 1000px) 100vw, 1000px"></noscript></p>
<p>Konten visual merupakan daya tarik dan modal utama Anda untuk menambah <em>followers </em>di Instagram. <em>Followers </em>yang telah ada sebelumnya pun tidak akan segan-segan melakukan <em>unfollow </em>jika konten dianggap tidak berkualitas. Oleh sebab itu bagikan konten yang menarik, informatif, dan menghibur dengan kualitas gambar yang baik.</p>
<p>Jangan asal membagikan tanpa tahu apa yang dimaksud serta tidak relevan dengan produk dan layanan yang Anda sediakan. Selain itu, hindari juga meng-<em>posting </em>foto milik orang lain tanpa mencantumkan <em>credit</em>. Ini akan menimbulkan permasalahan hak cipta dan berdampak pada kredibilitas akun bisnis Anda.</p>
<h2><span id="Perbaiki_Feed"><strong>Perbaiki <em>Feed</em></strong></span></h2>
<p><img class="size-medium wp-image-14156 aligncenter" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20417'%3E%3C/svg%3E" alt="meningkatkan folllowers instagram" width="1000" height="417" data-lazy-srcset="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/03/shutterstock_1023254527-1000x417.png 1000w, https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/03/shutterstock_1023254527.png 1200w, https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/03/shutterstock_1023254527-1178x491.png 1178w" data-lazy-sizes="(max-width: 1000px) 100vw, 1000px" data-lazy-src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/03/shutterstock_1023254527-1000x417.png"><noscript><img class="size-medium wp-image-14156 aligncenter" src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/03/shutterstock_1023254527-1000x417.png" alt="meningkatkan folllowers instagram" width="1000" height="417" srcset="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/03/shutterstock_1023254527-1000x417.png 1000w, https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/03/shutterstock_1023254527.png 1200w, https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/03/shutterstock_1023254527-1178x491.png 1178w" sizes="(max-width: 1000px) 100vw, 1000px"></noscript></p>
<p>Selain kualitas konten, perbaiki pula <em>feed </em>untuk menambah daya tarik akun Instagram Anda. <em>Feed</em> adalah keseluruhan foto yang ada dalam akun Instagram Anda. Atur <em>feed</em> sedemikian rupa agar terlihat rapi dan enak dipandang. Contohnya dengan menggunakan <em>tone </em>warna yang sama untuk tiap foto, menyeragamkan konten video di baris tengah, dan lain sebagainya.</p>
<h2><span id="Gunakan_Hashtag"><strong>Gunakan <em>Hashtag</em></strong></span></h2>
<p><img class="size-full wp-image-4706 aligncenter" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20628'%3E%3C/svg%3E" alt="meningkatkan followers instagram" width="1000" height="628" data-lazy-srcset="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102428/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-1.jpg 1000w, https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102428/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-1-796x500.jpg 796w" data-lazy-sizes="(max-width: 1000px) 100vw, 1000px" data-lazy-src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102428/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-1.jpg"><noscript><img class="size-full wp-image-4706 aligncenter" src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102428/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-1.jpg" alt="meningkatkan followers instagram" width="1000" height="628" srcset="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102428/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-1.jpg 1000w, https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/01102428/Jurnal_Blog_7-Cara-Meningkatkan-Penjualan-Melalui-Instagram.jpg-1-796x500.jpg 796w" sizes="(max-width: 1000px) 100vw, 1000px"></noscript></p>
<p>Gunakan <em>hashtag </em>di tiap <em>posting-</em>an agar konten Anda bisa ditemukan oleh orang lain yang memang tertarik dan membutuhkan produk tersebut. Berikan <em>hashtag </em>yang beragam yang masih relevan serta melambangkan dan merepresentasikan merek Anda. Anda dapat menggunakan maksimal 30 <em>hashtag </em>untuk tiap <em>posting-</em>an. Cari referensi <em>tags</em> pada kolom <em>search</em> di Instagram atau memanfaatkan aplikasi seperti In Tags, Tagify dan lainnya.</p>
<h2><span id="Pertimbangkan_Waktu_Mengunggah"><strong>Pertimbangkan Waktu Mengunggah</strong></span></h2>
<p><em>Posting </em>konten di waktu-waktu di mana kebanyakan orang mengakses Instagram. Hal ini agar konten Anda langsung mendapatkan <em>like </em>atau komentar yang akan meningkatkan <em>engagement </em>agar tidak tenggelam. Anda bisa melakukan percobaan dengan melakukan <em>posting </em>di beberapa waktu dan bandingkan <a href="https://www.talenta.co/blog/insight-talenta/cara-mengatur-waktu-dengan-baik-saat-bekerja-dari-rumah/"><strong>waktu</strong></a> mana yang terbaik. Cara lainnya adalah dengan memanfaatkan fitur <em>insights </em>dan identifikasi <em>followers </em>pada akun Instagram for business. Dari sini Anda bisa melihat waktu rata-rata <em>followers </em>bermain Instagram setiap hari.</p>
<h2><span id="Tinggalkan_Jejak_di_Berbagai_Akun"><strong>Tinggalkan Jejak di Berbagai Akun</strong></span></h2>
<p>Orang-orang akan mudah menemukan Anda apabila Anda bisa berada dimana-mana. Oleh karena itu cobalah untuk aktif memberikan <em>like </em>dan komentar di <em>posting</em>-an milik orang lain. Dengan kegiatan ini akun Anda akan lebih sering terlihat dan orang-orang akan penasaran. Namun tentu saja hindari <em>spam, </em>komentar yang kurang relevan dan sangat terlihat sedang beriklan yang justru akan mengganggu.</p>
<h2><span id="Promosikan_di_Platform_Lain"><strong>Promosikan di <em>Platform </em>Lain</strong></span></h2>
<p>Anda juga bisa berkolaborasi dengan <em>platform </em>lain untuk meningkatkan <em>followers </em>Anda. Gunakan <em>platform</em> lain seperti Facebook, Twitter atau Youtube untuk mempromosikan akun Instagram Anda. Anda juga dapat meberikan promosi ataupun diskon bagi pengguna yang mengikuti akun Instagram Anda.</p>
<h2><span id="Hubungkan_dengan_Akun_yang_Lebih_Besar"><strong>Hubungkan dengan Akun yang Lebih Besar</strong></span></h2>
<p>Tandai akun-akun yang mempunyai <em>followers </em>tinggi pada konten Anda. Apabila konten Anda di-<em>repost </em>oleh akun tersebut maka akun Anda berkesempatan mendapatkan <em>followers </em>yang tinggi. Contohnya apabila akun Anda bertemakan humor, Anda bisa memberikan <em>post</em> dan menandai akun berbasis humor dengan <em>followers </em>yang tinggi dengan harapan konten Anda akan di-<em>repost</em>.</p>
<h2><span id="Gunakan_Teknik_Follow-Unfollow"><strong>Gunakan Teknik “<em>Follow-Unfollow</em>”</strong></span></h2>
<p>Tips ini masih jarang dilakukan padahal efektif untuk meningkatkan <em>followers</em> Instagram. Anda bisa melakukannya dengan mencari akun ber-<em>follower </em>tinggi seperti selebgram atau artis. Setelah akun tersebut ditemukan, selanjutnya masuk ke <em>tab</em> <em>follower</em>nya, lalu <em>follow</em> orang-orang di daftar teratas. <em>Follower</em> baru seperti ini biasanya adalah akun baru yang juga mencari <em>follower</em>. Hal ini juga bukan hanya diterapkan pada selebgram atau artis, namun juga dengan akun produk pesaing atau produk dengan pasar yang sama.</p>
<p>Dengan mengikuti akun tersebut, kesempatan untuk di-<em>followback</em> cukup tinggi. Setelah itu Anda dapat meng-<em>unfollow </em>akun tersebut jika tidak ingin memenuhi daftar <em>following </em>di akun Instagram Anda. Namun Anda tidak disarankan mengikuti banyak akun langsungdalam satu waktu. Berilah jeda sekitar setengah jam atau satu jam setelah mengikuti 20 akun. Jika tidak, Instagram akan men-<em>suspend </em>akun Anda karena pertambahan <em>following</em> dan <em>follower</em> yang tidak natural.</p>
<p><strong>Baca juga: <a href="https://www.jurnal.id/blog/instagram-takeovers/">Lebih Mengenal Instagram Takeovers, Strategi Penting dalam Pemasaran</a></strong></p>
<p>Jika Anda konsisten mengaplikasikan cara di atas, jumlah <em>follower </em>Anda bisa terus bertambah dan berdampak pada pengembangan bisnis. Setelah itu jangan lupa juga memastikan pengelolaan bisnis Anda berjalan dengan tepat. <strong><a href="https://www.jurnal.id/?utm_source=blog&amp;utm_medium=post">Jurnal</a> </strong><em>software </em>akuntansi menyediakan berbagai macam fitur untuk melakukan pengelolaan keuangan seperti meng-<em>input</em> penjualan serta pembelian, <a href="https://www.jurnal.id/id/fitur/aplikasi-akuntansi/">aplikasi akunting</a>, mencetak faktur, pencatatan persediaan dan laporan keuangan secara mudah, cepat, aman dan terotomatis. Karena itu segara daftarkan bisnis Anda di <strong><a href="https://www.jurnal.id/?utm_source=blog&amp;utm_medium=post">Jurnal</a></strong>. Nikmati juga kesempatan <em>free trial</em> selama 14 hari. Dapatkan informasi lengkapnya <a href="https://www.jurnal.id/id/guidebooks"><strong>di sini</strong>.</a></p>
<p>&nbsp;</p>
<p>[adrotate banner=”19″]</p>
                  </article>
                </div>
                <div class="col-md-11 col-12 ins-blog-cat-list">
                                </div>
                <div class="col-md-11 col-12 ins-blog-cat-list">
                <b>Kategori : </b><a href="https://www.jurnal.id/id/blog/category/bisnis/">Bisnis</a>                </div>
                <div class="col-md-11 col-12 ins-blog-prevnext">
                  <div class="row align-contents-center">
                    <div class="col-6 text-left">
                      <a href='https://www.jurnal.id/id/blog/pembukuan-sederhana/' rel='prev' class='link-btn with-arrow-invert'>Artikel Sebelumnya</a>                    </div>
                    <div class="col-6 text-right">
                      <a href='https://www.jurnal.id/id/blog/meningkatkan-konversi/' rel='next' class='link-btn with-arrow'>Artikel Selanjutnya</a>                    </div>
                  </div>
                </div>
                                <div class="col-lg-11 ins-blog-related mt-40">
                  <h2>Related Articles</h2>
                  <div class="row">
                                      <div class="col-lg-6">
                      <div class="ins-box-xs">
                        <div class="ins-box-xs-img"><a href="https://www.jurnal.id/id/blog/persentase-pertumbuhan/"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20104%20104'%3E%3C/svg%3E" alt="Cara Menghitung Persentase Pertumbuhan" width="104" height="104" data-lazy-src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/22155003/Jurnal_Blog_Rencana-Bisnis-yang-Perlu-Dijalankan-Oleh-Bisnis-Kecil.jpg-4.jpg"/><noscript><img src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/22155003/Jurnal_Blog_Rencana-Bisnis-yang-Perlu-Dijalankan-Oleh-Bisnis-Kecil.jpg-4.jpg" alt="Cara Menghitung Persentase Pertumbuhan" width="104" height="104"/></noscript></a></div>
                        <div class="ins-box-xs-wrapper">
                          <div class="ins-box-xs-cat"><a href="https://www.jurnal.id/id/blog/category/bisnis/" rel="category tag">Bisnis</a>,<a href="https://www.jurnal.id/id/blog/category/keuangan-bisnis/" rel="category tag">Keuangan Bisnis</a></div>
                          <div class="ins-box-xs-title"><a href="https://www.jurnal.id/id/blog/persentase-pertumbuhan/">Cara Menghitung Persentase Pertumbuhan</a></div>
                        </div>
                      </div>
                    </div>
                                      <div class="col-lg-6">
                      <div class="ins-box-xs">
                        <div class="ins-box-xs-img"><a href="https://www.jurnal.id/id/blog/gudang-bagi-bisnis/"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20104%20104'%3E%3C/svg%3E" alt="Seberapa Pentingkah Sebuah Gudang Bagi Bisnis?" width="104" height="104" data-lazy-src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/10202650/Jurnal_Blog_penjelasan-dan-contoh-laporan-stok-barang-gudang-yang-perlu-diketahui-para-pebisnis3.jpeg"/><noscript><img src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/10202650/Jurnal_Blog_penjelasan-dan-contoh-laporan-stok-barang-gudang-yang-perlu-diketahui-para-pebisnis3.jpeg" alt="Seberapa Pentingkah Sebuah Gudang Bagi Bisnis?" width="104" height="104"/></noscript></a></div>
                        <div class="ins-box-xs-wrapper">
                          <div class="ins-box-xs-cat"><a href="https://www.jurnal.id/id/blog/category/bisnis/" rel="category tag">Bisnis</a></div>
                          <div class="ins-box-xs-title"><a href="https://www.jurnal.id/id/blog/gudang-bagi-bisnis/">Seberapa Pentingkah Sebuah Gudang Bagi Bisnis?</a></div>
                        </div>
                      </div>
                    </div>
                                      <div class="col-lg-6">
                      <div class="ins-box-xs">
                        <div class="ins-box-xs-img"><a href="https://www.jurnal.id/id/blog/barang-subtitusi/"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20104%20104'%3E%3C/svg%3E" alt="Barang Substitusi Adalah: Pengertian Serta Manfaatnya" width="104" height="104" data-lazy-src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2018/09/3.-Produk1-315x235.jpg"/><noscript><img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2018/09/3.-Produk1-315x235.jpg" alt="Barang Substitusi Adalah: Pengertian Serta Manfaatnya" width="104" height="104"/></noscript></a></div>
                        <div class="ins-box-xs-wrapper">
                          <div class="ins-box-xs-cat"><a href="https://www.jurnal.id/id/blog/category/bisnis/" rel="category tag">Bisnis</a></div>
                          <div class="ins-box-xs-title"><a href="https://www.jurnal.id/id/blog/barang-subtitusi/">Barang Substitusi Adalah: Pengertian Serta Manfaatnya</a></div>
                        </div>
                      </div>
                    </div>
                                      <div class="col-lg-6">
                      <div class="ins-box-xs">
                        <div class="ins-box-xs-img"><a href="https://www.jurnal.id/id/blog/gudang-bersama/"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20104%20104'%3E%3C/svg%3E" alt="Gudang Bersama, Tujuan Hingga Keuntungan dan Kelemahannya" width="104" height="104" data-lazy-src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/10202650/Jurnal_Blog_penjelasan-dan-contoh-laporan-stok-barang-gudang-yang-perlu-diketahui-para-pebisnis3.jpeg"/><noscript><img src="https://jurnal-blog-assets.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/03/10202650/Jurnal_Blog_penjelasan-dan-contoh-laporan-stok-barang-gudang-yang-perlu-diketahui-para-pebisnis3.jpeg" alt="Gudang Bersama, Tujuan Hingga Keuntungan dan Kelemahannya" width="104" height="104"/></noscript></a></div>
                        <div class="ins-box-xs-wrapper">
                          <div class="ins-box-xs-cat"><a href="https://www.jurnal.id/id/blog/category/bisnis/" rel="category tag">Bisnis</a></div>
                          <div class="ins-box-xs-title"><a href="https://www.jurnal.id/id/blog/gudang-bersama/">Gudang Bersama, Tujuan Hingga Keuntungan dan Kelemahannya</a></div>
                        </div>
                      </div>
                    </div>
                                    </div>
                </div>
                              </div>
            </div>
            <div class="col-lg-3 ins-blog-sidebar single_sidebar-sticky">
              <div class="ins-blog-sidebar-wrap sidebar_wrap">
                <div class="sticky_wrapper">
                  <div class="insight--subscribe sm">
                    <div class="insight--subscribe_wrap">
                                            <div class="insight--subscribe_form">
                                                <form class="custom-form--inquiry form-subscribe" action="https://forms.zohopublic.com/mekari/form/BlogSubscribe/formperma/3jWe5vCSCyVvaVvndWxgERQt28YDPrfk86vSh_j-onM/htmlRecords/submit" name="form" id="form-subscribe-sidebar" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
  <input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
<input id="redirect_url" type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
<input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
<input type="hidden" name="utm_source" value=""/>
<input type="hidden" name="utm_medium" value=""/>
<input type="hidden" name="utm_campaign" value=""/>
<input type="hidden" name="utm_term" value=""/>
<input type="hidden" name="utm_content" value=""/>
  <div class="field_group">
    <label>Nama Lengkap</label>
    <input class="field" type="text" name="SingleLine" value="" fieldtype="1" maxlength="255">
  </div>
  <div class="field_group">
    <label>Email </label>
    <input class="field" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" maxlength="255" name="Email" value="" fieldtype="9">
  </div>
  <div class="field_group">
    <input id="original_url" type="hidden" name="SingleLine1" value="https://www.jurnal.id/id/blog/" fieldType=1 maxlength="255" />
    <button class="btn btn-blue btn-block" type="submit">Subscribe</button>
  </div>
</form>                      </div>
                    </div>
                  </div>
                                    <div id="primary-sidebar" class="primary-sidebar widget-area hidden-sticky" role="complementary">
                    <div>			<div class="textwidget"><div class="insight--subscribe sm"><strong>Kelola Bisnis Kompleks Lebih Mudah dengan Aplikasi Akuntansi Jurnal By Mekari.</strong><center><a class="btn btn-primary " href="https://my.jurnal.id/id/users/sign_up/?utm_source=blog&amp;utm_medium=hyperlink&amp;utm_campaign=SidebarButton">Coba Gratis Sekarang!</a></center></div>
</div>
		</div>                  </div><!-- #primary-sidebar -->
                                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <span class="sticky-promo">
  <a class="close" href="javascript:void(0);"></a>
  <a class="promo" href="" target="_blank">
    <label></label><img src="" alt=""/>
  </a>
</span> -->
      <section class="tf-cta">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8 col-12 tf-cta-title">
        <h2>Kembangkan bisnis Anda dengan Jurnal sekarang</h2>
      </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-md-6 col-12 tf-cta_item is-highlight">
        <img class="mb-16" width="80" height="80" src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2021/04/ic-invite-to-office.svg" alt="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2021/04/ic-invite-to-office.svg"/>
        <h3>Coba Gratis</h3>
        <p>Akses seluruh fitur Jurnal by Mekari selama 14 hari tanpa biaya apapun</p>
                <a class="btn btn-blue-alt" href="https://my.jurnal.id/id/users/sign_up/?utm_source=digital%20-%20trial%20direct%20sign%20up%20(o)&utm_medium=website%20-%20blog&utm_campaign=BlogFooterCTA">Coba Gratis 14 hari</a>
              </div>
            <div class="col-md-6 col-12 tf-cta_item">
        <img class="mb-16" width="80" height="80" src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2021/04/ic-demo-interaktif.svg" alt="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2021/04/ic-demo-interaktif.svg"/>
        <h3>Jadwalkan Demo</h3>
        <p>Jadwalkan sesi demo dan konsultasikan kebutuhan Anda langsung dengan sales kami</p>
                <a class="btn btn-blue-border" href="https://www.jurnal.id/id/harga/inquiry-id/?utm_source=digital%20-%20sales%20inquiries%20(o)&utm_medium=website%20-%20blog&utm_campaign=BlogFooterCTA">Jadwalkan Demo</a>
              </div>
          </div>
  </div>
</section>
<footer class="footer">
  <div class="footer_sc1">
    <div class="container">
      <div class="row footer_sc11">
        <div class="col-lg-2"><a href="https://www.jurnal.id/id/" target="_blank" rel="noreferrer"><img class="footer_logo" src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/11/logo-jurnal-1.svg" width="185" height="60" alt="Jurnal"/></a></div>
        <div class="col-lg-2 col-md-3 col-6">
<!-- Collect the nav links, forms, and other content for toggling --><h3>Tentang Jurnal</h3><ul class="footer_menu">
<li>
<a href="https://www.jurnal.id/id/mengapa-jurnal/"  target="">Mengapa Jurnal</a>
</li>
<li>
<a href="https://www.jurnal.id/id/klien-kami/"  target="">Klien Kami</a>
</li>
<li>
<a href="https://www.jurnal.id/id/integrasi/"  target="">Integrasi</a>
</li>
<li>
<a href="https://www.jurnal.id/id/referral/"  target="">Program Referral</a>
</li>
</ul>
</div>
<div class="col-lg-2 col-md-3 col-6">
<!-- Collect the nav links, forms, and other content for toggling --><h3>Fitur</h3><ul class="footer_menu">
<li>
<a href="https://www.jurnal.id/id/fitur/laporan-keuangan-bisnis/"  target="_self">Laporan Keuangan</a>
</li>
<li>
<a href="https://www.jurnal.id/id/fitur/aplikasi-akuntansi/"  target="_self">Akuntansi</a>
</li>
<li>
<a href="https://www.jurnal.id/id/fitur/kas-transaksi/"  target="_self">Kas &#038; Transaksi</a>
</li>
<li>
<a href="https://www.jurnal.id/id/mekari-pay/"  target="_self">Mekari Pay</a>
</li>
<li>
<a href="https://www.jurnal.id/id/fitur/invoice-faktur/"  target="_self">Invoice</a>
</li>
<li>
<a href="https://www.jurnal.id/id/fitur/produk-inventory/"  target="_self">Produk &#038; Inventory</a>
</li>
<li>
<a href="https://www.jurnal.id/id/fitur/biaya-anggaran/"  target="_self">Biaya &#038; Anggaran</a>
</li>
<li>
<a href="https://www.jurnal.id/id/fitur/pajak/"  target="_self">Perpajakan</a>
</li>
<li>
<a href="https://www.jurnal.id/id/fitur/ios-android-app/"  target="_self">Mobile App</a>
</li>
</ul>
</div>
<div class="col-lg-2 col-md-3 col-6">
<!-- Collect the nav links, forms, and other content for toggling --><h3>Resources</h3><ul class="footer_menu">
<li>
<a href="https://www.jurnal.id/id/blog/"  target="_self">Blog</a>
</li>
<li>
<a href="https://www.jurnal.id/id/ebook-akuntansi-jurnal/"  target="_self">eBook & Whitepaper</a>
</li>
<li>
<a href="https://www.jurnal.id/id/download/brosur-interaktif-jurnal-by-mekari-on-site/"  target="_blank" rel="noreferrer">Brosur Interaktif</a>
</li>
<li>
<a href="https://www.jurnal.id/id/blog/category/event/"  target="_self">Events</a>
</li>
<li>
<a href="https://univ.mekari.com/"  target="_self">Mekari University</a>
</li>
<li>
<a href="https://www.jurnal.id/id/support"  target="_self">Support</a>
</li>
<li>
<a href="https://www.jurnal.id/id/partnership-for-customer/"  target="">Jasa Konsultasi Bisnis</a>
</li>
<li>
<a href="https://api-jurnal.api-docs.io/"  target="_self">Dokumentasi API</a>
</li>
</ul>
</div>
<div class="col-lg-2 col-md-3 col-6">
<!-- Collect the nav links, forms, and other content for toggling --><h3>Perusahaan</h3><ul class="footer_menu">
<li>
<a href="https://mekari.com/tentang-mekari/"  target="">Tentang Mekari</a>
</li>
<li>
<a href="https://mekari.com/careers/"  target="">Karir<span class="tag">We&#8217;re Hiring !</span></a>
</li>
<li>
<a href="https://mekari.com/user-research/"  target="">User Research</a>
</li>
<li>
<a href="https://mekari.com/news/"  target="">Press</a>
</li>
<li>
<a href="https://www.jurnal.id/id/security/"  target="">Keamanan</a>
</li>
<li>
<a href="https://www.jurnal.id/id/privacy/"  target="">Privasi</a>
</li>
<li>
<a href="https://www.jurnal.id/id/terms_and_condition"  target="">Syarat & Ketentuan</a>
</li>
</ul>
</div>
                <div class="col-lg-2">
          <div class="cert">
                        <div class="img"><img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/11/iso-27001-1.svg" width="86" height="53" alt="iso"/></div>
                                    <div class="img"><a href="https://pse.kominfo.go.id/sistem/563" target="_blank" rel="noreferrer"><img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/11/pse-terdaftar-1.svg" width="58" height="60" alt="kominfo"/></a></div>
                      </div>
        </div>
      </div>
      <hr/>
      <div class="row footer_sc12">
        <div class="col-lg-2">
                    <div class="footer_social">
                    <a href="https://twitter.com/jurnalofficial" target="_blank" rel="noreferrer"> <img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/icon-twitter-1.svg" width="21" height="21" alt="sosmed"/></a>
                    <a href="https://www.facebook.com/jurnalofficial/?_rdc=1&_rdr" target="_blank" rel="noreferrer"> <img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/icon-facebook-1.svg" width="21" height="21" alt="sosmed"/></a>
                    <a href="https://www.instagram.com/jurnalofficial/" target="_blank" rel="noreferrer"> <img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/icon-instagram-1.svg" width="21" height="21" alt="sosmed"/></a>
                    <a href="https://www.youtube.com/channel/UCdrdWmoC-o5qUPlRgQTpMtw" target="_blank" rel="noreferrer"> <img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/icon-youtube-1.svg" width="21" height="21" alt="sosmed"/></a>
                    </div>
                  </div>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-10 footer_addr">
                            <div class="footer_addr_item">
                <h3>Jakarta</h3>
                <p>MidPlaza 2 Lantai 4 Jln. Jend. Sudirman Kav. 10-11 Jakarta, 10250. 
</p>
                                <p class="footer_tel">Tel: <a href="tel:1500 069">1500 069</a></p>
                              </div>
                            <div class="footer_addr_item">
                <h3>Bandung</h3>
                <p>JL. Jenderal Ahmad Yani No. 271 A, Bandung</p>
                                <p class="footer_tel">Tel: <a href="tel:1500 069">1500 069</a></p>
                              </div>
                            <div class="footer_addr_item">
                <h3>Surabaya</h3>
                <p>Jl. Ngagel Jaya Selatan No 158 </p>
                                <p class="footer_tel">Tel: <a href="tel:1500 069">1500 069</a></p>
                              </div>
                            <div class="footer_addr_item">
                <h3>Medan</h3>
                <p>Jl. KH. Zainul Arifin No.152, Madras Hulu, Kec. Medan Polonia, Kota Medan, Sumatera Utara 20151</p>
                                <p class="footer_tel">Tel: <a href="tel:085837818070">085837818070</a></p>
                              </div>
                          </div>
            <div class="col-lg-2 col-6">
              
<div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-touch-device wpml-ls-legacy-dropdown-click js-wpml-ls-legacy-dropdown-click">
	<ul>

		<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-id wpml-ls-current-language wpml-ls-first-item wpml-ls-last-item wpml-ls-item-legacy-dropdown-click">

			<a href="#" class="js-wpml-ls-item-toggle wpml-ls-item-toggle">
                                                    <img width="18" height="12"
            class="wpml-ls-flag"
            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2018%2012'%3E%3C/svg%3E"
            alt=""
            width=18
            height=12
    data-lazy-src="https://www.jurnal.id/wp-content/plugins/sitepress-multilingual-cms/res/flags/id.png" /><noscript><img width="18" height="12"
            class="wpml-ls-flag"
            src="https://www.jurnal.id/wp-content/plugins/sitepress-multilingual-cms/res/flags/id.png"
            alt=""
            width=18
            height=12
    /></noscript><span class="wpml-ls-native">Indonesia</span></a>

			<ul class="js-wpml-ls-sub-menu wpml-ls-sub-menu">
							</ul>

		</li>

	</ul>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_sc2">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="footer_mekari"><img src="https://d39otahjdwbcpl.cloudfront.net/wp-content/uploads/2020/04/logo-mekari.svg" width="136" height="30" alt="Mekari"/></div><span>&copy; Copyright 2022 PT Mid Solusi Nusantara</span>
        </div>
              <div class="col-md-4 text-right"><a class="with-arrow " href="https://mekari.com/" target="_blank" rel="noreferrer">View all Mekari products</a></div>
            </div>
    </div>
  </div>
</footer>    </footer>
        <div class="modal fade modal-subscribe" id="https://www.jurnal.id/id/harga/inquiry-id/">
      <div class="modal-dialog" role="document">
        <span class="modal-close" data-dismiss="modal"><img src="https://www.jurnal.id/wp-content/themes/jurnal/images/ic-reset-small.svg" alt="close"/></span>
        <div class="modal-content">
          <div class="modal-body text-center">
            <h2>Berbagai konten premium Jurnal hanya untuk Anda</h2>
            <p>Subscribe blog kami dan dapatkan perspektif baru tentang pengelolaan bisnis dan keuangan. Rangkuman konten-konten pilihan untuk menjawab semua kebutuhan usaha Anda.</p>
            [gravityform id="1" title="true" description="true" ajax="true"]          </div>      
        </div>
      </div>
    </div>     
        
</main>
</div>
    <!--Amazon AWS CDN Plugin. Powered by WPAdmin.ca 2.0.10-->
<script type='text/javascript' id='coder-limit-login-js-extra'>
/* <![CDATA[ */
var coder_limit_login = {"coder_limit_login_url":"https:\/\/www.jurnal.id\/wp-content\/plugins\/only-one-device-login-limit\/"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.jurnal.id/wp-content/cache/min/1/wp-content/plugins/only-one-device-login-limit/assets/js/coder-limit-login.js?ver=1642074199' id='coder-limit-login-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.jurnal.id/wp-content/cache/min/1/wp-includes/js/wp-embed.min.js?ver=1642074199' id='wp-embed-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.jurnal.id/wp-content/cache/min/1/wp-content/plugins/luckywp-table-of-contents/front/assets/main.min.js?ver=1642074199' id='lwptoc-main-js' defer></script>
<script>window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://www.jurnal.id/wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js"></script><script>function lazyLoadThumb(e){var t='<img data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>',a='<button class="play" aria-label="play Youtube video"></button>';return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.parentNode.dataset.query.length?'':'&'+this.parentNode.dataset.query;e.setAttribute("src",t.replace("ID",this.parentNode.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.parentNode.replaceChild(e,this.parentNode)}document.addEventListener("DOMContentLoaded",function(){var e,t,p,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)e=document.createElement("div"),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query", a[t].dataset.query),e.setAttribute("data-src", a[t].dataset.src),e.innerHTML=lazyLoadThumb(a[t].dataset.id),a[t].appendChild(e),p=e.querySelector('.play'),p.onclick=lazyLoadYoutubeIframe});</script>    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" src="https://www.jurnal.id/wp-content/cache/min/1/wp-content/themes/jurnal/plugins/jquery-1.12.0.min/jquery.js?ver=1642074200"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" src="https://www.jurnal.id/wp-content/themes/jurnal/plugins/bootstrap-sass/dist/js/bootstrap.bundle.min.js"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" src="https://www.jurnal.id/wp-content/themes/jurnal/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" src="https://www.jurnal.id/wp-content/themes/jurnal/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" defer></script>
    <script type="rocketlazyloadscript" data-minify="1" src="https://www.jurnal.id/wp-content/cache/min/1/npm/popper.js@1.16.1/dist/umd/popper.min.js?ver=1642074200" crossorigin="anonymous"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" src="https://www.jurnal.id/wp-content/themes/jurnal/plugins/owl.carousel/owl.carousel.min.js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" src="https://www.jurnal.id/wp-content/cache/min/1/wp-content/themes/jurnal/plugins/lity/lity.js?ver=1642074200" defer></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" src="https://www.jurnal.id/wp-content/themes/jurnal/plugins/jquery.marquee/jquery.marquee.min.js" defer></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer src="https://www.jurnal.id/wp-content/cache/min/1/wp-content/themes/jurnal/scripts/main.js?ver=1642074200"></script>
 
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript'>
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    //document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;domain=" + (document.domain.match(/[^\.]*\.[^.]*$/)[0]) + ";";
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;domain=" + (document.domain.match(/[^\.]*\.[^.]*$/)) + ";";

  }
  window.onload = function() {
    function waba() {
      var url_string = window.location.href;
      var url = new URL(url_string);

      var umedium = url.searchParams.get("utm_medium") || getCookie('utm_medium') || '';

      var medium = [{"id":"J1A","utm":"default"},{"id":"J2A","utm":"google ads - search"},{"id":"J3A","utm":"(i) google ads - search"},{"id":"J4A","utm":"google ads - yt"},{"id":"J5A","utm":"(i) google ads - yt"},{"id":"J6A","utm":"google ads - display"},{"id":"J7A","utm":"(i) google ads - display"},{"id":"J8A","utm":"social media ads - fb"},{"id":"J9A","utm":"(i) social media ads - fb"},{"id":"J1B","utm":"social media ads - ig"},{"id":"J2B","utm":"(i) social media ads - ig"},{"id":"J3B","utm":"social media ads - li"},{"id":"J4B","utm":"(i) social media ads - li"},{"id":"J5B","utm":"social media ads - tw"},{"id":"J6B","utm":"(i) social media ads - tw"},{"id":"J7B","utm":"placement - ecommerce"},{"id":"J8B","utm":"email"},{"id":"J9B","utm":"placement - blogger"},{"id":"J1C","utm":"(i) placement - blogger"},{"id":"J2C","utm":"placement - social media influencer"},{"id":"J3C","utm":"(i) placement - social media influencer"},{"id":"J4C","utm":"placement - publishing media"},{"id":"J5C","utm":"(i) placement - publishing media"},{"id":"J6C","utm":"email - sendinblue"},{"id":"J7C","utm":"(i) email - sendinblue"},{"id":"J8C","utm":"(i) email - sendinblue (recycled)"},{"id":"J9C","utm":"email - zoho mh"},{"id":"J1D","utm":"(i) email - zoho mh"},{"id":"J2D","utm":"email - sendgrid"},{"id":"J3D","utm":"(i) email - sendgrid"},{"id":"J4D","utm":"email - moengage"},{"id":"J5D","utm":"(i) email - moengage"},{"id":"J6D","utm":"(i) email - users (klik pajak)"},{"id":"J7D","utm":"(i) email - users (talenta)"},{"id":"J8D","utm":"(i) placement - ecommerce"},{"id":"J9D","utm":"fb"},{"id":"J1E","utm":"ig"},{"id":"J2E","utm":"li"},{"id":"J3E","utm":"tw"},{"id":"J4E","utm":"yt"},{"id":"J5E","utm":"google search"},{"id":"J6E","utm":"gdn"},{"id":"J7E","utm":"uac"},{"id":"J8E","utm":"gmail"},{"id":"J9E","utm":"product page"},{"id":"J1F","utm":"blog"},{"id":"J2F","utm":"in-app trial"},{"id":"J3F","utm":"in-app demo"},{"id":"J4F","utm":"facebook"},{"id":"J5F","utm":"instagram"},{"id":"J6F","utm":"linkedin"},{"id":"J7F","utm":"twitter"},{"id":"J8F","utm":"tiktok"},{"id":"J9F","utm":"fb (o)"},{"id":"J1G","utm":"ig (o)"},{"id":"J2G","utm":"li (o)"},{"id":"J3G","utm":"tw (o)"},{"id":"J4G","utm":"yt (o)"},{"id":"J5G","utm":"tt (o)"},{"id":"J6G","utm":"programmatic"},{"id":"J7G","utm":"publishing media"},{"id":"J8G","utm":"social media influencer"},{"id":"J9G","utm":"e-commerce"},{"id":"J1H","utm":"mobile app"},{"id":"J2H","utm":"user"},{"id":"J3H","utm":"non-user"},{"id":"J4H","utm":"user (aff)"},{"id":"J5H","utm":"non-user (aff)"},{"id":"J6H","utm":"talenta (event)"},{"id":"J7H","utm":"talenta (web)"},{"id":"J8H","utm":"talenta (in-app)"},{"id":"J9H","utm":"talenta (email)"},{"id":"J1I","utm":"klikpajak (event)"},{"id":"J2I","utm":"klikpajak (web)"},{"id":"J3I","utm":"klikpajak (in-app)"},{"id":"J4I","utm":"klikpajak (email)"},{"id":"J5I","utm":"mekari (event)"},{"id":"J6I","utm":"mekari (web)"},{"id":"J7I","utm":"mekari (in-app)"},{"id":"J8I","utm":"mekari (email)"},{"id":"J9I","utm":"sleekr (event)"},{"id":"J1J","utm":"sleekr (web)"},{"id":"J2J","utm":"sleekr (in-app)"},{"id":"J3J","utm":"sleekr (email)"},{"id":"J4J","utm":"qontak (event)"},{"id":"J5J","utm":"qontak (web)"},{"id":"J6J","utm":"qontak (in-app)"},{"id":"J7J","utm":"qontak (email)"},{"id":"J8J","utm":"hosting"},{"id":"J9J","utm":"tap-in"},{"id":"J1K","utm":"expo"},{"id":"J2K","utm":"conference"},{"id":"J3K","utm":"brochure"}];
var suffix = [{"code":"{{suf}}","desktop":"(W)","mobile":"(M)"},{"code":"{{inq}}","desktop":"(WI)","mobile":"(MI)"},{"code":"{{suf1}}","desktop":"(W1)","mobile":"(M1)"},{"code":"{{suf2}}","desktop":"(W2)","mobile":"(M2)"},{"code":"{{suf3}}","desktop":"(W3)","mobile":"(M3)"},{"code":"{{suf4}}","desktop":"(W4)","mobile":"(M4)"}];
var url_waba = 'https://wa.me/6281392770581?text=';
var param_waba = '{{code}} - Halo, saya ingin bertanya lebih lanjut mengenai Jurnal by Mekari {{suf}}';
      var code = '';
      if(umedium) {
        var count = 0; 
        if(medium.length > 0) {
          for(var i = 0; i < medium.length; i++) {
            if(medium[i]['utm'] == umedium) {
              count = count+1;
            }
          }
        }
        
        if(count > 0) {
          for(var i = 0; i < medium.length; i++) {
            if(medium[i]['utm'] == umedium) {
              code = medium[i]['id'];
              setCookie('waba_code','',0);
              setCookie('waba_code',code,1);
            } 
          } 
        } else {
          for(var j = 0; j < medium.length; j++) {
            if(medium[j]['utm'] == 'default') {
              code = medium[j]['id'];
              setCookie('waba_code','',0);
              setCookie('waba_code',code,1);
            }
          }
        }
      } else if(getCookie('utm_medium')) {
        if(medium.length > 0) {
          for(var i = 0; i < medium.length; i++) {
            if(medium[i]['utm'] == getCookie('utm_medium')) {
              code = medium[i]['id'];
              setCookie('waba_code','',0);
              setCookie('waba_code',code,1);
            } else {
              for(var j = 0; j < medium.length; j++) {
                if(medium[j]['utm'] == 'default') {
                  code = medium[j]['id'];
                  setCookie('waba_code','',0);
                  setCookie('waba_code',code,1);
                }
              }
            }
          } 
        }
      } else {
        if(medium.length > 0) {
          for(var i = 0; i < medium.length; i++) {
            if(medium[i]['utm'] == 'default') {
              code = medium[i]['id'];
              setCookie('waba_code','',0);
              setCookie('waba_code',code,1);
            }
          }
        }
      }

      var $pageid = "B - 8826"
      var devicetype = 'desktop';

      if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
        devicetype = 'mobile';
      } else {
        devicetype = 'desktop';
      }
      
      var code_ = $('.cta-waba');
      if(code_.length > 0) {
        for(var w = 0; w < code_.length; w++){
          var temp = code_[w].getAttribute('href');
          temp = temp.replace('{{code}}','[' + code + ' - ' + $pageid + ']');

          for(var s = 0; s < suffix.length; s++) {
            if(temp.includes(suffix[s]['code'])) {
              if(devicetype == 'desktop') {
                temp = temp.replace(suffix[s]['code'],suffix[s]['desktop']);
              } else {
                temp = temp.replace(suffix[s]['code'],suffix[s]['mobile']);
              }
            }
          }

          code_[w].href = temp;
        }
        
        setTimeout(function(){ 
          for(var x = 0; x < code_.length; x++){
            if(!$(code_[x]).hasClass('show')) {
              $(code_[x]).addClass('show'); 
            }
          }
        }, 1000);
      }
    }
    waba();

    function form() {
      var addons = getCookie('addons') || '';
      var us = getCookie('utm_source');
      //console.log(cc);
      if (us) {
        var f_us = $('input[name="utm_source"]');
        if (f_us) {
          f_us.val(us);
        }
      }

      var um = getCookie('utm_medium');
      //console.log(cc);
      if (um) {
        var f_um = $('input[name="utm_medium"]');
        if (f_um) {
          f_um.val(um)
        }
      }

      if(ucampaign) {
        var f_uc = document.querySelector('input[name="utm_campaign"]');
        var j = getCookie('user_journey');
        if(j) {
          if(f_uc) {
            f_uc.value = ucampaign+' ~ '+j+addons;
          }
        } else {
          if(f_uc) {
            f_uc.value = ucampaign;
          }
        }
      } else {
        var uc = getCookie('utm_campaign');
        if(uc) {
          var f_uc = document.querySelector('input[name="utm_campaign"]');
          var j = getCookie('user_journey');
          if(j) {
            if(f_uc) {
              f_uc.value = uc+' ~ '+j+addons;
            }
          } else {
            if(f_uc) {
              f_uc.value = uc;
            }
          }
          
        } else {
          var j = getCookie('user_journey');
          if(j) {
            var f_uc = document.querySelector('input[name="utm_campaign"]');
            if(f_uc) {
              f_uc.value = '~ ' +j+addons;
            }
          }
        }
      }

      

      var gclid = getCookie('gclid');
      //console.log(cc);
      if (gclid) {
        var f_gclid = $('input[id="gclid"]');
        if (f_gclid) {
          f_gclid.val(gclid);
        }

        var f_gad = $('input[name="zc_gad"]');
        if (f_gad) {
          f_gad.val(gclid);
        }
      }

      var gaid = getCookie('_ga');
      //console.log(cc);
      if (gaid) {
        var f_gaid = $('input[id="gaid"]');
        if (f_gaid) {
          f_gaid.val(gaid.slice(6));
        }
      }

      var url_string = window.location.href;
      var url = new URL(url_string);
      var referrercode = url.searchParams.get("referrer_code") || '';
      var usource = url.searchParams.get("utm_source") || '';
      var umedium = url.searchParams.get("utm_medium") || '';
      var ucampaign = url.searchParams.get("utm_campaign") || '';
      var gclid_ = url.searchParams.get("gclid") || '';
      var full_name = url.searchParams.get("full_name") || '';
      var phone_number = url.searchParams.get("phone_number") || '';
      var email = url.searchParams.get("email") || '';
      var company_name = url.searchParams.get("company_name") || '';
      var industry = url.searchParams.get("industry") || '';
      var company_id = url.searchParams.get("company_id") || url.searchParams.get("cid") || '';
      var promo_code = url.searchParams.get("promo_code") || url.searchParams.get("promocode") || '';
      var promocode = url.searchParams.get("promocode") || '';
      var company = url.searchParams.get("company") || '';
      var receiver = url.searchParams.get("receiver") || '';
      var opps_name = url.searchParams.get("opps_name") || '';
      var package = url.searchParams.get("package") || '';
      var devicetype = 'desktop';

      if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
        devicetype = 'mobile';
      } else {
        devicetype = 'desktop';
      }

      if (devicetype) {
        var f_devicetype = $('input[id="device"]');
        if (f_devicetype) {
          f_devicetype.val(devicetype);
        }
      }

      if (referrercode) {
        var f_referrer = $('input[id="referrer_code"]');
        if (f_referrer) {
          f_referrer.val(referrercode);
        }

        var h_referrer = $('input[name="referrer_code"]');
        if (h_referrer) {
          h_referrer.val(referrercode);
        }
      }

      if (usource) {
        var f_us = $('input[name="utm_source"]');
        if (f_us) {
          f_us.val(usource);
        }
      }

      if (umedium) {
        var f_um = $('input[name="utm_medium"]');
        if (f_um) {
          f_um.val(umedium);
        }
      }

      if (gclid_) {
        var f_gclid = $('input[id="gclid"]');
        if (f_gclid) {
          f_gclid.val(gclid_);
        }

        var f_gad = $('input[name="zc_gad"]');
        if (f_gad) {
          f_gad.val(gclid_);
        }
      }

      if (full_name) {
        var f_fullname = $('input[id="full_name"]');
        if (f_fullname) {
          f_fullname.val(full_name);
        }
      }

      if (phone_number) {
        var f_phone = $('input[id="international_PhoneNumber_countrycode"]');
        if (f_phone) {
          f_phone.val(phone_number);
        }
      }

      if (email) {
        var f_email = $('input[id="email"]');
        if (f_email) {
          f_email.val(email);
        }
      }

      if (company_name) {
        var f_company = $('input[id="company"]');
        if (f_company) {
          f_company.val(company_name);
        }
      }

      if (industry) {
        var f_industry = $('select[id="industry"]');
        if (f_industry) {
          var exists = false;
          $('#industry option').each(function() {
            if ($(this).val() == industry) {
              $(this).attr('selected', 'selected')
              $('button[data-id="industry"] .filter-option-inner-inner').html(this.value);
            }
          });
          //f_company.val() company_name;
        }
      }

      if (company_id) {
        var f_companyid = $('input[id="cid"]');
        if (f_companyid) {
          f_companyid.val(company_id);
        }
      }

      if (promo_code) {
        var f_promocode = $('input[id="promo_code"]');
        if (f_promocode) {
          f_promocode.val(promo_code);
        }
      }

      if (promocode) {
        var f_promocode = $('input[id="promocode"]');
        if (f_promocode) {
          f_promocode.val(promocode);
        }
      }

      if (company) {
        var f_company2 = $('.company');
        if (f_company2.length > 0) {
          f_company2.each(function() {
            $(this).html(company);
          });
        }

        var f_company3 = $('#referrer_company');
        if (f_company3) {
          f_company3.val(company);
        }
      }

      if (receiver) {
        var f_receiver = $('.receiver');
        if (f_receiver.length > 0) {
          f_receiver.each(function() {
            $(this).html(receiver);
          });
        }
      }

      if (opps_name) {
        var f_opps_name = $('input[id="opps_name"]');
        if (f_opps_name) {
          f_opps_name.val(opps_name);
        }
      }

      if (package) {
        var f_package = $('input[id="package"]');
        if (f_package) {
          f_package.val(package);
        }
      }

      var hc = $('#holding_check');

      if (hc) {
        var hc_ = $('#holding_comp');
        hc.on('change', function(e){
          if ($(this).prop("checked") == true) {
            if (hc_) {
              hc_.val('>= 3 cabang');
            }
          } else {
            if (hc_) {
              hc_.val('Tidak');
            }
          }
        });
      }

    }
    form();

  }
</script>    <div class="has-loading" style="position: fixed; z-index: 2147483001; top: 0; left: 0; width: 100%; height: 100%; background: #000; opacity: 0.5; display: none; align-items: center; justify-content: center; ">
      <img src="https://www.jurnal.id/wp-content/themes/jurnal/images/loading.svg" alt="Loading please wait ..." width="60" height="60">
    </div>
  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"a620b89621","applicationID":"846186755","transactionName":"blYHNUpTCBcABRIMW1ccMBNRHQ8KBQMeS0RRQw==","queueTime":0,"applicationTime":9,"atts":"QhEEQwJJGxk=","errorBeacon":"bam-cell.nr-data.net","agent":""}</script></body>
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1642099859 -->
