function load(){
    const slideShow = document.querySelector('.slides');
const slides = document.querySelectorAll('.slides img');

//Buttons
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//Counter
let counter = 1;
const size = slides[0].clientWidth;

// slideShow.style.transform = 'translateX(' + (-size * counter) +  'px)';

//Button Listeners

nextBtn.addEventListener('click',function nextSlide(){
    const size = slides[0].clientWidth;
    if(counter >= slides.length - 1) return;
    slideShow.style.transition = "transform 0.4s ease-in-out";
    counter++;
    slideShow.style.transform = 'translateX(' + (-size * counter) +  'px)';
});

prevBtn.addEventListener('click',function prevSlide(){
    const size = slides[0].clientWidth;
    if(counter <= 0) return;
    slideShow.style.transition = "transform 0.4s ease-in-out";
    counter--;
    slideShow.style.transform = 'translateX(' + (-size * counter) +  'px)';
});

slideShow.addEventListener('transitionend', () => {
    const size = slides[0].clientWidth;
    if(slides[counter].id === 'lastSlide'){
        slideShow.style.transition = "none";
        counter = slides.length - 2;
        slideShow.style.transform = 'translateX(' + (-size * counter) +  'px)';
    }
    if(slides[counter].id === 'firstSlide'){
        slideShow.style.transition = "none";
        counter = slides.length - counter;
        slideShow.style.transform = 'translateX(' + (-size * counter) +  'px)';
    }
});
};