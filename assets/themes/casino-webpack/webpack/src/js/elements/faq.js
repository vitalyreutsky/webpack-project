const faq_questions = document.querySelectorAll(".faq__question");

if (faq_questions) {
    faq_questions.forEach((question) => {
        question.addEventListener("click", function(e) {

            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            panel.classList.toggle("active");
            if (panel.style.maxHeight) {
                panel.style.display = 'none';
            } else {
                panel.style.maxHeight = 'block';
            }

        });
    })
}

