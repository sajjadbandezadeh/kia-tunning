const data = [
    {
        id: 1,
        place:'Saipa Corp',
        title:'Pride',
        title2:'Hatchback',
        description:'The Pride 132, also known as the Saba, is a compact hatchback produced in Iran, primarily by the Iran Khodro Company. It’s an evolution of the original Pride model, known for its straightforward and practical design.\n',
        image:'https://cdn.asriran.com/files/fa/news/1403/7/17/1970202_674.jpg'
    },
    {
        id: 2,
        place:'IKCO',
        title:'Samand',
        title2:'Khazar LX',
        description:'The car typically comes with a range of engine options, including various 1.6 to 2.0-liter four-cylinder engines, focusing on fuel efficiency and reliability.',
        image:'https://car-images.bauersecure.com/wp-images/12521/ikco_samand_06.jpg'
    },
    {
        id: 3,
        place:'IKCO',
        title:'The Peugeot',
        title2:'206 (Type 2)',
        description:'The Peugeot 206, particularly the Iranian edition often referred to as the "Peugeot 206 Type 2," was produced under license by Iran Khodro, one of the largest automobile manufacturers in Iran. This model became quite popular in the Iranian market, known for its compact size, efficiency, and modern design',
        image:'https://www.escuderia.com/wp-content/uploads/2024/09/Peugeot-206-SW-GTi.jpg'
    },
    {
        id: 4,
        place:'IKCO',
        title:'The Peugeot',
        title2:'405',
        description:'The Peugeot 405 was introduced globally in 1987 in Europe and became one of Peugeot\'s most popular models. In Iran, it was produced by Iran Khodro (IKCO) starting in the early 1990s.',
        image:'https://wallpaperaccess.com/full/4137377.jpg'
    },
    {
        id: 5,
        place:'IKCO',
        title:'The Peugeot',
        title2:'Peugeot Pars',
        description:'The Peugeot Pars is typically equipped with a 1.6L four-cylinder engine, producing around 100 horsepower. Some versions may also include updated engine options to enhance performance and efficiency.\n',
        image:'https://wallpaperaccess.com/full/9888069.jpg'
    },
    {
        id: 6,
        place:'Mazda',
        title:'323',
        title2:'',
        description:'The Mazda 323 typically came with a range of four-cylinder engines, with displacements often between 1.6L and 2.0L, offering a balance of performance and fuel efficiency.\n',
        image:'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_default/v1/editorial/2002_Mazda_323.jpg'
    },
]

const _ = (id)=>document.getElementById(id)
const cards = data.map((i, index)=>`<div class="card" id="card${index}" style="background-image:url(${i.image})"  ></div>`).join('')



const cardContents = data.map((i, index)=>`<div class="card-content" id="card-content-${index}">
<div class="content-start"></div>
<div class="content-place">${i.place}</div>
<div class="content-title-1">${i.title}</div>
<div class="content-title-2">${i.title2}</div>

</div>`).join('')


const sildeNumbers = data.map((_, index)=>`<div class="item" id="slide-item-${index}" >${index+1}</div>`).join('')
_('demo').innerHTML =  cards + cardContents
_('slide-numbers').innerHTML =  sildeNumbers


const range = (n) =>
  Array(n)
    .fill(0)
    .map((i, j) => i + j);
const set = gsap.set;

function getCard(index) {
  return `#card${index}`;
}
function getCardContent(index) {
  return `#card-content-${index}`;
}
function getSliderItem(index) {
  return `#slide-item-${index}`;
}

function animate(target, duration, properties) {
  return new Promise((resolve) => {
    gsap.to(target, {
      ...properties,
      duration: duration,
      onComplete: resolve,
    });
  });
}

let order = [0, 1, 2, 3, 4, 5];
let detailsEven = true;

let offsetTop = 200;
let offsetLeft = 700;
let cardWidth = 200;
let cardHeight = 300;
let gap = 40;
let numberSize = 50;
const ease = "sine.inOut";

function init() {
  const [active, ...rest] = order;
  const detailsActive = detailsEven ? "#details-even" : "#details-odd";
  const detailsInactive = detailsEven ? "#details-odd" : "#details-even";
  const { innerHeight: height, innerWidth: width } = window;
  offsetTop = height - 430;
  offsetLeft = width - 830;

  gsap.set("#pagination", {
    top: offsetTop + 330,
    left: offsetLeft,
    y: 200,
    opacity: 0,
    zIndex: 60,
  });
  gsap.set("nav", { y: -200, opacity: 0 });

  gsap.set(getCard(active), {
    x: 0,
    y: 0,
    width: window.innerWidth,
    height: window.innerHeight,
  });
  gsap.set(getCardContent(active), { x: 0, y: 0, opacity: 0 });
  gsap.set(detailsActive, { opacity: 0, zIndex: 22, x: -200 });
  gsap.set(detailsInactive, { opacity: 0, zIndex: 12 });
  gsap.set(`${detailsInactive} .text`, { y: 100 });
  gsap.set(`${detailsInactive} .title-1`, { y: 100 });
  gsap.set(`${detailsInactive} .title-2`, { y: 100 });
  gsap.set(`${detailsInactive} .desc`, { y: 50 });
  gsap.set(`${detailsInactive} .cta`, { y: 60 });

  gsap.set(".progress-sub-foreground", {
    width: 500 * (1 / order.length) * (active + 1),
  });

  rest.forEach((i, index) => {
    gsap.set(getCard(i), {
      x: offsetLeft + 400 + index * (cardWidth + gap),
      y: offsetTop,
      width: cardWidth,
      height: cardHeight,
      zIndex: 30,
      borderRadius: 10,
    });
    gsap.set(getCardContent(i), {
      x: offsetLeft + 400 + index * (cardWidth + gap),
      zIndex: 40,
      y: offsetTop + cardHeight - 100,
    });
    gsap.set(getSliderItem(i), { x: (index + 1) * numberSize });
  });

  gsap.set(".indicator", { x: -window.innerWidth });

  const startDelay = 0.6;

  gsap.to(".cover", {
    x: width + 400,
    delay: 0.5,
    ease,
    onComplete: () => {
      setTimeout(() => {
        loop();
      }, 500);
    },
  });
  rest.forEach((i, index) => {
    gsap.to(getCard(i), {
      x: offsetLeft + index * (cardWidth + gap),
      zIndex: 30,
      delay: 0.05 * index,
      ease,
      delay: startDelay,
    });
    gsap.to(getCardContent(i), {
      x: offsetLeft + index * (cardWidth + gap),
      zIndex: 40,
      delay: 0.05 * index,
      ease,
      delay: startDelay,
    });
  });
  gsap.to("#pagination", { y: 0, opacity: 1, ease, delay: startDelay });
  gsap.to("nav", { y: 0, opacity: 1, ease, delay: startDelay });
  gsap.to(detailsActive, { opacity: 1, x: 0, ease, delay: startDelay });
}

let clicks = 0;

function step() {
  return new Promise((resolve) => {
    order.push(order.shift());
    detailsEven = !detailsEven;

    const detailsActive = detailsEven ? "#details-even" : "#details-odd";
    const detailsInactive = detailsEven ? "#details-odd" : "#details-even";

    document.querySelector(`${detailsActive} .place-box .text`).textContent =
      data[order[0]].place;
    document.querySelector(`${detailsActive} .title-1`).textContent =
      data[order[0]].title;
    document.querySelector(`${detailsActive} .title-2`).textContent =
      data[order[0]].title2;
    document.querySelector(`${detailsActive} .desc`).textContent =
      data[order[0]].description;
    document.querySelector(`${detailsActive} .iddata`).textContent =
      data[order[0]].id;
    document.querySelector(`${detailsActive} .img-bg`).textContent =
      data[order[0]].image;
    document.getElementById("img-bg").value = data[order[0]].image;
    document.getElementById("iddata").value = data[order[0]].id;
    // if (document.querySelector(`${detailsActive} .cta`)) {
    //     document.querySelector(`${detailsActive} .cta`).href = "cars/" + data[order[0]].id;
    // } else {
    //     document.querySelector(`${detailsActive} .ctao`).href = "cars/" + data[order[0]].id;
    // }
    gsap.set(detailsActive, { zIndex: 22 });
    gsap.to(detailsActive, { opacity: 1, delay: 0.4, ease });
    gsap.to(`${detailsActive} .text`, {
      y: 0,
      delay: 0.1,
      duration: 0.7,
      ease,
    });
    gsap.to(`${detailsActive} .title-1`, {
      y: 0,
      delay: 0.15,
      duration: 0.7,
      ease,
    });
    gsap.to(`${detailsActive} .title-2`, {
      y: 0,
      delay: 0.15,
      duration: 0.7,
      ease,
    });
    gsap.to(`${detailsActive} .desc`, {
      y: 0,
      delay: 0.3,
      duration: 0.4,
      ease,
    });
    gsap.to(`${detailsActive} .cta`, {
      y: 0,
      delay: 0.35,
      duration: 0.4,
      onComplete: resolve,
      ease,
    });
    gsap.set(detailsInactive, { zIndex: 12 });

    const [active, ...rest] = order;
    const prv = rest[rest.length - 1];

    gsap.set(getCard(prv), { zIndex: 10 });
    gsap.set(getCard(active), { zIndex: 20 });
    gsap.to(getCard(prv), { scale: 1.5, ease });

    gsap.to(getCardContent(active), {
      y: offsetTop + cardHeight - 10,
      opacity: 0,
      duration: 0.3,
      ease,
    });
    gsap.to(getSliderItem(active), { x: 0, ease });
    gsap.to(getSliderItem(prv), { x: -numberSize, ease });
    gsap.to(".progress-sub-foreground", {
      width: 500 * (1 / order.length) * (active + 1),
      ease,
    });

    gsap.to(getCard(active), {
      x: 0,
      y: 0,
      ease,
      width: window.innerWidth,
      height: window.innerHeight,
      borderRadius: 0,
      onComplete: () => {
        const xNew = offsetLeft + (rest.length - 1) * (cardWidth + gap);
        gsap.set(getCard(prv), {
          x: xNew,
          y: offsetTop,
          width: cardWidth,
          height: cardHeight,
          zIndex: 30,
          borderRadius: 10,
          scale: 1,
        });

        gsap.set(getCardContent(prv), {
          x: xNew,
          y: offsetTop + cardHeight - 100,
          opacity: 1,
          zIndex: 40,
        });
        gsap.set(getSliderItem(prv), { x: rest.length * numberSize });

        gsap.set(detailsInactive, { opacity: 0 });
        gsap.set(`${detailsInactive} .text`, { y: 100 });
        gsap.set(`${detailsInactive} .title-1`, { y: 100 });
        gsap.set(`${detailsInactive} .title-2`, { y: 100 });
        gsap.set(`${detailsInactive} .desc`, { y: 50 });
        gsap.set(`${detailsInactive} .cta`, { y: 60 });
        clicks -= 1;
        if (clicks > 0) {
          step();
        }
      },
    });

    rest.forEach((i, index) => {
      if (i !== prv) {
        const xNew = offsetLeft + index * (cardWidth + gap);
        gsap.set(getCard(i), { zIndex: 30 });
        gsap.to(getCard(i), {
          x: xNew,
          y: offsetTop,
          width: cardWidth,
          height: cardHeight,
          ease,
          delay: 0.1 * (index + 1),
        });

        gsap.to(getCardContent(i), {
          x: xNew,
          y: offsetTop + cardHeight - 100,
          opacity: 1,
          zIndex: 40,
          ease,
          delay: 0.1 * (index + 1),
        });
        gsap.to(getSliderItem(i), { x: (index + 1) * numberSize, ease });
      }
    });
  });
}

async function loop() {
  // await animate(".indicator", 2, { x: 0 });
  // await animate(".indicator", 0.8, { x: window.innerWidth, delay: 0.3 });
  // set(".indicator", { x: -window.innerWidth });
  // await step();
  // loop();
}

async function loadImage(src) {
  return new Promise((resolve, reject) => {
    let img = new Image();
    img.onload = () => resolve(img);
    img.onerror = reject;
    img.src = src;
  });
}

async function loadImages() {
  const promises = data.map(({ image }) => loadImage(image));
  return Promise.all(promises);
}

async function start() {
  try {
    await loadImages();
    init();
  } catch (error) {
    console.error("One or more images failed to load", error);
  }
}

start()


$ = function (id) {
    return document.getElementById(id);
};
var carHp, carTorque, carAccelerate, carTopSpeed;
function show(id) {
    $(id).style.display = "block";
    resetCheckboxes();
    document.getElementById("cardetail_pic").src = document.getElementById("img-bg").value;
    const carId = document.getElementById("iddata").value;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("loading").style.display = "none";
        if (this.status == 200) {
            const carData = JSON.parse(this.responseText);
            carHp = carData.hp;
            carTorque = carData.torque;
            carAccelerate = carData.accelerate;
            carTopSpeed = carData.top_speed;
            document.getElementById("car-name").innerText = carData.name;
            document.getElementById("car-engine").innerText = `${carData.engine} سیلندر`;
            document.getElementById("car-engine-size").innerText = `${carData.engine_size} لیتر`;
            document.getElementById("car-gear").innerText = `${carData.gear} سرعته`;
            document.getElementById("car-hp").innerText = carData.hp;
            document.getElementById("car-torque").innerText = carData.torque;
            document.getElementById("car-accelerate").innerText = carData.accelerate;
            document.getElementById("car-top-speed").innerText = carData.top_speed;
        } else {
            console.error("خطا در بارگذاری داده‌ها");
        }
    };

    // نمایش لودینگ
    document.getElementById("loading").style.display = "block";

    // ارسال درخواست
    xhttp.open("GET", "car/" + carId);
    xhttp.send();

    console.log(document.getElementById("img-bg").value);
    console.log(document.getElementById("iddata").value);
}
function hide(id) {
    $(id).style.display = "none";
}

function showOrder() {
    $('orders2').style.display = "block";
}
function hideOrder() {
    $('orders2').style.display = "none";
}
