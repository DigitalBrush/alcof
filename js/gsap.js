window.addEventListener("load", function (e) {
	const masterDuration = 1.5;
	// show page after animations are loaded
	TweenMax.to("body", 1, {visibility: 'visible'});

	gsap.registerPlugin(ScrollTrigger);

	gsap.from("#hero-header-img", {
		y: -400,
		duration: masterDuration,
		scrollTrigger: {
			trigger: "#hero-header-img",
			toggleActions: "restart reverse restart none",
		},
	});

	gsap.from("p", {
		opacity: 0,
		y: 100,
		duration: masterDuration,
		scrollTrigger: {
			trigger: "p",
			toggleActions: "restart reverse restart none",
		},
	});

	// ScrollTrigger.create({
	// 	trigger: "#hero-header-img",
	// 	start: "top top",
	// 	endTrigger: "#otherID",
	// 	end: "bottom 50%+=100px",
	// 	onToggle: self => console.log("toggled, isActive:", self.isActive),
	// 	onUpdate: self => {
	// 		console.log("progress:", self.progress.toFixed(3), "direction:", self.direction, "velocity", self.getVelocity());
	// 	}
	// });


	const animateSliderImage = () => {
		const sliderTimeline = new TimelineMax();
		const sliderImage = document.getElementById("hero-header-img");

		// sliderTimeline
		// 	.fromTo(sliderImage,
		// 		1,
		// 		{
		// 			y: -200,
		// 			opacity: 0,
		// 		},
		// 		{
		// 			y: 0,
		// 			opacity: 1,
		// 		},
		// 	);

		// TweenMax.from("#hero-header-img", 2, {y: -400, scale: .9});
	}
	animateSliderImage();

}, false);
