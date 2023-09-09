const questions = [
    {
      question: "What is the first layer of the earth?",
      answers: [
        { text: "curst", correct: true },
        { text: "mantle", correct: false },
        { text: "core", correct: false },
        { text: "none of the above", correct: false },
      ],
    },
    {
      question: "How many legs does a butterfly have?",
      answers: [
        { text: "2", correct: false },
        { text: "3", correct: false },
        { text: "6", correct: false },
        { text: "8 ", correct: true },
      ],
    },
    {
      question: "What is the maximum running land speed of Crocodile?",
      answers: [
        { text: "5 KMPL", correct: false },
        { text: "12 KMPL", correct: false },
        { text: "15 KMPL", correct: true },
        { text: "17 KMPL ", correct: false },
      ],
    },
    {
      question:
        "Name the bird that migrates from the north pole to the south pole and back?",
      answers: [
        { text: "Arctic tern", correct: true },
        { text: "Swallow", correct: false },
        { text: "Crane", correct: false },
        { text: "Penguin ", correct: false },
      ],
    },
    {
      question: "What is the longes snake in the world?",
      answers: [
        { text: "Black Mamba", correct: false },
        { text: "Puff adder", correct: true },
        { text: "Reticulated Python", correct: false },
        { text: "Anaconda", correct: false },
      ],
    },
    {
      question: "Which one of the following is not a true snake?",
      answers: [
        { text: "Blind snake", correct: true },
        { text: "Glass snake", correct: false },
        { text: "Sea snake", correct: false },
        { text: "Tree snake", correct: false },
      ],
    },
    {
      question: "What is a rhinos horn made of?",
      answers: [
        { text: "Bones", correct: true },
        { text: "Collagen", correct: false },
        { text: "Fibroin", correct: false },
        { text: "Kerotin", correct: false },
      ],
    },
    {
      question:
        "The peiod after parturition in which animal produces milk is called as...",
      answers: [
        { text: "Calving period", correct: false },
        { text: "Lactation period", correct: true },
        { text: "Dry period", correct: false },
        { text: "Conception", correct: false },
      ],
    },
    {
      question:
        "In which of the following kinds of organism is the phenomenon found wherein the female kills the male after copulation?",
      answers: [
        { text: "Dragonfly", correct: true },
        { text: "Honeybee", correct: false },
        { text: "Spider", correct: false },
        { text: "Pit viper", correct: false },
      ],
    },
    {
      question: "The fundamental ecomoic problem faced by all societies is",
      answers: [
        { text: "unemployment", correct: true },
        { text: "poverty", correct: false },
        { text: "inequality", correct: false },
        { text: "scarcity", correct: false },
      ],
    },
  ];
  
  const questionElement = document.getElementById("question");
  const answerButtons = document.getElementById("answer-buttons");
  const nextButton = document.getElementById("next-btn");
  
  const startButton = document.getElementById("btn-start")
  const starter = document.querySelector('.starter')
  const app = document.querySelector(".app")

  let currentQuestionIndex = 0;
  let score = 0;
  
  function startQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "Next"
    starter.style.display="none"
    app.style.display="block"
    showQuestion();
  }
  
  function showQuestion(){
      resetState();
      let currentQuestion = questions[currentQuestionIndex]
      let questionNo = currentQuestionIndex + 1;
      questionElement.innerHTML = questionNo + ". " + currentQuestion.question
  
      currentQuestion.answers.forEach(answer =>{
          const button = document.createElement("button")
          button.innerHTML = answer.text;
          button.classList.add("btn")
          answerButtons.appendChild(button)
          if(answer.correct){
              button.dataset.correct = answer.correct;
          }
          button.addEventListener("click", selectAnswer)
      })
  
  }
  
  function resetState(){
      nextButton.style.display="none";
      while(answerButtons.firstChild){
          answerButtons.removeChild(answerButtons.firstChild)
      }
  }
  
  function selectAnswer(e){
      const selectedBtn = e.target;
      const isCorrect = selectedBtn.dataset.correct === 'true';
      if(isCorrect){
          selectedBtn.classList.add('correct')
          score++;
      }else{
          selectedBtn.classList.add('incorrect')
      }
      Array.from(answerButtons.children).forEach(button =>{
          if(button.dataset.correct === 'true'){
              button.classList.add("correct")
          }
          button.disabled = true
      })
      nextButton.style.display ='block'
  }
  
  function showScore(){
      resetState();
      questionElement.innerHTML = `You scored ${score} out of ${questions.length}!`
      nextButton.innerHTML = "Play Again"
      nextButton.style.display = "block"
  }
  
  function handleNextButton(){
      currentQuestionIndex++;
      if(currentQuestionIndex < questions.length){
          showQuestion();
      }else{
          showScore();
      }
  }
  
  nextButton.addEventListener("click", ()=>{
      if(currentQuestionIndex < questions.length){
          handleNextButton();
      }else{
          startQuiz();
      }
  })



  startButton.addEventListener('click', startQuiz)
  