function calc(n) {

  function checkInputData(n) {
    if (typeof (n) !== 'string') {
      return false;
    }
    if (!/^[()\d\s\+-\/*]+$/.test(n)) {
      return false;
    }
    let dutyStr = n;
    dutyStr = dutyStr.replace(/\d+/g, '1');
    while (/[\+-\/*]\s*1\s+1/g.test(dutyStr)) {
      dutyStr = dutyStr.replace(/[\+-\/*]\s*1\s*1/g, '1')
      while (/\(\s*1\s*\)/g.test(dutyStr)) {
        dutyStr = dutyStr.replace(/\(\s*1\s*\)/g, '1')
      }
    }
    if (dutyStr == 1) {
      return true;
    }
  }

  let str = n;
  if (!checkInputData(str)) {
    return 'incorrect data';
  }
  str = str.replace(/([\+-\/*])/g, '$1 ');
  str = str.replace(/([()])/g, ' ');
  str = str.replace(/[\s]+/g, ' ').trim();
  let arr = str.split(' ');
  let dutyArr = [];
  let len = arr.length;
  for (let i = len - 1; i >= 0; i--) {
    if (/^\d+$/.test(arr[i])) {
      dutyArr.push(arr[i]);
    }
    if (/^[\+-\/*]$/.test(arr[i])) {
      let operand1 = dutyArr.pop();
      let operand2 = dutyArr.pop();
      let expression = operand1 + arr[i] + operand2;
      let res = eval(expression);
      dutyArr.push(res);
    }
  }
  let result = dutyArr.pop();
  console.log(result);
}