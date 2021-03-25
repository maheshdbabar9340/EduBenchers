var y = Math.floor(Math.random()*10 + 1);

var guess = 1;

document.getElementById("submitguess").onclick = function(){
    var x = document.getElementById("guessField").value;

    if(x == y){
        alert("Congratulations!! You Guessed it Right in " + guess + " Guesses");
    }
    else if(x > y){
        guess++;
        alert("Oops Sorry!! Try a Smaller Number" );
    }
    else{
        guess++;
        alert("Oops Sorry!! Try a Greater Number");
    }
}