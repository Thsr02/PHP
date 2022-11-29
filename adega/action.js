var down = $("#head, #screw");

function rotate() {
  var tl = new TimelineMax();

  tl.add("begin");
  tl.to(
    "#arm",
    1.5,
    {
      transformOrigin: "top right",
      rotation: 160,
      repeat: -1,
      yoyo: true,
      ease: Linear.easeNone
    },
    "begin"
  );
  tl.to(
    "#arm1",
    1.5,
    {
      transformOrigin: "top left",
      rotation: -160,
      repeat: -1,
      yoyo: true,
      ease: Linear.easeNone
    },
    "begin"
  );
  tl.to(
    "#gear",
    1.5,
    {
      transformOrigin: "50% 50%",
      rotation: 160,
      repeat: -1,
      yoyo: true,
      ease: Linear.easeNone
    },
    "begin"
  );
  tl.to(
    "#gear1",
    1.5,
    {
      transformOrigin: "50% 50%",
      rotation: -160,
      repeat: -1,
      yoyo: true,
      ease: Linear.easeNone
    },
    "begin"
  );
  tl.to(
    down,
    1.5,
    {
      y: 18,
      repeat: -1,
      yoyo: true
    },
    "begin"
  );
  tl.to(
    "#wine",
    2.4,
    {
      y: 10,
      repeat: -1,
      yoyo: true
    },
    "begin"
  );
  tl.to(
    ".bubble",
    1,
    {
      opacity: 1,
      y: -25,
      repeat: -1,
      ease: SlowMo.ease.config(0.7, 0.1, false)
    },
    "begin"
  );
  tl.to(
    ".bubble2",
    1.5,
    {
      opacity: 1,
      y: -30,
      repeat: -1,
      ease: SlowMo.ease.config(0.7, 0.1, false)
    },
    "begin+.2"
  );
  tl.to(
    ".bubble3",
    0.8,
    {
      opacity: 1,
      y: -35,
      repeat: -1,
      ease: SlowMo.ease.config(0.7, 0.1, false)
    },
    "begin+.5"
  );
  tl.to(
    ".wave",
    1,
    {
      x: -20,
      y: 20,
      repeat: -1,
      yoyo: true,
      ease: Linear.easeNone
    },
    "begin+.5"
  );
  tl.to(
    ".wave2",
    1.7,
    {
      x: 20,
      y: -30,
      repeat: -1,
      yoyo: true,
      ease: Linear.easeNone
    },
    "begin+.5"
  );
  tl.to(
    ".wave3",
    1.5,
    {
      x: 40,
      y: -50,
      repeat: -1,
      yoyo: true,
      ease: Linear.easeNone
    },
    "begin+.5"
  );

  return tl;
}

var master = new TimelineMax();
master.add(rotate());
