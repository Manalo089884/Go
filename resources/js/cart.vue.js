import {createApp, ref, onMounted, computed} from  'vue/dist/vue.esm-bundler'

createApp({
    setup(){
        const cartItems = ref([])
        const shippingFee = ref(120)
        const subTotal = computed(()=>{
           let t = 0;
            cartItems.value.forEach((item)=>{
                if(item.checked){
                    t += parseInt(item.sprice) * parseInt(item.quantity)
                }
            })
            return t
        })
        const totalWithShipppingFee = computed(()=>{
            if(subTotal.value != 0) return subTotal.value + shippingFee.value
            return 0
         })
        onMounted(()=>{
             window.cartItems.forEach(item => {
                    item.get_product.forEach((product)=>{
                        product.checked = false
                        product.quantity = item.quantity
                        cartItems.value.push(product)
                    })
             })
            
        })
        return{
            cartItems,
            subTotal,
            shippingFee,
            totalWithShipppingFee
        }
    }
}).mount("#CartVue")