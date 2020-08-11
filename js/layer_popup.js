/* *******************************************************
 * filename : layer_popup.js
 * description : 모달레이어를 띄울때 사용되는 ajax JS
 * date : 2020-08-10
******************************************************** */


// Modal Open
$(document).ready(function  () {
	$(".cm-modal-open-btn").click(function  () {
		ajaxLoad($(this).attr("href"));
		return false;
	});
});

 /* ************************
  * html Scroll Controls
  * return true( 스크롤막을때 ) / false( 스크롤사용할때 )
  ************************ */
function htmlScrollControl (toggle) {
	if (toggle) {
		if ($.exists('#fullpage')) {
			$.fn.fullpage.setAllowScrolling(false);
			$.fn.fullpage.setKeyboardScrolling(false);
		}else {
			$("html").css({
				"margin-right":"17px",
				"overflow-y":"hidden"
			});
		}
	} else {
		if ($.exists('#fullpage')) {
			$.fn.fullpage.setAllowScrolling(true);
			$.fn.fullpage.setKeyboardScrolling(true);
		}else {
			$("html").css({
				"margin-right":"0",
				"overflow-y":"scroll"
			});
		}
	}
}

 /* ************************
  * Ajax Load
  * @param strUrl : 모달레이어팝업 주소
  ************************ */
// Ajax Load
function ajaxLoad(strUrl){
	var $modalWrap = $(".modal-fixed-pop-wrapper");
	$modalWrap.fadeIn();
	htmlScrollControl (true);
	$.ajax({
		type: "POST",
		url: strUrl,
		data: "",
		success: function(resultText){
			$modalWrap.find(".modal-inner-content").html(resultText);
		},
		error: function() {
			if ( $("html").attr("lang") == "ko" ) {
				alert("호출에 실패하였습니다.");
			}else {
				alert("Please try again.");
			}

			$(".modal-fixed-pop-wrapper").hide();
			htmlScrollControl (false);
		},
		beforeSend:function(){ 
			$('.modal-loading').show(); 
		},
		complete:function(){ 
			$('.modal-loading').hide();
		}
	});
}

 /* ************************
  * Ajax UnLoad
  * Modal Layer Popup Close
  ************************ */
function ajaxUnLoad () {
	htmlScrollControl (false);
	$(".modal-fixed-pop-wrapper").fadeOut(100, function  () {
		$(this).find(".modal-inner-content").empty();
	});
}

