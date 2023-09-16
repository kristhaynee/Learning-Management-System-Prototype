<link rel="stylesheet" href="../assets/css/create-assessment_style.css" />


<div id="assessment-popup" class="popup">

    <div class="assessment-card">
        <div class="form">
            <div class="left-side">
                <div class="left-heading">
                    <h4>Create Assessment</h4>
                </div>
                <div class="steps-content">
                    <h3>Step <span class="step-number">1</span></h3>
                    <p class="step-number-content active">Provide a name for your assessment and select its subject category.</p>
                    <p class="step-number-content d-none">Input the questions and answers for your assessment.</p>
                    <p class="step-number-content d-none">Review the assessment details and questions before submitting.</p>
                </div>
                <ul class="progress-bar">
                    <li class="active">Assessment Details</li>
                    <li>Test Questions</li>
                    <li>Review and Submit</li>
                </ul>
                
            </div>
            <div class="right-side mx-auto">
                <div class="right-container">
                <div class="main active">
                    <div class="text">
                        <h2>Assessment Name & Subject Category</h2>
                        <p>Provide a name for your assessment and select its subject category.</p>
                    </div>
                    <div class="input-text">
                        <div class="form-floating col-12">
                            <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                            <label for="floatingInput">Assessment Name</label>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div col-12">
                            <select>
                                <option>Select Subject</option>
                                <option>Math</option>
                                <option>Science</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="form-floating col-12">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="next_button">Next Step</button>
                    </div>
                </div>

                <!-- TEST QUESTIONS -->
                <div class="main">
                    <div class="fixed-section">
                            <div class="text">
                                <h2>Add Test Questions</h2>
                                <p>Input the questions and answers for your assessment.</p>
                            </div>
                        <!-- SAMPLE -->
                        <form id="test-form">            
                                <!-- Question Fields -->
                                <button type="button" id="add-question" class="btn btn-primary">Add Another Question</button>
                    </div>

                    
                      <!-- Scrollable part: Question Fields -->
                    <div class="scrollable-section">
                            <!-- Question Fields (inside a card) -->
                            <div class="card mt-3 mb-5" id="question-fields-template">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-7">
                                        <h5 class="card-title">Question:</h5>
                                    </div>
                                    <div class="col-5 text-end">
                                        <button type="button" class="btn btn-secondary add-image">
                                            <i class="fa-regular fa-file-image"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary add-video">
                                            <i class="fa-solid fa-file-video"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary add-comment">
                                            <i class="fa-solid fa-paragraph"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger delete-question">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="question1-text">Text Question:</label>
                                        <input type="text" class="form-control" name="text-question">
                                    </div>
                                    
                                    <!-- Answer Choices -->
                                    <div class="form-group mt-3" id="question1-choices">
                                        <label>Answer Choices:</label>
                                        <div class="choice">
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <input type="text" name="question1-choice[]" placeholder="Choice 1">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="question2-choice[]" placeholder="Choice 2">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <input type="text" name="question3-choice[]" placeholder="Choice 3">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="question4-choice[]" placeholder="Choice 4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <label for="correct-answer">Correct Answer:</label>
                                        <input type="text" class="form-control" name="correct-answer">
                                    </div>

                                    <!-- Buttons for adding image, video, and comment fields -->
                                    <div class="form-group mt-3">
                                        
                                    </div>

                                    <!-- Image input field (initially hidden) -->
                                    <div class="form-group mt-3" id="image-input" style="display: none;">
                                        <label for="image">Image:</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>

                                    <!-- Video input field (initially hidden) -->
                                    <div class="form-group mt-3" id="video-input" style="display: none;">
                                        <label for="video">Video:</label>
                                        <input type="file" class="form-control" name="video">
                                    </div>

                                    <!-- Comment input field (initially hidden) -->
                                    <div class="form-group mt-3" id="comment-input" style="display: none;">
                                        <label for="comment">Comment:</label>
                                        <textarea class="form-control" name="comment"></textarea>
                                    </div>

                                        

                                </div>
                            </div>
                        </form>
                        <!-- SAMPLE -->
                    </div>


                    <!-- Fixed part: Back and Next buttons -->
                    <div class="fixed-section-bottom">
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                </div>
                
                <div class="main">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>Work Experiences</h2>
                        <p>Can you talk about your past work experience?</p>
                    </div>
                    
                    <div class="buttons button_space">
                        <button class="back_button">Back</button>
                        <button class="next_button">Next Step</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-danger create-assessment-close" id="assessment-close-popup">
        <i class="fa-solid fa-xmark"></i>
    </button>

</div>