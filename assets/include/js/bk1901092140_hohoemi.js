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
      slideDirection: -1,
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
        //this.slideDirection = 1
        let parentPicsElm = el.querySelector('.carousel__inner') //画像のエレメントを格elmに格納
        let parentMarkerElm = el.querySelector('.slide_marker') //現在のスライド位置マーカー用
        let slideLeft = el.querySelector('.left_btn')
        let slideRight = el.querySelector('.right_btn')
        
        
        //slide実施
        let main = pics => {

          //slide個別の位置
          let limit= []
          for (let i= 0; i < this.elNum; i++) {
            limit[i] = this.slideDirection * this.picsWidthIncludeMargin * (i + 1)
            //console.log(limit[i])
          }
          
          
          //console.log(limit)
          let flagStart = true //初回かどうか
          let ImgSwitch = false
          let slideMain = () => {

            if(this.slideDirection === 1) { //右スライドの場合
              limit.reverse()
              ImgSwitch = true
              console.log("右方向")
            } else {
              if(ImgSwitch === true) {
                limit.reverse()
                ImgSwitch = false
              }
            }
            console.log(limit)

            // if(direction === -1 || direction === 1) {
            //   this.slideDirection = direction
            //   console.log("test")
            // }
            //slide marker
            if(this.slideActive === Object.keys(pics).length) {this.slideActive = 0}
            this.slideActive += 1
            //console.log(this.slideActive)
            

            //console.log(Object.keys(pics).length)
             for(let k = 0; k < Object.keys(pics).length; k++) {
              //for(let k = Object.keys(pics).length - 1 ; -1 < k; k--) {
              //console.log(k)
              //初回のみ
              if(flagStart === true) {
                pics[k].positionX = 0 //スライドで移動する位置
              }
              //console.log(k + ": " + pics[k].positionX)
              //console.log(k + ": " + limit[k])
              //console.log("----------------------------------------")

              /*先頭画像を戻す処理*/
              if(pics[k].positionX === limit[k]) {
                //console.log(pics[k].positionX)
                //console.log(limit[k])

                //スライドで移動する位置がリミットに達した時
                 if(pics[k].positionX === this.slideDirection * this.picsWidthIncludeMargin) {
                   //console.log(k + "の値" + pics[k].positionX)
                   //1つめの画像の戻す座標Xをセット
                   pics[k].positionX = -(this.slideDirection) * (this.allWidth - this.picsWidthIncludeMargin * 2)
                   //console.log(k + "を" + pics[k].positionX + "戻した")
                   //console.log(k + ": "+ pics[k].positionX)
                   //console.log("k" + k + ": " + pics[k].getBoundingClientRect().left)
                   //console.log(pics[k].positionX + "1枚目戻した")
                 } else {
                   //2つめ以降の画像の戻す座標Xをセット
                   pics[k].positionX -= this.slideDirection * (this.allWidth - this.picsWidthIncludeMargin)
                   //console.log("k" + k + ": " + pics[k].getBoundingClientRect().left)
                   //console.log(pics[k].positionX + "2枚目以降戻した")
                 }
                 //カルーセルの一番ケツにtlansitionなしで戻す
                 //console.log(k)
                pics[k].setAttribute("style", `transform: translateX(${pics[k].positionX}px)`)
              } else {

                /*進める処理*/

                //リミットしてない場合は画像(+左右マージン)幅分transitionをつけて進める
                pics[k].positionX += this.slideDirection * this.picsWidthIncludeMargin
                pics[k].setAttribute("style", `transition: all .5s; transform: translateX(${pics[k].positionX}px)`)
              }
              //console.log(k + ": "+ pics[1].positionX)
              //console.log("全部枚目: " + pics[k].getBoundingClientRect().left)
            }

            flagStart = false
            // count += 1//this.slideDirection * 1
            // if(this.elNum - 1 < count) {
            //   count = 0
            //   //console.log(count)
            // }
            // console.log(this.elNum - 1)
            // console.log(count)
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

          let test = () => {
            this.slideDirection = -(this.slideDirection)
            slideMain()
            this.slideDirection = -(this.slideDirection)
          }

          el.parentNode.addEventListener('mouseover', slideStop) //バナーにマウスオーバーでスライドストップ
          el.parentNode.addEventListener('mouseout', slideStart) //バナーにマウスアウトでスライド再開
          slideLeft.addEventListener('click', test)
          slideRight.addEventListener('click', slideMain)

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

