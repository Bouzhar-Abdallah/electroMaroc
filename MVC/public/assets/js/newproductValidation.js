const submit = document.getElementById("submit_form");


submit.addEventListener("click", (e) => {
    let refuse = true;
    
    let errors = [];
    const inputs = document.querySelectorAll(".input");
    const photos = document.getElementById('file_input')
    let files = photos.files;
    files = Array.from(files);
  

  inputs.forEach((node, index) => {
    console.log(node.value);
    if (node.value === "" || node.value == "NULL") {
      errors.push(`${node.name} is required`);
      input.classList.add("bg-red-200");
      input.placeholder = "ce champ est obligatoire";
      refuse = false;
    } else {
      input.classList.remove("bg-bg-red-200");
    }
  });
  let files = photos.files;
  files = Array.from(files);

  

  if (files.length == 0) {
    errors.push("nom is required");
    this.inputStyleHandlerError(photos);
    const photos_feedback = document.getElementById("photos_feedback-" + count);
    const feedback_message = document.getElementById(
      "feedback_message-" + count
    );
    feedback_message.innerText = "veuillez choisir une photo";
    photos_feedback.classList.remove("hidden");
  } else {
    this.inputStyleHandlerAccepted(photos);
    const photos_feedback = document.getElementById("photos_feedback-" + count);
    photos_feedback.classList.add("hidden");
  }

  if (!(refuse)) {
    
    e.preventDefault();
  }
});
