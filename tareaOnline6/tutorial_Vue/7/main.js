"use strict"
var app = new Vue({
  el: '#app',
  data: {
      product: 'Socks',
      brand: 'Vue Mastery',
      selectedVariant: 0,
      details: ['80% cotton', '20% polyester', 'Gender-neutral'],
      onSale: true,
      variants: [
        {
          variantId: 2234,
          variantColor: 'green',
          variantImage:  'img/verde.jpg',
          variantQuantity: 10     
        },
        {
          variantId: 2235,
          variantColor: 'blue',
          variantImage: 'img/azul.jpg',
          variantQuantity: 0     
        }
      ],
      cart: 0
  },
  methods: {
      addToCart: function() {
          this.cart += 1
      },
      updateProduct: function(index) {  
          this.selectedVariant = index
          console.log(index)
      }
  },
  computed: {
      title() {
          return this.brand + ' ' + this.product  
      },
      image(){
          return this.variants[this.selectedVariant].variantImage
      },
      inStock(){
          return this.variants[this.selectedVariant].variantQuantity
      },
      estaEnVenta(){
        if(this.onSale){
          return this.brand +' '+this.product+' está en venta';
        }else{
          return this.brand +' '+this.product+' no está en venta';

        }
        
      }
  }
})