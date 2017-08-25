import { uniq } from 'lodash';
import insane from 'insane';
import jsonp from 'jsonp';
import { apiKey, url, sayHi, old, dog } from './src/config';
import User, { createURL, gravatar } from './src/user';
// can rename variable like : import { apiKey as key, url,sayHi }
console.log(apiKey, url);
sayHi('Duy');
console.log(old, dog);
const ages = [1,2,3,512,321,2];

console.log(uniq(ages));

const duy = new User ( 'Duy Luong', 'duyluong1994@gmail.com', 'wesbos.com');
console.log(duy);

const profile = createURL(duy.name);
console.log(profile);

const image = gravatar(duy.email);
console.log(image);
