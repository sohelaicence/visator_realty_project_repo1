const modalContent = document.querySelector('.popup-modal-content');
const modalContainer = document.querySelector('.modal-container');
const modalClose = document.querySelector('.fa-xmark1');
const modalOpen = document.querySelector('.contat-btn-for-property-detail');

modalClose.addEventListener('click', () => {
  modalContent.classList.add('hidden');
  modalContainer.classList.add('hidden');
})

modalContainer.addEventListener('click', () => {
  modalContent.classList.add('hidden');
  modalContainer.classList.add('hidden');
})

modalOpen.addEventListener('click', () => {
  modalContent.classList.remove('hidden');
  modalContainer.classList.remove('hidden');
})


const imgModal = document.querySelector('.img-modal');
const imgModalContainer = document.querySelector('.img-modal-container');
const imgModalClose = document.querySelector('.fa-xmark2');
const imgModalOpen = document.querySelector('.floor-plan-img1');

imgModalContainer.addEventListener('click', () => {
  imgModalContainer.classList.add('img-hidden');
  imgModal.classList.add('img-hidden');
})

imgModalClose.addEventListener('click', () => {
  imgModal.classList.add('img-hidden');
  imgModalContainer.classList.add('img-hidden');
})


imgModalOpen.addEventListener('click', () => {
  imgModal.classList.remove('img-hidden');
  imgModalContainer.classList.remove('img-hidden');
})





const showMoreBtn = document.querySelector('.property-detail-show-more-btn');
const showLessText = document.querySelector('.property-detail-show-less-text');

showMoreBtn.addEventListener('click', () => {
  showLessText.classList.toggle('property-detail-show-less-text-show');
})




const heartShapes = document.querySelectorAll('.fa-heart1');

heartShapes.forEach(heartShape => {
  heartShape.addEventListener('click', () => {
    heartShape.classList.toggle('fill-heart-bg');
  });
});



