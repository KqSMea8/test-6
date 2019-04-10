webpackJsonp([1,15,17,18,19,20,21],{"2owH":function(e,t,a){"use strict";var s,o,i,r,n,l,c,_;Object.defineProperty(t,"__esModule",{value:!0}),s=a("woOf"),o=a.n(s),i=a("Y81h"),r=a.n(i),n=a("V/8j"),l={components:{},data:function(){return{loading:!1,labelWidth:"0px",form:{mail_driver:"",mail_smtp_host:"",mail_smtp_port:"",mail_smtp_username:"",mail_smtp_password:"",mail_smtp_from_address:"",mail_smtp_from_name:"",mail_smtp_encryption:"",sendcloud_user:"",sendcloud_key:"",mail_send_order:0},formRules:{},testEmail:"",sending:!1}},watch:{loading:function(e,t){e?t||r.a.isStarted()||r.a.start():r.a.done()}},mounted:function(){this.getSet(),this.testEmail=this.$store.state.user.userInfo.email},methods:{getSet:function(){var e=this;this.loading=!0,Object(n.a)().then(function(t){o()(e.form,t.data),e.loading=!1})},handleResetForm:function(){this.getSet()},handleSubmit:function(){var e=this;this.$refs.form.validate(function(t){t&&(e.loading=!0,Object(n.a)(e.form).then(function(){e.loading=!1,e.$notify({title:"操作成功",message:"配置保存成功",type:"success"})}).catch(function(){e.loading=!1}))})},handleEmailTest:function(){var e=this;this.sending=!0,Object(n.b)(this.testEmail).then(function(t){e.sending=!1,e.$alert(t.data,"发送成功",{type:"success"})}).finally(function(){e.sending=!1})}}},c={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("el-card",[a("el-form",{directives:[{name:"loading",rawName:"v-loading.body",value:e.loading,expression:"loading",modifiers:{body:!0}}],ref:"form",attrs:{model:e.form,"label-width":e.labelWidth,rules:e.formRules}},[a("h2",{staticClass:"title"},[e._v("邮件驱动")]),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("span",[e._v("驱动")]),e._v(" "),a("el-radio-group",{model:{value:e.form.mail_driver,callback:function(t){e.$set(e.form,"mail_driver",t)},expression:"form.mail_driver"}},[a("el-radio",{attrs:{label:"smtp"}}),e._v(" "),a("el-radio",{attrs:{label:"sendcloud"}})],1)],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"mail_smtp_from_address"}},[a("span",[e._v("发件人地址")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"发件人地址"},model:{value:e.form.mail_smtp_from_address,callback:function(t){e.$set(e.form,"mail_smtp_from_address",t)},expression:"form.mail_smtp_from_address"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"mail_smtp_from_name"}},[a("span",[e._v("发件人姓名")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"发件人姓名"},model:{value:e.form.mail_smtp_from_name,callback:function(t){e.$set(e.form,"mail_smtp_from_name",t)},expression:"form.mail_smtp_from_name"}})],1),e._v(" "),"smtp"===e.form.mail_driver?a("div",[a("el-form-item",{staticClass:"item-container",attrs:{prop:"mail_smtp_host"}},[a("span",[e._v("服务器地址")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"服务器地址"},model:{value:e.form.mail_smtp_host,callback:function(t){e.$set(e.form,"mail_smtp_host",t)},expression:"form.mail_smtp_host"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"mail_smtp_port"}},[a("span",[e._v("服务器端口")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"25(null)/465(ssl)/587(tls)"},model:{value:e.form.mail_smtp_port,callback:function(t){e.$set(e.form,"mail_smtp_port",t)},expression:"form.mail_smtp_port"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"mail_smtp_username"}},[a("span",[e._v("用户名")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"用户名"},model:{value:e.form.mail_smtp_username,callback:function(t){e.$set(e.form,"mail_smtp_username",t)},expression:"form.mail_smtp_username"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"mail_smtp_password"}},[a("span",[e._v("密码")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"密码"},model:{value:e.form.mail_smtp_password,callback:function(t){e.$set(e.form,"mail_smtp_password",t)},expression:"form.mail_smtp_password"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"mail_smtp_encryption"}},[a("span",[e._v("加密")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"null/ssl/tls"},model:{value:e.form.mail_smtp_encryption,callback:function(t){e.$set(e.form,"mail_smtp_encryption",t)},expression:"form.mail_smtp_encryption"}})],1)],1):e._e(),e._v(" "),"sendcloud"===e.form.mail_driver?a("div",[a("el-form-item",{staticClass:"item-container",attrs:{prop:"sendcloud_user"}},[a("span",[e._v("User")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"User"},model:{value:e.form.sendcloud_user,callback:function(t){e.$set(e.form,"sendcloud_user",t)},expression:"form.sendcloud_user"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"sendcloud_key"}},[a("span",[e._v("Key")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"Key"},model:{value:e.form.sendcloud_key,callback:function(t){e.$set(e.form,"sendcloud_key",t)},expression:"form.sendcloud_key"}})],1)],1):e._e(),e._v(" "),a("h2",{staticClass:"title",staticStyle:{"margin-top":"48px"}},[e._v("测试发送")]),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("el-input",{attrs:{placeholder:"请输入邮箱"},model:{value:e.testEmail,callback:function(t){e.testEmail=t},expression:"testEmail"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("el-button",{attrs:{size:"small",loading:e.sending},on:{click:e.handleEmailTest}},[e._v(e._s(e.sending?"发送中":"发送"))])],1),e._v(" "),a("h2",{staticClass:"title",staticStyle:{"margin-top":"48px"}},[e._v("邮件发送选项")]),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("el-switch",{attrs:{"inactive-text":"发送卡密到买家邮箱","active-value":1,"inactive-value":0},model:{value:e.form.mail_send_order,callback:function(t){e.$set(e.form,"mail_send_order",t)},expression:"form.mail_send_order"}}),e._v(" "),a("span",{staticClass:"tip",staticStyle:{display:"block","margin-top":"-12px"}},[e._v("注意：只有当联系方式为邮箱时才会发送")])],1)],1),e._v(" "),a("div",{staticClass:"text-center",staticStyle:{"margin-top":"24px"}},[a("el-button",{on:{click:e.handleResetForm}},[e._v("刷新")]),e._v(" "),a("el-button",{attrs:{type:"primary",loading:e.loading},nativeOn:{click:function(t){e.handleSubmit(t)}}},[e._v("保存更改")])],1)],1)},staticRenderFns:[]},_=a("VU/8")(l,c,!1,null,null,null),t.default=_.exports},"4K0W":function(e,t,a){"use strict";var s,o,i,r,n,l,c,_;Object.defineProperty(t,"__esModule",{value:!0}),s=a("woOf"),o=a.n(s),i=a("Y81h"),r=a.n(i),n=a("V/8j"),l={components:{},data:function(){return{loading:!1,labelWidth:"0px",form:{storage_driver:"",storage_s3_access_key:"",storage_s3_secret_key:"",storage_s3_region:"",storage_s3_bucket:"",storage_oss_access_key:"",storage_oss_secret_key:"",storage_oss_bucket:"",storage_oss_endpoint:"",storage_oss_is_ssl:"",storage_oss_is_cname:"",storage_oss_cdn_domain:"",storage_qiniu_access_key:"",storage_qiniu_secret_key:"",storage_qiniu_bucket:"",storage_qiniu_domains_default:"",storage_qiniu_domains_https:""},formRules:{}}},watch:{loading:function(e,t){e?t||r.a.isStarted()||r.a.start():r.a.done()}},mounted:function(){this.getSet()},methods:{getSet:function(){var e=this;this.loading=!0,Object(n.f)().then(function(t){o()(e.form,t.data),e.loading=!1})},handleResetForm:function(){this.getSet()},handleSubmit:function(){var e=this;this.$refs.form.validate(function(t){t&&(e.loading=!0,Object(n.f)(e.form).then(function(){e.loading=!1,e.$notify({title:"操作成功",message:"配置保存成功",type:"success"})}).catch(function(){e.loading=!1}))})}}},c={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("el-card",[a("el-form",{directives:[{name:"loading",rawName:"v-loading.body",value:e.loading,expression:"loading",modifiers:{body:!0}}],ref:"form",attrs:{model:e.form,"label-width":e.labelWidth,rules:e.formRules}},[a("h2",{staticClass:"title"},[e._v("存储驱动")]),e._v(" "),a("el-alert",{attrs:{title:"请根据实际情况配置存储引擎，合理做好站点下载分流。建议尽量使用云存储服务，同时保证文件访问协议与网站访问协议一致！",type:"warning"}}),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("span",[e._v("驱动")]),e._v(" "),a("el-radio-group",{model:{value:e.form.storage_driver,callback:function(t){e.$set(e.form,"storage_driver",t)},expression:"form.storage_driver"}},[a("el-radio",{attrs:{label:"local"}},[e._v("本地")]),e._v(" "),a("el-radio",{attrs:{label:"s3"}},[e._v("AWS S3")]),e._v(" "),a("el-radio",{attrs:{label:"oss"}},[e._v("阿里云OSS")]),e._v(" "),a("el-radio",{attrs:{label:"qiniu"}},[e._v("七牛云储存")])],1)],1),e._v(" "),"local"===e.form.storage_driver?a("div",{staticClass:"item-container"},[a("span",{staticClass:"tip"},[e._v("请确保"),a("code",[e._v("/storage")]),e._v("目录已经配置写入权限")])]):e._e(),e._v(" "),"s3"===e.form.storage_driver?a("div",[a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_s3_access_key"}},[a("span",[e._v("AccessKey (访问密钥)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 AccessKey (访问密钥)"},model:{value:e.form.storage_s3_access_key,callback:function(t){e.$set(e.form,"storage_s3_access_key",t)},expression:"form.storage_s3_access_key"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_s3_secret_key"}},[a("span",[e._v("SecretKey (安全密钥)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 SecretKey (安全密钥)"},model:{value:e.form.storage_s3_secret_key,callback:function(t){e.$set(e.form,"storage_s3_secret_key",t)},expression:"form.storage_s3_secret_key"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_s3_region"}},[a("span",[e._v("Region (存储区域)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 Region (存储区域)"},model:{value:e.form.storage_s3_region,callback:function(t){e.$set(e.form,"storage_s3_region",t)},expression:"form.storage_s3_region"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("填写存储区域代码")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_s3_bucket"}},[a("span",[e._v("Bucket (空间名称)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 Bucket (空间名称)"},model:{value:e.form.storage_s3_bucket,callback:function(t){e.$set(e.form,"storage_s3_bucket",t)},expression:"form.storage_s3_bucket"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("填写存储空间名称，如：static")])],1)],1):e._e(),e._v(" "),"oss"===e.form.storage_driver?a("div",[a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_oss_access_key"}},[a("span",[e._v("AccessKey (访问密钥)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 AccessKey (访问密钥)"},model:{value:e.form.storage_oss_access_key,callback:function(t){e.$set(e.form,"storage_oss_access_key",t)},expression:"form.storage_oss_access_key"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("可以在 [ 阿里云 > 个人中心 ] 设置并获取到访问密钥")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_oss_secret_key"}},[a("span",[e._v("SecretKey (安全密钥)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 SecretKey (安全密钥)"},model:{value:e.form.storage_oss_secret_key,callback:function(t){e.$set(e.form,"storage_oss_secret_key",t)},expression:"form.storage_oss_secret_key"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("可以在 [ 阿里云 > 个人中心 ] 设置并获取到安全密钥")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_oss_bucket"}},[a("span",[e._v("Bucket (空间名称)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 Bucket (空间名称)"},model:{value:e.form.storage_oss_bucket,callback:function(t){e.$set(e.form,"storage_oss_bucket",t)},expression:"form.storage_oss_bucket"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("填写存储空间名称，如：xxx")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_oss_endpoint"}},[a("span",[e._v("Endpoint (节点域名)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 Endpoint (节点域名)"},model:{value:e.form.storage_oss_endpoint,callback:function(t){e.$set(e.form,"storage_oss_endpoint",t)},expression:"form.storage_oss_endpoint"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("例如: oss-cn-hangzhou.aliyuncs.com")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("el-switch",{attrs:{"inactive-text":"自定义域名","active-value":1,"inactive-value":0},model:{value:e.form.storage_oss_is_cname,callback:function(t){e.$set(e.form,"storage_oss_is_cname",t)},expression:"form.storage_oss_is_cname"}}),e._v(" "),a("br"),e._v(" "),a("span",{staticClass:"tip"},[e._v("开启此选项后, 请确认Endpoint为OSS绑定的CNAME域名")]),e._v(" "),a("br"),e._v(" "),a("span",{staticClass:"tip"},[e._v("开启此选项后, 可以使用CDN配置")])],1),e._v(" "),e.form.storage_oss_is_cname?a("el-form-item",{staticClass:"item-container"},[a("el-switch",{attrs:{"inactive-text":"开启SSL","active-value":1,"inactive-value":0},model:{value:e.form.storage_oss_is_ssl,callback:function(t){e.$set(e.form,"storage_oss_is_ssl",t)},expression:"form.storage_oss_is_ssl"}})],1):e._e(),e._v(" "),e.form.storage_oss_is_cname?a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_oss_cdn_domain"}},[a("span",[e._v("CDN Domain (CDN 域名)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 CDN Domain (CDN 域名)"},model:{value:e.form.storage_oss_cdn_domain,callback:function(t){e.$set(e.form,"storage_oss_cdn_domain",t)},expression:"form.storage_oss_cdn_domain"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("OSS绑定的CDN域名, 填写后将使用CDN")])],1):e._e()],1):e._e(),e._v(" "),"qiniu"===e.form.storage_driver?a("div",[a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_qiniu_access_key"}},[a("span",[e._v("AccessKey (访问密钥)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 AccessKey (访问密钥)"},model:{value:e.form.storage_qiniu_access_key,callback:function(t){e.$set(e.form,"storage_qiniu_access_key",t)},expression:"form.storage_qiniu_access_key"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("可以在 [ 七牛云 > 个人中心 ] 设置并获取到访问密钥")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_qiniu_secret_key"}},[a("span",[e._v("SecretKey (安全密钥)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 SecretKey (安全密钥)"},model:{value:e.form.storage_qiniu_secret_key,callback:function(t){e.$set(e.form,"storage_qiniu_secret_key",t)},expression:"form.storage_qiniu_secret_key"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("可以在 [ 七牛云 > 个人中心 ] 设置并获取到安全密钥")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_qiniu_bucket"}},[a("span",[e._v("Bucket (空间名称)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 Bucket (空间名称)"},model:{value:e.form.storage_qiniu_bucket,callback:function(t){e.$set(e.form,"storage_qiniu_bucket",t)},expression:"form.storage_qiniu_bucket"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("填写存储空间名称，如：static")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_qiniu_domains_default"}},[a("span",[e._v("Domain (七牛域名)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 Domain (七牛域名)"},model:{value:e.form.storage_qiniu_domains_default,callback:function(t){e.$set(e.form,"storage_qiniu_domains_default",t)},expression:"form.storage_qiniu_domains_default"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("例如: xxxxx.com1.z0.glb.clouddn.com")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"storage_qiniu_domains_https"}},[a("span",[e._v("HTTPS Domain (HTTPS域名)")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入 HTTPS Domain (HTTPS域名)"},model:{value:e.form.storage_qiniu_domains_https,callback:function(t){e.$set(e.form,"storage_qiniu_domains_https",t)},expression:"form.storage_qiniu_domains_https"}})],1)],1):e._e()],1),e._v(" "),a("div",{staticClass:"text-center",staticStyle:{"margin-top":"24px"}},[a("el-button",{on:{click:e.handleResetForm}},[e._v("刷新")]),e._v(" "),a("el-button",{attrs:{type:"primary",loading:e.loading},nativeOn:{click:function(t){e.handleSubmit(t)}}},[e._v("保存更改")])],1)],1)},staticRenderFns:[]},_=a("VU/8")(l,c,!1,null,null,null),t.default=_.exports},"8x4L":function(e,t,a){"use strict";var s,o,i,r,n,l,c,_;Object.defineProperty(t,"__esModule",{value:!0}),s=a("woOf"),o=a.n(s),i=a("Y81h"),r=a.n(i),n=a("V/8j"),l={components:{QuillEditor:a("gQ7a").a},data:function(){return{loading:!1,labelWidth:"0px",form:{app_name:"加载中",app_title:"",app_url:"",app_url_api:"",keywords:"",description:"",shop_ann:"",shop_inventory:0,shop_qq:"",js_tj:"",js_kf:""},formRules:{app_name:[{required:!0,message:"请输入网站名称",trigger:"blur"}],app_url:[{required:!0,message:"请输入网站地址",trigger:"blur"}],app_url_api:[{required:!0,message:"请输入网站API地址",trigger:"blur"}],keywords:[{required:!0,message:"请输入网站关键词",trigger:"blur"}]}}},mounted:function(){this.loadInfo()},watch:{loading:function(e,t){e?t||r.a.isStarted()||r.a.start():r.a.done()}},methods:{loadInfo:function(){var e=this;this.loading=!0,Object(n.c)().then(function(t){o()(e.form,t.data),e.$refs["editor-shop_ann"].setValue(e.form.shop_ann),e.$refs["editor-shop_ann_pop"].setValue(e.form.shop_ann_pop),e.loading=!1})},handleResetForm:function(){this.loadInfo()},handleSubmit:function(){var e=this;this.$refs.form.validate(function(t){t&&(e.loading=!0,e.form.shop_ann=e.$refs["editor-shop_ann"].getValue(),e.form.shop_ann_pop=e.$refs["editor-shop_ann_pop"].getValue(),Object(n.c)(e.form).then(function(){e.$notify({title:"提示",message:"修改设置成功",type:"success",duration:3e3}),e.loading=!1}).catch(function(){e.loading=!1}))})}}},c={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("el-card",[a("el-form",{directives:[{name:"loading",rawName:"v-loading.body",value:e.loading,expression:"loading",modifiers:{body:!0}}],ref:"form",attrs:{model:e.form,"label-width":e.labelWidth,rules:e.formRules}},[a("h2",{staticClass:"title"},[e._v("常规设置")]),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"app_name"}},[a("span",[e._v("名称")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"网站名称"},model:{value:e.form.app_name,callback:function(t){e.$set(e.form,"app_name",t)},expression:"form.app_name"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"app_title"}},[a("span",[e._v("标题")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"网站标题"},model:{value:e.form.app_title,callback:function(t){e.$set(e.form,"app_title",t)},expression:"form.app_title"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"shop_ann"}},[a("span",[e._v("店铺公告")]),e._v(" "),a("quill-editor",{ref:"editor-shop_ann",attrs:{placeholder:"本说明将显示在商户首页"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"shop_ann_pop"}},[a("span",[e._v("首页弹窗")]),e._v(" "),a("quill-editor",{ref:"editor-shop_ann_pop",attrs:{placeholder:"本说明将在商户首页弹窗"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("span",[e._v("库存显示")]),e._v(" "),a("el-radio-group",{attrs:{size:"small"},model:{value:e.form.shop_inventory,callback:function(t){e.$set(e.form,"shop_inventory",t)},expression:"form.shop_inventory"}},[a("el-radio-button",{attrs:{label:0}},[e._v("大致范围")]),e._v(" "),a("el-radio-button",{attrs:{label:1}},[e._v("实际库存")])],1)],1),e._v(" "),a("h2",{staticClass:"title",staticStyle:{"margin-top":"48px"}},[e._v("网站设置")]),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"app_url"}},[a("span",[e._v("网站地址")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"格式: http://example.com"},model:{value:e.form.app_url,callback:function(t){e.$set(e.form,"app_url",t)},expression:"form.app_url"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"app_url_api"}},[a("span",[e._v("网站API地址")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"格式: http://api.example.com"},model:{value:e.form.app_url_api,callback:function(t){e.$set(e.form,"app_url_api",t)},expression:"form.app_url_api"}}),e._v(" "),a("span",{staticStyle:{"font-size":"12px"}},[e._v("用于支付API通知，如主站开启5秒盾等，请在这里提供一个没有盾的地址，否则会造成通知失败")])],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"keywords"}},[a("span",[e._v("关键词")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入网站关键词(keywords)"},model:{value:e.form.keywords,callback:function(t){e.$set(e.form,"keywords",t)},expression:"form.keywords"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"description"}},[a("span",[e._v("描述")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入网站描述(description)"},model:{value:e.form.description,callback:function(t){e.$set(e.form,"description",t)},expression:"form.description"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"qq"}},[a("span",[e._v("客服QQ")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"请输入联系QQ"},model:{value:e.form.shop_qq,callback:function(t){e.$set(e.form,"shop_qq",t)},expression:"form.shop_qq"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"js_kf"}},[a("span",[e._v("客服代码(QQ等)")]),e._v(" "),a("el-input",{attrs:{type:"textarea",placeholder:"请输入客服代码",autosize:{minRows:3,maxRows:15}},model:{value:e.form.js_kf,callback:function(t){e.$set(e.form,"js_kf",t)},expression:"form.js_kf"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"js_tj"}},[a("span",[e._v("统计代码")]),e._v(" "),a("el-input",{attrs:{type:"textarea",placeholder:"请输入统计代码",autosize:{minRows:3,maxRows:15}},model:{value:e.form.js_tj,callback:function(t){e.$set(e.form,"js_tj",t)},expression:"form.js_tj"}})],1)],1),e._v(" "),a("div",{staticClass:"text-center",staticStyle:{"margin-top":"24px"}},[a("el-button",{on:{click:e.handleResetForm}},[e._v("刷新")]),e._v(" "),a("el-button",{attrs:{type:"primary",loading:e.loading},nativeOn:{click:function(t){e.handleSubmit(t)}}},[e._v("保存更改")])],1)],1)},staticRenderFns:[]},_=a("VU/8")(l,c,!1,null,null,null),t.default=_.exports},"93Ng":function(e,t){},CGPg:function(e,t,a){"use strict";var s,o,i,r,n,l,c,_;Object.defineProperty(t,"__esModule",{value:!0}),s=a("woOf"),o=a.n(s),i=a("Y81h"),r=a.n(i),n=a("V/8j"),l={components:{},data:function(){return{loading:!1,labelWidth:"0px",form:{vcode_driver:"geetest",vcode_geetest_id:"",vcode_geetest_key:"",vcode_login:0,vcode_shop_buy:0,vcode_shop_search:0},formRules:{}}},watch:{loading:function(e,t){e?t||r.a.isStarted()||r.a.start():r.a.done()}},mounted:function(){this.getSet()},methods:{getSet:function(){var e=this;this.loading=!0,Object(n.h)().then(function(t){o()(e.form,t.data),e.loading=!1})},handleResetForm:function(){this.getSet()},handleSubmit:function(){var e=this;this.$refs.form.validate(function(t){t&&(e.loading=!0,Object(n.h)(e.form).then(function(){e.loading=!1,e.$notify({title:"操作成功",message:"配置保存成功",type:"success"})}).catch(function(){e.loading=!1}))})}}},c={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("el-card",[a("el-form",{directives:[{name:"loading",rawName:"v-loading.body",value:e.loading,expression:"loading",modifiers:{body:!0}}],ref:"form",attrs:{model:e.form,"label-width":e.labelWidth,rules:e.formRules}},[a("h2",{staticClass:"title"},[e._v("验证码驱动")]),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"vcode_geetest_id"}},[a("span",[e._v("GEETEST_ID")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"GEETEST_ID"},model:{value:e.form.vcode_geetest_id,callback:function(t){e.$set(e.form,"vcode_geetest_id",t)},expression:"form.vcode_geetest_id"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"vcode_geetest_key"}},[a("span",[e._v("GEETEST_KEY")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"GEETEST_KEY"},model:{value:e.form.vcode_geetest_key,callback:function(t){e.$set(e.form,"vcode_geetest_key",t)},expression:"form.vcode_geetest_key"}})],1),e._v(" "),a("h2",{staticClass:"title",staticStyle:{"margin-top":"48px"}},[e._v("后台验证码")]),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("el-switch",{attrs:{"inactive-text":"后台登录验证码","active-value":1,"inactive-value":0},model:{value:e.form.vcode_login,callback:function(t){e.$set(e.form,"vcode_login",t)},expression:"form.vcode_login"}})],1),e._v(" "),a("h2",{staticClass:"title",staticStyle:{"margin-top":"48px"}},[e._v("店铺验证码")]),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("el-switch",{attrs:{"inactive-text":"下单","active-value":1,"inactive-value":0},model:{value:e.form.vcode_shop_buy,callback:function(t){e.$set(e.form,"vcode_shop_buy",t)},expression:"form.vcode_shop_buy"}})],1),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("el-switch",{attrs:{"inactive-text":"查询订单","active-value":1,"inactive-value":0},model:{value:e.form.vcode_shop_search,callback:function(t){e.$set(e.form,"vcode_shop_search",t)},expression:"form.vcode_shop_search"}})],1)],1),e._v(" "),a("div",{staticClass:"text-center",staticStyle:{"margin-top":"24px"}},[a("el-button",{on:{click:e.handleResetForm}},[e._v("刷新")]),e._v(" "),a("el-button",{attrs:{type:"primary",loading:e.loading},nativeOn:{click:function(t){e.handleSubmit(t)}}},[e._v("保存更改")])],1)],1)},staticRenderFns:[]},_=a("VU/8")(l,c,!1,null,null,null),t.default=_.exports},QZ1y:function(e,t,a){"use strict";var s,o,i,r,n,l,c,_,m,p,d,u,f,v;Object.defineProperty(t,"__esModule",{value:!0}),s=a("woOf"),o=a.n(s),i=a("Y81h"),r=a.n(i),n=a("8x4L"),l=a("mkKm"),c=a("2owH"),_=a("ROtQ"),m=a("CGPg"),p=a("4K0W"),d={info:!1,theme:!1,email:!1,order:!1,vcode:!1,security:!1,storage:!1,other:!1},u={components:{setInfo:n.default,setTheme:l.default,setEmail:c.default,setOrder:_.default,setVcode:m.default,setStorage:p.default},data:function(){return{loading:!1,activeTab:"",initialized:o()({},d)}},watch:{loading:function(e,t){e?t||r.a.isStarted()||r.a.start():r.a.done()},activeTab:function(e){r.a.isStarted()&&r.a.done(),e&&(this.$route.query.tab=e,window.history.pushState({},0,this.$route.path+"?tab="+e),this.initialized[e]=!0)}},mounted:function(){this.activeTab=this.$route.query.tab||"info"},methods:{}},f={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"app-container"},[a("el-tabs",{model:{value:e.activeTab,callback:function(t){e.activeTab=t},expression:"activeTab"}},[a("el-tab-pane",{attrs:{label:"网站",name:"info"}},[e.initialized.info?a("set-info"):e._e()],1),e._v(" "),a("el-tab-pane",{attrs:{label:"主题",name:"theme"}},[e.initialized.theme?a("set-theme"):e._e()],1),e._v(" "),a("el-tab-pane",{attrs:{label:"订单",name:"order"}},[e.initialized.order?a("set-order"):e._e()],1),e._v(" "),a("el-tab-pane",{attrs:{label:"邮件",name:"email"}},[e.initialized.email?a("set-email"):e._e()],1),e._v(" "),a("el-tab-pane",{attrs:{label:"验证码",name:"vcode"}},[e.initialized.vcode?a("set-vcode"):e._e()],1),e._v(" "),a("el-tab-pane",{attrs:{label:"文件储存",name:"storage"}},[e.initialized.storage?a("set-storage"):e._e()],1)],1)],1)},staticRenderFns:[]},v=a("VU/8")(u,f,!1,function(e){a("93Ng")},null,null),t.default=v.exports},ROtQ:function(e,t,a){"use strict";var s,o,i,r,n,l,c,_;Object.defineProperty(t,"__esModule",{value:!0}),s=a("woOf"),o=a.n(s),i=a("Y81h"),r=a.n(i),n=a("V/8j"),l={components:{},data:function(){return{loading:!1,labelWidth:"0px",form:{order_clean_unpay_open:0,order_clean_unpay_day:7},formRules:{}}},watch:{loading:function(e,t){e?t||r.a.isStarted()||r.a.start():r.a.done()}},mounted:function(){this.getSet()},methods:{getSet:function(){var e=this;this.loading=!0,Object(n.d)().then(function(t){o()(e.form,t.data),e.loading=!1})},handleResetForm:function(){this.getSet()},handleSubmit:function(){var e=this;this.$refs.form.validate(function(t){t&&(e.loading=!0,Object(n.d)(e.form).then(function(){e.loading=!1,e.$notify({title:"操作成功",message:"配置保存成功",type:"success"})}).catch(function(){e.loading=!1}))})},clearOrder:function(){var e=this;this.$confirm("是否要删除 "+this.form.order_clean_unpay_day+"天 前未支付订单?").then(function(){Object(n.e)(e.form.order_clean_unpay_day).then(function(){e.$notify({title:"成功",message:e.form.order_clean_unpay_day+"天 前未支付订单已删除",type:"success"})})})}}},c={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("el-card",[a("el-form",{directives:[{name:"loading",rawName:"v-loading.body",value:e.loading,expression:"loading",modifiers:{body:!0}}],ref:"form",attrs:{model:e.form,"label-width":e.labelWidth,rules:e.formRules}},[a("h2",{staticClass:"title"},[e._v("订单设置")]),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("el-switch",{attrs:{"inactive-text":"清理未支付订单","active-value":1,"inactive-value":0},model:{value:e.form.order_clean_unpay_open,callback:function(t){e.$set(e.form,"order_clean_unpay_open",t)},expression:"form.order_clean_unpay_open"}})],1),e._v(" "),a("el-form-item",{directives:[{name:"show",rawName:"v-show",value:e.form.order_clean_unpay_open,expression:"form.order_clean_unpay_open"}],staticClass:"item-container",attrs:{prop:"order_clean_unpay_day",rules:{required:!0,message:"请输入未支付订单保留天数",trigger:"blur"}}},[a("span",[e._v("未支付订单保留天数")]),e._v(" "),a("el-input",{attrs:{type:"number",placeholder:"请输入未支付订单保留天数"},model:{value:e.form.order_clean_unpay_day,callback:function(t){e.$set(e.form,"order_clean_unpay_day",t)},expression:"form.order_clean_unpay_day"}}),e._v(" "),a("span",{staticClass:"tip"},[e._v("超过此天数的未支付订单将被删除")])],1),e._v(" "),a("div",{directives:[{name:"show",rawName:"v-show",value:e.form.order_clean_unpay_open,expression:"form.order_clean_unpay_open"}],staticStyle:{"font-size":"12px"}},[a("span",[e._v("注意: 本功能需要开启定时任务")]),e._v(" "),a("code",{staticStyle:{display:"block"}},[e._v(" * * * * * php /www/wwwroot/card_dist/artisan schedule:run >> /dev/null 2>&1 & echo\n        'card_job';")]),a("br"),e._v("\n      你也可以点此 "),a("el-button",{attrs:{size:"mini"},on:{click:e.clearOrder}},[e._v("手动清理")])],1)],1),e._v(" "),a("div",{staticClass:"text-center",staticStyle:{"margin-top":"24px"}},[a("el-button",{on:{click:e.handleResetForm}},[e._v("刷新")]),e._v(" "),a("el-button",{attrs:{type:"primary",loading:e.loading},nativeOn:{click:function(t){e.handleSubmit(t)}}},[e._v("保存更改")])],1)],1)},staticRenderFns:[]},_=a("VU/8")(l,c,!1,null,null,null),t.default=_.exports},mkKm:function(e,t,a){"use strict";var s,o,i,r,n,l;Object.defineProperty(t,"__esModule",{value:!0}),s=a("Y81h"),o=a.n(s),i=a("V/8j"),r={components:{},data:function(){return{loading:!1,labelWidth:"0px",themes:[],form:{shop_theme:"",shop_theme_material_list_type:"",shop_theme_material_background:"",shop_theme_classic_list_type:""},formRules:{},themeMaterialNoBackground:!1}},watch:{loading:function(e,t){e?t||o.a.isStarted()||o.a.start():o.a.done()}},mounted:function(){this.getSet()},methods:{getSet:function(){var e=this;this.loading=!0,Object(i.g)().then(function(t){e.themes=t.data.themes,e.themes.forEach(function(t){"Material"===t.name?(e.form.shop_theme_material_list_type=t.config.list_type,e.form.shop_theme_material_background=t.config.background,e.themeMaterialNoBackground="0"===e.form.shop_theme_material_background):"Classic"===t.name&&(e.form.shop_theme_classic_list_type=t.config.list_type)}),e.form.shop_theme=t.data.default,e.loading=!1})},handleResetForm:function(){this.getSet()},handleSubmit:function(){var e=this;this.$refs.form.validate(function(t){t&&(e.loading=!0,e.themeMaterialNoBackground&&(e.form.shop_theme_material_background="0"),Object(i.g)(e.form).then(function(){e.loading=!1,e.$notify({title:"操作成功",message:"配置保存成功",type:"success"})}).catch(function(){e.loading=!1}))})}}},n={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("el-card",[a("el-form",{directives:[{name:"loading",rawName:"v-loading.body",value:e.loading,expression:"loading",modifiers:{body:!0}}],ref:"form",attrs:{model:e.form,"label-width":e.labelWidth,rules:e.formRules}},[a("h2",{staticClass:"title"},[e._v("主题设置")]),e._v(" "),a("el-form-item",{staticClass:"item-container",attrs:{prop:"shop_theme"}},[a("span",{staticStyle:{display:"block"}},[e._v("默认主题")]),e._v(" "),a("el-select",{model:{value:e.form.shop_theme,callback:function(t){e.$set(e.form,"shop_theme",t)},expression:"form.shop_theme"}},e._l(e.themes,function(e){return a("el-option",{key:e.id,attrs:{label:e.name+" - "+e.description,value:e.name}})}))],1),e._v(" "),a("el-card",{directives:[{name:"show",rawName:"v-show",value:"Material"===e.form.shop_theme,expression:"form.shop_theme==='Material'"}],staticClass:"child-option"},[a("p",{staticClass:"child-option-title"},[e._v("默认主题设置")]),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("span",{staticStyle:{display:"block"}},[e._v("商品排列方式")]),e._v(" "),a("el-select",{model:{value:e.form.shop_theme_material_list_type,callback:function(t){e.$set(e.form,"shop_theme_material_list_type",t)},expression:"form.shop_theme_material_list_type"}},[a("el-option",{attrs:{value:"dropdown",label:"下拉式"}}),e._v(" "),a("el-option",{attrs:{value:"button",label:"按钮式"}})],1)],1),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("span",{staticStyle:{display:"block"}},[e._v("店铺背景")]),e._v(" "),a("el-input",{attrs:{type:"text",placeholder:"店铺背景(图片URL)",disabled:e.themeMaterialNoBackground},model:{value:e.form.shop_theme_material_background,callback:function(t){e.$set(e.form,"shop_theme_material_background",t)},expression:"form.shop_theme_material_background"}}),e._v(" "),a("el-checkbox",{attrs:{size:"small"},model:{value:e.themeMaterialNoBackground,callback:function(t){e.themeMaterialNoBackground=t},expression:"themeMaterialNoBackground"}},[e._v("\n          不显示背景图片\n        ")])],1)],1),e._v(" "),a("el-card",{directives:[{name:"show",rawName:"v-show",value:"Classic"===e.form.shop_theme,expression:"form.shop_theme==='Classic'"}],staticClass:"child-option"},[a("p",{staticClass:"child-option-title"},[e._v("默认主题设置")]),e._v(" "),a("el-form-item",{staticClass:"item-container"},[a("span",{staticStyle:{display:"block"}},[e._v("商品排列方式")]),e._v(" "),a("el-select",{model:{value:e.form.shop_theme_classic_list_type,callback:function(t){e.$set(e.form,"shop_theme_classic_list_type",t)},expression:"form.shop_theme_classic_list_type"}},[a("el-option",{attrs:{value:"dropdown",label:"下拉式"}}),e._v(" "),a("el-option",{attrs:{value:"button",label:"按钮式"}})],1)],1)],1)],1),e._v(" "),a("div",{staticClass:"text-center",staticStyle:{"margin-top":"24px"}},[a("el-button",{on:{click:e.handleResetForm}},[e._v("刷新")]),e._v(" "),a("el-button",{attrs:{type:"primary",loading:e.loading},nativeOn:{click:function(t){e.handleSubmit(t)}}},[e._v("保存更改")])],1)],1)},staticRenderFns:[]},l=a("VU/8")(r,n,!1,function(e){a("nJV7")},"data-v-1590af1a",null),t.default=l.exports},nJV7:function(e,t){}});