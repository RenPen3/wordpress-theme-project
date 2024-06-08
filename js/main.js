

// // LOGO ANIMATION
// let logoTL = gsap.timeline();
// logoTL.fromTo
//   ('.logo',
//     {
//       x: -200,
//       opacity: 0,
//     },
//     {
//       x: 0,
//       opacity: 1,
//       duration: 1.7
//     }
//   );



// // NAV LINK ANIMATION
// let navLinkTL = gsap.timeline();
// navLinkTL.fromTo
//   ('.nav_item',
//     {
//       x: 300,
//       opacity: 0,
//     },
//     {
//       x: 0,
//       opacity: 1,
//       duration: 1,
//       stagger: .2
//     }
//   );

// // NAVBAR ANIMATION
// let navTL = gsap.timeline();
// navTL.fromTo
//   ('.container',
//     {
//       backgroundColor: "rgba(0, 0, 0, 0)",
//       backdropFilter: "blur(5px)",
//       // backgroundColor: "rgb(21,0,80)",
//       // backgroundColor: "linearGradient(90deg, rgba(21,0,80,0) 0%, rgba(63,0,113,0) 50%, rgba(251,37,118,0) 100%)"

//     },
//     {
//       backgroundColor: "rgba(0, 0, 0, .9)",
//       // backdropFilter: "blur(10px)",
//       // backgroundColor: "linearGradient(90deg, rgba(21,0,80,1) 0%, rgba(63,0,113,1) 50%, rgba(251,37,118,1) 100%)",
//       duration: .4
//     }
//   )
//   // .fromTo
//   // ('.container .navbar .logo',
//   //   {
//   //     scale: 1
//   //   },
//   //   {
//   //     scale: .9
//   //   }
//   // )
//   ;

// let homeController = new ScrollMagic.Controller();

// let navScene = new ScrollMagic.Scene({
//   triggerElement: "#services",
//   triggerHook: 1,
//   reverse: true,
//   offset: 100,
//   duration: document.querySelector("#services").offsetHeight
// })
//   .setTween(navTL)
//   // .addIndicators()
//   .addTo(homeController);

// // SMALL CIRCLES ANIMATION
// // let circleSmTL = gsap.timeline();
// // circleSmTL.fromTo
// //   ('.circle3',
// //     {
// //       // y: 300,
// //       // opacity: 0,
// //       opacity: 0,
// //     },
// //     {
// //       opacity: 1,
// //       duration: 2,
// //       // y: 0
// //     },
// //     ">-.1"
// //   ).fromTo
// //   ('.circle2',
// //     {
// //       x: 300,
// //       opacity: 0,
// //     },
// //     {
// //       opacity: 1,
// //       duration: 2,
// //       x: 0
// //     },
// //     ">-1.8"

// //   ).fromTo
// //   ('.circle1',
// //     {

// //       opacity: 0,
// //     },
// //     {
// //       opacity: 1,
// //       duration: 2,
// //     },
// //     ">-.5"

// //   );

// // BIG CIRCLES ANIMATION
// // let circleBgTL = gsap.timeline();
// // circleBgTL.fromTo
// //   ('.circle6',
// //     {
// //       x: -300,
// //       opacity: 0,
// //     },
// //     {
// //       opacity: 1,
// //       duration: 2,
// //       // repeat: -1,
// //       // ease: "bounce.out",
// //       x: 0
// //     },
// //     ">-.1.8"
// //   ).fromTo
// //   ('.circle5',
// //     {
// //       y: -500,
// //       opacity: 0,
// //     },
// //     {
// //       opacity: 1,
// //       duration: 2,
// //       // ease: "bounce.out",
// //       y: 0
// //     },
// //     ">-1.8"

// //   ).fromTo
// //   ('.circle4',
// //     {
// //       opacity: 0,
// //     },
// //     {
// //       opacity: 1,
// //       duration: 2,
// //       // ease: "bounce.out",
// //       // repeat: -1
// //     },
// //     ">-.5"

// //   );

// // SUB MENU
// let menuTL = gsap.timeline({
//   paused: true
// });
// menuTL.fromTo
//   ('#mobile_menu',
//     {
//       x: "100%",
//       opacity: 0,
//     },
//     {
//       x: 0,
//       opacity: 1,
//       duration: .5,
//     }
//   ).fromTo
//   ('#mobile_menu_list li',
//     {
//       x: "100%",
//       opacity: 0,
//     },
//     {
//       x: 0,
//       opacity: 1,
//       duration: .5,
//       stagger: .1
//     },
//     ">-.4"
//   ).fromTo
//   ('#icons',
//     {
//       x: "100%",
//       opacity: 0,
//     },
//     {
//       x: 0,
//       opacity: 1,
//       duration: .5,
//       stagger: .1
//     },
//     ">-.5"
//   );

// const ham = document.querySelector('.fa-bars');
// const x = document.querySelector('.fa-x');
// const menu = document.getElementById('mobile_menu');

// ham.addEventListener('click', () => {
//   menuTL.play();
//   x.style.display = 'block';
//   ham.style.display = 'none';
//   menu.classList.toggle('active');
// });

// x.addEventListener('click', () => {
//   menuTL.reverse();
//   ham.style.display = 'block';
//   x.style.display = 'none';
//   menu.classList.toggle('active');
// });



// // CARD BOXES
// // let cardBoxTL = gsap.timeline();
// // cardBoxTL.fromTo
// //   ('.cards__content-box',
// //     {
// //       y: "100%",
// //       opacity: 0.5,
// //     },
// //     {
// //       y: 0,
// //       opacity: 1,
// //       duration: 1,
// //     }
// //   );

// // CARD STRIPES
// // let cardStripesTL = gsap.timeline();
// // cardStripesTL.fromTo
// //   ('#stripe1',
// //     {
// //       x: "-100%",
// //     },
// //     {
// //       x: 0,
// //       duration: .5,
// //       delay: 1
// //     }
// //   ).fromTo
// //   ('#stripe2',
// //     {
// //       x: "-100%",
// //     },
// //     {
// //       x: 0,
// //       duration: .5,
// //     }
// //   ).fromTo
// //   ('#stripe3',
// //     {
// //       x: "-100%",
// //     },
// //     {
// //       x: 0,
// //       duration: .5,
// //     }
// //   );

// // let cardScene = new ScrollMagic.Scene({
// //   triggerElement: "#services",
// //   triggerHook: 1,
// //   reverse: false,
// //   offset: 40,
// //   duration: document.querySelector("#services").offsetHeight
// // })

// //   .setTween(cardBoxTL)
// //   .addIndicators()
// //   .addTo(homeController);

// // let cardStripeScene = new ScrollMagic.Scene({
// //   triggerElement: "#services",
// //   triggerHook: 1,
// //   reverse: true,
// //   offset: 50,
// //   duration: document.querySelector("#services").offsetHeight
// // })

// //   .setTween(cardStripesTL)
// //   .addIndicators()
// //   .addTo(homeController);






