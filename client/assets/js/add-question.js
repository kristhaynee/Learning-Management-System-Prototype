document.addEventListener("DOMContentLoaded", function () {
    const addButton = document.getElementById("add-question");
    const scrollableSection = document.querySelector(".scrollable-section");
    const template = document.getElementById("question-fields-template");

    // Function to clone a card without its content
    function cloneCardWithoutContent(card) {
        const clone = card.cloneNode(false); // Clone without content
        clone.innerHTML = card.innerHTML; // Copy the content from the original card
        return clone;
    }

    // Function to add event listeners to a card for toggling input field visibility
    function addEventListenersToCard(card) {
        // Add event listeners to the "Add" buttons for image, video, and comment
        const addImageBtn = card.querySelector(".add-image");
        const addVideoBtn = card.querySelector(".add-video");
        const addCommentBtn = card.querySelector(".add-comment");

        addImageBtn.addEventListener("click", function () {
            toggleInputVisibility(card, "image-input");
        });

        addVideoBtn.addEventListener("click", function () {
            toggleInputVisibility(card, "video-input");
        });

        addCommentBtn.addEventListener("click", function () {
            toggleInputVisibility(card, "comment-input");
        });
    }

    // Function to toggle input field visibility
    function toggleInputVisibility(parentElement, inputId) {
        const inputField = parentElement.querySelector(`#${inputId}`);
        if (inputField.style.display === "none" || inputField.style.display === "") {
            inputField.style.display = "block";
        } else {
            inputField.style.display = "none";
        }
    }

    addButton.addEventListener("click", function () {
        // Clone the template without inheriting additional input fields
        const clone = cloneCardWithoutContent(template);
        clone.style.display = "block"; // Show the cloned question field card

        // Add an event listener to the delete button
        const deleteButton = clone.querySelector(".delete-question");
        deleteButton.addEventListener("click", function () {
            // Remove the associated question box (clone) when the delete button is clicked
            scrollableSection.removeChild(clone);
        });

        // Add event listeners to the cloned card
        addEventListenersToCard(clone);

        scrollableSection.appendChild(clone); // Append it to the scrollable section
    });

    // Add event listeners to the template card
    addEventListenersToCard(template);
});
