var menu = document.querySelector('#menu')
var navbar = document.querySelector('.navbar')


menu.onclick = () => {
    navbar.classList.toggle('active')
}

let newsPosition = 0;
let popularPosition = 0;
const newsSlidesToShow = 6;
const popularSlidesToShow = 4;
const slidesToScroll = 1;
const container = document.querySelector('.container');
const newsTrack = document.querySelector('.news');
const popularTrack = document.querySelector('.popular');
const newsItems = document.querySelectorAll('.news li');
const popularItems = document.querySelectorAll('.popular li');
const newsPrev = document.querySelector('#newsPrev');
const popularPrev = document.querySelector('#popularPrev');
const newsNext = document.querySelector('#newsNext');
const popularNext = document.querySelector('#popularNext');
const newsItemWidth = newsItems[0].offsetWidth + 12;
const popularItemWidth = popularItems[0].offsetWidth + 22;
const newsMovePosition = slidesToScroll * newsItemWidth;
const popularMovePosition = slidesToScroll * popularItemWidth;

newsNext.onclick = () => {
    const itemsLeft = newsItems.length - (Math.abs(newsPosition) + newsSlidesToShow * newsItemWidth) / newsItemWidth;
    
    if (itemsLeft > 0) {
        newsPosition -= newsMovePosition;
        setNewsPosition();
    }
};

popularNext.onclick = () => {
    const itemsLeft = popularItems.length - (Math.abs(popularPosition) + popularSlidesToShow * popularItemWidth) / popularItemWidth;
    
    if (itemsLeft > 0) {
        popularPosition -= popularMovePosition;
        setPopularPosition();
    }
};

newsPrev.onclick= () => {
    if (newsPosition < 0) {
        newsPosition += newsMovePosition;
        setNewsPosition();
    }
};
popularPrev.onclick= () => {
    if (popularPosition < 0) {
        popularPosition += popularMovePosition;
        setPopularPosition();
    }
};


function setNewsPosition() {
    newsTrack.style.transform = `translateX(${newsPosition}px)`;
}
function setPopularPosition() {
    popularTrack.style.transform = `translateX(${popularPosition}px)`;
}
