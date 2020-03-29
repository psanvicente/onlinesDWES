"use strict"
var app = new Vue({
  el: '#app',
  data: {
    product: 'Socks',
    image: 'img/verde.jpg',
    inStock: true,
    estilo1: "line-through",
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
    }
  }
})

