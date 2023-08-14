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


    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    const info = document.querySelector(".alert-info");
    const error = document.querySelector(".alert-error");

    function process(event) {
      event.preventDefault();

      const phoneNumber = phoneInput.getNumber();

      info.style.display = "";
      info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
    }