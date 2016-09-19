// JavaScript Document
$(document).ready(function(){
	var stt=0;
	alert(stt);
	startImg = parseInt($(".header img:first").attr("stt"));//Hàm parseInt() dùng để chuyển về kiểu int trong Jquery.
	//alert(startImg);
	endImg = parseInt($(".header img:last").attr("stt"));
	//alert(endImg);

	$(".header img").each(function(){//duyệt qua tất cả img 
			if($(this).is(':visible')){//Nếu là img này đang hiện thì show ra img có biến stt này.
				stt = $(this).attr("stt");
				//alert (stt);
			}
	});
	$("#next").click(function(){//Khi click vào nút có id là next
		next = ++stt;
		//alert(stt);
		if(next == endImg){
			stt = (startImg-1);
		}
		$(".header img").hide();//Ẩn các thành phần phù hợp
		$(".header img").eq(next).show();//Hiển thị các thành phần phù hợp
		$(".header ul li").removeClass("active");
		$(".header ul li").eq(next).addClass("active");
	});
	$("#prev").click(function(){
		prev = --stt;
		if(prev == startImg){
			stt = (endImg+1);
		}
		$(".header img").hide();
		$(".header img").eq(prev).show();
		$(".header ul li").removeClass("active");
		$(".header ul li").eq(prev).addClass("active");
	});
	setInterval(function(){
		$("#next").click();
	},2000);
});