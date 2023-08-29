const circle = document.querySelector('.circle');
const rotateArrow = document.querySelector('.rotate-arrow');
let isMouseDown = false;
let startX, currentRotation = 0;
let rotateInterval;

const artifactImages = document.querySelectorAll('.circle img');

circle.addEventListener('mousedown', (e) => {
  isMouseDown = true;
  startX = e.clientX;
  artifactImages[0].classList.add('active');
});

circle.addEventListener('mouseup', () => {
  isMouseDown = false;
  artifactImages[0].classList.remove('active');
  clearInterval(rotateInterval);
  currentRotation %= 360;
});

circle.addEventListener('mousemove', (e) => {
  if (isMouseDown) {
    const moveX = e.clientX;
    const diffX = moveX - startX;
    startX = moveX;

    currentRotation += diffX;
    circle.style.transform = `rotateY(${currentRotation}deg)`;
  }
});

rotateArrow.addEventListener('mousedown', () => {
  rotateInterval = setInterval(() => {
    currentRotation += 1;
    circle.style.transform = `rotateY(${currentRotation}deg)`;
  }, 10);
});

rotateArrow.addEventListener('mouseup', () => {
  clearInterval(rotateInterval);
});

rotateArrow.addEventListener('mouseleave', () => {
  clearInterval(rotateInterval);
});

// Add event listener to each image in the circle
artifactImages.forEach((img, index) => {
  img.addEventListener('click', () => {
    currentRotation += index * 120;
    circle.style.transform = `rotateY(${currentRotation}deg)`;
  });
});
