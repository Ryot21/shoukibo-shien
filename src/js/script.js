
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

