// 新着情報ページ swiperスライド
window.addEventListener('DOMContentLoaded', function() {
	var relatedArticle = new Swiper('.swiper-container', {
		// pagination: {
		// 	el: '.swiper-pagination',
		// 	type: 'bullets',
		// 	clickable: true,
		// },
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		},
		loop: true,
		// 1画面で見えるスライド数を設定できます。
		slidesPerView: 3.2,
		slidesPerGroup: 3,// 一度に動かすスライドの枚数
		loopedSlides: 30,
		centeredSlides : false,// アクティブな画像を中央に表示
		spaceBetween: 20,
		// スライドの間隔を指定（単位：px）
		slideToClickedSlide: true,
		
		breakpoints: {
			414: {
				slidesPerView: 1,
				slidesPerGroup: 1,
				centeredSlides : true,// アクティブな画像を中央に表示
				spaceBetween: 10
			},
		},
	});
}, false);
