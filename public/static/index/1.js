webpackJsonp([1],{jtiA:function(t,s,e){t.exports=e.p+"static/img/imgBg.d931f48.png"},nU8l:function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0});String;var i={data:function(){return{timer:null,flag:!1,hour:"00",minute:"00",second:"00"}},mounted:function(){var t=this,s=this;this.timer=setInterval(function(){1==s.flag&&(clearInterval(s.timer),t.$emit("refreshbizlines")),s.timeDown()},1e3)},props:{endTime:{type:String}},methods:{timeDown:function(){var t=this.formatDate(this.endTime),s=new Date,e=parseInt((t.getTime()-s.getTime())/1e3),i=this.formate(parseInt(e/3600)),a=this.formate(parseInt(e/60%60)),o=this.formate(parseInt(e%60));e<=0?(this.flag=!0,this.hour="00",this.minute="00",this.second="00"):(this.hour=i,this.minute=a,this.second=o)},formate:function(t){return t>=10?t:"0"+t},formatDate:function(t){var s=t.split(" "),e=s[0].split("-"),i=s[s.length-1].split(":"),a=new Date;return a.setUTCFullYear(e[0],e[1]-1,e[2]),a.setUTCHours(i[0]-8,i[1],i[2]),a}},beforeDestroy:function(){clearInterval(this.timer),this.timer=null}},a={render:function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.flag?e("section",[e("p",[t._v("暂无新口子")])]):e("section",{staticClass:"clearfix"},[e("p",{staticClass:"fl"},[t._v("距离上线")]),t._v(" "),e("div",{staticClass:"fl box"},[t._v(t._s(t.hour))]),t._v(" "),e("span",{staticClass:"fl"},[t._v(" :")]),t._v(" "),e("div",{staticClass:"fl box"},[t._v(t._s(t.minute))]),t._v(" "),e("span",{staticClass:"fl"},[t._v(" :")]),t._v(" "),e("div",{staticClass:"fl box"},[t._v(t._s(t.second))])])},staticRenderFns:[]};var o=e("VU/8")(i,a,!1,function(t){e("qVGf")},"data-v-38dab706",null).exports,n={name:"Home",data:function(){return{navList:[{name:"最近上线",tab:"lately"},{name:"今日上新",tab:"today"},{name:"明日预告",tab:"tomorrow"}],latelyRegion:!1,todayRegion:!0,tomorrowRegion:!1,navAcClass:"today",latelyList:[],todayList:[],todayEmptyList:[],tomorrowList:[],quota:[8,8,8,8],tipsShow:!1,quoNumber:null,isJump:!1,jumpUrl:"",titleName:""}},created:function(){this.quotaFn()},mounted:function(){var t=this;setInterval(function(){t.quotaFn()},this.randomFn(1,6e4,3e5)[0])},activated:function(){this.todayListFn(this.getDate(0),null),this.latelyListFn(this.getDate(3),this.getDate(0)),this.getTomorrow()},methods:{getRefre:function(){this.todayListFn(this.getDate(0),null)},getTomorrow:function(){var t=new Date;t.setTime(t.getTime()+864e5);var s=t.getFullYear(),e=t.getMonth()+1,i=t.getDate(),a=[10,14,16,20],o=[3e3,5e3,6e3,8888,800,1e4];this.tomorrowList=[];for(var n=0;n<4;n++)this.tomorrowList.push({field:a[n]+":00",time:s+"-"+e+"-"+i+" "+a[n]+":00:00",list:[{height:o[this.randomFn(1,0,5)[0]]},{height:o[this.randomFn(1,0,5)[0]]}]})},getEmptyList:function(t,s){var e=new Date;e.setTime(e.getTime());var i=e.getFullYear(),a=e.getMonth()+1,o=e.getDate(),n=[3e3,5e3,6e3,8888,800,1e4];this.todayEmptyList=[];for(var r=0;r<t;r++)this.todayEmptyList.push({field:s[r]+":00",time:i+"-"+a+"-"+o+" "+s[r]+":00:00",list:[{height:n[this.randomFn(1,0,5)[0]]},{height:n[this.randomFn(1,0,5)[0]]}]})},todayListFn:function(t,s){var e=this,i={startDate:t,endDate:s};this.$http.get("/pf/publish/platforms",{params:i}).then(function(t){if(0==t.data.resultCode){var s={};for(var i in t.data.platfomrs.forEach(function(t){s[e.filteHour(t.publishDate)]||(s[e.filteHour(t.publishDate)]=[]),s[e.filteHour(t.publishDate)]&&s[e.filteHour(t.publishDate)].push(t)}),e.todayList=[],s)e.todayList.push({time:i,show:!1,list:s[i]});e.todayList=e.todayList.sort(function(t,s){return parseInt(t.time)-parseInt(s.time)});var a=e.todayList.length;if(a>0){var o=(new Date).getHours();switch(!0){case 10<=o&&o<14:e.todayList[0].show=!0;break;case 14<=o&&o<16&&a>1:e.todayList[1].show=!0;break;case 16<=o&&o<20&&a>2:e.todayList[2].show=!0;break;case o>19&&a>3:e.todayList[3].show=!0}}switch(e.todayEmptyList=[],a){case 0:var n=[10,14,16,20];e.getEmptyList(4,n);break;case 1:n=[14,16,20];e.getEmptyList(3,n);break;case 2:n=[16,20];e.getEmptyList(2,n);break;case 3:n=[20];e.getEmptyList(1,n)}}else e.$vux.toast.text(t.data.resultCodeMessage,"middle")}).catch(function(t){console.log("Request failed: "+t)})},getDate:function(t){var s=(new Date).getTime(),e=new Date(s-24*t*3600*1e3),i=e.getFullYear(),a=e.getMonth()+1,o=e.getDate();return a<10&&(a="0"+a),o<10&&(o="0"+o),i+"-"+a+"-"+o},latelyListFn:function(t,s){var e=this,i={startDate:t,endDate:s};this.$http.get("/pf/publish/platforms",{params:i}).then(function(t){if(0==t.data.resultCode){var s={};for(var i in t.data.platfomrs.forEach(function(t){s[e.filteTime(t.publishDate)]||(s[e.filteTime(t.publishDate)]=[]),s[e.filteTime(t.publishDate)]&&s[e.filteTime(t.publishDate)].push(t)}),e.latelyList=[],s)e.latelyList.push({time:i,list:s[i]})}else e.$vux.toast.text(t.data.resultCodeMessage,"middle")}).catch(function(t){console.log("Request failed: "+t)})},filteTime:function(t){if(t){var s=new Date(t);return s.getFullYear()+"年"+(s.getMonth()+1)+"月"+s.getDate()+"日"}},filteHour:function(t){if(t){var s=Number(new Date(t).getHours());if(0<=s&&s<=13)return"10:00场";if(13<s&&s<=15)return"14:00场";if(15<s&&s<=19)return"16:00场";if(19<s)return"20:00场"}},toPlatform:function(t,s,e,i,a){this.$vux.loading.show({text:"Loading"}),this.titleName=a,this.jumpUrl=s.platform.url,this.isJump=!0,this.jbblogFn(s.platform.platformId,e,i,t+1)},lodingFn:function(){this.$vux.loading.hide()},quotaFn:function(){var t=new Date,s=t.getHours();switch(!0){case 10>s:this.quota=[8,8,8,8];break;case 10<=s&&s<12:this.quoNumber=8888-(13*s+t.getMinutes()),this.quota=this.quoNumber.toString().split("");break;case 12<=s&&s<14:this.quoNumber=8680-(60*s+t.getMinutes()),this.quota=this.quoNumber.toString().split("");break;case 14<=s&&s<16:this.quoNumber=7800-2*(11*s+t.getMinutes()),this.quota=this.quoNumber.toString().split("");break;case 16<=s&&s<18:this.quoNumber=7300-2*(13*s+t.getMinutes()),this.quota=this.quoNumber.toString().split("");break;case 18<=s&&s<20:case 18<=s&&s<20:this.quoNumber=6300-3*(13*s+t.getMinutes()),this.quota=this.quoNumber.toString().split("");break;case 20<=s&&s<22:this.quoNumber=5300-2*(13*s+t.getMinutes()),this.quota=this.quoNumber.toString().split("");break;case 22<=s:this.quoNumber=4620-2*(12*s+t.getMinutes()),this.quota=this.quoNumber.toString().split("")}},randomFn:function(t,s,e){for(var i=[],a={};i.length<t;){var o=Math.ceil(Math.random()*(e-s))+s;a[o]||(a[o]=1,i.push(o))}return i},navFn:function(t){switch(this.navAcClass=t,t){case"lately":this.latelyRegion=!0,this.todayRegion=!1,this.tomorrowRegion=!1;break;case"today":this.latelyRegion=!1,this.todayRegion=!0,this.tomorrowRegion=!1;break;case"tomorrow":this.latelyRegion=!1,this.todayRegion=!1,this.tomorrowRegion=!0}},toggle:function(t){t.show=!t.show},jbblogFn:function(t,s,e,i){var a=this,o={userId:this.$route.query.userId||null,cookieId:t,eventName:"daichao",eventLable:s,eventAction:null,eventValue:e,eventValue2:i};this.$http.post("/mgt/user/log",null,{params:o}).then(function(t){0==t.data.resultCode||a.$vux.toast.text(t.data.resultCodeMessage,"middle")}).catch(function(t){console.log("Request failed: "+t)})}},components:{countdown:o}},r={render:function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{staticClass:"newmouth"},[t.isJump?i("div",[i("div",{staticClass:"headertop"},[t.isJump?i("div",{staticClass:"back",on:{click:function(s){t.isJump=!1}}},[i("svg",{staticClass:"vux-x-icon vux-x-icon-ios-arrow-left",attrs:{type:"ios-arrow-left",size:"30",xmlns:"http://www.w3.org/2000/svg",width:"30",height:"30",viewBox:"0 0 512 512"}},[i("path",{attrs:{d:"M352 115.4L331.3 96 160 256l171.3 160 20.7-19.3L201.5 256z"}})])]):t._e(),t._v("\n      "+t._s(t.titleName)+"\n    ")])]):i("div",{staticClass:"sticky"},[i("header",[i("div",{staticClass:"top"},[t._v("\n        今日共8888个名额\n      ")]),t._v(" "),i("div",{staticClass:"information clearfix"},[i("p",{staticClass:"fl"},[t._v("剩余")]),t._v(" "),i("ul",{staticClass:"clearfix fl"},[i("li",[t._v("0")]),t._v(" "),t._l(t.quota,function(s){return i("li",[t._v(t._s(s))])})],2),t._v(" "),i("p",{staticClass:"fl"},[t._v("个")])])]),t._v(" "),i("nav",[i("ul",{staticClass:"clearfix nav"},t._l(t.navList,function(s,e){return i("li",{key:e,class:{ac:t.navAcClass==s.tab},on:{click:function(e){t.navFn(s.tab)}}},[t._v(t._s(s.name))])}))])]),t._v(" "),i("div",{directives:[{name:"show",rawName:"v-show",value:!t.isJump,expression:"!isJump"}],staticClass:"content"},[i("section",{directives:[{name:"show",rawName:"v-show",value:t.latelyRegion,expression:"latelyRegion"}]},t._l(t.latelyList,function(s){return i("ul",{staticClass:"latelyregion"},[i("li",{staticClass:"time"},[t._v(t._s(s.time))]),t._v(" "),t._l(s.list,function(e,a){return i("li",{staticClass:"clearfix list",on:{click:function(i){t.toPlatform(a,e,"最近上线",s.time,e.platform.name)}}},[i("img",{attrs:{src:e.platform.logo,alt:""}}),t._v(" "),i("div",{staticClass:"fl con"},[i("span",{staticClass:"til"},[t._v(t._s(e.platform.name))]),t._v(" "),i("p",[i("span",[t._v(t._s(e.platform.desc1))])])]),t._v(" "),i("div",{staticClass:"jump fr"},[i("svg",{staticClass:"vux-x-icon vux-x-icon-ios-arrow-right",attrs:{type:"ios-arrow-right",size:"26",xmlns:"http://www.w3.org/2000/svg",width:"26",height:"26",viewBox:"0 0 512 512"}},[i("path",{attrs:{d:"M160 115.4L180.7 96 352 256 180.7 416 160 396.7 310.5 256z"}})])]),t._v(" "),i("div",{staticClass:"fr quota"},[t._v("最高"+t._s(e.platform.maxAmount/100)+"元")])])})],2)})),t._v(" "),i("section",{directives:[{name:"show",rawName:"v-show",value:t.todayRegion,expression:"todayRegion"}]},[t._l(t.todayList,function(s){return i("div",{staticClass:"todayregion"},[i("div",{staticClass:"top clearfix",on:{click:function(e){t.toggle(s)}}},[i("p",{staticClass:"fl"},[t._v(t._s(s.time))]),t._v(" "),i("span",{staticClass:"fl"},[t._v("已上线"+t._s(s.list.length)+"家")]),t._v(" "),i("svg",{staticClass:"vux-x-icon vux-x-icon-ios-arrow-down fr",class:{ac:s.show},attrs:{type:"ios-arrow-down",size:"20",xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 512 512"}},[i("path",{attrs:{d:"M396.6 160l19.4 20.7L256 352 96 180.7l19.3-20.7L256 310.5z"}})]),t._v(" "),i("p",{staticClass:"fr blue"},[t._v(t._s(0==s.show?"点击展开":"点击收起"))])]),t._v(" "),i("ul",{directives:[{name:"show",rawName:"v-show",value:s.show,expression:"item.show"}],staticClass:"clearfix list"},t._l(s.list,function(e,a){return i("li",{staticClass:"clearfix",on:{click:function(i){t.toPlatform(a,e,"今日上线",s.time,e.platform.name)}}},[i("img",{attrs:{src:e.platform.logo,alt:""}}),t._v(" "),i("div",{staticClass:"fl"},[i("span",[t._v(t._s(e.platform.name))]),t._v(" "),i("p",[t._v("最高"+t._s(e.platform.maxAmount/100)+"元")])])])}))])}),t._v(" "),t._l(t.todayEmptyList,function(s){return i("div",{staticClass:"tomorrowregion"},[i("div",{staticClass:"top clearfix"},[i("p",{staticClass:"fl"},[t._v(t._s(s.field)+"场")]),t._v(" "),i("div",{staticClass:"timer fr clearfix"},[i("countdown",{attrs:{endTime:s.time},on:{refreshbizlines:t.getRefre}})],1)]),t._v(" "),i("ul",{staticClass:"clearfix list"},t._l(s.list,function(s){return i("li",{staticClass:"clearfix",on:{click:function(s){t.tipsShow=!0}}},[i("img",{attrs:{src:e("jtiA"),alt:""}}),t._v(" "),i("div",{staticClass:"fl"},[i("span",[t._v("****")]),t._v(" "),i("p",[t._v("最高"+t._s(s.height)+"元")])])])}))])})],2),t._v(" "),i("section",{directives:[{name:"show",rawName:"v-show",value:t.tomorrowRegion,expression:"tomorrowRegion"}]},t._l(t.tomorrowList,function(s){return i("div",{staticClass:"tomorrowregion"},[i("div",{staticClass:"top clearfix"},[i("p",{staticClass:"fl"},[t._v(t._s(s.field)+"场")]),t._v(" "),i("div",{staticClass:"timer fr clearfix"},[i("countdown",{attrs:{endTime:s.time}})],1)]),t._v(" "),i("ul",{staticClass:"clearfix list"},t._l(s.list,function(s){return i("li",{staticClass:"clearfix",on:{click:function(s){t.tipsShow=!0}}},[i("img",{attrs:{src:e("jtiA"),alt:""}}),t._v(" "),i("div",{staticClass:"fl"},[i("span",[t._v("****")]),t._v(" "),i("p",[t._v("最高"+t._s(s.height)+"元")])])])}))])}))]),t._v(" "),t.tipsShow?i("div",{staticClass:"tipsbox"},[i("div",{staticClass:"mask"}),t._v(" "),i("div",{staticClass:"box"},[i("p",[t._v("新口子还没有上线、请您耐心等待")]),t._v(" "),i("div",{staticClass:"btn",on:{click:function(s){t.tipsShow=!1}}},[t._v("确认")])])]):t._e(),t._v(" "),t.isJump?i("iframe",{attrs:{src:t.jumpUrl,frameborder:"0",scrolling:"no"},on:{load:t.lodingFn}}):t._e()])},staticRenderFns:[]},l=e("VU/8")(n,r,!1,null,null,null);s.default=l.exports},qVGf:function(t,s,e){var i=e("x+Qg");"string"==typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);e("rjj0")("4c3bee10",i,!0,{})},"x+Qg":function(t,s,e){(t.exports=e("FZ+f")(!1)).push([t.i,"\nsection .box[data-v-38dab706] {\n  width: 0.9rem;\n  height: 0.9rem;\n  background: #333;\n  color: #fff;\n  text-align: center;\n  line-height: 0.9rem;\n  border-radius: 2px;\n}\nsection span[data-v-38dab706] {\n  margin: 0 0.1rem !important;\n}\nsection p[data-v-38dab706] {\n  font-size: 0.5rem !important;\n  color: #999 !important;\n  margin-top: 0.1rem;\n  margin-right: 0.4rem;\n}\n",""])}});