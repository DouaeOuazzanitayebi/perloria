<<<<<<< HEAD
var wc;(()=>{"use strict";var e={};(e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(e);const t=window.wc.__experimentalInteractivity,r="rating_filter";(0,t.store)("woocommerce/product-filter-rating",{actions:{toggleFilter:()=>{var e;const o=(0,t.getContext)("woocommerce/product-filters"),a=function(e){return e.params[r]?e.params[r].split(","):[]}(o),{ref:i}=(0,t.getElement)(),l=null!==(e=i.getAttribute("data-target-value"))&&void 0!==e?e:i.getAttribute("value"),c=a.includes(l)?[...a.filter((e=>e!==l))]:[...a,l];0!==c.length?o.params={...o.params,[r]:c.join(",")}:delete o.params[r]},clearFilters:()=>{const e=(0,t.getContext)("woocommerce/product-filters"),o=e.params;delete o[r],e.params={...o}}}}),(wc=void 0===wc?{}:wc)["product-filter-rating"]=e})();
=======
var wc;(()=>{"use strict";var e={7137:(e,t,o)=>{o.d(t,{navigate:()=>s});var r=o(3097);const n=window.wc.wcSettings,a=(0,n.getSetting)("isBlockTheme"),i=(0,n.getSetting)("isProductArchive"),c=(0,n.getSetting)("needsRefreshForInteractivityAPI",!1);function s(e,t={}){const o=new URL(e);return o.pathname=o.pathname.replace(/\/page\/[0-9]+/i,""),o.searchParams.delete("paged"),o.searchParams.forEach(((e,t)=>{t.match(/^query(?:-[0-9]+)?-page$/)&&o.searchParams.delete(t)})),e=o.href,c||!a&&i?window.location.href=e:(0,r.navigate)(e,t)}(0,r.store)("woocommerce/product-filters",{state:{isDialogOpen:()=>(0,r.getContext)().isDialogOpen},actions:{openDialog:()=>{const e=(0,r.getContext)();document.body.classList.add("wc-modal--open"),e.hasPageWithWordPressAdminBar=Boolean(document.getElementById("wpadminbar")),e.isDialogOpen=!0},closeDialog:()=>{const e=(0,r.getContext)();document.body.classList.remove("wc-modal--open"),e.isDialogOpen=!1}},callbacks:{maybeNavigate:()=>{const{params:e,originalParams:t}=(0,r.getContext)();if(function(e,t){const o=Object.keys(e),r=Object.keys(t);if(o.length!==r.length)return!1;for(const r of o)if(e[r]!==t[r])return!1;return!0}(e,t))return;const o=new URL(window.location.href),{searchParams:n}=o;for(const e in t)n.delete(e,t[e]);for(const t in e)n.set(t,e[t]);s(o.href)}}})},3097:e=>{e.exports=window.wc.__experimentalInteractivity}},t={};function o(r){var n=t[r];if(void 0!==n)return n.exports;var a=t[r]={exports:{}};return e[r](a,a.exports,o),a.exports}o.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return o.d(t,{a:t}),t},o.d=(e,t)=>{for(var r in t)o.o(t,r)&&!o.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),o.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var r={};(()=>{o.r(r);var e=o(3097),t=o(7137);function n(e){e=e.filter(Boolean);const t=new URL(window.location.href);return e.length?t.searchParams.set("rating_filter",e.join(",")):t.searchParams.delete("rating_filter"),t.href}(0,e.store)("woocommerce/product-filter-rating",{actions:{onCheckboxChange:()=>{const o=(0,e.getContext)("woocommerce/interactivity-checkbox-list").items.filter((e=>e.checked)).map((e=>e.value));(0,t.navigate)(n(o))},onDropdownChange:()=>{const o=((0,e.getContext)("woocommerce/interactivity-dropdown").selectedItems||[]).map((e=>e.value));(0,t.navigate)(n(o))},removeFilter:()=>{const{value:o}=(0,e.getContext)(),r=new URL(window.location.href).searchParams.get("rating_filter")||"",a=""===r?[]:r.split(","),i=a.indexOf(o);i>-1&&a.splice(i,1),(0,t.navigate)(n(a))}}})})(),(wc=void 0===wc?{}:wc)["product-filter-rating"]=r})();
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
