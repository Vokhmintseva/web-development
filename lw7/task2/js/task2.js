function checkInputData(str) {
  if (typeof (str) !== 'string') {
    return false;
  }
  let dutyStr = str;
  dutyStr = dutyStr.replace(/\d+\.\d+/g, '1');
  dutyStr = dutyStr.replace(/\d+/g, '1');
  while (/[+\-\/*]\s*1\s+1/g.test(dutyStr)) {
    dutyStr = dutyStr.replace(/[+\-\/*]\s*1\s*1/g, '1');
    while (/\(\s*1\s*\)/g.test(dutyStr)) {
      dutyStr = dutyStr.replace(/\(\s*1\s*\)/g, '1');
    }
  }
  return (dutyStr == '1');
}

function calculate(sign, operand1, operand2) {
  if (sign == '+') {
    return operand1 + operand2;
  }
  if (sign == '-') {
    return operand1 - operand2;
  }
  if (sign == '*') {
    return operand1 * operand2;
  }
  if (sign == '/') {
    return operand1 / operand2;
  }
}

function splitStringIntoArray(str) {
  str = str.replace(/([+\-\/*])/g, '$1 ');
  str = str.replace(/[()]/g, ' ');
  str = str.replace(/\s+/g, ' ').trim();
  let arr = str.split(' ');
  return arr;
}

function calc(str) {
  if (!checkInputData(str)) {
    return 'incorrect data';
  }
  let arr = splitStringIntoArray(str);
  let dutyArr = [];
  let len = arr.length;
  for (let i = len - 1; i >= 0; i--) {
    if (/^\d+(.\d+)?$/.test(arr[i])) {
      dutyArr.push(arr[i]);
    }
    if (/^[+\-\/*]$/.test(arr[i])) {
      let operand1 = parseFloat(dutyArr.pop());
      let operand2 = parseFloat(dutyArr.pop());
      let res = calculate(arr[i], operand1, operand2);
      dutyArr.push(res);
    }
  }
  let result = dutyArr.pop();
  console.log(result);
}