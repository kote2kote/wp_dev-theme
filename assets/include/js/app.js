//debag ※公開時はbody直下のhtmlとともに削除すること
new Vue({
  el: '#debag',
  data: {
    show: false,
    width: 0,
    height: 0,
    scroll: 0,
    innerHTML: '',
  },
  created: function() {
    window.addEventListener('keyup', this.key)
  },
  methods: {
    debagInfo: function() {
      setInterval(function(){
        this.width = window.innerWidth
        this.height = window.innerHeight
        this.scroll = this.$el.getBoundingClientRect().bottom + window.pageYOffset
        this.innerHTML = `w: ${this.width}px<br>
                          h: ${this.height}px<br>
                          s: ${this.scroll}px`
       }.bind(this), 100) 
    },
    key: function(e) {
      if (e.keyCode == 65) {
        //console.log(e.keyCode)
        this.show = !this.show
        this.debagInfo()
      }
    },
  }
})