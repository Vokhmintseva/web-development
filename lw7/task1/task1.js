function isPrimeNumber(n) {
    let num = n;
    if (Number.isInteger(num)) {
        let value = true
        if (num <= 1) {
            value = false
        }
        for (let i = 3; i < num; i++) {
            if (num % i == 0) {
                value = false
                break
            }
        }
        if (value) {
            console.log(num, 'is a prime number')
        } else {
            console.log(num, 'is not a prime number')
        }
    }
    if (Array.isArray(num)) {
        let len = num.length
        for (let i = 0; i < len; i++) {
            isPrimeNumber(num[i])
        }
    } else {
        console.log(num, 'is not a number')
    }
}
