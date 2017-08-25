//named Export
export const apiKey = 'abc123';
// export default apiKey; other way can use as other name
export const url = 'http://luposolitario.000webhostapp.com';

export function sayHi( name ){
	console.log(`Hello there ${name}`);
}
const age = 34;
const dog = 'sunny';
export { age as old, dog};
