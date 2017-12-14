const nextQuestionNr = document.getElementById("hiddenQuestionNr").value;
const questionId = document.getElementById("hiddenQuestionId").value;

function nextQuestion(){
    nextQuestion = noop(); //to prevent the function from executing multiple times before exiting the page
    saveScore(score); //variable score defined within questionpage_new.php
    var url = window.location.pathname; //get current pathname
    url = url.replace(/\/[^\/]*$/, "/" + nextQuestionNr); //replace the last part of the question with the new nr
    window.location.href = url; //go to new url
    return false;
}

function saveScore(score){
    jQuery.ajax({
        type: 'POST',
        url: base_url + "index.php/ajaxController/saveScore",
        data: {
            'questionId': questionId,
            'score': score
        }
    });
}

