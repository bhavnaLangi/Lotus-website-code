const breakpoint = 768;
let last = $(window).width() > breakpoint;
let tl = gsap.timeline();

$(window).on('resize', function () {
  const isLarger = $(window).width() > breakpoint;

  if (last !== isLarger) {
    if (isLarger) {
      console.log('Switch to 3 cols');
      flyingImages(3);
    } else {
      console.log('Switch to 2 cols');
      flyingImages(2);
    }
    last = isLarger;
  }
});

function flyingImages(cols) {
  tl.pause(0).kill(true);
  let triggers = ScrollTrigger.getAll();
  triggers.forEach(trigger => {
    if (trigger.trigger.classList.contains('item')) {
      trigger.kill();
    }
  });
  gsap.set('li', {clearProps: true});
  tl = gsap.timeline();
  console.log(tl);

  if (cols === 3) {
    console.log('Init GSAP for 3 cols');
    gsap.utils.toArray('li:nth-child(3n+1)').forEach((item) => {
      gsap.set(item, { x: '-50vw', autoAlpha: 0 });
      tl.to(item, {
        scrollTrigger: {
          trigger: item,
          start: 'top bottom',
          end: 'top center',
          scrub: true,
          markers: false,
          toggleActions: 'play reverse play reverse'
        },
        x: 0,
        autoAlpha: 1
      });
    });

    gsap.utils.toArray('li:nth-child(3n+2)').forEach((item) => {
      gsap.set(item, { y: '100%', autoAlpha: 0 });
      tl.to(item, {
        scrollTrigger: {
          trigger: item,
          start: 'top-=100% bottom',
          end: 'top-=100% center',
          scrub: true,
          markers: false,
          toggleActions: 'play reverse play reverse'
        },
        y: 0,
        autoAlpha: 1
      });
    });

    gsap.utils.toArray('li:nth-child(3n+3)').forEach((item) => {
      gsap.set(item, { x: '50vw', autoAlpha: 0 });
      tl.to(item, {
        scrollTrigger: {
          trigger: item,
          start: 'top bottom',
          end: 'top center',
          scrub: true,
          markers: false,
          toggleActions: 'play reverse play reverse'
        },
        x: 0,
        autoAlpha: 1
      });
    });
  } else {
    console.log('Init GSAP for 2 cols');
    gsap.utils.toArray('li:nth-child(2n+1)').forEach((item) => {
      gsap.set(item, { x: '-50vw', autoAlpha: 0 });
      tl.to(item, {
        scrollTrigger: {
          trigger: item,
          start: 'top bottom',
          end: 'top center',
          scrub: true,
          markers: false,
          toggleActions: 'play reverse play reverse'
        },
        x: 0,
        autoAlpha: 1
      });
    });

    gsap.utils.toArray('li:nth-child(2n+2)').forEach((item) => {
      gsap.set(item, { x: '50vw', autoAlpha: 0 });
      tl.to(item, {
        scrollTrigger: {
          trigger: item,
          start: 'top bottom',
          end: 'top center',
          scrub: true,
          markers: false,
          toggleActions: 'play reverse play reverse'
        },
        x: 0,
        autoAlpha: 1
      });
    });
  }
};

if ($(window).width() > breakpoint) {
  flyingImages(3);
} else {
  flyingImages(2);
}