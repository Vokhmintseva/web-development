function isPrime(num){
    if (num <= 1){
        return (num, 'is not a prime number')
    }
    for(let i = 2; i < num; i++) {
        if (num % i == 0){
            return (num, 'is not a prime number')
        }
    }
    return (num, 'is a prime number')
}

function handleTheArgument(num){
    if (Number.isInteger(num)) {
        return isPrime(num)
    } else {
        console.log(num, 'is an argument of a wrong type')
    }
}

function handleTheArray(arr){
    let len = arr.length
    for (let i = 0; i < len; i++){
        handleTheArgument(arr[i])
    }
}

function isPrimeNumber(n) {
    let num = n;
    if (Array.isArray(num)){
      return handleTheArray(num)
    }
    return handleTheArgument(num)
}
