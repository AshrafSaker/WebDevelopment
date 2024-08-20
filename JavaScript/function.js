console.log('functions page');

function login(){
    console.log('Login function Run!!! \n this is first function Test');
    let name = prompt("Write your name!");
    alert(`Welcome ${name}`);
    console.log(`Tanks ${name} to write your name`)
    let qui =confirm(`${name} are you want to continue!!!!!`)
    if(qui){
        console.log(`Good choice,${name}`);
        alert(`Good choice,${name}`);
    }else{
        console.log(`Bye,${name}`);
        alert(`Bye,${name}`)
    }
}

login();