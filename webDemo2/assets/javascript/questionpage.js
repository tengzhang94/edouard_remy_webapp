const nextQuestionNr = document.getElementById("hiddenQuestionNr").value;

function nextQuestion(){
    var url = window.location.pathname; //get current pathname
    url = url.replace(/\/[^\/]*$/, "/" + nextQuestionNr); //replace the last part of the question with the new nr
    window.location.href = url; //go to new url
    return false;
}

