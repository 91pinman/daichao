webpackJsonp([0],{"5wwz":function(n,e,t){var o=t("tVsC");"string"==typeof o&&(o=[[n.i,o,""]]),o.locals&&(n.exports=o.locals);t("rjj0")("7fdfb3e7",o,!0,{})},GEXf:function(n,e,t){(n.exports=t("FZ+f")(!1)).push([n.i,'\n.clearfix:after {\n  content: "";\n  display: block;\n  clear: both;\n}\n.clearfix {\n  zoom: 1;\n}\n.fl {\n  float: left;\n}\n.fr {\n  float: right;\n}\nul,\nli {\n  list-style: none;\n}\nbody {\n  -webkit-touch-callout: none;\n  /*系统默认菜单被禁用*/\n  -webkit-user-select: none;\n  /*webkit浏览器*/\n  /*早期浏览器*/\n  -moz-user-select: none;\n  /*火狐*/\n  -ms-user-select: none;\n  /*IE10*/\n  user-select: none;\n}\n@-webkit-keyframes fadeIn {\nfrom {\n    opacity: 0;\n}\nto {\n    opacity: 1;\n}\n}\n@keyframes fadeIn {\nfrom {\n    opacity: 0;\n}\nto {\n    opacity: 1;\n}\n}\n@-webkit-keyframes fadeInLeft {\nfrom {\n    opacity: 0;\n    -webkit-transform: translate3d(-100%, 0, 0);\n    transform: translate3d(-100%, 0, 0);\n}\nto {\n    opacity: 1;\n    -webkit-transform: none;\n    transform: none;\n}\n}\n@keyframes fadeInLeft {\nfrom {\n    opacity: 0;\n    -webkit-transform: translate3d(-100%, 0, 0);\n    transform: translate3d(-100%, 0, 0);\n}\nto {\n    opacity: 1;\n    -webkit-transform: none;\n    transform: none;\n}\n}\n@-webkit-keyframes zoomIn {\nfrom {\n    opacity: 0;\n    -webkit-transform: scale3d(0.3, 0.3, 0.3);\n    transform: scale3d(0.3, 0.3, 0.3);\n}\n50% {\n    opacity: 1;\n}\n}\n@keyframes zoomIn {\nfrom {\n    opacity: 0;\n    -webkit-transform: scale3d(0.3, 0.3, 0.3);\n    transform: scale3d(0.3, 0.3, 0.3);\n}\n50% {\n    opacity: 1;\n}\n}\n.newmouth {\n  width: 100%;\n  height: 100%;\n  -webkit-animation: fadeIn 1s;\n          animation: fadeIn 1s;\n}\n.newmouth .sticky {\n  position: fixed;\n  width: 100%;\n  left: 0;\n  top: 0;\n  z-index: 9999;\n}\n.newmouth header {\n  width: 100%;\n  background: linear-gradient(238deg, #24adff 0%, #2985ff 100%);\n  height: 4.6rem;\n}\n.newmouth header .top {\n  width: 100%;\n  text-align: center;\n  font-size: 0.65rem;\n  line-height: 1.8rem;\n  position: relative;\n  color: #fff;\n  padding-top: 0.5rem;\n  margin-bottom: 0.2rem;\n}\n.newmouth header .top .back {\n  position: absolute;\n  left: 0.4rem;\n  top: 0.5rem;\n  fill: #fff;\n}\n.newmouth header .information {\n  width: 100%;\n  padding-left: 2.9rem;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  text-align: center;\n}\n.newmouth header .information p {\n  font-size: 0.75rem;\n  color: #fff;\n  margin: 0.14rem 0.2rem 0 0.2rem;\n}\n.newmouth header .information ul li {\n  width: 1.2rem;\n  height: 1.45rem;\n  line-height: 1.5rem;\n  background: #fff;\n  border-radius: 2px;\n  margin: 0 0.1rem;\n  font-size: 1rem;\n  font-weight: bold;\n  float: left;\n}\n.newmouth header .information .remind {\n  width: 3rem;\n  height: 1.2rem;\n  border-radius: 20px;\n  line-height: 1.2rem;\n  font-size: 0.5rem;\n  background: #fff;\n  margin: 0.1rem 0 0 0.1rem;\n}\n.newmouth .headertop {\n  width: 100%;\n  height: 2rem;\n  background: linear-gradient(238deg, #24adff 0%, #2985ff 100%);\n  text-align: center;\n  font-size: 0.65rem;\n  line-height: 2.2rem;\n  color: #fff;\n  position: fixed;\n  left: 0;\n  top: 0;\n}\n.newmouth .headertop .back {\n  position: absolute;\n  left: 0.4rem;\n  top: 0.34rem;\n  fill: #fff;\n}\n.newmouth nav {\n  width: 100%;\n  border-bottom: 1px solid #eee;\n  background: #fff;\n}\n.newmouth nav .nav {\n  width: 100%;\n  height: 2.5rem;\n  padding: 0.46rem 0 0 0.5rem;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n}\n.newmouth nav .nav li {\n  width: 4rem;\n  height: 1.3rem;\n  text-align: center;\n  line-height: 1.35rem;\n  float: left;\n  margin: 0.2rem 0.5rem;\n  font-size: 0.65rem;\n  color: #666;\n}\n.newmouth nav .nav li.ac {\n  background: #47a3ff;\n  border-radius: 26px;\n  color: #fff;\n}\n.newmouth .content {\n  width: 100%;\n  padding-top: 7.2rem;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n}\n.newmouth .content section {\n  width: 100%;\n}\n.newmouth .content section .latelyregion {\n  -webkit-animation: fadeIn 1s;\n          animation: fadeIn 1s;\n  width: 100%;\n}\n.newmouth .content section .latelyregion li {\n  width: 100%;\n  padding: 0 0.5rem;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n}\n.newmouth .content section .latelyregion li.time {\n  height: 1.5rem;\n  line-height: 1.5rem;\n  font-size: 0.5rem;\n  color: #999;\n}\n.newmouth .content section .latelyregion li.list {\n  height: 3.8rem;\n  border-bottom: 1px solid #eee;\n  padding: 0.75rem 0.35rem 0 0.5rem;\n  background: #fff;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n}\n.newmouth .content section .latelyregion li.list img {\n  float: left;\n  width: 2.25rem;\n  height: 2.25rem;\n  border-radius: 50%;\n  margin-right: 0.5rem;\n}\n.newmouth .content section .latelyregion li.list .con {\n  font-size: 0.5rem;\n  color: #666;\n  padding-top: 0.2rem;\n}\n.newmouth .content section .latelyregion li.list .con p {\n  padding-top: 0.1rem;\n  width: 7rem;\n  white-space: nowrap;\n  overflow: hidden;\n  text-overflow: ellipsis;\n}\n.newmouth .content section .latelyregion li.list .con .til {\n  font-size: 0.65rem;\n  color: #333;\n}\n.newmouth .content section .latelyregion li.list .quota {\n  font-size: 0.6rem;\n  color: #ff5050;\n  margin-top: 0.92rem;\n}\n.newmouth .content section .latelyregion li.list .jump {\n  margin-top: 0.8rem;\n  fill: #ccc;\n}\n.newmouth .content section .todayregion {\n  width: 100%;\n  font-size: 0.65rem;\n  -webkit-animation: fadeIn 1s;\n          animation: fadeIn 1s;\n  background: #fff;\n  margin-bottom: 0.5rem;\n}\n.newmouth .content section .todayregion .top {\n  padding: 0.55rem 0.5rem 0;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  border-bottom: 1px solid #eee;\n  fill: #ccc;\n  height: 2rem;\n}\n.newmouth .content section .todayregion .top span {\n  color: #666;\n  margin-left: 0.4rem;\n}\n.newmouth .content section .todayregion .top .blue {\n  color: #47a3ff;\n  font-size: 0.55rem;\n}\n.newmouth .content section .todayregion .top svg.ac {\n  -webkit-transition: -webkit-transform 0.5s;\n  transition: -webkit-transform 0.5s;\n  transition: transform 0.5s;\n  transition: transform 0.5s, -webkit-transform 0.5s;\n  -webkit-transform: rotate(-180deg);\n          transform: rotate(-180deg);\n}\n.newmouth .content section .todayregion .list {\n  width: 100%;\n  -webkit-animation: fadeInLeft 0.5s;\n          animation: fadeInLeft 0.5s;\n  border-bottom: 1px solid #eee;\n}\n.newmouth .content section .todayregion .list li {\n  float: left;\n  width: 50%;\n  height: 3.8rem;\n  padding: 0.73rem 0 0.3rem 0.5rem;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  border-bottom: 1px solid #eee;\n}\n.newmouth .content section .todayregion .list li img {\n  float: left;\n  width: 2.25rem;\n  height: 2.25rem;\n  border-radius: 50%;\n  margin-right: 0.45rem;\n}\n.newmouth .content section .todayregion .list li div {\n  padding-top: 0.14rem;\n}\n.newmouth .content section .todayregion .list li span {\n  font-size: 0.7rem;\n}\n.newmouth .content section .todayregion .list li p {\n  color: #ff5050;\n}\n.newmouth .content section .todayregion .list li:nth-of-type(odd) {\n  border-right: 1px solid #eee;\n}\n.newmouth .content section .todayregion .list li:last-child {\n  border-bottom: none;\n}\n.newmouth .content section .tomorrowregion {\n  width: 100%;\n  font-size: 0.5rem;\n  -webkit-animation: fadeIn 1s;\n          animation: fadeIn 1s;\n  background: #fff;\n  margin-bottom: 0.5rem;\n}\n.newmouth .content section .tomorrowregion .top {\n  height: 2rem;\n  padding: 0.55rem 0.5rem 0 0.5rem;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  border-bottom: 1px solid #eee;\n}\n.newmouth .content section .tomorrowregion .top p {\n  font-size: 0.65rem;\n  color: #333;\n}\n.newmouth .content section .tomorrowregion .top span {\n  margin: 0.1rem 0.3rem 0 0;\n  color: #999;\n}\n.newmouth .content section .tomorrowregion .list {\n  width: 100%;\n}\n.newmouth .content section .tomorrowregion .list li {\n  float: left;\n  width: 50%;\n  height: 3.8rem;\n  padding: 0.73rem 0 0.3rem 0.5rem;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  border-bottom: 1px solid #eee;\n}\n.newmouth .content section .tomorrowregion .list li img {\n  float: left;\n  width: 2.25rem;\n  height: 2.25rem;\n  border-radius: 50%;\n  margin-right: 0.6rem;\n}\n.newmouth .content section .tomorrowregion .list li div {\n  padding-top: 0.2rem;\n  font-size: 0.65rem;\n}\n.newmouth .content section .tomorrowregion .list li p {\n  color: #ff5050;\n}\n.newmouth .content section .tomorrowregion .list li:nth-of-type(odd) {\n  border-right: 1px solid #eee;\n}\n.newmouth .tipsbox {\n  width: 100%;\n  height: 100%;\n}\n.newmouth .tipsbox .mask {\n  width: 100%;\n  height: 100%;\n  background: #000;\n  opacity: 0.5;\n  position: fixed;\n  left: 0;\n  top: 0;\n  z-index: 9999;\n}\n.newmouth .tipsbox .box {\n  width: 12rem;\n  height: 6.6rem;\n  background: #fff;\n  border-radius: 6px;\n  position: fixed;\n  left: 2.1rem;\n  top: 30%;\n  z-index: 10000;\n  text-align: center;\n  -webkit-animation: zoomIn 0.4s;\n          animation: zoomIn 0.4s;\n}\n.newmouth .tipsbox .box p {\n  font-size: 0.8rem;\n  width: 8rem;\n  margin: 1rem auto;\n}\n.newmouth .tipsbox .box .btn {\n  width: 100%;\n  font-size: 0.8rem;\n  line-height: 2rem;\n  color: #47a3ff;\n  border-top: 1px solid #eee;\n}\n.newmouth iframe {\n  height: 120%;\n  width: 100%;\n  padding-top: 2rem;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n}\n',""])},"Lwg/":function(n,e,t){var o=t("GEXf");"string"==typeof o&&(o=[[n.i,o,""]]),o.locals&&(n.exports=o.locals);t("rjj0")("9d34e17e",o,!0,{})},UCcx:function(n,e,t){var o=t("d1ID");"string"==typeof o&&(o=[[n.i,o,""]]),o.locals&&(n.exports=o.locals);t("rjj0")("5ad473dc",o,!0,{})},d1ID:function(n,e,t){(n.exports=t("FZ+f")(!1)).push([n.i,'/**\n* actionsheet\n*/\n/**\n* en: primary type text color of menu item\n* zh-CN: 菜单项primary类型的文本颜色\n*/\n/**\n* en: warn type text color of menu item\n* zh-CN: 菜单项warn类型的文本颜色\n*/\n/**\n* en: default type text color of menu item\n* zh-CN: 菜单项default类型的文本颜色\n*/\n/**\n* en: disabled type text color of menu item\n* zh-CN: 菜单项disabled类型的文本颜色\n*/\n/**\n* datetime\n*/\n/**\n* tabbar\n*/\n/**\n* tab\n*/\n/**\n* dialog\n*/\n/**\n* en: title and content\'s padding-left and padding-right\n* zh-CN: 标题及内容区域的 padding-left 和 padding-right\n*/\n/**\n* x-number\n*/\n/**\n* checkbox\n*/\n/**\n* check-icon\n*/\n/**\n* Cell\n*/\n/**\n* Mask\n*/\n/**\n* Range\n*/\n/**\n* Tabbar\n*/\n/**\n* Header\n*/\n/**\n* Timeline\n*/\n/**\n* Switch\n*/\n/**\n* Button\n*/\n/**\n* en: border radius\n* zh-CN: 圆角边框\n*/\n/**\n* en: font color\n* zh-CN: 字体颜色\n*/\n/**\n* en: margin-top value between previous button, not works when there is only one button\n* zh-CN: 与相邻按钮的 margin-top 间隙，只有一个按钮时不生效\n*/\n/**\n* en: button height\n* zh-CN: 按钮高度\n*/\n/**\n* en: the font color in disabled\n* zh-CN: disabled状态下的字体颜色\n*/\n/**\n* en: the font color in disabled\n* zh-CN: disabled状态下的字体颜色\n*/\n/**\n* en: font size\n* zh-CN: 字体大小\n*/\n/**\n* en: the font size of the mini type\n* zh-CN: mini类型的字体大小\n*/\n/**\n* en: the line height of the mini type\n* zh-CN: mini类型的行高\n*/\n/**\n* en: the background color of the warn type\n* zh-CN: warn类型的背景颜色\n*/\n/**\n* en: the background color of the warn type in active\n* zh-CN: active状态下，warn类型的背景颜色\n*/\n/**\n* en: the background color of the warn type in disabled\n* zh-CN: disabled状态下，warn类型的背景颜色\n*/\n/**\n* en: the background color of the default type\n* zh-CN: default类型的背景颜色\n*/\n/**\n* en: the font color of the default type\n* zh-CN: default类型的字体颜色\n*/\n/**\n* en: the background color of the default type in active\n* zh-CN: active状态下，default类型的背景颜色\n*/\n/**\n* en: the font color of the default type in disabled\n* zh-CN: disabled状态下，default类型的字体颜色\n*/\n/**\n* en: the background color of the default type in disabled\n* zh-CN: disabled状态下，default类型的背景颜色\n*/\n/**\n* en: the font color of the default type in active\n* zh-CN: active状态下，default类型的字体颜色\n*/\n/**\n* en: the background color of the primary type\n* zh-CN: primary类型的背景颜色\n*/\n/**\n* en: the background color of the primary type in active\n* zh-CN: active状态下，primary类型的背景颜色\n*/\n/**\n* en: the background color of the primary type in disabled\n* zh-CN: disabled状态下，primary类型的背景颜色\n*/\n/**\n* en: the font color of the plain primary type\n* zh-CN: plain的primary类型的字体颜色\n*/\n/**\n* en: the border color of the plain primary type\n* zh-CN: plain的primary类型的边框颜色\n*/\n/**\n* en: the font color of the plain primary type in active\n* zh-CN: active状态下，plain的primary类型的字体颜色\n*/\n/**\n* en: the border color of the plain primary type in active\n* zh-CN: active状态下，plain的primary类型的边框颜色\n*/\n/**\n* en: the font color of the plain default type\n* zh-CN: plain的default类型的字体颜色\n*/\n/**\n* en: the border color of the plain default type\n* zh-CN: plain的default类型的边框颜色\n*/\n/**\n* en: the font color of the plain default type in active\n* zh-CN: active状态下，plain的default类型的字体颜色\n*/\n/**\n* en: the border color of the plain default type in active\n* zh-CN: active状态下，plain的default类型的边框颜色\n*/\n/**\n* en: the font color of the plain warn type\n* zh-CN: plain的warn类型的字体颜色\n*/\n/**\n* en: the border color of the plain warn type\n* zh-CN: plain的warn类型的边框颜色\n*/\n/**\n* en: the font color of the plain warn type in active\n* zh-CN: active状态下，plain的warn类型的字体颜色\n*/\n/**\n* en: the border color of the plain warn type in active\n* zh-CN: active状态下，plain的warn类型的边框颜色\n*/\n/**\n* swipeout\n*/\n/**\n* Cell\n*/\n/**\n* Badge\n*/\n/**\n* en: badge background color\n* zh-CN: badge的背景颜色\n*/\n/**\n* Popover\n*/\n/**\n* Button tab\n*/\n/**\n* en: not used\n* zh-CN: 未被使用\n*/\n/**\n* en: border radius color\n* zh-CN: 圆角边框的半径\n*/\n/**\n* en: border color\n* zh-CN: 边框的颜色\n*/\n/**\n* en: not used\n* zh-CN: 默认状态下圆角边框的颜色\n*/\n/**\n* en: not used\n* zh-CN: 未被使用\n*/\n/**\n* en: default background color\n* zh-CN: 默认状态下的背景颜色\n*/\n/**\n* en: selected background color\n* zh-CN: 选中状态下的背景颜色\n*/\n/**\n* en: not used\n* zh-CN: 未被使用\n*/\n/* alias */\n/**\n* en: not used\n* zh-CN: 未被使用\n*/\n/**\n* en: default text color\n* zh-CN: 默认状态下的文本颜色\n*/\n/**\n* en: height\n* zh-CN: 元素高度\n*/\n/**\n* en: line height\n* zh-CN: 元素行高\n*/\n/**\n* Swiper\n*/\n/**\n* checklist\n*/\n/**\n* popup-picker\n*/\n/**\n* popup\n*/\n/**\n* popup-header\n*/\n/**\n* form-preview\n*/\n/**\n* sticky\n*/\n/**\n* group\n*/\n/**\n* en: margin-top of title\n* zh-CN: 标题的margin-top\n*/\n/**\n* en: margin-bottom of title\n* zh-CN: 标题的margin-bottom\n*/\n/**\n* en: margin-top of footer title\n* zh-CN: 底部标题的margin-top\n*/\n/**\n* en: margin-bottom of footer title\n* zh-CN: 底部标题的margin-bottom\n*/\n/**\n* toast\n*/\n/**\n* en: text color of content\n* zh-CN: 内容文本颜色\n*/\n/**\n* en: default top\n* zh-CN: 默认状态下距离顶部的高度\n*/\n/**\n* en: position top\n* zh-CN: 顶部显示的高度\n*/\n/**\n* en: position bottom\n* zh-CN: 底部显示的高度\n*/\n/**\n* en: z-index\n* zh-CN: z-index\n*/\n/**\n* icon\n*/\n/**\n* calendar\n*/\n/**\n* en: forward and backward arrows color\n* zh-CN: 前进后退的箭头颜色\n*/\n/**\n* en: text color of week highlight\n* zh-CN: 周末高亮的文本颜色\n*/\n/**\n* en: background color when selected\n* zh-CN: 选中时的背景颜色\n*/\n/**\n* en: text color when disabled\n* zh-CN: 禁用时的文本颜色\n*/\n/**\n* en: text color of today\n* zh-CN: 今天的文本颜色\n*/\n/**\n* en: font size of cell\n* zh-CN: 单元格的字号\n*/\n/**\n* en: background color\n* zh-CN: 背景颜色\n*/\n/**\n* en: size of date cell\n* zh-CN: 日期单元格尺寸大小\n*/\n/**\n* en: line height of date cell\n* zh-CN: 日期单元格的行高\n*/\n/**\n* en: text color of header\n* zh-CN: 头部的文本颜色\n*/\n/**\n* week-calendar\n*/\n/**\n* search\n*/\n/**\n* en: text color of cancel button\n* zh-CN: 取消按钮文本颜色\n*/\n/**\n* en: background color\n* zh-CN: 背景颜色\n*/\n/**\n* en: text color of placeholder\n* zh-CN: placeholder文本颜色\n*/\n/**\n* radio\n*/\n/**\n* en: checked icon color\n* zh-CN: 选中状态的图标颜色\n*/\n/**\n* loadmore\n*/\n/**\n* en: not used\n* zh-CN: 未被使用\n*/\n/**\n* loading\n*/\n/**\n* en: z-index\n* zh-CN: z-index\n*/\n.weui-tabbar {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  position: absolute;\n  z-index: 500;\n  bottom: 0;\n  width: 100%;\n  background-color: #F7F7FA;\n}\n.weui-tabbar:before {\n  content: " ";\n  position: absolute;\n  left: 0;\n  top: 0;\n  right: 0;\n  height: 1px;\n  border-top: 1px solid #C0BFC4;\n  color: #C0BFC4;\n  -webkit-transform-origin: 0 0;\n          transform-origin: 0 0;\n  -webkit-transform: scaleY(0.5);\n          transform: scaleY(0.5);\n}\n.weui-tabbar__item {\n  display: block;\n  -webkit-box-flex: 1;\n      -ms-flex: 1;\n          flex: 1;\n  padding: 5px 0 0;\n  font-size: 0;\n  color: #999999;\n  text-align: center;\n  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\n}\n.weui-tabbar__item.weui-bar__item_on .weui-tabbar__icon,\n.weui-tabbar__item.weui-bar__item_on .weui-tabbar__icon > i,\n.weui-tabbar__item.weui-bar__item_on .weui-tabbar__label {\n  color: #09BB07;\n}\n.weui-tabbar__icon {\n  display: inline-block;\n  width: 27px;\n  height: 27px;\n}\ni.weui-tabbar__icon,\n.weui-tabbar__icon > i {\n  font-size: 24px;\n  color: #999999;\n}\n.weui-tabbar__icon img {\n  width: 100%;\n  height: 100%;\n}\n.weui-tabbar__label {\n  text-align: center;\n  color: #999999;\n  font-size: 10px;\n  line-height: 1.8;\n}\n.weui-tab {\n  position: relative;\n  height: 100%;\n}\n.weui-tab__panel {\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  height: 100%;\n  padding-bottom: 50px;\n  overflow: auto;\n  -webkit-overflow-scrolling: touch;\n}\n.weui-tab__content {\n  display: none;\n}\n',""])},riqu:function(n,e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o={render:function(){var n=this.$createElement,e=this._self._c||n;return e("div",{staticClass:"weui-tab"},[this._t("header"),this._v(" "),e("div",{ref:"viewBoxBody",staticClass:"weui-tab__panel vux-fix-safari-overflow-scrolling",style:{paddingTop:this.bodyPaddingTop,paddingBottom:this.bodyPaddingBottom},attrs:{id:"vux_view_box_body"}},[this._t("default")],2),this._v(" "),this._t("bottom")],2)},staticRenderFns:[]};var i=t("VU/8")({name:"view-box",props:["bodyPaddingTop","bodyPaddingBottom"],methods:{scrollTo:function(n){this.$refs.viewBoxBody.scrollTop=n},getScrollTop:function(){return this.$refs.viewBoxBody.scrollTop},getScrollBody:function(){return this.$refs.viewBoxBody}}},o,!1,function(n){t("UCcx")},null,null).exports,r={name:"page",data:function(){return{}},created:function(){},computed:{},methods:{},components:{ViewBox:i}},a={render:function(){var n=this.$createElement,e=this._self._c||n;return e("div",{staticClass:"page-view"},[e("view-box",{ref:"viewBox",attrs:{"body-padding-bottom":0}},[e("keep-alive",[e("router-view",{staticClass:"router-view"})],1)],1)],1)},staticRenderFns:[]};var l=t("VU/8")(r,a,!1,function(n){t("5wwz"),t("Lwg/")},"data-v-63be5a1c",null);e.default=l.exports},tVsC:function(n,e,t){(n.exports=t("FZ+f")(!1)).push([n.i,"\n.page-view[data-v-63be5a1c] {\n  height: 100%;\n  width: 100%;\n  background: #f5f5f5;\n}\n",""])}});