webpackJsonp([4],{Bfwr:function(t,e,n){"use strict";Boolean,String,String,String;var i={name:"loading",model:{prop:"show",event:"change"},props:{show:Boolean,text:String,position:String,transition:{type:String,default:"vux-mask"}},watch:{show:function(t){this.$emit("update:show",t)}}},o={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("transition",{attrs:{name:t.transition}},[n("div",{directives:[{name:"show",rawName:"v-show",value:t.show,expression:"show"}],staticClass:"weui-loading_toast vux-loading",class:t.text?"":"vux-loading-no-text"},[n("div",{staticClass:"weui-mask_transparent"}),t._v(" "),n("div",{staticClass:"weui-toast",style:{position:t.position}},[n("i",{staticClass:"weui-loading weui-icon_toast"}),t._v(" "),t.text?n("p",{staticClass:"weui-toast__content"},[t._v(t._s(t.text||"加载中")),t._t("default")],2):t._e()])])])},staticRenderFns:[]};var s=n("VU/8")(i,o,!1,function(t){n("weaB")},null,null);e.a=s.exports},NHnr:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=n("7+uW"),o=n("Bfwr"),s=n("63CM"),a=(s.a,o.a,s.a,{name:"app",data:function(){return{isLoading:!0}},directives:{TransferDom:s.a},computed:{},mounted:function(){var t=this;setTimeout(function(){t.isLoading=!1},300)},components:{Loading:o.a,TransferDom:s.a}}),r={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{attrs:{id:"app"}},[n("div",{directives:[{name:"transfer-dom",rawName:"v-transfer-dom"}]},[n("loading",{model:{value:t.isLoading,callback:function(e){t.isLoading=e},expression:"isLoading"}})],1),t._v(" "),n("keep-alive",[n("router-view")],1)],1)},staticRenderFns:[]};var u=n("VU/8")(a,r,!1,function(t){n("k8eZ")},null,null).exports,c=n("/ocq"),l=function(t){return n.e(2).then(function(){return t(n("cxtQ"))}.bind(null,n)).catch(n.oe)};i.a.use(c.a);var p=[{path:"/",redirect:"/home"},{path:"/",component:function(t){return n.e(0).then(function(){return t(n("riqu"))}.bind(null,n)).catch(n.oe)},children:[{path:"",redirect:"/home"},{path:"home",name:"home",meta:{title:"最新口子"},component:function(t){return n.e(1).then(function(){return t(n("nU8l"))}.bind(null,n)).catch(n.oe)}},{path:"404",name:"404",meta:{title:"页面未找到"},component:l}]},{path:"*",component:l}],d=new c.a({mode:"history",routes:p}),h=n("//Fk"),m=n.n(h),f=n("mtWM"),v=n.n(f).a.create({baseURL:"https://api.jiebangbang.cn/manager",headers:{"Content-Type":"application/json"}});v.interceptors.request.use(function(t){return t},function(t){return m.a.reject(t)}),v.interceptors.response.use(function(t){return t},function(t){return m.a.reject(t)});var w={install:function(t,e){Object.defineProperty(t.prototype,"$http",{value:v})}},x=n("y5uh"),g=n.n(x),_=(n("j1ja"),n("3BeM")),y=n("Y+qm");i.a.use(_.a),i.a.use(y.a),i.a.use(w),i.a.config.productionTip=!1,n("v5o6").attach(document.body),i.a.use(g.a),d.afterEach(function(t,e,n){setTimeout(function(){document.getElementById("vux_view_box_body").scrollTop=0},30)}),new i.a({el:"#app",router:d,template:"<App/>",components:{App:u}})},"Wd+g":function(t,e){},k8eZ:function(t,e){},rLAy:function(t,e,n){"use strict";var i=n("xNvf"),o=(i.a,Boolean,Number,String,String,String,Boolean,String,String,{name:"toast",mixins:[i.a],props:{value:Boolean,time:{type:Number,default:2e3},type:{type:String,default:"success"},transition:String,width:{type:String,default:"7.6em"},isShowMask:{type:Boolean,default:!1},text:String,position:String},data:function(){return{show:!1}},created:function(){this.value&&(this.show=!0)},computed:{currentTransition:function(){return this.transition?this.transition:"top"===this.position?"vux-slide-from-top":"bottom"===this.position?"vux-slide-from-bottom":"vux-fade"},toastClass:function(){return{"weui-toast_forbidden":"warn"===this.type,"weui-toast_cancel":"cancel"===this.type,"weui-toast_success":"success"===this.type,"weui-toast_text":"text"===this.type,"vux-toast-top":"top"===this.position,"vux-toast-bottom":"bottom"===this.position,"vux-toast-middle":"middle"===this.position}},style:function(){if("text"===this.type&&"auto"===this.width)return{padding:"10px"}}},watch:{show:function(t){var e=this;t&&(this.$emit("input",!0),this.$emit("on-show"),this.fixSafariOverflowScrolling("auto"),clearTimeout(this.timeout),this.timeout=setTimeout(function(){e.show=!1,e.$emit("input",!1),e.$emit("on-hide"),e.fixSafariOverflowScrolling("touch")},this.time))},value:function(t){this.show=t}}}),s={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"vux-toast"},[n("div",{directives:[{name:"show",rawName:"v-show",value:t.isShowMask&&t.show,expression:"isShowMask && show"}],staticClass:"weui-mask_transparent"}),t._v(" "),n("transition",{attrs:{name:t.currentTransition}},[n("div",{directives:[{name:"show",rawName:"v-show",value:t.show,expression:"show"}],staticClass:"weui-toast",class:t.toastClass,style:{width:t.width}},[n("i",{directives:[{name:"show",rawName:"v-show",value:"text"!==t.type,expression:"type !== 'text'"}],staticClass:"weui-icon-success-no-circle weui-icon_toast"}),t._v(" "),t.text?n("p",{staticClass:"weui-toast__content",style:t.style,domProps:{innerHTML:t._s(t.text)}}):n("p",{staticClass:"weui-toast__content",style:t.style},[t._t("default")],2)])])],1)},staticRenderFns:[]};var a=n("VU/8")(o,s,!1,function(t){n("Wd+g")},null,null);e.a=a.exports},weaB:function(t,e){},y5uh:function(t,e){var n;(n=document.documentElement).style.fontSize=20*n.clientWidth/320+"px",window.onresize=function(){n.style.fontSize=20*n.clientWidth/320+"px"}}},["NHnr"]);