
$(function () {

  var $body = $('body');
  var $menu = $('#js-menu');



  AOS.init()//Animation On Scroll libraryを使用する宣言

  $(function() {// 宣言

    anchorLink();
    navControl();
    mouseOver();
  });

function openSubMenu() {
      if ( $(window).width() < 980 ) {
        $('#js-menu').css('display','none');
        if($('#js-menuToggle').hasClass('close')) {
          $('#js-menuToggle').removeClass('close');
          $body.removeClass('menu-open');
        }
      } else {
        $('#js-menu').css('display','block');
      }
}
$(window).on('resize', function() {openSubMenu();}).trigger('resize');

//global navigation
function navControl() {
      var $menuToggle = $('#js-menuToggle');
      var $bottomMenuToggle = $('#js-menuToggleClose');

      $('#js-menuToggle').on('click', function(e) {
        e.preventDefault();
        if ( $menuToggle.hasClass('close') ) {
          $menu.fadeOut(300);
        } else {
          $menu.fadeIn(300);
        }
        $menuToggle.toggleClass('close');
        $body.toggleClass('menu-open');
      });

      $('#js-menu, #js-menuToggle, #js-menuToggleClose').on( 'click', function(e) {
        e.stopPropagation();
      });
}

// anchor link
function anchorLink() {
  $(document).on('click', 'a[href^="#"]', function(e) {
    e.preventDefault();

    var $el     = $(this);
    var $target = $($el.attr('href'));
    paddingTop = $('#header').outerHeight();

    if (!$target[0]) {
      return;
    }

    var offset = $target.offset().top;
    $('html, body').animate({scrollTop: offset - paddingTop});
  });
}


  //トップ画像
  // mainvisual animation first
  // promise用のsetTimeout関数
  function setTimeoutAsync(delay) {
    return new Promise(function(resolve, reject) {
        setTimeout(resolve, delay);
    });
  }


  //ニュースティッカー
  $('.l-page-newsbox').bxSlider({
      touchEnabled:false,//リンクを有効にするためスライドをマウスでドラッグした際にスライドの切り替えを可能にする機能を無効化
      mode: 'vertical',
      controls: false,
      auto: 'true',
      pager: false
  });
  //モバイルメニュー
  function mouseOver() {
    $('.js-hover').hover(function () {
      $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
    }, function () {
      $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
    });
  }
});



//スクロール途中からヘッダーを出現させるための設定を関数でまとめる(1/3)
    // function FixedAnime() {
    //   var elemTop = $('#area-3').offset().top;//#area-3の位置まできたら
    //   var scroll = $(window).scrollTop();
    //   if(scroll <= 680){//上から580pxスクロールされたら $('#header').addClass('DownMove');//DownMoveというクラス名を除き } else if (scroll >= elemTop){
    //       $('.pc-nav__lists').removeClass('UpMove');//#headerについているUpMoveというクラス名を除く
    //       $('.pc-nav__lists').addClass('DownMove');//#headerについているDownMoveというクラス名を付与

    //     }else{
    //       if($('.pc-nav__lists').hasClass('DownMove')){//すでに#headerにDownMoveというクラス名がついていたら
    //         $('.pc-nav__lists').removeClass('DownMove');//DownMoveというクラス名を除き
    //         $('.pc-nav__lists').addClass('UpMove');//UpnMoveというクラス名を付与
    //       }
    //     }
    // }
    // 画面をスクロールをしたら動かしたい場合の記述
    // $(window).scroll(function () {
    //   FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
    // });
//スクロール途中からヘッダーを出現させるための設定を関数でまとめる(2/3)
    // function FixedAnimeSP() {
    //   var elemTop = $('#area-3').offset().top;
    //   var scroll = $(window).scrollTop();
    //   if(scroll <= 580){
    //       $('#js-menuToggle').removeClass('UpMove');
    //       $('#js-menuToggle').addClass('DownMove');
    //   }else{
    //       if($('#js-menuToggle').hasClass('DownMove')){
    //         $('#js-menuToggle').removeClass('DownMove');
    //         $('#js-menuToggle').addClass('UpMove');
    //       }
    //   }
    // }
    // $(window).scroll(function () {  FixedAnimeSP(); });
//スクロール途中からヘッダーを出現させるための設定を関数でまとめる(3/3)
    // function FixedAnimeLINE() {
    //   var elemTop = $('#area-3').offset().top;
    //   var scroll = $(window).scrollTop();
    //   if(scroll <= 580){
    //       $('#js-lineToggle').removeClass('UpMove');
    //       $('#js-lineToggle').addClass('DownMove');
    //   }else{
    //       if($('#js-lineToggle').hasClass('DownMove')){
    //         $('#js-lineToggle').removeClass('DownMove');
    //         $('#js-lineToggle').addClass('UpMove');
    //       }
    //   }
    // }
    // $(window).scroll(function () {  FixedAnimeLINE(); });



//アコーディオンパネル > 「FAQ」に使用
    //クリックした時の動作 > 【.page-faq-block__title】要素をクリックしたら
    $('.page-faq-block__title').on('click', function() {
          //【.page-faq-block__text】がついたすべてのアコーディオンを閉じる
          $('.page-faq-block__text').slideUp(500);
          //タイトル直後のアコーディオンを行うエリアを取得
            var findElm = $(this).next(".page-faq-block__text");
            //タイトル要素にクラス名closeがあれば
            if($(this).hasClass('close')){
              //クラス名を除去 
              $(this).removeClass('close');
            //それ以外は
            }else{
              //クラス名closeを全て除去した後
              $('.close').removeClass('close');
              //クリックしたタイトルにクラス名closeを付与し
              $(this).addClass('close');
              //アコーディオンを開く
              $(findElm).slideDown(500);
            }
    });
    //ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
    $(window).on('load', function(){
        //【.page-faq__wrap】のはじめの【.page-faq-block】にあるsectionにopenクラスを追加
          $('.page-faq__wrap li:first-of-type section').addClass("open");
        //openクラスを取得
          $(".open").each(function(index, element){
            //openクラスの子要素のtitleクラスを取得
              var Title =$(element).children('.page-faq-block__title');
            //タイトルにクラス名closeを付与し
              $(Title).addClass('close');
            //openクラスの子要素【.page-faq-block__text】を取得
              var Box =$(element).children('.page-faq-block__text');
            //アコーディオンを開く
              $(Box).slideDown(500);
          });
    });

// アーチタイトル関係(jquery.arctext.js)
    $(document).ready(function() {
      $(".arch").arctext({radius: 500});
    });



//Loadingに使用（1/3）
    //テキストのカウントアップの設定
    // var bar = new ProgressBar.Line(splash_text, {//id名を指定
    //   strokeWidth: 0,//進捗ゲージの太さ
    //   duration: 1500,//時間指定(1000＝1秒)
    //   trailWidth: 0,//線の太さ
    //   text: {//テキストの形状を直接指定	
    //     style: {//天地中央に配置
    //       position:'absolute',
    //       left:'50%',
    //       top:'50%',
    //       padding:'0',
    //       margin:'0',
    //       transform:'translate(-50%,-50%)',
    //       'font-size':'1.2rem',
    //       color:'#fff',
    //     },
    //     autoStyleContainer: false //自動付与のスタイルを切る
    //   },
    //   step: function(state, bar) {
    //     bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
    //   }
    // });
    // //アニメーションスタート
    // bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
    //   $("#splash").delay(500).fadeOut(800);//アニメーションが終わったら#splashエリアをフェードアウト
    // }); 

//Loadingに使用（2/3）
    //logoの表示
    // $(window).on('load',function(){
    //   $("#splash").delay(1500).fadeOut('slow');//ローディング画面を1.5秒（1500ms）待機してからフェードアウト
    //   $("#splash_logo").delay(1200).fadeOut('slow');//ロゴを1.2秒（1200ms）待機してからフェードアウト
    // });

//Loadingに使用（3/3）
    // $(function(){
    //   // 1回目のアクセス
    //   if($.cookie("access") == undefined) {
    //     //最初にアクセスしたときにはここに書いたアニメーションのJSが動く
    //     $.cookie("access","onece");
    //     $("#splash").css("display","block")
    //   // 2回目以降は動かないようにするけど最初は動かす
    //   } else {
    // $("#splash").css("display","none")
    //     // 2回目以降は動かないようにする
    //   }
    // });


$('.c-slider').slick({
		fade:true,//切り替えをフェードで行う。初期値はfalse。
		autoplay: true,//自動的に動き出すか。
		autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
		speed:1000,//スライドの動きのスピード。初期値は300。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		slidesToShow: 1,//スライドを画面に3枚見せる
		slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
		arrows: true,//左右の矢印あり
		prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
		nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
		dots: true,//下部ドットナビゲーションの表示
    dotsClass: "slide-dots",
        pauseOnFocus: false,//フォーカスで一時停止を無効
        pauseOnHover: false,//マウスホバーで一時停止を無効
        pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});
//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.c-slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
    $('.c-slider').slick('slickPlay');
});
