function isPrimeNumber(n) {
    if (Number.isInteger(n)) {
        let value = true;
        if (n <= 1) {
            value = false;
        }
        for (let i = 2; i < n; i++) {
            if (n % i == 0) {
                value = false;
                break;
            }
        }
        if (value) {
            console.log(n, 'is a prime number');
        } else {
            console.log(n, 'is not a prime number');
        }
    } else if (Array.isArray(n)) {
        let len = n.length;
        for (let i = 0; i < len; i++) {
            isPrimeNumber(n[i]);
        }
    } else {
        console.log(n, 'is not a number');
    }
}
