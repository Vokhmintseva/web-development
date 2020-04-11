function calc(n) {

    let str = n
   str = str.replace(/([()])/g, ' ');
    str = str.replace(/[\s]+/g, ' ').trim()
    /*str = str.replace(/\d+/g, '1')
    console.log(str)
    while (/[\+-\/*]\s*1\s*1/g.test(str)) {
        str = str.replace(/[\+-\/*]\s*1\s*1/g, '1')
        if (/\(1\)/g.test(str)) {
            str = str.replace(/\(1\)/g, '1')
        }
    }
    console.log(str)*/

}

/*let sign = str.split(/[\+-\/*]/g).length - 1
let leftBracket = str.split(/\(/g).length - 1
let rightBracket = str.split(/\)/g).length - 1

let arr = str.split(" ")
let len = arr.length
let number = 0
for (let i = len - 1; i >= 0; i--) {
    if (/^\d+$/.test(arr[i])) {
        number += 1
    }
}
console.log(number, sign, leftBracket, rightBracket)
if (leftBracket !== rightBracket || number !== sign + 1) {
    return 'incorrect data'*/