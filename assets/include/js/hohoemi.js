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
      fl_slideStop: null,
      flg_default: true,
      slidePositionArray: [],
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
          // let matrix_test = []
          // let positionMatrix = []

          for (let i= 0; i < this.elNum; i++) {
            limit[i] = this.slideDirection * this.picsWidthIncludeMargin * (i + 1)
            console.log(limit[i])
          }


          // for(let k = 0; k < Object.keys(pics).length; k++) {
          //   let x
          //   for (let i= 0; i < this.elNum; i++) {
          //     //let ii = 0
          //     //console.log("k: " + k + " i: " + i)
          //     if(i === k) {
          //       if(i === 0) {
          //         matrix_test[i] = this.slideDirection * (this.picsWidthIncludeMargin * (i + 1))
          //       } else {
          //         matrix_test[i] = this.slideDirection * (this.allWidth - this.picsWidthIncludeMargin)
          //       }
          //     } else {
          //       matrix_test[i] += this.slideDirection * this.picsWidthIncludeMargin
          //     }
          //     //console.log("matrix_test[i]" + matrix_test[i])
          //     //ii++
          //   }
          //   positionMatrix[k] = matrix_test
          //   //console.log(k + ": " + positionMatrix[k])
          // }
    
          //console.log(limit)
          // let flagStart = true //初回かどうか
          let ImgSwitch = false
          
          
          //   console.log(limit)
          let slideMain = () => {
           
            // if(this.slideDirection === 1) { //右スライドの場合
            //   limit.reverse()
            //   ImgSwitch = true
            //   //console.log("右方向")
            // } else {
            //   if(ImgSwitch === true) {
            //     limit.reverse()
            //     ImgSwitch = false
            //   }
            // }

            /**
             * スライドポジションマトリクス
             */
            
            //console.log(limit)
            let k = 0
            let kk = 0
            var numbers = [1, 2, 3]
            for(let i = 0; i < this.elNum; i++) {
              //limit[i] = this.slideDirection * this.picsWidthIncludeMargin * (i + 1)
              if(this.slideDirection === 1) {
                if(k === 0) {
                  k = this.elNum - 1
                } else {
                  k--
                }
                kk = this.elNum - 1
                // limit.reverse()
                // ImgSwitch = true
                if(ImgSwitch === false) {
                  limit.reverse()

                  // limit = limit.map(function(inverted) {
                  //   return -(invated)
                  // })
                  limit = limit.map(function(inverted) {
                    return -(inverted)
                  })
                  console.log(limit)
                  ImgSwitch = true
                }
                console.log("右方向→")
                //console.log(limit)
              } else {
                if(ImgSwitch === true) {
                  limit.reverse()
                  limit = limit.map(function(inverted) {
                    return -(inverted)
                  })
                  ImgSwitch = false
                }
                k = i
                console.log("←左方向")
                //console.log(limit)
              }
              
              //   limit[reverse] = this.slideDirection * this.picsWidthIncludeMargin * (i + 1)
              // } else {
              //   limit[i] = this.slideDirection * this.picsWidthIncludeMargin * (i + 1)
              // }
              

              //初回
              if(this.flg_default === true) {
                this.slidePositionArray[k] = 0
              }

              //移動座標をプラス
              this.slidePositionArray[k] += this.slideDirection * this.picsWidthIncludeMargin

              //リミットチェック
              if(limit[k] === this.slidePositionArray[k]) {

                if(k === kk) {//0
                  this.slidePositionArray[k] = -(this.slideDirection) * (this.allWidth - this.picsWidthIncludeMargin)
                  //console.log(this.slidePositionArray[k])
                } else {
                  this.slidePositionArray[k] = -(this.slideDirection) * (this.allWidth - this.picsWidthIncludeMargin * (i + 1))
                }
                //リミットからの移動はtransitionなし
                pics[k].setAttribute("style", `transform: translateX(${this.slidePositionArray[k]}px)`)
                
              } else {
                //移動
                pics[k].setAttribute("style", `transition: all .5s; transform: translateX(${this.slidePositionArray[k]}px)`)
              }
              
            }
            console.log("---------------------------------------")
            console.log(limit)
            console.log(this.slidePositionArray)
            this.flg_default = false
            //console.log(this.slidePositionArray)



            // if(this.slideDirection === 1) { //右スライドの場合
            //   limit.reverse()
            //   ImgSwitch = true
            //   //console.log("右方向")
            // } else {
            //   if(ImgSwitch === true) {
            //     limit.reverse()
            //     ImgSwitch = false
            //   }
            // }
 
            //slide marker
            if(this.slideDirection === -1) {
              if(this.slideActive === Object.keys(pics).length) {this.slideActive = 0}
              this.slideActive += 1
            } else {
              if(this.slideActive === 0) {this.slideActive = this.elNum}
              this.slideActive -= 1
            }
            


            console.log(this.slideActive)
            

            // //console.log(Object.keys(pics).length)
            //  for(let k = 0; k < Object.keys(pics).length; k++) {
            //   if(flagStart === true) {
            //     pics[k].positionX = 0 //スライドで移動する位置
            //   }

            //   /*先頭画像を戻す処理*/
            //   if(pics[k].positionX === limit[k]) {
            //     //スライドで移動する位置がリミットに達した時
            //      if(pics[k].positionX === this.slideDirection * this.picsWidthIncludeMargin) {

            //        pics[k].positionX = -(this.slideDirection) * (this.allWidth - this.picsWidthIncludeMargin * 2)

            //      } else {
            //        //2つめ以降の画像の戻す座標Xをセット
            //        pics[k].positionX -= this.slideDirection * (this.allWidth - this.picsWidthIncludeMargin)
            //      }

            //     pics[k].setAttribute("style", `transform: translateX(${pics[k].positionX}px)`)
            //   } else {

            //     /*進める処理*/

            //     //リミットしてない場合は画像(+左右マージン)幅分transitionをつけて進める
            //     pics[k].positionX += this.slideDirection * this.picsWidthIncludeMargin
            //     pics[k].setAttribute("style", `transition: all .5s; transform: translateX(${pics[k].positionX}px)`)
            //   }
            // }

            // flagStart = false
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

