<<<<<<< HEAD
"use strict";(self.webpackChunkwebpackWcBlocksCartCheckoutFrontendJsonp=self.webpackChunkwebpackWcBlocksCartCheckoutFrontendJsonp||[]).push([[6945],{746:(e,t,o)=>{o.r(t),o.d(t,{default:()=>E});var s=o(1609),n=o(7723),c=o(6087),l=o(5738),a=o(6816),r=o(329),i=o(2663),p=o(8509),m=o(1e3),u=o(8531),d=o(5703),g=o(8460),h=o(2566),_=o(5683);const w=()=>{const{shippingRates:e,isLoadingRates:t,shippingAddress:o}=(0,p.V)(),l=(0,_.KY)(o,["state","country","postcode","city"]);return(0,s.createElement)("fieldset",{className:"wc-block-components-totals-shipping__fieldset"},(0,s.createElement)("legend",{className:"screen-reader-text"},(0,n.__)("Shipping options","woocommerce")),(0,s.createElement)(g.A,{className:"wc-block-components-totals-shipping__options",noResultsMessage:(0,s.createElement)(s.Fragment,null,l&&(0,s.createElement)(h.A,{isDismissible:!1,className:"wc-block-components-shipping-rates-control__no-results-notice",status:"warning"},(0,c.createInterpolateElement)((0,n.sprintf)(
// translators: %s is the address that was used to calculate shipping.
// translators: %s is the address that was used to calculate shipping.
(0,n.__)("No delivery options available for <strong>%s</strong>. Please verify the address is correct or try a different address.","woocommerce"),(0,_.i0)(o)),{strong:(0,s.createElement)("strong",null)}))),shippingRates:e,isLoadingRates:t,context:"woocommerce/cart"}))},E=({className:e})=>{const{isEditor:t}=(0,i.m)(),{cartNeedsShipping:o,shippingRates:g}=(0,p.V)(),[h,_]=(0,c.useState)(!1);if(!o)return null;if(t&&0===(0,u.T4)(g))return null;const E=(0,d.getSetting)("isShippingCalculatorEnabled",!0),k=(0,u.PU)(g);return(0,s.createElement)(m.TotalsWrapper,{className:e},(0,s.createElement)(r.S.Provider,{value:{showCalculator:E,shippingCalculatorID:"shipping-calculator-form-wrapper",isShippingCalculatorOpen:h,setIsShippingCalculatorOpen:_}},(0,s.createElement)(l.w7,{label:k?(0,n.__)("Collection","woocommerce"):(0,n.__)("Delivery","woocommerce"),placeholder:E?(0,s.createElement)(a.n6,{label:(0,n.__)("Enter address to check delivery options","woocommerce")}):(0,s.createElement)("span",{className:"wc-block-components-shipping-placeholder__value"},(0,n.__)("Calculated on checkout","woocommerce")),collaterals:(0,s.createElement)(s.Fragment,null,h&&(0,s.createElement)(a.rq,null),!h&&(0,s.createElement)(w,null),!E&&(0,u.$u)(g)&&(0,s.createElement)("div",{className:"wc-block-components-totals-shipping__delivery-options-notice"},(0,n.__)("Delivery options will be calculated during checkout","woocommerce")))})))}}}]);
=======
"use strict";(self.webpackChunkwebpackWcBlocksCartCheckoutFrontendJsonp=self.webpackChunkwebpackWcBlocksCartCheckoutFrontendJsonp||[]).push([[6945],{9962:(e,t,c)=>{c.r(t),c.d(t,{default:()=>h});var r=c(1609),s=c(8639),a=c(910),n=c(8509),l=c(2663),o=c(4656),u=c(5703),p=c(8531),i=c(7143);const h=({className:e})=>{const{cartTotals:t,cartNeedsShipping:c}=(0,n.V)(),{isEditor:h}=(0,l.m)();if(!c)return null;const k=(0,i.select)("wc/store/cart").getShippingRates();if(!(0,p.T4)(k)&&h)return null;const C=(0,a.getCurrencyFromPriceResponse)(t);return(0,r.createElement)(o.TotalsWrapper,{className:e},(0,r.createElement)(s.w7,{showCalculator:(0,u.getSetting)("isShippingCalculatorEnabled",!0),showRateSelector:!0,values:t,currency:C}))}}}]);
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
