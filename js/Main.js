$(() => {
    let rndNum = Math.floor(Math.random() * 100) + 1;
    $('#submitButton').on('click', function () {
        let inputValue = $('#input').val();
        let oldText = $('#tipIfUserIncorrect').html();
        oldText += "<br/>" + inputValue + ": ";
        if (inputValue.toString() == "")
            oldText += "Please insert a number!";
        if (inputValue < rndNum)
            oldText += "Your number is to <span style=" + "color: red;" + "> test </span> small!";
        else if (inputValue > rndNum)
            oldText += "Your number is to big!";
        else
            oldText += "Your number is right!";
        $('#tipIfUserIncorrect').html(oldText);
    });
});
//# sourceMappingURL=Main.js.map