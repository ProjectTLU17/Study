const age = 100;
const people = ['duy', 'van anh'];

const fullNames = people.map(name => `${name} Friends`);
for (const person of people) {
  console.log(person);
}
let { x, y, ...z } = { x: 1, y: 2, a: 3, b: 4 };
