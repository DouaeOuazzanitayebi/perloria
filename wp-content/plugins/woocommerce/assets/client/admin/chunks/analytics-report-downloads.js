<<<<<<< HEAD
"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[4854],{97269:(e,r,t)=>{t.d(r,{O3:()=>l,be:()=>n,u8:()=>s});var o=t(65736),a=t(92694),c=t(3362);const l=(0,a.applyFilters)("woocommerce_admin_downloads_report_charts",[{key:"download_count",label:(0,o.__)("Downloads","woocommerce"),type:"number"}]),s=(0,a.applyFilters)("woocommerce_admin_downloads_report_filters",[{label:(0,o.__)("Show","woocommerce"),staticParams:["chartType","paged","per_page"],param:"filter",showFilters:()=>!0,filters:[{label:(0,o.__)("All downloads","woocommerce"),value:"all"},{label:(0,o.__)("Advanced filters","woocommerce"),value:"advanced"}]}]),n=(0,a.applyFilters)("woocommerce_admin_downloads_report_advanced_filters",{title:(0,o._x)("Downloads match <select/> filters","A sentence describing filters for Downloads. See screen shot for context: https://cloudup.com/ccxhyH2mEDg","woocommerce"),filters:{product:{labels:{add:(0,o.__)("Product","woocommerce"),placeholder:(0,o.__)("Search","woocommerce"),remove:(0,o.__)("Remove product filter","woocommerce"),rule:(0,o.__)("Select a product filter match","woocommerce"),title:(0,o.__)("<title>Product</title> <rule/> <filter/>","woocommerce"),filter:(0,o.__)("Select product","woocommerce")},rules:[{value:"includes",label:(0,o._x)("Includes","products","woocommerce")},{value:"excludes",label:(0,o._x)("Excludes","products","woocommerce")}],input:{component:"Search",type:"products",getLabels:c.oC}},customer:{labels:{add:(0,o.__)("Username","woocommerce"),placeholder:(0,o.__)("Search customer username","woocommerce"),remove:(0,o.__)("Remove customer username filter","woocommerce"),rule:(0,o.__)("Select a customer username filter match","woocommerce"),title:(0,o.__)("<title>Username</title> <rule/> <filter />","woocommerce"),filter:(0,o.__)("Select customer username","woocommerce")},rules:[{value:"includes",label:(0,o._x)("Includes","customer usernames","woocommerce")},{value:"excludes",label:(0,o._x)("Excludes","customer usernames","woocommerce")}],input:{component:"Search",type:"usernames",getLabels:c.jk}},order:{labels:{add:(0,o.__)("Order #","woocommerce"),placeholder:(0,o.__)("Search order number","woocommerce"),remove:(0,o.__)("Remove order number filter","woocommerce"),rule:(0,o.__)("Select an order number filter match","woocommerce"),title:(0,o.__)("<title>Order #</title> <rule/> <filter/>","woocommerce"),filter:(0,o.__)("Select order number","woocommerce")},rules:[{value:"includes",label:(0,o._x)("Includes","order numbers","woocommerce")},{value:"excludes",label:(0,o._x)("Excludes","order numbers","woocommerce")}],input:{component:"Search",type:"orders",getLabels:async e=>{const r=e.split(",");return await r.map((e=>({id:e,label:"#"+e})))}}},ip_address:{labels:{add:(0,o.__)("IP Address","woocommerce"),placeholder:(0,o.__)("Search IP address","woocommerce"),remove:(0,o.__)("Remove IP address filter","woocommerce"),rule:(0,o.__)("Select an IP address filter match","woocommerce"),title:(0,o.__)("<title>IP Address</title> <rule/> <filter/>","woocommerce"),filter:(0,o.__)("Select IP address","woocommerce")},rules:[{value:"includes",label:(0,o._x)("Includes","IP addresses","woocommerce")},{value:"excludes",label:(0,o._x)("Excludes","IP addresses","woocommerce")}],input:{component:"Search",type:"downloadIps",getLabels:async e=>{const r=e.split(",");return await r.map((e=>({id:e,label:e})))}}}}})},11353:(e,r,t)=>{t.r(r),t.d(r,{default:()=>k});var o=t(69307),a=t(69596),c=t.n(a),l=t(97269),s=t(65736),n=t(9818),m=t(92819),d=t(76292),i=t.n(d),u=t(86020),_=t(10431),p=t(81595),w=t(74617),b=t(67221),y=t(81921),h=t(17844),f=t(46613),g=t(88679);class v extends o.Component{constructor(){super(),this.getHeadersContent=this.getHeadersContent.bind(this),this.getRowsContent=this.getRowsContent.bind(this),this.getSummary=this.getSummary.bind(this)}getHeadersContent(){return[{label:(0,s.__)("Date","woocommerce"),key:"date",defaultSort:!0,required:!0,isLeftAligned:!0,isSortable:!0},{label:(0,s.__)("Product title","woocommerce"),key:"product",isSortable:!0,required:!0},{label:(0,s.__)("File name","woocommerce"),key:"file_name"},{label:(0,s.__)("Order #","woocommerce"),screenReaderLabel:(0,s.__)("Order Number","woocommerce"),key:"order_number"},{label:(0,s.__)("Username","woocommerce"),key:"user_id"},{label:(0,s.__)("IP","woocommerce"),key:"ip_address"}]}getRowsContent(e){const{query:r}=this.props,t=(0,_.getPersistedQuery)(r),a=(0,g.O3)("dateFormat",y.defaultTableDateFormat);return(0,m.map)(e,(e=>{const{_embedded:r,date:c,file_name:l,file_path:n,ip_address:m,order_id:d,order_number:i,product_id:p,username:b}=e,{code:y,name:h}=r.product[0];let f,g;if("woocommerce_rest_product_invalid_id"===y)f=(0,s.__)("(Deleted)","woocommerce"),g=(0,s.__)("(Deleted)","woocommerce");else{const e=(0,_.getNewPath)(t,"/analytics/products",{filter:"single_product",products:p});f=(0,o.createElement)(u.Link,{href:e,type:"wc-admin"},h),g=h}return[{display:(0,o.createElement)(u.Date,{date:c,visibleFormat:a}),value:c},{display:f,value:g},{display:(0,o.createElement)(u.Link,{href:n,type:"external"},l),value:l},{display:(0,o.createElement)(u.Link,{href:(0,w.getAdminLink)(`post.php?post=${d}&action=edit`),type:"wp-admin"},i),value:i},{display:b,value:b},{display:m,value:m}]}))}getSummary(e){const{download_count:r=0}=e,{query:t,defaultDateRange:o}=this.props,a=(0,y.getCurrentDates)(t,o),c=i()(a.primary.after),l=i()(a.primary.before).diff(c,"days")+1,n=this.context.getCurrencyConfig();return[{label:(0,s._n)("day","days",l,"woocommerce"),value:(0,p.formatValue)(n,"number",l)},{label:(0,s._n)("Download","Downloads",r,"woocommerce"),value:(0,p.formatValue)(n,"number",r)}]}render(){const{query:e,filters:r,advancedFilters:t}=this.props;return(0,o.createElement)(f.Z,{endpoint:"downloads",getHeadersContent:this.getHeadersContent,getRowsContent:this.getRowsContent,getSummary:this.getSummary,summaryFields:["download_count"],query:e,tableQuery:{_embed:!0},title:(0,s.__)("Downloads","woocommerce"),columnPrefsKey:"downloads_report_columns",filters:r,advancedFilters:t})}}v.contextType=h.CurrencyContext;const S=(0,n.withSelect)((e=>{const{woocommerce_default_date_range:r}=e(b.SETTINGS_STORE_NAME).getSetting("wc_admin","wcAdminSettings");return{defaultDateRange:r}}))(v);var C=t(58436),E=t(4320),A=t(41538),x=t(14243);class k extends o.Component{render(){const{query:e,path:r}=this.props;return(0,o.createElement)(o.Fragment,null,(0,o.createElement)(x.Z,{query:e,path:r,filters:l.u8,advancedFilters:l.be,report:"downloads"}),(0,o.createElement)(A.Z,{charts:l.O3,endpoint:"downloads",query:e,selectedChart:(0,C.Z)(e.chart,l.O3),filters:l.u8,advancedFilters:l.be}),(0,o.createElement)(E.Z,{charts:l.O3,endpoint:"downloads",path:r,query:e,selectedChart:(0,C.Z)(e.chart,l.O3),filters:l.u8,advancedFilters:l.be}),(0,o.createElement)(S,{query:e,filters:l.u8,advancedFilters:l.be}))}}k.propTypes={query:c().object.isRequired}},86169:(e,r,t)=>{t.d(r,{I:()=>a});var o=t(65736);function a(e){return[e.country,e.state,e.name||(0,o.__)("TAX","woocommerce"),e.priority].map((e=>e.toString().toUpperCase().trim())).filter(Boolean).join("-")}},3362:(e,r,t)=>{t.d(r,{FI:()=>y,V1:()=>h,YC:()=>_,hQ:()=>p,jk:()=>w,oC:()=>b,qc:()=>u,uC:()=>f});var o=t(65736),a=t(96483),c=t(86989),l=t.n(c),s=t(92819),n=t(10431),m=t(67221),d=t(86169),i=t(88679);function u(e,r=s.identity){return function(t="",o){const c="function"==typeof e?e(o):e,s=(0,n.getIdsFromQuery)(t);if(s.length<1)return Promise.resolve([]);const m={include:s.join(","),per_page:s.length};return l()({path:(0,a.addQueryArgs)(c,m)}).then((e=>e.map(r)))}}u(m.NAMESPACE+"/products/attributes",(e=>({key:e.id,label:e.name})));const _=u(m.NAMESPACE+"/products/categories",(e=>({key:e.id,label:e.name}))),p=u(m.NAMESPACE+"/coupons",(e=>({key:e.id,label:e.code}))),w=u(m.NAMESPACE+"/customers",(e=>({key:e.id,label:e.name}))),b=u(m.NAMESPACE+"/products",(e=>({key:e.id,label:e.name}))),y=u(m.NAMESPACE+"/taxes",(e=>({key:e.id,label:(0,d.I)(e)})));function h({attributes:e,name:r}){const t=(0,i.O3)("variationTitleAttributesSeparator"," - ");if(r&&r.indexOf(t)>-1)return r;const a=(e||[]).map((({name:e,option:r})=>(r||(e=e.charAt(0).toUpperCase()+e.slice(1),r=(0,o.sprintf)((0,o.__)("Any %s","woocommerce"),e)),r))).join(", ");return a?r+t+a:r}const f=u((({products:e})=>e?m.NAMESPACE+`/products/${e}/variations`:m.NAMESPACE+"/variations"),(e=>({key:e.id,label:h(e)})))}}]);
=======
"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[4854],{65925:(e,r,t)=>{t.d(r,{O3:()=>l,be:()=>n,u8:()=>s});var o=t(65736),a=t(92694),c=t(20513);const l=(0,a.applyFilters)("woocommerce_admin_downloads_report_charts",[{key:"download_count",label:(0,o.__)("Downloads","woocommerce"),type:"number"}]),s=(0,a.applyFilters)("woocommerce_admin_downloads_report_filters",[{label:(0,o.__)("Show","woocommerce"),staticParams:["chartType","paged","per_page"],param:"filter",showFilters:()=>!0,filters:[{label:(0,o.__)("All downloads","woocommerce"),value:"all"},{label:(0,o.__)("Advanced filters","woocommerce"),value:"advanced"}]}]),n=(0,a.applyFilters)("woocommerce_admin_downloads_report_advanced_filters",{title:(0,o._x)("Downloads match <select/> filters","A sentence describing filters for Downloads. See screen shot for context: https://cloudup.com/ccxhyH2mEDg","woocommerce"),filters:{product:{labels:{add:(0,o.__)("Product","woocommerce"),placeholder:(0,o.__)("Search","woocommerce"),remove:(0,o.__)("Remove product filter","woocommerce"),rule:(0,o.__)("Select a product filter match","woocommerce"),title:(0,o.__)("<title>Product</title> <rule/> <filter/>","woocommerce"),filter:(0,o.__)("Select product","woocommerce")},rules:[{value:"includes",label:(0,o._x)("Includes","products","woocommerce")},{value:"excludes",label:(0,o._x)("Excludes","products","woocommerce")}],input:{component:"Search",type:"products",getLabels:c.oC}},customer:{labels:{add:(0,o.__)("Username","woocommerce"),placeholder:(0,o.__)("Search customer username","woocommerce"),remove:(0,o.__)("Remove customer username filter","woocommerce"),rule:(0,o.__)("Select a customer username filter match","woocommerce"),title:(0,o.__)("<title>Username</title> <rule/> <filter />","woocommerce"),filter:(0,o.__)("Select customer username","woocommerce")},rules:[{value:"includes",label:(0,o._x)("Includes","customer usernames","woocommerce")},{value:"excludes",label:(0,o._x)("Excludes","customer usernames","woocommerce")}],input:{component:"Search",type:"usernames",getLabels:c.jk}},order:{labels:{add:(0,o.__)("Order #","woocommerce"),placeholder:(0,o.__)("Search order number","woocommerce"),remove:(0,o.__)("Remove order number filter","woocommerce"),rule:(0,o.__)("Select an order number filter match","woocommerce"),title:(0,o.__)("<title>Order #</title> <rule/> <filter/>","woocommerce"),filter:(0,o.__)("Select order number","woocommerce")},rules:[{value:"includes",label:(0,o._x)("Includes","order numbers","woocommerce")},{value:"excludes",label:(0,o._x)("Excludes","order numbers","woocommerce")}],input:{component:"Search",type:"orders",getLabels:async e=>{const r=e.split(",");return await r.map((e=>({id:e,label:"#"+e})))}}},ip_address:{labels:{add:(0,o.__)("IP Address","woocommerce"),placeholder:(0,o.__)("Search IP address","woocommerce"),remove:(0,o.__)("Remove IP address filter","woocommerce"),rule:(0,o.__)("Select an IP address filter match","woocommerce"),title:(0,o.__)("<title>IP Address</title> <rule/> <filter/>","woocommerce"),filter:(0,o.__)("Select IP address","woocommerce")},rules:[{value:"includes",label:(0,o._x)("Includes","IP addresses","woocommerce")},{value:"excludes",label:(0,o._x)("Excludes","IP addresses","woocommerce")}],input:{component:"Search",type:"downloadIps",getLabels:async e=>{const r=e.split(",");return await r.map((e=>({id:e,label:e})))}}}}})},49025:(e,r,t)=>{t.r(r),t.d(r,{default:()=>k});var o=t(69307),a=t(7862),c=t.n(a),l=t(65925),s=t(65736),n=t(9818),m=t(92819),d=t(76292),i=t.n(d),u=t(86020),_=t(10431),p=t(81595),w=t(74617),b=t(67221),y=t(81921),h=t(17844),f=t(42968),g=t(17062);class v extends o.Component{constructor(){super(),this.getHeadersContent=this.getHeadersContent.bind(this),this.getRowsContent=this.getRowsContent.bind(this),this.getSummary=this.getSummary.bind(this)}getHeadersContent(){return[{label:(0,s.__)("Date","woocommerce"),key:"date",defaultSort:!0,required:!0,isLeftAligned:!0,isSortable:!0},{label:(0,s.__)("Product title","woocommerce"),key:"product",isSortable:!0,required:!0},{label:(0,s.__)("File name","woocommerce"),key:"file_name"},{label:(0,s.__)("Order #","woocommerce"),screenReaderLabel:(0,s.__)("Order Number","woocommerce"),key:"order_number"},{label:(0,s.__)("Username","woocommerce"),key:"user_id"},{label:(0,s.__)("IP","woocommerce"),key:"ip_address"}]}getRowsContent(e){const{query:r}=this.props,t=(0,_.getPersistedQuery)(r),a=(0,g.O3)("dateFormat",y.defaultTableDateFormat);return(0,m.map)(e,(e=>{const{_embedded:r,date:c,file_name:l,file_path:n,ip_address:m,order_id:d,order_number:i,product_id:p,username:b}=e,{code:y,name:h}=r.product[0];let f,g;if("woocommerce_rest_product_invalid_id"===y)f=(0,s.__)("(Deleted)","woocommerce"),g=(0,s.__)("(Deleted)","woocommerce");else{const e=(0,_.getNewPath)(t,"/analytics/products",{filter:"single_product",products:p});f=(0,o.createElement)(u.Link,{href:e,type:"wc-admin"},h),g=h}return[{display:(0,o.createElement)(u.Date,{date:c,visibleFormat:a}),value:c},{display:f,value:g},{display:(0,o.createElement)(u.Link,{href:n,type:"external"},l),value:l},{display:(0,o.createElement)(u.Link,{href:(0,w.getAdminLink)(`post.php?post=${d}&action=edit`),type:"wp-admin"},i),value:i},{display:b,value:b},{display:m,value:m}]}))}getSummary(e){const{download_count:r=0}=e,{query:t,defaultDateRange:o}=this.props,a=(0,y.getCurrentDates)(t,o),c=i()(a.primary.after),l=i()(a.primary.before).diff(c,"days")+1,n=this.context.getCurrencyConfig();return[{label:(0,s._n)("day","days",l,"woocommerce"),value:(0,p.formatValue)(n,"number",l)},{label:(0,s._n)("Download","Downloads",r,"woocommerce"),value:(0,p.formatValue)(n,"number",r)}]}render(){const{query:e,filters:r,advancedFilters:t}=this.props;return(0,o.createElement)(f.Z,{endpoint:"downloads",getHeadersContent:this.getHeadersContent,getRowsContent:this.getRowsContent,getSummary:this.getSummary,summaryFields:["download_count"],query:e,tableQuery:{_embed:!0},title:(0,s.__)("Downloads","woocommerce"),columnPrefsKey:"downloads_report_columns",filters:r,advancedFilters:t})}}v.contextType=h.CurrencyContext;const S=(0,n.withSelect)((e=>{const{woocommerce_default_date_range:r}=e(b.SETTINGS_STORE_NAME).getSetting("wc_admin","wcAdminSettings");return{defaultDateRange:r}}))(v);var C=t(83573),E=t(47478),A=t(80272),x=t(31511);class k extends o.Component{render(){const{query:e,path:r}=this.props;return(0,o.createElement)(o.Fragment,null,(0,o.createElement)(x.Z,{query:e,path:r,filters:l.u8,advancedFilters:l.be,report:"downloads"}),(0,o.createElement)(A.Z,{charts:l.O3,endpoint:"downloads",query:e,selectedChart:(0,C.Z)(e.chart,l.O3),filters:l.u8,advancedFilters:l.be}),(0,o.createElement)(E.Z,{charts:l.O3,endpoint:"downloads",path:r,query:e,selectedChart:(0,C.Z)(e.chart,l.O3),filters:l.u8,advancedFilters:l.be}),(0,o.createElement)(S,{query:e,filters:l.u8,advancedFilters:l.be}))}}k.propTypes={query:c().object.isRequired}},86806:(e,r,t)=>{t.d(r,{I:()=>a});var o=t(65736);function a(e){return[e.country,e.state,e.name||(0,o.__)("TAX","woocommerce"),e.priority].map((e=>e.toString().toUpperCase().trim())).filter(Boolean).join("-")}},20513:(e,r,t)=>{t.d(r,{FI:()=>y,V1:()=>h,YC:()=>_,hQ:()=>p,jk:()=>w,oC:()=>b,qc:()=>u,uC:()=>f});var o=t(65736),a=t(96483),c=t(86989),l=t.n(c),s=t(92819),n=t(10431),m=t(67221),d=t(86806),i=t(17062);function u(e,r=s.identity){return function(t="",o){const c="function"==typeof e?e(o):e,s=(0,n.getIdsFromQuery)(t);if(s.length<1)return Promise.resolve([]);const m={include:s.join(","),per_page:s.length};return l()({path:(0,a.addQueryArgs)(c,m)}).then((e=>e.map(r)))}}u(m.NAMESPACE+"/products/attributes",(e=>({key:e.id,label:e.name})));const _=u(m.NAMESPACE+"/products/categories",(e=>({key:e.id,label:e.name}))),p=u(m.NAMESPACE+"/coupons",(e=>({key:e.id,label:e.code}))),w=u(m.NAMESPACE+"/customers",(e=>({key:e.id,label:e.name}))),b=u(m.NAMESPACE+"/products",(e=>({key:e.id,label:e.name}))),y=u(m.NAMESPACE+"/taxes",(e=>({key:e.id,label:(0,d.I)(e)})));function h({attributes:e,name:r}){const t=(0,i.O3)("variationTitleAttributesSeparator"," - ");if(r&&r.indexOf(t)>-1)return r;const a=(e||[]).map((({name:e,option:r})=>(r||(e=e.charAt(0).toUpperCase()+e.slice(1),r=(0,o.sprintf)((0,o.__)("Any %s","woocommerce"),e)),r))).join(", ");return a?r+t+a:r}const f=u((({products:e})=>e?m.NAMESPACE+`/products/${e}/variations`:m.NAMESPACE+"/variations"),(e=>({key:e.id,label:h(e)})))}}]);
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
