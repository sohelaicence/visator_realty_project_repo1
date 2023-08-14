

const counters = document.querySelectorAll('.value');
    const speed1 = 90;

    counters.forEach( counter => {
        window.addEventListener('scroll', () => {
            const animate = () => {
                const value = +counter.getAttribute('akhi');
                const data = +counter.innerText;
              
                const time = value / speed1;
              if(data < value) {
                    counter.innerText = Math.ceil(data + time);
                    setTimeout(animate, 1);
                  }else{
                    counter.innerText = value;
                  } 
            }
            animate();
          });
        })




const previous = document.querySelector('.prev');
const next = document.querySelector('.next');
const tracker = document.querySelector('.tracker');
const mainWrapper = document.querySelector('.main-wrapper').offsetWidth;

next.addEventListener('click', () =>{
  tracker.style.transform = `translateX(-${mainWrapper}px)`;
})

previous.addEventListener('click', () =>{
  tracker.style.transform = `translateX(-${0}px)`;
})



const body = document.body;
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
        body.classList.remove("scroll-up");
        return;
    }

    if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-up");
        body.classList.add("scroll-down");
    } else if (
        currentScroll < lastScroll &&
        body.classList.contains("scroll-down")
    ) {
        body.classList.remove("scroll-down");
        body.classList.add("scroll-up");
    }
    lastScroll = currentScroll;
});




const counts = document.querySelectorAll('.counter-number')
const speed = 97

counts.forEach((counter) => {
    function upData(){
        const target = Number(counter.getAttribute('data-target'))
        const count = Number(counter.innerText)
        const inc = target / speed

        if (count < target){
            counter.innerText = Math.floor(inc + count)
            setTimeout(upData, 1)
        }
        else{
            counter.innerText =target;
        }
    }
    upData();
})




