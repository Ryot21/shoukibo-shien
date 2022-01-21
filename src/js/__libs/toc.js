
/*===============================

【jQuery】ページ内リンクでスムーズスクロール

参考：https://125naroom.com/web/2899

================================*/


    // 目次を自動生成する
    $(function() {
        var idcount = 1;
        var toc='';
        var ht_arr = [];
        var a_arr = [];

        // 『page-blog__content』内の"見出し"を抽出する
        $(".page-blog__content :header",this).each(function(){
            this.id = "toc" + idcount;
            idcount++;
            if(this.nodeName.toLowerCase() == "h2") {
                ht_arr.push(2);
            } else if(this.nodeName.toLowerCase() == "h3") {
                ht_arr.push(3);
            } else if(this.nodeName.toLowerCase() == "h4") {
                ht_arr.push(4);
            } else if(this.nodeName.toLowerCase() == "h5") {
                ht_arr.push(5);
            } else if(this.nodeName.toLowerCase() == "h6") {
                ht_arr.push(6);
            }
        
            var a = '<a href="#' + this.id + '">' + $(this).text() + "<\/a>";
            a_arr.push(a);
        });
    

        toc += '<ul class="mokuji_lists">';
        for(var i=0; i+1<ht_arr.length; ++i){
            if(ht_arr[i] == ht_arr[i+1]){
                toc += '<li class="mokuji_lists_h">'+ a_arr[i] + '</li>';
            }
            else if(ht_arr[i] < ht_arr[i+1]){
                toc += '<li class="mokuji_lists_h">'+ a_arr[i] + '<ul>';
            }
            else if(ht_arr[i] > ht_arr[i+1]){
                toc += '<li class="mokuji_lists_h">'+ a_arr[i] + '</li>';
                var ulli_num = ht_arr[i]-ht_arr[i+1];
                for(var j=0; j<ulli_num; ++j){
                    toc += '</ul></li>';
                }
            }
        }

        // 最後の1つと</ul></li>の数合わせ
        toc += '<li class="mokuji_lists_h">'+ a_arr[ht_arr.length-1] + '</li>';
        var ulli_num = ht_arr[ht_arr.length-1]-2;
        for(var j=0; j<ulli_num; ++j){
            toc += '</ul></li>';
        }
        toc += '</ul>';

        // 目次のタイトル
        if(toc){ toc = '<div class="mokuji_wrap"><div class="mokuji_title">CONTENTS</div>' + toc + '</div>'; }
        $("#toc").html(toc);
    
        //ページ内リンク 加速スクロール
        $('a[href^="#"]').on('click', function(){

            // スクロールの速度（ミリ秒）
            var speed = 400,
                href= $(this).attr("href"),
                target = $(href == "#" || href == "" ? 'html' : href),
                // 移動先を0px調整する。0を200にすると200px下にずらすことができる。
                position = target.offset().top - 90;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });
    });




