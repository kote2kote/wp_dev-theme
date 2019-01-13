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
      defaultDirection: 1,
      now: false,
      slideActive: 5,
      fl_slideStop: null,
      flg_default: true,
      slidePositionArray: [],
      goLeftorRight: false,
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
        //slideDirection = 1
        let parentPicsElm = el.querySelector('.carousel__inner') //画像のエレメントを格elmに格納
        let slideLeft = el.querySelector('.left_btn')
        let slideRight = el.querySelector('.right_btn')
        let slideMarker = Array.from(document.querySelectorAll('.marker_btn'));
        
        
        //slide実施
        let main = pics => {

          //slide個別の位置
          let limit= []
          let slideDirection = this.defaultDirection //スライドのデフォルト方向をループ内で切り替わる変数に代入

          for (let i= 0; i < this.elNum; i++) {
            limit[i] = slideDirection * this.picsWidthIncludeMargin * (i + 1)
          }

          if(this.defaultDirection === 1) {
            limit.reverse()
          }

          let ImgSwitch = false
          let lkk = 0
          let rkk = 0

          //let demo_kk = 0
          
          
          //   console.log(limit)
          let slideMain = () => {

            let k = 0 //リミット用
            let kk = 0//スライドループ用
            for(let i = 0; i < this.elNum; i++) {
              //右方向の処理
              if(slideDirection === 1) {
                
                if(rkk > 0) {
                  limit.reverse()
                  limit = limit.map(function(inverted) {
                    return -inverted
                  })
                  rkk = 0
                }

                if(this.defaultDirection === -1 && lkk === 0) {
                    limit.reverse()
                    limit = limit.map(function(inverted) {
                      return -inverted
                    })
                    lkk++
                }
                if(k === 0) {
                  k = this.elNum - 1
                } else {
                  k--
                }
                kk = this.elNum - 1
              } 
              else {

                if(lkk > 0) {
                  limit.reverse()
                  limit = limit.map(function(inverted) {
                    return -inverted
                  })
                  lkk = 0
                }
                
                if(this.defaultDirection === 1 && rkk === 0) {

                    limit.reverse()
                    limit = limit.map(function(inverted) {
                      return -inverted
                    })
                    rkk++
                }
                
                k = i

              }

              //初回
              if(this.flg_default === true) {
                this.slidePositionArray[k] = 0
              }

              //移動座標をプラス
              //console.log(k + "からの: " + this.slidePositionArray[k])
              let tmp = this.slidePositionArray[k]
              this.slidePositionArray[k] += slideDirection * (this.picsWidthIncludeMargin)
              tmp = this.slidePositionArray[k] - tmp
              //console.log(k + "の移動距離: " + tmp)

              if(slideDirection === 1 && limit[k] < this.slidePositionArray[k]) {
                let amount = this.slidePositionArray[k] - limit[k]
                this.slidePositionArray[k] = this.allWidth - this.picsWidthIncludeMargin + amount
                //console.log(this.slidePositionArray[k] + "上乗せ")
              } else if(slideDirection === -1 && limit[k] > this.slidePositionArray[k]) {
                let amount = this.slidePositionArray[k] + limit[k]
                this.slidePositionArray[k] = -(this.allWidth - this.picsWidthIncludeMargin + amount)
                //console.log(this.slidePositionArray[k] + "上乗せ")
              }

              //リミットチェック
              if(limit[k] === this.slidePositionArray[k]) {

                if(k === kk) {//0

                  this.slidePositionArray[k] = -(slideDirection) * (this.allWidth - this.picsWidthIncludeMargin)

                } else {

                  this.slidePositionArray[k] = -(slideDirection) * (this.allWidth - this.picsWidthIncludeMargin * (i + 1))

                }
                //リミットからの移動はtransitionなし
                pics[k].setAttribute("style", `transform: translateX(${this.slidePositionArray[k]}px)`)
                
              } else {
                
                 //移動
                 pics[k].setAttribute("style", `transition: all .5s; transform: translateX(${this.slidePositionArray[k]}px)`)
              }
              
              
            }

            //slide marker
            if(slideDirection === -1) {
              if(this.slideActive === Object.keys(pics).length) {
                this.slideActive = 0
              }
                this.slideActive += 1
            } else {
              if(this.slideActive === 0) {
                this.slideActive = Object.keys(pics).length
              } else {
                
                if(this.slideActive === 1){
                  this.slideActive = Object.keys(pics).length + 1
                }
                this.slideActive -= 1
              }
            }

            this.flg_default = false
            slideDirection = this.defaultDirection //方向を切り替えても最後に戻す
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

          //右へ1つスライド
          let slideL = () => {
            slideDirection = 1
            slideMain()
          }
          //左へ1つスライド
          let slideR = () => {
            slideDirection = -1
            slideMain()
          }

          let slideMarkers = (evt) => {
            //現在の場所からクリックしたところの差分
             let amount = Number(evt.target.dataset.key) - this.slideActive

             let count = 0
              
              let slideTimes = setInterval(
                ()=> {

                  if(amount > 0) {
                    slideDirection = -1
                  count++
                  } else {
                    slideDirection = 1
                  count--
                  }
                  
                  if(amount === count) {
                    clearInterval(slideTimes)
                    count = 0
                  }
                  slideMain()
                  console.log(amount)

                }, 100)
          }

          el.parentNode.addEventListener('mouseover', slideStop) //バナーにマウスオーバーでスライドストップ
          el.parentNode.addEventListener('mouseout', slideStart) //バナーにマウスアウトでスライド再開
          slideLeft.addEventListener('click', slideL)
          slideRight.addEventListener('click', slideR)
          slideMarker.forEach(slideMarke => slideMarke.addEventListener('click', slideMarkers));

          this.fl_slideStop = setInterval(slideMain, 2000)
          setInterval(centering, 100)

          
        }
        main(parentPicsElm.children)
        
      },
      slideStop(el, evt) {

      }

    },
})

