"use strict";

import "babel-polyfill";

/*mixiのテスト*/
import {myMixin} from './mixin.js'

const Component = Vue.extend({
  mixins: [myMixin]
})
const component = new Component() // => "hello from mixin!"

/*==========================================================
ほほえみごはん
===========================================================*/
Vue.directive('scroll', {
  inserted: function(el, binding, evt) {

    //コールバック関数の生成
    let f = function(evt) {
        binding.value(el, evt)
      }

    //スクロールでリスナー実行
     window.addEventListener('scroll', f);
  },
})

new Vue ({
  el: "#hohoemi-Header",
  data() {
    return {
      js_scroll: false,
    }
  },
  created() {
    //setInterval(this.scrollNav, 1000)
    //this.handleScroll()
  },
  methods: {
    handleScroll(el, evt) {
      //if(window.scrollY > 0) {// ie11はscrollYに非対応
      if(window.pageYOffset > 0) {
        //el.setAttribute("style", "opacity: 1; transform: translate3d(0, -10px, 0)")
        //el.classList.add("js-scroll")
        this.js_scroll = true
        //console.log("true")
      } else {
        //el.classList.remove("js-scroll")
        this.js_scroll = false
        //console.log("false")
      }
      //console.log(el.childnode)
    },
  }
})
Vue.directive ('slide',{
  inserted: function(el, binding, evt) {
    binding.value(el, evt)
  }
})

Vue.directive ('slide_stop',{
  inserted: function(el, binding, evt) {

    let f = function(el) {
      binding.value(el, evt)
    }
    window.addEventListener('mouseover', f)
  }
})

new Vue({
  el:"#pic",
  data: {
    pics:[
        {
          id: 1,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=1",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
        {
          id: 2,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=2",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
        {
          id: 3,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=3",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
        {
          id: 4,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=4",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
        {
          id: 5,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=5",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
        {
          id: 6,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=6",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
        {
          id: 7,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=7",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
        {
          id: 8,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=8",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
        {
          id: 9,
          link: "https://google.com",
          img: "https://via.placeholder.com/640x390/27709b/ffffff?text=9",
          alt: "test",
          caption: "【いももちレシピ】チーズ、みたらしだれなど人気アレンジも必見！",
        },
      ],
      pics_width: 640,
      pics_margin: 10,
      positionX: 0,
      now: false,
      slideActive: 0,
      fl_slideStop: null


    },
    computed: {
      elNum() { //画像の個数
        return this.pics.length
      },
      picsWidthIncludeMargin() { //マージン含めた画像の横幅
        return this.pics_width + this.pics_margin * 2
      },
      allWidth() { //画像群の横幅
        return (this.pics_width + this.pics_margin * 2) * this.pics.length
      },
    },
    methods: {
      slide(el, evt) {

        let parentPicsElm = el.querySelector('.carousel__inner') //画像のエレメントを格elmに格納
        let parentMarkerElm = el.querySelector('.slide_marker') //現在のスライド位置マーカー用
        
        
        //slide実施
        let count = 0
        let main = pics => {

          //slide個別の位置
          let limit= []
          for (let i= 0; i < this.elNum; i++) {
            limit[i] = -1 * this.picsWidthIncludeMargin * (i + 1)
            //console.log(limit[i])
          }
          
          //console.log(limit)
          let flagStart = true //初回かどうか
          let slideMain = () => {

            //slide marker
            if(this.slideActive === Object.keys(pics).length) {this.slideActive = 0}
            this.slideActive += 1
            //console.log(this.slideActive)
            

            //console.log(Object.keys(pics).length)
            for(let k = 0; k < Object.keys(pics).length; k++) {
              
              if(flagStart === true) {
                pics[k].positionX = 0
              }
              if(pics[k].positionX === limit[k]) {
                 if(pics[k].positionX === -(this.picsWidthIncludeMargin)) {
                    pics[k].positionX = this.allWidth - this.picsWidthIncludeMargin * 2
                    //console.log("リミットに達した")
                    } else {
                   pics[k].positionX += this.allWidth - this.picsWidthIncludeMargin
                   //console.log("進んでよし")
                 }
                pics[k].setAttribute("style", `transform: translateX(${pics[k].positionX}px)`)
              } else {
                pics[k].positionX -= this.picsWidthIncludeMargin
                pics[k].setAttribute("style", `transition: all .5s; transform: translateX(${pics[k].positionX}px)`)
                //console.log(pics[k])
              }
            }

            flagStart = false
            count += 1
            if(this.elNum - 1 < count) {
              count = 0
              //console.log(count)
            }
          }

          let centering = () => {
            let browserHalfWidth = window.innerWidth / 2
            let CarouselInnerWidth = el.clientWidth / 2
            let defaultPosition = -(CarouselInnerWidth - browserHalfWidth)
            el.setAttribute("style", `transform: translateX(${defaultPosition}px)`)
          }

          //マウスオーバー、アウトでスライドonoff
          let slideStop = () => {
            clearInterval(this.fl_slideStop)
          }
          let slideStart = () => {
            this.fl_slideStop = setInterval(slideMain, 2000)
          }

          el.parentNode.addEventListener('mouseover', slideStop) //バナーにマウスオーバーでスライドストップ
          el.parentNode.addEventListener('mouseout', slideStart) //バナーにマウスアウトでスライド再開

          this.fl_slideStop = setInterval(slideMain, 2000)
          setInterval(centering, 100)

          
        }
        main(parentPicsElm.children)
        
      },
      slideStop(el, evt) {
        //console.log(this.slideStop)
        //clearInterval(this.slideStop)
      }
    },
})

