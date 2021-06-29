/* toggle.blade.php */
$(function(){
    $(".toggle-button").click(function(){
        $(this).next().slideToggle(200);
        return false;
    });
});
/* toggle.blade.php */

/* alert.blade.php */
$(function(){
    $("#bg").hide();

    $("#click").click(function(){
        $("#bg").fadeIn(300);
    });

    $("#ok").click(function(){
        $("#bg").fadeOut(300);
    });
});
/* alert.blade.php */

/* viewer.blade.php */
$(function(){
    $("a").click(function(){
        $("figure img").attr("src", $(this).attr("href"));
        return false;
    });

});
/* viewer.blade.php */

/* tab.blade.php */
$(function(){
    $('#contents div[id != "tab1"]').hide();
    $("a").click(function(){
        $("#contents div").hide();
        $($(this).attr("href")).show();

        $(".current").removeClass("current");
        $(this).addClass("current");

        $(".current").removeClass("current_tab");
        $($(this).attr("href")).addClass("current_tab");

        return false;
    });
});
/* tab.blade.php */


/* dropdown.blade.php */
$(function(){
    $("#navi").children("li").hover(function(){
        $(this).children("ul").slideToggle();
    });
});
/* dropdown.blade.php */

/* floating.blade.php */
$(function(){
    $(window).scroll(function(){

            //親要素のwindowからtopの座標取得
            var e = document.getElementById('floating-relative');
            var rect = e.getBoundingClientRect().top; 
            console.log(rect);
            
            if (rect > 107 || rect < -960) {
                $(".floating-relative").children().addClass("floating-displaynone");
            } else {
                $(".floating-relative").children().removeClass("floating-displaynone");

                if($(".floating-relative").children().offset({top : 0 }))
                $(".floating-relative").children().stop().animate({"top" : $(window).scrollTop() -  1500 }, 500)
        
            }
    });
});
/* floating.blade.php */

/* modalwindow.blade.php */
$(function(){
    $(".modalwindow").click(function(){
        //要素の追加
        $("#modal-list").append('<div id="modal_bg">');
        $("#modal-list").append('<div id="modal_photo">');
        //一旦非表示
        $("#modal_bg").hide();
        $("#modal_photo").hide();
        //imgを追加
        $("#modal_photo").html("<img>");
        alert($(this).attr("src"));
        $("#modal_photo img").attr("src", $(this).attr("src"));
        $("#modal_photo img").attr("widht", 640);
        $("#modal_photo img").attr("height", 640);

        //表示
        $("#modal_bg").fadeIn();
        $("#modal_photo").fadeIn();
        //もう一度クリックで全部消す
        $("#modal_bg").click(function(){
            $("#modal_photo").fadeOut();
            $(this).fadeOut();
        //前要素を消す
            $("#modal_photo img").remove();
            $("#modal_photo").remove();
            $("#modal_bg").remove();
        });
        return false;
    });
});


/* modalwindow.blade.php */

