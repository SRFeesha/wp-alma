var tl =          gsap.timeline();
var tlMaster =    gsap.timeline();
var tlLogo =      gsap.timeline().pause();
var controller =  new ScrollMagic.Controller();
var logoWhole =   document.querySelectorAll(".logo-alma-svg")[0];
var logoMark =    document.querySelectorAll(".logo-alma-svg .logotype")[0]; 

function revealText2() {
  let tl = gsap
    .timeline()
    .fromTo(
      '#headline h1',
      0.5,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0, autoAlpha: 1 },
    )
    .fromTo(
      '#headline h3',
      0.5,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0, autoAlpha: 1 },
      "-=.2"
    )
    .fromTo(
      "#headline .primary-button",
      0.5,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0, autoAlpha: 1 },
      "-=.2"
    )
    .fromTo(
      "#trippy-line path",
      10,
      { strokeDashoffset: 4950 },
      { strokeDashoffset: 0 },
      '+=1.5'
    );

  return tl;
}

function revealText() {
  let tl = gsap
    .timeline()
    .fromTo(
      "#trippy-line path",
      10,
      { strokeDashoffset: 4950 },
      { strokeDashoffset: 0 }
    )
    .fromTo(
      '#headline h1',
      0.5,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0, autoAlpha: 1 },
      "-=9"
    )
    .fromTo(
      '#headline h3',
      0.5,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0, autoAlpha: 1 },
      "-=8.8"
    )
    .fromTo(
      "#headline .primary-button",
      0.5,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0, autoAlpha: 1 },
      "-=8.4"
    );

  return tl;
}

function comeLavoriamo() {
  tl2.fromTo(
    "#come-lavoriamo p",
    0.5,
    { opacity: 0, y: "100px" },
    { opacity: 1, y: 0, stagger: { amount: 0.2 } }
  );
}

function staggerElements(els) {
  tl2.fromTo(
    els,
    0.5,
    { opacity: 0, y: "100px" },
    { opacity: 1, y: 0, stagger: { amount: 0.2 } }
  );
}

function mScroll($trigger, $target, duration = 0) {
  let action = gsap
    .timeline()
    .fromTo(
      $target,
      0.7,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0, ease: "circ.out", stagger: { amount: 0.3 } }
    );

  new ScrollMagic.Scene({
    triggerElement: $trigger,
    duration: duration,
    offset: -200,
    // triggerHook: 0.8
  })
    .setTween(action)
    // .addIndicators()
    .addTo(controller);
}

function mScroll2($trigger, $target, duration = 0) {
  let action = gsap
    .timeline()
    .fromTo($target, 0.7, { strokeDashoffset: 4950 }, { strokeDashoffset: 0 });

  new ScrollMagic.Scene({
    triggerElement: $trigger,
    // duration: duration,
    // offset: -200,
    // triggerHook: 0.8
  })
    .setTween(action)
    // .addIndicators({
    //   name: "cta",
    // })
    .addTo(controller);
}

function parallax($trigger, $target) {
  let action = gsap
    .timeline()
    .fromTo(
      $target,
      1,
      { opacity: 0.6 },
      // { y: -300, opacity: 0.3, ease: Linear.easeNone }
      { y: -100, opacity: 0.3, ease: Linear.easeNone }
    );

  new ScrollMagic.Scene({
    triggerElement: $trigger,
    duration: "100%",
    // offset: ,
    triggerHook: 0.9,
  })
    .setTween(action)
    // .addIndicators()
    .addTo(controller);
}

function cardAppear($trigger, $target) {
  let action = gsap.timeline().fromTo(
    $target,
    0.1,
    { opacity: 0, y: "+=100" },
    {
      opacity: 1,
      y: "-=100",
      ease: "Quad.easeOut",
      stagger: 0.2,
      autoAlpha: 1,
    }
  );

  new ScrollMagic.Scene({
    triggerElement: $trigger,
    duration: 0,
    triggerHook: 0.8,
  })
    .setTween(action)
    // .addIndicators({name: "Card appear",})
    .addTo(controller);
}

function animateBlogCards() {
  // check this out 
  // https://greensock.com/forums/topic/20895-gsap-scrollmagic-delay/
  let cards = document.querySelectorAll(".blog-post-grid .card-link");

  cards.forEach(function (cardLink, i) {
    let even = (i % 2) / 10;
    let action = gsap
      .timeline()
      .fromTo(
        cardLink,
        0.2,
        { opacity: 0, y: "100px" },
        { opacity: 1, y: 0, ease: "Quad.easeOut", stagger: "+=" + even }
      );

    new ScrollMagic.Scene({
      triggerElement: cardLink,
      duration: 0,
      triggerHook: 0.85,
      reverse: true,
    })
      .setTween(action)
      // .addIndicators({
      //   name: "Card appear",
      // })
      .addTo(controller);
  });
}

function animateCircles() {
  gsap.to("#ellipses path", 5, {
    scale: 0.8,
    opacity: 0.5,
    ease: "Quad.easeInOut",
    staggers: 0.1,
    repeat: -1,
    yoyo: true,
    transformOrigin: "50% 50%",
    svgOrigin: "300 297",
  });
}

function services() {
  // var services = gsap.utils.toArray(document.getElementsByClassName('service'));
  // var serviceIcons = CSSRulePlugin.getRule(".service:before");
  // console.log(serviceIcons)
  // console.log(gsap.utils.toArray(serviceIcons));
  // services = document.getElementsByClassName('service');
  let services = gsap.utils.toArray(".service");
  console.log(services);

  let tltl = gsap
    .timeline
    // {defaults: {delay: 0.5}}
    ();
  // console.log(services);

  services.forEach(function (el, i) {
    serviceName = el.classList[2];
    console.log(i);
    let label = "." + serviceName + ":before";
    console.log(label);
    el.rule = CSSRulePlugin.getRule(label);
    console.log(el.rule);

    // tltl.fromTo(
    //   CSSRulePlugin.getRule(label),
    //   .5,
    //   {scale: 1},
    //   {scale: 2}
    // )
  });
  // tltl.to (
  //   serviceIcons,
  //   .5,
  //   {scale: 2}
  // )

  // tltl.fromTo(
  //   '.service',
  //   .5,
  //   {opacity: 0},
  //   {opacity: 1, stagger: .3, ease: Quad.easeInOut}
  // )
  // .fromTo(
  //   '#ellipses',
  //   5,
  //   { autoAlpha: .5},
  //   { autoAlpha: 1, scale: .9, opacity: .7, ease: 'Quad.easeInOut', staggers: .1, repeat: -1, yoyo: true, transformOrigin: '50% 50%', svgOrigin: '300 297'}
  // );

  // services.forEach( (el, i) => {

  // //   tltl.fromTo(
  // //     // el.querySelector('h3'),
  // //     CSSRulePlugin.getRule(el+":before"),
  // //     .5,
  // //     {opacity: 0, scale: 0},
  // //     {opacity: 1, scale: 1, stagger: .3},
  // //   )
  //   // .fromTo(
  //   //   services[i] + ' h3',
  //   //   .4,
  //   //   {opacity: 0, y: '+=100'},
  //   //   {opacity: 1, y: 0}
  //   // )
  //   // .fromTo(
  //   //   services[i] + ' p',
  //   //   .4,
  //   //   {opacity: 0, y: '+=100'},
  //   //   {opacity: 1, y: 0}
  //   // ), '-=.1'
  // });
}

function menuAnimation() {
  let tl = gsap.timeline({ defaults: { duration: 0.2, ease: Quad.easeInOut } });

  tl.to("#masthead", 0, { autoAlpha: 1 })
    .fromTo(
      ".site-branding",
      1,
      { scale: 0.8 },
      { autoAlpha: 1, ease: Expo.easeOut, scale: 1 }
    )
    .fromTo(
      ".nav-menu .menu-item:not(:last-child)",
      { y: "-=3" },
      { autoAlpha: 1, stagger: 0.1, y: 0 },
      "-=.5"
    )
    .to(".nav-menu .menu-item:last-child", { autoAlpha: 1, delay: 0.2 });
  return tl;
}

function servicesAnimation() {
  tl = gsap
    .timeline()
    .fromTo(
      ".service",
      { y: "+=50" },
      { autoAlpha: 1, y: "-=50", stagger: 0.2 }
    )
    .to("#ellipses", 2, { autoAlpha: 1, opacity: 0.3, scale: 1.2 })
    .fromTo(
      "#ellipses path",
      8,
      { opacity: 0.3, scale: 1 },
      {
        stagger: 0.5,
        scale: 0.8,
        opacity: 0.9,
        ease: "Quad.easeInOut",
        repeat: -1,
        yoyo: true,
        transformOrigin: "50% 50%",
        svgOrigin: "300 297",
      }
    );

  return tl;
}

function strategy() {
  tl = gsap
    .timeline()
    .fromTo(
      ".skewed-rect p:not(:last-child)",
      { opacity: 0, y: "+=30" },
      { opacity: 1, y: 0, stagger: 0.2, autoAlpha: 1 }
    );

  tl2 = gsap
    .timeline()
    .fromTo(
      ".skewed-rect p:last-child",
      { opacity: 0, y: "+=30" },
      { opacity: 1, y: 0, stagger: 0.2, autoAlpha: 1 }
    );

  new ScrollMagic.Scene({
    triggerElement: ".skewed-rect",
    duration: 0,
    triggerHook: 0.8,
  })
    .setTween(tl)
    // .addIndicators()
    .addTo(controller);

  new ScrollMagic.Scene({
    triggerElement: ".skewed-rect p:last-child",
    triggerHook: 0.8,
  })
    .setTween(tl2)
    // .addIndicators()
    .addTo(controller);
}

function approach() {
  tl = gsap
    .timeline({defaults: {ease: Quad.easeInOut}})
    .fromTo(
      ".approach .wp-block-column:nth-child(2) div",
      .2,
      { opacity: 0, y: "+=30" },
      { opacity: 1, y: 0, stagger: 0.2, autoAlpha: 1 }
    )
    .fromTo(
      "#layers line",
      .2,
      { strokeDasharray: '0 300', strokeWidth: 0},
      { strokeDasharray: '1 9', strokeWidth: 2, stagger: -.2, autoAlpha: 1},
      "-=.9"
    )

  new ScrollMagic.Scene({
    triggerElement: ".approach",
    duration: 0,
    triggerHook: 0.2,
  })
    .setTween(tl)
    // .addIndicators()
    .addTo(controller);
}

function moveBlob() {
  let tl=gsap.timeline()

  tl.to(
    "#blob, #blob-big",
    10,
    {rotation: 50, x: 30, y: -45, scale: .8, yoyo: true, repeat: -1, ease: Quad.easeInOut}
  )

  return tl;
}

function moveLineCTA() {
  let tl = gsap.timeline();
  tl.fromTo(
    "#trippy-line-cta path",
    1,
    { strokeDashoffset: 4900 },
    { strokeDashoffset: 4900 - 2400 }
  );

  new ScrollMagic.Scene({
    triggerElement: ".site-footer",
    duration: 1000,
    offset: -600,
    triggerHook: 0.7,
  })
    .setTween(tl)
    // .addIndicators({
    //   name: "line CTA",
    // })
    .addTo(controller);
}

function urlIncludes(term) {
  return window.location.href.includes(term);
}

function spinLogo(){
  // let tl = gsap.timeline();
      // logoType = document.querySelectorAll(".logo-alma-svg .logotype")[0];

  tlLogo.to(logoMark, 0.3, {
    rotation: 360,
    transformOrigin: "50% 50%",
    ease: Quad.easeInOut,
  });
  //.to(logoType, 0.1, { skewX: -10, ease: Quad.easeIn }, "-=.3");

  // return tlLogo;
}

document.addEventListener("DOMContentLoaded", function(event) {
  window.addEventListener("load", function () {
    cardAppear(".card", ".card");
    spinLogo();

    switch(true){
      case urlIncludes("cosa-facciamo"):
      case urlIncludes("what-we-do"):
        moveLineCTA();
        strategy();
        tlMaster.add(servicesAnimation(), "services");
        break;

      case urlIncludes("chi-siamo"): 
      case urlIncludes("who-we-are"):
        moveLineCTA();
        approach();
        tlMaster.add(moveBlob(), "blob");
        break;

      case urlIncludes("contattaci"): 
      case urlIncludes("contact-us"):
        console.log("contattaci")
        break;

      case urlIncludes("progetti"):
      case urlIncludes("projects"):
        break;

      case urlIncludes("blog"):
        // animateBlogCards();
        break;

      default:
        mScroll("#come-lavoriamo", "#come-lavoriamo p");
        mScroll("#Cosa-facciamo", "#Cosa-facciamo li");
        // parallax("#Cosa-facciamo", "#kandiskij");
        moveLineCTA();
        tlMaster.add(menuAnimation(), "menu").add(revealText2(), "-=.5");
        break;
    }

    logoWhole.addEventListener("mouseenter", function () {
      tlLogo.play();
    });
    
    logoWhole.addEventListener("mouseleave", function () {
      tlLogo.reverse();
    });
  })
});

