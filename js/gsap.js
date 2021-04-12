window.addEventListener("load", function (e) {
	gsap.defaults({
		// easy: "power3",
		ease: "power3.easeInOut",
		duration: 1.5,
	})
	gsap.registerPlugin(ScrollTrigger);

	ScrollTrigger.defaults({
		toggleActions: "restart reverse restart reset",
	});

	// show page after animations are loaded
	gsap.to("body", {visibility: 'visible'});

	const animateHeroHeaderImage = () => {
		const heroHeaderImageSelector = "#hero-header-img";
		const imageAnimation = gsap.from(heroHeaderImageSelector, {
			y: -400,
		});

		ScrollTrigger.create({
			trigger: heroHeaderImageSelector,
			animation: imageAnimation,
		});
	}

	const animateHeadings = () => {
		const headingSelectors = ["h1", "h2", "h3"];

		headingSelectors.forEach(headingSelector => {
			gsap.utils.toArray(headingSelector).forEach((heading, _) => {
				gsap.from(heading, {
					x: 100,
					opacity: 0,
					scrollTrigger: heading,
				})
			})
		})
	}

	const animateCardImages = () => {
		const imageSelectors = [".animated-slider-image", ".service-image"];

		imageSelectors.forEach(imageSelector => {
			gsap.utils.toArray(imageSelector).forEach((image, _) => {
				gsap.from(image, {
					x: -200,
					opacity: 0,
					scrollTrigger: image,
					stagger: 1,
				})
			})
		})
	}

	const animateCategoryImages = () => {
		const headingSelectors = [".animated-category-image", "about-img"];

		headingSelectors.forEach(headingSelector => {
			gsap.utils.toArray(headingSelector).forEach((heading, _) => {
				gsap.from(heading, {
					width: 0,
					opacity: 0,
					scrollTrigger: heading,
					stagger: 0.5,
				})
			})
		})
	}

	const animateParagraphs = () => {
		const paragraphSelector = "p";

		gsap.utils.toArray(paragraphSelector).forEach((paragraph, i) => {
			gsap.from(paragraph, {
				y: 100,
				opacity: 0,
				stagger: 0.02,
				scrollTrigger: paragraph,
			})
		})
	}

	const animateButtons = () => {
		const buttonSelector = ".btn";

		// gsap.utils.toArray(buttonSelector).forEach((button, _) => {
		// 	gsap.from(button, {
		// 		width: 0,
		// 		scrollTrigger: button,
		// 		textOverflow: "hidden",
		// 	});
		// })
	}

	const animatePageSections = () => {
		const sectionSelectors = [
			// ".page-section",
			"#wrapper-static-content",
		];
	}


	jQuery("#homeModal").on("hidden.bs.modal", () => {
		animateHeadings();
		animateParagraphs();
		animateButtons();
		animatePageSections();
		animateHeroHeaderImage();
		animateCardImages();
		animateCategoryImages();
	});

	// ScrollTrigger.batch("p", {
	// 	start: "top center",
	// 	onEnter: paragraph => gsap.from(paragraph, {y: 100, opacity: 0}),
	// 	onEnterBack: paragraph => gsap.from(paragraph, {y: 100, opacity: 0}),
	// 	// onLeaveBack: paragraph => gsap.to(paragraph, {y: 1, opacity: 1}),
	// 	// onLeave: paragraph => gsap.to(paragraph, {y: -100}),
	// })
}, false);
