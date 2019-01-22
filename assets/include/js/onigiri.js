"use strict";

import "babel-polyfill";

/*mixiのテスト*/
import {myMixin} from './mixin.js'

const Component = Vue.extend({
  mixins: [myMixin]
})
const component = new Component() // => "hello from mixin!"

/*==========================================================
おにぎり
===========================================================*/
