var font;
var incBtn;
var decBtn;
window.onload = function () {    
    incBtn = document.getElementById("BG");
    incBtn.addEventListener('click', incFontSize);
    decBtn = document.getElementById("BS");
    decBtn.addEventListener('click', decFontSize);
    font = sessionStorage.getItem("fontSize");
    if (font !== null) {
        font = parseInt(font);
        less.modifyVars({'@font_size': font + 'px'});
        less.refreshStyles();
    }
    else font = 0;
    console.log("font loaded: " + font);
    disableButtons();
};


function incFontSize() {
    font = font + 2;
    console.log(font);

    less.modifyVars({'@font_size': font + 'px'});
    less.refreshStyles();
    storeFont();
}

function decFontSize() {
    font = font - 2;
    console.log(font);

    less.modifyVars({'@font_size': font + 'px'});
    less.refreshStyles();
    storeFont();
}

function storeFont() {
    sessionStorage.setItem("fontSize", font);
    disableButtons();  
}

function disableButtons() {
    if (font >= 6)
    {
        console.log("Font too large!!");
        $("#BG").attr('disabled', 'disabled');
        $("#BG").AddClass("notactive"); //needed for disabling button           
    } else
    {
        console.log("Font NOT too large!!");
        $("#BS").removeAttr('disabled');
    }
    
    if (font <= -6)
    {
        //$("#BS").attr('disabled', 'disabled');
        decBtn.disabled = true;
    } else
    {
        $("#BG").removeAttr('disabled');
    }
}