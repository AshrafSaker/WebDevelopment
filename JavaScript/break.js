let num = 1;

while(num<=10){
    if(num == 3){
        break;
    }
    console.log(num);
    num++;
}

for(let i=0; i<10;i++) {
    if(i==3) {
      break;
    }
    console.log(i);
}

for(let e=1; e<6;e++) {
    if(e==3) {
      continue;
    }
    console.log(e);
}

let sum=0; 
for(let i=1; i<=3; i++) {
   if (i == 2) {
    continue; 
  }
  sum += i;
}
console.log('sum=',sum);



// stop multi if > 10,000
let numb = 1;

for(i = 1; i<=100; i++){
    numb*=i;
console.log(`num*i= ${i}=${numb}`)

    //your code goes here
    if(numb>10000){
        break;
    }
}

//generate the result

console.log("result= ",numb);