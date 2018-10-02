import Default from './module.js'; //「default」で指定した変数を取得(変数名は自由)
import { Person, //変数名を指定して取得(変数名は固定)
Dog, //変数名を指定して取得(変数名は固定)
Cat //変数名を指定して取得(変数名は固定)
} from './module.js';
import * as All from './module.js'; //全ての変数を含んだオブジェクトを取得(変数名は自由)

console.log(Default); //太郎
console.log(Person); //太郎
console.log(Dog); //ポチ
console.log(Cat); //タマ
console.log(All);
/*
Object {
  Person: "太郎",
  Dog: "ポチ",
  Cat: "タマ",
  default: "太郎",
  ...
}*/

const hello = name => {
  return `hello ${name}`;
};
