/**
 * ES6 新增方法
 * 
 */


let str = 'Hello!'
// 返回布尔值，表示参数字符串是否在源字符串的头部。
console.log(str.startsWith('Hello'))
// 返回布尔值，表示参数字符串是否在源字符串的尾部。
console.log(str.endsWith('!'))
// 返回布尔值，表示是否找到了参数字符串。
console.log(str.includes('o'))

console.log('x'.repeat(3))


// 字符串补全
console.log('x'.padStart(10, 'abc'))
console.log('x'.padEnd(10, 'abc'))