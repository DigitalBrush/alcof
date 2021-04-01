window.addEventListener("load", function (e) {
	const animateSliderImage = () => {
		const sliderTimeline = new TimelineMax();
		const sliderImage = document.getElementById("hero-header-img");

		sliderTimeline
			.fromTo(sliderImage,
				1,
				{
					y: -200,
					opacity: 0,
				},
				{
					y: 0,
					opacity: 1,
				},
			);
	}
	animateSliderImage();

}, false);
