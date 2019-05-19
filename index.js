function PhoneNumber(inputNum)
{
    var numbers = /^[0-9]+$/;
    if(inputNum.value.match(numbers))
    {
        return true;
    }
    else
    {
        alert('Please input numeric characters only');
        return false;
    }
}

function openModal() {
    $('#myModal').modal('show');

}
function updateCounter(area) {
    textEntered = document.getElementById("comments").value;
    counter = (200 - (textEntered.length));

    document.getElementById("counter").innerHTML=counter + " Characters remaining";
}
function OnlyLetters(inputL)
{
    var letters = /^[A-Za-z]+$/;
    if(inputL.value.match(letters))
    {
        return true;
    }
    else
    {

        alert('Please input alphabet characters only');
        return false;
    }
}

function zeroOrMore(num){

    if (num < 0){

        alert('0 or more');

        return false;
    }
    else
    {
        return true;
    }
}


document.addEventListener("mouseleave", function(event){

    if(event.clientY <= 0 || event.clientX <= 0 || (event.clientX >= window.innerWidth || event.clientY >= window.innerHeight))
    {

        alert("Goodbye my friend");

    }
});