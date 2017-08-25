const wes = Symbol('Duy');
const classRoom = {
  [Symbol('Mark')]: {grade: 50, gender: 'male'};
  [Symbol('Olv')]: {grade: 66, gender: 'female'};
  [Symbol('Melert')]: {grade: 53, gender: 'male'};
};

console.log(classRoom);
const syms = Object.getOwnPropertySymbols(classRoom);
console.log(syms);
const data = syms.map(sym => classRoom[sym],,);
console.log(data)
