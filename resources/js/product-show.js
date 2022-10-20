import {createApp, onMounted, ref} from 'vue/dist/vue.esm-bundler'
import iziToast from 'izitoast'
import 'izitoast/dist/css/iziToast.min.css'
import axios from 'axios'
createApp({
    setup(){
        const product = ref({
<<<<<<< HEAD
            id: null,
=======
            id: null,    
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
            quantity: 1
        })
        const incrementQuantity = ()=>{
            product.value.quantity += 1;
        }
        const decrementQuantity = ()=>{
            if(product.value.quantity <= 1) return
            product.value.quantity -= 1
<<<<<<< HEAD

=======
           
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        }
        const addToCart = async()=>{
            try{
            const request = await axios.post("/product/cart/", product.value)
                if(request.data.status === 200){
                    iziToast.success({
                        title:"Success",
                        message:request.data.message
                    })
                }
            }
            catch(error){
                iziToast.error({
                    title:"Failed",
                    message:request.data.error
                })
            }
        }
        onMounted(()=>{
            product.value.id = window.productId
        })
        return {
            product,
            incrementQuantity,
            decrementQuantity,
            addToCart
        }
    }
}).mount("#ProductShowVue")

