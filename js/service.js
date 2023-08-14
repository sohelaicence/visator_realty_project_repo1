
const modalContent = document.querySelector('.popup-modal-content');
const modalContainer = document.querySelector('.modal-container');
const modalClose = document.querySelector('.fa-xmark');
const modalOpen = document.querySelector('.anchor-modal-popup');
const fixedModalOpen = document.querySelector('.fixed-icon');
const pload = document.querySelector('.preload-modal');

modalClose.addEventListener('click', () => {
  modalContent.style.removeProperty("display");
  modalContent.classList.add('hidden');
  modalContainer.classList.add('hidden');
})

fixedModalOpen.addEventListener('click', () => {
  console.log('Hello');
  modalContent.classList.remove('hidden');
  modalContainer.classList.remove('hidden');
})

modalContainer.addEventListener('click', () => {
  modalContent.classList.add('hidden');
  modalContainer.classList.add('hidden');
})

modalOpen.addEventListener('click', () => {
  modalContent.classList.remove('hidden');
  modalContainer.classList.remove('hidden');
})


window.addEventListener('load', function(){
  this.setTimeout(
    function open(){
      document.querySelector('.popup-modal-content').style.display ="block";
    },
    1000
  )
})





document.addEventListener('keydown', function (e) {

  if (e.key === 'Escape' && !modalContent.classList.contains('hidden')) {
    modalContent.classList.add('hidden');
    modalContainer.classList.add('hidden');
  }
});






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



        const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

        accordionItemHeaders.forEach(accordionItemHeader => {
          accordionItemHeader.addEventListener("click", () => {
            
            // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
            
            // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
            // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
            //   currentlyActiveAccordionItemHeader.classList.toggle("active");
            //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
            // }
        
            accordionItemHeader.classList.toggle("active");
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if(accordionItemHeader.classList.contains("active")) {
              accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            }
            else {
              accordionItemBody.style.maxHeight = 0;
            }
            
          });
        });









