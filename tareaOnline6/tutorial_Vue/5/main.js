"use strict"

var app = new Vue({
  el: '#app',
  data: {
    product: 'Socks',
    image: 'https://www.vuemastery.com/images/challenges/vmSocks-green-onWhite.jpg',
    inStock: true,
    details: ['80% cotton', '20% polyester', 'Gender-neutral'],
    variants: [
      {
        variantId: 2234,
        variantColor: 'green',
        variantImage: 'img/verde.jpg'
      },
      {
        variantId: 2235,
        variantColor: 'blue',
        variantImage: 'img/azul.jpg'
      }
    ],
    cart: 0
  },
  methods: {
    addToCart() {
      this.cart += 1
    },
    updateProduct(variantImage) {
      this.image = variantImage
    },
    decrementar(){
      if(this.cart>0){
        
      this.cart -=1;
      }
    }
  }
})

