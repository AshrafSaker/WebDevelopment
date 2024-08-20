console.log('functions page');

function login(){
    console.log('Login function Run!!! \n this is first function Test');
    // ** Remove comment sign to try this code ** 
    /*let name = prompt("Write your name!");
    alert(`Welcome ${name}`);
    console.log(`Tanks ${name} to write your name`)
    let qui =confirm(`${name} are you want to continue!!!!!`)
    if(qui){
        console.log(`Good choice,${name}`);
        //alert(`Good choice,${name}`);
    }else{
        console.log(`Bye,${name}`);
        //alert(`Bye,${name}`)
    }*/
}

login();

// parameter

function permiter(x,y){
    let d = x + y;
    console.log(`d=x+y = ${d}`);
    let area = d * 2;

    console.log(`Permeter for rectangle or Square shape ${area}`);
    console.log(`Area for rectangle or Square shape ${x*y}`);

}

let width =Number(prompt('Write width?'));
let heigh = Number(prompt('write Height?'));

permiter(width,heigh);
console.log(`width= ${width}`);
console.log(`heigh= ${heigh}`);