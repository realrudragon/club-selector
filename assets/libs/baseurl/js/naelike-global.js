var
  loop = 0,
	searchEnter = 0,
	baseurl = $('meta[name^=baseurl]').attr('content'),
	flurl = $('meta[name^=flurl]').attr('content'),
	svurl = $('meta[name^=svurl]').attr('content'),
	tableEl = null,
	env = $('meta[name^=env]').attr('content');
var naelikeGlobal = function () {
	return {
    //ajax
		ajax: function(url, data, reditect) {
			axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
			axios.defaults.transformRequest = [function (data, headers) {
			  var str = [];
		    for(var p in data)
					if (data.hasOwnProperty(p) && data[p]) {
		        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(data[p]));
		      }
			  return str.join("&");
			}];
			axios({
				method: 'post',
				url: baseurl + url,
				data: data
			}).then(function(res) {
				console.log(res)
			});
		},
		//console
    console: function() {
      console.log('%cTest JS ES5  Java Scripting!', 'background: #222; color: #bada55');
      console.log('%cทดสอบการทำงาน', 'background: #222; color: #dc3545');
    },
		//consoleremind
    consoleremind: function() {
      var cssone = "font-size: 70px; color: #dc3545; font-weight: 700;";
      var csstwo = "font-size: 20px; color: #fefefe;";
      console.log('%cหยุด!', cssone);
      console.log('%cนี่เป็นคุณสมบัติการทำงานของเบราว์เซอร์ที่มีจุดมุ่งหมายให้ใช้สำหรับผู้พัฒนา หากผู้ใดบอกให้คุณคัดลอกแล้ววางข้อความบางอย่างที่นี่เพื่อเปิดใช้งานคุณสมบัติการทำงานของเรา หรือเพื่อเข้าถึงบัญชีของบุคคลใดบุคคลหนึ่ง "โดยมิชอบ" คำบอกกล่าวเช่นนี้เป็นกลลวงและจะทำให้ผู้นั้นมีสิทธิ์เข้าถึงของคุณ', csstwo);
      console.log('%cผู้ใช้งานจะต้องรับผิดชอบดูแล Username และรหัสผ่าน เพื่อความปลอดภัยของระบบ, ผู้ใช้งานยอมรับให้บริษัทฯ สามารถแก้ไขรายการข้อมูลที่ส่งเข้าระบบได้, ผู้ใช้งานจะไม่ทำการหรือพยายามเจาะระบบข้อมูล หรือเขียนรหัสที่เป็นภัยต่อระบบการทำงานของคอมพิวเตอร์, บริษัทฯ ไม่รับประกันว่าระบบ บริษัทฯ จะไม่ขาดช่วง, หยุดซ่อมบำรุง, หรือปราศจากข้อผิดพลาด, บริษัทฯ จะไม่รับผิดชอบต่อการสูญหายของข้อมูล ไม่ว่าในกรณีใดๆ ก็ตาม, บริษัทฯ สงวนสิทธิ์ในการลบ Account ของผู้ใช้งานบางรายที่ทำผิดกฎ หรือละเมิดสิทธิ์ทางปัญญา หรือทำให้เสียชื่อเสียง โดยไม่ต้องแจ้งล่วงหน้าให้ทราบ', csstwo);
    },
		//consoleurl
    consoleurl: function() {
			// console.log(location.href.split('/'));
			var logUrl = window.location.href;
			console.log(logUrl);
    },
		//script_go_page
		script_go_page: function() {
      var preload = document.getElementById("preload");
      var loading = 0;
      var id = setInterval(frame, 64);
			var logUrl = window.location.href;
      var url = baseurl + '';
      function frame() {
        //#loading == 20, loading == 50, loading == 75, loading == 100
        if(loading == 900) {
          //#JqueryLobibox
          Lobibox.notify('error', {
            title: 'เริ่มรีเซ็ต',
            position: 'bottom left',
						// position: 'bottom right',
            // soundPath: false,
            // delay: false,
            delay: 10000,
            icon: 'fa fa-circle-o-notch fa-pulse fs-40-lb mb-2 .mt-2',
            msg: 'อีก 9 - 10 นาที จะคำนวนใหม่',
          });
        }
        if(loading == 9000) {
          clearInterval(id);
					//#_blank, _self
          //window.open("url", "_self");
					window.open(logUrl, "_self");
					//#PopUP New
					// var w = 375;
        	// var h = 678;
					// var strWindowFeatures = "location=yes,height="+h+",width="+w+",scrollbars=yes,status=yes";
          // window.open(logUrl, "_blank", strWindowFeatures);
          // if (loading == 100) {
          //   window.close(strWindowFeatures)
          // }
        } else {
          loading = loading + 1;
          if (loading == 9100) {
            /**
              <div class="" id="preload"></div>
              ## var preload = document.getElementById("preload"); ##
            **/
            preload.style.animation = "fadeout is ease";
          }
        }
      }
    },
    //noclick
    noclick: function() {
      window.onload = function() {
        document.addEventListener("contextmenu", function(e){
          e.preventDefault();
        }, false);
        document.addEventListener("keydown", function(e) {
          //document.onkeydown = function(e) {
          // "I" key
          if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
            disabledEvent(e);
          }
          // "J" key
          if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            disabledEvent(e);
          }
          // "S" key + macOS
          if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
            disabledEvent(e);
          }
          // "U" key
          if (e.ctrlKey && e.keyCode == 85) {
            disabledEvent(e);
          }
          // "F12" key
          if (event.keyCode == 123) {
            disabledEvent(e);
          }
          // "ESC" key
          if (event.keyCode == 27) {
            disabledEvent(e);
          }
          // "Ctrl" key
          if (event.keyCode == 17) {
            disabledEvent(e);
          }
        }, false);
        function disabledEvent(e){
          if (e.stopPropagation){
            e.stopPropagation();
          } else if (window.event){
            window.event.cancelBubble = true;
          }
          e.preventDefault();
          return false;
        }
      };
    },
    //httpRequest
    httpRequest: function(url, method, params, callback, isLoading) {
			// if (isLoading === true) {
			// 	$('body').loading();
			// }
			if (typeof axios === 'undefined') {
				throw new Error('Error Need axios');
			}
			var data = $.extend(params, {csrf_token: $('meta[name^=csrf-token]').attr('content') });
			axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
			axios.defaults.transformRequest = [function (data, headers) {
				var str = [];
				for(var p in data) {
					if (data.hasOwnProperty(p) && data[p]) {
						str.push(encodeURIComponent(p) + "=" + encodeURIComponent(data[p]));
					}
				}
				return str.join("&");
			}];
			window.axios({
				method: method,
				url: baseurl + url,
				data: data
			}).then(function(response) {
				if (isLoading === true) {
					$('body').loading('stop');
				}
				if (response.status === 200 && response.data !== "") {
					if(response.data.token) {
						$('meta[name^=csrf-token]').attr('content',response.data.token);
					}
					callback(response.data);
				} else {
					if (env !== "development") {
						// naelikeGlobal.httpError({
						// 	'message': 'ไม่มีข้อมูลส่งกลับมา',
						// 	'url': url,
						// 	'method': method,
						// 	'type': 'error'
						// }); return;
					}
				}
			}).catch(function(err) {
				if (isLoading === true) {
					$('body').loading('stop');
				}
        // console.log(env);
        if (env == undefined) {
          return;
        }
        if ((env !== "development")) {
					if (loop <= 0) {
						Lobibox.notify('error', {
							title: 'เกิดข้อผิดพลาด',
							position: 'bottom left',
							// position: 'bottom right',
							delay: false,
							msg: 'เกิดข้อผิดพลากด! กรุณารอสักครู่ <i class="fa fa-circle-o-notch fa-pulse fs-16-lb fa-1x fa-fw"></i>'
						});
					}
					if (loop <= 2) {
						setTimeout(function() {
							$('.lobibox-notify-wrapper').find('.lobibox-notify-msg').text('รอสักครู่ กำลังทำการเชื่อมต่ออีกครั้ง [ '+ loop +' ]');
							naelikeGlobal.httpRequest(url, method, params, function(response) {
								callback(response);
							});
						}, 3000);
					} else {
						$('.lobibox-notify-wrapper').find('.lobibox-notify-msg').text('จบการเชื่อมต่อ [ ! เชื่อมต่อไม่ได้ ]');
						setTimeout(function(){
							// location.href = baseurl;
							location.href = '';
						}, 2000);
						naelikeGlobal.httpError({
							'data': JSON.stringify(err.response),
							'message': err,
							'url': url,
							'method': method,
							'type': 'error'
						}); return;

					}
					++loop;
				}
			});
		},
    //confirm
    confirm: function(params, callback) {
			$.confirm({
        theme: 'supervan', // 'light', 'dark', 'supervan', 'material', 'bootstrap'
        icon: (params.icon) ? params.icon : '',
		    title: (params.title) ? params.title : '',
		    content: (params.desc) ? params.desc : '',
		    type: (params.type) ? params.type : 'red',
        boxWidth: (params.boxWidth) ? params.boxWidth : '',
        useBootstrap: false,
		    typeAnimated: true,
        // closeIcon: false,
		    buttons: {
	        confirm: {
            text: 'ตกลง',
            btnClass: (params.type) ? 'btn-' + params.type : 'btn-red',
            action: function(){
            	callback(true)
            }
	        },
	        close: {
	        	text: 'ยกเลิก',
	        	action: function() {
	        		callback(false)
	        	}
	        }
		    }
			});
		},
    //init
    init: function() {
			//#Ajax
			// this.ajax();
			//#script_go_page
			// this.script_go_page();
      //#Console
      // this.console();
      //#Console Remind
      // this.consoleremind();
			//#Console URL
			// this.consoleurl();
      //#NO click
			// this.noclick();
		}
	}
} ($);
naelikeGlobal.init();;
