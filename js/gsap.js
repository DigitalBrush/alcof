window.addEventListener("load", function (e) {
	gsap.defaults({
		// easy: "power3",
		ease: "power3.easeInOut",
		duration: 1.5,
	})
	gsap.registerPlugin(ScrollTrigger);

	ScrollTrigger.defaults({
		toggleActions: "restart pause resume reverse",
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
		// const paragraphAnimation = gsap.from(paragraphSelector, {
		// 	y: 100,
		// 	opacity: 0,
		// });
		//
		// ScrollTrigger.create({
		// 	trigger: paragraphSelector,
		// 	animation: paragraphAnimation,
		// });
	}

	const animateButtons = () => {
		const buttonSelector = ".btn";

		gsap.utils.toArray(buttonSelector).forEach((button, _) => {
			gsap.from(button, {
				width: 0,
				scrollTrigger: button,
				textOverflow: "hidden",
			});
		})
	}

	const animatePageSections = () => {
		const sectionSelectors = [".page-section"];

		sectionSelectors.forEach(sectionSelector => {
			gsap.utils.toArray(sectionSelector).forEach((section, i) => {
				ScrollTrigger.create({
					trigger: section,
				});
			});
		});
	}

	animateHeroHeaderImage();
	animateHeadings();
	animateParagraphs();
	animateButtons();
	animatePageSections();

	// ScrollTrigger.batch("p", {
	// 	start: "top center",
	// 	onEnter: paragraph => gsap.from(paragraph, {y: 100, opacity: 0}),
	// 	onEnterBack: paragraph => gsap.from(paragraph, {y: 100, opacity: 0}),
	// 	// onLeaveBack: paragraph => gsap.to(paragraph, {y: 1, opacity: 1}),
	// 	// onLeave: paragraph => gsap.to(paragraph, {y: -100}),
	// })
}, false);
