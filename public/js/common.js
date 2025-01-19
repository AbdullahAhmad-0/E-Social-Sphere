/* --------------------------- Make Header Sticky --------------------------- */
window.onscroll = function () { myFunction() };

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
const headerContent = document.querySelector('.header-content');

function myFunction() {
    if (window.scrollY >= sticky) {
        navbar.classList.add("sticky");
        navbar.style.background = '#06322e';
    } else {
        navbar.classList.remove("sticky");
        navbar.style.background = '';
    }
}

/* ---------------------------- Responsive Header --------------------------- */
var sidemenu = document.getElementById("sidemenu")
function openmenu() {
    sidemenu.style.right = '0';
}
function closemenu() {
    sidemenu.style.right = '-200px';
}

/* --------------------------------- Counter -------------------------------- */
window.addEventListener('DOMContentLoaded', () => {
    const counters = document.getElementsByClassName('counter');

    const options = {
        root: null, // Use the viewport as the root
        threshold: 0.5, // Trigger when 50% of the element is visible
    };

    const handleIntersect = (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counterElement = entry.target;
                const targetCount = parseInt(counterElement.getAttribute('data-target'));

                let currentCount = 0;
                const increment = Math.ceil(targetCount / 100);

                const updateCount = () => {
                    counterElement.textContent = currentCount;
                    if (currentCount < targetCount) {
                        currentCount += increment;
                        requestAnimationFrame(updateCount);
                    } else {
                        counterElement.textContent = targetCount;
                    }
                };

                updateCount();

                observer.unobserve(counterElement); // Stop observing once the animation is triggered
            }
        });
    };

    const observer = new IntersectionObserver(handleIntersect, options);

    Array.from(counters).forEach((counterElement) => {
        observer.observe(counterElement);
    });
});

/* ------------------------------- FAQ Toggle ------------------------------- */
function toggleAnswer(questionElement) {
    const answerElement = questionElement.nextElementSibling;
    const toggleIconElement = questionElement.querySelector('.toggle-icon');
    const toggle_icon = questionElement.getElementsByClassName('toggle-icon');

    if (answerElement.style.display === 'none' || answerElement.style.display === '') {
        answerElement.style.display = 'block';
        for (let i = 0; i < toggle_icon.length; i++) {
            toggle_icon[i].classList.add('toggle-icon-active');
            toggle_icon[i].classList.remove('toggle-icon-deactive');
        }
        setTimeout(() => { answerElement.classList.add('answer-a'); }, 10);
    } else {
        answerElement.classList.remove('answer-a')
        for (let i = 0; i < toggle_icon.length; i++) {
            toggle_icon[i].classList.add('toggle-icon-deactive');
            toggle_icon[i].classList.remove('toggle-icon-active');
        }
        setTimeout(() => {
            answerElement.style.display = 'none';
        }, 500);
    }
};